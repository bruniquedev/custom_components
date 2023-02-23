<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>home 2</title>
<style>

body{
    margin: 0px;
    padding: 0px;
}

.header-fixed {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    z-index: 900;
}

.header {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    margin-top: 0px;
}
header {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
    background: rgba(0, 0, 0, 0.8);
    transition: all 0.7s linear 0s;
    display: block;
}	


.header-bg {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 0px;
    height: 0px;
    z-index: -1;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 0px;
    transition: all 0.3s ease-in-out 0s;
}

.header-container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

header#header .header-container {
    position: relative;
}

.brand-name{
	position: absolute;

}
.brand {
    float: left;
    margin-right: 1rem;
    white-space: nowrap;
    font-size: 1.5rem;
    text-transform: uppercase;
}
.brand a {
    color: inherit;
    text-decoration: none;
}
.font-custom {
    font-family: monumentextended, sans-serif;
}
header .logolight {
    display: inline-block !important;
}
.logo_img {
    height: 62px;
    width: 100%;
    border-radius: 8px;
    object-fit: contain;
}
.displaynone {
    display: none;
}
a{
    color: rgb(0, 123, 255);
    background-color: transparent;
    text-decoration: none;
}





.header-content {
	    padding-top: 1rem;
    padding-bottom: 1rem;
    margin-left: 17.25%;
    margin-right: 17.25%;
  
}
.d-none {
    display: none !important;
}

.row_container {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-100{
	position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

.header-contacts {
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.875rem;
}
.text-center {
    text-align: center !important;
}

.header-contact-divider {
    margin-left: 1.875rem;
    margin-right: 1.875rem;
    opacity: .2;
}

.header-contact-divider, .header-contact-item {
    display: inline-block;
    vertical-align: middle;
}
.header-contact-divider, .header-contact-item > a {
    color: rgb(255, 255, 255);
}
.header-contact-item > a:hover {
    color: #fff;
    text-decoration: underline;
}

.headercontact {
    float: right;
    font-size: 22px;
    line-height: 24px;
    text-align: center;
    position: absolute;
    top: 0px;
    right: 40px;
    font-family: monumentextended, sans-serif;
    color: rgb(179, 229, 159) !important;
}
.headercontact > a {
    color: rgb(179, 229, 159) !important;
}
.headercontact > a > span {
    font-size: 16px;
    color: #fff;
    font-family: dm sans, sans-serif;
}
.headercontact > a:hover {
    text-decoration: none;
}




.slide-personal-intro {
    background-size: cover;
    z-index: 7; 
    /*transform: translate3d(0px, 0px, 0px);*/
}

.slide-container {
     overflow: hidden;
    width: 100%;
    min-height: 100%;
    display: flex;
    align-items: center;
    padding-top: 7.75rem;
}
.slider01 {
    background: url(images/banner1.jpg);
    background-size: auto;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -webkit-animation: zoomin 20s ease-in;
    animation: zoomin 20s ease-in;
    transition: all .5s ease-in-out;
    overflow: hidden;
}
.slide-bg {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 10;
    overflow: hidden;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
}
.slide-intro-man {
    background-position: 50% 50%;
}
.slide-photo {
    position: absolute !important;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
}

.container_box {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.slide-container > .container_box {
    position: relative;
    z-index: 200;
    margin-top: 130px;
}



.sliderheading {
    background: rgba(250,250,250,0.9);
    border-bottom: 4px solid #b3e59f;
    padding: 50px 20px;
    width: 50%;
}
.sliderheading .slide-descr {
    font-size: 1.25rem;
    font-weight: bold;
}
.sliderheading .slide-descr, .sliderheading h1 {
    color: #000 !important;
}
.slide-descr-intro, .text-white .slide-descr {
    color: #fff;
}

.slide-descr {
    color: #000;
    font-size: 1.25rem;
    line-height: 1.56666667;
    text-rendering: optimizeLegibility;
}

.sliderheading h1.slide-title {
    letter-spacing: -.035em;
}

.sliderheading .slide-descr, .sliderheading h1 {
    color: #000 !important;
}
.slide-title {
    margin-bottom: 2rem;
    font-size: 6.5vmin;
    font-family: monumentextended, sans-serif;
    line-height: 1;
    color: #b3e59f;
    text-transform: capitalize;
}

.btn {
    display: inline-block;
    padding: 1rem 2.5rem;
    border-radius: 500px;
    font-weight: 700;
    font-size: 1.125rem;
    text-transform: uppercase;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    border: 1px solid transparent;
        line-height: 1.5;
}
.btn-primary,.btn-primary:hover, .btn-primary:visited, .btn-primary:focus {
    color: #fff;
    background: #397223;
    border-color: #b3e59f;
    box-shadow: none !important;
}

.justify-content-center {
    -ms-flex-pack: center!important;
    justify-content: center!important;
}

.mt-3, .my-3 {
    margin-top: 1rem!important;
}

</style>
</head>
<body>  


<header id="header" class="header header-fixed">
    <div class="header-bg"></div>
    <div class="header-container">
      <div class="brand"> 
      	<a href="#Intro">
        <div class="brand-name font-custom">
        	<img alt="" src="images/101520211845073.jpg" class="logo_img" />
        </div>
        </a> 
    </div>
     
      <div class="header-content">
        <div class="row_container">
          <div class="col-100">
            <div class="header-contacts text-center">
              <div class="header-contact-item"><a href="#About">About Us</a></div>
              <div class="header-contact-divider">/</div>
              <div class="header-contact-item"><a href="#Services">Services</a></div>
              <div class="header-contact-divider">/</div>
              <div class="header-contact-item"><a href="#Gallery">Gallery</a></div>
              <div class="header-contact-divider">/</div>
              <div class="header-contact-item"><a href="#Contact">Contact</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="headercontact"> <a href="tel:#"> <span>Call Us Now</span><br>
        123&nbsp;456&nbsp;7890 </a> </div>
    </div>
  
  </header>

<div id="content" class="content">

      <div class="slide-personal-intro">
        <div class="slide-container">
          <div class="slide-bg slider01">
            
            <div class="slide-photo slide-intro-man"></div>
          </div>
          <div class="container_box">
            <div class="row_container justify-content-center">
              <div class="text-center sliderheading mt-3">
				<div class="slide-descr slide-descr-intro">Lorem Ipsum is simply dummy text.</div>
				  <h1 class="slide-title">Home Health<br>
                  Care Services</h1>
				  
				  <a href="#About" class="btn btn-primary">Read More</a>
                
              </div>
            </div>
          </div>
        </div>
      </div>


</div>




</body>
</html>