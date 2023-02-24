<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>home 2</title>
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
    font-family: 'Lato', sans-serif;
}

 section {
    display: block;
}

.banner-slider-main.inner-pagehny .breadcrumb-infhny {
    background: url(images/bg1.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    z-index: 9;
    position: relative;
    min-height: 22em;
}

.banner-slider-main.inner-pagehny .breadcrumb-infhny::before {
    content: "";
    background: rgba(14, 13, 13, 0.59);
    position: absolute;
    top: 0;
    min-height: 100%;
    left: 0;
    right: 0;
    z-index: -1;
}

.banner-slider-main .top-header-content {
    position: relative;
}

.banner-slider-main header.tophny-header {
    position: absolute;
    z-index: 9;
    width: 100%;
    margin: 0 auto;
    left: 0;
    right: 0;
}
header{
    display: block;
}

.container_fluid, .container_sm, .container_md, .container_lg, .container_xl {
    width: 97%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.container_ {
    width: 97%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.serarc-fluid{
 display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;   
}

.banner-slider-main .top-right-strip {
    padding: 15px 15px 0 15px;
    align-items: center;
}

.row_container {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-large-6{
position: relative;
    width: 46%;
    padding-right: 15px;
    padding-left: 15px;
}

.banner-slider-main .top-hny-left-content h6 {
    font-size: 14px;
    line-height: 26px;
    color: #fff;
    margin: 0;
    text-transform: uppercase;
    font-family: 'Oswald', sans-serif;
}

.banner-slider-main .top-hny-left-content a {
    color: #fff;
    margin-left: 6px;
    font-weight: 600;
    text-transform: capitalize;
    font-size: 15px;
    font-family: 'Lato', sans-serif;
}

a {
    color: #232222;
    text-decoration: none;
    background-color: transparent;
}

.banner-slider-main .hand-icon {
    margin: 0 4px;
}

.banner-slider-main span.hignlaite {
    color: #ff7315;
}

.banner-slider-main ul.top-hnt-right-content {
   
    display: flex;
     justify-content: flex-end;
    align-items: center;
}
ol, ul, dl {
    margin-top: 0;
    margin-bottom: 0rem;
     font-family: 'Lato', sans-serif;
    padding: 0;
}

.banner-slider-main ul.top-hnt-right-content li {
    margin-left: 16px;
    list-style: none;
    color: #fff;
}

.banner-slider-main ul.top-hnt-right-content li.usernhy a {
    color: #fff;
    width: 36px;
    height: 36px;
    background: rgba(255, 255, 255, 0.141);
    border-radius: 50%;
    display: inline-block;
    text-align: center;
}
.banner-slider-main ul.top-hnt-right-content li a {
    color: #fff;
}
.banner-slider-main .button-log a {
    color: #333;
    font-size: 1em;
    text-decoration: none;
}

.banner-slider-main a.btn-open span.ion {
    line-height: 34px;
    font-size: 20px;
}

li.transmitvcart {
    margin-top: -2px;
}
button.top_transmitv_cart {
    border: none;
    text-align: center;
    background: none;
    cursor: pointer;
    /* border-radius: 0; */
    padding: 0;
    outline: none;
    color: #fff;
    font-weight: 600;
    font-family: 'Lato', sans-serif;
    font-size: 16px;
    text-transform: capitalize;
    background: rgba(255, 255, 255, 0.141);
    padding: 6px 20px;
    border-radius: 25px;
}
button, input {
    overflow: visible;
}
button.top_transmitv_cart span {
    font-size: 1.1em;
}


/*navigation*/
nav {
    display: block;
}
.banner-slider-main nav.navbar {
    background-color: transparent;
    padding: 10px 0;
}
.navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
}
.navbar{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.banner-slider-main a.navbar-brand {
    color: #fff;
    font-size: 30px;
    padding: 0;
    font-weight: 900;
    text-transform: uppercase;
}
.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, 0.9);
}
.navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}
.banner-slider-main span.lohny {
    margin-bottom: 0;
    color: #ff7315;
}

.banner-slider-main .search-right {
    margin-left: 60px;
}
.banner-slider-main .search-right a {
    color: #fff;
    font-size: 20px;
}
.mr-2, .mx-2 {
    margin-right: 0.5rem !important;
}
.text-center{
    text-align: center;
}
.navbar-collapse {
    display: flex !important;
    flex-basis: auto;
    flex-grow: 1;
    align-items: center;
}
.ml-auto, .mx-auto {
    margin-left: auto !important;
}
.navbar-nav {
    display: flex;
    flex-direction: row;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.banner-slider-main li.nav-item {
    margin: 0px 10px;
}
.banner-slider-main .navbar-light .navbar-nav .nav-link {
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
}
.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 0.5);
}
.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem;
}
 .banner-slider-main .navbar-light .navbar-nav .active>.nav-link {
    color: #ff7315;
}
/*****dropdown***/
.dropup, .dropright, .dropdown, .dropleft {
    position: relative;
}
.banner-slider-main .dropdown-toggle::after{
    margin-left: 0.1em;
    border-top: 0.3em solid;
    border-right: 0.2em solid transparent;
    border-left: 0.2em solid transparent;
    vertical-align: middle;
}
.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}
.dropdown-toggle {
    white-space: nowrap;
}

