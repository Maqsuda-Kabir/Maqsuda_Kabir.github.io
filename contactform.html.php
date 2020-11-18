<!DOCTYPE html>
<!--
File Name:contactform.html.php
Date: 02/16/20
Programmer: Maqsuda Kabir
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <img src="images/triathlonlogo.jpg" width="125" height="95" alt="Triathlon Logo" id="logo">
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
</head>

