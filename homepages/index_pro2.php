<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>index_pro2</title>
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
        font-family:"Myriad-Regular"; 
    font-size: 12px;
    color: #303030;
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




.card-items-container{
background-color: #fff;
margin-top: 60px;
}

.bg-green{
    background-color: #0a8787;
}
.bg-white{
background-color: #ffffff;
}

.bg-orange{
        background-color: #f48406 !important;
}
.text-black{
    color: #111111;
}
.text-white{
color: #ffffff;
}

.card-shadow{
    background-image: none;
    box-shadow: 5px 5px 30px 0 rgba(0,0,0,0.15);
}

.custom-card-item{
border-radius: 30px;
width: 25%;
margin: 20px;
display: flex;
}
.card-contents{
border-radius: 30px;
padding: 20px 19px;
    display: flex;
    flex-direction: column;
justify-content: flex-start;
}



.card-contents .rounded-icon{
width: 70px;
    height: 70px;
    background-image: none;
    margin: 0 auto 0 1px;
    padding: 13px;
    color: #000000;
    background-color: #ffffff;
border-radius: 50%;
display: block;
border-width: 0px;
line-height: 0;

}

.card-contents .rounded-icon i{
width: 100%;
height: 100%;
font-size: 80px;
margin-top: -8px;
    text-align: center;
}
.card-contents h6{
font-weight: 700;
    font-size: 1.25rem;
    margin: 79px 1px 0;
    word-wrap: break-word;
        line-height: 1.2;

}
.card-contents p{
    margin: 20px 1px 0;
    word-wrap: break-word;
    font-size: 15px;
}


    .info_row{
            min-height: 343px;
            margin: 0 auto;
                margin-top: 60px;
            margin-bottom: -79px;
        }
        .info_row_item_1{
            max-width: 66.66666667%;
    min-width: 66.66666667%;
        }
        .info_row_item{
             max-width: 33.33333333%;
    min-width: 33.33333333%;   
        }
        .info_item_content{
            padding: 70px;
        }

        .info_item_heading{
            margin-bottom: 0;
    margin-top: 0;
    font-weight: 700;
    font-size: 2.25rem;
    line-height: 1.1;
    padding: 0px;
    word-wrap: break-word;

        }
        .info_item_text{
                font-size: 1.1rem;
    margin: 21px auto 0 0;
    word-wrap: break-word;
    padding: 0px;
        }
        .info_item_btn {
    background-image: none;
    font-weight: 700 !important;;
    text-transform: none;
    margin: 0 auto !important;;
    padding: 20px 68px !important;;
     border-color: transparent !important;
     border-radius: 10px !important;
     border-style: solid !important;;
     text-align: center; 
     color: #ffffff !important;
    background-color: #0a8787 !important;
    font-size: 26px !important;;  
    font-family:"Myriad-Regular";
}
.info_item_btn:hover{
    color: #ffffff !important;
    background-color: #09797a !important;
}

    .u-default-btn {
    display: inline-block; 
   
    cursor: pointer;
    color: inherit;
    font-size: inherit;
    font-family: inherit;
    line-height: inherit;
    letter-spacing: inherit;
    text-transform: inherit;
    font-style: inherit;
    font-weight: inherit;
    text-decoration: none;
    border: 0 none transparent;
    outline-width: 0;
    background-color: transparent;
    margin: 0;
    -webkit-text-decoration-skip: objects;
    font-style: initial;
    white-space: nowrap;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    vertical-align: middle;
    text-align: center;
    padding: 10px 30px;
    border-radius: 0;
    align-self: flex-start;
}


@media screen and (max-width: 580px){
.custom-card-item {
    width: 100% !important;
}

.info_row_item_1,.info_row_item {
    max-width: 100%;
    min-width: 100%;
}

.info_item_content {
    padding: 30px;

}
.info_row_item .info_item_content{
    text-align: center;
}

}

@media screen and (max-width: 1000px){

.info_row_item_1,.info_row_item {
    max-width: 100%;
    min-width: 100%;
}
.info_row_item .info_item_content{
    padding-top: 0px;
}

.custom-card-item {
    width: 40%;
}

    }

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>

<div class="card-items-container flex flex-grow flex-wrap justify-center">
    
<div class="custom-card-item bg-green text-white">
<div class="card-contents">
<span class="rounded-icon">
    <i class="ion ion-ios-location-outline"></i></span>
    <h6 class="card-text-heading">Investment</h6>
    <p class="card-text">Sample text. Click to select the Text Element.</p>
 </div>   
</div> 

<div class="custom-card-item bg-white text-black card-shadow">
<div class="card-contents">
<span class="rounded-icon bg-orange">
    <i class="ion ion-ios-lightbulb-outline text-white"></i></span>
    <h6 class="card-text-heading">Finance</h6>
    <p class="card-text">Sample text. Click to select the Text Element.</p>
 </div>   
</div> 

<div class="custom-card-item bg-white text-black card-shadow">
<div class="card-contents">
<span class="rounded-icon bg-orange">
    <i class="ion ion-ios-settings text-white"></i></span>
    <h6 class="card-text-heading">Risk Management</h6>
    <p class="card-text">Sample text. Click to select the Text Element.</p>
 </div>   
</div> 

<div class="custom-card-item bg-white text-black card-shadow">
<div class="card-contents">
<span class="rounded-icon bg-orange">
    <i class="ion ion-android-globe text-white"></i></span>
    <h6 class="card-text-heading">Audit & Accounting</h6>
    <p class="card-text">Sample text. Click to select the Text Element.</p>
 </div>   
</div> 

<div class="custom-card-item bg-white text-black card-shadow">
<div class="card-contents">
<span class="rounded-icon bg-orange">
    <i class="ion ion-ios-time-outline text-white"></i></span>
    <h6 class="card-text-heading">Marketing</h6>
    <p class="card-text">Sample text. Click to select the Text Element.</p>
 </div>   
</div> 

<div class="custom-card-item bg-green text-white">
<div class="card-contents">
<span class="rounded-icon">
    <i class="ion ion-ios-home-outline"></i></span>
    <h6 class="card-text-heading">Experience</h6>
    <p class="card-text">Sample text. Click to select the Text Element.</p>
 </div>   
</div> 



</div>
    
  

<section class="container-section bg-orange text-white">

            <div class="info_row flex flex-grow flex-wrap">

              <div class="info_row_item_1">
                <div class="info_item_content">
                  <h1 class="info_item_heading"> Flexible &amp; reliable software</h1>
                  <p class="info_item_text"> Article evident arrived express highest men did boy. Mistress sensible entirely am so. Quick can manor smart money hopes worth too. Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read.</p>
                </div>
              </div>

              <div class="info_row_item">
                <div class="info_item_content">
                  <a href="https://nicepage.com/k/prescription-medicine-html-templates" class="u-default-btn info_item_btn">read more</a>
                </div>
              </div>

            </div>
    </section>


</body>
</html>