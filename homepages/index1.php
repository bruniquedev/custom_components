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



#header{
  text-align: center;
  background-color: #3b6926;
  opacity: 0.9;
  color: #ffffff;
  border-radius: 10px;
  font-weight: bold;
     font-family: "Myriad-Regular";
         font-weight: 700;
         font-style: normal;
  width: 80%;
}

#secondsection{
background-color:#f2f0e5;
  padding: 2px;
}



.navigation{
background-color: #fff;
margin-top: 75px;
 /*font-family: "CenturyGothic-bold";*/
}

.responsive-nav{
  background-color: #fff;
position: fixed;
z-index: 12;
top: 0px;
width: 100%;
height: 80px;
margin: 0;
padding: 0;
margin-bottom: 0px;
overflow: hidden;
border-color: #333;
opacity: 1;
border-radius: 1px;
/*  box-shadow: 0px 20px 30px 3px rgb(0 0 0 / 55%) !important;*/
box-shadow: 0px 4px 4px #ddd !important;
}

.responsive-nav .menu-nav{
     margin-top: 31px;
    padding-top: 0;
    list-style-type: none;
    margin-left: 132px;
}

.nav_brand{
      position: fixed;
    top: 0px;
    z-index: 13;
    width: 100%;
}
.nav_brand .brand_text{
 
 color: #111;
   /* font-size: 17px;*/
   font-size: 25px;
    position: absolute;
    left: 145px;
    top: 15px;
}
.brand_text .lohny {
    color: #ff7315;
}


.logo_bg{

background-size: cover;
    background-repeat: no-repeat;
    height: 80px;
    width: 80px;
    z-index: 999;
    margin-top: 0px;
    position: absolute;
    margin-left: 10px;
    border-radius: 8px;

}
.logo_wrapper{
    position: absolute;
  left: 0px;
  height: 80px;
    width: 80px;
     z-index: 999;
     margin-top: 0px;
      border-radius: 8px;
}
.logo_img{

height:100%;
/*width: 100%;*/
 border-radius: 8px;
 object-fit: contain;
}

ul.menu-nav li {
  display: inline-block;
     /*border-bottom: 1px solid #DADADA;*/
}
ul.menu-nav li a {
  display: block;
 text-decoration: none;
  color: #111;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 15px;
  /*text-transform: uppercase;*/
}
/*.menu-nav li a:hover{
  color: #4CAF50;
}*/

ul.menu-nav li a:hover:not(.active){
  color: #ef9e41;
}
ul.menu-nav li a.active {
     background-color: #ffffff;
    color: #30323a;
    padding-bottom: 0.1em;
    border-bottom: 0.49em solid #f19b38;
}

.person-account-icon{
  color: #fff;
    font-size: 20px;
    width: 25px;
    height: 25px;
    background: #333333;
    border-radius: 50%;
    display: inline-block;
    text-align: center;
}
.person-account-icon:hover{
  background: #ff7315;
}

.shopping-bag-btn{
  color: #fff;
}
li.shopping-bag-btn a{
  color: #fff !important;
       background: #333333;
    border-radius: 25px;
        text-transform: capitalize;
    font-weight: 600;
    text-align: center !important;
    padding: 8px 16px !important;
} 
li.shopping-bag-btn a:hover{
  color: #fff !important;
  background: #ff7315;
}
#cart-icon{
  font-size: 20px !important;
}
#search-icon{
font-size: 20px !important;
}

 .badges {
  background-color: blue;
  color: white;
  font-size: 15px;
  margin-left: 5px;
}

.navigation .icon {
  display: none;
}
.navigation .mobile-cart-icon{
display: none;
}

.custom-dropdown {
  /*float: left;
  overflow: hidden;*/
}

.custom-dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  cursor: pointer;
  color: #111;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

