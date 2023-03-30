<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>index_pro1</title>
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



.flex {
    display: flex;
}
.justify-center {
    justify-content: center;
}

.justify-right {
    justify-content: flex-end;
}
.flex-wrap {
    flex-wrap: wrap;
}
.flex-col {
    flex-direction: column;
}
.items-center {
    align-items: center;
}
.flex-grow {
    flex-grow: 1;
}
.w-full {
    width: 100%;
}
.justify-center {
    justify-content: center;
}
.center{
    text-align: center !important;
}
.text-left {
    text-align: left !important;
}

.margin_top{
  margin-top: 15px;
  margin-bottom: 10px;
}
.margin_top_50{
    margin-top: 50px;
}

a{
    text-decoration: none;
    outline-width: 0;
}
a:hover {
    outline-width: 0;
}
.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/*************animations*******/
.delay1{
    animation-delay: .1s;
}
.delay2{
    animation-delay: .2s;
}
.delay3{
    animation-delay: .3s;
}
.delay6{
    animation-delay: .6s;
}

.animate-element{
    animation-duration: 1s;
   /*animation-fill-mode: both;*/
  animation-fill-mode: backwards;
}
.fadeInUp-animation{
visibility: visible;
    animation-name: fadeInUp;
}
.fadeInDown-animation{
    visibility: visible;
    animation-name: fadeInDown;
}
.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}
.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
}
@keyframes fadeInUp{
0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 10rem, 0);
    transform: translate3d(0, 10rem, 0);
}
100% {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}
}

@keyframes fadeInDown{
0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -6.5rem, 0);
    transform: translate3d(0, -6.5rem, 0);
}
100% {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}
}
/************* end animations*******/

.auto-container {
    position: static;
    max-width: 1200px;
    padding: 0px 15px;
    margin: 0 auto;
}

.auto-row {
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
    margin-right: -15px;
    margin-left: -15px;

}

.tabs-section{
    margin-top: 70px;
}

.heading-title {
    margin-bottom: 0px;
    margin-top: 0px;
    font-size: 2.9rem;
        font-weight: 700;
    line-height: 1.2;
    color: #2B3940;
}

.tabs-list {
    margin-bottom: 3rem !important;
    border-bottom: 1px solid #dee2e6 !important;
}
ul, li {
    list-style: none;
    padding: 0px;
    margin: 0px;
}

.tab-list-item{
        width: 100px;
    margin-right: 5px;
}
.tab-list-item a{
         display: flex;
    align-items: center;
    justify-content: center;
        padding-bottom: 1rem !important;
        margin-left: 0 !important;
        margin-right: 1rem !important;
}
.tab-list-item a.active {
    border-bottom: 2px solid #00B074;
}

.tab-list-item a h6{
     margin-bottom: 0 !important;
     font-size: 1rem;
         font-weight: 700;
    line-height: 1.2;
    color: #2B3940;   
}

.tabcontent{
    display: none;
}

.tab-panel-item {
    border: 1px solid transparent;
    border-radius: 2px;
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
    transition: .5s;
    padding: 1.5rem !important;
    margin-bottom: 1.5rem !important;
}

.tab-panel-item:hover {
    border-color: rgba(0, 0, 0, .08);
    box-shadow: none;
}

.tab-content-col-1{
width: 66.66667%;
}
.tab-content-col-2{
width: 33.33333%; 
}

.tab-content-col-1 img.image_rounded{
    width: 80px;
    height: 80px;
    border-radius: 2px !important;
    border: 1px solid #dee2e6 !important;
    max-width: 100%;
    vertical-align: middle;
    object-fit: contain;
}

.content-wrapper-1{
 text-align: left !important;
 padding-left: 1.5rem !important;   
}
.content-wrapper-1 h5{
margin-bottom: 3px !important;
margin-top: 0px;
word-wrap: break-word;
padding: 0;
    font-weight: 700;
    line-height: 1.2;
    color: #2B3940;
    font-size: 1.25rem;
    }

.content-wrapper-1 .txt,.content-wrapper-1 .icon{
margin-right: 1rem !important;
}

