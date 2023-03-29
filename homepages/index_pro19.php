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


/********news article section *********/
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

.blog-single .single-news-block {
    margin-bottom: 0;
}

.blog-single .single-news-block .single-inner-box {
    box-shadow: none;
    background-color: #ffffff;
}
.single-news-block .single-image {
    overflow: hidden;
    margin-bottom: 0;
    margin: 0px;
}

.single-news-block .single-image img {
    display: block;
    width: 100%;
     max-width: 100%;
    height: auto;
        vertical-align: middle;
    border-style: none;
}
.blog-single .single-lower-content {
    padding: 20px 0 0;
}
.single-news-block .single-post-info {
    margin-bottom: 10px;
}
.single-news-block .single-post-info li {
    display: inline-block;
    font-size: 14px;
    line-height: 24px;
    color: #777777;
    font-weight: 400;
    margin-right: 25px;
}
.single-news-block .single-post-info li span {
    margin-right: 5px;
    color: #1d95d2;
}
.blog-single h2 {
    font-size: 28px;
    line-height: 1.2em;
    font-weight: 600;
    color: #222222;
    margin-bottom: 15px;
}

.blog-single .single-lower-content p {
    font-size: 17px;
    line-height: 30px;
    margin-bottom: 30px;
    color: #888888;
    font-weight: 400;
}

.blog-single .single-lower-content blockquote {
    position: relative;
    padding: 35px 40px;
    padding-left: 95px;
    background-color: #fafafa;
    margin: 45px 0;
}
.blog-single .single-lower-content blockquote .icon {
      position: absolute;
    left: 40px;
    top: 40px;
    font-size: 30px;
    line-height: 1em;
    color: #f20487;
}
.blog-single .single-lower-content blockquote p {
    font-size: 20px;
    line-height: 32px;
    color: #7f8897;
    font-weight: 400;
    margin-bottom: 15px;
}

.blog-single .single-lower-content blockquote cite {
        position: relative;
    display: block;
    font-size: 15px;
    line-height: 30px;
    color: #f20487;
    font-weight: 400;
    font-style: normal;
    padding-left: 30px;
}

.blog-single .single-lower-content blockquote cite:before {
    position: absolute;
    left: 0;
    top: 14px;
    height: 1px;
    width: 20px;
    background-color: #f20487;
    content: "";
}
/******** end news article section  *********/


/********  section share  *********/
.blog-single .post-share-options {
    margin-bottom: 65px;
    border-top: 2px solid #eeeeee;
    padding-top: 30px;
}
.blog-single .post-share-options .pull_left{
width: 50%;
}
.blog-single .post-share-options .pull_right{
width: 30%;
}

.blog-single .post-share-options .tags li {
    display: inline-block;
    margin-right: 5px;
}

.blog-single .post-share-options .tags a {
    display: inline-block;
    font-size: 14px;
    line-height: 20px;
    border: 1px solid #dddddd;
    color: #7f8897;
    padding: 5px 20px;
    font-weight: 500;
    transition: all 300ms ease;
}

.social-icon-three li {
    display: inline-block;
    margin-left: 30px;
    margin-bottom: 10px;
}
.social-icon-three li a {
    display: block;
    line-height: 30px;
    text-align: center;
    font-size: 16px;
    transition: all 300ms ease;
    cursor: pointer;
    color: #f20487;
    }
    .social-icon-three li a:hover {
    color: #222222;
}

.social-icon-three li a .ion{
    font-size: 20px;
}

/******** end section share  *********/


