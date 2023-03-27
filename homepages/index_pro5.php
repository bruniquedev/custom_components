<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>Dashboard example</title>
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
    font-size: 16px;
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

.u-section-max {
    min-height: 844px;
    color: #ffffff;
    background-color: #000000;
    text-align: center;
    display: block;
}
.u-image-max {
    height: 553px;
    margin: 0 auto 0 0;
    width: 100% !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
        object-fit: cover;
    display: block;
    vertical-align: middle;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    border-style: none;
}

.u-list-max {
    width: 95%;
        margin: -101px auto 0;
}
.u-repeater-max{

}
.u-repeater-max-item{
width: 23%;
    margin: 8.5px;

    background-image: linear-gradient(#555c66, #292d33);
    box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);
    border-radius: 30px !important;
    text-align: left; 
}
.u-content-max {
    padding: 30px;
}

.u-shape-round-max {
        display: flex;
    justify-content: center;
    width: 79px;
    min-height: 80px;
    margin: 0 auto 0 0;
   background-color: transparent !important;
    opacity: 1;
    color: #ffffff;
     border-radius: 20px !important;
    border-style: solid;
    text-align: center;
}

.u-shape-round-content {
 
    border-radius: 20px !important;
        padding: 10px;
        opacity: 1;
        text-align: center;
        color: #ffffff;
        background-color: #858e99;
display: block;
}



h2.u-shape-text {
    text-transform: uppercase;
    font-size: 3rem;
    margin: 0 5px;
    line-height: 1.1;
    font-weight: 600;
    word-wrap: break-word;
        padding: 0;
}

.u-heading-max {
font-size: 1.5rem;
letter-spacing: 1px;
font-weight: 400;
margin: 20px 0 0;
padding: 0;
color: #ffffff !important;
word-wrap: break-word;
line-height: 1.2;
}

.u-text-max {
    font-style: italic;
   /* margin: 20px 0 0;*/
    color: #b3b3b3 !important;
    word-wrap: break-word;
    padding: 0;
}

a.btn-link-max{
 color: #e6e6e6 !important;
 text-decoration: none;
     border-left-width: 0;
    border-left-style: none;
        border-right-width: 0;
    border-right-style: none;
    border-top-width: 0;
    border-top-style: none;
    border-width: 1px;
    border-style: none none solid;   
}
a.btn-link-max:hover{
 border-color: #1659d7 !important;   
}
.link-default-max{
 background-image: none;
    text-transform: uppercase;
    font-size: 0.875rem;
    letter-spacing: 1px;
    margin: 20px auto 0 0;
    padding: 0; 
    border-color: #ffffff !important;
    background-color: transparent !important;  
}



.text-link-max{
color: #b3b3b3;
display: inline;
border-width: 1px;
border-style: none none solid;
    padding: 0;
    border-color: #ffffff;
    background-color: transparent;
    text-decoration: none;
}
.text-link-max:hover{
  border: none !important;  
}


@media screen and (max-width: 600px){
.u-image-max {
    height: 350px;
}
.u-repeater-max-item {
    width: 100%;
    }
}
@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {
.u-list-max {
    width: 100%;
}
.u-repeater-max-item {
    width: 23%;
    margin: 5.5px;
}

}


</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


 <section class="u-section-max">
      <img class="u-image-max" src="images/swa-min.jpg" />
      <div class="u-list-max">
        <div class="u-repeater-max flex flex-wrap flex-grow">
 
 

          <div class="u-repeater-max-item">
            <div class="u-content-max">
              <div class="u-shape-round-max">
                <div class="u-shape-round-content">
                  <h2 class="u-shape-text">01</h2>
                </div>
              </div>
              <h5 class="u-heading-max">Logo design</h5>
              <p class="u-text-max">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              <a href="https://nicepage.com" class="link-default-max btn-link-max">learn more</a>
            </div>
          </div>


            <div class="u-repeater-max-item">
            <div class="u-content-max">
              <div class="u-shape-round-max">
                <div class="u-shape-round-content">
                  <h2 class="u-shape-text">02</h2>
                </div>
              </div>
              <h5 class="u-heading-max">Your Strategy</h5>
              <p class="u-text-max">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              <a href="https://nicepage.com" class="link-default-max btn-link-max">learn more</a>
            </div>
          </div>


           <div class="u-repeater-max-item">
            <div class="u-content-max">
              <div class="u-shape-round-max">
                <div class="u-shape-round-content">
                  <h2 class="u-shape-text">03</h2>
                </div>
              </div>
              <h5 class="u-heading-max">Guidelines</h5>
              <p class="u-text-max">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              <a href="https://nicepage.com" class="link-default-max btn-link-max">learn more</a>
            </div>
          </div>

          
           <div class="u-repeater-max-item">
            <div class="u-content-max">
              <div class="u-shape-round-max">
                <div class="u-shape-round-content">
                  <h2 class="u-shape-text">04</h2>
                </div>
              </div>
              <h5 class="u-heading-max">Style Guide</h5>
              <p class="u-text-max">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              <a href="https://nicepage.com" class="link-default-max btn-link-max">learn more</a>
            </div>
          </div>
             
        </div>

      </div>

      <p class="u-text-max">Image by <a href="https://www.freepik.com/photos/business" class="text-link-max">Freepik</a>
      </p>
    </section>   




</body>
</html>