ul.custom-dropdown-content {
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  height: 0px;
 /*display: none;*/
  position: fixed;
      top: 78px;
      z-index: 5;
  background-color: #f9f9f9;
  padding: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  
border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
    transform: translateY(2em);
  transition: all 0.3s;
}

ul.custom-dropdown-content:before{
  content: '';
    width: 10px;
    height: 10px;
    background: #ff7315;
    border: 1px #d5d5d5ee solid;
    display: block;
    border-right: none;
    border-bottom: none;
    transform: translateX(-50%) rotateZ(45deg);
    position: absolute;
    top: -5px;
    left: 49%;
    z-index: 1;
}


ul.custom-dropdown-content li {
 display: block;
  color: black;
  text-decoration: none;
  display: block;
  text-align: left;
}

ul.custom-dropdown-content li a{
  color: black;
}

.custom-dropdown:hover .dropbtn {
  background-color: #fff;
  color: #111;
}

ul.custom-dropdown-content li a:hover, ul.custom-dropdown-content li a:hover {
  background-color: #fff;
  color: black !important;
   /*color: #ef9e41 !important;*/
}

ul.custom-dropdown-content li.active, ul.custom-dropdown-content li a.active{
 background-color: #fff !important;
  color: black !important;
}


.custom-dropdown:hover ul.custom-dropdown-content {
  /* display: block;*/
 height: auto;
 visibility: visible; 
  opacity: 1;
  transform: translateY(0%);
  transition-delay: 0s, 0s, 0.3s; /* this removes the transition delay so the menu will be visible while the other styles transition */

}



.badge_count {
  color: #fff;
    background-color: #f32038;
    position: relative;
    top: -6px;
    /*left: 17px;*/
    line-height: 1; 
    padding: 4px;
    border-radius: 50%;
    font-weight: 600;
    font-size: 12px;
}


.nav_social_brands{
    position: absolute;
    right: 30px;
    top: 0;
}
.nav_social_brands #link1_email,
.nav_social_brands #link1_phone{
margin-right: 5px;
margin-top: 9px;
color: #111111;
}

.nav_social_brands a{
   text-decoration: none;
  color: #3b85bd;
}
.nav_social_brands a:hover {
    color: #23527c;
}

.ion-socials {
  padding: 5px;
  font-size: 20px;
  width: 20px;
  height: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 5px;
}

.nav_social_brands #link1_email i,
.nav_social_brands #link1_phone i{
padding: 0px;
    font-size: 20px;
}

.ion-social:hover {
    opacity: 0.7;
}


 /*for navigation to stick at the top*/
.sticker{

position:fixed;
top:0px;
z-index:1048;
width:100%;
transition:all 3.0s ease-in-out;
}

@media screen and (max-width: 900px) {

.navigation {
    margin-top: 55px;
}

.logo_wrapper{
  position: unset;
    height: 100%; 
}

.responsive-nav {
    left: 0;
  margin-left:0;
    top: 0;
    bottom: 0;
    max-width: 270px;
    width: 0%;
    height: 100%;
        z-index: 13;
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
    -webkit-transition: 0.5s all;
    transition: 0.5s all;
  }
  .responsive-nav.responsive {
    width: 100%;
    height: 100%;
    overflow-y: scroll;
        overflow-x: hidden;
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%);
  }

  .navigation.shadow:after {
    content: "";
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 11;
  }

.responsive-nav .menu-nav{
  margin-top: 0px;
      margin-left: 40px;
}
ul.menu-nav li{
     display: block;
    margin-left: -40px;
} 

ul.menu-nav li a.active {
border-bottom: 0.1em solid #DADADA;
}

.custom-dropdown .dropbtn{
    display: none;
  }

ul.custom-dropdown-content{
    top: 0px;
}

  .navigation a.icon {
    font-size: 25px;
    color: #302c2c;
    text-align: center;
    padding: 10px 16px;
    position: fixed;
    z-index: 13;
    right: 0px;
    text-decoration: none;
    display: block;

  }

    .navigation a.mobile-cart-icon {
    font-size: 25px;
    color: #002855;
    text-align: center;
    padding: 10px 16px;
    position: fixed;
    z-index: 13;
    right: 35px;
    top: 0px;
    text-decoration: none;
    display: block;

  }



