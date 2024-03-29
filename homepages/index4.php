<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>home 4</title>
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





.slide-personal-services{
z-index: 5; 
transform: translate3d(0px, 0px, 0px);
}


.services-sec .serv-img {
    transition: all linear .4s;
    background: url(images/banner1.jpg) no-repeat;
    background-repeat: no-repeat !important;
    background-size: cover;
    /* background-size: 110% 110%;*/
    background-position: center center !important;
    padding: 0 !important;
    align-items: normal;
    /*animation: servicesimages 20s infinite !important;
    animation: shrink 5s infinite alternate !important;*/
     animation: shrink 20s linear infinite !important;
}
.slide-container {
    overflow: hidden;
}
.slide-container {
    width: 100%;
    height: 100vh;
    min-height: 100%;
    display: flex;
    align-items: center;
    padding-top: 7.75rem;
    position: relative;
}


.services-sec .service {
    text-align: left;
    position: relative;
    border-right: 2px solid #fff;
    overflow: hidden;
}

.services-sec .service .service-text {
    position: absolute;
    bottom: 0;
    padding: 35px;
    background-color: rgba(255, 255, 255,0.7);
}

.services-sec .service .service-text .serv-head {
    position: relative;
    font-weight: 700;
    font-size: 1.5rem;
     display: none;
}
.services-sec .service .service-text h2, .services-sec .service .service-text p {
    margin: 0;
}

.services-sec .service .service-text h2 {
    font-family: monumentextended, sans-serif;
    font-size: 2rem;
    margin-bottom: 10px;
    text-shadow: 1px 1px 1px rgb(255 255 255 / 10%);
}

.services-sec .service .service-text .ser-para {
    visibility: hidden;
    height: 0;
    overflow: hidden;
    font-size: 1.15rem;
        text-shadow: 1px 1px 1px rgb(255 255 255 / 10%);
    margin-bottom: 6px;
}

.servicemore {
    color: #000;
    text-align: center;
    /* display: none; */
}

.services-sec .service .servicewhitebg {
    width: 100%;
    height: 50%;
    left: 0 !important;
    bottom: 0 !important;
    top: auto;
    right: auto;
    /*background: #fff;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0, #fff 100%);*/
    position: absolute;
    z-index: -10;
    transition: all linear .2s;
}
.transformLeft, .transformRight {
    transform: translate(0, 0);
    opacity: 0.6;
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

.col-box {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}

.col-box:hover .service-text .ser-para{
 visibility: visible !important;
    height: auto !important;
}



/* has effect with eyes
@keyframes shrink {
  0%   { background-size: 100% auto; }
  50% { background-size: 140% auto; }
  100% { background-size: 100% auto; }
}*/

@keyframes shrink {
  0% {
    background-size: 110% auto;
  }
    50% { background-size: 140% auto; }
  100% {
    background-size: 100% auto;
  }
}


/*
.zoom-in-out-box {
  animation: zoom-in-zoom-out 5s ease infinite !important;
}
@keyframes zoom-in-zoom-out {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.5, 1.5);
  }
  100% {
    transform: scale(1, 1);
  }
}*/













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


.btn-default-custom {
    color: #000;
    background-color: #fff;
    border-color: #ccc;
padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
        border: 1px solid transparent;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  
    background-image: -webkit-linear-gradient(top,#fff 0,#e0e0e0 100%);
    background-image: -o-linear-gradient(top,#fff 0,#e0e0e0 100%);
    background-image: linear-gradient(to bottom,#fff 0,#e0e0e0 100%);
    background-repeat: repeat-x;
        text-shadow: 0 -1px 0 rgb(0 0 0 / 20%);
    -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
}
.btn-default-custom:focus, .btn-default-custom:hover {
    background-color: #e0e0e0;
    background-position: 0 -15px;
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


<div id="services" class="slide-personal-services services-sec">
        <div class="slide-container serv-img" style="background: url(images/banner4.jpg);">
		  
          <div class="col-box service service-1" >
            <div class="service-text servicetext" >
              <p class="serv-head serviceimage" >
              	<img alt="" src="images/banner4.jpg" class="service-img"/></p>
              <h2 class="" >Skilled Nursing</h2>
              <p class="ser-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
				<a href="javascript:void()" class="servicemore btn-default-custom" ><span class="moredetails"><i class="lni lni-plus"></i> More Details</span></a>
            </div>
            <div class="slide-photo servicewhitebg transformLeft"></div>
          </div>

          <div class="col-box service service-2" >
            <div class="service-text servicetext " >
              <p class="serv-head  serviceimage" >
              	<img alt="" src="images/banner1.jpg"  class="service-img" /></p>
              <h2 >Physical Therapy</h2>
              <p class="ser-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>
 </p>
				<a href="javascript:void()" class="servicemore btn-default-custom" ><span class="moredetails"><i class="lni lni-plus"></i> More Details</span></a>
            </div>
            <div class="slide-photo servicewhitebg transformLeft"></div>
          </div>

          <div class="col-box service service-3" >
            <div class="service-text servicetext" >
              <p class="serv-head serviceimage" >
              	<img alt="" src="images/banner4.jpg" class="service-img"/></p>
              <h2 class="" >Medical Supplies</h2>
              <p class="ser-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
				<a href="javascript:void()" class="servicemore btn-default-custom" ><span class="moredetails"><i class="lni lni-plus"></i> More Details</span> </a>
            </div>
            <div class="slide-photo servicewhitebg transformLeft"></div>
          </div>

          <div class="col-box service service-4" >
            <div class="service-text servicetext" >
              <p class="serv-head serviceimage" >
              	<img alt="" src="images/banner1.jpg" class="service-img" /></p>
              <h2  >Home Health Aid</h2>
              <p class="ser-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
<br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<a href="javascript:void()" class="servicemore btn-default-custom" ><span class="moredetails"><i class="lni lni-plus"></i> More Details</span></a>
            </div>
            <div class="slide-photo servicewhitebg transformLeft"></div>
          </div>
			  
		  
        </div>
      </div>


</div>



<script type="text/javascript">
    
if(document.getElementsByClassName("col-box")!=null){

  var services = document.getElementsByClassName("col-box");
  //serv-img

  for (var i = 0; i < services.length; i++) {
    services[i].onmouseover = function () {
      
var target = this;

var src = this.getElementsByClassName('service-img')[0].getAttribute('src');
//console.log(src);
document.getElementsByClassName('serv-img')[0].style.backgroundImage = "url("+src+")";
document.getElementsByClassName('serv-img')[0].classList.add("zoom-in-out-box");
};
}
}



</script>



</body>
</html>