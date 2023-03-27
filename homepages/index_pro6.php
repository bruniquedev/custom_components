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


.u-section-4{
    margin-top: 50px;
    padding: 30px;
}
.darker{
    color: #ffffff;
    background-color: #292d33;
}

.text-black{
color: #111111;
}
.bg-lightgray{
  background-color: #f2f2f2;  
}

.text-white{
color: #ffffff;
}
.bg-blue{
 background-color: #1659d7; 
}

.row-item{
        max-width: 30%;
    min-width: 30%;
    margin: 15px;
    
    border-radius: 30px !important;
    text-align: left;
}

.row-item-content{
 padding: 30px;
 color: #111111;   
}

.item-icon-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    background-image: none;
    margin: 0 auto 0 0;
    padding: 17px;
        color: #ffffff !important;
        background-color: #1659d7;
            border-radius: 50%;
            display: block;
    line-height: 0;
    border-width: 0px;
}

.item-icon-circle i{
    font-size: 30px;
}

.item-heading-4 {
    font-weight: 700;
    margin: 30px auto 0 0;
    word-wrap: break-word;
    padding: 0px;
    font-size: 1.5rem;
    line-height: 1.2;
}

.item-text {
   /* margin: 20px auto 0 0;*/
   font-size: 18px;
}

.item-heading-3{
    font-weight: 700;
    font-size: 1.875rem;
    margin: 0 auto 0 0;
       word-wrap: break-word;
    padding: 0px;
}

.u-btn-link {
    font-weight: 700;
    font-size: 0.875rem;
    letter-spacing: 0px;
    text-transform: uppercase;
    border-style: solid;
    margin: 30px auto 0 0;
    padding: 0;
}

.btn-text-link{
 color: #ffffff !important; 
 border-left-width: 0;
    border-left-style: none;
        border-right-width: 0;
    border-right-style: none;
    border-top-width: 0;
    border-top-style: none;
    border-width: 2px; 

        border-color: #ffffff !important;
    background-color: transparent !important;
    text-decoration: none; 
}

a.btn-text-link:hover{
 color: #a4c2fa !important;   
}

.u-image-round{
    object-fit: cover;
    display: block;
    vertical-align: middle;
    background-size: cover;
   /* background-position: 50% 50%;*/
   background-position: center top;
    background-repeat: no-repeat;
        max-width: 30%;
    min-width: 30%;
    min-height: 244px;  
border-radius: 30px !important;
}

.u-image-content{
padding: 30px;    
}

.text-link-max{
color: #b3b3b3;
display: inline;
border-width: 1px;
border-style: none none solid;
    padding: 0;
    border-color: #ffffff;
    background-color: transparent;
    text-decoration: none;
}
.text-link-max:hover{
  border: none !important;  
}

@media screen and (max-width: 600px){
.row-item {
    max-width: 100%;
    min-width: 100%;
    margin: 8px;
}
}
@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

.row-item {
    max-width: 30%;
    min-width: 30%;
    margin: 6px;
   }
}

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  

<section class="u-section-4 darker">
      <div class="u-container-4">

              <div class="u-row">
                <div class="u-layout-row flex flex-grow flex-wrap justify-center">


                  <div class="row-item bg-lightgray text-black">
                    <div class="row-item-content"><span class="item-icon-circle"><i class="ion ion-android-globe"></i></span>
                      <h4 class="item-heading-4"> Website Design</h4>
                      <p class="item-text">Sample text. Click to select the Text Element.</p>
                    </div>
                  </div>


                  <div class="row-item bg-blue text-white">
                    <div class="row-item-content">
                      <h3 class="item-heading-3 text-white"> Our call service world quality</h3>
                      <p class="item-text text-white">Sample text. Click to select the Text Element.</p>
                      <a href="https://nicepage.com" class="u-btn-link btn-text-link">Read More&nbsp;<span class="link-icon"><i class="ion ion-arrow-right-a"></i></span>
                      </a>
                    </div>
                  </div>


                  <div class="row-item bg-lightgray text-black">
                    <div class="row-item-content"><span class="item-icon-circle"><i class="ion ion-android-phone-portrait"></i></span>
                      <h4 class="item-heading-4"> Online Research</h4>
                      <p class="item-text">Sample text. Click to select the Text Element.</p>
                    </div>
                  </div>



                  <div class="u-image-round row-item" style="background-image: url(images/shop-1.jpg);">
                    <div class="u-image-content"></div>
                  </div>

                  <div class="row-item bg-lightgray text-black">
                    <div class="row-item-content"><span class="item-icon-circle"><i class="ion ion-android-settings"></i></span>
                      <h4 class="item-heading-4"> Social Media</h4>
                      <p class="item-text">Sample text. Click to select the Text Element.</p>
                    </div>
                  </div>


                   <div class="u-image-round row-item" style="background-image: url(images/shop-11.jpg);">
                    <div class="u-image-content"></div>
                  </div>



                </div>
              </div>



        <p class="item-text center">Image by <a href="https://www.freepik.com/photos/business" class="text-link-max" target="_blank">Freepik</a>
        </p>

      </div>
    </section>






</body>
</html>