/******** comment section  *********/
.comments-area {
    margin-bottom: 70px;
}
.group-title {
    margin-bottom: 40px;
}
.group-title h3 {
    display: inline-block;
    font-size: 28px;
    line-height: 1.2em;
    color: #222222;
    font-weight: 500;
}
.comments-area .comment-box {
    margin-bottom: 50px;
}
.comments-area .comment {
    position: relative;
    min-height: 50px;
    padding-left: 70px;
}
.comments-area .comment-box .author-thumb {
    position: absolute;
    left: 0px;
    top: 0px;
    height: 50px;
    width: 50px;
    margin-bottom: 20px;
    border-radius: 50%;
    overflow: hidden;
    background-color: #7d7d7d;
}
.comments-area .comment-box .author-thumb img {
    width: 100%;
    display: block;
        max-width: 100%;
    height: auto;
        vertical-align: middle;
    border-style: none;
}
.comments-area .comment-info {
    display: block;
    margin-bottom: 5px;
    font-size: 16px;
    line-height: 25px;
    font-weight: 700;
    color: #12114a;
}
.comments-area .comment-box .name {
    display: inline-block;
    font-size: 16px;
    line-height: 25px;
    font-weight: 700;
    color: #12114a;
    margin-right: 10px;
}

.comments-area .comment-box .position-company {
    display: inline-block;
    font-size: 14px;
    line-height: 24px;
    color: #777777;
    font-weight: 400;
    margin-left: 10px;
}

.comments-area .comment-box .text {
    font-size: 15px;
    line-height: 26px;
    color: #888888;
    font-weight: 400;
}
.comment .btn-wrap{
       margin-top: 20px; 
}
.comments-area .comment-box .reply-btn {

    font-size: 14px;
    line-height: 20px;
    padding: 5px 20px;
}
.btn-style-one {
    color: #ffffff;
    font-weight: 400;
    text-align: center;
    background-color: #ec167f;
    overflow: hidden;
    border-radius: 10px;
}
.btn-style-one:hover {
background-color: #fff;
color: #ec167f;
border:1px solid #ec167f;
}
.comment-form .form-group {
    margin-bottom: 20px;
}

.comment-form .col-group-1 {
width: 45%;
    margin-right: 56px;

    }
    .comment-form .col-group-2 {
    width: 46%;
    }
.comment-form .form-group input[type="text"],
 .comment-form .form-group input[type="email"],
  .comment-form .form-group textarea,
   .comment-form .form-group select{
    display: block;
    height: 30px;
    width: 100%;
    font-size: 14px;
    color: #878787;
    line-height: 28px;
    font-weight: 400;
    padding: 10px 20px;
    background-color: #ffffff;
    border: 1px solid #999999;
        transition: all 300ms ease;
        outline-width: 0 !important;
        outline: none !important;
}
  .comment-form .form-group textarea {
    height: 190px;
    resize: none;
}  
.comment-form .form-group input[type="submit"],
 .comment-form .form-group button {
    font-size: 15px;
    padding: 10px 30px;
    font-weight: 500;
    cursor: pointer;
    border: none;
}
.btn-style-one:hover {
    color: #ec167f;
    box-shadow: 0 10px 30px rgba(0,0,0,0.10);
    border: 1px solid #ec167f !important;
}
/******** end comment section  *********/




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

    .blog-single .post-share-options .pull_left {
    width: 100%;
}
.blog-single .post-share-options .pull_right {
    width: 100%;
    margin-top: 20px;
}
.social-icon-three li a .ion {
    font-size: 28px;
}

.comment-form .col-group-1,.comment-form .col-group-2{
    width: 100%;
    margin-right: 0;
}

.comment-form .form-group input[type="text"],
 .comment-form .form-group input[type="email"],
  .comment-form .form-group textarea,
   .comment-form .form-group select{
    width: 85%;
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

.blog-single .post-share-options .pull_left {
    width: 100%;
}
.blog-single .post-share-options .pull_right {
    width: 100%;
    margin-top: 20px;
}
    .comment-form .col-group-1,.comment-form .col-group-2{
    width: 100%;
    margin-right: 0;
}

}





</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>

