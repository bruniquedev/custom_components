<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>index_pro1</title>
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

/*This debugs for what's causing horizntal scroll, un comment to see*/
/*
* {
  outline: 1px solid #f00 !important;
}*/

body{
    margin: 0px;
    padding: 0px;
    /*font-family: 'Lato', sans-serif;*/
        font-family: Myriad-Regular;
    font-size: 15px;
}

.top-nav-dashb {
    display: flex;
    background-color: #b30000;
    width: 100%;
    height: 50px;
    position: fixed;
    top: 0px;
    margin: 0;
    padding: 0;
}



.flex {
    display: flex;
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
.flex-col {
    flex-direction: column;
}
.items-center {
    align-items: center;
}
.flex-grow {
    flex-grow: 1;
}
.w-full {
    width: 100%;
}
.justify-center {
    justify-content: center;
}
.center{
    text-align: center;
}
a{
    text-decoration: none;
    outline-width: 0;
}
a:hover {
    outline-width: 0;
}

.padding_30{
    padding: 30px;
}

.section_area_1{
    margin-top: 50px;
}

  .heading_info h1{
    
    font-size: 2.1rem;
    font-weight: 500;
    color: #30323a;
    margin-bottom: 2rem;
   }


   .title-underlined h1{
      margin-bottom: 0rem;
}
.title-underlined{
      display: block;
      border-bottom: 1px solid #ddd;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
.title-underlined> h1 > span {
    display: inline-block;
    margin-bottom: -2px;
    color: #000;
    border-bottom: 3px solid #c44446;
}

.title-underlined> h1 > span > a {
color: #000;
text-decoration: none;
  }

.container-wrap{
 width: 95%;
     margin: 0 0 0 auto;
}
.row-wrap{

}

.col-item{
    max-width: 41%;
    min-width: 41%; 
}
.col-item-content{
    padding: 30px;
}

/****content***/
.u-border-medium{
  width: 69px;
    transform-origin: left center;
    margin: 0 auto 0 0;
    border-right-width: 0;
    border-left-width: 0;
    border-bottom-width: 0;
    border-color: #d6000f;
    border-width: 6px;
    border-style: solid;
}
.u-heading-text-1{
  font-size: 2.1rem;
    margin: 20px 0 0;
    color: #d6000f !important;
      padding: 0;
        word-wrap: break-word;
}
.u-heading-text-2{
  font-family: Myriad-Pro;
  text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 1.3rem;
      padding: 0;
        word-wrap: break-word;
    
}
.u-text-medium{
    color: #333;
    font-size: 1.3rem;
    line-height: 1.56666667;
    text-rendering: optimizeLegibility;
    margin-bottom: 15px;
      padding: 0;
        word-wrap: break-word;   
}
.u-black-btn-medium{
  color: #ffffff !important;
    background-color: #000000 !important;
    background-image: none;
    font-size: 1.4rem;
    margin: 20px 0 0;
    border-width: 0;
    display: inline-block;
    cursor: pointer;
    line-height: inherit;
    letter-spacing: inherit;
    text-transform: inherit;
        border: 0 none transparent;
            font-style: initial;
    white-space: nowrap;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    vertical-align: middle;
    text-align: center;
    padding: 10px 30px;
    border-radius: 0;
    align-self: flex-start;
}
.u-black-btn-medium:hover, .u-black-btn-medium:focus {
    text-decoration: none;
}
.u-shape-area{
width: 416px;
background-image: none;
position: absolute !important;
    height: 360px !important;
    /*top: 0 !important;*/
    left: auto;
    right: auto;
    color: #ffffff;
    background-color: #ffa900;
    text-align: left;
}
.u-image-content{
  height: 321px;
      margin: 60px auto 0 0;
      overflow: hidden;
      color: #111111;
      text-align: left;
      position: relative;
      top:-40px;
      /*width: 100% !important;*/
    margin-left: 0 !important;
    margin-right: 0 !important;
    object-fit: cover;
    
    vertical-align: middle;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
}
/****end content***/

@media screen and (max-width: 600px){
.container-wrap {
    width: 100%;
}

.col-item {
    max-width: 100%;
    min-width: 100%;
}
.col-item-content {
    padding: 30px !important;
}

.u-shape-area {
    width: 100%;
    height: 345px !important;
    }
    .u-image-content {
    width: 100% !important;
    }


}
@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {
.col-item-content {
    padding: 1px !important;
}

    .u-image-content {
        width: 100% !important;
    }

}

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  
<section class="section_area_1">
 <div class="heading_info title-underlined">
  <h1 class="center">
    <span><a href="javascript:void(0);">Events!</a></span></h1>
</div>

 <div class="container-wrap">
<div class="row-wrap flex flex-wrap flex-grow">
  <!--column 1-->
 <div class="col-item"> 

<div class="col-item-content">

<div class="u-border-medium"></div>

<h1 class="u-heading-text-1">Events &amp; Meetings</h1>
<h2 class="u-heading-text-2"> We bring you closer</h2>
<p class="u-text-medium">Featuring concert tickets for top tours, festivals and more - Vivid Seats is your one-stop resource for live concert events. Find detailed seating charts and concert ... </p>

<a href="#" class="u-black-btn-medium">view more</a>

</div>
 </div>
  <!--/column 1-->
  <!--column 2-->
<div class="col-item"> 


<div class="u-shape-area"></div>
<img src="images/billionphotos3930909.jpg" class="u-image-content">
</div>
  <!--/column 2-->
</div>
</div>
</section>



</body>
</html>