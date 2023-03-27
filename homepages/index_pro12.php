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

.section_pricing_2{
    margin-top: 50px;
}

.pricing-heading-2{
  font-weight: 700;
    font-size: 3rem;
    width: 647px;
    margin: 79px auto 0;
    line-height: 1.1;
    padding: 0;
    word-wrap: break-word;  
}
.pricing-text-2{
font-size: 1.125rem;
    width: 504px;
    margin: 20px auto 0;
    padding: 0;
    word-wrap: break-word;
}

.container-pricing-2{
 width: 100%;
     margin: 24px 0 0 auto;
}
.row-pricing-2{

}

.pricing-col-2{
     max-width: 23%;
    min-width: 23%; 
    margin: 6px;
}

.u-pricing-item-1 {
    background-image: none;
    box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.1);
    border-radius: 30px !important;
    border-width: 2px;
        border-style: solid;
        text-align: center;
}
.u-border-blue{
    border-color: #1659d7;
    stroke: #1659d7;
}
.u-border-black{
    border-color: #000000;
    stroke: #000000;
}
.bg-color-gray{
    background-color: #e5e5e5;
}
.bg-color-blue{
background-color: #1659d7 !important;
    }
.bg-color-black{
background-color: #111111 !important;
    }    
.text-black{
color: #111111;
}
.text-white{
    color: #ffffff;
}
.text-blue{
    color: #1659d7;
}
.u-pricing-item-content {
    padding: 0 0 30px;
}

.u-group-1 {
    min-height: 232px;
    margin-top: 0;
    margin-bottom: 0;
    height: auto;
    border-top-right-radius: 20px !important;
    border-top-left-radius: 20px !important;
    text-align: center;
   width: 100% !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
}

.group-content-1{
     padding: 30px;   
}

.heading-txt-3{
    margin-left: 0;
    margin-right: 0;
    font-weight: 700;
    margin: 0 11px;
    padding: 0;
    word-wrap: break-word;
    font-size: 1.875rem;
    line-height: 1.2;
}
.heading-txt-4{
    margin-left: 0;
    margin-right: 0;
    font-weight: 700;
    font-size: 3.75rem;
    margin: 32px 11px 0;
        line-height: 1.2;
        padding: 0;
        word-wrap: break-word;
}
.heading-txt-6{
    margin-left: 0;
    margin-right: 0;
    font-weight: 700;
    margin: 0 11px;
    font-size: 1.125rem;
    line-height: 1.2;
    padding: 0;
    word-wrap: break-word;
}

.u-group-2 {
    line-height: 2;
    letter-spacing: 1px;
    text-align: center;
    width: 103px;
    margin: 20px auto 0;
    list-style-type: none;
    padding-left: 0;
    word-wrap: break-word;
}

.u-group-2 li {
    margin-left: 1.1em;
}

.u-group-2 .u-list-icon {
    display: inline-block;
    width: 1em;
    min-height: 1em;
    height: auto;
    text-align: center;
}

.u-group-2 .u-list-icon div i {
color: #1659d7;
    font-size: 15px;
    margin-top: -4px;
}

.u-group-2 .u-list-icon > :first-child {
    display: inline-block;
    margin: -0.8em;
    font-size: 0.8em;
    width: 1em;
    height: 1em;
    vertical-align: middle;
    line-height: 0.9;
}

.u-btn {
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

.u-pricing-btn{
    font-size: 1.125rem;
    font-weight: 700;
    text-transform: none;
    letter-spacing: normal;
    margin: 32px auto 0;
    padding: 19px 41px 20px 40px;
    border-color: transparent !important;
    background-color: #1659d7;
    color: #e6e6e6;
        border-radius: 8px !important;
        border-style: solid;
            border-width: 0 !important;
}
.u-pricing-btn:hover{
 background-color: #1450c2;
    color: #e6e6e6;   
}

@media screen and (max-width: 600px){

.pricing-col-2 {
    max-width: 90%;
    min-width: 90%;
}

.pricing-heading-2 {
    font-size: 1.9rem;
    width: 100%;
    }

    .pricing-text-2 {
    font-size: 1.1rem;
    width: 100%;
}

}
@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

.pricing-col-2 {
    max-width: 33%;
    min-width: 33%;
}

}

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  
<section class="section_pricing_2">


