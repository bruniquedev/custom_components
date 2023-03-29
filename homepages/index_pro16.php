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
        font-size: 14px;
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


/**********banner section***********/
.banner-section {
    position: relative;
}
.banner-content{
    display: block;
        position: relative;
        width: 100%;
        z-index: 1;
}

.banner-item{
      padding: 150px 0;
      position: relative;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    text-align: center;  
}

.banner-item:before {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: #000000;
    opacity: .70;
    content: "";
}

.auto-container {
    position: static;
    max-width: 1200px;
    padding: 0px 15px;
    margin: 0 auto;
}
.b-content-box {
    position: relative;
}

.b-content-box .b-title {
    display: block;
    font-size: 28px;
    color: #faaC1D;
    font-weight: 500;
    margin-bottom: 25px;
    opacity: 1;
    
}

.b-content-box h2 {
    font-size: 50px;
    line-height: 1.2em;
    margin-bottom: 20px;
    display: block;
    color: #ffffff;
    font-weight: 700;
    opacity: 1;

}

.b-content-box .info-list {
    position: relative;
    margin-bottom: 45px;
    opacity: 1;
}
.b-content-box .info-list li {
    position: relative;
    display: inline-block;
    font-size: 18px;
    line-height: 26px;
    color: #ffffff;
    font-weight: 400;
    margin: 0 10px;
    text-transform: uppercase;
}

.b-content-box .info-list li .icon {
    color: #faaC1D;
    margin-right: 10px;
    float: left;
    font-size: 18px;
    line-height: 26px;
}

ul, li {
    list-style: none;
    padding: 0px;
    margin: 0px;
}

.b-content-box .btn-box {
    opacity: 1;
}

.btn-style-two {
    position: relative;
    padding: 10px 30px;
    font-size: 16px;
    line-height: 30px;
    color: #ffffff;
    font-weight: 400;
    text-align: center;
    background-color: #faaC1D;
    overflow: hidden;
    border-radius: 10px;
}

.theme-btn {
    display: inline-block;
    transition: all 300ms ease;
}

.btn-style-two .btn-title {
    position: relative;
}
.btn-style-two:hover {
    color: #faaC1D;
    background-color: #fff;
}
/**********end banner section***********/




/********** comming section***********/
.coming-soon-section {
    position: relative;
    z-index: 2;
}

