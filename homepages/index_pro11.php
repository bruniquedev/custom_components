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

.section_pricing_1{
    margin-top: 50px;
}
.u-heading-6 {
    font-size: 2.1rem;
    margin: 0;
    line-height: 1.1;
    font-weight: 600;
    padding: 0;
    word-wrap: break-word;
}

.container-pricing-1{
 width: 100%;
     margin: 0 0 0 auto;
}
.row-pricing-1{

}

.pricing-col-1{
    max-width: 23%;
    min-width: 23%; 
    margin: 6px;
}




.panel-pricing {
   
  -moz-transition: all .3s ease;
  -o-transition: all .3s ease;
  -webkit-transition: all .3s ease;

}
.panel-pricing:hover {
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
  margin-top: -8px;
}
.panel-pricing .panel_heading {
  padding: 5px 5px;
   text-align: center;
}

.pricing-heading-ion{
  padding: 5px;
  font-size: 35px;
  width: 35px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  color:#ffff;
}

.panel_heading h3{
    /*padding:15px 0px;*/
    font-weight: bold;
    text-transform: uppercase;
    color:#ffffff;
}


.panel-pricing .panel_heading .select-btn--white, 
.panel-pricing .panel_heading .select-btn--white:link, 
.panel-pricing .panel_heading .select-btn--white:visited {
    text-transform: uppercase;
    text-decoration: none;
    padding: 0rem 2rem;
    display: inline-block;
    border-radius: 0.5rem;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    font-size: 1.1rem;
    border: none;
    cursor: pointer;
    color: #000;
}

.select-btn--white {
    background-color: #fff;
    color: #000;
    font-weight: 600;
}


.list_group{
    text-decoration: none;
    list-style-type: none;
        padding-left: 0px;
    margin-bottom: 0px;
}


.panel-pricing .panel_heading .pricing-ion{
  margin-top: 1px;
  font-size: 58px;
}
.panel-pricing .list_group li {

    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #ddd;

  color: #202020;
  border-bottom: 1px solid rgba(250, 250, 250, 0.5);
    font-weight: bold;
  padding: 10px 15px;

}
.panel-pricing .list_group li:last-child {
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0px;
}
.panel-pricing .list_group li:first-child {
    font-weight: bold;
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
}
.panel-pricing .panel_body {
  background-color: #f0f0f0;
  font-size: 25px;
  color: #777777;
  padding: 0px;
  margin: 0px;
}

.panel-pricing .panel_body  p{
    padding: 5px;
    margin: 0;
    text-align: center;
}
.panel-pricing .panel_body  p strong{
    font-weight:600;
    color: #000;
    font-size: 18px;

}

.panel-pricing .panel_body  p strong span{
    color: #3b6926;
}
.panel-pricing{
    border:1px solid #3b6926;
}
.panel-pricing .panel_heading{
    background: #3b6926;
}

