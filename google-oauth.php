<?php
// Initialize the session
session_start();

include 'config.php'; // Include your database connection file

// Update the following variables with YOUR Google OAuth credentials
$google_oauth_client_id = '38844111109-73j7grg8dndahjl3guduam0t60508ckr.apps.googleusercontent.com';
$google_oauth_client_secret = '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';
$google_oauth_redirect_uri = 'http://localhost/concen_Web/google-oauth.php'; //Everyone should change this!! Locate your own google-oauth.php file
$google_oauth_version = 'v3';

// If the user is not already logged in via Google and the code parameter is present
if (!isset($_SESSION['google_loggedin']) && isset($_GET['code']) && !empty($_GET['code'])) {
    // Execute cURL request to retrieve the access token
    $params = [
        'code' => $_GET['code'],
        'client_id' => $google_oauth_client_id,
        'client_secret' => $google_oauth_client_secret,
        'redirect_uri' => $google_oauth_redirect_uri,
        'grant_type' => 'authorization_code'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://accounts.google.com/o/oauth2/token');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($response, true);

    // Make sure access token is valid
    if (isset($response['access_token']) && !empty($response['access_token'])) {
        // Execute cURL request to retrieve the user info associated with the Google account
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/oauth2/' . $google_oauth_version . '/userinfo');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $response['access_token']]);
        $response = curl_exec($ch);
        curl_close($ch);

        $profile = json_decode($response, true);

        // Making sure if the profile data exists
        if (isset($profile['email'])) {
            // Authenticate the user
            session_regenerate_id();
            $_SESSION['google_loggedin'] = TRUE;
            $_SESSION['google_email'] = $profile['email']; // Storing user's email in session variable
            $_SESSION['fullname'] = $profile['name']; // Storing user's full name in session variable

            // Store the profile picture URL in the session if it's available
            if (isset($profile['picture'])) {
                $_SESSION['google_picture'] = $profile['picture'];

                // Check if the user's email is already in the database
                $sql = "SELECT * FROM users WHERE email = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $profile['email']);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // If the user's email is found, update the user's profile picture in the database
                    $sql = "UPDATE users SET avatar = ? WHERE email = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ss", $profile['picture'], $profile['email']);
                    $stmt->execute();

                    // Fetch the user's id from the database and store it in the session
                    $row = $result->fetch_assoc();
                    $_SESSION['id'] = $row['id'];
                } else {
                    // If the user's email is not found, insert a new row into the users table
                    $sql = "INSERT INTO users (name, email, avatar) VALUES (?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("sss", $profile['name'], $profile['email'], $profile['picture']);
                    $stmt->execute();

                    // Set the session id to the id of the newly inserted user
                    $_SESSION['id'] = $conn->insert_id;
                }

                $stmt->close();
            }
            $_SESSION['google_loggedin'] = true;
            $_SESSION['login_type'] = 'google';
            // Redirect to the main page
            header('Location: welcome.php');
            exit;
        } else {
            exit('Could not retrieve profile information! Please try again later!');
        }
    } else {
        exit('Invalid access token! Please try again later!');
    }
} else {
    // Define params and redirect to Google Authentication page
    $params = [
        'response_type' => 'code',
        'client_id' => $google_oauth_client_id,
        'redirect_uri' => $google_oauth_redirect_uri,
        'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
        'access_type' => 'offline',
        'prompt' => 'consent'
    ];
    header('Location: https://accounts.google.com/o/oauth2/auth?' . http_build_query($params));
    exit;
}