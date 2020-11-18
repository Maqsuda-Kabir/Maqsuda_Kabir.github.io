  
<!DOCTYPE html>
<!--
File Name:participants.html.php
Date: 03/17/20
Programmer: Maqsuda Kabir
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participants</title>
    <img src="images/triathlonlogo.jpg" alt="Triathlon Logo" id="logo">

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

<body>
    <header>
  <div class="plate">
  <p class="script"><span>  </span></p>
  <p class="shadow text1">Ace In The Hole</p>
  <p class="shadow text1">Multisport Events</p>
  <p class="script"><span>  </span></p>
</div>
 </header>   
     
    <img src="images/tripletry.jpg" width="1900" height="450" alt="Triathlon" id="hero image">
    <br>

    <main>
     
<h2>Participants</h2>
            

        <br>
        <h3>Athletes</h3>
        <p>Athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds are welcome!.</p>
            
        <h3>Volunteers</h3>
        <p> All Volunteers  welcome!.</p>
           

    </main>

    <?php include 'footer.inc.html.php';?>

</body>

</html>
