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




</style>
</head>
<body>  


<div class="main-header-eui display-none-onmobile">
<div class="header-eui">
<div class="header-content-eui"> 

<div class="nav-content-eui"> 
<div class="nav-top-eui main-navcontent-eui">

<!--item 1-->
<div>
 <div class="item-content-eui">
   <img  class="image-icon-eui _img_eui" src="images/van.png.slim.webp" alt="Free shipping">  
   <div class="sub-contents-eui">
       <div>
       <div class="col-label-eui content-label-eui"><span>Free shipping</span></div>
       <div class="col-label-eui content-label-eui-2"><span>On all orders</span></div>
   </div>
       </div>

<div class="_timer-col tm-1">
    <div class="_timer-label">Time left today</div>
</div>
<div class="_timer-col _timer-container tm-2">
    <div class="_timer-wrapper">
        <!--hours-->
    <ul class="_timer-hours" style="margin-right:3px">
        <li class="_hours-value-a" style="background-color:#EDFFEA;color:#000000">1</li>
    </ul>
    <ul class="_timer-hours" style="margin-right:0">
        <li class="_hours-value-b" style="background-color:#EDFFEA;color:#000000">9</li>
    </ul>
    <div class="_time-separator" style="color:#EDFFEA">:</div>
    <!--/hours-->
    <!--minutes-->
    <ul class="_timer-minutes" style="margin-right:3px">
        <li class="_minutes-value-a"><div class="_minutes-content-a" style="background-color: rgb(237, 255, 234); color: rgb(0, 0, 0);">5</div></li>
    </ul>
      <ul class="_timer-minutes" style="margin-right:0px">
        <li class="_minutes-value-b"><div class="_minutes-content-b" style="background-color: rgb(237, 255, 234); color: rgb(0, 0, 0);">4</div></li>
    </ul>
    <div class="_time-separator" style="color:#EDFFEA">:</div>
    <!--/minutes-->
   <!--seconds-->
    <ul class="_timer-seconds" style="margin-right:3px">
    <li class="_seconds-value-a"><div class="_seconds-content-a" style="background-color: rgb(237, 255, 234); color: rgb(0, 0, 0);">2</div></li>
   </ul>

       <ul class="_timer-seconds" style="margin-right:0px">
    <li class="_seconds-value-b"><div class="_seconds-content-b" style="background-color: rgb(237, 255, 234); color: rgb(0, 0, 0);">1</div></li>
   </ul> 
   <!--/seconds-->

    </div>
</div>

 </div>   
</div>
<!--/item 1-->

<style type="text/css">
  /*------------navigation area--------------*/
  .main-header-eui{
    height: 117px;
    background-color: #000000;
    position: relative;
    width: 100%;
  }
    .header-eui{
position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    transition: -webkit-transform .2s;
    transition: transform .2s;
    transition: transform .2s, -webkit-transform .2s;
    will-change: transform;
    z-index: 603;
  }
  .header-content-eui{
    min-width: 1080px;
    background: #000000cc;
    backdrop-filter: blur(14px);
  }
  .nav-content-eui{
width: 100%;
    height: 52px;
    background-color: #000;
    letter-spacing: .4px;
  }
.main-navcontent-eui{
       min-width: 94%;
    max-width: 94%;
     width: 100%;
    padding: 0 44px;
     
}

.nav-top-eui{
       margin: auto;
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: space-between;
   
}

.item-content-eui{
 height: 52px;
    display: flex;
    display: -webkit-flex;
    justify-content: center;
    -webkit-justify-content: center;
    align-items: center;
    -webkit-align-items: center;
    flex-direction: row;
    cursor: pointer;
    flex-shrink: 0;
}

.item-content-eui:last-child {
    margin-right: 6px;
}
.item-content-eui:first-child {
    margin-left: 6px;
}

.image-icon-eui{
    content: normal;
    vertical-align: top;
    border: 0;
    max-width: 100%;
} 
._img_eui{
        width: 32px;
    height: 32px;
    margin-right: 8px;
}

.sub-contents-eui{
    display: flex;
    align-items: center;
    white-space: nowrap;
    margin-left: 2px;
}
.content-label-eui{
color:#ADFFA2;
font-size:22px;
line-height:24px;
font-weight:600;
height:24px;
margin-bottom:-6px
}
.content-label-eui-2{
  color: #ADFFA2;
    font-size: 16px;
    line-height: 18px;
    font-weight: 600;
    height: 18px;  
}

.col-label-eui{
    margin-top: 3px;
    margin-right: 0;
}

.col-label-eui:first-child {
    line-height: .727em!important;
    margin-top: 0;
        margin-right: 0;
}