.navbar-nav .dropdown-menu {
    position: absolute;
    float: none;
}

.dropdown-menu {
    transform: translateX(-50px);
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
}
.dropdown-menu:before {
    content: '';
    width: 10px;
    height: 10px;
    background: #fff;
    border: 1px #d5d5d5ee solid;
    display: block;
    border-right: none;
    border-bottom: none;
    transform: translateX(-50%) rotateZ(45deg);
    position: absolute;
    top: -5px;
    left: 49%;
    z-index: 1001;


}
.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}


li.nav-item:hover .dropdown-menu{
    display: block;

} 
/***********/

.banner-slider-main.inner-pagehny .breadcrumb-contentnhy {
    padding-top: 12em;
}
.banner-slider-main.inner-pagehny h2.hny-title {
     font-size: 36px;
    color: #fff;
    font-weight: 600;
}
.banner-slider-main.inner-pagehny .breadcrumb {
    display: flex;
    flex-wrap: wrap;
 /*   padding: 0.75rem 1rem;
    margin-bottom: 1rem;*/
    list-style: none;
    background-color: transparent;
    border-radius: 0.25rem;
    justify-content: center;
}
.mb-0, .my-0 {
    margin-bottom: 0 !important;
}

.breadcrumb {
    display: flex;
    flex-wrap: wrap;
   /* padding: 0.75rem 1rem;
    margin-bottom: 1rem;*/
    list-style: none;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}
.banner-slider-main.inner-pagehny ol.breadcrumb li {
    color: #fff;
}
.banner-slider-main.inner-pagehny ol.breadcrumb a {
    color: #fff;
}
.banner-slider-main.inner-pagehny ol.breadcrumb li span {
    margin: 0 10px;
    color: #b9bdbd;
}




/*testimonials*/
.customers-sec-6{
    display: flex;
    flex-grow: 1;
    flex-wrap: wrap;
        align-items: center;
    justify-content: space-between;  
    margin: 10px;
}

.col-medium-3 {
    flex: 0 0 25%;
    max-width: 25%;
}

.text-center {
    text-align: center !important;
}
.customers-sec-6 .feedback-hny {
    padding: 40px 20px;
    position: relative;
    text-align: center;
    background-color: #232020;
    border-radius: 6px;
}
.customers-sec-6 .feedback-hny span.ion {
    display: block;
    color: #ff7315;
    font-size: 24px;
}
.customers-sec-6 p.feedback-para {
    margin: 0;
    font-size: 15px;
    color: #d4d1d1;
    margin-top: 16px;
}

.customers-sec-6 .feedback-hny:after {

    top: 100%;
    left: 50%;
    border-color: transparent !important;
    border-top-color: #232020 !important;
    border-width: 10px !important;
    margin-left: -10px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
}
.mt-4, .my-4 {
    margin-top: 1.5rem !important;
}
.customers-sec-6 .feedback-review img {
    border-radius: 50%;
    border: 4px solid #ddd;
    width: 24%;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}
