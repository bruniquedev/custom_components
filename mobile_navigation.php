<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>


/*navigation*/

  .nav-toggle{
 
 position:fixed;
 padding:5px 5px 5px 5px;
 margin-top:0px; 
 margin-left:1px;
 cursor:pointer;
 background-color:#033769;
 z-index:1000000;
 font-size:20px;
 color: #fff;
 
 }
 
/*from this screen and above*/
@media only screen and (min-width: 768px) and (max-width: 2000px) {

.nav-toggle {
    display: none;
  }

 }

.stickerTotop{

position:fixed;
top:0px;
z-index:999999;
width:100%;
transition:all 3.0s ease-in-out;
    -webkit-transition: 0.5s all;
    transition: 0.5s all;
}


#navigation {
  background-color: #30323A;

      margin-bottom: 0px;
    border-color: #ffffff;
    opacity: 1;
    border-radius: 1px;
  /*  box-shadow: 0px 20px 30px 3px rgb(0 0 0 / 55%) !important;*/
  box-shadow: 0px 4px 4px #ddd !important;
}

#navigation .container {
  position: relative;
}
/*------------Menu nav----------------*/




#logo-wrapper{
  width: 100%;
  height: 100%;
}
#logo{
  background:url(vlcsnapa.png);
  background-size: cover;
    background-repeat: no-repeat;
height:50px;
width: 50px;
position: absolute;
z-index: 999;
margin-top: -15px;
    border-radius: 2px;
}
#first-nav-brand{
 margin-left: 58px;
    color: #ffffff;
}
@media only screen and (min-width: 319px) and (max-width: 480px) {
#logo{
height: 50px;
}

#logo-wrapper {
    margin-left: 15px;
}
#first-nav-brand {
    margin-left: 49px;
    color: #518d34;
}

}
.navbar-brand{
margin-left:2px;
font-weight: 500;
color: #518d34;
}



.menu-nav .menu-list>li {
  display: inline-block;
  
}

.menu-nav .menu-list>li>a {
  display: block;
  padding: 15px;
  color: #FFF;
 /* text-transform: uppercase;*/
  cursor: pointer;
  text-decoration:none;
}

.menu-nav .menu-list>li>a:hover, .menu-nav .menu-list>li>a:focus, .menu-nav .menu-list>li.dropdown.open>a {
  color: #F8694A;
 
}

.menu-nav .menu-list > .active > a {
 
    color: #F8694A;
    padding-bottom: 0.62em;
    border-bottom: 0.45em solid #F8694A;
}
  #cart-icon{
font-size: 19px;
 /*background-color: #ee7c2f;*/
 padding: 3px;
 border-radius: 5px;
}
#cart-badge{
  color: #fff;
  background-color: red;
}
 
 /*-------------Dropdowns---------------*/
  

.custom-menu {
  position: absolute;
  padding: 15px;
  background: #FFF;
  -webkit-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.175);
  list-style-type:none;
  z-index: 100;
  top: 100%;
  min-width: 200px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.3s all;
  transition: 0.3s all;
  
}

/*for making dropdown respond in webview*/
.dropdown-backdrop {
    z-index:0;
}

.dropdown.open>.custom-menu {
  opacity: 1;
  visibility: visible;
}

/*-- Default Dropdown --*/

.dropdown.default-dropdown>.custom-menu {
  border-top: 2px solid #F8694A;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(15px);
  -ms-transform: translateX(-50%) translateY(15px);
  transform: translateX(-50%) translateY(15px);
}

.dropdown.default-dropdown.open>.custom-menu {
  -webkit-transform: translateX(-50%) translateY(0px);
  -ms-transform: translateX(-50%) translateY(0px);
  transform: translateX(-50%) translateY(0px);
}

.dropdown.default-dropdown>.custom-menu>li>a {
  display: block;
  padding: 10px 0px;
  /*text-transform: uppercase;*/
   text-decoration:none;
}


/*-- Side Dropdown --*/

.dropdown.side-dropdown>.custom-menu {
  border-left: 2px solid #F8694A;
  left: 100%;
  top: 0;
  width: 250px;
  -webkit-transform: translate(15px, 0px);
  -ms-transform: translate(15px, 0px);
  transform: translate(15px, 0px);
}

.dropdown.side-dropdown.open>.custom-menu {
  -webkit-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}
 
/* Display the dropdown on hover */
ul li:hover ul.custom-menu{
          opacity: 1;
  visibility: visible; /* Display the dropdown */
  top: 70%;
    }
   /* ul li ul.custom-menu li{
          opacity: 1;
  visibility: visible;
    }*/

 
 /*------------Mobile nav----------------*/

#header .nav-toggle {
  display: none;
}

@media only screen and (max-width: 767px) {


  .nav-toggle {
    display: inline-block;
  }

  #float-right-on-navbar{
    float: none!important;
  }

  #cart-icon{
