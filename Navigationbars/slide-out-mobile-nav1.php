<!DOCTYPE html>
<html>
<head>
<title>custom navigation 1</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="ionicons/css/ionicons.min.css" />
<style type="text/css">

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

body {margin:0; font-family: Myriad-Regular;}

.navigation{
background-color: #fff;
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
     margin-top: 32px;
    padding-top: 0;
    list-style-type: none;
    margin-left: 50px;
}

.nav_brand{
      position: fixed;
    top: 0px;
    z-index: 13;
    width: 100%;
  margin-left: 4px;
}
.nav_brand .brand_text{
 
 color: #111;
    font-size: 17px;
    position: absolute;
    /*left: 104px;*/
    left: 95px;
    top: 15px;
}


.logo_bg{

background-size: cover;
    background-repeat: no-repeat;
    height: 80px;
    width: 92px;
    z-index: 999;
    margin-top: -6px;
    position: absolute;
    margin-left: 2px;
    border-radius: 2px;

}

.logo_wrapper{
    position: absolute;
  left: 11px;
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
     border-bottom: 1px solid #DADADA;
}
ul.menu-nav li a {
  display: block;
 text-decoration: none;
  color: #111;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
/*.menu-nav li a:hover{
  color: #4CAF50;
}*/

ul.menu-nav li a:hover:not(.active){
  color: #4CAF50;
}
ul.menu-nav li a.active {
 background-color: #ffffff;
color: #3b6926;
padding-bottom: 0.2em;
border-bottom: 0.49em solid #3b6926;
}



.navigation .icon {
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
  background-color: #f9f9f9;
  padding: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;

    transform: translateY(2em);
  transition: all 0.3s;
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
  background-color: #ddd;
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



.justify-center {
    justify-content: center;
}
.justify-right {
    justify-content: flex-end;
}
.flex-wrap {
    flex-wrap: wrap;
}
.flex {
    display: flex;
}

.flex-grow{
  flex-grow: 1;
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
  font-size: 25px;
  width: 25px;
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

.ion-social-facebook {
  background: #3B5998;
  color: white;
}

.ion-social-twitter-outline {
  background: #55ACEE;
  color: white;
}
.ion-social-youtube-outline {
  background: #bb0000;
  color: white;
}





@media screen and (max-width: 900px) {

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
      margin-left: 4px;
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



.logo_bg{

background-size: cover;
    background-repeat: no-repeat;
    height: 53px;
    width: 60px;
        position: unset;
    border-radius: 2px;
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
    font-size: 18px;
    position: unset;
}

.nav_social_brands {
    position: unset;
    right: 0px;
    margin-left: 8px;
}

.nav_social_brands #link1_email, .nav_social_brands #link1_phone {
    margin-top: 0px;
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


  
</style>
</head>
<body>

<div class="navigation" id="navigation">

   <div class="nav_brand">
  <!--<div class="logo_bg" style="background-image: url('{{ asset("storage/logos_images/".$Logoname) }}')"></div>-->
  <div class="logo_wrapper" id="logobrand" logourl="{{ asset('storage/logos_images/'.$Logoname) }}" brandtext="Brunique developers">
  <img src="images/logo.png" alt="logo" class="logo_img" />
</div>
   <div class="brand_text">Brunique developers</div>
</div>

<div class="responsive-nav" id="responsive-nav">

   <ul class="menu-nav" id="menu-nav">
  <li ><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="custom-dropdown">
    <a class="dropbtn">Dropdown 
      <i class="ion ion-android-arrow-dropdown"></i>
    </a>
    <ul class="custom-dropdown-content">
      <li><a href="#">Responsive Link 1</a></li>
      <li><a href="#">Responsive Link 2</a></li>
      <li><a href="#">Link 3</a></li>
    </ul>
  </li> 

  <li><a href="#about">About</a></li>

   <li class="custom-dropdown">
    <a class="dropbtn">Dropdown 
      <i class="ion ion-android-arrow-dropdown"></i>
    </a>
    <ul class="custom-dropdown-content">
      <li><a href="#">Responsive Link 1</a></li>
      <li><a href="#">Responsive Link 2</a></li>
      <li><a href="#">Link 3</a></li>
    </ul>
  </li> 

<li ><a href="#"><i  id="cart-icon" class="ion ion-android-cart"></i> cart  <span id="cartbadge" class="badge_count">1</span>
</a></li>

<li><a href="#about">Live support</a></li>
<li><a href="#about">Account</a></li>
<li><a href="#about">Services</a></li>
<li><a href="#about">Client says</a></li>
<li><a href="#about">Programmes</a></li>

</ul>

<div class="nav_social_brands flex flex-wrap justify-right" id="nav_social_brands">

  <a class="navbar-brand-social-header" 
  id="link1_email" href="mailto:bruniquedeveloper@gmail.com"> 
  <i class=" ion-socials ion-ios-email"></i>bruniquedeveloper@gmail.com </a>

  <a class="navbar-brand-social-header" id="link1_phone" href="tel:256 701310265"> <i class=" ion-socials ion-ios-telephone"></i>256 701310265 </a>

  <a class="navbar-brand-social-header" id="link1_phone" href="tel:256 779162288"> <i class=" ion-socials ion-ios-telephone"></i>256 779162288 </a>

 <a class="navbar-brand-social-header" href="#" target="_blank" > 
<i class="ion ion-socials ion-social-facebook"></i></a>
 <a class="navbar-brand-social-header" href="#" target="_blank" > 
<i class="ion ion-socials ion-social-twitter-outline"></i></a>
 <a class="navbar-brand-social-header" href="#" target="_blank" > 
<i class="ion ion-socials ion-social-youtube-outline"></i></a>
 <a class="navbar-brand-social-header" href="#" target="_blank" > 
<i class="ion ion-socials ion-social-twitter-outline"></i></a>
</div>

</div>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px; margin-top:100px;">
  <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
    <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
    <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
    <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
    <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
    <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
    <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
    <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
    <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
    <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
    <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
</div>

<script>
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
</script>




</body>
</html>