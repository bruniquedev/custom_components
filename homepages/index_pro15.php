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
      font-size: 1rem;
    line-height: 1.6;
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
    z-index: 1;
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

.w-section{
    color: #fff;
    padding: 30px 0 50px;
    background: #15263c;
    background: linear-gradient(to bottom, #15263c 60%, #15263c 100%);

}

.w-section:before{
  content: "";
    background: #fff url(images/main-banner.jpg) no-repeat;
    position: absolute;
    width: 100%;
    height: 100%;
    transform: skewY(0);
    transform-origin: 0;
    left: 0;
    top: -10px;
    right: 0;
    background-size: cover;
    opacity: .2;  
}

.w-container-wrap{
    width: 90%;
    margin: 60px auto 0px auto;
        position: relative;
}
.w-container-row{

}
.w-col-width-1{
    width: 62%;
}
.w-col-width-2{
width: 38%;
}
.w-item-col{

}
.w-content-1{

}
.w-logo_img {
    height: 50px;
    width: 100%;
    border-radius: 8px;
    object-fit: contain;
}

.w-brand{
    margin-bottom: 30px;
}

.w-header-logo span{
font-size: 26px;
color: #fff;    
}
.w-header-logo small {
    color: #98dcff;
    display: block;
    position: relative;
    top: -14px;
}
.w-title{
    line-height: 1.3em;
    margin: 0;
    font-weight: 600;
    text-shadow: 0 3px 2px rgba(0, 0, 0, .2);
    font-size: 32px;
}
.w-text{
      margin: 30px 0 0;
    font-size: 24px;
    font-weight: 600;
    color: #98dcff;  
}

.w-container-box{
     margin: 60px 0 0;   
}

.Box-item {
    width: 50%;
    /*padding: 0 10px 0 60px;*/
    margin: 0 0 40px;
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
    } 
   
 .Box-icon i{
font-size: 40px;
    margin-top: -4px;
        color: #98dcff;
 }
 .Box-text{
    font-size: 18px;
    font-weight: 600;
        line-height: 1;
        margin: 0px 0px 0px 15px;
 }
  .Box-text span{
    display: block;
    color: #ccc;
    margin-top: 6px;
    font-size: 13px;
    line-height: 1.2;
    letter-spacing: .02em;
 }     

.w-content-2{
width: 370px;

padding: 20px;
    max-width: 370px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    background: #fff;
    box-shadow: 0 10px 40px -4px rgb(0 0 0 / 50%);
}

/***********form**************/


.wrapper_input_element {
     border-style: none;
    position: relative;
    margin-bottom: 17px;
    width: 100%;
}
.wrapper_input_element label {
    position: absolute;
    background-color: #fff;
    top: -11px;
    left: 13px;
    padding: 0px 5px;
        color: #636161;
    font-size: 14px;
}
.input_box{
      background: #fff;
  width: 100%;
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
}

.input-width{
    width: 344px;
}

.agree-label{
 font-size: 15px;
    color: #162234;  
    margin-bottom:15px 
}

.agree-label input[type=checkbox]{
width: 16px;
    height: 16px;    
}

.button-wrapper{
margin-top: 15px;
}

.btn-register {
  background-color: #4965f9;
      border: 1px solid #4965f9;
  color: #fff;
  padding: 13px 20px;
  margin: 10px 0;
  width: 100%;
  border-radius: 4px;
  cursor: pointer;
  font-size: 17px;
}

.btn-register:hover {
  background-color: #6a7fed;
}
/***********form**************/





.w-float-button{
     position: fixed;
    bottom: 10px;
    left: 20px;
    width: 66px;
    height: 70px;
    visibility: visible;
    z-index: 100;
    background: 0 0;
    border: 0;
    transition: transform .2s ease-in-out;
    backface-visibility: hidden;
    opacity: 1;
    transform: translateY(0%);
    -webkit-filter: drop-shadow(2px 2px 1px rgba(0, 0, 0, 0.5));
    filter: drop-shadow(2px 2px 1px rgba(0, 0, 0, 0.5));   
}

.w-float-button a img {
    width: 55px;
    height: auto;
    position: relative;
    z-index: 1;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.w-float-button a .whatsappChatsText {
    background: #ffbe4a;
    width: 125px;
    height: 37px;
    display: block;
    position: absolute;
    color: #000;
    left: 30px;
    padding: 5px 10px;
    text-align: center;
    font-size: 11px;
    line-height: 1.1;
    font-weight: 600;
    bottom: 20px;
    border-radius: 0 6px 6px 0;
}

.w-float-button a .whatsappChatsText strong {
    font-size: 17px;
    line-height: 1;
    letter-spacing: 0.03em;
}

/*w-float-button
WhatsAppchat
whatsappChatsText*/


@media screen and (max-width: 600px){
.w-col-width-1 {
    width: 100%;
}
.w-col-width-2 {
    width: 100%;
}
.input-width {
    width: 88%;
}
.w-content-2 {
width: 85%;
    max-width: 85%;
}

}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {
.w-col-width-1 {
    width: 100%;
}
.w-col-width-2 {
    width: 100%;
}
}



</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  
<section class="w-section">

<div class="w-container-wrap">
<div class="w-container-row flex flex-grow flex-wrap justify-center">

 <!--column1-->   
<div class="w-item-col w-col-width-1">
<div class="w-content-1">

<div class="w-brand">
<a class="bar-brand flex flex-grow flex-wrap" href="https://www.bruniquedevelopers.com/">
 <div class="w-img-wrapper">   
<img src="images/logo.png" class="w-logo_img" alt="Online Hotel Management System" />
</div>
<span class="w-header-logo">
    <span>Hotel assistant</span>
    <small>Online Hotel Management System</small>
</span>
</a>
</div>
<h1 class="w-title">Leading hotel software in Uganda</h1>
<p class="w-text">Easy to Adapt | Comprehensive | Fully Integrated</p>

<!--items-->
<div class="w-container-box flex flex-grow flex-wrap justify-center">

<div class="Box-item">
 <div class="Box-icon"><i class="ion ion-android-home"></i></div>   
<h4 class="Box-text">Hotel Software <span>Automate your hotel operations</span></h4>
</div>

<div class="Box-item">
 <div class="Box-icon"><i class="ion ion-calendar"></i></div>     
<h4 class="Box-text">Booking Engine <span>Direct bookings from your hotel website</span></h4>
</div>

<div class="Box-item">
 <div class="Box-icon"><i class="ion ion-share"></i></div>     
<h4 class="Box-text">Channel Manager <span>One-stop inventory distribution system</span></h4>
</div>

<div class="Box-item">
 <div class="Box-icon"><i class="ion ion-ios-calculator-outline"></i></div>     
<h4 class="Box-text">Revenue Management <span>Optimize revenue by dynamic pricing approach</span></h4>
</div>

<div class="Box-item">
 <div class="Box-icon"><i class="ion ion-ios-monitor-outline"></i></div>     
<h4 class="Box-text">Restaurant POS <span>Manage your F&amp;B business operations</span></h4>
</div>

</div>
<!--/items-->


 </div>
 </div>
  <!--/column1--> 

     <!--column2-->   
<div class="w-item-col w-col-width-2">
<div class="w-content-2">


<!--form-->

<form>
    
<div class="wrapper_input_element">
  <label for="name" id="label">Your Name</label>   
  <input type="text" required="required" class="form-input input_box input-width" placeholder="Enter your name" name="name">
  <span class="text-danger"></span>
  </div>

  <div class="wrapper_input_element">
  <label for="name" id="label">Property Name / Company Name</label>   
  <input type="text" required="required" class="form-input input_box input-width" placeholder="Enter your company or Property name" name="company">
  <span class="text-danger"></span>
  </div>

   <div class="wrapper_input_element">
  <label for="name" id="label">Email</label>   
  <input type="text" required="required" class="form-input input_box input-width" placeholder="Enter your email" name="email">
  <span class="text-danger"></span>
  </div>

    <div class="wrapper_input_element">
  <label for="name" id="label">Phone</label>   
  <input type="text" required="required" class="form-input input_box input-width" placeholder="Enter your phone" name="phone">
  <span class="text-danger"></span>
  </div>

    <div class="wrapper_input_element">
  <label for="name" id="label">Country / Region</label>   
  <select required="required" class="form-input input_box" name="country">
    <option>Select Country</option>
    <option>Uganda</option>
    <option>Kenya</option>
    <option>Tanzania</option>
    <option>Rwanda</option>
    <option>Burundi</option>
    <option>Congo</option>
  </select>
  <span class="text-danger"></span>
  </div>

   <label class="agree-label">
      <input type="checkbox" checked="checked" name="agreement"> By clicking "Get Started" button you agree to our <a href="terms#">Terms</a> and that you have read and understood our <a href="privacy#">Privacy Policy.*</a>
    </label>

    <div class="button-wrapper">
        <button type="submit" class="btn-register">Get started</button>
    </div>

</form>

<!--/form-->

 </div>
 </div>
  <!--/column2--> 
  
  </div>
  </div>  
</section>


        <div class="w-float-button">
        <a href="https://api.whatsapp.com/send?phone=256701310265" target="_blank" rel="nofollow" class="pushItDown WhatsAppchat">
            <img loading="lazy" src="images/whatsAppIcon.png" width="66" height="66">
            <span class="whatsappChatsText">Chat with us on <strong>WhatsApp</strong></span>
        </a>
        </div>

</body>
</html>