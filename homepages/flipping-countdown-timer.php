<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>home 1</title>
  <link rel="stylesheet" type="text/css" href="ionicons/css/ionicons.min.css" />
<style>
@font-face{
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
@import url(ionicons/css/ionicons.min.css);

body{ 
   /*background-color:#141448;*/
  /*
   background-image:url(../images/bg2.jpg);*/
     font-family: Myriad-Regular;
     padding: 0;
    margin: 0;
      /*font: 400 0.875rem/1.375rem Myriad-Regular;*/
 }


/*https://www.youtube.com/watch?v=x00P_1meF6c*/



/* ========================coloring social media icons==============================
https://www.w3schools.com/howto/howto_css_social_media_buttons.asp*/




.ion:hover {
    opacity: 0.7;
}

.ion-social-facebook {
  background: #3B5998;
  color: white;
}

.ion-social-twitter-outline {
  background: #55ACEE;
  color: white;
}

.ion-android-mail{
  background: #55ACEE;
  color: white;

}

.fa-google {
  background: #dd4b39;
  color: white;
}

.ion-social-linkedin-outline {
  background: #007bb5;
  color: white;
}

.ion-social-youtube-outline {
  background: #bb0000;
  color: white;
}

.ion-social-instagram,.ion-social-instagram-outline {
  background: #125688;
  color: white;
}

.ion-social-whatsapp-outline{
    background: #04AA6D;
  color: white; 
}

.ion-social-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}




</style>
</head>
<body>  


<div class="main-header-eui">
<div class="header-eui">
<div class="header-content-eui"> 

<div class="nav-content-eui"> 
<div class="main-navcontent-eui">

<!--item 1-->
<div>
 <div class="item-content-eui">
   <img  class="image-icon-eui _img_eui" src="images/van.png.slim.webp" alt="Free shipping">  
   <div class="sub-contents-eui">
       <div>
       <div class="col-label-eui content-label-eui"><span>Free shipping</span></div>
       <div class="col-label-eui content-label-eui-2"><span>On all orders</span></div>
   </div>
       </div>

<div class="_timer-col tm-1">
    <div class="_timer-label">Time left today</div>
</div>
<div class="_timer-col _timer-container tm-2">
    <div class="_timer-wrapper">
        <!--hours-->
    <ul class="_timer-hours" style="margin-right:3px">
        <li class="_hours-value-a">      
        <div class="segment-display-top">0</div>
       <div class="segment-display-bottom">0</div>
       <div class="segment-overlays">
       <div class="segment-overlay-top">0</div>
       <div class="segment-overlay-bottom">0</div>
       </div></li>
    </ul>
    <ul class="_timer-hours" style="margin-right:0">
        <li class="_hours-value-b">      
        <div class="segment-display-top">0</div>
       <div class="segment-display-bottom">0</div>
       <div class="segment-overlays">
       <div class="segment-overlay-top">0</div>
       <div class="segment-overlay-bottom">0</div>
       </div>
   </li>
    </ul>
    <div class="_time-separator">:</div>
    <!--/hours-->

    <!--minutes-->
    <ul class="_timer-minutes" style="margin-right:3px">
        <li class="_minutes-value-a">
        <div class="segment-display-top">0</div>
       <div class="segment-display-bottom">0</div>
       <div class="segment-overlays">
       <div class="segment-overlay-top">0</div>
       <div class="segment-overlay-bottom">0</div>
       </div> 
        </li>
    </ul>
      <ul class="_timer-minutes" style="margin-right:0px">
        <li class="_minutes-value-b">
        <div class="segment-display-top">0</div>
       <div class="segment-display-bottom">0</div>
       <div class="segment-overlays">
       <div class="segment-overlay-top">0</div>
       <div class="segment-overlay-bottom">0</div>
       </div>
        </li>
    </ul>
    <div class="_time-separator">:</div>
    <!--/minutes-->

   <!--seconds-->
    <ul class="_timer-seconds" style="margin-right:3px">
    <li class="_seconds-value-a">
        <div class="segment-display-top">0</div>
       <div class="segment-display-bottom">0</div>
       <div class="segment-overlays">
       <div class="segment-overlay-top">0</div>
       <div class="segment-overlay-bottom">0</div>
       </div>
    </li>
   </ul> 
       <ul class="_timer-seconds" style="margin-right:0px">
    <li class="_seconds-value-b">
       <div class="segment-display-top">0</div>
       <div class="segment-display-bottom">0</div>
       <div class="segment-overlays">
       <div class="segment-overlay-top">0</div>
       <div class="segment-overlay-bottom">0</div>
       </div>
    </li>
   </ul> 
   <!--/seconds-->

    </div>
