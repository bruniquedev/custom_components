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

.y-section{
    margin-top: 50px;
        min-height: 543px;
}

.y-layout-wrap{
     margin-top: 0;
    margin-bottom: 0; 
        width: 100% !important;
    margin-left: 0 !important;
    margin-right: 0 !important;  
}

.y-layout-cell{
    max-width: 50%;
    min-width: 50%;
}

.column-1{
    min-height: 543px;
text-align: left;
    color: #ffffff;
    background-color: #98caf9;
}

.column-2{
    min-height: 543px;
text-align: left;
  color: #111111;
    background-color: #ffffff;
}

.y-content-cell{
    padding-left: 30px;
    padding-right: 30px;
}


.y-heading-text{
font-size: 2.5rem;
    font-weight: 700;
    margin: 0;
    padding: 0;
        padding-top: 40px;
    word-wrap: break-word;
        line-height: 1.2;
}
.y-text{
    font-size: 1.1rem;
    line-height: 2;
    margin: 20px 0 0;
     padding: 0;
    word-wrap: break-word;
}

.text-white{
     color: #ffffff !important;   
}
.text-black{
     color: #111111 !important;   
}

@media screen and (max-width: 600px){
.y-layout-cell {
    max-width: 100%;
    min-width: 100%;
}
.y-heading-text {
    font-size: 1.7rem;
    }

    .column-2 {
    margin-top: 30px;
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


  <section class="y-section">
      <div class="y-layout-wrap">
       
          <div class="y-layout-row flex flex-grow flex-wrap justify-center">

            <div class="y-layout-cell column-1">
              <div class="y-content-cell text-white">
                <h5 class="y-heading-text">About Me</h5>
                <p class="y-text">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.&nbsp;Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
              </div>
            </div>

            <div class="y-layout-cell column-2">
              <div class="y-content-cell text-black">
                <h5 class="y-heading-text"> We Are Increasing Business Success With&nbsp;IT Solution</h5>
                <p class="y-text">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.&nbsp;Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
                <p class="y-text"> Article evident arrived express highest men did boy. Mistress sensible entirely am so. Quick can manor smart money hopes worth too. Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read.</p>
              </div>
            </div>

          
        </div>
      </div>
    </section>




</body>
</html>