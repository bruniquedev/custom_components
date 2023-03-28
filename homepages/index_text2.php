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

.d-section-details{
    margin-top: 50px;
    min-height: 635px;
    color: #ffffff;
    background-color: #1638ea;
    text-align: center;
}
.d-container-details{
    min-height: 515px;
    height: auto;
    margin-top: 60px;
    margin-bottom: 60px;
        color: #111111;
    background-color: #ffffff;
}
.d-details-content{
    padding-left: 170px;
    padding-right: 170px;
    padding: 0 250px;
}
.d-icon-circle{
margin-top: 0;
width: 30px;
    height: 30px;
    background-image: none;
    margin: 46px auto 0;
    padding: 10px;
    color: #ffffff !important;
    background-color: #1638ea;
        border-radius: 50%;
        display: block;
    line-height: 0;
    border-width: 0px;
    text-align: center;
}
.d-icon-circle i{
font-size: 30px;
}
.d-title-text{
    width: 440px;
        font-size: 1.875rem;
    font-weight: 700;
    margin: 17px auto 0;
        line-height: 1.1;
        padding: 0;
        word-wrap: break-word;
}
.d-detail-text{
    line-height: 2;
    font-size: 1rem;
    margin: 44px 0 0;
    padding: 0;
    word-wrap: break-word;
}

@media screen and (max-width: 600px){
.d-details-content {
    padding: 0 10px;
    width: 90%;
}
.d-title-text {
    width: 100%;
}
.d-detail-text {
    width: 100%;
    text-align: left;
}

}
@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

.d-details-content {
    padding: 0 10px;
    width: 90%;
}
.d-title-text {
    width: 100%;
}
.d-detail-text {
    width: 100%;
    text-align: left;
}

}

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


    
    <section class="d-section-details">
      <div class="d-container-details">
        <div class="d-details-content">
            <span class="d-icon-circle"><i class="ion ion-ios-lightbulb-outline"></i></span>
          <h2 class="d-title-text">Welcome Message</h2>
          <p class="d-detail-text">Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. A lacus vestibulum sed arcu non. Dolor magna eget est lorem ipsum dolor sit amet consectetur. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Nec feugiat nisl pretium fusce id. Justo laoreet sit amet cursus sit amet. Porta non pulvinar neque laoreet suspendisse interdum consectetur libero.</p>
          <p class="d-detail-text">
            <span style="font-weight: 700;"> Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. A lacus vestibulum sed arcu non. Dolor magna eget est lorem ipsum dolor sit amet consectetur. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus.</span>
            <br>
          </p>
        </div>
      </div>
    </section>
    





</body>
</html>