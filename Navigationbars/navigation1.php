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

.navigation {
    position: fixed;
  z-index: 12;
  overflow: hidden;
  height: 48px;
  width: 100%;
  top: 0px;
  margin: 0;
  padding: 0;
  display: flex;
  background-color: #333;
    margin-bottom: 0px;
    border-color: #ffffff;
    opacity: 1;
    border-radius: 1px;
  /*  box-shadow: 0px 20px 30px 3px rgb(0 0 0 / 55%) !important;*/
  box-shadow: 0px 4px 4px #ddd !important;
}

.navigation .menu-nav{
  width: 78%;
      margin-top: 0;
    padding-top: 0;
  list-style-type: none;
}

.nav_brand{
     /*   position: relative;
    top: 0px;
    z-index: 13;
    width: 100%;*/
        margin-left: 4px;
}
.nav_brand .brand_text{
  margin-top: 14px;
  color: #fff;
  font-size: 16px;
}


.logo_bg{

  background-size: cover;
    background-repeat: no-repeat;
height:50px;
width: 50px;
/*z-index: 999;
margin-top: -15px;*/
    border-radius: 2px;

}



.logo_wrapper{
    /*position: absolute;
  left: 11px;*/
  height: 50px;
    width: 50px;
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
 
}
ul.menu-nav li a {
  display: block;
 text-decoration: none;
  color: white;
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
  background-color: #4CAF50;
  color: #fff;
}

#float-right-on-navbar{
    float: right;
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
  color: white;
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
  background-color: #111;
  color: white;
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
.flex-wrap {
    flex-wrap: wrap;
}
.flex {
    display: flex;
}

.flex-grow{
  flex-grow: 1;
}

@media screen and (max-width: 1024px) {

.nav_brand{
height: 50px;
}

  .logo_wrapper{
  position: unset;
    height: 100%;
    margin-top: 8px; 
}
.nav_brand .brand_text {
    margin-top: 21px;
    }

ul.menu-nav li{
       /* display: none; */
     display: block;
    visibility: hidden;
    margin-left: -40px;
    opacity: 0;
    transition:visibility 0.2s linear,opacity 0.2s linear;
}

 .custom-dropdown .dropbtn {
    display: none;
  }
  .navigation a.icon {
    font-size: 25px;
    color: #f2f2f2;
    text-align: center;
    padding: 10px 16px;
    position: absolute;
    right: 0px;
    text-decoration: none;
    display: block;

  }

.navigation .menu-nav{
  width: auto;

         /*these two will help in animation*/
   max-height: 0;
  /*transition: max-height 0.5s ease-out;*/
  transform: translateY(-2em);
  transition: all 0.3s;
}

#float-right-on-navbar{
    float: none!important;
  }


}

@media screen and (max-width: 1024px) {
  .menu-nav.responsive {
    position: relative;
   /* margin: 0;
    padding: 0;*/

        /*these two will help in animation*/
    max-height: 100%; /* make it as big as you think it will ever go */
    /*transition: max-height 0.5s ease-out;*/
      transform: translateY(0%);
  transition-delay: 0s, 0s, 0.3s; /* this removes the transition delay so the menu will be visible while the other styles transition */
  }
  .navigation{
    height: auto;
    display:block;
  }
  .navigation .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .menu-nav.responsive li{
      /* display: block; */
    visibility: visible;
    opacity: 1;
    margin-left: -40px;
      transition:visibility 0.2s linear,opacity 0.2s linear;
  }

   .menu-nav.responsive .custom-dropdown ul li{
    margin-left: 0px;
  }

  .menu-nav.responsive .custom-dropdown {float: none;}
  .menu-nav.responsive .custom-dropdown-content {position: relative;}
  .menu-nav.responsive .custom-dropdown .dropbtn {
    display: block;
    width: 100%;
  }
}


  
</style>
</head>
<body>

<div class="navigation flex-wrap flex-grow" id="navigation">

   <div class="nav_brand flex flex-wrap flex-grow">
  <!--<div class="logo_bg" style="background-image: url('{{ asset("storage/logos_images/".$Logoname) }}')"></div>-->
  <div class="logo_wrapper" id="logobrand" logourl="{{ asset('storage/logos_images/'.$Logoname) }}" brandtext="Brunique developers">
  <img src="images/logo.png" alt="logo" class="logo_img" />
</div>
   <div class="brand_text">Brunique developers</div>
</div>

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

<li ><a href="#"><i  id="cart-icon" class="ion ion-android-cart"></i> cart  <span id="cartbadge" class="badge_count">1</span>
</a></li>


<li id="float-right-on-navbar"><a href="#">News</a></li>
<li id="float-right-on-navbar"><a href="#">Sign in</a></li>
<li id="float-right-on-navbar"><a href="#">Sign up</a></li>

</ul>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px; margin-top:70px;">
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
  var x = document.getElementById("menu-nav");
  if (x.className === "menu-nav") {
    x.className += " responsive";
  } else {
    x.className = "menu-nav";
  }
}
</script>




</body>
</html>