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
    font-size: 1rem;
    line-height: 1.6;
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

.j-section{
    min-height: 771px;
    color: #ffffff;
    background-color: #db160d;
   
}

.j-shape {
    height: 525px;
    margin-top: 0;
    margin-bottom: 0;
    color: #111111;
    background-color: #ffffff;
    text-align: left;
        width: 100% !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
}


.j-layout-wrap{
    width: 940px;
    margin-top: -455px;
    margin: -430px auto 52px;
}
.j-layout-row{

}
.j-layout-col{
    max-width: 50%;
    min-width: 50%;
}
.j-layout-cell{
border: 0px solid transparent;
min-height: 372px;
color: #111111;
    background-color: #ffffff;
}
.j-content-1{
    padding: 30px 0px;
}
.j-heading-text{
font-size: 2.6rem;
    font-weight: 700;
    margin: 0;
        line-height: 1.1;
        padding: 0;
        word-wrap: break-word;
}
.j-text{
    font-size: 1.25rem;
    font-style: italic;
    margin: 38px 0 0;
    padding: 0px;
    word-wrap: break-word;
}


.j-item-text {
   margin: 20px 0 0;
     padding: 0px;
    word-wrap: break-word;
}
.j-text-link{
color: #111111 !important;
display: inline;
border-width: 1px;
border-style: none none solid;
    padding: 0;
    border-color: #111111;
    background-color: transparent;
    text-decoration: none;
}
.j-text-link:hover{
  border: none !important;  
}


.u-btn{
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
.j-btn-round{
    color: #ffffff !important;
    background-color: #000000;
    text-transform: uppercase;
    font-weight: 700;
    background-image: none;
    margin: 38px auto 0 0;
    padding: 15px 57px 15px 56px;
        border-color: transparent !important;
            border-radius: 50px !important;
                border-style: solid;
                border-width: 0 !important;
}

.j-btn-round:hover{
    background-color: #db160d ;
}


.j-content-2{
padding: 0;
    text-align: center;
}

.j-image {
    width: 470px;
    height: 470px;
    margin-left: 0;
    object-position: 50% 100%;
    background-image: url(images/45370b97-64b2-4204-a316-582cbae9d594.jpg);
    background-position: 50% 50%;
    
    object-fit: cover;
    display: block;
    vertical-align: middle;
    background-size: cover;
    background-repeat: no-repeat;

    margin: 0 auto 0 20px;
    border-radius: 50% !important;
    border-color: #ffffff;
    border-width: 16px;
    border-style: solid;

}

.j-shape-circle{
    margin-top: -482px;
    width: 114px;
    height: 114px;
    margin: -552px 80px 426px auto;
    color: #ffffff;
    background-color: #db160d;
    border-radius: 50%;
}

@media only screen and (max-width: 320px){
.j-image {
        margin: 0 auto 0px -18px !important;
    }
    }
 @media only screen and (max-width: 360px){
.j-image {
        margin: 0 auto 0px -7px;
    }
    }   

@media screen and (max-width: 600px){

 .j-section {
    min-height: 0px;
    margin-top: 150px;
}
   
.j-layout-col {
    max-width: 100%;
    min-width: 100%;
}

.j-heading-text {
    font-size: 1.9rem;
}

.j-image {
  width: 290px;
    height: 290px;
    }
    .j-shape-circle {
    width: 80px;
    height: 80px;
       margin: -300px 80px 0px 205px;
}

.j-layout-wrap {
    width: 90%;
    margin-top: -455px;
    margin: -623px auto 52px;
}
.j-layout-cell {
    background: none;
}

}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

.j-layout-wrap {
    width: 90%;
}
.j-image {
    width: 100%;
    height: 475px;
    margin: unset;
    }

}

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  
<section class="j-section">
      <div class="j-shape"></div>
      <div class="j-layout-wrap">

          <div class="j-layout-row flex flex-grow flex-wrap">

              <div class="j-layout-col">
                <div class="j-layout-cell">
                  <div class="j-content-1">
                    <h2 class="j-heading-text">Consulting Company </h2>
                    <p class="j-text">Luctus venenatis lectus magna fringilla urna porttitor rhoncus. Congue nisi vitae suscipit tellus mauris</p>
                    <p class="j-item-text">Image from <a href="https://www.freepik.com/photos/car" class="j-text-link">Freepik</a>
                    </p>
                    <a href="https://nicepage.com/landing-page" class="u-btn j-btn-round">learn more</a>
                  </div>
                </div>
               
              </div>

              <div class="j-layout-col">
                <div class="j-layout-cell">
                  <div class="j-content-2">
                    <div class="j-image"></div>
                    <div class="j-shape-circle"></div>
                  </div>
                </div>
              </div>
          


          </div>
       
      </div>
    </section>



</body>
</html>