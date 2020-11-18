<!DOCTYPE html>
<!--
File Name:template.html.php
Date: 03/17/20
Programmer: Maqsuda Kabir
-->

<html lang="en">

<head>
    <img src="images/triathlonlogo.jpg" alt="Triathlon Logo" id="logo">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ace in the Hole MultiSport Event</title>
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

    <!--Include Script -->
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
<div class="plate">
  <p class="script"><span>  </span></p>
  <p class="shadow text1">Ace In The Hole</p>
  <p class="shadow text1">Multisport Events</p>
  
  
  <p class="script"><span>  </span></p>
</div>
</header>    
<img src="images/tripletry.jpg" width="1960" height="450" alt="Triathlon" id="hero image">
<body>
    <main>
        <h2>Event Overview</h2>
        <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. This year events will be held on March 28th and 29th, 2020. Participants are athletes and volunteers from across the nation. All levels of athletic abilities and volunteers are welcome. Come to experience your first race or come to compete to win, but make sure you come to have fun!. 
        </p>
        <h3>Event Saturday</h3>
        <p>Starting Times</p>
        <ul>
            <li>Long Course Triathlon
             7:00 AM</li>
            <li>Olympic Triathlon
             7:30 AM</li>
            <li>10K
             7:15 AM</li>
            <li>Half Marathon
             7:15 AM</li>
         </ul>
         <h3>Event Sunday</h3>
         <p>Starting Times</p>
         <ul>
            <li>Sprint Triathlon
                8:00 AM</li>
            <li>Try-a-Tri
                8:20 AM</li>
            <li>Splash n Dash
                12:00 PM</li>
          </ul>
        <h3>Slideshow Gallery</h3>
        <!-- Slideshow container -->
        <ul id="slides">
            
            <li class="slide 1"><img src="images/usatriathlon.jpg" width="1465" height="250" alt="Triathlon"></li>
                <li class="slide 2"><img src="images/runners.jpg" width="1465" height="250" alt="Triathlon"></li>
                    <li class="slide 3"><img src="images/marathon.jpg" width="1465" height="250" alt="Triathlon"></li>
                        <li class="slide 4"><img src="images/tripletry.jpg" width="1465" height="250" alt="Triathlon"></li>
                            <li class="slide 5"><img src="images/triathlon2.jpg" width="1465" height="250" alt="Triathlon"></li> 
                           
        </ul>
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
