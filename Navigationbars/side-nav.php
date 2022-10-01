<!DOCTYPE html>
<html>
<head>
<title>side bar navigation 1</title>
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


/*---------header navigation top navigatio------------*/
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
  width: 100%;
      margin-top: 0;
    padding-top: 0;
  list-style-type: none;
}


.nav-brand-left{
  margin-left: 15px;
}
.nav-brand-left .brand-text-left{
  margin-top: 11px;
  color: #fff;
  font-size: 19px;
}
.nav-brand-left-icon{
color: #fff;
    margin-top: 9px;
    margin-left: 170px;
    font-size: 19px;
}


.nav_brand{
  margin-right: 11px;
}
.nav_brand .brand_text{
  margin-top: 12px;
  color: #fff;
  font-size: 19px;
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




/*---------side navigation ------------*/
.sidebar{
  position: fixed;
    top: 47px;
    margin-top: 0;
  background: #1C2B36;
  width: 260px;
    left: 0;
    bottom: 0;
    overflow: visible;
    z-index: 10;
}
.sidebar-container{
      height: 100%;
}

.navbar-title {
    color: #96abbb;
    font-size: 10px;
    letter-spacing: 0.2px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 20px;
    padding-bottom: 5px;
    text-transform: uppercase;
}

 .sidebar-nav > ul{
list-style-type: none;
    margin: 10px 0;
    padding: 0;
    background: #16232D;
    border-bottom-color: #141518;
    border-top-color: #141518;

}

 .sidebar-nav > ul li a {
    font-weight: 300;
    margin: 0;
    text-decoration: none;
    margin-top: -1px;
    font-size: 14px;
}
.sidebar-nav > ul > li a {
    color: #8e8e93;
    border-bottom: none;
}

.sidebar-nav > ul > li {
moz-transition: background-color 300ms linear;
    -o-transition: background-color 300ms linear;
    -webkit-transition: background-color 300ms linear;
    transition: background-color 300ms linear;
  }

.sidebar-nav > ul > li:hover {
    background: #0e161c;
}

.sidebar-nav > ul > li.active {
    background: #0e161c;
}

.item-content {
    display: flex; 
}
.item-content .item-media {
    padding: 10px 15px 10px 15px;
}

.sidebar-nav > ul li a .ion{
    margin-right: 5px;
    display: inline-block;
    font-size: 25px;
    position: relative;
    top: 2px;
}
.sidebar-nav > ul > li > a .item-media > i {
    color: #51C6EA;
}
.sidebar-nav > ul > li > a .item-inner {
    color: #b4bcc8;
    border-bottom-color: #141518;
}
.item-content .item-inner {
    align-items: center;
    border-bottom-width: 1px;
    border-bottom-style: solid;
    padding: 17px 15px 10px 0;
    width: 100%;
}

.sidebar-nav > ul li a .icon-arrow {
    float: right;
    margin-right: 6px !important;
    font-style: normal;
    font-weight: normal;
    color: #c8c7cc;
    font-size: 18px;
}

ul.sub-menu {
    background: #111b23;
    clear: both;
    list-style-type: none;
    padding: 1px 0;
    display: none;
    margin: 0;
}
ul.sub-menu li {
    background: none;
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
    margin-top: 1px !important;
    padding: 0;
}
ul.sub-menu > li a {
    color: #b4bcc8;
}

ul.sub-menu li a {
    background: none;
    display: block;
    font-size: 13px !important;
    font-weight: 300;
    border: none;
    margin: 0;
    padding-bottom: 5px;
    padding-left: 52px !important;
    padding-right: 15px;
    padding-top: 5px;
    text-decoration: none;
}

ul.sub-menu.open {
display: block;
}
ul.sub-menu li:hover {
  background: #0e161c;
}


/*///////////////////////---------others ------------*/
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

footer{
  background: #333333;
    color: #ffffff;
        padding: 17px;
        border-top: 1px solid #c8c7cc;
    bottom: 0;
    right: 0;
    left: 0;
    position: absolute;
    font-size: 12px;
}

  
</style>
</head>
<body>


<div class="sidebar" id="sidebar">
  <div class="sidebar-container">
<div class="sidebar-nav">

<div class="navbar-title">
<span>Main Navigation</span>
</div>

<ul class="main-navigation-menu">
<li class="active">
  <a href="#">
    <div class="item-content">
      <div class="item-media">
        <i class="ion ion-home"></i>
      </div>
      <div class="item-inner">
        <span class="title"> Dashboard </span>
      </div>
    </div>
  </a>
</li>

<li>
  <a href="#">
    <div class="item-content">
      <div class="item-media">
        <i class="ion ion-ios-person"></i>
      </div>
      <div class="item-inner">
        <span class="title"> profile </span>
      </div>
    </div>
  </a>
</li>


  <li class="custom-dropdown">
  <a href="javascript:void(0)">
    <div class="item-content">
      <div class="item-media">
        <i class="ion ion-help"></i>
      </div>
      <div class="item-inner">
        <span class="title"> Dropdown </span>
        <i class="ion ion-ios-arrow-back icon-arrow"></i>
      </div>
    </div>
  </a>
  <ul class="sub-menu">
    <li>
      <a href="#">
        <span class="title">Link 1</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="title">Link 2</span>
      </a>
    </li>
  </ul>
  </li>

  <li class="custom-dropdown">
  <a href="javascript:void(0)">
    <div class="item-content">
      <div class="item-media">
        <i class="ion ion-help"></i>
      </div>
      <div class="item-inner">
        <span class="title"> Dropdown 2</span>
        <i class="ion ion-ios-arrow-back icon-arrow"></i>
      </div>
    </div>
  </a>
  <ul class="sub-menu">
    <li>
      <a href="#">
        <span class="title">Link 1</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="title">Link 2</span>
      </a>
    </li>
  </ul>
  </li>



</ul>


</div>
</div>
 </div> 



<div class="navigation" id="navigation">
  <div class="nav-brand-left flex">
    <div class="brand-text-left">Admin</div>
  <div class="nav-brand-left-icon">&#9776;</div>
</div>
   <ul class="menu-nav flex justify-right" id="menu-nav">
<li id="float-right-on-navbar">
  <div class="nav_brand flex">
  <div class="logo_bg" style="background-image:url(images/logo.png);"></div>
  <div class="brand_text">ST Thereza hospital management</div>
</div> 
</li>
  <li id="float-right-on-navbar" class="custom-dropdown">
    <a class="dropbtn"><i  id="user-icon" class="ion ion-ios-person"></i> Admin 
      <i class="ion ion-android-arrow-dropdown"></i>
    </a>
    <ul class="custom-dropdown-content">
      <li><a href="#">Change password</a></li>
      <li><a href="#">Log out</a></li>
    </ul>
  </li>

  <li id="float-right-on-navbar"><a href="#"><i  id="message-icon" class="ion ion-android-textsms"></i> Message  <span id="badge_count" class="badge_count">1</span>
</a></li>

</ul>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>






<div style="padding-left:16px">
  <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
</div>




<footer class="flex justify-center">
        <div class="footer-inner">
            &copy; <span class="current-year"><?php echo date('Y'); ?></span><span class="text-bold text-uppercase"> brunique developers </span> <span></span>
        </div>
      </footer>


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


<script>
 window.addEventListener(
  "load",
  Configer_dropdown,
  false
);

function Configer_dropdown() {
  const customdropdown = document.querySelectorAll('.custom-dropdown');
  for (var i = 0; i < customdropdown.length; i++) {
      customdropdown[i].onclick = function () {
          console.log(this);//this gets the parent element which event is appended
    // var dropdowns = this.getElementsByClassName("sub-menu")[0].className = 'sub-menu ';
    let c = this.getElementsByClassName("sub-menu")[0].className;
    if(c.match(/open/gi)) c = "sub-menu";
    else c = "sub-menu open";
    this.getElementsByClassName("sub-menu")[0].className = c;
    }
  }
  }


</script>

</body>
</html>