<!--Page Title-->
  <section class="m-page-title" style="background-image:url(images/5.jpg);">

        <div class="auto-container">

            <h1>Blog Single</h1>

            <ul class="m-bread-crumb">

                <li><a href="index.html">Home</a></li>

                <li>Blog Single</li>

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

                <div class="blog-single">

                         <!-- News Block Three -->

                        <div class="single-news-block">

                            <div class="single-inner-box">

                                <div class="single-image-box">

                        <figure class="single-image"><img src="images/blog-1.jpg" alt=""></figure>

                                </div>

                                <div class="single-lower-content">

                                    <ul class="single-post-info">

                                        <li><span class="ion ion-android-person"></span> Admin</li>

                                        <li><span class="ion ion-chatbubbles"></span> Comment 03</li>

                                    </ul>    

                                    <h2>Why Lead Generation Is Key For Business Growth.</h2>

                                    <p>Sed quia conse quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

                                    <blockquote>

                                        <span class="icon ion ion-quote"></span>

                                        <p>It's crazy, but the things you love, prospective buyers might hate—and that means you might have a hard time unloading your home when it comes time to sell. Here's how to choose wisely</p>

                                        <cite> David Leo</cite>

                                    </blockquote>

                                    <p>or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                                </div>

                            </div>

                        </div>
                  <!--/ News Block Three -->


                         <!-- Other Options -->

                        <div class="post-share-options flex flex-wrap flex-grow">

                            <div class="pull_left">

                                <ul class="tags">

                                    <li><a href="#">Eventa</a></li>

                                    <li><a href="#">Conference</a></li>

                                    <li><a href="#">Business</a></li>

                                </ul>                               

                            </div>



                            <div class="social-icon-three pull_right">

                                <ul class="social-icon-three">

                                    <li><a href="#"><span class="ion ion-social-facebook"></span></a></li>

                                    <li><a href="#"><span class="ion ion-social-twitter"></span></a></li>

                                    <li><a href="#"><span class="ion ion-social-vimeo"></span></a></li>

                                    <li><a href="#"><span class="ion ion-social-linkedin"></span></a></li>

                                </ul>

                            </div>

                        </div>

                    

                        <!-- Comments Area -->

                        <div class="comments-area">

                            <div class="group-title">

                                <h3>Comments 02</h3>

                            </div>

                            <div class="comment-box">

                                <div class="comment">

                                    <div class="author-thumb"><img src="images/thumb-1.jpg" alt=""></div> 

                                    <div class="comment-info">

                                        <div class="name">Kavin smith</div> -

                                        <div class="position-company">CEO CHI ART PRO</div>

                                    </div>      

                                    <div class="text">Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehiculaa,Duis lacus </div>
                                     
                                     <div class="btn-wrap">
                                    <a href="#" class="reply-btn theme-btn btn-style-one"><span class="btn-title">Reply</span></a>
                                </div>

                                </div>

                            </div>



                            <div class="comment-box">

                                <div class="comment">

                                    <div class="author-thumb"><img src="images/thumb-2.jpg" alt=""></div> 

                                    <div class="comment-info">

                                        <div class="name">Lean Guimares</div> -

                                        <div class="position-company">CEO CHI ART PRO</div>

                                    </div>      

                                    <div class="text">Codswallop down the pub Queen's English tomfoolery the BBC owt to do with me do one Elizabeth I don't want no agro show off show?</div>
                                    
                                    <div class="btn-wrap">
                                    <a href="#" class="reply-btn theme-btn btn-style-one"><span class="btn-title">Reply</span></a>
                                </div>

                                </div>

                            </div>

                        </div>



                        <!--Comment Form-->

                        <div class="comment-form">

                            <div class="group-title">

                                <h3>Leave a comment</h3>

                            </div>

                            <form method="post" action="blog.html"> 

                                <div class="row-group flex flex-wrap flex-grow">

                                    <div class="col-group-1 form-group">

                                        <input type="text" name="username" placeholder="Name" required="">

                                    </div>

                                    
                                    <div class="col-group-2 form-group">

                                        <input type="email" name="email" placeholder="Email" required="">

                                    </div>

                                </div>



                                    <div class="col-group-100 form-group">

                                        <textarea name="message" placeholder="Your Comments"></textarea>

                                    </div>

                                    

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">

                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Post Comment</span></button>

                                    </div>

                                

                            </form>

                        </div>

                    </div>







                

                </div>
          <!--/Content Side / Blog Sidebar-->
                

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