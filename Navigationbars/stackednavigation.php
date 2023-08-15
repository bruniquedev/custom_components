<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" type="text/css" href="ionicons/css/ionicons.min.css" />

<title>stacked navigation</title>
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

/** level one navigation**/
.navigation-container{
	position: fixed;
	top: 0px;
	 width: 100%;
}
	.navigation-level-one-container{
	background-color: #fff;
    width: 100%;
    height: 80px;
    margin: 0;
    padding: 0;
    margin-bottom: 0px;
    overflow: hidden;
    border-color: #333;
    opacity: 1;
    border-radius: 1px;
    /* box-shadow: 0px 20px 30px 3px rgb(0 0 0 / 55%) !important; */
    box-shadow: 0px 4px 4px #ddd !important;
	}
	.navigation-level-one{
    margin: 10px auto 10px auto;
    width: 90%;
	}

	.level-one-left{
width: 50%;
	}
	.level-one-right{
width: 50%;
	}
a{
	text-decoration: none;
}

.level-one-left	a,.level-one-right a{
	    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #656565;
}

.level-one-left	a i{
    position: relative;
    top: 3px;
     color: #656565 !important;
}
.menu-nav-level-one a.link-separator{
margin: 0px 5px 0px 5px;
}

.level-one-right a{
	    padding: 0px 10px 0px 10px;
}

/**end of level one navigation**/



.navigation-stacked{
background-color: #fff;
margin: 0px auto 0px auto;
    width: 89%;
        position: relative;
    top: -31px;
}