.panel_footer {
    padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.panel_footer .btn_block{
    border-radius:0px;
     display: block;
}
.panel_footer a{
    background: #3b6926;
    border: 3px solid #3b6926;
    color:#fff;
    padding: 14px 16px;
    font-size: 18px;
    text-align: center;
}
.panel_footer a:hover{
    background:none;
    color:#202020;
    border: 3px solid #e75b1e;
}

@media screen and (max-width: 600px){

.pricing-col-1 {
    max-width: 90%;
    min-width: 90%;
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


  
<section class="section_pricing_1">

<h2 class="u-heading-6 center">
    <span style="font-weight: 700;"></span>Pricing
                </h2>

<div class="container-pricing-1">
<div class="row-pricing-1 flex flex-wrap flex-grow justify-center">

  <!--column 1-->
 <div class="pricing-col-1">

<div class="panel panel-pricing">
<div class="panel_heading">
<div class="pric-icon">
<i class="pricing-heading-ion ion-android-globe"></i>
</div>
<h3>Go Plan</h3>
<a href="#" class="select-btn--white" data-producttype="Webhosting" data-plan="GoPlan" data-productname="GoPlan" data-price="50000" data-cartitemid="0">Select</a>
</div>
<div class="panel_body">
<p><strong>50,000 UGX / $12.5  -  <span>Yearly</span></strong></p>
</div>
<ul class="list_group text-left">
 <!--iterate through an array-->
 
<li><i class="pricing-ion ion-checkmark"></i> 1 GB Storage Space</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> 1 website</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> 1024 MBs Bandwidth</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Unlimited subdomains</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Friendly Control Panel</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Free click applications</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Free SSL</li>
</ul>
<div class="panel_footer">
<a href="#" class="btn_block" data-producttype="Webhosting" data-plan="GoPlan" data-productname="GoPlan" data-price="50000" data-cartitemid="0">Purchase Now!</a>
</div>
</div>  

 </div>
<!--/column 1-->


<!--column 1-->
 <div class="pricing-col-1">

<div class="panel panel-pricing">
<div class="panel_heading">
<div class="pric-icon">
<i class="pricing-heading-ion ion-android-globe"></i>
</div>
<h3>Go Plan</h3>
<a href="#" class="select-btn--white" data-producttype="Webhosting" data-plan="GoPlan" data-productname="GoPlan" data-price="50000" data-cartitemid="0">Select</a>
</div>
<div class="panel_body">
<p><strong>50,000 UGX / $12.5  -  <span>Yearly</span></strong></p>
</div>
<ul class="list_group">
 <!--iterate through an array-->
 
<li ><i class="pricing-ion ion-checkmark"></i> 1 GB Storage Space</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> 1 website</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> 1024 MBs Bandwidth</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Unlimited subdomains</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Friendly Control Panel</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Free click applications</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Free SSL</li>
</ul>
<div class="panel_footer">
<a href="#" class="btn btn-lg btn_block hvr-underline-from-center purchase" data-producttype="Webhosting" data-plan="GoPlan" data-productname="GoPlan" data-price="50000" data-cartitemid="0">Purchase Now!</a>
</div>
</div>  

 </div>
<!--/column 1-->


<!--column 1-->
 <div class="pricing-col-1">

<div class="panel panel-pricing">
<div class="panel_heading">
<div class="pric-icon">
<i class="pricing-heading-ion ion-android-globe"></i>
</div>
<h3>Go Plan</h3>
<a href="#" class="select-btn--white" data-producttype="Webhosting" data-plan="GoPlan" data-productname="GoPlan" data-price="50000" data-cartitemid="0">Select</a>
</div>
<div class="panel_body text-center">
<p><strong>50,000 UGX / $12.5  -  <span>Yearly</span></strong></p>
</div>
<ul class="list_group text-center">
 <!--iterate through an array-->
 
<li ><i class="pricing-ion ion-checkmark"></i> 1 GB Storage Space</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> 1 website</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> 1024 MBs Bandwidth</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Unlimited subdomains</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Friendly Control Panel</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Free click applications</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Free SSL</li>
</ul>
<div class="panel_footer">
<a href="#" class="btn_block" data-producttype="Webhosting" data-plan="GoPlan" data-productname="GoPlan" data-price="50000" data-cartitemid="0">Purchase Now!</a>
</div>
</div>  

 </div>
<!--/column 1-->

<!--column 1-->
 <div class="pricing-col-1">

<div class="panel panel-pricing">
<div class="panel_heading">
<div class="pric-icon">
<i class="pricing-heading-ion ion-android-globe"></i>
</div>
<h3>Go Plan</h3>
<a href="#" class="select-btn--white" data-producttype="Webhosting" data-plan="GoPlan" data-productname="GoPlan" data-price="50000" data-cartitemid="0">Select</a>
</div>
<div class="panel_body text-center">
<p><strong>50,000 UGX / $12.5  -  <span>Yearly</span></strong></p>
</div>
<ul class="list_group text-center">
 <!--iterate through an array-->
 
<li ><i class="pricing-ion ion-checkmark"></i> 1 GB Storage Space</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> 1 website</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> 1024 MBs Bandwidth</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Unlimited subdomains</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Friendly Control Panel</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Free click applications</li>
 
<li ><i class="pricing-ion ion-checkmark"></i> Free SSL</li>
</ul>
<div class="panel_footer">
<a href="#" class="btn_block" data-producttype="Webhosting" data-plan="GoPlan" data-productname="GoPlan" data-price="50000" data-cartitemid="0">Purchase Now!</a>
</div>
</div>  

 </div>
<!--/column 1-->


</div>
</div>

</section>



</body>
</html>