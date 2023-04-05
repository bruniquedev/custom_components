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

.section_mb{
  color: #111111;
    background-color: #ffffff;
    text-align: center;  
}

.u-heading-mb{
    font-weight: 700;
    font-size: 3rem;
    width: 877px;
    margin: 60px auto 0;
    line-height: 1.1;
    padding: 0;
    word-wrap: break-word;
}

.u-list-mb{
 margin: 98px 0 60px;
     width: 100% !important;
    margin-left: 0 !important;
    margin-right: 0 !important;   
}
.u-repeater-item-mb{
    width: 20%;
        margin-left: 10px;
color: #111111;
    background-color: #ffc63d;
}
.item-content-mb{
  padding: 0 20px 30px;  
}

.item-content-mb .u-icon-rectangle{
   height: 40px;
    width: 40px;
    background-image: none;
    box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.2);
    margin: -36px auto 0;
    padding: 16px;
    border-color: #ffc63d;
    background-color: #ffffff;
    border-width: 7px;
    border-style: solid;
        display: block;
    line-height: 0;

}

.item-content-mb .u-icon-rectangle i{
font-size: 45px;
color: #ffc63d;
}

.item-content-mb .u-heading-mb-5{
    margin: 30px 0 0;
    padding: 0px;
    word-wrap: break-word;
        font-size: 1.25rem;
    line-height: 1.2;
        font-weight: 700;
}

.item-content-mb .u-text-mb{
    font-style: normal;
    margin: 29px 0 0;
    word-wrap: break-word;
    padding:0px;
    color: #111111;
}

.item-content-mb a{
    color:#111111;
}
.u-icon-mb{
    width: 34px;
    height: 34px;
    margin: 30px auto 0;
    padding: 0;
}


.u-icon-mb i{
 font-size: 30px;   
}


@media screen and (max-width: 600px){
.u-heading-mb {
width: 100%;
}
.u-repeater-item-mb {
    width: 100%;
    margin: 25px !important;
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


  <section class="section_mb">
      <div class="u-sheet-mb">

        <h2 class="u-heading-mb"> Join now for just $10/month</h2>

        <div class="u-list-mb">
          <div class="u-repeater-mb flex flex-wrap flex-grow justify-center">


            <div class="u-repeater-item-mb">
              <div class="item-content-mb">
                <span class="u-icon-rectangle"><i class="ion ion-refresh"></i></span>
                <h5 class="u-heading-mb-5"> Unlimited Fitness</h5>
                <p class="u-text-mb">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="#"><span class="u-icon-mb"><i class="ion ion-arrow-right-a"></i></span></a>
              </div>
            </div>

                <div class="u-repeater-item-mb">
              <div class="item-content-mb">
                <span class="u-icon-rectangle"><i class="ion ion-refresh"></i></span>
                <h5 class="u-heading-mb-5"> Personal Training</h5>
                <p class="u-text-mb">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="#"><span class="u-icon-mb"><i class="ion ion-arrow-right-a"></i></span></a>
              </div>
            </div>

                <div class="u-repeater-item-mb">
              <div class="item-content-mb">
                <span class="u-icon-rectangle"><i class="ion ion-refresh"></i></span>
                <h5 class="u-heading-mb-5">Massage Therapy</h5>
                <p class="u-text-mb">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="#"><span class="u-icon-mb"><i class="ion ion-arrow-right-a"></i></span></a>
              </div>
            </div>

                <div class="u-repeater-item-mb">
              <div class="item-content-mb">
                <span class="u-icon-rectangle"><i class="ion ion-refresh"></i></span>
                <h5 class="u-heading-mb-5">Quick Workouts</h5>
                <p class="u-text-mb">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="#"><span class="u-icon-mb"><i class="ion ion-arrow-right-a"></i></span></a>
              </div>
            </div>



          </div>
        </div>

      </div>
    </section>




</body>
</html>