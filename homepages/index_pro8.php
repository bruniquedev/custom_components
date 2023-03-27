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

.u-section-6{
margin-top: 50px;
}
.u-layout-wrap{
    width: 95%;
     margin: 0 0 0 auto;   
}
.u-layout-content{
color: #111111;
min-height: 579px;
}

.layout-cell{
    max-width: 41.66666667%;
    min-width: 41.66666667%;
    
}
.layout-cell-2{
        max-width: 58.33333333%;
    min-width: 58.33333333%;
}

.layout-cell-content{
    padding: 30px;
    color: #111111; 
}
.u-heading-6{
    font-size: 3rem;
    margin: 0;
    line-height: 1.1;
        font-weight: 600;
        padding: 0;
        word-wrap: break-word;
}

.u-text-item {
    line-height: 1.8;
    /*margin: 25px 0 0;*/
         padding: 0;
        word-wrap: break-word;
        font-size: 17px;
}

.text-link-max-6{
color: #333333;
display: inline;
border-width: 1px;
border-style: none none solid;
    padding: 0;
    border-color: #111111;
    background-color: transparent;
    text-decoration: none;
}
.text-link-max-6:hover{
  border: none !important;  
}

.u-layout-image{
min-height: 579px;
   object-fit: cover;
    display: block;
    vertical-align: middle;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;    
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

.u-btn-round{
     color: #ffffff !important;
    background-color: #1659d7 !important; 
    background-image: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 1rem;
    border-style: none;
    text-align: center;
    font-weight: 700;
    margin: 32px auto 0 0;
    padding: 16px 52px 17px 51px;
    border-color: transparent !important;
    text-decoration: none;  
    border-radius: 10px !important;
    border-width: 0 !important;
}

.u-btn-round:hover{
    color: #ffffff !important;
    background-color: #000000 !important;
}


a:hover {
    outline-width: 0;
}

@media screen and (max-width: 600px){
.layout-cell {
    max-width: 100%;
    min-width: 100%;
}
.layout-cell-2 {
    max-width: 100%;
    min-width: 100%;
}
.u-layout-wrap {
    width: 100%;
}
.layout-cell-content {
    padding: 15px;
}
.u-heading-6 {
    font-size: 2.3rem;
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


  <section class="u-section-6">
      <div class="u-layout-wrap">

          <div class="u-layout-content flex flex-wrap flex-grow">

            <div class="layout-cell">
              <div class="layout-cell-content">
                <h2 class="u-heading-6">
                  <span style="font-weight: 700;"></span>How does startup funding work?
                </h2>
                <p class="u-text-item">Vivamus arcu felis bibendum ut tristique et. Habitant morbi tristique senectus et netus et malesuada fames. Sapien eget mi proin sed libero enim sed.</p>
                <p class="u-text-item u-text-item-6">Image from <a href="https://www.freepik.com/photos/office-manager" class="text-link-max-6" target="_blank">Freepik</a>
                </p>
                <a href="https://nicepage.dev" class="u-btn u-btn-round">read more</a>
              </div>
            </div>

            <div class="u-layout-image layout-cell-2" style="background-image: url(images/hhhh.jpg);">
              <div class="u-layout-content"></div>
            </div>

          </div>
        

      </div>
    </section>




</body>
</html>