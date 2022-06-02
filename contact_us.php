<link href="css/styel1.css" rel="stylesheet">

<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/a120e0cde1.js" crossorigin="anonymous"></script>
</head>
<body>

<br><br|><br><br|><br><br|>

<!------Contact Me-------->

<section class="location">

    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3459.3567353623885!2d30.983405315111295!3d-29.88281998194135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7aa29b23b7f0f%3A0x886c965fe802a5cc!2sAdrenergy%20Research%20Innovations!5e0!3m2!1sen!2sza!4v1644476412599!5m2!1sen!2sza" width="600" height="450" style="border:0;" 
        allowfullscreen="" loading="lazy">
    </iframe>

</section>

<section class="contact-us">

    <div class="row">
        <div class="block">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>15 Sphiwe Zuma Ave, Umbilo</h5>
                    <p>Durban, South Africa, SA</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>4
                    <h5>+27 8651236545</h5>
                    <p>Monday to Saturday, 10AM to 6PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>support@saints.co.za</h5>
                    <p>Contact me using this email</p>
                </span>
            </div>
        </div>

        <div class="block">
            <form action="https://formspree.io/f/mwkyldjk" method="POST">
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="text" name="email" placeholder="Enter your email address" required>
                <input type="text" name="subject" placeholder="Enter your subject" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <button type="submit" class="cust-btn">Send</button>
            </form>
        </div>
    </div>

</section>

<!-----course----------->

<!--<section class='footer'>
    <h1>About Jhavaard's background</h1>
    <p>This website was created by Jhavaard
       Hariharan. Have a good day.
    </p>
</section> -->

<!------JavaScript for Toggle Menu----->
<script>

    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }

    function hideMenu(){
        navLinks.style.right = "-200px";
    }

</script>
</body>

<?php
include('footer.php');
?>

</html>

