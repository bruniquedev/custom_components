<!DOCTYPE html>
<html>
<head>
<title>custom navigation 1</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="ionicons/css/ionicons.min.css" />
<style type="text/css">

@font-face{
    font-family: "Myriad-Light";  
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

/*@font-face{
    font-family: Raleway-Black;  
    src: url(fonts/raleway/Raleway-Black.ttf) format("truetype");
}
@font-face{
    font-family: Raleway-BlackItalic;  
    src: url(fonts/raleway/Raleway-BlackItalic.ttf) format("truetype");
}*/

@font-face{
    font-family: Raleway-Bold;  
    src: url(fonts/raleway/Raleway-Bold.ttf) format("truetype");
}

/*@font-face{
    font-family: Raleway-BoldItalic;  
    src: url(fonts/raleway/Raleway-BoldItalic.ttf) format("truetype");
}

@font-face{
    font-family: Raleway-Light;  
    src: url(fonts/raleway/Raleway-Light.ttf) format("truetype");
}

@font-face{
    font-family: Raleway-LightItalic;  
    src: url(fonts/raleway/Raleway-LightItalic.ttf) format("truetype");
}

@font-face{
    font-family: Raleway-Regular;  
    src: url(fonts/raleway/Raleway-Regular.ttf) format("truetype");
}
@font-face{
    font-family: Raleway-Medium;  
    src: url(fonts/raleway/Raleway-Medium.ttf) format("truetype");
}
@font-face{
    font-family: Raleway-MediumItalic;  
    src: url(fonts/raleway/Raleway-MediumItalic.ttf) format("truetype");
}*/


body {margin:0; font-family: Myriad-Regular;}

  
  .Navigationair-slidairbar{
         position: fixed;
       background-color: #1f2533;
         z-index: 12;
  top: 0px;
  width: 100%;
    margin: 0;
  padding: 0;
      opacity: 1;
    border-radius: 1px;
  /*  box-shadow: 0px 20px 30px 3px rgb(0 0 0 / 55%) !important;*/
  box-shadow: 0px 4px 4px #ddd !important;
    }
    .Navigationair-slidairbar .Navigationair-slidairbar-top{
         margin: auto 2rem;
    width: 95%; 
           
    }
 .Navigationair-slidairbar-top .bar-top-col .nav_social_brands a{
      color: white;
    font-size: 15px;
    margin-right: 10px;
 }   
.Navigationair-slidairbar-top .bar-top-col .nav_social_brands a i{
    padding: 0px;
    font-size: 18px;
    position: relative;
    top: 3px;
    color: #fff !important;
}

.Navigationair-slidairbar .navigation {
  position: relative;
  max-height: 48px;
  width: 100%;
  display: flex;
  background-color: #fff;
    margin-bottom: 0px;
    border-color: #ffffff;
      border: 1px solid transparent;
      border-bottom: 1px solid #f47d23 !important;
      overflow: hidden;
      font-family: Raleway-Bold; 
}

.Navigationair-slidairbar .responsive-nav{
        max-height: 48px;
    position: relative;
    
  background-color: #fff;
margin: 0;
padding: 0;
margin-bottom: 0px;
overflow: hidden;
border-color: #333;
opacity: 1;
border-radius: 1px;
}


.Navigationair-slidairbar .responsive-nav .menu-nav{
     margin-top: 31px;
    padding-top: 0;
    list-style-type: none;
    display: flex;
    justify-content: flex-end;
    width: 80%;
}



.Navigationair-slidairbar .navigation .menu-nav{
      margin-top: 0;
    padding-top: 0;
  list-style-type: none;

}

.Navigationair-slidairbar .nav_brand{
     /*   position: fixed;
    top: 0px;
    z-index: 13;
    width: 100%;*/
        margin-left: 4px;
}
.Navigationair-slidairbar .nav_brand .brand_text{
  margin-top: 14px;
  color: #000;
  font-size: 16px;
  /* position: absolute;
   left: 60px;*/
}


.Navigationair-slidairbar .logo_bg{

  background-size: cover;
    background-repeat: no-repeat;
height:50px;
width: 50px;
/*z-index: 999;
margin-top: -15px;*/
    border-radius: 2px;

}

.Navigationair-slidairbar  .logo_wrapper{
   /* position: absolute;
  left: 11px;*/
  height: 50px;
    width: 50px;
     z-index: 999;
     margin-top: 0px;
      border-radius: 8px;
}
.Navigationair-slidairbar  .logo_img{

height:100%;
/*width: 100%;*/
 border-radius: 8px;
 object-fit: contain;
}

.Navigationair-slidairbar .navigation  ul.menu-nav li {
  display: inline-block;
 
}
.Navigationair-slidairbar .navigation ul.menu-nav li a {
  display: block;
 text-decoration: none;
  color: #000;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
/*.menu-nav li a:hover{
  color: #4CAF50;
}*/

.Navigationair-slidairbar .navigation ul.menu-nav li a:hover:not(.active){
  color: #000;
}
.Navigationair-slidairbar .navigation ul.menu-nav li a.active {
  
  color: #f37c20;
}



.Navigationair-slidairbar .navigation .icon {
  display: none;
}

.Navigationair-slidairbar .navigation .custom-dropdown {
  /*float: left;
  overflow: hidden;*/
}

.Navigationair-slidairbar .navigation .custom-dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  cursor: pointer;
  color: #000;
  padding: 14px 16px;
  margin: 0;
}

.Navigationair-slidairbar .navigation ul.custom-dropdown-content {
    overflow: hidden;
  visibility: hidden;
  opacity: 0;
  max-height: 0px;
 /*display: none;*/
  position: fixed;
  background-color: #f9f9f9;
  padding: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-top: 1px solid #FF5722;
   font-family: "Myriad-Regular";
  transform: scaleY(0);
    transform-origin: top;
    transition: 0.26s max-height, transform 0.4s ease;
}

.Navigationair-slidairbar .navigation ul.custom-dropdown-content li {
 display: block;
  color: black;
  text-decoration: none;
  display: block;
  text-align: left;
  border-bottom: 1px solid #DADADA;
}

.Navigationair-slidairbar .navigation ul.custom-dropdown-content li a{
  color: #000;
    padding: 10px 16px;
    font-size: 15px;
}

.Navigationair-slidairbar .navigation .custom-dropdown:hover .dropbtn {
  background-color: #fff;
  color: #000;
}

.Navigationair-slidairbar .navigation ul.custom-dropdown-content li a:hover, 
.Navigationair-slidairbar .navigation ul.custom-dropdown-content li a:hover {
  background-color: #ddd;
  color: black !important;
}



.Navigationair-slidairbar .navigation .custom-dropdown:hover ul.custom-dropdown-content {
   /* display: block;*/
 max-height: 1000px;
 visibility: visible; 
  opacity: 1;
  transform: scaleY(1);

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

.ui-badge {
    font-size: 13px;
    width: 17px;
    height: 17px;
    margin: 2px 1px 2px 2px;
    border-radius: 50%;
    color: #fff;
    background-color: #f32038;
    display: inline-block;
    position: relative;
    top: -5px;
        left: -3px;
    text-align: center;
}


.flex {
    display: flex;
}
.flex-column{
    flex-direction: column;
}
.flex-row{
    flex-direction: row;
}
.flex-wrap {
    flex-wrap: wrap;
}
.flex-grow{
  flex-grow: 1;
}
.align-items-center{
    align-items: center;
}
.justify-center {
    justify-content: center;
}
.justify-right {
    justify-content: flex-end;
}
.justify-left {
    justify-content: flex-start!important;
}
.justify-space-between{
justify-content: space-between;
}


.Navigationair-slidairbar .nav_social_brands{
position: relative;
    margin: 4px auto 10px auto;
}

.Navigationair-slidairbar .nav_social_brands a {
    text-decoration: none;
    color: #3b85bd;
    font-size: 14px;
}

.Navigationair-slidairbar .navbar-brand-social-header i {
    color: #7AB730;
}

.Navigationair-slidairbar .ion-socials {
    padding: 5px;
    font-size: 20px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 5px
}

.Navigationair-slidairbar .ion-social:hover {
    opacity: 0.7;
}


@media screen and (max-width: 320px){
.Navigationair-slidairbar .navigation .menu-nav li {
    margin-left: -40px !important;
}

}

@media screen and (max-width: 600px){
 .Navigationair-slidairbar-top > div > .bar-top-col:nth-child(2) {
    display: none;
  }

}



@media screen and (max-width: 1024px) {

.Navigationair-slidairbar .Navigationair-slidairbar-top {
    margin: auto auto;
  }
 .bar-top-col .nav_social_brands {
    display: flex;
  }

 
   .Navigationair-slidairbar .navigation{
    display:block;
  }
.Navigationair-slidairbar .navigation.h-auto{
      transition: max-height 0.5s linear;
    max-height: 1000px!important;
  }
  .Navigationair-slidairbar .navigation a.icon {
       font-size: 20px;
    color: #1f2533;
    text-align: center;
    padding: 5px 10px;
    position: absolute;
    right: 0px;
    text-decoration: none;
    display: block;
   z-index: 13;
  }




.Navigationair-slidairbar .responsive-nav {
    position: fixed;
    left: 0;
  margin-left:0;
    top: 96px;
    bottom: 0;
    max-width: 270px;
    max-height: 100%;
    width: 0%;
    height: 100%;
    width: 100%;
    display: block;
        z-index: 13;
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
    -webkit-transition: 0.5s all;
    transition: 0.5s all;
  }
 .Navigationair-slidairbar .responsive-nav.responsive {
    width: 100%;
    height: 100%;
    overflow-y: scroll;
        overflow-x: hidden;
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%);
    /*  box-shadow: 0px 20px 30px 3px rgb(0 0 0 / 55%) !important;*/
box-shadow: 0px 4px 4px #ddd !important;
  }

 .Navigationair-slidairbar .navigation.shadow:after {
    content: "";
    position: fixed;
    left: 0;
    right: 0;
    top: 95px;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 11;
  }

  .Navigationair-slidairbar .responsive-nav .menu-nav{
  margin-top: 0px;
      margin-left: 0px;
      display: block;
    justify-content: flex-end;
    width: auto;
        font-family: "Myriad-Regular";
}


.Navigationair-slidairbar .navigation .nav_brand {
    height: 50px;
}

.Navigationair-slidairbar .navigation .logo_wrapper{
  position: unset;
    height: 100%; 
}
.Navigationair-slidairbar .navigation .nav_brand .brand_text {
    margin-top: 14px;
    }

.Navigationair-slidairbar .navigation ul.menu-nav li{
 display: block;
    border-bottom: 1px solid #DADADA;
    margin-left: -40px;
}



.Navigationair-slidairbar .navigation .menu-nav{
  width: auto;
   max-height: 1000px;
   position: relative;
   margin: 0;
    /*overflow: hidden;
    visibility: hidden;
    opacity: 0;*/
    transition: max-height 0.4s linear;
}




.Navigationair-slidairbar .navigation .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .Navigationair-slidairbar .navigation .menu-nav li{
  /* display: block; */
    visibility: visible;
    opacity: 1;
    margin-left: -40px;
      transition:visibility 0.2s linear,opacity 0.2s linear;
  }

.Navigationair-slidairbar .navigation ul.menu-nav li a {
padding: 10px 16px;
font-size: 15px;
}

.Navigationair-slidairbar #nav_social_brands.nav_social_brands {
    justify-content: flex-start;
}

  .Navigationair-slidairbar .navigation .nav_social_brands.show_social_nav{
    display: block;
    margin-left: 8px;
  }



   .Navigationair-slidairbar .navigation .menu-nav .custom-dropdown ul li{
    margin-left: 0px;
    border-bottom: 1px solid #009688;
  }

  .Navigationair-slidairbar .navigation .menu-nav .custom-dropdown {float: none;}
  .Navigationair-slidairbar .navigation .menu-nav .custom-dropdown-content {position: relative;}
  .Navigationair-slidairbar .navigation .menu-nav .custom-dropdown .dropbtn {
    display: block;
    width: 100%;
    font-size: 15px;
    padding: 10px 16px
  }
}


  
</style>
</head>
<body>


