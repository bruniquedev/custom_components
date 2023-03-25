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
        font-family: "Myriad-Regular";
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

.u-home-container {
    background-image: url(images/sdff-min.jpg);
    background-position: 50% 50%;
    object-fit: cover;
    display: block;
    vertical-align: middle;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 680px;
    overflow: hidden;
}
.u-home{
    /*min-height: 761px;*/
    width: 940px;
    /* margin: 0 auto; */
position: relative;
     top: 300px;
    margin: 0px 0px 0px 80px;
}
.u-home-head{
letter-spacing: 1px;
     font-family: "Myriad-Regular";
     font-size: 3rem;
    line-height: 1.1;
    font-weight: 700;
    color: #ffffff;
    word-wrap: break-word;
        margin: 0px;
}
.u-home-text{
margin-right: 431px;
font-size: 1.3rem;
    font-style: normal;
    line-height: 1.8;
    color: #ffffff;
        word-wrap: break-word;

}
.u-home-text-sm{
    margin: 20px 721px 20px 0;
    color: #ffffff;
    font-size: 16px;
    word-wrap: break-word;
}
.u-home-text-link{
color: #ffffff;
display: inline;
border-width: 1px;
border-style: none none solid;
    padding: 0;
    border-color: #ffffff;
    background-color: transparent;
    text-decoration: none;
}
.u-home-text-link:hover{
  border: none !important;  
}
.u-home-btn{
color: #40676f !important;
background-color: #ffffff !important;
border-radius: 50px !important;
border-width: 0 !important;
font-size: 25px !important;
}

.u-home-btn:hover{
    color: #ffffff !important;
    background-color: #f89f01 !important;

}
.u-btn {
    background-image: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-style: none;
    font-weight: 700;
    margin: 51px auto 60px 0;
    padding: 16px 46px 17px;
    border-color: transparent !important;

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

@media screen and (max-width: 580px){

.u-home-container {
 height: 580px;   
}

    .u-home {
    width: auto;
    margin: 0px 18px 18px 18px;
}
.u-home-head {
    font-size: 1.6rem;
    }

    .u-home-text {
  margin-right: 0px;
  font-size: 1rem;
    }
    .u-home-text-sm {
    margin: 20px 0px 20px 0;
    text-align: center;
}
.c-button{
text-align: center;
}

}





</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


    <section class="u-home-container">
      <div class="u-home">
        <h1 class="u-home-head"> From Idea To Experience</h1>
        <p class="u-home-text">Lectus quam id leo in. Proin fermentum leo vel orci porta non pulvinar. Eget sit amet tellus cras adipiscing enim. Volutpat odio facilisis mauris sit amet massa vitae.</p>
        <p class="u-home-text-sm">Image from <a href="https://www.freepik.com/vectors/background" class="u-home-text-link">Freepik</a>
        </p>
         <div class="c-button">
        <a href="https://nicepage.best" class="u-home-btn u-btn">contact us</a>
    </div>
      </div>
    </section>




</body>
</html>