</div>

 </div>   
</div>
<!--/item 1-->

<span class="separator-eui"></span>

<!--item 1-->
<div>
 <div class="item-content-eui"></div>   
</div>
<!--/item 1-->

<span class="separator-eui"></span>

<div>
 <div></div>   
</div>
  
</div>
</div>

<div class="nav-down-eui"> 

</div>


</div>  
</div>
</div>


<style type="text/css">
  /*------------navigation area--------------*/
  .main-header-eui{
    height: 117px;
    background-color: #000000;
    position: relative;
    width: 100%;
  }
    .header-eui{
position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    transition: -webkit-transform .2s;
    transition: transform .2s;
    transition: transform .2s, -webkit-transform .2s;
    will-change: transform;
    z-index: 603;
  }
  .header-content-eui{
    min-width: 1080px;
    background: #000000cc;
    -webkit-backdrop-filter: blur(14px);
    backdrop-filter: blur(14px);
  }
  .nav-content-eui{
width: 100%;
    height: 52px;
    background-color: #000;
    letter-spacing: .4px;
  }
.main-navcontent-eui{
      margin: auto;
    display: flex;
    display: -webkit-flex;
    justify-content: space-between;
    -webkit-justify-content: space-between;
    align-items: center;
    -webkit-align-items: center;
    flex-direction: row;
    min-width: 1080px;
    max-width: 1440px;
    width: 100%;
    padding: 0 44px;
}

.item-content-eui{
 height: 52px;
    display: flex;
    display: -webkit-flex;
    justify-content: center;
    -webkit-justify-content: center;
    align-items: center;
    -webkit-align-items: center;
    flex-direction: row;
    cursor: pointer;
    flex-shrink: 0;
}

.item-content-eui:last-child {
    margin-right: 6px;
}
.item-content-eui:first-child {
    margin-left: 6px;
}

.image-icon-eui{
    content: normal;
    vertical-align: top;
    border: 0;
    max-width: 100%;
} 
._img_eui{
        width: 32px;
    height: 32px;
    margin-right: 8px;
}

.sub-contents-eui{
    display: flex;
    align-items: center;
    white-space: nowrap;
    margin-left: 2px;
}
.content-label-eui{
color:#ADFFA2;
font-size:22px;
line-height:24px;
font-weight:600;
height:24px;
margin-bottom:-6px
}
.content-label-eui-2{
  color: #ADFFA2;
    font-size: 16px;
    line-height: 18px;
    font-weight: 600;
    height: 18px;  
}

.col-label-eui{
    margin-top: 3px;
    margin-right: 0;
}

.col-label-eui:first-child {
    line-height: .727em!important;
    margin-top: 0;
        margin-right: 0;
}

.col-label-eui:first-child>span {
    font-size: .727em;
}
.col-label-eui:nth-child(2) {
    line-height: .875em!important;
}

ol,ul{
    list-style-type: none;
    padding: 0;
}
li{
 vertical-align: baseline;
    border: 0;
    list-style: outside none none;   
}