.logo_bg{

background-size: cover;
    background-repeat: no-repeat;
    height: 60px;
    width: 60px;
        position: unset;
    margin-top: 0px; 
    margin-left: 0px;

}

.nav_brand{
  display: flex;
  background-color: #fff;
  border-color: #333;
opacity: 1;
border-radius: 1px;
height: 60px;
/*  box-shadow: 0px 20px 30px 3px rgb(0 0 0 / 55%) !important;*/
box-shadow: 0px 4px 4px #ddd !important;
}
.nav_brand .brand_text {
    margin-top: 18px;
    color: #111;
    font-size: 17px;
    position: unset;
    margin-left: 35px;
    font-weight: bold;
}

.nav_social_brands {
    position: unset;
    right: 0px;
    margin-left: 8px;
}

.nav_social_brands #link1_email, .nav_social_brands #link1_phone {
       margin-top: 0px;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}


}

@media screen and (max-width: 900px) {
  
 
  .navigation .icon {
    position: absolute;
    right: 0;
    top: 0;
  }


   .menu-nav .custom-dropdown ul li{
    margin-left: 0px;
  }

  .menu-nav .custom-dropdown {float: none;}
  .menu-nav .custom-dropdown-content {position: relative;}
  .menu-nav .custom-dropdown .dropbtn {
    display: block;
    width: 100%;
  }
}



@media only screen and (min-width: 280px) and (max-width: 320px) {
 .nav_brand .brand_text {
    font-size: 13px;
        margin-left: 22px;
}   
}

@media only screen and (max-width: 360px) {
 .nav_brand .brand_text {
    font-size: 16px;
        margin-left: 23px;
} 
    }



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



/*------------cart popup window----------*/
#staplesbmincart {
    display: none;
    position: fixed;
    right: 2%;
    top: 16%;
    width: 420px;
}

.sbmincart-showing {
    display: block !important;
    z-index: 9999;
    -webkit-animation: zoomIn .3s ease;
    animation: zoomIn .3s ease;
}

#staplesbmincart .staplesbmincart-summary {
    position: relative;
    padding: 1em;
    background: #fbfbfb;
    border-radius: 0;
    color: #232020;
    box-shadow: none;
    border: 1px solid #ddd;
    border-radius: 6px;
     font-size: 16px;
    font-weight: bold;
}
.sbmincart-suc-cart-text {
    float: left;
    color: #232020;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    font-family: 'Lato', sans-serif;
}
#staplesbmincart .sbmincart-closer {
    float: right;
    margin: -8px -10px 0;
    padding: 0 10px;
    background: 0;
    border: 0;
    font-size: 22px;
    cursor: pointer;
    font-weight: bold;
    outline: none;
}

#staplesbmincart .staplesbmincart-summary .sbmincart-body {
    overflow-y: scroll;
    max-height: 300px;
    border-radius: 6px;
    clear: both;
    /*float: left;
    width: 100%;*/
    margin: 5px 0 20px;
    padding: 1em;
    background: #f5f0f0;
    border: none;
    border-radius: 0px;
    box-shadow: none;
}
#staplesbmincart .sbmincart-footer {
    clear: left;
    text-align: center;
    margin-right: 0;
    position: relative;
}
p.sbmincart-text {
    color: #f44336;
    font-weight: 500;
}
/*------------/cart popup window----------*/