.customers-sec-6 .feedback-review h5 {
    font-size: 16px;
    line-height: 26px;
    color: #232020;
    margin-top: 10px;
    font-weight: 600;
}

</style>
</head>
<body>  



<section class="banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">

    <div class="top-header-content">

      <header class="tophny-header">
        <div class="container_fluid">
          <div class="top-right-strip row_container">
            <!--/left-->
            <div class="top-hny-left-content col-large-6 pl-lg-0">
              <h6>Upto 30% off on All styles , <a href="ecommerce.html" target="_blank"> Click here for <span class="ion ion-android-arrow-dropright hand-icon" aria-hidden="true"></span> <span class="hignlaite">More
                    details</span></a></h6>
            </div>
            <!--//left-->
            <!--/right-->
            <ul class="top-hnt-right-content col-large-6">

              <li class="button-log usernhy">
                <a class="btn-open" href="#">
                  <span class="ion ion-android-person" aria-hidden="true"></span>
                </a>
              </li>
              <li class="transmitvcart galssescart2 cart cart box_1">
                <form action="#" method="post" class="last">
                  <input type="hidden" name="cmd" value="_cart">
                  <input type="hidden" name="display" value="1">
                  <button class="top_transmitv_cart" type="submit" name="submit" value="">
                    My Cart
                    <span class="ion ion-android-cart"></span>
                  </button>
                </form>
              </li>
            </ul>
            <!--//right-->
          
          </div>
        </div>
        <!--/nav-->
        <nav class="navbar  navbar-light">
          <div class="container_fluid serarc-fluid">
            <a class="navbar-brand" href="index.html">
              Spry<span class="lohny">S</span>tore</a>
            <!-- if logo is image enable this   
                    <a class="navbar-brand" href="#index.html">
                      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
            <!--/search-right-->
            <div class="search-right">

              <a href="#search" title="search"><span class="ion ion-android-search mr-2" aria-hidden="true"></span>
                <span class="search-text">Search here</span></a>
         
            </div>
            <!--//search-right-->
           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Shopping
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="ecommerce.html">Ecommerce</a>
                    <a class="dropdown-item" href="ecommerce-single.html">Ecommerce Single</a>
                   
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="blog.html">Blog</a>
                    <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
        <!--//nav-->
      </header>
      <div class="breadcrumb-contentnhy">
        <div class="container_">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">About Us</h2>
            <ol class="breadcrumb mb-0">
              <li><a href="index.html">Home</a>
                <span class="ion ion-arrow-return-right"></span></li>
              <li class="active">About</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
</div>
</section>




<section class="customers-sec-6">

<div class="col-medium-3">
<div class="customer-info text-center">
<div class="feedback-hny">
<span class="ion ion-quote"></span>
<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
adipisicing elit. Labore rem, dicta assumenda mollitia molestias
quas nihil quasis.</p>
</div>
<div class="feedback-review mt-4">
<img src="images/c2.jpg" class="img-fluid" alt="">
<h5>Lora Grill</h5>

</div>
</div>
</div>

<div class="col-medium-3">
<div class="customer-info text-center">
<div class="feedback-hny">
<span class="ion ion-quote"></span>
<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
adipisicing elit. Labore rem, dicta assumenda mollitia molestias
quas nihil quasis.</p>
</div>
<div class="feedback-review mt-4">
<img src="images/c2.jpg" class="img-fluid" alt="">
<h5>Lora Grill</h5>

</div>
</div>
</div>

<div class="col-medium-3">
<div class="customer-info text-center">
<div class="feedback-hny">
<span class="ion ion-quote"></span>
<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
adipisicing elit. Labore rem, dicta assumenda mollitia molestias
quas nihil quasis.</p>
</div>
<div class="feedback-review mt-4">
<img src="images/c2.jpg" class="img-fluid" alt="">
<h5>Lora Grill</h5>

</div>
</div>
</div>

</section>


</body>
</html>