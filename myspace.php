<?php

session_start();
include 'config.php';
 
//verifying if user is logged in or not. If logged in, it will redirect to 'myspace.php' else 'login.php'
if(!isset($_SESSION['loggedin']) &&!isset($_SESSION['google_loggedin'])){
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concencia - A serene space</title>

    <!---Bootstrap css for testimonial section responsiveness-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!--css file for Owl Carousel, a jQuery plugin for making carousels-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <!--Icons stylesheet-->
    <script src="https://kit.fontawesome.com/52fc684109.js" crossorigin="anonymous"></script>
    
    <!--/-CSS Styling-->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!--main container-->
    <div class="main_vid_container">

        <header>
            <div class="web_logo"><a href="welcome.php">
                <img src="images/concencia_logo.png" alt="logo" id="logo">
                <a href="welcome.php"><img src="images/CONCENCIA.png" alt="web_name" id="website_name"></a>
                </a>
            </div> <!--for website logo-->
        </header>

        <!--first video container-->
        <div class="slide_container active">
            <div class="vid_slide">
                <video class="video" id="vid3" src="videos/40_min.mp4" autoplay loop></video>
            </div>
        </div>

        <!--second video container-->
        <div class="slide_container">
            <div class="vid_slide">
                <video class="video" id="vid1" src="videos/45_min.mp4" muted type="video/mp4" autoplay loop></video>
            </div>
        </div>

        <!--third video container-->
        <div class="slide_container">
            <div class="vid_slide">
                <video class="video" id="vid2" src="videos/30_min.mp4" muted autoplay loop></video>
            </div>
        </div>

        <div id="next" onclick="next()"> > </div>
        <div id="prev" onclick="prev()"> < </div>

        <!---Pomodoro container-->

        <div class="pom_container">
                
            <div class="panel">
                    <p id="work">work</p>
                    <p id="break">break</p>
            </div>

            <div class="timer">
                <div class="rectangle">
                    <div class="time">
                        <div class="controls">
                            <button id="start" onclick="start()"><i class="fa-solid fa-play" style="color: #fff;"></i></button>
                            <a id="reset" href="myspace.php"><i class="fa-solid fa-arrow-rotate-left" style="color: #fff;"></i></a>
                        </div>
                        <p id="minutes"></p>
                        <p>:</p>
                        <p id="seconds"></p>
                    </div>
                </div>
            </div>
        </div>

        <!--Note container-->
        <div class="notes_container">
            <button class="note_btn"><img src="images/edit.png">Add Notes</button>
            <div class="note_box">
            </div>
        </div>

        <!--Task list container-->
        <div class="task_container">
            <div class = "task-list">
                <div class="add_text">
                    <input type="text" id="user-task" placeholder="Add a task">
                    <button onclick ="NewTask()">
                        Add
                    </button>
                </div>
                <ul id="taskListBox">
                <!--<li class="item_checked">Task 1</li>
                <li>Task 2</li>
                <li>Task 3</li>-->
                </ul>
            </div>
        </div>

    </div>

    <script src="js/myspace.js" defer></script>
</body>
</html>