.content-wrapper-1 .icon i{
 color: #00B074 !important;
margin-right: 0.5rem !important;
font-size: 22px;   
}
.content-wrapper-1 .icon{
font-size: 17px;
}

.tab-content-col-2{
    align-items: flex-end;
}
.content-wrapper-2 {

}

.content-wrapper-2 .btns{
    margin-bottom: 1rem !important;
}

.btn-1 {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    color: #666565;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    border-radius: 2px;
    transition: .5s;
    transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
}


 .btn-light-1{
    color: #000;
    background-color: #EFFDF5;
    border-color: #EFFDF5;
        margin-right: 1rem !important;
        width: 38px;
    height: 38px;
        padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 2px;
}

.content-wrapper-2 .btns .btn-light-1 i{
    color: #00B074 !important;
    font-size: 20px;
}

.btn-1.btn-primary-1, .btn-1.btn-secondary-1 {
    color: #FFFFFF;

}

 .btn-primary-1{
  font-weight: 600;
    transition: .5s;
        background-color: #00B074;
    border-color: #00B074;   
}

.btn-primary-1:hover {
    background-color: #26bc89;
    border-color: #1ab882;
    opacity: 0.8;
}

 .small-text{
font-size: 1em;
}

.content-wrapper-2 .small-text i{
color: #00B074 !important;
margin-right: 0.5rem !important;
font-size: 22px;
}
.browse-btn{
        padding-top: 1rem !important;
    padding-bottom: 1rem !important;
        padding-right: 3rem !important;
    padding-left: 3rem !important;
}






@media screen and (max-width: 600px){
.tab-content-col-1 {
    width: 100%;
}
.tab-content-col-2 {
    width: 100%;
}

}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

}





</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>

<section class="tabs-section">
  
<div class="auto-container">

<h1 class="heading-title center">Jobs Listing</h1>

<div class="tab-class center">
<ul class="tabs-list flex flex-wrap flex-grow justify-center">
<li class="tab-list-item">
<a  href="#tab-1" tab="tab1" class="tablink" id="defaultOpen">
<h6>Featured</h6>
</a>
</li>
<li class="tab-list-item">
<a href="#tab-2" tab="tab2" class="tablink">
<h6>Full Time</h6>
</a>
</li>
<li class="tab-list-item">
<a href="#tab-3" tab="tab3" class="tablink">
<h6>Part Time</h6>
</a>
</li>
</ul>

<div class="tabs-content">



<!--tab panel 1-->
<div id="tab1" class="tab-panel-1 tabcontent animate-element delay1 fadeInDown">

<!--item 1-->
<div class="tab-panel-item">
<div class="auto-row">

    <div class="tab-content-col-1 flex flex-wrap flex-grow">
    <img class="image_rounded" src="images/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
    <div class="content-wrapper-1">
    <h5>Software Engineer</h5>
    <div class="txt text-truncate text-left">Brunique developers ltd</div>
     <span class="icon text-truncate text-left"><i class="ion ion-location"></i>New York, USA</span>
    <span class="icon text-truncate text-left"><i class="ion ion-clock"></i>Full Time</span>
    <span class="icon text-truncate text-left"><i class="ion ion-cash"></i>$123 - $456</span>
    </div>
    </div>

    <div class="tab-content-col-2 flex justify-center">
    <div class="content-wrapper-2">
      <div class="btns flex">  
    <a class="btn-1 btn-light-1" href=""><i class="ion ion-ios-heart-outline"></i></a>
    <a class="btn-1 btn-primary-1" href="">Apply Now</a>
     </div>
    <small class="small-text text-truncate"><i class="ion ion-android-calendar"></i>Date Line: 01 Jan, 2045</small>
    </div>
    
    </div>

