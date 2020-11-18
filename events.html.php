<!DOCTYPE html>
<!--
File Name:events.html.php
Date: 02/16/20
Programmer: Maqsuda Kabir
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <img src="images/triathlonlogo.jpg" width="120" height="90" alt="Triathlon Logo" id="logo">
    <nav class="mobile-nav">
        <div class="menu-btn" id="menu-btn">
            <div></div>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="responsive-menu">
            <ul style="list-style-type:none">
                <li><a href="events.html.php">Events</a></li>
                <li><a href="participants.html.php">Participants</a></li>
                <li><a href="registrationform.html.php">Registration</a></li>
                <li><a href="contactform.html.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/template.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

    <script type="text/javascript">
        jQuery(function($) {
            $('.menu-btn').click(function() {
                $('.responsive-menu').toggleClass('expand')
            })
        })
    </script>

    <a class="weatherwidget-io" href="https://forecast7.com/en/43d80n120d55/oregon/" data-label_1="OREGON" data-label_2="WEATHER" data-mode="Forecast" data-theme="original">OREGON WEATHER</a>
    <script>
        ! function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'weatherwidget-io-js');
    </script>
</head>

<header>
    <h1>Ace in the Hole MultiSport Events</h1>
</header>

<img src="images/tripletry.jpg" width="1900" height="450" alt="Triathlon" id="hero image">
<br>

<body>
    <main>
        <h2>Event Overview</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <h3>Event1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
        </ul>

        <h3>Event2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
        </ul>
        <h3>Slideshow Gallery</h3>
        <!-- Slideshow container -->
        <ul id="slides">
            <li class="slide 1"><img src="images/usatriathlon.jpg" width="950" height="250" alt="Triathlon"></li>
                <li class="slide 2"><img src="images/runners.jpg" width="950" height="250" alt="Triathlon"></li>
                    <li class="slide 3"><img src="images/marathon.jpg" width="950" height="250" alt="Triathlon"></li>
                        <li class="slide 4"><img src="images/tripletry.jpg" width="950" height="250" alt="Triathlon"></li>
                            <li class="slide 5"><img src="images/triathlon2.jpg" width="950" height="250" alt="Triathlon"></li></ul>
        
        <button class="controls" id="pause">Pause</button>
        <button class="controls" id="previous">Previous</button>
        <button class="controls" id="next">Next</button>

        <script>
            var slides = document.querySelectorAll('#slides .slide');
            var currentSlide = 0;
            var slideInterval = setInterval(nextSlide, 2000);


            function nextSlide() {
                goToSlide(currentSlide + 1);
            }

            function previousSlide() {
                goToSlide(currentSlide - 1);
            }

            function goToSlide(n) {
                slides[currentSlide].className = 'slide';
                currentSlide = (n + slides.length) % slides.length;
                slides[currentSlide].className = 'slide showing';
            }

            var playing = true;
            var pauseButton = document.getElementById('pause');

            function pauseSlideshow() {
                pauseButton.innerHTML = 'Play';
                playing = false;
                clearInterval(slideInterval);
            }

            function playSlideshow() {
                pauseButton.innerHTML = 'Pause';
                playing = true;
                slideInterval = setInterval(nextSlide, 2000);
            }

            pauseButton.onclick = function() {
                if (playing) {
                    pauseSlideshow();
                } else {
                    playSlideshow();
                }
            };
            var next = document.getElementById('next');
            var previous = document.getElementById('previous');

            next.onclick = function() {
                pauseSlideshow();
                nextSlide();
            };
            previous.onclick = function() {
                pauseSlideshow();
                previousSlide();
            };
        </script>

        <?php include 'footer.inc.html.php';?>

    </main>
</body>

</html>
