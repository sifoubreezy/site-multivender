<?php

include('header.php');
session_start();
?>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/product style.css">
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<title>MultivendorWeb</title>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="image/backgroud/sale.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <img src="image/backgroud/just.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <img src="image/backgroud/food.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<!--Flexbox content Starting point-->
<section class="gallery-links">
         
    <label class="gallery-img">
            <div class="border_3">
                <div class="containerss">
                    <img class="image" src="image/sale.png" title="click the image below to discuss how u felt" id="hairstyle1"   onclick="hair1()">
                    <label class="Text1"> Our Sales </label>
                    <div class="middle">
                       <a href="sales and deals.php"><input class="mylink" type="button" value="QUICK VIEW"></a>
                         </div>
                  </div>
            </div>
</label>
  
    <label class="gallery-img">
        <div class="containerss">
            <div class="border_3">
                    <img class="image" src="image/food and resturants.png" title="click the image below to discuss how u felt" id="hairstyle1"  onclick="hair1()">
                    <label class="Text1">  Food and Resturants </label>
                    <div class="middle">
                       <a href="Classic Rolex cap.php"><input class="mylink" type="button" value="QUICK VIEW" ></a>
                         </div>
                      </div>
                </div>
    </label>
  
    
    <label class="gallery-img">
        <div class="containerss">
            <div class="border_3">
                    <img class="image" src="image/event.jpg" title="click the image below to discuss how u felt">
                    <label class="Text1">  Event </label>
                    <div class="middle">
                      <a href="Classic Top Native.php"><input class="mylink" type="button" value="QUICK VIEW" ></a>
                         </div>
                      </div>
                </div>
    </label>
    
 
  
    <label class="gallery-img">
        <div class="containerss">
            <div class="border_3">
                    <img class="image" src="image/stars-155652_960_720.png" title="click the image below to discuss how u felt">
                    <label class="Text1"> Favourite </label>
                    <div class="middle">
                        <a href="#"><input class="mylink" type="button" value="QUICK VIEW" ></a>
                         </div>
                      </div>
                </div>
    </label>

    <label class="gallery-img">
        <div class="containerss">
            <div class="border_3">
                    <img class="image" src="image/competitors.jpg" title="click the image below to discuss how u felt">
                    <label class="Text1">Competitors </label>
                    <div class="middle">
                        <a href="#"><input class="mylink" type="button" value="QUICK VIEW" ></a>
                         </div>
                      </div>
                </div>
    </label>


</section>

<!--Ending Point-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--Footer Section Starting-->

<!--Footer Section End-->

    </body>
</body>
</html>