</div>
</div>
<!--/item 1-->

    
<!--item 1-->
<div class="tab-panel-item">
<div class="auto-row">

    <div class="tab-content-col-1 flex flex-wrap flex-grow">
    <img class="image_rounded" src="images/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
    <div class="content-wrapper-1">
    <h5>Marketing Manager</h5>
    <div class="txt text-truncate text-left">Brunique developers ltd</div>
     <span class="icon text-truncate text-left"><i class="ion ion-location"></i>New York, USA</span>
    <span class="icon text-truncate text-left"><i class="ion ion-clock"></i>Full Time</span>
    <span class="icon text-truncate text-left"><i class="ion ion-cash"></i>$123 - $456</span>
    </div>
    </div>

    <div class="tab-content-col-2 flex justify-center">
    <div class="content-wrapper-2">
      <div class="btns flex">  
    <a class="btn-1 btn-light-1" href=""><i class="ion ion-ios-heart-outline"></i></a>
    <a class="btn-1 btn-primary-1" href="">Apply Now</a>
     </div>
    <small class="small-text text-truncate"><i class="ion ion-android-calendar"></i>Date Line: 01 Jan, 2045</small>
    </div>
    
    </div>

</div>
</div>
<!--/item 1-->

    
<!--item 1-->
<div class="tab-panel-item">
<div class="auto-row">

    <div class="tab-content-col-1 flex flex-wrap flex-grow">
    <img class="image_rounded" src="images/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
    <div class="content-wrapper-1">
    <h5>Product Designer</h5>
    <div class="txt text-truncate text-left">Brunique developers ltd</div>
     <span class="icon text-truncate text-left"><i class="ion ion-location"></i>New York, USA</span>
    <span class="icon text-truncate text-left"><i class="ion ion-clock"></i>Full Time</span>
    <span class="icon text-truncate text-left"><i class="ion ion-cash"></i>$123 - $456</span>
    </div>
    </div>

    <div class="tab-content-col-2 flex justify-center">
    <div class="content-wrapper-2">
      <div class="btns flex">  
    <a class="btn-1 btn-light-1" href=""><i class="ion ion-ios-heart-outline"></i></a>
    <a class="btn-1 btn-primary-1" href="">Apply Now</a>
     </div>
    <small class="small-text text-truncate"><i class="ion ion-android-calendar"></i>Date Line: 01 Jan, 2045</small>
    </div>
    
    </div>

</div>
</div>
<!--/item 1-->

<!--item 1-->
<div class="tab-panel-item">
<div class="auto-row">

    <div class="tab-content-col-1 flex flex-wrap flex-grow">
    <img class="image_rounded" src="images/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
    <div class="content-wrapper-1">
    <h5>Creative Director</h5>
    <div class="txt text-truncate text-left">Brunique developers ltd</div>
     <span class="icon text-truncate text-left"><i class="ion ion-location"></i>New York, USA</span>
    <span class="icon text-truncate text-left"><i class="ion ion-clock"></i>Full Time</span>
    <span class="icon text-truncate text-left"><i class="ion ion-cash"></i>$123 - $456</span>
    </div>
    </div>

    <div class="tab-content-col-2 flex justify-center">
    <div class="content-wrapper-2">
      <div class="btns flex">  
    <a class="btn-1 btn-light-1" href=""><i class="ion ion-ios-heart-outline"></i></a>
    <a class="btn-1 btn-primary-1" href="">Apply Now</a>
     </div>
    <small class="small-text text-truncate"><i class="ion ion-android-calendar"></i>Date Line: 01 Jan, 2045</small>
    </div>
    
    </div>

</div>
</div>
<!--/item 1-->

<!--item 1-->
<div class="tab-panel-item">
<div class="auto-row">

    <div class="tab-content-col-1 flex flex-wrap flex-grow">
    <img class="image_rounded" src="images/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
    <div class="content-wrapper-1">
    <h5>Wordpress Developer</h5>
    <div class="txt text-truncate text-left">Brunique developers ltd</div>
     <span class="icon text-truncate text-left"><i class="ion ion-location"></i>New York, USA</span>
    <span class="icon text-truncate text-left"><i class="ion ion-clock"></i>Full Time</span>
    <span class="icon text-truncate text-left"><i class="ion ion-cash"></i>$123 - $456</span>
    </div>
    </div>

    <div class="tab-content-col-2 flex justify-center">
    <div class="content-wrapper-2">
      <div class="btns flex">  
    <a class="btn-1 btn-light-1" href=""><i class="ion ion-ios-heart-outline"></i></a>
    <a class="btn-1 btn-primary-1" href="">Apply Now</a>
     </div>
    <small class="small-text text-truncate"><i class="ion ion-android-calendar"></i>Date Line: 01 Jan, 2045</small>
    </div>
    
    </div>