.col-label-eui:first-child>span {
    font-size: .727em;
}
.col-label-eui:nth-child(2) {
    line-height: .875em!important;
}

ol,ul{
    list-style-type: none;
    padding: 0;
}
li{
 vertical-align: baseline;
    border: 0;
    list-style: outside none none;   
}

/*----------------timer---------------*/
._timer-col{
display: flex;
    display: -webkit-flex;
    justify-content: flex-start;
    -webkit-justify-content: flex-start;
    align-items: center;
    -webkit-align-items: center;
    flex-direction: row;
    font-size: 18px;
    position: relative;
        margin-right: 4px;
} 

.tm-1{
  color: #EDFFEA;
    font-size: 12px;
    line-height: 14px;
    font-weight: 400;  
}

._timer-label{
    width: 56px;
    text-wrap: wrap;
    text-align: right;
    word-break: break-word;
    -webkit-hyphens: auto;
    hyphens: auto;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    margin-left: 10px;
}

.tm-2{
  color: #000000;
    font-size: 27px;
    line-height: 29px;
    font-weight: 600;  
}
 
._timer-col:last-child {
    margin-right: 0;
}

._timer-wrapper{
    display: flex;
    align-items: center;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    overflow: hidden;
    height: 21px;
    position: relative;
}


._timer-hours,._timer-minutes,._timer-seconds{
width: 17px;
    height: 21px;
    line-height: 21px;
    font-size: 18px;
    font-weight: 700;
    position: relative;
}

._timer-hours>li,._timer-minutes>li,._timer-seconds>li  {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    text-decoration: none!important;
}

._hours-value-a,
._hours-value-b,
._minutes-value-a,
._minutes-value-b,
._seconds-value-a,
._seconds-value-b{
  text-align: center;
    z-index: 1;
    border-radius: 1.4px;  
}

._hours-value-a:before,
._hours-value-b:before,
._minutes-value-a:before,
._minutes-value-b:before,
._seconds-value-a:before,
._seconds-value-b:before {
    content: "";
    position: absolute;
    left: 0;
    z-index: 5;
    width: 100%;
    height: 1px;
    background-color: rgba(0,0,0,.18);
    top: 10px;
}
._time-separator{
    width: 7px;
    font-size: 12px;
    text-align: center;
}

._minutes-content-a,
._minutes-content-b,
._seconds-content-a,
._seconds-content-b{
     border-radius: 1.4px;
}


._timer-hours,._timer-minutes,._timer-seconds{
      perspective: 1000px;
    }