<h2 class="pricing-heading-2 center"> Small Pricing Plan For Your Creative Business</h2>

<p class="pricing-text-2 center"> Start using static.app as a hosting for your websites today to get the best features to buck ratio on the market.</p>

<div class="container-pricing-2">
<div class="row-pricing-2 flex flex-wrap flex-grow justify-center">

  <!--column 1-->
 <div class="pricing-col-2">
 
<div class="u-pricing-item-1 u-border-blue bg-color-gray text-black">
              <div class="u-pricing-item-content">

                <div class="u-group-1">
                  <div class="group-content-1">
                    <h3 class="heading-txt-3">For Team</h3>
                    <h4 class="heading-txt-4">$0</h4>
                    <h6 class="heading-txt-6"> Per Month</h6>
                  </div>
                </div>
                <ul class="u-group-2">
                  <li>
                    <div class="u-list-icon text-blue">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>15 Users
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 2 
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 3 
                  </li>
                  <li>
                    <div class="u-list-icon">
                        <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 4
                  </li>
                </ul>
                <a href="https://nicepage.review" class="u-btn u-pricing-btn">Upload Free&nbsp; </a>
              </div>
            </div>




 </div>
<!--/column 1-->


<!--column 1-->
 <div class="pricing-col-2">

<div class="u-pricing-item-1 u-border-black text-white bg-color-black">
              <div class="u-pricing-item-content">
                <div class="u-group-1 bg-color-blue">
                  <div class="group-content-1">
                    <h3 class="heading-txt-3">Personal</h3>
                    <h4 class="heading-txt-4">$29</h4>
                    <h6 class="heading-txt-6"> Per Month</h6>
                  </div>
                </div>
                <ul class="u-group-2">
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>15 Users
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 2 
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 3 
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 4
                  </li>
                </ul>
                <a href="https://nicepage.review" class="u-btn u-pricing-btn">Proceed Annually&nbsp; </a>
              </div>
            </div>
 

 </div>
<!--/column 1-->


<!--column 1-->
 <div class="pricing-col-2">

<div class="u-pricing-item-1 u-border-blue bg-color-gray text-black">
              <div class="u-pricing-item-content">
                <div class="u-group-1">
                  <div class="group-content-1">
                    <h3 class="heading-txt-3">Business</h3>
                    <h4 class="heading-txt-4">$59</h4>
                    <h6 class="heading-txt-6"> Per Month</h6>
                  </div>
                </div>
                <ul class="u-group-2">
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>15 Users
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 2 
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 3 
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 4
                  </li>
                </ul>
                <a href="https://nicepage.review" class="u-btn u-pricing-btn">Proceed Annually&nbsp; </a>
              </div>
            </div>


 </div>
<!--/column 1-->


<!--column 1-->
 <div class="pricing-col-2">

<div class="u-pricing-item-1 u-border-black text-white bg-color-black">
              <div class="u-pricing-item-content">
                <div class="u-group-1 bg-color-blue">
                  <div class="group-content-1">
                    <h3 class="heading-txt-3">Reseller</h3>
                    <h4 class="heading-txt-4">$89</h4>
                    <h6 class="heading-txt-6"> Per year</h6>
                  </div>
                </div>
                <ul class="u-group-2">
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>15 Users
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 2 
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 3 
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div><i class="ion ion-android-star"></i></div>
                    </div>Feature 4
                  </li>
                </ul>
                <a href="https://nicepage.review" class="u-btn u-pricing-btn">Proceed Annually&nbsp; </a>
              </div>
            </div>
 

 </div>
<!--/column 1-->


</div>
</div>

</section>



</body>
</html>