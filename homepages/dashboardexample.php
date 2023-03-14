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
        font-family: sans-serif;
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

.main_left_nav {
    background-color: #303030;
    position: fixed;
    min-height: 100vh;
    height: 100%;
}
.main_left_nav > a.a {
    padding: 10px 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    fill: #d1d1d1;
        /* margin: 0 6px; */
    border-bottom: 1px solid #7e7878;
}

.main_left_nav > a.a span.ic {
    width: 14px;
    height: 14px;
    font-size: 20px;
}

.ic {
    width: 14px;
    height: 14px;
    display: block;
    padding: 7px;
    cursor: pointer;
}
a {
    color: #00a6c5;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
    outline: 0;
}


.main_left_nav > a.a span.text {
    margin-top: 5px;
    color: #7a9ebb;
    display: block;
    text-align: center;
}

.main {
    background-color: #eee;
    margin-top: 49px;
    margin-left: 130px;
}

.main > div > .dc {
    background-color: #fff;
    margin: 0 auto;
    min-height: 100vh;
    width: 100vw;
    /* max-width: 1050px; */
    box-shadow: 0 0 25px #ccc;
    /* overflow: hidden; */
    /* border-radius: 5px; */
}

._container {
    overflow-y: auto;
    box-shadow: 8px 8px 8px 8px rgb(0 0 0 / 20%);
    transition: 0.3s;
    border-radius: 50px;
    border: solid 5px #ced4d8;
    padding: 15px;
    margin: 15px;
    background-color: #ffffff;
}



.flex {
    display: flex;
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



</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


     <div class="main_left_nav">
                    <a class="a" href="#">
                        <span class="ic ion ion-ios-pie-outline"></span>
                        <span class="text">Dashboard</span>
                    </a>
                                     <a class="a" href="#"> 
                        <span class="ic ion ion-android-arrow-up"></span>
                        <span class="text">pay and transfer</span>
                    </a>
                                           <a class="a" href="#">
                        <span class="ic ion ion-cash"></span>
                        <span class="text">Your investments</span>
                    </a>
                    <a class="a" href="#">
                        <span class="ic ion ion-stats-bars"></span>
                        <span class="text">Apply for loan</span>
                    </a>
                    <a class="a" href="#">
                        <span class="ic ion ion-ios-pie"></span>
                        <span class="text">eStatements</span>
                    </a>
                    <a class="a" href="#">
                        <span class="ic ion ion-android-notifications"></span>
                        <span class="text">Notifications</span>
                    </a>
                    <a class="a" href="#" style="fill: #f00;">
                        <span class="ic ion ion-power"></span>
                        <span class="text">Logout</span>
                    </a>
                </div>




<div class="main flex flex-col justicy-center items-center">
        <div class="w-full flex justify-center items-center">
            <div class="dc flex">
           
                <div class="_container flex-grow">
                    <div class="tri-card flex">
                        <div class="flex-grow">



                       </div> 
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>




</body>
</html>