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
            font-size: 14px;
    color: #777777;
    line-height: 1.7em;
    font-weight: 400;
    background: #ffffff;
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
    z-index: 10;
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

.m-page-title {
    position: relative;
    text-align: center;
    overflow: hidden;
    z-index: 1;
    padding: 120px 0;
    background-repeat: no-repeat;
    background-position: center bottom;
    background-size: cover;
}

.auto-container {
    position: static;
    max-width: 1200px;
    padding: 0px 15px;
    margin: 0 auto;
}

.auto-row {
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
    margin-right: -15px;
    margin-left: -15px;

}

.m-page-title h1 {
    position: relative;
    display: block;
    font-size: 60px;
    color: #ffffff;
    line-height: 1em;
    font-weight: 700;
    margin-bottom: 20px;
}

ul, li {
    list-style: none;
    padding: 0px;
    margin: 0px;
}

.m-page-title .m-bread-crumb li {
    position: relative;
    display: inline-block;
    font-size: 18px;
    line-height: 30px;
    color: #ffffff;
    font-weight: 500;
    cursor: default;
    padding-right: 15px;
    margin-right: 15px;
}

.m-page-title .m-bread-crumb li:before {
    position: absolute;
    right: -3px;
    font-size: 18px;
    line-height: 30px;
    color: #ffffff;
    font-weight: 400;
    content: "|";
}

.m-page-title .m-bread-crumb li a {
    color: #ffffff;
    transition: all 300ms ease;
    }


/********news section *********/
.news-section {
    padding: 120px 0;
}
.m-news-block{
margin-bottom: 40px;
max-width: 30%;
 padding-right: 15px;
padding-left: 15px;
}
.m-news-block .m-inner-box {
    background-color: #ffffff;
    box-shadow: 0 0 20px rgba(0,0,0,0.10);
}

.m-news-block .m-image {
    overflow: hidden;
    margin-bottom: 0;
    margin: 0px;
}

.m-news-block .m-image a {
     background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
             object-fit: cover;
    display: block;
    vertical-align: middle;
    width: 100%;
    height: 180px;
}



.m-news-block .m-lower-content {
    padding: 20px 30px 30px;
}

.m-news-block .m-post-info {
    margin-bottom: 10px;
}

.m-news-block .m-post-info li {
    display: inline-block;
    font-size: 14px;
    line-height: 24px;
    color: #777777;
    font-weight: 400;
    margin-right: 25px;
}

.m-news-block .m-post-info li span {
    margin-right: 5px;
    color: #1d95d2;
}

.m-news-block h4 {
    display: block;
    font-size: 22px;
    line-height: 1.4em;
    color: #222222;
    font-weight: 500;
    margin-bottom: 20px;
}

.m-news-block h4 a {
    color: #222222;
    display: inline-block;
    transition: all 300ms ease;
    }

    .m-news-block .m-btn-box a {
    display: inline-block;
    font-size: 12px;
    line-height: 20px;
    color: #ffffff;
    padding: 4px 15px;
    background-color: #1d95d2;
    border-radius: 2px;
    border: 1px solid #1d95d2;
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}
.m-news-block .m-btn-box a:hover {
    background: none;
    color: #1d95d2;
    border-color: #1d95d2;
}
/********news section *********/

/********pagination *********/
.news-section .styled-pagination {
    margin-top: 30px;
}
.styled-pagination li {
    display: inline-block;
    margin: 0 8px 0 0;
}
.styled-pagination li a {
    display: block;
    line-height: 50px;
    font-size: 18px;
    height: 50px;
    width: 50px;
    color: #222222;
    font-weight: 500;
    text-align: center;
    background: #ffffff;
    border: 1px solid #dddddd;
    border-bottom: 2px solid #ec167f;
    transition: all 500ms ease;
}
.styled-pagination li a:hover, .styled-pagination li a.active {
    background-color: #ec167f;
    color: #ffffff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.10);
}
/********end pagination *********/


@media screen and (max-width: 600px){
.m-news-block {
    max-width: 100%;
}

}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {
.m-news-block {
    max-width: 29%;
}
}

</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


<!--page title-->
  <section class="m-page-title" style="background-image:url(images/5.jpg);">

        <div class="auto-container">

            <h1>Blog Grid</h1>

            <ul class="m-bread-crumb">

                <li><a href="index.html">Home</a></li>

                <li>Blog Grid</li>

            </ul>

        </div>

    </section>
<!--/ end page title-->


