<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>index_pro3</title>
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
.center{
    text-align: center;
}

.section-pro-3{
    min-height: 291px;
    margin-top: 51px;
}

.section-pro-items-3{

}
.pro-item-3{
width: 50%;
min-width: 50%;
}
.pro-u-image{
background-image: url(images/c-min.jpg);
    background-position: 50% 50%;
    min-height: 590px;
    object-fit: cover;
    display: block;
    vertical-align: middle;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
}

.text-white{
 color: #fff;   
}
.bg-paleblue{
background-color: #68b1c0;
}

.items-content{
padding-left: 30px;
    padding-right: 30px;
        padding: 30px 20px;
}

.items-repeaters{
padding: 0px;
}

.u-repeater-item{
margin-top: 35px;
}
.pro-icon-circle{
    height: 40px;
    width: 40px;
    background-image: none;
padding: 8px;
color: #329dbb !important;
background-color: #ffffff;
border-radius: 50%;
    display: block;
    line-height: 0;
    border-width: 0px;
}
.pro-icon-circle i{
 text-align: center;
    font-size: 50px;
    margin-top: -7px;
}
.repeater-item-content{
width: 365px;
margin-left: 20px;
}
.pro-heading{
font-size: 1.25rem;
line-height: 1.2;
margin-top: 0;
font-weight: 700;
margin-bottom: 0;
word-wrap: break-word;
color: #ffffff !important;
}
.pro-text{
margin-left: 0;
    margin-bottom: 0;
    margin-top: 20px;
 font-size: 1.125rem;
    line-height: 1.6;
    word-wrap: break-word; 
    color: #ffffff !important;  
}

.margin_top_50{
    margin-top: 50px;
}

.text-link{
    margin-left: 72px;
}

.pro-text-link-3{
color: #ffffff;
display: inline;
border-width: 1px;
border-style: none none solid;
    padding: 0;
    border-color: #ffffff;
    background-color: transparent;
    text-decoration: none;
}
.pro-text-link-3:hover{
  border: none !important;  
}

@media screen and (max-width: 600px){
.pro-item-3 {
    width: 100%;
    min-width: 100%;
}
}

@media screen and (max-width: 412px){
.repeater-item-content {
    width: 218px;
    margin-left: 5px;
}
}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {
.repeater-item-content {
    width: 280px;
    margin-left: 8px;
}
}

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>



    <section class="section-pro-3 bg-paleblue">

   
          <div class="section-pro-items-3 flex flex-grow flex-wrap">

            <div class="pro-item-3">
              <div class="pro-u-image"></div>
            </div>

            <div class="pro-item-3 bg-paleblue text-white">

              <div class="items-content">

                <div class="items-repeaters">

                  <div class="u-repeater-item flex flex-grow flex-wrap">
                    <span class="pro-icon-circle"><i class="ion ion-android-star"></i></span>
                        <div class="repeater-item-content">
                          <h5 class="pro-heading">Sample Headline</h5>
                          <p class="pro-text">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      </div>
                  </div>

                   <div class="u-repeater-item flex flex-grow flex-wrap">
                    <span class="pro-icon-circle"><i class="ion ion-android-star"></i></span>
                        <div class="repeater-item-content">
                          <h5 class="pro-heading">Sample Headline</h5>
                          <p class="pro-text">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      </div>
                  </div>

                   <div class="u-repeater-item flex flex-grow flex-wrap">
                    <span class="pro-icon-circle"><i class="ion ion-android-star"></i></span>
                        <div class="repeater-item-content">
                          <h5 class="pro-heading">Sample Headline</h5>
                          <p class="pro-text">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      </div>
                  </div>
                    
                     <div class="u-repeater-item flex flex-grow flex-wrap">
                    <span class="pro-icon-circle"><i class="ion ion-android-star"></i></span>
                        <div class="repeater-item-content">
                          <h5 class="pro-heading">Sample Headline</h5>
                          <p class="pro-text">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      </div>
                  </div> 


                    <p class="pro-heading margin_top_50 text-link">Image by <a href="https://www.freepik.com/psd/mockup" class="pro-text-link-3">Freepik</a>
                </p>

                </div>

              
              </div>


            </div>


          </div>

    </section>




</body>
</html>