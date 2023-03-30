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

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.text-white {
    color: #fff !important;
}
.text-uppercase {
    text-transform: uppercase !important;
}

.auto-container {
    position: static;
    max-width: 1200px;
    margin: 0 auto;
}

.auto-row {
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
    margin-right: -15px;
    margin-left: -15px;

}

.section-details{
    margin-top: 50px;

    background: linear-gradient(rgba(43, 57, 64, .5), 
        rgba(43, 57, 64, .5)), 
    url(images/carousel-1.jpg) center center no-repeat;
    background-size: cover;
    background-color: #2B3940 !important;

    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
margin-bottom: 3rem !important;
width: 100%;
}

.section-details .page-header{
  position: relative;
    padding: 45px 0 45px 35px;
    border-left: 15px solid #00B074; 
    padding-bottom: 1.5rem !important;
    padding-top: 3rem !important;
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; 
}

.section-details .page-header::before{
  position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 100px;
    height: 15px;
    background: #00B074;  
}
.section-details .page-header::after {
    position: absolute;
    content: "";
    top: 100%;
    left: 0;
    width: 100px;
    height: 15px;
    background: #00B074;
    margin-top: -15px;
}

.heading-details{
    margin-top: 0px;
   margin-bottom: 1rem !important;
   font-weight: 800;
    line-height: 1.2;
    font-size: 4em; 
}

.section-container-content{
width: 80%;
    margin: 0px auto 0px auto;

}
.column-1,.column-2{
     
}
.column-1{
    width: 66%;
    padding: 10px;
}

.column-2{
     width: 30%;   
}

.details-profile{
 margin-bottom: 3rem !important;   
}
.profile-rounded-img{
 width: 80px;
height: 80px;
border-radius: 2px !important;
border: 1px solid #dee2e6 !important;
max-width: 100%;
vertical-align: middle;
object-fit: contain;
}

.profile-content{
  text-align: left !important;
padding-left: 1.5rem !important;  
}

.profile-content h3{
    margin-top: 0px;
    margin-bottom: 0px !important;
    font-size: 1.6rem;
        font-weight: 700;
    line-height: 1.2;
    color: #2B3940;
}

.profile-content .txt{
    margin-right: 1rem !important;
}

.profile-content .span-1,
.profile-content .span-2,
.profile-content .span-3{
font-size: 17px;
    margin-right: 1rem !important;
}

.profile-content span i{
      margin-right: 0.5rem !important;
          color: #00B074 !important; 
          font-size: 22px; 
}

.description-text{
      margin-bottom: 3rem !important;  
}

.description-text h4{
    margin-top: 0px;
  margin-bottom: 1rem !important;
  font-size: 1.6rem;
      font-weight: 700;
    line-height: 1.2;
    color: #2B3940;         
}

.description-text p {
    margin-top: 0;
    margin-bottom: 1rem;
    font-size: 1.1em;
}

.d-list-unstyled {
    padding-left: 0;
    list-style: none;
}
.d-list-unstyled li{
    font-size: 1.1em;
}
.d-list-unstyled li i{
color: #00B074 !important;
margin-right: 0.5rem !important;
    font-size: 15px;
}
.form-container-details h4{
    margin-top: 0px;
     margin-bottom: 1.5rem !important;
     font-size: 1.6rem;   
     font-weight: 700;
    line-height: 1.2;
    color: #2B3940;
}

.form-container-details .row-1{
display: flex;
}

.form-container-details .row-1 .col-1{
    width: 50%;
}

.form-container-details .row-1 .col-100{
   width: 100%; 
}






.bg-light{
  background-color: #EFFDF5 !important;
  border-radius: 2px !important;
      padding: 3rem !important;
      margin-bottom: 1.5rem !important;  
}

.bg-light h4{
        margin-top: 0;
    margin-bottom: 1.5rem !important;
    font-size: 1.275rem;
        font-weight: 700;
    line-height: 1.2;
    color: #2B3940;
    }
 .bg-light p {
    margin-top: 0;
    margin-bottom: 1rem;
}  

 .bg-light p i{
color: #00B074 !important;
    margin-right: 0.5rem !important;
}



input[type="text"],
 input[type="email"],
 input[type="file"],
 textarea,
select{
    display: block;
    height: 30px;
    width: 100%;
    font-size: 14px;
    color: #878787;
    line-height: 28px;
    font-weight: 400;
    padding: 10px 20px;
    background-color: #ffffff;
    border: 1px solid #999999;
        transition: all 300ms ease;
        outline-width: 0 !important;
        outline: none !important;
}
.form-container-details textarea {
    height: 190px;
    resize: none;
}  


.btn-1 {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    color: #666565;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    border-radius: 2px;
    transition: .5s;
    transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
}


 .btn-light-1{
    color: #000;
    background-color: #EFFDF5;
    border-color: #EFFDF5;
        margin-right: 1rem !important;
        width: 38px;
    height: 38px;
        padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 2px;
}

.btn-1.btn-primary-1, .btn-1.btn-secondary-1 {
    color: #FFFFFF;

}

 .btn-primary-1{
  font-weight: 600;
    transition: .5s;
        background-color: #00B074;
    border-color: #00B074;   
}

.btn-primary-1:hover {
    background-color: #26bc89;
    border-color: #1ab882;
    opacity: 0.8;
}