/*----------------timer---------------*/
._timer-col{
display: flex;
    display: -webkit-flex;
    justify-content: flex-start;
    -webkit-justify-content: flex-start;
    align-items: center;
    -webkit-align-items: center;
    flex-direction: row;
    font-size: 18px;
    position: relative;
        margin-right: 4px;
} 

.tm-1{
  color: #EDFFEA;
    font-size: 12px;
    line-height: 14px;
    font-weight: 400;  
}

._timer-label{
    width: 56px;
    text-wrap: wrap;
    text-align: right;
    word-break: break-word;
    -webkit-hyphens: auto;
    hyphens: auto;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    margin-left: 10px;
}

.tm-2{
  color: #000000;
    font-size: 27px;
    line-height: 29px;
    font-weight: 600;  
}
 
._timer-col:last-child {
    margin-right: 0;
}

._timer-wrapper{
    display: flex;
    align-items: center;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    overflow: hidden;
    height: 21px;
    position: relative;
}


._timer-hours,._timer-minutes,._timer-seconds{
width: 17px;
    height: 21px;
    line-height: 21px;
    font-size: 18px;
    font-weight: 700;
    position: relative;
}

._timer-hours>li,._timer-minutes>li,._timer-seconds>li  {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    text-decoration: none!important;
}

._hours-value-a,
._hours-value-b,
._minutes-value-a,
._minutes-value-b,
._seconds-value-a,
._seconds-value-b{
  text-align: center;
    z-index: 1;
    border-radius: 1.4px;
    height: 100%;  
}

._hours-value-a:before,
._hours-value-b:before,
._minutes-value-a:before,
._minutes-value-b:before,
._seconds-value-a:before,
._seconds-value-b:before {
    content: "";
    position: absolute;
    left: 0;
    z-index: 5;
    width: 100%;
    height: 1px;
    background-color: rgba(0,0,0,.18);
    top: 10px;
}
._time-separator{
    width: 7px;
    font-size: 12px;
    text-align: center;
    color:#EDFFEA;
}


._timer-hours,._timer-minutes,._timer-seconds{
      perspective: 1000px;
    }


  .segment-display-top,.segment-display-bottom{ 
     overflow: hidden;
    position: relative;
    text-align: center;
    width: 100%;
    height: 50%;
   }

   .segment-display-top{
background-color: rgb(237, 255, 234); 
color: rgb(0, 0, 0);
line-height: 21px;
border-radius: 1.4px;
   }
   .segment-display-bottom{ 
background-color: rgb(237, 255, 234); 
color: rgb(0, 0, 0);
line-height: 0;
border-radius: 1.4px;
   }

   .segment-overlays{
position: absolute;
top: 0;
height: 100%;
width: 100%;
perspective: 1000px;
   }
.segment-overlay-top,
.segment-overlay-bottom{
position: absolute;
overflow: hidden;
text-align: center;
width: 100%;
height: 50%;
outline: 1px solid transparent;
}

.segment-overlay-top{
top: 0px;
line-height: 21px;
background-color: rgb(237, 255, 234); 
color: rgb(0, 0, 0);
transform-origin: bottom;
border-radius: 1.4px;
}
.segment-overlay-bottom{
bottom: 0px;
background-color: rgb(237, 255, 234); 
color: rgb(0, 0, 0);
/*border-top: 1px solid black;*/
transform-origin: top;
line-height: 0;
border-radius: 1.4px;
  border-bottom-left-radius: 1.4px;
    border-bottom-right-radius: 1.4px; 
    backface-visibility: hidden;
}

.segment-overlays.flip .segment-overlay-top{
 animation: flip-top 0.8s linear;
}
.segment-overlays.flip .segment-overlay-bottom{
animation: flip-bottom 0.8s linear;
}
   @keyframes flip-top {
        0% {
        transform: rotateX(0deg);
        }
       50%, 100% {
        transform: rotateX(-90deg);
        }
    }

       @keyframes flip-bottom {
        0%, 50%{
        transform: rotateX(90deg);
        }
       100% {
        transform: rotateX(0deg);
        }
    }