</div>
</div>
<!--/item 1-->


<div class="browsebtn">
<a class="btn-1 btn-primary-1 browse-btn" href="">Browse More Jobs</a>
</div>

</div>
<!--/tab panel 1-->



<!--tab panel 2-->
<div id="tab2" class="tab-panel-2 tabcontent animate-element delay1 fadeInUp">
    
<!--item 1-->
<div class="tab-panel-item">
<div class="auto-row">

    <div class="tab-content-col-1 flex flex-wrap flex-grow">
    <img class="image_rounded" src="images/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
    <div class="content-wrapper-1">
    <h5>Product Designer</h5>
    <div class="txt text-truncate text-left">Brunique developers ltd</div>
     <span class="icon text-truncate text-left"><i class="ion ion-location"></i>New York, USA</span>
    <span class="icon text-truncate text-left"><i class="ion ion-clock"></i>Full Time</span>
    <span class="icon text-truncate text-left"><i class="ion ion-cash"></i>$123 - $456</span>
    </div>
    </div>

    <div class="tab-content-col-2 flex justify-center">
    <div class="content-wrapper-2">
      <div class="btns flex">  
    <a class="btn-1 btn-light-1" href=""><i class="ion ion-ios-heart-outline"></i></a>
    <a class="btn-1 btn-primary-1" href="">Apply Now</a>
     </div>
    <small class="small-text text-truncate"><i class="ion ion-android-calendar"></i>Date Line: 01 Jan, 2045</small>
    </div>
    
    </div>

</div>
</div>
<!--/item 1-->

<!--item 1-->
<div class="tab-panel-item">
<div class="auto-row">

    <div class="tab-content-col-1 flex flex-wrap flex-grow">
    <img class="image_rounded" src="images/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
    <div class="content-wrapper-1">
    <h5>Creative Director</h5>
    <div class="txt text-truncate text-left">Brunique developers ltd</div>
     <span class="icon text-truncate text-left"><i class="ion ion-location"></i>New York, USA</span>
    <span class="icon text-truncate text-left"><i class="ion ion-clock"></i>Full Time</span>
    <span class="icon text-truncate text-left"><i class="ion ion-cash"></i>$123 - $456</span>
    </div>
    </div>

    <div class="tab-content-col-2 flex justify-center">
    <div class="content-wrapper-2">
      <div class="btns flex">  
    <a class="btn-1 btn-light-1" href=""><i class="ion ion-ios-heart-outline"></i></a>
    <a class="btn-1 btn-primary-1" href="">Apply Now</a>
     </div>
    <small class="small-text text-truncate"><i class="ion ion-android-calendar"></i>Date Line: 01 Jan, 2045</small>
    </div>
    
    </div>

</div>
</div>
<!--/item 1-->

<!--item 1-->
<div class="tab-panel-item">
<div class="auto-row">

    <div class="tab-content-col-1 flex flex-wrap flex-grow">
    <img class="image_rounded" src="images/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
    <div class="content-wrapper-1">
    <h5>Wordpress Developer</h5>
    <div class="txt text-truncate text-left">Brunique developers ltd</div>
     <span class="icon text-truncate text-left"><i class="ion ion-location"></i>New York, USA</span>
    <span class="icon text-truncate text-left"><i class="ion ion-clock"></i>Full Time</span>
    <span class="icon text-truncate text-left"><i class="ion ion-cash"></i>$123 - $456</span>
    </div>
    </div>

    <div class="tab-content-col-2 flex justify-center">
    <div class="content-wrapper-2">
      <div class="btns flex">  
    <a class="btn-1 btn-light-1" href=""><i class="ion ion-ios-heart-outline"></i></a>
    <a class="btn-1 btn-primary-1" href="">Apply Now</a>
     </div>
    <small class="small-text text-truncate"><i class="ion ion-android-calendar"></i>Date Line: 01 Jan, 2045</small>
    </div>
    
    </div>