.responsive-nav-stacked{
  background-color: #fff;
position: relative;
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
box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.responsive-nav-stacked .menu-nav-stacked{
     margin-top: 32px;
    padding-top: 0;
    list-style-type: none;
    margin-left: 50px;
}

.nav_brand_stacked{
      position: relative;
    top: 0px;
    z-index: 13;
    width: 100%;
        margin-left: 4px;
}
.nav_brand_stacked .brand_text_stacked{
 
 color: #111;
    font-size: 17px;
    position: absolute;
    /*left: 145px;*/
    left: 95px;
    top: 15px;
}


.logo_bg_stacked{

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

.logo_wrapper_stacked{
    position: absolute;
  left: 11px;
  height: 80px;
    width: 80px;
     z-index: 999;
     margin-top: 0px;
      border-radius: 8px;
}
.logo_img_stacked{

height:100%;
/*width: 100%;*/
 border-radius: 8px;
 object-fit: contain;
}

ul.menu-nav-stacked li {
  display: inline-block;
     /*border-bottom: 1px solid #DADADA;*/
}
ul.menu-nav-stacked li a {
  display: block;
 text-decoration: none;
  color: #111;
  text-align: left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
/*.menu-nav-stacked li a:hover{
  color: #4CAF50;
}*/

ul.menu-nav-stacked li a:hover:not(.active){
  color: #4CAF50;
}
ul.menu-nav-stacked li a.active {
 background-color: #ffffff;
color: #3b6926;
padding-bottom: 0.2em;
/*border-bottom: 0.49em solid #3b6926;*/
}



.navigation-stacked .icon {
  display: none;
}

.custom-dropdown-stacked {
  /*float: left;
  overflow: hidden;*/
}

.custom-dropdown-stacked .dropbtn {
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

ul.custom-dropdown-content-stacked {
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

ul.custom-dropdown-content-stacked li {
 display: block;
  color: black;
  text-decoration: none;
  display: block;
  text-align: left;
}

ul.custom-dropdown-content-stacked li a{
  color: black;
}

.custom-dropdown-stacked:hover .dropbtn {
  background-color: #fff;
  color: #111;
}

ul.custom-dropdown-content-stacked li a:hover, ul.custom-dropdown-content-stacked li a:hover {
  background-color: #ddd;
  color: black !important;
}



.custom-dropdown-stacked:hover ul.custom-dropdown-content-stacked {
  /* display: block;*/
 height: auto;
 visibility: visible; 
  opacity: 1;
  transform: translateY(0%);
  transition-delay: 0s, 0s, 0.3s; /* this removes the transition delay so the menu will be visible while the other styles transition */

}



.badge_count_stacked {
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


.nav_social_brands_stacked{
    position: absolute;
    right: 30px;
    top: 10px;
    display: none;
}
.nav_social_brands_stacked #link1_email,
.nav_social_brands_stacked #link1_phone{
margin-right: 5px;
color: #646464;
}


.nav_social_brands_stacked a{
   text-decoration: none;
  color: #646464;
}
.nav_social_brands_stacked a:hover {
    color: #23527c;
}

.ion-socials-stacked {
  padding: 5px;
  font-size: 20px;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
}

.nav_social_brands_stacked #link1_email i,
.nav_social_brands_stacked #link1_phone i{
padding: 0px 5px 0px 5px;
    font-size: 20px;
    color: #646464;
position: relative;
    top: 3px;
}

.ion-social-stacked:hover {
    opacity: 0.7;
}

.navbar-brand-social-header-stacked i{
  color: #7AB730 ;
}




@media screen and (max-width: 1024px) {



.navigation-level-one-container {
    display: none;
}

.navigation-stacked {
    margin: 0px !important;
    width: 100% !important;
    position: unset !important;
}

.nav_brand_stacked {
    margin-left: 0px !important;
}

.logo_wrapper_stacked{
  position: unset;
    height: 100%; 
}

.responsive-nav-stacked {
	position: fixed;
	top: 60px !important;
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
  .responsive-nav-stacked.responsive-stacked {
    width: 100%;
    height: 100%;
    overflow-y: scroll;
        overflow-x: hidden;
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%);
  }

  .navigation-stacked.shadow-stacked:after {
    content: "";
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 11;
  }

.responsive-nav-stacked .menu-nav-stacked{
  margin-top: 0px;
      margin-left: 4px;
}
ul.menu-nav-stacked li{
     display: block;
    margin-left: -40px;
    border-bottom: 1px solid #DADADA;
} 

ul.menu-nav-stacked li a.active {
border-bottom: 0.1em solid #DADADA;
}



.custom-dropdown-stacked .dropbtn-stacked{
    display: none;
  }
  .navigation-stacked a.icon {
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



.logo_bg_stacked{

background-size: cover;
    background-repeat: no-repeat;
    height: 53px;
    width: 60px;
        position: unset;
    border-radius: 2px;
    margin-top: 0px; 
    margin-left: 0px;

}

.nav_brand_stacked{
  display: flex;
  background-color: #fff;
  border-color: #333;
opacity: 1;
border-radius: 1px;
height: 60px;
/*  box-shadow: 0px 20px 30px 3px rgb(0 0 0 / 55%) !important;*/
box-shadow: 0px 4px 4px #ddd !important;
}
.nav_brand_stacked .brand_text_stacked {
    margin-top: 18px;
    color: #111;
    font-size: 18px;
    position: unset;
}

.nav_social_brands_stacked {
    position: unset;
    right: 0px;
    margin-left: 8px;
}

.nav_social_brands_stacked #link1_email, .nav_social_brands_stacked #link1_phone {
    margin-top: 0px;
}


.nav_social_brands_stacked{
	display: unset!important;
}


}

@media screen and (max-width: 1024px) {
  
 
  .navigation-stacked .icon {
    position: absolute;
    right: 0;
    top: 0;
  }


   .menu-nav-stacked .custom-dropdown-stacked ul li{
    margin-left: 0px;
  }

  .menu-nav-stacked .custom-dropdown-stacked {float: none;}
  .menu-nav-stacked .custom-dropdown-content-stacked {position: relative;}
  .menu-nav-stacked .custom-dropdown-stacked .dropbtn-stacked {
    display: block;
    width: 100%;
  }
}

</style>
</head>
<body>  


<div class="navigation-container">

<div class="navigation-level-one-container">
<div class="navigation-level-one flex">

<div class="menu-nav-level-one level-one-left" id="menu-nav-level-one">
  <a class="navbar-brand-social-header-stacked" href="mailto:bruniquedeveloper@gmail.com"> 
  <i class=" ion-socials-stacked ion-ios-email"></i>bruniquedeveloper@gmail.com </a>
   <a class="navbar-brand-social-header-stacked link-separator" href="#">|</a>
  <a class="navbar-brand-social-header-stacked" href="tel:256 701310265"> <i class=" ion-socials-stacked ion-ios-telephone"></i>+256 701310265 </a>
 </div>

<div class="menu-nav-level-one level-one-right flex justify-right" id="menu-nav-level-one">
  <a class="navbar-brand-social-header-stacked" href="#" target="_blank" > 
<i class="ion ion-socials-stacked ion-social-facebook"></i></a>
 <a class="navbar-brand-social-header-stacked" href="#" target="_blank" > 
<i class="ion ion-socials-stacked ion-social-linkedin-outline"></i></a>
 <a class="navbar-brand-social-header-stacked" href="#" target="_blank" > 
<i class="ion ion-socials-stacked ion-social-youtube-outline"></i></a>
 <a class="navbar-brand-social-header-stacked" href="#" target="_blank" > 
<i class="ion ion-socials-stacked ion-social-twitter-outline"></i></a>
 <a class="navbar-brand-social-header-stacked" href="#" target="_blank" > 
<i class="ion ion-socials-stacked ion-social-instagram-outline"></i></a>
</div>

</div>
</div>	


<div class="navigation-stacked" id="navigation-stacked">

   <div class="nav_brand_stacked">
  <!--<div class="logo_bg" style="background-image: url('{{ asset("storage/logos_images/".$Logoname) }}')"></div>-->
  <div class="logo_wrapper_stacked" id="logobrand" logourl="{{ asset('storage/logos_images/'.$Logoname) }}" brandtext="Brunique developers">
  <img src="images/logo.png" alt="logo" class="logo_img_stacked" />
</div>
   <div class="brand_text_stacked">Brunique developers</div>
</div>


<div class="responsive-nav-stacked" id="responsive-nav-stacked">

   <ul class="menu-nav-stacked" id="menu-nav-stacked">
  <li ><a class="active-stacked" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="custom-dropdown-stacked">
    <a class="dropbtn-stacked">Dropdown 
      <i class="ion ion-android-arrow-dropdown"></i>
    </a>
    <ul class="custom-dropdown-content-stacked">
      <li><a href="#">Responsive Link 1</a></li>
      <li><a href="#">Responsive Link 2</a></li>
      <li><a href="#">Link 3</a></li>
    </ul>
  </li> 

  <li><a href="#about">About</a></li>

   <li class="custom-dropdown-stacked">
    <a class="dropbtn-stacked">Dropdown 
      <i class="ion ion-android-arrow-dropdown"></i>
    </a>
    <ul class="custom-dropdown-content-stacked">
      <li><a href="#">Responsive Link 1</a></li>
      <li><a href="#">Responsive Link 2</a></li>
      <li><a href="#">Link 3</a></li>
    </ul>
  </li> 

<li ><a href="#"><i  id="cart-icon-stacked" class="ion ion-android-cart"></i> cart  <span id="cartbadge-stacked" class="badge_count_stacked">1</span>
</a></li>

<li><a href="#about">Live support</a></li>
<li><a href="#about">Account</a></li>
<li><a href="#about">Services</a></li>
<li><a href="#about">Client says</a></li>
<li><a href="#about">Programmes</a></li>

</ul>

<div class="nav_social_brands_stacked flex flex-wrap justify-right" id="nav_social_brands_stacked ">

  <a class="navbar-brand-social-header-stacked" 
  id="link1_email" href="mailto:bruniquedeveloper@gmail.com"> 
  <i class=" ion-socials-stacked ion-ios-email"></i>bruniquedeveloper@gmail.com </a>

  <a class="navbar-brand-social-header-stacked" id="link1_phone" href="tel:256 701310265"> <i class=" ion-socials-stacked ion-ios-telephone"></i>+256 701310265 </a>

  <a class="navbar-brand-social-header-stacked" id="link1_phone" href="tel:256 779162288"> <i class=" ion-socials-stacked ion-ios-telephone"></i>+256 779162288 </a>

  <a class="navbar-brand-social-header-stacked" href="#" target="_blank" > 
<i class="ion ion-socials-stacked ion-social-facebook"></i></a>
 <a class="navbar-brand-social-header-stacked" href="#" target="_blank" > 
<i class="ion ion-socials-stacked ion-social-linkedin-outline"></i></a>
 <a class="navbar-brand-social-header-stacked" href="#" target="_blank" > 
<i class="ion ion-socials-stacked ion-social-youtube-outline"></i></a>
 <a class="navbar-brand-social-header-stacked" href="#" target="_blank" > 
<i class="ion ion-socials-stacked ion-social-twitter-outline"></i></a>
 <a class="navbar-brand-social-header-stacked" href="#" target="_blank" > 
<i class="ion ion-socials-stacked ion-social-instagram-outline"></i></a>
</div>

</div>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
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
  var n = document.getElementById("navigation-stacked");
  var x = document.getElementById("responsive-nav-stacked");
  //  var s = document.getElementById("nav_social_brands");
   
  
  if (x.className === "responsive-nav-stacked") {
    x.className += " responsive-stacked";
    n.className += " shadow-stacked";
   // s.className +=" show_social_nav_stacked";
  } else {
    x.className = "responsive-nav-stacked";
    n.className = "navigation-stacked";
   // s.className ="nav_social_brands_stacked";
  }
}
</script>



</body>
</html>