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
    color: #777777;
    line-height: 1.7em;
    font-weight: 400;
    background: #ffffff;
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
    z-index: 10;
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


.ux-section{
margin-top: 60px;
}
.ux-layout-wrap{
    width: 95%;
     margin: 0 auto 0 auto;   
}


.ux-heading{
font-family: Montserrat, sans-serif;
    margin: 5px auto 0;
    font-size: 2.25rem;
    line-height: 1.1;
    font-weight: 700;
    padding: 0;
    word-wrap: break-word;
    text-align: center;
}
.ux-desc-text{
    width: 689px;
    margin: 20px auto 0;
    word-wrap: break-word;
    padding: 0;
    text-align: center;
    font-size: 1rem;
    line-height: 1.6;
}

.ux-layout-row{
    max-width: 100%;
    min-width: 100%;
    
}

.ux-layout-column{
        max-width: 47%;
    min-width: 47%;
    margin: 5px;
    
}

.ux-layout-content{
padding: 0px;
    
}

.ux-layout-content.ux-image{
  background-position: 50% 50%;
  background-size: cover, cover;
  background-image: linear-gradient(0deg, rgba(0,0,0,0.15), rgba(0,0,0,0.15));  
      object-fit: cover;
    display: block;
    vertical-align: middle;
        background-repeat: no-repeat;
        width: auto;
        height: 260px;
}

.ux-container-layout{
position: relative;
    display: flex;
    opacity: 1;
    width: 279px;
    min-height: 260px;
    background-size: auto;
    margin: 0 auto 0 0;
    background-color: transparent !important;
    color: #fff;
    text-align: center;
}

.ux-container-layout:before{
    color: #ffffff;
    background-color: #000000;
    content: '';
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    transition-duration: inherit;
    opacity: 0.35;
}

.ux-content{
    position: relative;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.ux-text{
    font-weight: 700;
    margin: 0 auto;
    word-wrap: break-word;
    font-size: 1.5rem;
    line-height: 1.2;
    font-family: Montserrat,sans-serif;
}
.ux-text-4{
font-weight: 700;
    font-size: 1.25rem;
    margin: 20px auto 0;
    color: #ef5a60 !important;
    word-wrap: break-word;
    line-height: 1.2;

}

.ux-btn{
 display: inline-block;
    display: table;
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
.ux-btn-1{
 border-style: none;
    text-transform: uppercase;
    background-image: none;
    font-size: 0.875rem;
    font-weight: 700;
    letter-spacing: 1px;
    margin: 20px auto 0;
    border-color: transparent !important;
    border-width: 0 !important;   
    color: #ffffff !important;
    background-color: #e81922 !important;
    border-radius: 50px !important;
}

.ux-btn-1:hover{
    color: #ffffff !important;
    background-color: #ef5a60 !important;
}


@media screen and (max-width: 600px){

.ux-desc-text{
    width: 100%;
}
.ux-layout-column {
    max-width: 100%;
    min-width: 100%;
   margin: 5px 0px 0px 0px;
}

.ux-container-layout {
width: 240px;
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


   <section class="ux-section">
      <div class="ux-layout-wrap">

        <h2 class="ux-heading">Burger Menu</h2>
        <p class="ux-desc-text">You're gonna need two hands to hold our toasted buns. Our fresh, juicy burgers are served up medium-well with a side of fries and a whole lot of flavor.</p>

          <div class="ux-layout-row flex flex-wrap flex-grow">


            <div class="ux-layout-column">
                <div class="ux-layout-content ux-image" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url(images/3.jpg);">
                    <div class="ux-container-layout">
                      <div class="ux-content">  
                    <h4 class="ux-text">Double Burger</h4>
                    <h6 class="ux-text-4">$8.50</h6>
                    <a href="#" class="ux-btn ux-btn-1"> add to cart</a>
                  </div>
              </div>
                </div>
            </div>

               <div class="ux-layout-column">
                <div class="ux-layout-content ux-image" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url(images/3_1.jpg);">
                    <div class="ux-container-layout">
                      <div class="ux-content">  
                    <h4 class="ux-text">Farm House</h4>
                    <h6 class="ux-text-4">$8.50</h6>
                    <a href="#" class="ux-btn ux-btn-1"> add to cart</a>
                  </div>
              </div>
                </div>
            </div>

               <div class="ux-layout-column">
                <div class="ux-layout-content ux-image" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url(images/3_2.jpg);">
                    <div class="ux-container-layout">
                      <div class="ux-content">  
                    <h4 class="ux-text">Bacon Burger</h4>
                    <h6 class="ux-text-4">$8.50</h6>
                    <a href="#" class="ux-btn ux-btn-1"> add to cart</a>
                  </div>
              </div>
                </div>
            </div>

               <div class="ux-layout-column">
                <div class="ux-layout-content ux-image" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url(images/3_3.jpg);">
                    <div class="ux-container-layout">
                      <div class="ux-content">  
                    <h4 class="ux-text">Special Offer</h4>
                    <h6 class="ux-text-4">$8.50</h6>
                    <a href="#" class="ux-btn ux-btn-1"> add to cart</a>
                  </div>
              </div>
                </div>
            </div>

               <div class="ux-layout-column">
                <div class="ux-layout-content ux-image" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url(images/3_5.jpg);">
                    <div class="ux-container-layout">
                      <div class="ux-content">  
                    <h4 class="ux-text">Black Burger</h4>
                    <h6 class="ux-text-4">$8.50</h6>
                    <a href="#" class="ux-btn ux-btn-1"> add to cart</a>
                  </div>
              </div>
                </div>
            </div>

               <div class="ux-layout-column">
                <div class="ux-layout-content ux-image" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url(images/3_6.jpg);">
                    <div class="ux-container-layout">
                      <div class="ux-content">  
                    <h4 class="ux-text">King Burger</h4>
                    <h6 class="ux-text-4">$8.50</h6>
                    <a href="#" class="ux-btn ux-btn-1"> add to cart</a>
                  </div>
              </div>
                </div>
            </div>



        </div>
    </div>
</section>




</body>
</html>