/*------------side login  window----------*/
.overlay-login {
    display: none;
    position: fixed;
    top: 0;
    background: #3a3535;
    overflow: auto;
    z-index: 9999;
    padding: 3em 3em;
    right: 0;
    height: 100%;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.signup-showing{
display: block !important;
}

.text-left {
    text-align: left !important;
}
.overlay-login button.overlay-close1 {
    z-index: 999;
    color: #fff;
    right: 0;
    width: 40px;
    height: 40px;
    position: absolute;
    left: 20px;
    top: 20px;
    overflow: hidden;
    background: none;
    color: #fff;
    border: 2px solid #232020;
    cursor: pointer;
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -o-border-radius: 6px;
    -moz-border-radius: 6px;
}
.overlay-login .wrap {
    margin: 5em auto 0;
}
.overlay-login .wrap h5 {
    font-size: 2em;
    color: #fff;
}

.login-bghny {
    background: #232020;
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -o-border-radius: 6px;
    -moz-border-radius: 6px;
}

p.login-texthny {
    color: #f4f4f4;
    font-size: 16px;
    font-weight: 600;
    text-transform: capitalize;
}

.form-control-input {
    border-radius: 4px;
    outline: none;
    border: none;
    color: #6b778d;
    font-size: 16px;
    padding: 10px 10px;
    background: #fff;
}
.form-control-input {
    display: block;
    width: auto;
   /* height: calc(1.5em + 0.75rem + 2px);*/
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.mb-form-group {
    margin-bottom: 1rem;
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
}
.login-bghny .form-check label {
    color: #fff;
    font-size: 14px;
    cursor: pointer;
}

.userhny-check input.form-check {
    display: none;
}
.userhny-check .checkmark {
    position: absolute;
    top: 0px;
    left: 0;
    height: 16px;
    width: 16px;
    background-color: #f8f9fa;
    border: 1px solid #3a3535;
    border-radius: 4px;
}

.userhny-check label.container input:checked~.checkmark {
    background-color: #ff7315;
    border: transparent;
}

.userhny-check label.container input:checked~.checkmark:after {
    display: block;
}
.userhny-check label.container .checkmark:after {
    left: 5px;
    top: 0px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}
.userhny-check .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.userhny-check p.privacy-policy {
    margin: 0;
    font-size: 15px;
    color: #c5b2b2;
    font-weight: 600;
}

button.submit-login.btn-custom {
    box-shadow: none;
    background: #ff7315;
    padding: 12px 20px;
    border-radius: 25px;
    border: none;
    color: #fff;
    font-size: 16px;
    display: block;
    width: 100%;
    font-weight: 600;
}

.btn-custom {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.clearfix::after {
    display: block;
    clear: both;
    content: "";
}



.text-muted {
    color: #6c757d !important;
}
.form-text {
    display: block;
    margin-top: 0.25rem;
}
small, .small {
    font-size: 80%;
    font-weight: 400;
}
.text-center {
    text-align: center !important;
}

.mb-2, .my-2 {
    margin-bottom: 0.5rem !important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem !important;
}

.ml-auto, .mx-auto {
    margin-left: auto !important;
}
.mr-auto, .mx-auto {
    margin-right: auto !important;
}
.p-4 {
    padding: 1.5rem !important;
}
.mw-100 {
    max-width: 100% !important;
}
/*------------/side login window----------*/



/*------------search popup window----------*/
#search_bar_container.pop-overlay {
    position: fixed;
    top: 0px;
    left: 0;
    right: 0;
    transition: opacity 0ms;
    visibility: hidden;
    opacity: 0;
    z-index: 99;
    background: rgba(25, 23, 23, 0.81);
    box-shadow: 1px 1px 4px 0 rgb(0 0 0 / 85%);
    height: 100vh;
}

.show-search-pop-overlay{
    visibility: visible !important;
    opacity: 1 !important;
}

#search_bar_container .popup {
    margin: 0rem auto;
    padding: 40px 50px;
    max-width: 700px;
    border-radius: 3px;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}
form.search-box-form {
    display: flex;
}

#search_bar_container .popup form input[type="search"] {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    color: #555;
    border: none;
    height: 50px;
    border-radius: 25px;
    background: #fff;
    padding: 0 20px;
    width: 70%;
    border-radius: 0;
    -webkit-border-top-left-radius: 25px;
    -webkit-border-bottom-left-radius: 25px;
    -moz-border-radius-topleft: 25px;
    -moz-border-radius-bottomleft: 25px;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
}

