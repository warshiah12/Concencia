<?php
    include 'config.php';
    include_once 'navigation/header.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQq7Ml8WsgGqQYGDeL/j8XgO8D/Pf0YoJA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--/-CSS Styling-->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>

    <!--main box containing all the content-->
    <div class="main_container">
        
        <div class="introduction">
            <!--contains the introduction image-->
                <img src="images/concencia.jpg" alt="intro_pic" id="intro_pic">
                <!---contains the introduction of the website with a button-->
                <div class="intro_text">
                    <h2>Welcome to Concencia: Your Focused Study Space</h2>
                    <p> Concencia is a digital space designed exclusively for students who grapple with distractions while studying. We understand that maintaining focus can be challenging, especially in a noisy environment. That's why we have invested our time and effort to create Concencia, a dedicated space just for you.</p>
                    <h3>What’s Stopping You?</h3>
                    <p> Join us on this journey toward enhanced productivity and concentration. Let's achieve more together!</p>
                    <button class="expl_btn" onclick="scrollTestimony()">Explore More</button>
                </div>
        </div>
    </div>

    <!---Features of the website container-->
    <div class="features_container">
        <!--a short intro talking about features-->
        <div class="feature_info">
            <div class="feature_div">
                <hr class="feat_hr_left">
                <span class="feat_text">Features</span>
                <hr class="feat_hr_right">
            </div>
            <p>Our mission? To help you reclaim your focus, boost productivity, and achieve your academic goals. Ready to dive in? Let's see what Concencia has to offer: </p>
        </div>
        &nbsp;
        <!--showcasing the features-->
        <div class="features_icon">

        <!--first feature-->
            <div class="feature">
                <img src="images/study_vid.svg" alt="videos" id="videos">
                <p> Coviewing </p>
            </div>
        <!--second feature-->
            <div class="feature">
                <img src="images/timer.svg" alt="clock" id="clock">
                <p> Timer</p>
            </div>
        <!--third feature-->
            <div class="feature">
                <img src="images/notes.svg" alt="note_take" id="note_take">
                <p> Notes</p>
            </div>
        <!--fourth feature-->
            <div class="feature">
                <img src="images/tasklist.svg" alt="task_list" id="task_list">
                <p> To-do </p>
            </div>
        <!--fifth feature-->
            <div class="feature">
                <img src="images/responsive.svg" alt="resp" id="resp">
                <p> Adaptability </p>
            </div>
        </div>
    </div>

    <!--productivity section-->
    <div class="productivity">
        <img src="images/banner.svg" alt="banner" id="banner">
        <div class="prod_text">
            <h2>Productivity Tips</h2>
            <p>Productivity tips are strategies to help you get more done in less time and with less effort. They can involve techniques for planning your day, managing distractions, and prioritizing tasks. By incorporating these tips into your routine, you can boost your efficiency, achieve your goals faster, and free up time for the things you enjoy.</p>
        </div>
    </div>

    <!--tips section-->
    <div class="tips_container">
        <!---tip 1-->
        <div class="tip1">
            <img src="images/todo.jpg" alt="todo">
            <div class="tip_text">
                <h3>Eisenhower Matrix</h3>
                <p>Divide your tasks into categories and free up time for the things you enjoy. One effective productivity method is the Eisenhower Matrix, which categorizes tasks as urgent and important, important but not urgent, and not important but urgent. This helps you focus on what truly matters and avoid getting bogged down by less critical tasks. <a href="https://asana.com/resources/eisenhower-matrix">View More...</a></p>
            </div>
        </div>
        <!--tip 2-->
        <div class="tip2">
            <div class="tip_text2">
                <h3>Pomodoro Technique </h3>
                <p>Break your work into two short intervals to avoid burnout, and take energizing breaks in between to come back feeling refreshed and ready to tackle the next part.  This simple strategy can significantly improve your focus and overall output.
                <a href="https://pomofocus.io/">View More...</a></p>
            </div>
            <img src="images/pomodoro.jpg" alt="pomodoro">
        </div>
    </div>

    <!--testimonials section-->
    <div class="testimonials" id="testimony">
        <div class="test_heading">
            <hr class="testi_hr_left">
            <span class="testi_text">Testimonials</span>
            <hr class="testi_hr_right">
        </div>
        <div class="test_info">
            <h3>Discover How Concencia Has Transformed Lives</h3>
            <p>At Concencia, we take pride in the impact we have made on individuals' lives. Don't just take our word for it—see what others have to say about how our focused study space has helped them achieve their goals.</p>
        </div>
    </div>

    <!---Testimonial slider-->
    <section id="user_testimonial" class="section_padding">
        <div class="test_container">
            <div class="test_row">
                <div class="col-md-12">
                    <div class="testimonial_slider_area text-center owl-carousel">
                        <!--first user-->
                        <div class="test-card">
                            <div class="user-img">
                                <img src="images/user1.jpg" alt="user_1">
                            </div>
                            <h5>Abigail Rose</h5>
                            <span>Creative Designer</span>
                            <p class="feedback">
                            I just wanted to say how impressed I was with your website!  It's a one-stop shop for everything I need to stay productive.
                            </p>
                            <h6 class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </h6>
                        </div>

                        <!--second user-->
                        <div class="test-card">
                            <div class="user-img">
                                <img src="images/user2.jpg" alt="user_2">
                            </div>
                            <h5>Natalie Clair</h5>
                            <span>Front-end Developer</span>
                            <p class="feedback">
                            Concencia is awesome! It's like having a whole productivity cheerleader in my pocket especially for visual learners.
                            <h6 class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </h6>
                        </div>

                        <!--third user-->
                        <div class="test-card">
                            <div class="user-img">
                                <img src="images/user3.jpg" alt="user_3">
                            </div>
                            <h5>Ashton Blake</h5>
                            <span>Web Developer</span>
                            <p class="feedback">
                            As a web developer, I've had the pleasure of working with many platforms, but my experience with Concencia stands out. 
                            
                            </p>
                            <h6 class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </h6>
                        </div>

                        <!--fourth user-->
                        <div class="test-card">
                            <div class="user-img">
                                <img src="images/user4.jpg" alt="user_4">
                            </div>
                            <h5>Baxter Thomas</h5>
                            <span>Professor</span>
                            <p class="feedback">
                            Concencia is a commendable tool for distracted learners, offering a range of features to enhance productivity.
                            </p>
                            <h6 class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </h6>
                        </div>

                        <!--fifth user-->
                        <div class="test-card">
                            <div class="user-img">
                                <img src="images/user5.jpg" alt="user_5">
                            </div>
                            <h5>Sophia Winchester</h5>
                            <span>Brand Manager</span>
                            <p class="feedback">
                            The website’s mission to help users regain focus and productivity is clear and resonates well with the target audience.
                            </p>
                            <h6 class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </h6>
                        </div>

                        <!--sixth user-->
                        <div class="test-card">
                            <div class="user-img">
                                <img src="images/user6.jpg" alt="user_6">
                            </div>
                            <h5>Liam Ryland</h5>
                            <span>Marketing Manager</span>
                            <p class="feedback">
                            Navigating through Concencia was seamless, intuitive and its structured content made it easy to find resources.
                            </p>
                            <h6 class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer section-->
        <div class="footer_container">
            <div class="col1">
                <h3>Social Media Platforms</h3>
                <ul class="socials">
                    <li>
                        <a href="https://www.facebook.com/">
                            <i class="fa-brands fa-facebook" style="color: #1c6aa6;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/?lang=en">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/">
                            <i class="fa-brands fa-square-instagram" style="color: #7e119c;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/">
                            <i class="fa-brands fa-linkedin" style="color: #2857a9;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/">
                            <i class="fa-brands fa-youtube" style="color: #cd1818;"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col2">
                <h1><a href="welcome.php">CONCENCIA</a></h1>
                <p>A serene space for study concentration!</p>
            </div>
            <div class="col3">
                <h3>Get in touch!</h3>
                <form>
                    <div class="user-input">
                        <input type="text" placeholder="Write your comment" />
                        <button type="submit">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    <!--Testimonial slider scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

    <script>
        function scrollTestimony() {
            document.getElementById('testimony').scrollIntoView();
        }
    </script>
    <script>
        $(".testimonial_slider_area").owlCarousel({
            autoplay: true,
            slideSpeed: 1000,
            item: 3,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
            margin: 20,
            width: 200,
            dots: true,
            responsive: {
                200:{
                    items: 1
                },
                320:{
                    items: 1
                },
                767:{
                    items: 2
                },
                600:{
                    items:2
                },
                1000:{
                    items: 3
                }
            }
        });
    </script>
    

</body>
</html>