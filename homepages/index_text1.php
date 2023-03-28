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

.u-section-details-1{
    margin-top: 50px;
        color: #111111;
    background-color: #ffffff;
        text-align: left;
}

.details-content{
    width: 940px;
min-height: 697px;
margin: 0 auto;
}
.u-line-horizontal{
    width: 194px;
    margin: 60px auto 0 0;
    border-right-width: 0;
    border-left-width: 0;
    border-bottom-width: 0;
        border-color: #ffce3e;
        border-width: 6px;
        border-style: solid;
}
.u-title-text{
margin-right: 18px;
font-size: 4.5rem;
    margin: 30px 218px 0 0;
    line-height: 1.1;
    font-weight: bold;
    word-wrap: break-word;
    padding: 0;
}
.u-detail-text{
    margin-right: 18px;
    margin: 20px 218px 60px 0;
       word-wrap: break-word;
    padding: 0;
    font-family: "Myriad-Pro";
    font-size: 1.1rem;
}

@media screen and (max-width: 600px){
.details-content {
    width: 90%;
}
.u-title-text {
    width: 100%;
    font-size: 2.5rem;
    }
    .u-detail-text {
    width: 100%;
    font-size: 1.3rem;
}

}
@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

.details-content {
    width: 90%;
}
.u-title-text {
    width: 100%;
    }
    .u-detail-text {
    width: 100%;
}

}

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  
<section class="u-section-details-1">
      <div class="details-content">
        <div class="u-line-horizontal"></div>
        <h1 class="u-title-text">Life is an adventure</h1>
        <p class="u-detail-text">Paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et ultricies sapien. Quisque fringilla sit amet dolor commodo efficitur.
                Aliquam et sem odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.</p>
      </div>
    </section>



</body>
</html>