#search_bar_container .popup form button {
    border: none;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    color: #fff;
    width: 30%;
    background: #ff7315;
    line-height: 35px;
    display: inline-block;
    border-radius: 25px;
    transition: 0.5s ease-out;
    font-weight: 700;
    display: block;
    height: 50px;
    margin: 0 auto;
    border-radius: 0;
    -webkit-border-top-right-radius: 25px;
    -webkit-border-bottom-right-radius: 25px;
    -moz-border-radius-topright: 25px;
    -moz-border-radius-bottomright: 25px;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
}
#search_bar_container .close {
    position: absolute;
    top: 20px;
    right: 40px;
    transition: all 200ms;
    font-size: 40px;
    text-decoration: none;
    color: #fff;
    opacity: 1;

    float: right;
    font-weight: 700;
    line-height: 1;
    text-shadow: 0 1px 0 #fff;

}
#search_bar_container a {
    color: #fff;
    font-size: 20px;
}
/*------------/search popup window----------*/


/*---------------right side bar-----------------*/
#rightside-sidebar {
    width: 90px;
    position: fixed;
    height: 100%;
    z-index: 1000;
    right: 0px;
    /*top: 0;*/
    margin-top: 60px;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    overflow-y: auto;
}
#rsideBar.r-side-bar{
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    padding: 20px 5px;
    /*padding-top: 70px;*/
    margin-bottom: 70px;
    background: #0D1326;
    border-top-left-radius: 9px;
    border-bottom-left-radius: 9px;
}
#rsideBar.r-side-bar .rsidebar-btns {
    border-top: 1px solid #41414d;
    padding-top: 30px;
}
#rsideBar.r-side-bar a {
    display: block;
    color: #e6ebff;
    text-decoration: none;
    line-height: 24px;
    opacity: .6;
    margin-bottom: 20px;
    text-align: center;
}
#rsideBar.r-side-bar span.rside-icon {
    display: block;
}
/*-----------------/right side bar--------------*/

/*-----------------home area or banner--------------*/
.bannerhny-content {
    display: flex;
  flex-wrap: wrap;
  flex-grow: 1;
    align-items: center;
}

.right-banner,.left-banner,.item {
    min-height: 38em;
}
.left-banner{
width: 60%;

}



 .left-banner .item {
    background: url(images/banner1.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    align-items: center;
}

/*adjust image brightness*/
.left-banner .item::before {
    content: '';
    display: block;
    position: absolute;
    background-color: #000;
    opacity: 0.2;
    width: 60%;
    min-height: 38em;
}

  .item-caption {
    text-align: left;
    /* margin: -16px auto; */
    position: absolute;
    margin-left: 46px;
    /* right: 15%; */
    bottom: 28%;
    top: 128px;
    /* left: 5%; */
    z-index: 10;
    padding: 0;
    color: #fff;
}

.item-caption h3 {
    font-size: 62px;
    text-transform: uppercase;
    line-height: 72px;
}
a.shop-button.btn-custom {
    display: inline-block;
    outline: none;
    border: none;
    font-weight: 600;
    padding: 10px 26px;
    font-size: 16px;
    background-color: #fff;
    margin-top: 30px;
    color: #232020;
    border-radius: 25px;
}

a.shop-button.btn-custom:hover {
    background: #ff7315;
    color: #fff;
}

a{ text-decoration:none; }



.right-banner {
  width: 40%;
    background: url(images/left3.jpg) no-repeat center;
    background-size: cover;
    align-items: center;
}
.right-item-caption{
  margin-left: 4em;
  position: absolute;
    top: 230px;
}
.right-item-caption h4 {
    font-size: 56px;
    text-transform: uppercase;
    line-height: 66px;
    color: #fff;
    
}
/*-----------------/home area--------------*/


/*-----------------products area--------------*/
h3.hm-title{
    font-size: 40px;
    line-height: 50px;
    color: #232020;
    margin-bottom: 2px;
    text-transform: uppercase;
    font-weight: 700;
}

.products-contain{

    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;

}
.ecom-items-grids {
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
     justify-content: center;
     align-items: center;
    /*margin-right: -15px;
    margin-left: -15px;*/
   max-width: 100%;
}

.product-item{
  width: 255px;
    margin-left: 15px;
    position: relative;
}
 
.product-item .product-image{
  overflow: hidden;
  position: relative;
}
.product-image img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}
.product-image .social {
    padding: 0;
    margin: 0;
    position: absolute;
    bottom: 50px;
    right: 25px;
    z-index: 1;
}
.product-item .social li {
    margin: 0 0 10px;
    display: block;
    transform: translateX(100px);
    transition: all .5s;
}