.coming-soon-section .outer-box {
    margin: 0 0px;
    padding: 30px;
    position: relative;
    display: block;
    text-align: center;
    background: linear-gradient(to left, rgba(247,0,104) 0%,rgba(68,16,102,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#F70068', endColorstr='#441066',GradientType=1 );
    box-shadow: 0 0 30px rgba(0,0,0,0.30);
}

.counter-column{
       width: 50px;
    margin-left: 5px;
    color: white;
    font-size: 1.1rem;
}

.counter-column .count{
    display: block;
    font-size: 2.5rem;
}

/**********end coming soon section***********/


/********** About section***********/
.about-section {
    position: relative;
    padding: 120px 0 70px;
}

.auto-row {
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
    margin-right: -15px;
    margin-left: -15px;

}

.about-section .content-column {
max-width: 47%;
      padding-right: 15px;
    padding-left: 15px;
}

.about-section .content-column .inner-column {
    padding-right: 0;
}
.about-section .content-column .sec-title {
    margin-bottom: 20px;
}
.sec-title .title {
    display: block;
       font-size: 2.1rem;
    line-height: 1em;
    font-weight: 600;
   
    background: linear-gradient(to left, rgba(247,0,104) 0%,rgba(68,16,102,1) 25%,rgba(247,0,104,1) 75%,rgba(68,16,102,1) 100%);
   
    color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-transform: uppercase;
    letter-spacing: 5px;
    margin-bottom: 0px;
}

.about-section .content-column .sec-title h2 {
    font-size: 40px;
}
.sec-title h2 {
    position: relative;
    display: inline-block;
    line-height: 1.2em;
    color: #1e1f36;
    font-weight: 700;
        margin: 11px 0px 0px 0px;
}
.about-section .content-column .sec-title .text {
    margin-top: 20px;
}
.sec-title .text {
    position: relative;
    font-size: 16px;
    line-height: 28px;
    color: #888888;
    font-weight: 400;
}
.about-section .content-column .list-style-one {
    margin-bottom: 30px;
    list-style-type: none;
}
.list-style-one li {
    position: relative;
    font-size: 16px;
    line-height: 26px;
    color: #444444;
    font-weight: 400;
    padding-left: 35px;
    margin-bottom: 10px;
}

.list-style-one li:before {
    position: absolute;
    left: 0;
    top: 0;
    font-size: 16px;
    content: "\f375";
    font-family: 'Ionicons';
    color: #e1137b;
}

.about-section .content-column .btn-box a {
    padding: 15px 30px;
    line-height: 20px;
    font-weight: 600;
    font-size: 15px;
}
.btn-style-three {
    position: relative;
    padding: 10px 30px;
    font-size: 16px;
    line-height: 30px;
    color: #ffffff;
    font-weight: 400;
    text-align: center;
    background-color: #1c94d2;
    overflow: hidden;
    border-radius: 10px;
}

.btn-style-three:hover {
    color: #fff;
    background-color: #e1137b;
}

.about-section .content-column .image-box {
    padding-left: 0;
    text-align: center;
}

.about-section .content-column .image-container {
    max-width: 500px;
    display: inline-block;
     margin-bottom: 0;
         margin: 0 0 1rem;
}
.about-section .content-column .image-box img {
    position: relative;
    z-index: 1;
    border-radius: 50%;
    border: 15px solid #ffffff;
    box-shadow: 0 0 20px rgba(0,0,0,0.10);
    display: inline-block;
    max-width: 100%;
    height: auto;
    vertical-align: middle;
}

/**********About section***********/


@media screen and (max-width: 600px){

    .counter-column {
    width: 40px;
    margin-left: 5px;
}
.counter-column .count {
    font-size: 1.9rem;
}

.about-section .content-column {
    max-width: 100%;
    }

    .content-column .image-container {
    max-width: 100%;
margin: 0px 25px 0px 0px !important;

}

}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

.about-section .content-column {
    max-width: 45%;
}
}

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  <section class="banner-section">

        <div class="banner-content">

            <!-- Slide Item -->

            <div class="banner-item" style="background-image: url(images/event-banner-1.jpg);">

                <div class="auto-container">

                    <div class="b-content-box">

                        <span class="b-title">January 20, 2023</span>

                        <h2> World Digital <br>Conference 2023</h2>

                        <ul class="info-list">

                            <li><span class="icon ion ion-android-star"></span> 5000 Seats</li>

                            <li><span class="icon ion ion-android-star"></span> 12 SPEAKERS</li>

                            <li><span class="icon ion ion-android-star"></span> Palo, California</li>

                        </ul>

                        <div class="btn-box"><a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a></div>

                    </div>  

                </div>

            </div>

        </div>

    </section>



 <!-- Coming Soon -->

    <section class="coming-soon-section">

            <div class="outer-box">

                <div class="time-counter">

                    <div class="time-countdown flex flex-wrap flex-grow justify-center">
                    <div class="counter-column">
                        <span class="count">276  </span>Days
                    </div>

                    <div class="counter-column"> : </div>

                    <div class="counter-column">
                        <span class="count">11  </span>Hours
                    </div> 

                    <div class="counter-column"> : </div> 

                    <div class="counter-column">
                        <span class="count">50 </span>Minutes
                    </div>

                    <div class="counter-column"> : </div> 

                    <div class="counter-column">
                        <span class="count">48</span>Second
                    </div>
                </div>

             </div>
                </div>

           

    </section>

    <!-- End Coming Soon -->



<!-- About Section -->

    <section class="about-section">


        <div class="auto-container">

            <div class="auto-row">


                <!-- Content Column 1-->
                <div class="content-column">

                    <div class="inner-column">

                        <div class="sec-title">

                            <span class="title">ABOUT EVENT</span>

                            <h2>Welcome to the World Digital Conference 2023</h2>

                            <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</div>

                        </div>

                        <ul class="list-style-one">

                            <li>Multiple Announcements during the event.</li>

                            <li>Logo & company details on the WordCamp.</li>

                            <li>Dedicated blog post thanking each Gold.</li>

                            <li>Acknowledgment and opening and closing.</li>

                        </ul>

                        <div class="btn-box"><a href="contact.html" class="theme-btn btn-style-three"><span class="btn-title">Register Now</span></a></div>

                    </div>

                </div>
                 <!-- /Content Column 1-->


                <!-- Content Column 2-->

                <div class="content-column">

                    <div class="image-box">

                        <figure class="image-container">
                            <img src="images/about-img-1.jpg" alt="">
                        </figure>

                    </div>

                </div>
                <!-- /Content Column 2-->


            </div>

        </div>

    </section>

    <!--End About Section -->




</body>
</html>