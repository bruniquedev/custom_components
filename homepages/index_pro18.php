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

/********title section *********/

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
/********end title section *********/


/******** news section *********/
.sidebar-page-container {
    padding: 120px 0px 70px;
}
.sidebar-page-container .content-side, .sidebar-page-container .sidebar-side {
    margin-bottom: 50px;
}

.content-side{
max-width: 66%;
padding-right: 15px;
    padding-left: 15px;
}
.blog-sidebar .o-news-block {
    margin-bottom: 50px;
}

.o-news-block .o-inner-box {
    background-color: #ffffff;
    box-shadow: 0 0 20px rgba(0,0,0,0.10);
}
.o-news-block .o-image {
    overflow: hidden;
    margin-bottom: 0;
        margin: 0px 0px 0px 0px;
}

.o-news-block .o-image img {
    display: block;
    width: 100%;
    height: auto;
    vertical-align: middle;
    border-style: none;
}
.blog-sidebar .o-news-block .o-lower-content {
    padding: 30px 30px;
}
.o-news-block .o-post-info {
    margin-bottom: 10px;
}
.o-news-block .o-post-info li {
    position: relative;
    display: inline-block;
    font-size: 14px;
    line-height: 24px;
    color: #777777;
    font-weight: 400;
    margin-right: 25px;
}
.o-news-block .o-post-info li span {
    margin-right: 5px;
    color: #1d95d2;
}
.blog-sidebar .o-news-block h4 {
    font-size: 26px;
}
.o-news-block h4 {
    display: block;
    font-size: 22px;
    line-height: 1.4em;
    color: #222222;
    font-weight: 500;
    margin-bottom: 20px;
}
.o-news-block h4 a {
    color: #222222;
    display: inline-block;
        transition: all 300ms ease;
    }
 .o-news-block .o-text {
    font-size: 16px;
    line-height: 27px;
    color: #888888;
    font-weight: 400;
    margin-bottom: 20px;
}   

.o-news-block .o-btn-box a {
    position: relative;
    display: inline-block;
    font-size: 12px;
    line-height: 20px;
    color: #ffffff;
    padding: 4px 15px;
    background-color: #1d95d2;
    border-radius: 2px;
    border: 1px solid #1d95d2;
    transition: all 300ms ease;
}

.o-news-block .o-btn-box a:hover {
    background: none;
    color: #1d95d2;
    border-color: #1d95d2;
}
/******** /news section *********/

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


/********right side bar *********/
.sidebar-side{
max-width: 28%;
    padding-right: 15px;
    padding-left: 15px;
}
.sidebar-page-container .sidebar.padding-left {
    padding-left: 0;
}
.sidebar .search-box {
    margin-bottom: 60px;
}
.sidebar .search-box .form-group {
    margin: 0px;
    display: flex;
}

.sidebar .search-box .form-group input[type="search"] {
    padding: 20px 50px 20px 30px;
    border: 2px solid #eeeeee;
    background: #ffffff;
    display: block;
    font-size: 15px;
    line-height: 18px;
    width: 100%;
    height: 60px;
    color: #333333;
    transition: all 500ms ease;
    outline: none !important;
}

.sidebar .search-box .form-group button {
    height: 60px;
    width: 60px;
    display: block;
    font-size: 18px;
    color: #888888;
    line-height: 60px;
    font-weight: normal;
    background: #eeeeee;
    cursor: pointer;
    outline: none !important;
    outline-width: !important;
    border: none;
}
.sidebar .search-box .form-group button span{
font-size: 22px;
}

.sidebar-title {
    display: block;
    font-size: 24px;
    line-height: 1.2em;
    color: #333333;
    font-weight: 700;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 2px solid #eeeeee;
}
.blog-categories li a {
    position: relative;
    display: block;
    color: #333333;
    font-size: 18px;
    line-height: 30px;
    font-weight: 400;
    margin-bottom: 10px;
    transition: all 500ms ease;
}
.blog-categories li a span {
    float: right;
}
.sidebar .popular-posts .post {
    margin-bottom: 20px;
}

.sidebar .popular-posts .post .post-inner {

    min-height: 90px;
}
.sidebar .popular-posts .post .post-thumb {
width: 60%;
    margin: 0px;
    height: 90px;

}
.sidebar .popular-posts .post .post-thumb img {
    display: block;
   transition: all 0.3s ease;
       max-width: 100%;
    height: auto;
    object-fit: contain;
        vertical-align: middle;
    border-style: none;
    }
    .sidebar .popular-posts .post-info {
    font-size: 16px;
    color: #7f8897;
    font-weight: 400;
    line-height: 30px;
    margin-bottom: 5px;
}