<!--news section-->
<section class="news-section">

        <div class="auto-container">

            <div class="auto-row">



                <!-- News Block Three -->

                <div class="m-news-block">

                    <div class="m-inner-box">

                        <div class="m-image-box">

                            <figure class="m-image"><a href="blog-single.html" style="background-image:url(images/news-1.jpg);"></a></figure>

                        </div>

                        <div class="m-lower-content">

                            <ul class="m-post-info">

                                <li><span class="ion ion-android-person"></span> Admin</li>

                                <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                            </ul>    

                            <h4><a href="blog-single.html">International Conference on Art Business</a></h4>

                            <div class="m-btn-box"><a href="#" class="m-read-more">Read More</a></div>

                        </div>

                    </div>

                </div>



                <!-- News Block Three -->

                <div class="m-news-block">

                    <div class="m-inner-box">

                        <div class="m-image-box">

                            <figure class="m-image"><a href="blog-single.html" style="background-image:url(images/news-2.jpg);"></a></figure>

                        </div>

                        <div class="m-lower-content">

                            <ul class="m-post-info">

                                <li><span class="ion ion-android-person"></span> Admin</li>

                                <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                            </ul>    

                            <h4><a href="blog-single.html">International Conference on Art Business</a></h4>

                            <div class="m-btn-box"><a href="#" class="m-read-more">Read More</a></div>

                        </div>

                    </div>

                </div>



                <!-- News Block Three -->

                <div class="m-news-block">

                    <div class="m-inner-box">

                        <div class="m-image-box">

                            <figure class="m-image"><a href="blog-single.html" style="background-image:url(images/news-3.jpg);"></a></figure>

                        </div>

                        <div class="m-lower-content">

                            <ul class="m-post-info">

                                <li><span class="ion ion-android-person"></span> Admin</li>

                                <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                            </ul>    

                            <h4><a href="blog-single.html">International Conference on Art Business</a></h4>

                            <div class="m-btn-box"><a href="#" class="m-read-more">Read More</a></div>

                        </div>

                    </div>

                </div>





                <!-- News Block Three -->

                <div class="m-news-block">

                    <div class="m-inner-box">

                        <div class="m-image-box">

                            <figure class="m-image"><a href="blog-single.html" style="background-image:url(images/news-4.jpg);"></a></figure>

                        </div>

                        <div class="m-lower-content">

                            <ul class="m-post-info">

                                <li><span class="ion ion-android-person"></span> Admin</li>

                                <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                            </ul>    

                            <h4><a href="blog-single.html">International Conference on Art Business</a></h4>

                            <div class="m-btn-box"><a href="#" class="m-read-more">Read More</a></div>

                        </div>

                    </div>

                </div>



                <!-- News Block Three -->

                <div class="m-news-block">

                    <div class="m-inner-box">

                        <div class="m-image-box">

                            <figure class="m-image"><a href="blog-single.html" style="background-image:url(images/news-5.jpg);"></a></figure>

                        </div>

                        <div class="m-lower-content">

                            <ul class="m-post-info">

                                <li><span class="ion ion-android-person"></span> Admin</li>

                                <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                            </ul>    

                            <h4><a href="blog-single.html">International Conference on Art Business</a></h4>

                            <div class="m-btn-box"><a href="#" class="m-read-more">Read More</a></div>

                        </div>

                    </div>

                </div>



                <!-- News Block Three -->

                <div class="m-news-block">

                    <div class="m-inner-box">

                        <div class="m-image-box">

                            <figure class="m-image"><a href="blog-single.html" style="background-image:url(images/news-6.jpg);"></a></figure>

                        </div>

                        <div class="m-lower-content">

                            <ul class="m-post-info">

                                <li><span class="ion ion-android-person"></span> Admin</li>

                                <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                            </ul>    

                            <h4><a href="blog-single.html">International Conference on Art Business</a></h4>

                            <div class="m-btn-box"><a href="#" class="m-read-more">Read More</a></div>

                        </div>

                    </div>

                </div>

            </div>



            <!--Styled Pagination-->

            <ul class="styled-pagination center">

                <li><a href="#">1</a></li>

                <li><a href="#" class="active">2</a></li>

                <li><a href="#">3</a></li>

                <li><a href="#"><span class="icon ion ion-android-arrow-dropright"></span></a></li>

            </ul>                

            <!--End Styled Pagination-->

        </div>

    </section>

<!--/news section-->


</body>
</html>