/*----------------/timer---------------*/



   .separator-eui{
    width: 1px;
    height: 33px;
    opacity: .4;
    background-image: linear-gradient(hsla(0,0%,100%,0),#fff,#fff,hsla(0,0%,100%,0));
    flex-shrink: 0;
   background-image: linear-gradient(rgba(255, 255, 255, 0), rgb(255, 255, 255), rgb(255, 255, 255), rgba(255, 255, 255, 0)); 
}



  
 
   /*------------/navigation area--------------*/     
</style>


<span class="separator-eui"></span>

<!--item 1-->
<div>
 <div class="item-content-eui">
  <!--ticker 1-->   
<div class="latest_newsarea"> 
<div class="tickercontainer">
<div class="mask"> 
<ul class="newsticker">
<li><a href="#">
  <div class="newsticker-content">
      <img class="newsticker-img" src="images/gift.png.slim.webp" alt="Free returns">
      <div class="newsticker-left-content">
     <div>
        <div class="newsticker-left-item news-item-1">
            <span>Free returns</span>
        </div>
        <div class="newsticker-left-item news-item-2">
            <span>Within 90 days</span>
        </div>
    </div>
    </div>
  </div>  
</a>
</li>
</ul>
</div>
</div>
</div>
<!--/ticker 1-->  
 </div>   
</div>
<!--/item 1-->
<style type="text/css">
    .item-content-eui{
        position: relative;
    overflow: hidden;
    width: 100%;
    height: 52px;
    }

  .newsticker li a{
    text-decoration: none;
  }  

.newsticker-content{
    height: 52px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    cursor: pointer;
}

img {
    border: 0;
    max-width: 100%;
    width: auto;
    height: auto;
    vertical-align: top;
}

.newsticker-img {
    width: 32px;
    height: 32px;
    margin-right: 8px;
}
.newsticker-left-content{
display: flex;
    align-items: center;
    white-space: nowrap;
    margin-left: 2px;
}
.newsticker-left-item{
    max-width: 420px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    margin-top: 3px;
    margin-right: 0;
}
.newsticker-left-item.news-item-1{
 color: rgb(255, 247, 167); 
 font-size: 22px; 
 line-height: 24px; 
 font-weight: 600; 
 height: 24px; 
 margin-bottom: -6px;  
}
.newsticker-left-item.news-item-1:first-child>span  {
    font-size: .727em;
}
.newsticker-left-item.news-item-2{
    color: rgb(255, 247, 167);
     font-size: 16px;
      line-height: 18px;
       font-weight: 600;
        height: 18px;
}

.newsticker-left-item.news-item-2:first-child>span  {
    font-size: .875em;
    }
</style>

<span class="separator-eui"></span>

<!--item 1-->
<div>
 <div class="item-content-eui">
  <!--ticker 1-->   
<a href="#">
  <div class="advert-container">
      <img class="advert-img" src="images/cell.png.slim.webp" alt="Free returns">
      <div class="advert-left-content">
     <div>
        <div class="advert-left-item advert-item-1">
            <span>Get the TopUpclassy App</span>
        </div>
    </div>
    </div>
  </div>  
</a>

<!--/ticker 1-->  
 </div>   
</div>
  <style type="text/css">
    a{ text-decoration:none; }
.advert-container{
    height: 52px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    cursor: pointer;
}
.advert-img {
    width: 32px;
    height: 32px;
    margin-right: 8px;
}
.advert-left-content{
display: flex;
    align-items: center;
    white-space: nowrap;
    margin-left: 2px;
}

.advert-left-item{
    max-width: 420px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    margin-right: 0;
}
.advert-left-item.advert-item-1{
 color: rgb(255, 247, 167); 
 font-size: 22px; 
 line-height: 24px; 
 font-weight: 600; 
 height: 24px; 
}
.advert-left-item.advert-item-1:first-child>span  {
    font-size: .727em;
}
    
</style>
<!--/item 1-->

</div>
</div>

<!--down nav-->
<div class="nav-down-eui"> 
<div class="nav-down-content main-navcontent-eui">

<a href="" class="brand-logo-eui">
    <span class="bg-logo-eui"></span>
    <img class="logo-eui-img" src="images/logo.png" alt="logo">
</a>


<style type="text/css">
.nav-down-eui{
    border-top-color: #414141;
    border-bottom-color: #000000;
    color: #fff;
    border-top-width: 1px;
    border-top-style: solid;
    border-bottom: 1px solid #ececec;
  }
  .nav-down-content{
    position: relative;
    z-index: 2;
    width: 100%;
    height: 63px;
        display: flex;
    align-items: center;
  }
  .brand-logo-eui{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    width: 48px;
    height: 48px;
        margin-right: 10px;
            color: inherit;

  }
  .bg-logo-eui{
    background-color: #fcfcfc;
    width: 40px;
    height: 40px;
    border-radius: 2px;
  }
  .logo-eui-img{
position: absolute;
    width: 100%;
    height: 100%;
  }
</style>

<div class="nav-items-eui">
    <div class="item-eui">
  <a href="" class="item-eui-link">
   <i class="ion ion-thumbsup"></i>   
  <span class="item-title-eui">Best sellers</span>
  <img class="top-icon-eui" src="images/hot.webp"  alt="image">
  </a>  
   </div>

    <div class="item-eui">
  <a href="" class="item-eui-link">
   <i class="ion ion-star"></i>   
  <span class="item-title-eui">5 star Rated</span>
  </a>  
   </div>

       <div class="item-eui">
  <a href="" class="item-eui-link">
   <i class="ion ion-bag"></i>   
  <span class="item-title-eui">Black Friday</span>
  </a>  
   </div>

    <div class="item-eui">
  <a href="" class="item-eui-link"> 
  <span class="item-title-eui">New Arrivals</span>
  </a>  
   </div>

       <div class="item-eui">
  <a href="" class="item-eui-link"> 
  <span class="item-title-eui item-dropdown-eui">Categories <i class="ion ion-android-arrow-dropdown"></i></span>
  </a>  
   </div>



<style type="text/css">
.nav-items-eui{
  display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: row;
    height: 100%;
        flex-wrap: wrap;
    overflow: hidden;
    padding: 0 10px;
    margin: 0 -10px;  
}

.item-eui{
  display: flex;
  flex-grow: 1;
    justify-content: flex-start;
    align-items: center;
    flex-direction: row;
}
.item-eui-link{
    color: #fff!important;
    position: relative;
    display: flex;
    flex-shrink: 0;
    align-items: center;
    justify-content: center;
    width: auto;
    height: 0.44rem;
    font-size: 13px;
    font-weight: 500;
    color: #222;
    white-space: nowrap;
    cursor: pointer;
    border-radius: 0.22rem;
        padding-left: 10px;
    padding-right: 10px;
    margin-left: 0;
    margin-right: 0;
}
.item-eui-link i{
    color: #fff!important;
    width: 17px;
    height: 17px;
    font-size: 17px;
    margin-top: -1.5px;
    margin-right: 0.03rem;
    flex-shrink: 0;
}
.item-title-eui{
   font-size: 15px; 
}

.top-icon-eui {
    position: absolute;
      top: -18px;
    right: -0.05rem;
    width: 1.99rem;
    height: 0.85rem;
}

.item-title-eui.item-dropdown-eui i{
content: "\f35f"; /* Unicode for ion-android-arrow-dropdown */
 font-size: 20px;
    position: absolute;
    top: -4px;
    margin-left: 4px; 
      transform: rotate(0deg);
  transition: transform .2s linear, -webkit-transform .2s linear;
  

}

.item-dropdown-eui:hover i::before{
content: "\f365"; /* Change to ion-android-arrow-dropup on hover */
}

</style>

<div class="separate-eui"></div>

<div class="search-form-container">
<form role="search" class="search-form-eui" action="/search_result.html" method="get">
<div id="searchBar" class="search-input-container-eui">
<input type="text" id="searchInput" autocomplete="off" class="search-input-eui" role="searchbox"  value="Men's wear" placeholder="search ...">
<div class="submit-search-eui"><i class="ion ion-search"></i></div>
</div>
</form>
</div>

<style type="text/css">
    .separate-eui{
        width: 30px;
    }
  .search-form-container {
    position: relative;
    min-width: 300px;
    transform: translateZ(0);
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: row;
    flex: 1;
}  
.search-form-eui{
        display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: row;
    flex: 1;
}
.search-input-container-eui{
    border: none;
    height: 40px;
    position: relative;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex-direction: row;
    padding-left: 15px;
    border-radius: 2rem;
    top: -0.005rem;
    flex: 1;
    border: 2px solid #222;
    background-color: #fff;
}
.search-input-eui{
    flex: 1;
    width: 100%;
    min-width: 0;
    height: 40px;
    font-size: 14px;
    color: #222;
    line-height: 1rem;
    font-weight: 500;
    position: relative;
    background-color: hsla(0,0%,100%,0);
    caret-color: #222;
}
input.search-input-eui[type="text"] {
  outline: none;
  border: none;
}

.submit-search-eui{
    margin-right: 6px;
    width: 34px;
    height: 34px;
    flex-shrink: 0;
    background-color: #222;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    margin-left: 4px;
    border-radius: 42%;
    cursor: pointer;
}

.submit-search-eui i{
    width: 18px;
    height: 18px;
    font-size: 18px;
    text-align: center;
}

</style>

<div class="separate-eui2"></div>

   <div class="item-eui">
  <a href="" class="item-eui-link">
   <i class="ion ion-android-person user-icon"></i>
   <div class="item-eui-desc"> 
   <div class="item-title-eui item-text-eui">Sign in / Sign up</div>  
  <div class="item-title-eui sm-eui">Orders & Account</div>
</div>
  </a>  
   </div>

   <div class="item-eui">
  <a href="" class="item-eui-link">
   <i class="ion ion-ios-chatbubble chart-icon-eui"></i>   
  <span class="item-title-eui">Support</span>
  </a>  
   </div>

     <div class="item-eui">
  <a href="" class="item-eui-link">
   <i class="ion ion-ios-world-outline"></i>   
  <span class="item-title-eui">ENG</span>
  </a>  
   </div>

     <div class="item-eui">
  <a href="" class="item-eui-link">
   <i class="ion ion-android-cart cart-icon-eui"></i>   
  <span class="item-title-eui">Cart</span>
  </a>  
   </div>

<style type="text/css">
    .item-title-eui.item-text-eui{
        font-size: 14px;
    }
    .item-title-eui.sm-eui{
     font-size: 13px;
    }
   i.user-icon{
    width: 25px;
    height: 25px;
    font-size: 25px;
   }
   i.chart-icon-eui{
        width: 20px;
    height: 20px;
    font-size: 20px;
   }
   i.cart-icon-eui{
    width: 20px;
    height: 20px;
    font-size: 20px;
   }

</style>
</div>
</div>
</div>
<!--/down nav-->

</div>  
</div>
</div>



<!--Mobile navigation-->
<style type="text/css">


</style>


<div class="mobile-top-navigation-eui">
<div class="mobile-navigation-eui">

<div class="m-brand-content-eui">
<a href="" class="m-brand-topname-eui"><div class="m-brand-name-eui">Topup Classy</div></a>
</div>

<div class="m-search-container-eui">
  <a href="">
 <div class="searchBar-box-eui "><i class="ion ion-search searchIcon-eui"></i><span class="shadeWord-eui">mens hoodies</span></div>   
  </a>
</div>

<div class="m-icon-container-eui">
<a href="" class="icon-wrap-eui">
 <div><i class="ion ion-android-apps Icon-eui"></i></div><!--ion-android-menu-->   
  </a>
  <a href="" class="icon-wrap-eui">
 <div ><i class="ion ion-android-person Icon-eui"></i></div>  
  </a>
   <a href="" class="icon-wrap-eui">
 <div><i class="ion ion-android-cart Icon-eui"></i></div>  
  </a>
</div>
</div>
<style type="text/css">

.mobile-top-navigation-eui{
 display: none;
}

    @media screen and (max-width: 600px){

.display-none-onmobile{
    display: none!important;
}


    .mobile-top-navigation-eui{
    position: relative;
    display: block!important;
    }
    .mobile-navigation-eui{
      position: fixed;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
    padding: 0 0.14rem;
        padding-left: 0.12rem;
    background-color: #fff;
    background-color: #0F1113;
    z-index: 999;  
       
    }


 .m-brand-content-eui{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: row;
    padding: 5px;
   
}
.m-brand-topname-eui{
    margin-right: -0.02rem;
        position: relative;
    padding-top: 0.01rem;
    width: auto;
    height: 30px;
}
.m-brand-name-eui{
           display: flex;
    align-items: center;
    position: relative;
    z-index: 1;
    width: auto;
    height: 30px;
    color: #fff;
        font-size: 17px;
}


    .searchBar-box-eui {
       position: relative;
    display: flex;
    align-items: center;
    width: 130px;
    height: 25px;
    background: #ececec;
    border-radius: 10px;
    color: #666;
    font-size: 13px;
}
.searchIcon-eui{
width: 17px;
    height: 17px;
    font-size: 17px;
    margin-left: 5px;
    margin-right: 2px;
    color: #666;
}
.shadeWord-eui {
    width: auto;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.m-icon-container-eui{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin:1px;
}
.icon-wrap-eui{
    color: #fff;
    margin-right: 14px;
}
.Icon-eui{
 width: 20px;
height: 20px;
font-size: 23px;
}



}
</style>

<!--Nav tabbed like-->
<div class="m-tabbed-nav-eui">
<div class="m-tabbed-contents-eui">
 <ul class="m-tabbed-items-eui">
<li ><a href="" class="m-active">All</a></li>
<li><a href="">Men</a></li>
<li><a href="">Women</a></li>
<li><a href="">Home</a></li>
<li><a href="">Sports</a></li>
<li><a href="">Toy</a></li>
<li><a href="">Jewelry</a></li>
<li><a href="">Kids</a></li>
<li><a href="">Crafts</a></li>
<li><a href="">Electronics</a></li>
<li><a href="">Industrials</a></li>
<li><a href="">Bags</a></li>
<li><a href="">Beauty</a></li>
<li><a href="">Office</a></li>
<li><a href="">Garden</a></li>
<li><a href="">Automotive</a></li>
<li><a href="">baby</a></li>
<li><a href="">Pet</a></li>
<li><a href="">Health</a></li>
<li><a href="">Household</a></li>
<li><a href="">Musical</a></li>
<li><a href="">Appliances</a></li>
 </ul>   
</div>
</div>
<style type="text/css">

   .m-tabbed-nav-eui{
    position: relative;
    display: block!important;
    margin-top: 40px;
    }

      .m-tabbed-contents-eui{
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
    padding: 0 0.14rem;
    padding-left: 0.12rem;
    background-color: #0F1113;

    border-top-color: #414141;
    border-bottom-color: #000000;
    color: #fff;
    border-top-width: 1px;
    border-top-style: solid;
    border-bottom: 1px solid #ececec;

    }

    .m-tabbed-items-eui{
        display: flex;
        align-items: center;
        flex-direction: row;
    flex-wrap: nowrap;
    overflow-x: scroll;
    overflow-y: hidden;
        width: 100%;
    max-width: 95%;
    margin: 0 auto;
    padding: 8px;
    padding-left: 0.12rem;

    scrollbar-width: thin; /* Firefox */
    scrollbar-color: transparent transparent; /* Firefox */
    -ms-overflow-style: none; /* Internet Explorer 10+ */
    }

    .m-tabbed-items-eui::-webkit-scrollbar {
            display: none; /* Webkit Browsers (Chrome, Safari) */
        }

    .m-tabbed-items-eui li{
        margin:auto 8px;
        color:#ececec ;
        font-weight: 500;
        line-height: 1;
        position: relative;
    }
      .m-tabbed-items-eui li a{
        color:#ececec ;
    }
    .m-tabbed-items-eui li a.m-active{
        color: #fff !important;
    }

    .m-tabbed-items-eui li a.m-active:after {
content: "";
    position: absolute;
    left: 50%;
    bottom: -3px;
    width: 33px;
    height: 4px;
    background: #fff;
    border-radius: 30px;
    transform: translate(-50%);

}
</style>
<!--/Nav tabbed like-->

</div>

<!--Mobile navigation-->


<!--Items-->
<div class="products-container-eui">
<div class="products-content-eui">

<!--Item-->
<div class="product-item-eui">
    <div class="product-content-eui">
<!--product img-->
<div class="item-img-container">
    <a href="" class="item-img-content">
      <img src="images/6aba4c03c000f8ae2349f98e57dc84a2.webp" alt="6aba4c03c000f8ae2349f98e57dc84a2.webp" class="item-img-eui">
     <!--quick view-->
     <div class="item-quick-view-eui">
          <a href="" class="item-quick-view-container">
            <div class="item-quick-view-content">
                <div class="view-icon-container"><i class="ion ion-eye view-icon-eui"></i></div>
                <div class="view-text-eui">Quick look</div>
            </div>
          </a>
       </div>
<!--/quick view-->
      <div class="promotion-img-content">
          <img src="images/promotion-placeholder.webp" alt="promotion-placeholder.webp" class="promotion-img-eui">
          <div class="promotion-label">
              <div class="promotion-label-text">Ends in 01:19:52:00</div>
          </div>
      </div>  
    </a>
</div>
<!--/product img-->
<!--product desc-->
<div class="product-details-eui">
    <h3 class="item-name-eui"><a href="">Men's Warm Fleece Hooded Coat For Fall Winter</a></h3>
<div class="item-price-container">
    <a href="" class="item-price-eui">
    <span class="item-discountedprice-eui">$27.35</span>
    <span class="item-actualprice-eui">$65.89</span>
    <span class="item-soldcount-eui">682 sold</span>
    <div class="discount-eui"><span class="discount-percentage-eui">-61%</span></div>
   </a>
   <div class="item-cart-eui"><a href=""><i class="ion ion-android-cart cart-Icon-item-eui"></i></a></div>
</div>

<!--progress bar-->
<div class="discount-progress-eui ProgressBarBg-eui"><div class="discount-BarFront-eui ProgressBarFront-eui" style="width:11%"></div></div>
<style type="text/css">
   .ProgressBarBg-eui {
    margin:10px 0px;
    background-color: #313335;
    color: #FFFFFF;
    fill: #FFFFFF;
    width: 80%;
    height: 3px;
    border-radius: 1.5px;
} 
.ProgressBarFront-eui{
    background-color: #F44336;
    color: #FFFFFF;
    fill: #FFFFFF;
    min-width: 3px;
    max-width: 100%;
    height: 100%;
    border-radius: 1.5px;
}

</style>
<!--/progress bar-->

<!--product notifications-->
    <div class="item-notification-eui">

      <div class="item-notify-eui">
        <a href="">
<div class="circle-img-container-eui">
    <img src="images/thumb-notify.jpeg" alt="just bought" class="img-thumb-eui">
</div>
    <span class="item-notify-message">Just bout</span>
        </a>
    </div>

          <div class="item-notify-eui">
        <a href="">
<div class="circle-user-container-eui">
    <span class="circled-letter">B</span>
</div>
    <span class="item-notify-message"> bought 1 min ago</span>
        </a>
    </div>

          <div class="item-notify-eui">
        <a href="">
 <div class="item-notify-colored">Only 5 left</div>
<div class="circle-img-container-eui">
    <img src="images/thumb-notify.jpeg" alt="just bought" class="img-thumb-eui">
</div>
    <span class="item-notify-message">Just added to cart</span>
        </a>
    </div>

<div class="item-notify-eui">
        <a href="">
     <div class="item-notify-shaped">Top Rated</div>
    <span class="item-notify-message">In recycling Lowest price ever</span>
        </a>
    </div>

<div class="item-notify-eui">
        <a href="">
     <div class="item-notify-colored">Almost sold out</div>
    <span class="item-notify-message">$6.05 in 2 wks x4</span>
        </a>
    </div>

    <div class="item-notify-eui">
        <a href="">
     <div class="item-notify-colored item-notify-textOnly">Curves & Plus</div>
    <span class="item-notify-message"></span>
        </a>
    </div>

    <style type="text/css">
        
    </style>
    </div>
    <!--/ product notifications-->
        <div class="container-ratings-eui">
           <div class="item-ratings-eui">
            <span class="item-rating-eui"><a href=""><i class="ion ion-star"></i></a></span>
            <span class="item-rating-eui"><a href=""><i class="ion ion-star"></i></a></span>
            <span class="item-rating-eui"><a href=""><i class="ion ion-star"></i></a></span>
            <span class="item-rating-eui"><a href=""><i class="ion ion-star"></i></a></span>
            <span class="item-rating-eui"><a href=""><i class="ion ion-star"></i></a></span>
            </div>
            <div class="item-ratings-count"><a href="">(3567)</a></div>
         </div>
</div>
<!--/product desc-->
    </div>    
</div>
<!--/Item-->

</div>
</div>
<style type="text/css">
    .products-container-eui{
      width: 95%;
      margin: 10px auto;
    }

    .products-content-eui{
          display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        flex-direction: row;
    }
    .product-item-eui{
    position: relative;
    width: 20%;
    padding: 9px;
    }
    .product-content-eui{
        
    height: 100%;
    position: relative;
    }
    .item-img-container a,.item-img-eui{
        width: 100%;
        height: 100%;
    }

    .item-img-content.a{
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .item-img-content:after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    content: "";
    background-color: rgba(0,0,0,.03);
}


 .item-quick-view-eui{
            top: 330px;
            position: absolute;
            margin: 0 10px 10px;
            cursor: pointer;
           }
           .item-quick-view-content{
            opacity: 0;
         display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;

        pointer-events: auto;
    padding: 0 11.5px 0 9px;
    height: 30px!important;
    color: #222;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,.1)!important;
    transform: scale(1.02);
        transition: all .15s ease;
        border-radius: 9999999px;
            border: 1px solid #cdcdcd!important;
    background: hsla(0,0%,100%,.8)!important;
           }
           .view-icon-container{
            margin-right: 5px;
           }
      
           .view-icon-eui{
            font-size: 18px;
           }
           .view-text-eui{
            font-size: 15px;
           }
/*.product-item-eui:hover:not(.item-cart-eui):not(._2vkbOdKh) .item-quick-view-eui {
    opacity: 1;
}  */
.product-item-eui:hover:not(.item-cart-eui):not(.cart-Icon-item-eui)  .item-quick-view-content {
    opacity: 1;
} 



.promotion-img-content{
 width: 100%;
    padding-bottom: 11.718%;
    height: 0;
    position: relative;
    overflow: hidden;   
}
.promotion-label{
position: absolute;
    left: 0;
    top: 0;
    width: 122.266%;
    left: 38.8672%;
    transform: scale(.5);
    transform-origin: 0 0;
    font-size: 28px;
    color: #fff;
    height: 200%;
    line-height: 1;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    padding-right: 3.125%;
    white-space: nowrap;
}
.promotion-label-text{
color: #fff;
    width: 100%;
}
.product-details-eui{
    margin-top: 8px;
    position: relative;
    background-color: #fff;
}
.item-name-eui{
        overflow: hidden;
    text-overflow: ellipsis;
    display: block;
    width: 100%;
    font-weight: inherit;
    color: #222;
    font-size: 14px;
    line-height: 20px;
    white-space: nowrap;
}
.item-name-eui a{
    color: #222;
}

.item-price-container{
       display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-between;
}

.item-price-eui{
         display: flex;
    align-items: center;
    flex-wrap: wrap;  
}
.item-discountedprice-eui{
  color: rgb(251, 119, 1);
      font-size: 18.1px;
    font-weight: 620;  
}

.item-actualprice-eui,.item-soldcount-eui{
    margin-left: 6px;
    flex-grow: 1;
    font-size: 14px;
    font-weight: 400;
    color: #484747;
}
.item-actualprice-eui{
text-decoration: line-through;
}

.discount-eui{
         transform-origin: 0 50%!important;
             margin-left: 6px;
        }
.discount-percentage-eui{
           padding: 0 4px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 18px;
    border: 1px solid #fb7701;
    border-radius: 3px;
    font-size: 13px;
    font-weight: 500;
    color: #fb7701;
    white-space: nowrap;
    position: relative;
    top: -1px;
        }

    .item-cart-eui a{
        width: 43px;
    margin-left: 4px
    height: 28px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    cursor: pointer;
    position: relative;
    padding: 0 10px 0 9px;
    color: #222;
      }
.item-cart-eui a:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 15px;
    background: #fff;
    border: 1px solid #222;
}
.item-cart-eui a i.cart-Icon-item-eui{
    position: relative;
    z-index: 10;
    width: 24px;
    height: 24px;
    font-size: 23px;

}

.item-notification-eui{
}
.item-notify-eui {
    margin-inline-end: 10px;
 overflow: hidden;
}

.item-notify-eui a{
    color: rgb(85, 85, 85);
 display: flex;
    max-width: 100%;
    font-size: 14px;
    height: 20px;
    line-height: 20px;
    text-overflow: ellipsis;
    white-space: nowrap;
    transition: transform .3s;
}

.circle-img-container-eui{
    width: 20px;
    border-radius: 50%;
    box-sizing: border-box;
    border: 1px solid #fff;
        display: inline-block;
    height: 20px;
}
.img-thumb-eui {
    width: 18px;
    height: 18px;
    border-radius: 50%;
}

.circle-user-container-eui{
        background-color: #663399;
         color: #eee;
    width: 20px;
    border-radius: 50%;
    box-sizing: border-box;
    border: 1px solid #fff;
        display: inline-block;
    height: 20px;
    text-align: center;
}
.circled-letter {
    width: 18px;
    height: 18px;
    border-radius: 50%;
   color: #eee;
}

.item-notify-message{
 margin-left: 2px;
    position: relative;
    top: 1px;
}
.item-notify-shaped{
            background: rgb(255, 223, 134); 
        color: rgb(139, 68, 0); 
        font-size: 12px;
         height: 18px; 
         line-height: 18px;
         padding: 0 5px;
    border-radius: 7px 0 7px 0;
    margin-right: 5px;
          }
    .item-notify-colored{
        background: #fff;
        color: rgb(251, 119, 1);
        font-size: 14px;
         height: 18px; 
         line-height: 18px;
         padding: 0 5px;
    border-radius: 7px 0 7px 0;
    margin-right: 5px;
          }
    .item-notify-colored.item-notify-textOnly{
            color: rgb(85, 85, 85);
    }


.container-ratings-eui{
    max-width: 100%;
       font-size: 14px;
    height: 20px;
    line-height: 20px; 
}
.container-ratings-eui,.item-ratings-eui{
    display: flex;
      align-items: center;
    flex-wrap: wrap;
}
.item-ratings-eui{
margin-right: 5px;
}
.item-ratings-eui,.item-rating-eui a{
color: #000;
}

.item-rating-eui{
  margin-right: 2px;  
}

.item-ratings-count a{
  color: rgb(85, 85, 85);  
}
</style>
<!--/Items-->



<script type="text/javascript">
function startCountdown(minutes) {
  // Calculate the end time
  var countDownDate = new Date().getTime() + minutes * 60 * 1000;

  // Update the countdown every 1 second
  var x = setInterval(function() {

    // Get the current date and time
    var now = new Date().getTime();

    // Calculate the distance between now and the countdown end time
    var distance = countDownDate - now;

    // Calculate hours, minutes, and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Extract the digit at the specified position
   // var digit = parseInt(numberString.charAt(position), 10);


var hoursA = document.getElementsByClassName('_hours-value-a');
var hoursB = document.getElementsByClassName('_hours-value-b');
var minutesA = document.getElementsByClassName('_minutes-content-a');
var minutesB = document.getElementsByClassName('_minutes-content-b');
var secondsA = document.getElementsByClassName('_seconds-content-a');
var secondsB = document.getElementsByClassName('_seconds-content-b');



hoursA[0].innerHTML= parseInt(formatTime(hours).toString().charAt(0), 10);//The radix is set to 10
hoursB[0].innerHTML= parseInt(formatTime(hours).toString().charAt(1), 10);
minutesA[0].innerHTML= parseInt(formatTime(minutes).toString().charAt(0), 10);
minutesB[0].innerHTML= parseInt(formatTime(minutes).toString().charAt(1), 10);
secondsA[0].innerHTML= parseInt(formatTime(seconds).toString().charAt(0), 10);
secondsB[0].innerHTML= parseInt(formatTime(seconds).toString().charAt(1), 10);



    // Display the countdown in the "countdown" element
   // document.getElementById("countdown").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";

    // If the countdown is over, display a message
    if (distance < 0) {
      clearInterval(x);
hoursA[0].innerHTML= 0;//The radix is set to 10
hoursB[0].innerHTML= 0;
minutesA[0].innerHTML= 0;
minutesB[0].innerHTML= 0;
secondsA[0].innerHTML= 0;
secondsB[0].innerHTML= 0;
secondsB[1].innerHTML= 0;
    }
  }, 1000); // Update every 1 second
}
// Function to add leading zeros if needed
function formatTime(time) {
  return time < 10 ? "0" + time : time;
}
// Start the countdown with a duration of 30 minutes
startCountdown(30);
</script>

</body>
</html>