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
    background-color: #f2f2f2;
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

.x-section{
    margin-top: 50px;
    color: #111111;
    background-color: #f2f2f2;
    text-align: center;
}
.x-content{
min-height: 845px;
width: 940px;
    margin: 0 auto;
}
.x-heading-text{
font-weight: 700;
    font-size: 3rem;
    width: 821px;
    margin: 80px auto 0;
    line-height: 1.1;
        padding: 0;
        word-wrap: break-word;
}
.x-image-default{
    width: 570px;
    height: 368px;
    margin: 30px auto 0;
        object-fit: contain;
    background-size: contain;
    border-style: none;
        display: block;
    vertical-align: middle;
    background-position: 50% 50%;
    background-repeat: no-repeat;
}
.x-text{
    font-size: 1.125rem;
    width: 675px;
    margin: 12px auto 0;
    font-family: "Myriad-Pro";
     padding: 0;
        word-wrap: break-word;
        color: #111111 !important;
}
.x-btn{
display: inline-block; 
    /*display: table;*/
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
.x-btn-1{
    color: #ffffff !important;
    background-color: #f7420f !important;
        border-style: none;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    background-image: none;
    margin: 20px auto 80px;
    padding: 19px 64px;
    border-color: transparent !important;
        border-width: 0 !important;
}
.x-btn-1:hover{
background-color: #111111 !important;
}

@media screen and (max-width: 600px){
.x-content {
    width: 95%;
}
.x-heading-text {
    width: 100%;
    font-size: 1.7rem;
    }
    .x-image-default {
    width: 100%;
        object-fit: cover;
    background-size: cover;
    }
    .x-text {
        width: 100%;
    }

}
@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

.x-content {
    width: 95%;
}
.x-heading-text {
    width: 100%;
    font-size: 1.7rem;
    }
    .x-image-default {
    width: 100%;
        object-fit: cover;
    background-size: cover;
    }
    .x-text {
        width: 100%;
    }

}



</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  <section class="x-section">
      <div class="x-content">
        <h2 class="x-heading-text"> We Are Increasing Business Success With&nbsp;IT Solution</h2>
        <img class="x-image-default" src="images/billionphotos3930909.jpg" />
        <p class="x-text"> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <a href="https://nicepage.dev" class="x-btn x-btn-1">read more</a>
      </div>
    </section>




</body>
</html>