</div>
</div>
<!--/item 1-->


<div class="browsebtn">
<a class="btn-1 btn-primary-1 browse-btn" href="">Browse More Jobs</a>
</div>

</div>
<!--/tab panel 2-->



<!--tab panel 3-->
<div id="tab3" class="tab-panel-3 tabcontent animate-element delay1 fadeInDown">



<!--item 1-->
<div class="tab-panel-item">
<div class="auto-row">

    <div class="tab-content-col-1 flex flex-wrap flex-grow">
    <img class="image_rounded" src="images/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
    <div class="content-wrapper-1">
    <h5>Creative Director</h5>
    <div class="txt text-truncate text-left">Brunique developers ltd</div>
     <span class="icon text-truncate text-left"><i class="ion ion-location"></i>New York, USA</span>
    <span class="icon text-truncate text-left"><i class="ion ion-clock"></i>Full Time</span>
    <span class="icon text-truncate text-left"><i class="ion ion-cash"></i>$123 - $456</span>
    </div>
    </div>

    <div class="tab-content-col-2 flex justify-center">
    <div class="content-wrapper-2">
      <div class="btns flex">  
    <a class="btn-1 btn-light-1" href=""><i class="ion ion-ios-heart-outline"></i></a>
    <a class="btn-1 btn-primary-1" href="">Apply Now</a>
     </div>
    <small class="small-text text-truncate"><i class="ion ion-android-calendar"></i>Date Line: 01 Jan, 2045</small>
    </div>
    
    </div>

</div>
</div>
<!--/item 1-->

<!--item 1-->
<div class="tab-panel-item">
<div class="auto-row">

    <div class="tab-content-col-1 flex flex-wrap flex-grow">
    <img class="image_rounded" src="images/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
    <div class="content-wrapper-1">
    <h5>Wordpress Developer</h5>
    <div class="txt text-truncate text-left">Brunique developers ltd</div>
     <span class="icon text-truncate text-left"><i class="ion ion-location"></i>New York, USA</span>
    <span class="icon text-truncate text-left"><i class="ion ion-clock"></i>Full Time</span>
    <span class="icon text-truncate text-left"><i class="ion ion-cash"></i>$123 - $456</span>
    </div>
    </div>

    <div class="tab-content-col-2 flex justify-center">
    <div class="content-wrapper-2">
      <div class="btns flex">  
    <a class="btn-1 btn-light-1" href=""><i class="ion ion-ios-heart-outline"></i></a>
    <a class="btn-1 btn-primary-1" href="">Apply Now</a>
     </div>
    <small class="small-text text-truncate"><i class="ion ion-android-calendar"></i>Date Line: 01 Jan, 2045</small>
    </div>
    
    </div>

</div>
</div>
<!--/item 1-->


<div class="browsebtn">
<a class="btn-1 btn-primary-1 browse-btn" href="">Browse More Jobs</a>
</div>

</div>
<!--/tab panel 3-->




</div>
</div>
</div>
</section>


<script type="text/javascript">

//initialise tabs
window.addEventListener(
    "load",
    Initialise_tabs,
    false
);

//getting all my custom modals necessary like the buttons modal launchers
   function Initialise_tabs() {

  var tablinks = document.getElementsByClassName("tablink");
  for (var i = 0; i < tablinks.length; i++) {
    tablinks[i].onclick = function () {
      //var target = this.dataset.tab;
       // let target = this.getAttribute("tab");
      //console.log(this);
      openTab(this);

    };
  }
document.getElementById("defaultOpen").click();
}
    
function openTab(elem) {
    //tabid is on tablink as an attribute and is an id on tabcontent classs
   var tabid = elem.getAttribute("tab");
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";//hide all tabs contents
  }

  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");//remove all active classes
  }
  //show currently selected tab
  document.getElementById(tabid).style.display = "block";
  //evt.currentTarget.className += " active";
  elem.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>



</body>
</html>