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
  overflow: hidden;
  height: 48px;
  width: 100%;
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
  width: 80%;
      margin-top: 0;
    padding-top: 0;
  list-style-type: none;
}

.nav_brand{
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
 display: none;
  position: absolute;
  background-color: #f9f9f9;
  padding: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
  background-color: #111;
  color: white;
}

ul.custom-dropdown-content li a:hover, ul.custom-dropdown-content li a:hover {
  background-color: #ddd;
  color: black !important;
}



.custom-dropdown:hover ul.custom-dropdown-content {
  display: block;

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

@media screen and (max-width: 600px) {

ul.menu-nav li, .custom-dropdown .dropbtn {
    display: none;
  }
  .navigation a.icon {
    font-size: 20px;
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
}

#float-right-on-navbar{
    float: none!important;
  }


}

@media screen and (max-width: 600px) {
  .menu-nav.responsive {
    position: relative;
   /* margin: 0;
    padding: 0;*/
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
    display: block;
    margin-left: -40px;
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

<div class="navigation" id="navigation">


   <div class="nav_brand flex">
  <div class="logo_bg" style="background-image:url(images/logo.png);"></div>
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

<div style="padding-left:16px">
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