.post-info-content{
width: 100%;
}

.sidebar .popular-posts .post .text {
    font-size: 18px;
    line-height: 26px;
    font-weight: 600;
    color: #888888;
    margin: 0px;
}
.sidebar .popular-posts .post .text a {
    color: #3f4161;
        transition: all 0.3s ease;
    }

    .sidebar .popular-tags a {
    float: left;
    padding: 5px;
    margin: 0 20px 10px 0;
    color: #333333;
    text-align: center;
    font-size: 16px;
    line-height: 20px;
    background: none;
    font-weight: 400;
    border-bottom: 2px solid #dddddd;
    background-color: #ffffff;
    transition: all 300ms ease;
}
/******** /right side bar *********/

@media screen and (max-width: 600px){
.content-side {
    max-width: 100%;
}
.sidebar-side {
    max-width: 100%;
    }

}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

.sidebar-side {
    max-width: 26%;
}

.sidebar .popular-posts .post .post-thumb {
    margin-right: 8px;
}
.sidebar .popular-posts .post .text {
    font-size: 14px;
    line-height: 17px;
    }

}





</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>

<!--Page Title-->
  <section class="m-page-title" style="background-image:url(images/5.jpg);">

        <div class="auto-container">

            <h1>Blog Sidebar</h1>

            <ul class="m-bread-crumb">

                <li><a href="index.html">Home</a></li>

                <li>Blog Sidebar</li>

            </ul>

        </div>

    </section>

<!--/Page Title-->


<!--Sidebar Page Container-->