.product-item .social li a {
    color: #232020;
    background-color: #fff;
    font-size: 17px;
    line-height: 45px;
    text-align: center;
    height: 45px;
    width: 45px;
    border-radius: 50%;
    display: block;
    transition: all .3s ease 0s;
    box-shadow: 0 0 8px rgb(0 0 0 / 20%);
}
.product-item .social li a:before {
    content: attr(data-tip);
    color: #fff;
    background-color: #232020;
    font-size: 12px;
    line-height: 22px;
    border-radius: 3px;
    padding: 0 5px;
    white-space: nowrap;
    opacity: 0;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    top: -30px;
}
.product-item .social li a:after {
    content: '';
    height: 15px;
    width: 15px;
    border-radius: 0;
    transform: translateX(-50%) rotate(45deg);
    top: -22px;
    z-index: -1;
}

.product-item .add-to-cart {
    color: #fff;
    background-color: #232020;
    font-size: 16px;
    font-weight: 600;
    text-align: center;
    width: 100%;
    padding: 10px 10px;
    display: block;
    position: absolute;
    left: 0;
    bottom: -100%;
    transition: all .3s;
}
.transmitv-cart {
    font-size: 1em;
    color: #fff;
    margin: 0;
    text-decoration: none;
    border: none;
    background: none;
    outline: none;
}

.product-item .product-content {
    padding: 20px 10px;
    text-align: center;
}
.product-item .title {
    font-size: 18px;
    margin: 0 0 6px 0;
    color: #ff7315;
}
.product-item .title a {
    color: #232020;
    font-weight: 700;
}

.product-item .price {
    color: #3a3535;
    font-size: 15px;
    font-weight: bold;
    font-family: 'Lato', sans-serif;
}
span.price del {
    color: #6b778d;
    font-weight: 400;
    margin-right: 6px;
}

.product-item:hover .add-to-cart {
    bottom: 0;
}
.product-item .add-to-cart:hover {
    background-color: #ff7315;
    text-decoration: none;
}
.transmitv-cart:hover, .back a:hover{
  box-shadow: none;
}
.product-item:hover .social li {
    transform: translateX(0);
}

.product-item:hover .social li:nth-child(2) {
    transition-delay: .15s;
}


/*-----------------products area--------------*/

</style>
</head>
<body>  

<?php include 'header_index1.php'; ?>




<div class="bannerhny-content">

<!--banner-slider-->
<div class="content-baner-info left-banner">
  <div class="item"> 
<div class="item-caption">
<h3>Men's
Fashion
<br>60% Off</h3>
<a href="#" class="shop-button btn-custom">Shop Now</a>
</div>
  </div>
</div>
<!--/banner-slider-->

