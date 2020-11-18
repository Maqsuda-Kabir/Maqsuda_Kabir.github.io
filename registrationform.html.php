<!DOCTYPE html>
<!--
File Name:registrationform.html.php
Date: 02/16/20
Programmer: Maqsuda Kabir
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
                <li><a href="registrationform.html.php">Registration Form</a></li>
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

<body>
    <header>
        <h1>Ace in the Hole MultiSport Events</h1>
    </header>

    <main>
        <h2>Registration Form</h2>
        <form class="registration-form" action="registrationform.html.php" method="post">
            <input type="text" name="name" placeholder="First name">
            <input type="text" name="name" placeholder="Last name">
            <input type="text" name="age" placeholder="Age">
            <input type="tel" name="phone" placeholder="Phone">
            <input type="text" name="mail" placeholder="Email">
            <input type="tel" name="emergencyphone" placeholder="Emergency Phone">
            <input type="text" name="contact" placeholder="Emergency Contact">
            <h6>Hold down the Ctrl(windows)/Command(Mac)button to select one option(Female, Male or Other).</h6>
            <input type="text" name="gender" placeholder="Gender">
            
                
              
            <form method="post" action="http://webdevbasics.net/scripts/demo.php">    
                <select name="gender"> 
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Other</option>
                </select>
                
                <h6>Hold down the Ctrl(windows)/Command(Mac)button to select one option(Event1 or Event2).</h6>
                <input type="text" name="events" placeholder="Events">
                
                    <select name="events">
                        <option value="event1">Event1</option>
                        <option value="event2">Event2</option>
                    </select>
                    <br>
                    <input type="text" name="accommodation" placeholder="Accommodation">

                    <h6>Hold down the Ctrl(windows)/Command(Mac)button to select one option(Athlete or Volunteer).</h6>
                    <input type="text" name="participants" placeholder="Participants">
                  
              
                    <select name="participants">
                        <option value="athlete">Athlete</option>
                        <option value="volunteer">Volunteer</option>
                    </select>
                    <br>
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="mycomments" rows="5" cols="19" placeholder="Comments"></textarea>
                    <button type="submit" name="submit">Submit</button>
                </form>
               </form>
        
            
        
        

    <?php if (isset($_POST[ 'submit'])) { $name=$ _POST[ 'name']; $name=$ _POST[ 'name']; $name=$ _POST[ 'age']; $name=$ _POST[ 'phone']; $name=$ _POST[ 'mail']; $name=$ _POST[ 'emergency phone']; $name=$ _POST[ 'contact']; $name=$ _POST[ 'gender']; $name=$ _POST[ 'events']; $name=$ _POST[ 'accommodation']; $name=$ _POST[ 'participants']; $subject=$ _POST[ 'subject']; $comment=$ _POST[ 'comments']; $mailTo="maqsuda.kabir@pcc.edu" ; $headers="From: " .$mailFrom; $txt="You have received an e-mail from " .$name. ".\n\n".$comments; mail($mailTo, $subject, $txt, $headers); header( "Location: index.php?mailsend"); } ?>

    <?php include 'footer.inc.html.php';?>
            
          
    </main>
    
</body>

</html>
