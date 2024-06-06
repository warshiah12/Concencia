<?php
session_start();
include 'config.php';

//Redirect to login page if the user is not logged in
if (!isset($_SESSION['SESSION_EMAIL']) && !isset($_SESSION['google_email']) && !isset($_SESSION['google_loggedin'])) {
    header("Location: index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concencia - A serene space</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/52fc684109.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <div class="web_logo"><a href="welcome.php">
            <img src="images/concencia_logo.png" alt="logo" id="logo">
           <a href="welcome.php"><img src="images/CONCENCIA.png" alt="web_name" id="website_name"></a>
        </a></div> <!--for website logo-->

        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-btn">
            <i class="fa-solid fa-bars"></i>
            <i class="fa-solid fa-xmark"></i>
        </label>

        <nav class="navigation-bar">
            <ul>
                <li><a href="welcome.php">HOME</a></li>
                <li><a href="myspace.php">MY SPACE</a></li>
                <li><a href="welcome.php">ABOUT</a></li>
                <li><a href="logout.php">LOGOUT</a></li>

                <!--Profile display-->
                <?php
                $row = null;

                //fetching user data if logged in
                if (isset($_SESSION['google_loggedin']) || isset($_SESSION['email'])){
                    $email = isset($_SESSION['SESSION_EMAIL']) ? $_SESSION['SESSION_EMAIL'] : $_SESSION['google_email'];
                    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

                    if (mysqli_num_rows($query) > 0){
                        $row = mysqli_fetch_assoc($query);
                    }
                }

                
                // Checking if the user is logged in with google or normal email
                if (isset($_SESSION['google_loggedin'])) {
                    echo '<div class="profile-container">';
                    echo '<p> USER </p>';
                    // Display the Google profile image for google logged in users
                    echo '<li><img src="' . $_SESSION['google_picture'] . '" alt="Profile Image" style="width: auto; height: auto; border-radius: 50px; margin-left: 2vw; margin-top: -1vh;"></a></li>';
                } 
                else {
                    echo '<div class="profile-container">';
                    echo '<p> USER </p>';
                    // Display a default profile image for non-google logged users
                    echo '<li><img src="images/default_profile.png" alt="Profile Image" style="width: auto; height: auto; margin-left: 2vw; margin-top: -1vh;"></a></li>'; //default image
                    echo '</div>';
                }
                ?>
            </ul>
        </nav>
    </header>
    
</body>
</html>