<!--banner-->
<div class="content-baner-info right-banner">
<div class="right-item-caption">
          <h4>
            Men's
            Fashion
            <br>50% Off </h4>
           <a href="#" class="shop-button btn-custom">Shop Now</a>
  </div>
</div>
<!--banner-->

</div>




<h3 class="hm-title text-center">Shop With <span>Us</span></h3>
<p class="text-center">Handpicked Favourites just for you</p>

<section class="products-contain">
<div class="ecom-items-grids">

<div class="product-item transmitv">
            <div class="product-image">
              <a href="ecommerce-single.html">
                <img class="pic-2 img-fluid" src="images/shop-11.jpg">
              </a>
              <ul class="social">
                  <li><a href="#" data-tip="Quick View"><span class="ion ion-eye"></span></a></li>

                  <li><a href="#" data-tip="Add to Cart"><span class="ion ion-android-cart"></span></a>
                  </li>
              </ul>
              <div class="transmitv single-item">
              <form action="#" method="post">
                  <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                    Add to Cart
                  </button>
                </form>
              </div>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="ecommerce-single.html">Women Maroon Top </a></h3>
              <span class="price"><del>$975.00</del>$899.99</span>
            </div>
          </div>

       <div class="product-item transmitv">
            <div class="product-image">
              <a href="ecommerce-single.html">
                <img class="pic-2 img-fluid" src="images/shop-11.jpg">
              </a>
              <ul class="social">
                  <li><a href="#" data-tip="Quick View"><span class="ion ion-eye"></span></a></li>

                  <li><a href="#" data-tip="Add to Cart"><span class="ion ion-android-cart"></span></a>
                  </li>
              </ul>
              <div class="transmitv single-item">
              <form action="#" method="post">
                  <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                    Add to Cart
                  </button>
                </form>
              </div>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="ecommerce-single.html">Women Maroon Top </a></h3>
              <span class="price"><del>$975.00</del>$899.99</span>
            </div>
          </div>
          
          <div class="product-item transmitv">
            <div class="product-image">
              <a href="ecommerce-single.html">
                <img class="pic-2 img-fluid" src="images/shop-11.jpg">
              </a>
              <ul class="social">
                  <li><a href="#" data-tip="Quick View"><span class="ion ion-eye"></span></a></li>

                  <li><a href="#" data-tip="Add to Cart"><span class="ion ion-android-cart"></span></a>
                  </li>
              </ul>
              <div class="transmitv single-item">
              <form action="#" method="post">
                  <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                    Add to Cart
                  </button>
                </form>
              </div>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="ecommerce-single.html">Women Maroon Top </a></h3>
              <span class="price"><del>$975.00</del>$899.99</span>
            </div>
          </div>

          <div class="product-item transmitv">
            <div class="product-image">
              <a href="ecommerce-single.html">
                <img class="pic-2 img-fluid" src="images/shop-11.jpg">
              </a>
              <ul class="social">
                  <li><a href="#" data-tip="Quick View"><span class="ion ion-eye"></span></a></li>

                  <li><a href="#" data-tip="Add to Cart"><span class="ion ion-android-cart"></span></a>
                  </li>
              </ul>
              <div class="transmitv single-item">
              <form action="#" method="post">
                  <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                    Add to Cart
                  </button>
                </form>
              </div>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="ecommerce-single.html">Women Maroon Top </a></h3>
              <span class="price"><del>$975.00</del>$899.99</span>
            </div>
          </div>

          <div class="product-item transmitv">
            <div class="product-image">
              <a href="ecommerce-single.html">
                <img class="pic-2 img-fluid" src="images/shop-11.jpg">
              </a>
              <ul class="social">
                  <li><a href="#" data-tip="Quick View"><span class="ion ion-eye"></span></a></li>

                  <li><a href="#" data-tip="Add to Cart"><span class="ion ion-android-cart"></span></a>
                  </li>
              </ul>
              <div class="transmitv single-item">
              <form action="#" method="post">
                  <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                    Add to Cart
                  </button>
                </form>
              </div>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="ecommerce-single.html">Women Maroon Top </a></h3>
              <span class="price"><del>$975.00</del>$899.99</span>
            </div>
          </div>

          <div class="product-item transmitv">
            <div class="product-image">
              <a href="ecommerce-single.html">
                <img class="pic-2 img-fluid" src="images/shop-11.jpg">
              </a>
              <ul class="social">
                  <li><a href="#" data-tip="Quick View"><span class="ion ion-eye"></span></a></li>

                  <li><a href="#" data-tip="Add to Cart"><span class="ion ion-android-cart"></span></a>
                  </li>
              </ul>
              <div class="transmitv single-item">
              <form action="#" method="post">
                  <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                    Add to Cart
                  </button>
                </form>
              </div>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="ecommerce-single.html">Women Maroon Top </a></h3>
              <span class="price"><del>$975.00</del>$899.99</span>
            </div>
          </div>   

