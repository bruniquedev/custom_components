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

.darker{
    color: #ffffff;
    background-color: #292d33;
}

.u-section-5{
    margin-top: 55px;
}

.u-text-heading-2 {
    font-size: 3rem;
    font-weight: 700;
    text-align: center;
    line-height: 1.1;
        padding: 0;
        word-wrap: break-word;
}

.u-list-5{
    width: 940px;
    margin: 35px auto 0;
}
.u-list-item-5{
    width: 30%;
    margin: 15px;
    color: #111111;
    background-color: #ffffff;
    border-radius: 30px !important;
    text-align: center;
}

.u-content-layout{
    border-radius: 30px !important;  
}

.u-image-5 {
    width: 270px;
    height: 278px;
    margin: 0 auto;
        border-radius: 30px !important;

        object-fit: cover;
    display: block;
    vertical-align: middle;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
}

.u-heading-5 {
    text-transform: uppercase;
    font-size: 1.5rem;
    font-weight: 700;
    margin: 20px 0 0;
        word-wrap: break-word;
        padding: 0px;
        line-height: 1.2;
}
.u-text-medium{
font-weight: 700;
    margin: 12px 0 0;
    color: #1659d7 !important;
    padding: 0px;
    word-wrap: break-word;
}
.u-text-description{
font-weight: 300;
    font-style: normal;
    margin: 23px 0 0;
    padding: 0px;
    word-wrap: break-word;
    font-family: Myriad-Pro;
    line-height: 1.2;
}

.u-social-icons {
    white-space: nowrap;
    height: 27px;
    min-height: 16px;
    width: 138px;
    min-width: 94px;
    margin: 20px auto 0;
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
    justify-content: center;
}

.u-icon-circle-5{
 border-radius: 50%;   
}

.u-social-url{
    margin: 5px;
    text-decoration: none;
    color: #111111;
}
.u-social-url i{
    font-size: 30px;
}

.text-link-max-5{
color: #333333;
display: inline;
border-width: 1px;
border-style: none none solid;
    padding: 0;
    border-color: #111111;
    background-color: transparent;
    text-decoration: none;
}
.text-link-max-5:hover{
  border: none !important;  
}

.item-text-5{
font-size: 18px;
}

@media screen and (max-width: 600px){
    .u-list-5 {
    width: 100%;
}
.u-list-item-5 {
    width: 100%;
}

.u-text-description{
    font-size: 25px;
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


  
<section class="u-section-5">
      <h2 class="u-text-heading-2">Meet The Team</h2>

      <div class="u-list-5">
        <div class="u-repeater-5 flex flex-grow flex-wrap justify-center">


          <div class="u-list-item-5">
            <div class="u-content-layout">
              <img alt="" class="u-image-5" src="images/shop-11.jpg" />
              <h3 class="u-heading-5">mary Brown</h3>
              <p class="u-text-medium">creative leader</p>
              <p class="u-text-description">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum</p>
              <div class="u-social-icons">
                <a class="u-social-url" target="_blank" href=""><span class="u-icon-circle-5 u-social-facebook"><i class="ion ion-social-facebook"></i></span>
                </a>
                <a class="u-social-url" target="_blank" href=""><span class="u-icon-circle-5 u-social-twitter"><i class="ion ion-social-twitter"></i></span>
                </a>
                <a class="u-social-url" target="_blank" href=""><span class="u-icon-circle-5 u-social-instagram"><i class="ion ion-social-instagram"></i></span>
                </a>
                <a class="u-social-url" target="_blank" href="#"><span class="u-icon-circle-5 u-social-linkedin"><i class="ion ion-social-linkedin"></i></span>
                </a>
              </div>
            </div>
          </div>


            <div class="u-list-item-5">
            <div class="u-content-layout">
              <img alt="" class="u-image-5" src="images/shop-11.jpg" />
              <h3 class="u-heading-5">mary Brown</h3>
              <p class="u-text-medium">creative leader</p>
              <p class="u-text-description">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum</p>
              <div class="u-social-icons">
                <a class="u-social-url" target="_blank" href=""><span class="u-icon-circle-5 u-social-facebook"><i class="ion ion-social-facebook"></i></span>
                </a>
                <a class="u-social-url" target="_blank" href=""><span class="u-icon-circle-5 u-social-twitter"><i class="ion ion-social-twitter"></i></span>
                </a>
                <a class="u-social-url" target="_blank" href=""><span class="u-icon-circle-5 u-social-instagram"><i class="ion ion-social-instagram"></i></span>
                </a>
                <a class="u-social-url" target="_blank" href="#"><span class="u-icon-circle-5 u-social-linkedin"><i class="ion ion-social-linkedin"></i></span>
                </a>
              </div>
            </div>
          </div>
         

           <div class="u-list-item-5">
            <div class="u-content-layout">
              <img alt="" class="u-image-5" src="images/shop-11.jpg" />
              <h3 class="u-heading-5">mary Brown</h3>
              <p class="u-text-medium">creative leader</p>
              <p class="u-text-description">Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum</p>
              <div class="u-social-icons">
                 <a class="u-social-url" target="_blank" href=""><span class="u-icon-circle-5 u-social-facebook"><i class="ion ion-social-facebook"></i></span>
                </a>
                <a class="u-social-url" target="_blank" href=""><span class="u-icon-circle-5 u-social-twitter"><i class="ion ion-social-twitter"></i></span>
                </a>
                <a class="u-social-url" target="_blank" href=""><span class="u-icon-circle-5 u-social-instagram"><i class="ion ion-social-instagram"></i></span>
                </a>
                <a class="u-social-url" target="_blank" href="#"><span class="u-icon-circle-5 u-social-linkedin"><i class="ion ion-social-linkedin"></i></span>
                </a>
              </div>
            </div>
          </div>




        </div>
      </div>
      <p class="item-text-5 center">Image by <a href="https://freepik.com" class="text-link-max-5">Freepik</a>
      </p>
    </section>



</body>
</html>