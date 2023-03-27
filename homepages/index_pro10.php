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

/*This debugs for what's causing horizntal scroll, un comment to see
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

.margin_top{
  margin-top: 15px;
  margin-bottom: 10px;
}
.margin_top_50{
    margin-top: 50px;
}

a{
    text-decoration: none;
    outline-width: 0;
}
a:hover {
    outline-width: 0;
}

.section_area_2{
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

.container-content{
 width: 95%;
     margin: 0 0 0 auto;
}
.row-content{

}

.item-col{
    max-width: 33%;
    min-width: 33%; 
}
.p-container{
padding: 10px;
}
.p-text-1{
    color: #ffffff;
    background-color: #ffa900;
    padding: 10px;
    font-size: 1.4rem;
    line-height: 1;
    font-weight: 400;
}
.p-text-h4{
  margin-left: 5px;
  font-size: 1.4rem;
    text-transform: uppercase;
    word-wrap: break-word;
}

.p-contents{
 height: 60px;   
}

.p-text-medium{
    color: #333;
    font-size: 1.1rem;
    line-height: 1.56666667;
    text-rendering: optimizeLegibility;
    margin-bottom: 15px;
      padding: 0;
        word-wrap: break-word;   
}

a.p-border-1{
    border-left-width: 0;
    border-left-style: none;
    border-width: 1px;
    border-color: #404040;
    color: #404040;
    background-color: transparent;
    text-transform: uppercase;
    font-size: 1.1rem;
    letter-spacing: 1px;
    background-image: none;
    border-bottom: solid;
    margin: 20px auto 0 0;
    padding: 0;
}

.p-border-1:hover{
      border-color: #8a72c7;
}



.n-button-style{
  color: #ffffff !important;
  background-color: #b30000 !important;
  background-image: none;
    border-style: none;
    letter-spacing: 2px;
    font-size: 1.125rem;
    box-shadow: 2px 2px 10px 0 rgba(0,0,0,0.25);
    text-transform: uppercase;
    font-weight: 600;
    margin: 20px auto 0 0;
    padding: 11px 50px 13px 48px;
    border-color: transparent !important;
    border-radius: 50px !important;
    border-width: 0 !important;
    
    cursor: pointer;
    font-family: inherit;
    line-height: inherit;
    border: 0 none transparent;
    outline-width: 0;
    font-style: initial;
    white-space: nowrap;
    user-select: none;
    vertical-align: middle;
    text-align: center;
}

.n-button-style:hover{
  background-color: #ffffff !important;
  color: #000000 !important;
}




@media screen and (max-width: 600px){

.item-col {
    max-width: 100%;
    min-width: 100%;
}

}
@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {



}

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  
<section class="section_area_2">
<div class="heading_info title-underlined">
  <h1 class="center">
    <span><a href="javascript:void(0);">Our programmes</a></span></h1>
</div>


<div class="container-content">
<div class="row-content flex flex-wrap flex-grow justify-center">

  <!--column 1-->
 <div class="item-col">

<div class="p-container">
<div class="p-contents flex flex-wrap flex-grow">
  <p class="p-text-1">1</p>
  <h4 class="p-text-h4">Heat 2.0</h4>
</div>
  <div class="p-content">
    <p class="p-text-medium">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

    <a href="#" class="p-border-1">learn more</a>
  </div>
</div>

 </div>
  <!--/column 1-->

  <!--column 2-->
<div class="item-col"> 

<div class="p-container">
<div class="p-contents flex flex-wrap flex-grow">
  <p class="p-text-1">2</p>
  <h4 class="p-text-h4">Heat 2.0</h4>
</div>
  <div class="p-content">
    <p class="p-text-medium">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

    <a href="#" class="p-border-1">learn more</a>
  </div>
</div>

</div>
  <!--/column 2-->

    <!--column 3-->
<div class="item-col">

<div class="p-container">
<div class="p-contents flex flex-wrap flex-grow">
  <p class="p-text-1">3</p>
  <h4 class="p-text-h4">Heat 2.0</h4>
</div>
  <div class="p-content">
    <p class="p-text-medium">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

    <a href="#" class="p-border-1">learn more</a>
  </div>
</div>

</div>
  <!--/column 3-->
</div>

<div class="center margin_top_50">
<a href="#" class="n-button-style">More programmes</a>
</div>

</div>


</section>



</body>
</html>