<div class="sidebar-page-container">

        <div class="auto-container">

            <div class="auto-row">



                <!--Content Side / Blog Sidebar-->

                <div class="content-side">

                    <div class="blog-sidebar">

                        <!-- News Block Three -->

                        <div class="o-news-block">

                            <div class="o-inner-box">

                                <div class="o-image-box">

                                    <figure class="o-image"><a href="blog-single.html"><img src="images/blog-1.jpg" alt=""></a></figure>

                                </div>

                                <div class="o-lower-content">

                                    <ul class="o-post-info">

                                        <li><span class="ion ion-android-person"></span> Admin</li>

                                        <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                                    </ul>    

                                    <h4><a href="blog-single.html">Why Lead Generation Is Key For Business Growth.</a></h4>

                                    <div class="o-text">Lorem ipsum dolor sit amet, consectetur do adipisicing sed do eiusmtempor incididunt labore dolore magna aliqu enim ad minim veniam quis nostrud exercitation.</div>

                                    <div class="o-btn-box"><a href="blog-single.html" class="o-read-more">Read More</a></div>

                                </div>

                            </div>

                        </div>



                        <!-- News Block Three -->

                        <div class="o-news-block">

                            <div class="o-inner-box">

                                <div class="o-image-box">

                                    <figure class="o-image"><a href="blog-single.html"><img src="images/blog-2.jpg" alt=""></a></figure>

                                </div>

                                <div class="o-lower-content">

                                    <ul class="o-post-info">

                                        <li><span class="ion ion-android-person"></span> Admin</li>

                                        <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                                    </ul>    

                                    <h4><a href="blog-single.html">How To Increase In-App Purchases In 2023.</a></h4>

                                    <div class="o-text">Lorem ipsum dolor sit amet, consectetur do adipisicing sed do eiusmtempor incididunt labore dolore magna aliqu enim ad minim veniam quis nostrud exercitation.</div>

                                    <div class="o-btn-box"><a href="blog-single.html" class="o-read-more">Read More</a></div>

                                </div>

                            </div>

                        </div>



                        <!-- News Block Three -->

                        <div class="o-news-block">

                            <div class="o-inner-box">

                                <div class="o-image-box">

                                    <figure class="o-image"><a href="blog-single.html"><img src="images/blog-3.jpg" alt=""></a></figure>

                                </div>

                                <div class="o-lower-content">

                                    <ul class="o-post-info">

                                        <li><span class="ion ion-android-person"></span> Admin</li>

                                        <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                                    </ul>    

                                    <h4><a href="blog-single.html">Voxburner Launches Youth Trends Report 2018.</a></h4>

                                    <div class="o-text">Lorem ipsum dolor sit amet, consectetur do adipisicing sed do eiusmtempor incididunt labore dolore magna aliqu enim ad minim veniam quis nostrud exercitation.</div>

                                    <div class="o-btn-box"><a href="blog-single.html" class="o-read-more">Read More</a></div>

                                </div>

                            </div>

                        </div>



                        <!-- News Block Three -->

                        <div class="o-news-block">

                            <div class="o-inner-box">

                                <div class="o-image-box">

                                    <figure class="o-image"><a href="blog-single.html"><img src="images/blog-4.jpg" alt=""></a></figure>

                                </div>

                                <div class="o-lower-content">

                                    <ul class="o-post-info">

                                        <li><span class="ion ion-android-person"></span> Admin</li>

                                        <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                                    </ul>    

                                    <h4><a href="blog-single.html">International Conference on Art Business</a></h4>

                                    <div class="o-text">Lorem ipsum dolor sit amet, consectetur do adipisicing sed do eiusmtempor incididunt labore dolore magna aliqu enim ad minim veniam quis nostrud exercitation.</div>

                                    <div class="o-btn-box"><a href="blog-single.html" class="o-read-more">Read More</a></div>

                                </div>

                            </div>

                        </div>



                        <!--Styled Pagination-->

                        <ul class="styled-pagination">

                            <li><a href="#">1</a></li>

                            <li><a href="#" class="active">2</a></li>

                            <li><a href="#">3</a></li>

                            <li><a href="#"><span class="icon ion ion-android-arrow-dropright"></span></a></li>

                        </ul>                

                        <!--End Styled Pagination-->

                    </div>

                </div>

                

                <!--Sidebar Side-->

                <div class="sidebar-side">

                    <aside class="sidebar padding-left">

                        

                        <!-- Search -->

                        <div class="sidebar-widget search-box">

                            <form method="post" action="contact.html">

                                <div class="form-group">

                                    <input type="search" name="search-field" value="" placeholder="Search..." required="">

                                    <button type="submit"><span class="icon ion ion-search"></span></button>

                                </div>

                            </form>

                        </div>



                        <!-- Category Widget -->

                        <div class="sidebar-widget categories">

                            <h4 class="sidebar-title">Categories</h4>

                            <div class="widget-content">

                                <!-- Blog Category -->

                                <ul class="blog-categories">

                                    <li><a href="blog-single.html">Insight <span>03</span></a></li>

                                    <li><a href="blog-single.html">Web Design <span>07</span></a></li>

                                    <li><a href="blog-single.html">Travel <span>06</span></a></li>

                                    <li><a href="blog-single.html">Technology <span>02</span></a></li>

                                    <li><a href="blog-single.html">Buisiness <span>06</span></a></li>

                                    <li><a href="blog-single.html">UI/UX <span>09</span></a></li>

                                    <li><a href="blog-single.html">Eventa <span>12</span></a></li>

                                </ul>

                            </div>

                        </div>

                        

                        <!-- Post Widget -->

                        <div class="sidebar-widget popular-posts">

                            <h4 class="sidebar-title">Latest Posts</h4>

                            <div class="widget-content">

                                

                                <article class="post">

                                    <div class="post-inner flex">

                                        <figure class="post-thumb">
                                            <a href="blog-single.html">
                                            <img src="images/post-thumb-1.jpg" alt=""></a>
                                        </figure>
                                           
                                           <div class="post-info-content">
                                        <div class="post-info">January 12, 2023</div>
                                        <div class="text">
                                            <a href="blog-single.html">Why Lead Generation Is Key For Business.</a>
                                        </div>
                                          </div>

                                    </div>

                                </article>

                                

                                <article class="post">

                                    <div class="post-inner flex">

                                        <figure class="post-thumb"><a href="blog-single.html"><img src="images/post-thumb-2.jpg" alt=""></a></figure>

                                         <div class="post-info-content">
                                        <div class="post-info">August 06, 2023</div>
                                        <div class="text"><a href="blog-single.html">How To Increase In-App Purchases In 2023.</a></div>
                                       </div>

                                    </div>

                                </article>



                                <article class="post">

                                    <div class="post-inner flex">

                                        <figure class="post-thumb"><a href="blog-single.html"><img src="images/post-thumb-3.jpg" alt=""></a></figure>
                                         
                                         <div class="post-info-content">
                                        <div class="post-info">March 10, 2023</div>
                                        <div class="text"><a href="blog-single.html">Voxburner Launches Youth Trends Report.</a></div>
                                    </div>

                                    </div>

                                </article>

                            </div>

                        </div>



                        <!-- Tags Widget -->

                        <div class="sidebar-widget popular-tags">

                            <h4 class="sidebar-title">Tags</h4>

                            <div class="widget-content">

                                <a href="#">Event</a>

                                <a href="#">Meetup</a>

                                <a href="#">Conference</a>

                                <a href="#">Meeting</a>

                                <a href="#">Business</a>

                                <a href="#">Seminar</a>

                                <a href="#">Workshop</a>

                                <a href="#">Professionals</a>

                                <a href="#">Eventa</a>

                            </div>

                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </div>



<!--/Sidebar Page Container-->


</body>
</html>