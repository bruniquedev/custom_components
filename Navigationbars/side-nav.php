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
    cursor: pointer;
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
   /* transition: width .5s ease;*/
    transition: width 0.5s ease-out;
    
}
.sidebar-container{
      height: 100%;
}

/*navigation scrollbar*/
.sidebar-scroll{
    height: 100vh;
  overflow-y:scroll;/*show scroll bar*/ 
  overflow-x:hidden;/*hide scroll bar*/
  scroll-behavior: smooth;
 -webkit-transition: all .5s;
}


.sidebar-scroll::-webkit-scrollbar {
    background-color: #999;
    width: 0px;/*initially 2px*/
      border-radius: 10px;
}
.sidebar-scroll:hover::-webkit-scrollbar {
    width: 10px;/*initially 10px on hover*/
     -webkit-transition: all .5s;
}

.sidebar-scroll::-webkit-scrollbar-track {
  border-radius: 10px;
}

.sidebar-scroll::-webkit-scrollbar-thumb {
  margin: 2px;
 border: 10px solid transparent;
   border-radius: 10px;

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
/*switching icons*/
.sidebar-nav > ul li a .icon-arrow:before {
    font-family: Ionicons;
  content: "\f3cf";

}
.sidebar-nav > ul li.open > a .icon-arrow:before {
   font-family: Ionicons;
  content: "\f3d0";
}

ul.sub-menu {
    background: #111b23;
    clear: both;
    list-style-type: none;
    padding: 1px 0;
    margin: 0;
  /* hides sub-menu */
   /*display: none;*/
 height: 0px;
  visibility: hidden; 
  overflow: hidden;
  opacity: 0;
  transform: translateY(-2em);
  transition: all 0.3s;

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

ul.sub-menu.open {/*show sub menu*/
/*display: block;*/
/* shows sub-menu */
height: 100%;
 visibility: visible; 
  opacity: 1;
  transform: translateY(0%);
  transition-delay: 0s, 0s, 0.3s; /* this removes the transition delay so the menu will be visible while the other styles transition */
}
ul.sub-menu li:hover {
  background: #0e161c;
}



/*manipulate sidebar closed*/
.sidebar.sidebar-closed{
    width: 70px !important;
     transition: width 0.3s ease-out;
  }
.sidebar-closed-brandtext-left{
  display: none !important;
}
.sidebar-closed-brand-left-icon{
margin-left:0px !important;
}
.nav-brand-left-sidebar-closed {
    margin-left: 23px !important;
}
.navbar-title-sidebar-closed{
  display: none !important;
}
.item-inner-sidebar-closed{
  display: none !important;
    visibility: hidden !important;
    opacity: 0 !important;
} 
.item-content-sidebar-closed {
    display: flex !important;
    justify-content: center !important;
}

.main-content-sidebar-closed {
margin-left: 70px !important;
}



.sub-menu-sidebar-closed{
position: absolute !important;
/*width: 100%;*/
}

/*.custom-dropdown-sidebar-closed:hover  ul.sub-menu-sidebar-closed {*/
  /*show dropdown on hover*/
  .custom-dropdown-sidebar-closed:hover .sub-menu-sidebar-closed{ 
 /* display: block !important;*/
 /* shows sub-menu */
height: auto !important;
 visibility: visible !important; 
  opacity: 1 !important;
  /*transform: translateY(0%) !important;*/
  transition-delay: 0s, 0s, 0.3s !important; /* this removes the transition delay so the menu will be visible while the other styles transition */

}

/*main content area*/
.main-content{
  margin-top: 0;
  margin-left: 260px;
  min-height: 100%;
}
.wrap-content{
    margin-left: 10px;
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
  <div class="sidebar-container sidebar-scroll">
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


  <li class="custom-dropdown-menu">
  <a href="javascript:void(0)">
    <div class="item-content">
      <div class="item-media">
        <i class="ion ion-help"></i>
      </div>
      <div class="item-inner">
        <span class="title"> Dropdown </span>
        <i class="ion icon-arrow"></i>
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

  <li class="custom-dropdown-menu">
  <a href="javascript:void(0)">
    <div class="item-content">
      <div class="item-media">
        <i class="ion ion-help"></i>
      </div>
      <div class="item-inner">
        <span class="title"> Dropdown 2</span>
        <i class="ion  icon-arrow"></i>
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

 <li class="custom-dropdown-menu">
  <a href="javascript:void(0)">
    <div class="item-content">
      <div class="item-media">
        <i class="ion ion-help"></i>
      </div>
      <div class="item-inner">
        <span class="title"> Dropdown 3</span>
        <i class="ion icon-arrow"></i>
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

<li>
  <a href="#">
    <div class="item-content">
      <div class="item-media">
        <i class="ion ion-ios-person"></i>
      </div>
      <div class="item-inner">
        <span class="title"> Others </span>
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
        <span class="title"> Our projects </span>
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
        <span class="title"> Our projects </span>
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
        <span class="title"> Our projects </span>
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
        <span class="title"> Our projects </span>
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
        <span class="title"> Our projects </span>
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
        <span class="title"> Our projects </span>
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
        <span class="title"> Our projects </span>
      </div>
    </div>
  </a>
</li>



</ul>


</div>
</div>
 </div> 



<div class="navigation" id="navigation">
  <div class="nav-brand-left flex">
    <div class="brand-text-left">Admin</div>
  <div class="nav-brand-left-icon" id="nav-brand-left-icon">&#9776;</div>
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

</ul>                                                               <!--9783-->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9946;</a>
</div>






<div class="main-content">
  <div class="wrap-content">
  <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
</div>
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
  const customdropdown = document.querySelectorAll('.custom-dropdown-menu');
  const openDropdown = document.querySelectorAll('.sub-menu');
  for (var i = 0; i < customdropdown.length; i++) {
      customdropdown[i].onclick = function () {
        //  console.log(this);//this gets the parent element which event is appended
    // var dropdowns = this.getElementsByClassName("sub-menu")[0].className = 'sub-menu ';

   
            //open or close currently clicked
    let c = this.getElementsByClassName("sub-menu")[0].className;
   // console.log(c);
    let cd = this.className;//parent class with event//custom-dropdown-menu
    //console.log(cd);
    if(c.match(/open/gi)){
     c = "sub-menu";//remove open class and add sub-menu class
     cd="custom-dropdown-menu";
    }else{
         //let's first close all the open dropdowns
         for (var j = 0; j < openDropdown.length; j++) {
          //remove open class and add sub-menu class
         document.getElementsByClassName("sub-menu")[j].className="sub-menu";
         document.getElementsByClassName("custom-dropdown-menu")[j].className="custom-dropdown-menu";
         }
         c = "sub-menu open"; //add open class and add sub-menu class
          cd="custom-dropdown-menu open";
         }
    this.getElementsByClassName("sub-menu")[0].className = c;
     this.className = cd; //set class with event//custom-dropdown-menu
    }
  }
  }


document.getElementById('nav-brand-left-icon').onclick = function () {
let element = this;
 let Sidebar = document.getElementById('sidebar');
//console.log(Sidebar.className);
let Sidebar_C = Sidebar.className;

if(Sidebar_C.match(/sidebar-closed/gi)){
//remove the classes
Sidebar.classList.remove("sidebar-closed");//remove aclass
//Sidebar.className = "sidebar"; // same as first one
document.getElementsByClassName('main-content')[0].classList.remove("main-content-sidebar-closed");
document.getElementsByClassName('brand-text-left')[0].classList.remove("sidebar-closed-brandtext-left");
document.getElementsByClassName('nav-brand-left-icon')[0].classList.remove("sidebar-closed-brand-left-icon");
document.getElementsByClassName('nav-brand-left')[0].classList.remove("nav-brand-left-sidebar-closed");
document.getElementsByClassName('navbar-title')[0].classList.remove("navbar-title-sidebar-closed");

var Iteminner = document.getElementsByClassName('item-inner');
for (var i = 0; i < Iteminner.length; i++) {
    Iteminner[i].classList.remove("item-inner-sidebar-closed");
}
var Itemcontent = document.getElementsByClassName('item-content');
for (var i = 0; i < Itemcontent.length; i++) {
    Itemcontent[i].classList.remove("item-content-sidebar-closed");
}
var Customdropdown = document.getElementsByClassName('custom-dropdown-menu');
for (var i = 0; i < Customdropdown.length; i++) {
    Customdropdown[i].classList.remove("custom-dropdown-sidebar-closed");
}
var Submenu = document.getElementsByClassName('sub-menu');
for (var i = 0; i < Submenu.length; i++) {
    Submenu[i].classList.remove("sub-menu-sidebar-closed");
}


}else{
//for adding classes
//Sidebar.classList.add("sidebar-closed"); //add a class
Sidebar.className += " sidebar-closed"; // same as first one
document.getElementsByClassName('main-content')[0].className += " main-content-sidebar-closed";
document.getElementsByClassName('brand-text-left')[0].className += " sidebar-closed-brandtext-left";
document.getElementsByClassName('nav-brand-left-icon')[0].className += " sidebar-closed-brand-left-icon";
document.getElementsByClassName('nav-brand-left')[0].className += " nav-brand-left-sidebar-closed";
document.getElementsByClassName('navbar-title')[0].className += " navbar-title-sidebar-closed";

var Iteminner = document.getElementsByClassName('item-inner');
for (var i = 0; i < Iteminner.length; i++) {
    Iteminner[i].className += " item-inner-sidebar-closed";
}
var Itemcontent = document.getElementsByClassName('item-content');
for (var i = 0; i < Itemcontent.length; i++) {
    Itemcontent[i].className += " item-content-sidebar-closed";
}

var Customdropdown = document.getElementsByClassName('custom-dropdown-menu');
for (var i = 0; i < Customdropdown.length; i++) {
    Customdropdown[i].className += " custom-dropdown-sidebar-closed";
}
var Submenu = document.getElementsByClassName('sub-menu');
for (var i = 0; i < Submenu.length; i++) {
    Submenu[i].className += " sub-menu-sidebar-closed";
}

}



}


</script>

</body>
</html>