</div>
</section>

<script type="text/javascript">
  //////////////////////////navigation/////////////////////////////
  function myFunction() {
  var n = document.getElementById("navigation");
  var x = document.getElementById("responsive-nav");
  //  var s = document.getElementById("nav_social_brands");
   
  
  if (x.className === "responsive-nav") {
    x.className += " responsive";
    n.className += " shadow";
   // s.className +=" show_social_nav";
  } else {
    x.className = "responsive-nav";
    n.className = "navigation";
   // s.className ="nav_social_brands";
  }
}
///////////////////////////////////////////////////


///////////////////////////////////// for cart///////////////////////////////////////
   if(document.getElementsByClassName('shopping-bag-btn')[0]!=null){
 document.getElementsByClassName('shopping-bag-btn')[0].addEventListener("click", function(){
    HandleSemiCart();
  });
 document.getElementsByClassName('sbmincart-closer')[0].addEventListener("click", function(){
      HandleSemiCart();
  });
}

function HandleSemiCart(){
   var elem = document.getElementById('staplesbmincart');
          console.log(elem);
       if(elem.classList.contains('sbmincart-showing')){
         elem.classList.remove("sbmincart-showing");//remove aclass
       }else{
             elem.className += " sbmincart-showing"; // add a class
       }
}
///////////////////////////////////////////////////////////////////////////////


/////////////////////////////////for login window//////////////////////////////////
   if(document.getElementsByClassName('signinModalmode')[0]!=null){
 document.getElementsByClassName('signinModalmode')[0].addEventListener("click", function(){
    Handle_signup();
  });
 document.getElementsByClassName('signupModalmode')[0].addEventListener("click", function(){
      Handle_signup();
  });
  document.getElementsByClassName('overlay-close1')[0].addEventListener("click", function(){
      Handle_signup();
  });
 
}

function Handle_signup(){
   var elem = document.getElementsByClassName('overlay-login')[0];
          console.log(elem);
       if(elem.classList.contains('signup-showing')){
         elem.classList.remove("signup-showing");//remove aclass
       }else{
             elem.className += " signup-showing"; // add a class
       }
}
///////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////for search popup//////////////////////////////////
   if(document.getElementsByClassName('search-web-app')[0]!=null){
 document.getElementsByClassName('search-web-app')[0].addEventListener("click", function(){
    Handle_searchbar();
  });

  document.getElementsByClassName('close-searchbar')[0].addEventListener("click", function(){
      Handle_searchbar();
  });
 
}

function Handle_searchbar(){
   var elem = document.getElementById('search_bar_container');
          console.log(elem);
       if(elem.classList.contains('show-search-pop-overlay')){
         elem.classList.remove("show-search-pop-overlay");//remove aclass
       }else{
             elem.className += " show-search-pop-overlay"; // add a class
       }
}
///////////////////////////////////////////////////////////////////////////////////

</script>

</body>
</html>