font-size: 23px;
}

  #responsive-nav {
    position: fixed;
    left: 0;
  margin-left:0;
    top: 0;
    bottom: 0;
    max-width: 270px;
    width: 0%;
    overflow: hidden;
    background-color: #FFF;
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
    -webkit-transition: 0.5s all;
    transition: 0.5s all;
    z-index: 990;
  }
  #responsive-nav.open {
    width: 100%;
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%);
  }
  #responsive-nav .dropdown .custom-menu {
    display: none;
    position: static;
    width: 100%;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-top: none;
    border-left: 2px solid #F8694A;
  }
  #responsive-nav .dropdown.open .custom-menu {
    display: block;
    min-width: auto;
    -webkit-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
  }

  .menu-nav .menu-list {
    float: none;
    border-left: 1px solid #DADADA;
    border-right: 1px solid #DADADA;
    border-bottom: 1px solid #DADADA;
  }
  .menu-nav .menu-list>li {
    display: block;
  }
  .menu-nav .menu-list>li+li {
    border-top: 1px solid #DADADA;
  margin-left:0;
  }
  .menu-nav .menu-list>li>a {
    color: #30323A;
  }
  #navigation.shadow:after {
    content: "";
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 99;
  }
}
 
 
#right-on-navbar
{
    position:absolute;
    right:0px;
}
  
  #float-right-on-navbar{
    float: right;
  }

    /*end navigation*/

</style>
</head>
<body>

<header>

<div class="nav-toggle">

<span class="glyphicon glyphicon-align-justify nav-toggle-btn"></span>

</div>

<!-- NAVIGATION -->
<div id="navigation">
    <!-- container 
    <div class="container">-->
      <div id="responsive-nav">
        
        

        <!-- menu nav -->
        <div class="menu-nav">

<div id="logo-wrapper">
<a class="navbar-brand" href="#">
<div id="logo"></div>
<span class="brand-text" id="first-nav-brand">Brunique developers</span> 
</a>
</div>
          
          <ul class="menu-list" id="ul-navbar">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Promotions</a></li>
            <li><a href="#">Order-history</a></li>
            <li><a href="#">Help</a></li>


                                    <!-- dropdown menu -->
    <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Drop down 1 <i class="caret"></i></a>
              <ul class="custom-menu">
                <li><a href="index.php#dealsOfTheDay">Deals of the day</a></li>
                <li><a href="index.php#latestProducts">Latest products</a></li>
                <li><a href="index.php#pickedForYou">Picked for you</a></li>
              </ul>
               </li>




            <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Drop down 2 <i class="caret"></i></a>
              <ul class="custom-menu">
                
                <li><a href="sellerlist.php">Seller's List</a></li>
                <li><a href="checkout.php">Checkout</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="cartHistory.php">Shopping Cart History</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="help.php">Help</a></li>
              </ul>
            </li>


            <li id="float-right-on-navbar"><a href="#">Register</a></li>
            <li id="float-right-on-navbar"><a href="#">Login</a></li>
         <li id="float-right-on-navbar"><a href="https://chat.whatsapp.com/EcKd9vVuAKGJMad6cSRojB" ><i  id="cart-icon" class="ion-android-cart"></i>   <span class="badge" id="cart-badge">5</span></a></li>
          </ul>

  


        </div>
        <!-- menu nav -->
      </div>
    <!--</div>
     /container -->
  </div>
<!-- /NAVIGATION -->
</header>






<script type="text/javascript">
(function($) {
  "use strict"

  // NAVIGATION
  var responsiveNav = $('#responsive-nav'),
    catToggle = $('#responsive-nav .category-nav .category-header'),
    catList = $('#responsive-nav .category-nav .category-list'),
    menuToggle = $('#responsive-nav .menu-nav .menu-header'),
    menuList = $('#responsive-nav .menu-nav .menu-list');

  catToggle.on('click', function() {
    menuList.removeClass('open');
    catList.toggleClass('open');
  });

  menuToggle.on('click', function() {
    catList.removeClass('open');
    menuList.toggleClass('open');
  });

  $(document).click(function(event) {
    if (!$(event.target).closest(responsiveNav).length) {
      if (responsiveNav.hasClass('open')) {
        responsiveNav.removeClass('open');
        $('#navigation').removeClass('shadow');
      } else {
        if ($(event.target).closest('.nav-toggle > .nav-toggle-btn').length) {
          if (!menuList.hasClass('open') && !catList.hasClass('open')) {
            menuList.addClass('open');
          }
          $('#navigation').addClass('shadow');
          responsiveNav.addClass('open');
        }
      }
    }
  });
  
  
  })(jQuery);




   //for showing dropdowns automatcally for second nav, this is for bootstrap
 $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
});



 //adding a class
//this is for highlighting the currently selected page

jQuery(function ($) {
    $('#ul-navbar a').click(function(e) {
            var link = $(this);

            var item = link.parent("li");
            
            if (item.hasClass("active")) {
                item.removeClass("active").children("a").removeClass("active");
            } else {
                item.addClass("active").children("a").addClass("active");
            }

            if (item.children("ul").length > 0) {
                var href = link.attr("href");
                link.attr("href", "#");
                setTimeout(function () { 
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        })
        .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("active").parents("li").addClass("active");
                return false;
            }
        });
});
    



</script>

</body>
</html>