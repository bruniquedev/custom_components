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


.h-section {
    background-image: url("images/top-view-person-writing-laptop-with-copy-space.jpg");
    background-position: 0% 50%;
        color: #111111;
            object-fit: cover;
    display: block;
    vertical-align: middle;
    background-size: cover;
    background-repeat: no-repeat;
}
.h-list{
  width: 95%;
  padding: 1px;
}
.h-repeater{
width: 600px;
    margin: 60px 0 0 auto;
    padding: 25px; 
}
.h-repeater-item{
        max-width: 47%;
    min-width: 47%;
    margin: 8px;

    color: #111111;
    background-color: #ffffff;
    border-radius: 20px !important;
}

.h-repeater-content {
    padding: 10px 20px;
}

.h-heading-text{
font-size: 3rem;
    font-weight: 700;
    margin: 0 auto;
    line-height: 1.1;
    padding: 0;
    color: #6bc581 !important;
    word-wrap: break-word;
    text-align: center;
}
.h-text{
    font-size: 0.875rem;
    margin: 20px 0 0;
    word-wrap: break-word;
    text-align: center;
    padding: 0;
}


.h-item-text {
   font-size: 18px;
   margin: 30px 60px 60px auto;
    text-align: right;
}
.h-text-link{
color: #b3b3b3;
display: inline;
border-width: 1px;
border-style: none none solid;
    padding: 0;
    border-color: #ffffff;
    background-color: transparent;
    text-decoration: none;
    color: #6bc581 !important;
}
.h-text-link:hover{
  border: none !important;  
}

@media screen and (max-width: 600px){
.h-list {
    width: 90%;
}
.h-repeater {
    width: 96%;
    padding: 0px;
}
.h-repeater-item {
    max-width: 100%;
    min-width: 100%;
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


  <section class="h-section">

        <div class="h-list">

          <div class="h-repeater flex flex-wrap flex-grow justify-center">

            <div class="h-repeater-item">
              <div class="h-repeater-content">
                <h2 class="h-heading-text">2017</h2>
                <p class="h-text">Sample text. Click to select the Text Element.</p>
              </div>
            </div>

                <div class="h-repeater-item">
              <div class="h-repeater-content">
                <h2 class="h-heading-text">2018</h2>
                <p class="h-text">Sample text. Click to select the Text Element.</p>
              </div>
            </div>

                <div class="h-repeater-item">
              <div class="h-repeater-content">
                <h2 class="h-heading-text">2019</h2>
                <p class="h-text">Sample text. Click to select the Text Element.</p>
              </div>
            </div>

                <div class="h-repeater-item">
              <div class="h-repeater-content">
                <h2 class="h-heading-text">2020</h2>
                <p class="h-text">Sample text. Click to select the Text Element.</p>
              </div>
            </div>

                <div class="h-repeater-item">
              <div class="h-repeater-content">
                <h2 class="h-heading-text">2021</h2>
                <p class="h-text">Sample text. Click to select the Text Element.</p>
              </div>
            </div>

                <div class="h-repeater-item">
              <div class="h-repeater-content">
                <h2 class="h-heading-text">2022</h2>
                <p class="h-text">Sample text. Click to select the Text Element.</p>
              </div>
            </div>

           

        </div>
        <p class="h-item-text">Image from <a href="https://nicepage.site" class="h-text-link">Freepik</a>
        </p>
      </div>
    </section>




</body>
</html>