/*----------------/timer---------------*/

  .nav-down-eui{
    
  }
 
   /*------------/navigation area--------------*/     
</style>

<section>


    

</section>

<script type="text/javascript">
function startCountdown(minutes) {
  // Calculate the end time
  var countDownDate = new Date().getTime() + minutes * 60 * 1000;

  // Update the countdown every 1 second
  var x = setInterval(function() {

    // Get the current date and time
    var now = new Date().getTime();

    // Calculate the distance between now and the countdown end time
    var distance = countDownDate - now;

    // Calculate hours, minutes, and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Extract the digit at the specified position
   // var digit = parseInt(numberString.charAt(position), 10);

//get parent elements
var hoursA = document.querySelector('._hours-value-a');
var hoursB = document.querySelector('._hours-value-b');
var minutesA = document.querySelector('._minutes-value-a');
var minutesB = document.querySelector('._minutes-value-b');
var secondsA = document.querySelector('._seconds-value-a');
var secondsB = document.querySelector('._seconds-value-b');


// Trigger the animation by adding a class
if(parseInt(formatTime(hours).toString().charAt(0), 10)!==parseInt(hoursA.getElementsByClassName('segment-display-top')[0].textContent)){
hoursA.getElementsByClassName('segment-overlays')[0].classList.add("flip");}
if(parseInt(formatTime(hours).toString().charAt(1), 10)!==parseInt(hoursB.getElementsByClassName('segment-display-top')[0].textContent)){
hoursB.getElementsByClassName('segment-overlays')[0].classList.add("flip");}

if(parseInt(formatTime(minutes).toString().charAt(0), 10)!==parseInt(minutesA.getElementsByClassName('segment-display-top')[0].textContent)){
minutesA.getElementsByClassName('segment-overlays')[0].classList.add("flip");}
if(parseInt(formatTime(minutes).toString().charAt(1), 10)!==parseInt(minutesB.getElementsByClassName('segment-display-top')[0].textContent)){
minutesB.getElementsByClassName('segment-overlays')[0].classList.add("flip");}

if(parseInt(formatTime(seconds).toString().charAt(0), 10)!==parseInt(secondsA.getElementsByClassName('segment-display-top')[0].textContent)){
secondsA.getElementsByClassName('segment-overlays')[0].classList.add("flip");}
if(parseInt(formatTime(seconds).toString().charAt(1), 10)!==parseInt(secondsB.getElementsByClassName('segment-display-top')[0].textContent)){
secondsB.getElementsByClassName('segment-overlays')[0].classList.add("flip");}


// Get all child elements by class name

//add time values
hoursA.getElementsByClassName('segment-display-top')[0].innerHTML= parseInt(formatTime(hours).toString().charAt(0), 10);//The radix is set to 10
hoursA.getElementsByClassName('segment-display-bottom')[0].innerHTML= parseInt(formatTime(hours).toString().charAt(0), 10);//The radix is set to 10
hoursA.getElementsByClassName('segment-overlay-top')[0].innerHTML= parseInt(formatTime(hours).toString().charAt(0), 10);//The radix is set to 10
hoursA.getElementsByClassName('segment-overlay-bottom')[0].innerHTML= parseInt(formatTime(hours).toString().charAt(0), 10);//The radix is set to 10

hoursB.getElementsByClassName('segment-display-top')[0].innerHTML= parseInt(formatTime(hours).toString().charAt(1), 10);
hoursB.getElementsByClassName('segment-display-bottom')[0].innerHTML= parseInt(formatTime(hours).toString().charAt(1), 10);
hoursB.getElementsByClassName('segment-overlay-top')[0].innerHTML= parseInt(formatTime(hours).toString().charAt(1), 10);
hoursB.getElementsByClassName('segment-overlay-bottom')[0].innerHTML= parseInt(formatTime(hours).toString().charAt(1), 10);

minutesA.getElementsByClassName('segment-display-top')[0].innerHTML= parseInt(formatTime(minutes).toString().charAt(0), 10);
minutesA.getElementsByClassName('segment-display-bottom')[0].innerHTML= parseInt(formatTime(minutes).toString().charAt(0), 10);
minutesA.getElementsByClassName('segment-overlay-top')[0].innerHTML= parseInt(formatTime(minutes).toString().charAt(0), 10);
minutesA.getElementsByClassName('segment-overlay-bottom')[0].innerHTML= parseInt(formatTime(minutes).toString().charAt(0), 10);

minutesB.getElementsByClassName('segment-display-top')[0].innerHTML= parseInt(formatTime(minutes).toString().charAt(1), 10);
minutesB.getElementsByClassName('segment-display-bottom')[0].innerHTML= parseInt(formatTime(minutes).toString().charAt(1), 10);
minutesB.getElementsByClassName('segment-overlay-top')[0].innerHTML= parseInt(formatTime(minutes).toString().charAt(1), 10);
minutesB.getElementsByClassName('segment-overlay-bottom')[0].innerHTML= parseInt(formatTime(minutes).toString().charAt(1), 10);

secondsA.getElementsByClassName('segment-display-top')[0].innerHTML= parseInt(formatTime(seconds).toString().charAt(0), 10);
secondsA.getElementsByClassName('segment-display-bottom')[0].innerHTML= parseInt(formatTime(seconds).toString().charAt(0), 10);
secondsA.getElementsByClassName('segment-overlay-top')[0].innerHTML= parseInt(formatTime(seconds).toString().charAt(0), 10);
secondsA.getElementsByClassName('segment-overlay-bottom')[0].innerHTML= parseInt(formatTime(seconds).toString().charAt(0), 10);

secondsB.getElementsByClassName('segment-display-top')[0].innerHTML= parseInt(formatTime(seconds).toString().charAt(1), 10);
secondsB.getElementsByClassName('segment-display-bottom')[0].innerHTML= parseInt(formatTime(seconds).toString().charAt(1), 10);
secondsB.getElementsByClassName('segment-overlay-top')[0].innerHTML= parseInt(formatTime(seconds).toString().charAt(1), 10);
secondsB.getElementsByClassName('segment-overlay-bottom')[0].innerHTML= parseInt(formatTime(seconds).toString().charAt(1), 10);





// Remove the class after the animation duration (1s) to reset for the next change
  // Queue another animation frame to ensure the class is applied before removal
    requestAnimationFrame(function () {
      // Remove the flipping animation after the animation duration (0.5s)
      setTimeout(function () {
        //segmentOverlays[0].classList.remove("flip");
hoursA.getElementsByClassName('segment-overlays')[0].classList.remove("flip");
hoursB.getElementsByClassName('segment-overlays')[0].classList.remove("flip");
minutesA.getElementsByClassName('segment-overlays')[0].classList.remove("flip");
minutesB.getElementsByClassName('segment-overlays')[0].classList.remove("flip");
secondsA.getElementsByClassName('segment-overlays')[0].classList.remove("flip");
secondsB.getElementsByClassName('segment-overlays')[0].classList.remove("flip");
      }, 600);
    });

    // Display the countdown in the "countdown" element
   // document.getElementById("countdown").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";

    // If the countdown is over, display a message
    if (distance < 0) {
      clearInterval(x);
hoursA[0].innerHTML= 0;//The radix is set to 10
hoursB[0].innerHTML= 0;
minutesA[0].innerHTML= 0;
minutesB[0].innerHTML= 0;
secondsA[0].innerHTML= 0;
secondsB[0].innerHTML= 0;
secondsB[1].innerHTML= 0;
    }
  }, 1000); // Update every 1 second
}
// Function to add leading zeros if needed
function formatTime(time) {
  return time < 10 ? "0" + time : time;
}
// Start the countdown with a duration of 30 minutes
startCountdown(30);
</script>

</body>
</html>