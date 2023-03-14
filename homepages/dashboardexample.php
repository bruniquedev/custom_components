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
                        <span class="ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 224C238.4 224 223.1 238.4 223.1 256S238.4 288 256 288c17.63 0 32-14.38 32-32S273.6 224 256 224zM470.2 128c-10.88-19.5-40.51-50.75-116.3-41.88C332.4 34.88 299.6 0 256 0S179.6 34.88 158.1 86.12C82.34 77.38 52.71 108.5 41.83 128c-16.38 29.38-14.91 73.12 25.23 128c-40.13 54.88-41.61 98.63-25.23 128c29.13 52.38 101.6 43.63 116.3 41.88C179.6 477.1 212.4 512 256 512s76.39-34.88 97.9-86.13C368.5 427.6 441 436.4 470.2 384c16.38-29.38 14.91-73.13-25.23-128C485.1 201.1 486.5 157.4 470.2 128zM95.34 352c-4.001-7.25-.1251-24.75 15-48.25c6.876 6.5 14.13 12.87 21.88 19.12c1.625 13.75 4.001 27.13 6.751 40.13C114.3 363.9 99.09 358.6 95.34 352zM132.2 189.1C124.5 195.4 117.2 201.8 110.3 208.2C95.22 184.8 91.34 167.2 95.34 160c3.376-6.125 16.38-11.5 37.88-11.5c1.75 0 3.876 .375 5.751 .375C136.1 162.2 133.8 175.6 132.2 189.1zM256 64c9.502 0 22.25 13.5 33.88 37.25C278.6 105 267.4 109.3 256 114.1C244.6 109.3 233.4 105 222.1 101.2C233.7 77.5 246.5 64 256 64zM256 448c-9.502 0-22.25-13.5-33.88-37.25C233.4 407 244.6 402.7 256 397.9c11.38 4.875 22.63 9.135 33.88 12.89C278.3 434.5 265.5 448 256 448zM256 336c-44.13 0-80.02-35.88-80.02-80S211.9 176 256 176s80.02 35.88 80.02 80S300.1 336 256 336zM416.7 352c-3.626 6.625-19 11.88-43.63 11c2.751-12.1 5.126-26.38 6.751-40.13c7.752-6.25 15-12.63 21.88-19.12C416.8 327.2 420.7 344.8 416.7 352zM401.7 208.2c-6.876-6.5-14.13-12.87-21.88-19.12c-1.625-13.5-3.876-26.88-6.751-40.25c1.875 0 4.001-.375 5.751-.375c21.5 0 34.51 5.375 37.88 11.5C420.7 167.2 416.8 184.8 401.7 208.2z"/></svg></span>
                        <span class="text">Dashboard</span>
                    </a>
                                     <a class="a" href="#"  class="transfer_infoModalmode"> 
                        <span class="ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/></svg></span>
                        <span class="text">pay and transfer</span>
                    </a>
                                           <a class="a" href="#">
                        <span class="ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 0C177.7 0 192 14.33 192 32V67.68C193.6 67.89 195.1 68.12 196.7 68.35C207.3 69.93 238.9 75.02 251.9 78.31C268.1 82.65 279.4 100.1 275 117.2C270.7 134.3 253.3 144.7 236.1 140.4C226.8 137.1 198.5 133.3 187.3 131.7C155.2 126.9 127.7 129.3 108.8 136.5C90.52 143.5 82.93 153.4 80.92 164.5C78.98 175.2 80.45 181.3 82.21 185.1C84.1 189.1 87.79 193.6 95.14 198.5C111.4 209.2 136.2 216.4 168.4 225.1L171.2 225.9C199.6 233.6 234.4 243.1 260.2 260.2C274.3 269.6 287.6 282.3 295.8 299.9C304.1 317.7 305.9 337.7 302.1 358.1C295.1 397 268.1 422.4 236.4 435.6C222.8 441.2 207.8 444.8 192 446.6V480C192 497.7 177.7 512 160 512C142.3 512 128 497.7 128 480V445.1C127.6 445.1 127.1 444.1 126.7 444.9L126.5 444.9C102.2 441.1 62.07 430.6 35 418.6C18.85 411.4 11.58 392.5 18.76 376.3C25.94 360.2 44.85 352.9 60.1 360.1C81.9 369.4 116.3 378.5 136.2 381.6C168.2 386.4 194.5 383.6 212.3 376.4C229.2 369.5 236.9 359.5 239.1 347.5C241 336.8 239.6 330.7 237.8 326.9C235.9 322.9 232.2 318.4 224.9 313.5C208.6 302.8 183.8 295.6 151.6 286.9L148.8 286.1C120.4 278.4 85.58 268.9 59.76 251.8C45.65 242.4 32.43 229.7 24.22 212.1C15.89 194.3 14.08 174.3 17.95 153C25.03 114.1 53.05 89.29 85.96 76.73C98.98 71.76 113.1 68.49 128 66.73V32C128 14.33 142.3 0 160 0V0z"/></svg></span>
                        <span class="text">Your investments</span>
                    </a>
                    <a class="a" href="#">
                        <span class="ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M332.8 320h38.4c6.4 0 12.8-6.4 12.8-12.8V172.8c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v134.4c0 6.4 6.4 12.8 12.8 12.8zm96 0h38.4c6.4 0 12.8-6.4 12.8-12.8V76.8c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v230.4c0 6.4 6.4 12.8 12.8 12.8zm-288 0h38.4c6.4 0 12.8-6.4 12.8-12.8v-70.4c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v70.4c0 6.4 6.4 12.8 12.8 12.8zm96 0h38.4c6.4 0 12.8-6.4 12.8-12.8V108.8c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v198.4c0 6.4 6.4 12.8 12.8 12.8zM496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z"/></svg></span>
                        <span class="text">Apply for loan</span>
                    </a>
                    <a class="a" href="#">
                        <span class="ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z"/></svg></span>
                        <span class="text">eStatements</span>
                    </a>
                    <a class="a" href="#">
                        <span class="ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M439.39 362.29c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71zM67.53 368c21.22-27.97 44.42-74.33 44.53-159.42 0-.2-.06-.38-.06-.58 0-61.86 50.14-112 112-112s112 50.14 112 112c0 .2-.06.38-.06.58.11 85.1 23.31 131.46 44.53 159.42H67.53zM224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64z"/></svg></span>
                        <span class="text">Notifications</span>
                    </a>
                    <a class="a" href="./" style="fill: #f00;">
                        <span class="ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M400 54.1c63 45 104 118.6 104 201.9 0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4 7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31-41.5 30.8-68 79.6-68 134.9-.1 92.3 74.5 168.1 168 168.1 91.6 0 168.6-74.2 168-169.1-.3-51.8-24.7-101.8-68.1-134-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z"/></svg></span>
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