<div class="Navigationair-slidairbar">

  <div class="Navigationair-slidairbar-top">
    <div class="flex align-items-center justify-space-between">
      <!--col 1-->
      <div class="bar-top-col">
   <div class="nav_social_brands flex flex-wrap">
 <a class="navbar-brand-social-header" href="mailto:mail@web.com" target="_blank" > 
<i class=" ion-socials ion-ios-email"></i>mail@website.com </a>
</div>
</div>
<!--/col 1-->
      <!--col 2-->
      <div class="bar-top-col">
   <div class="nav_social_brands flex flex-wrap">
 <a class="navbar-brand-social-header" href="tel:+1 (313) 200-2000" target="_blank" > 
<i class=" ion-socials ion-ios-telephone"></i>+1 (313) 200-2000</a>
 <a class="navbar-brand-social-header" href="tel:+1 (313) 400-8701" target="_blank" > 
<i class="ion-socials ion-ios-telephone"></i>tel:+1 (313) 400-8701</a>
</div>
</div>
<!--/col 2-->
      <!--col 2-->
      <div class="bar-top-col">
   <div class="nav_social_brands flex flex-wrap">
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
<!--/col 2-->
</div>

  </div>


<div class="navigation flex-wrap" id="navigation">
   <div class="nav_brand flex flex-wrap">
  <!--<div class="logo_bg" style="background-image: url('{{ asset("storage/logos_images/".$Logoname) }}')"></div>-->
  <div class="logo_wrapper" id="logobrand" logourl="{{ asset('storage/logos_images/'.$Logoname) }}" brandtext="Brunique developers">
  <img src="images/logo.png" alt="logo" class="logo_img" />
</div>
   <div class="brand_text">Brunique developers</div>
</div>

<div class="responsive-nav flex flex-wrap flex-grow justify-right" id="responsive-nav">

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

  <li><a href="#about">Live support</a></li>

<li ><a href="#"><i  id="cart-icon" class="ion ion-android-cart"></i> cart  <span id="cartbadge" class="ui-badge">1</span>
</a></li>

</ul>

<div class="nav_social_brands flex flex-wrap justify-right" id="nav_social_brands">
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

</div>

<div style="padding-left:16px; margin-top:95px;">
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
var navx = document.querySelector('.navigation');
  var x = document.querySelector(".responsive-nav");

  if (x.classList.contains("responsive")) {
      x.classList.remove("responsive");
      navx.classList.remove("h-auto");
      navx.classList.remove("shadow");

  }else{
   navx.classList.add("h-auto");
    x.classList.add("responsive");
    navx.classList.add("shadow");

  }
}
</script>




</body>
</html>