@media screen and (max-width: 600px){

.section-container-content {
    width: 95%;
}
.column-1 {
    width: 100%;
}
.column-2 {
    width: 100%;
}
.bg-light{
      padding: 1rem !important;
  }


}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

.bg-light{
      padding: 1rem !important;
  }
  .section-container-content {
    width: 90%;
}

}





</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>

<section class="section-details">
<div class="auto-container page-header">
<h1 class="heading-details text-white">Job Detail</h1>
</div>
</section>



<div class="section-container">
<div class="section-container-content flex flex-wrap flex-wrap">

<!--column 1-->
<div class="column-1">

<div class="details-profile flex flex-wrap flex-grow items-center">
<img class="profile-rounded-img" src="images/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
<div class="profile-content">
<h3>Marketing Manager</h3>
<div class="txt text-truncate">Brunique developers ltd</div>
<span class="text-truncate span-1"><i class="ion ion-location"></i>New York, USA</span>
<span class="text-truncate span-2"><i class="ion ion-clock"></i>Full Time</span>
<span class="text-truncate span-3"><i class="ion ion-cash"></i>$123 - $456</span>
</div>
</div>


<div class="description-text">
<h4>Job description</h4>
<p>Dolor justo tempor duo ipsum accusam rebum gubergren erat. Elitr stet dolor vero clita labore gubergren. Kasd sed ipsum elitr clita rebum ut sea diam tempor. Sadipscing nonumy vero labore invidunt dolor sed, eirmod dolore amet aliquyam consetetur lorem, amet elitr clita et sed consetetur dolore accusam. Vero kasd nonumy justo rebum stet. Ipsum amet sed lorem sea magna. Rebum vero dolores dolores elitr vero dolores magna, stet sea sadipscing stet et. Est voluptua et sanctus at sanctus erat vero sed sed, amet duo no diam clita rebum duo, accusam tempor takimata clita stet nonumy rebum est invidunt stet, dolor.</p>
<h4>Responsibility</h4>
<p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
<ul class="d-list-unstyled">
<li><i class="ion ion-chevron-right"></i>Dolor justo tempor duo ipsum accusam</li>
<li><i class="ion ion-chevron-right"></i>Elitr stet dolor vero clita labore gubergren</li>
<li><i class="ion ion-chevron-right"></i>Rebum vero dolores dolores elitr</li>
<li><i class="ion ion-chevron-right"></i>Est voluptua et sanctus at sanctus erat</li>
<li><i class="ion ion-chevron-right"></i>Diam diam stet erat no est est</li>
</ul>
<h4>Qualifications</h4>
<p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
<ul class="d-list-unstyled">
<li><i class="ion ion-chevron-right"></i>Dolor justo tempor duo ipsum accusam</li>
<li><i class="ion ion-chevron-right"></i>Elitr stet dolor vero clita labore gubergren</li>
<li><i class="ion ion-chevron-right"></i>Rebum vero dolores dolores elitr</li>
<li><i class="ion ion-chevron-right"></i>Est voluptua et sanctus at sanctus erat</li>
<li><i class="ion ion-chevron-right"></i>Diam diam stet erat no est est</li>
</ul>
</div>


<div class="form-container-details">
<h4>Apply For The Job</h4>
<form>

<div class="row-1">   
<div class="col-1">
<input type="text" class="input-control" placeholder="Your Name">
</div>
<div class="col-1">
<input type="email" class="input-control" placeholder="Your Email">
</div>
</div>

<div class="row-1 margin_top">
<div class="col-1">
<input type="text" class="input-control" placeholder="Portfolio Website">
</div>
<div class="col-1">
<input type="file" class="input-control">
</div>
</div>

<div class="row-1 margin_top">
<div class="col-100 inputgroup">
<textarea class="input-control" rows="5" placeholder="Coverletter"></textarea>
</div>
</div>

<div class="row-1 margin_top">
<div class="col-100 form-btn">
<button class="btn-1 btn-primary-1 w-full" type="submit">Apply Now</button>
</div>
</div>

</form>
</div>

</div>
<!--/column 1-->




<!--column 2-->
<div class="column-2">
<div class="bg-light">
<h4>Job Summery</h4>
<p><i class="ion ion-chevron-right"></i>Published On: 01 Jan, 2045</p>
<p><i class="ion ion-chevron-right"></i>Vacancy: 123 Position</p>
<p><i class="ion ion-chevron-right"></i>Job Nature: Full Time</p>
<p><i class="ion ion-chevron-right"></i>Salary: $123 - $456</p>
<p><i class="ion ion-chevron-right"></i>Location: New York, USA</p>
<p class="text-detail-d"><i class="ion ion-chevron-right"></i>Date Line: 01 Jan, 2045</p>
</div>
<div class="bg-light">
<h4>Company Detail</h4>
<p class="text-c">Ipsum dolor ipsum accusam stet et et diam dolores, sed rebum sadipscing elitr vero dolores. Lorem dolore elitr justo et no gubergren sadipscing, ipsum et takimata aliquyam et rebum est ipsum lorem diam. Et lorem magna eirmod est et et sanctus et, kasd clita labore.</p>
</div>
</div>
<!--/column 2-->

</div>
</div>






</body>
</html>