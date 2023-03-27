<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>index_pro4</title>
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
    font-size: 12px;
    color: #303030;
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


.section-ui-container{
background-image: url(images/skyscraper-view-city-leader-window-frame1.jpg);
    background-position: 50% 50%;
    object-fit: cover;
    display: block;
    vertical-align: middle;
    background-size: cover;
    background-repeat: no-repeat;
     margin-top: 50px;
     height: 680px;

}
.ui-list{
/*width: 940px;*/
    padding: 20px;
    margin: 0 auto;
}
.ui-repeater{
    width: 550px;
    height: auto;
        margin: 10px auto 50px 50px;
}
.shape-item{
width: 48%;
    margin: 5px;;
}
.shape-item-content{
padding: 30px;
}

.shape-item-content h6{
    font-size: 1.55rem;
    font-weight: 500;
    margin: 0 auto 0 0;
    padding: 0;
    word-wrap: break-word;
        line-height: 1.2;
}

.shape-item-content p{
    line-height: 1.5;
    font-size: 15px;
       /* margin: 23px 0 0;*/
        word-wrap: break-word;
        padding: 0;
}

.shape-item-content a{
    text-decoration: none;
    border-width: 2px;
    border-style: none none solid;
    margin: 17px auto 0 0;
    padding: 0;
    font-size: 16px;
}
a.link-text-btn:hover{
border: none;
}
.u-text-black{
color: #111111;
    
} 
.bg-lightgray{
background-color: #f2f2f2;
}
.bg-white{
background-color: #ffffff;
}
.bg-lightblue{
    background-color: #b2d7fa;
}
.border-grey-40 {
    border-color: #999999 !important;
    color: #999999 !important;
    background-color: transparent !important;
}

.border-black {
    border-color: #000000 !important;
    color: #000000 !important;
    background-color: transparent !important;
}

@media screen and (max-width: 600px){
 .section-ui-container {
    height: 100%;
}   
.ui-repeater {
    margin: 0px;
    width: 100%;
}
.shape-item {
    width: 100%;
    margin: 5px;
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


    <section class="section-ui-container">
        <div class="ui-list">
          <div class="ui-repeater flex flex-wrap flex-grow">


            <div class="shape-item u-text-black bg-lightgray">
              <div class="shape-item-content">
                <h6>About Me</h6>
                <p>Sample text. Click to select the text box. Click again or double click to start editing the text. </p>
                <a href="https://nicepage.com/website-design" class="border-grey-40 link-text-btn">View More</a>
              </div>
            </div>

            <div class="shape-item u-text-black bg-white">
              <div class="shape-item-content">
                <h6>What I Do</h6>
                <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="https://nicepage.com/website-design" class="border-grey-40 link-text-btn">View More</a>
              </div>
            </div>

            <div class="shape-item u-text-black bg-white">
              <div class="shape-item-content">
                <h6>How It Work</h6>
                <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="https://nicepage.com/website-design" class="border-grey-40 link-text-btn">View More</a>
              </div>
            </div>

            <div class="shape-item u-text-black bg-lightblue">
              <div class="shape-item-content">
                <h6>Contact Me</h6>
                <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="https://nicepage.com/website-design" class="border-grey-40 link-text-btn border-black">View More</a>
              </div>
            </div>


           


        </div>
      </div>
    </section>




</body>
</html>