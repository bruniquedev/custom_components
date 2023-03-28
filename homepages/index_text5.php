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
    line-height: 1.6;
    background-color: #1f5bff;
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

.z-section{
        color: #ffffff;
    background-color: #1f5bff;
    text-align: center;
}
.z-content{
width: 940px;
    margin: 0 auto;
        min-height: 581px;
}
.z-heading-text-6{
text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 1rem;
    font-weight: 500;
    width: 830px;
    margin: 60px auto 0;
    line-height: 1.2;
    padding: 0;
    word-wrap: break-word;
}
.z-heading-text-2{
font-weight: 700;
    font-size: 3rem;
    line-height: 53px;
    width: 830px;
    margin: 70px auto 0;
    padding: 0;
    word-wrap: break-word;
}
.z-text{
font-size: 1.625rem;
    width: 830px;
    margin: 70px auto 60px;
    padding: 0;
    word-wrap: break-word;
}

@media screen and (max-width: 600px){

.z-content {
    width: 90%;
}
.z-heading-text-6{
width: 100%;
}
.z-heading-text-2{
    font-size: 1.6rem;
width: 100%;
line-height: 1.2;
}
.z-text{
width: 100%;
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


  <section class="z-section">
      <div class="z-content">
        <h6 class="z-heading-text-6">about design studio</h6>
        <h2 class="z-heading-text-2">We have developed more than 300 professional, customer converting, mobile friendly websites. </h2>
        <p class="z-text">contact: +256 777 000 0000 / email / facebook&nbsp;<br>
        </p>
      </div>
    </section>




</body>
</html>