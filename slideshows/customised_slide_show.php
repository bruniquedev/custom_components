<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>index_pro1</title>
<link rel="stylesheet" type="text/css" href="ionicons/css/ionicons.min.css" />
<style>
/*@font-face{
    font-family: "Myriad-Pro";  
    src: url(fonts/myriadpro/MyriadPro-Light.otf) format("truetype");
}
@font-face{
    font-family: "Myriad-Condit";  
    src: url(fonts/myriadpro/MYRIADPRO-CONDIT.OTF) format("truetype");
}

@font-face{
    font-family: "Myriad-Regular";  
    src: url(fonts/myriadpro/MYRIADPRO-REGULAR.OTF) format("truetype");
}
@import url(ionicons/css/ionicons.min.css);*/

/*This debugs for what's causing horizntal scroll, un comment to see
* {
  outline: 1px solid #f00 !important;
}*/

body{
    margin: 0px;
    padding: 0px;
    /*font-family: 'Lato', sans-serif;*/
        font-family: Myriad-Regular;
    font-size: 15px;
    color: #777777;
    line-height: 1.7em;
    font-weight: 400;
    background: #ffffff;
}

.top-nav-dashb {
    display: flex;
    background-color: #b30000;
    width: 100%;
    height: 50px;
    position: fixed;
    top: 0px;
    margin: 0;
    padding: 0;
    z-index: 10;
}




.center{
    text-align: center;
}

.margin_top{
  margin-top: 15px;
  margin-bottom: 10px;
}
.margin_top_50{
    margin-top: 50px;
}


.mySlides_G {display: none;}
.img_G {

background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 580px;
    width: 100%;
    margin: 0;
    padding: 0;
}

/* Slideshow container */
.slideshow-container_G {
  /*max-width: 1000px;*/
  max-width: 100%;
  position: relative;
  margin: auto;
}


/* Next & previous buttons */
.prev_G, .next_G {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next_G {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev_G:hover, .next_G:hover {
  background-color: rgba(0,0,0,0.8);
}



/* Caption text */
.text_G {
color: #111;
    font-size: 16px;
  padding: 8px 0px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;

  background: rgba(250,250,250,0.9);
    border-bottom: 4px solid #c44446;
}

.center{
text-align:center;  
}

/* Number text (1/3 etc) */
.numbertext_G {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot_G {
cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}


.active_G,.dot_G:hover {
  background-color: #717171;
}

/* Fading animation */
.fade_G {
  -webkit-animation-name: fade_G;
  -webkit-animation-duration: 1.5s;
  animation-name: fade_G;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade_G {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade_G {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev_G,.next_G,.text_G {font-size: 11px}
}



</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  
<section class="slide_show_format_G margin_top">
<div class="slideshow-container_G" id="slideshow-container_G">

<div class="mySlides_G fade_G">
  <div class="numbertext_G">1 / 3</div>
  <div class="img_G" style="background-image: url('img_5terre_wide.jpg');
    width:auto; height:460px;"></div>
  <div class="text_G">Caption Text</div>
</div>

<div class="mySlides_G fade_G">
  <div class="numbertext_G">2 / 3</div>
   <div class="img_G" style="background-image: url('img_mountains_wide.jpg');
    width:auto; height:460px;"></div>
  <div class="text_G">Caption Two</div>
</div>

<div class="mySlides_G fade_G">
  <div class="numbertext_G">3 / 3</div>
  <div class="img_G" style="background-image: url('img_nature_wide.jpg');
    width:auto; height:460px;"></div>
  <div class="text_G">Caption Three</div>
</div>

  <!-- Next and previous buttons -->
  <a class="prev_G" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next_G" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="center">
  <span class="dot_G" onclick="currentSlide(1)"></span> 
  <span class="dot_G" onclick="currentSlide(2)"></span> 
  <span class="dot_G" onclick="currentSlide(3)"></span> 
</div>
</section>



<script type="text/javascript">
  var slideIndex = 0;
let slidertimeout;
var slider_delay = 6000;// setTimeout to run after 6seconds
showSlides(slideIndex);

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides_G");
  var dots = document.getElementsByClassName("dot_G");
 
   if (typeof n === 'number'){//check if it's a number
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = 1}    
  //if (n < 1) {slideIndex = slides.length}
}else{
  //it's not a number
    slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}  
}

  //console.log("slideIndex : "+slideIndex);
  //console.log("n : "+n);

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active_G", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active_G";


// animation will start after page load
slidertimeout = setTimeout(() => {
    showSlides();//call this function to run after 6seconds(6000)
}, slider_delay);

}

function plusSlides(n) {
   //stop transition to nxt
clearTimeout(slidertimeout);
  showSlides(slideIndex += n);
}

function currentSlide(n) {
     //stop transition to nxt
clearTimeout(slidertimeout);
  showSlides(slideIndex = n);
}

/*onmouseover
onmouseout*/

 document.getElementById("slideshow-container_G").addEventListener('mouseover', function (){
   //console.log("onmouseover");
  clearTimeout(slidertimeout);
  }, false);
/*document.getElementById("slideshow-container_G").addEventListener('mouseout', function (){
   //console.log("onmouseout");
  showSlides();
  }, false);*/  

</script>

</body>
</html>