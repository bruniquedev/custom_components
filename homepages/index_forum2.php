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
ul, li {
    list-style: none;
    padding: 0px;
    margin: 0px;
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.text-white {
    color: #fff !important;
}
.text-uppercase {
    text-transform: uppercase !important;
}



.auto-container {
    position: static;
    max-width: 1200px;
    margin: 0 auto;
}

.auto-row {
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
    margin-right: -15px;
    margin-left: -15px;

}


.section-platform{
width: 80%;
    margin: 90px auto 0px auto;
}


.section-platform-content{


}

.paginations{
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
    justify-content: center;
}

.paginations .pagination-item .prevnext {
    font-size: 26px;
    color: #cfd5d7;
    margin-top: 11px;
    display: block;
    margin-left: 20px;
}

.paginations .pagination-item .prevnext i{
    font-size: 40px;    
}

.pagination-item .paginationforum {
    margin: 19px auto;
    padding: 0;
}

.paginationforum li {
    list-style: none;
    display: inline-block;
    margin-left: 20px;
}

.paginationforum li a {
    height: 24px;
    font-size: 14px;
    color: #ffffff;
    background-color: #cfd5d7;
    border-radius: 2px;
    display: block;
    padding: 0 8px;
    line-height: 24px;
}
.paginationforum li a.active, 
.paginationforum li a:hover, 
.paginationforum li a:focus, 
.paginationforum li a:active {
    color: #363838;
    background-color: #ffffff;
    box-shadow: 0 1px 2px #c9cccd;
    text-decoration: none;
}


/*****posts*****/

.platform-posts{
width: 65%;
}
.platform-posts .post-detail {
    background-color: #ffffff;
    border-radius: 2px;
    box-shadow: 0 1px 2px #c9cccd;
    margin-bottom: 20px;
}
.post-detail .post-content-wrap{
 display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
}
.post-content-wrap .userinfo-detail {
    width: 10%;
    padding: 20px 0 15px 15px;
}

.post-content-wrap .avatar {
    width: 37px;
    margin-left: 5px;
    position: relative;
}

.avatar img{
    border-radius: 50%;
    vertical-align: middle;
    border: 0;
}
.avatar .green {
    background-color: #80d3ab;
}
.avatar .red {
    background-color: #f27777;
}
.avatar .yellow {
    background-color: #ecd346;
}
.avatar .status {
    position: absolute;
    right: 0;
    top: 0;
    width: 12px;
    height: 12px;
    line-height: 12px;
    border-radius: 50%;
    border: solid 2px #ffffff;
}
.post-content-wrap .icons {
    width: 48px;
    border-top: solid 1px #f1f1f1;
    margin-top: 12px;
    padding-top: 7px;

}
.post-content-wrap .icons img{
  vertical-align: middle;
    border: 0; 
    width: 22px;  
}

.post-content-wrap .posttext-detail {
    width: 80%;
    padding-right: 30px;
    padding-top: 20px;
    padding-bottom: 15px;
    color: #989c9e;
    font-size: 14px;
    line-height: 25px;
}
.post-content-wrap h2 {
    color: #363838;
    font-size: 18px;
    margin-top: 10px;
    margin-bottom: 10px;
    font-weight: 500;
    line-height: 1.1;
}

.post-content-wrap h2 a {
    color: #363838;
}
p {
    margin: 0 0 10px;
}

.postinfobot {
    border-top: solid 1px #f1f1f1;
    line-height: 50px;
    padding: 0 30px 0 94px;
}

.postinfobot-content .likeblock {
    width: 120px;
}

.up {
    color: #1abc9c;
    font-size: 14px;
}

.up i, .down i {
    font-size: 25px;
    padding-right: 10px;
}

.down {
    color: #db7a7a;
    font-size: 14px;
    margin-left: 20px;
}
.up i, .down i {
    font-size: 25px;
    padding-right: 10px;
}

.postinfobot-content .prev {
    width: 30px;
}
.postinfobot-content .prev a {
    font-size: 18px;
    color: #bdc3c7;
}
.postinfobot-content .prev a i{
    font-size: 25px;
}
.postinfobot-content .posted {
    width: 300px;
    margin-left: 18px;
    font-size: 14px;
    color: #bdc3c7;
}
.postinfobot-content .posted i {
    font-size: 18px;
    color: #bdc3c7;
    padding-right: 8px;
}
.postinfobot .next {
    width: 100%;
    text-align: right;
}

.postinfobot .next a i {
    padding-right: 18px;
    font-size: 25px;
}

.postinfobot .next a {
    font-size: 18px;
    color: #bdc3c7;
}


.post-content-wrap .posttext-detail blockquote {
    border: solid 1px #f1f1f1;
    border-radius: 2px;
    font-size: 14px;
    padding: 18px;
        margin: 0 0 20px;
}

.posttext-detail blockquote .original{
    font-size: 14px;
    color: #bdc3c7;
    display: block;
}


.textwraper {
    background-color: #f1f1f1;
    border-radius: 2px;
    padding: 18px;
}
.postreply {
    font-size: 12px;
    color: #bdc3c7;
    display: block;
}
.textwraper textarea {
    border: none;
    box-shadow: none;
    background-color: #f1f1f1;
    width: 100%;
     outline-width: 0 !important;
        outline: none !important;
    }

    .note-checkbox {
    width: 20px;
}
.note-checkbox input {
    width: 12px;
    box-shadow: none;
    margin-top: 8px;
    border-color: #bdc3c7;
}
.note-checkbox-label{
    color: #bdc3c7;
    font-size: 13px;
    display: inline-block;
    margin-bottom: 5px;
    font-weight: 500;
}

.postinfobot .btn-wrap{
    margin-left: 95px;
}

.smile a {
    margin-right: 20px;
    font-size: 20px;
    color: #bdc3c7;
}

.smile a i{

}

.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.primary-btn {
    background-color: #1abc9c;
    box-shadow: none;
    border-radius: 2px;
    padding: 10px 15px;
    color: #ffffff;
    font-size: 14px;
    border: none;
}



/*******main content two********/
.sidebar-block{

    width: 33%;
    padding-left: 15px;
}

.sidebarblock {
    background-color: #ffffff;
    border-radius: 2px;
    box-shadow: 0 1px 2px #c9cccd;
    margin-bottom: 20px;
}
.sidebarblock h3 {
    color: #363838;
    font-size: 14px;
    margin: 0;
    padding: 20px;
    font-weight: 500;
    line-height: 1.1;
}

.sidebarblock .divline {
    height: 1px;
    line-height: 1px;
    border-bottom: solid 1px #f1f1f1;
}

.sidebarblock .blocktxt {
    font-size: 14px;
    color: #363838;
        padding: 15px;
}

ul.cats {
    margin: 0;
    padding: 0;
}
ul.cats li {
    list-style: none;
    display: block;
    margin: 0;
    padding: 0;
    line-height: 30px;
}
ul.cats li a {
    font-size: 14px;
    color: #363838;
    line-height: 30px;
}

ul.cats .badge {
    background-color: #bdc3c7;
    font-size: 12px;
    color: #ffffff;
    margin-top: 7px;
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-weight: 700;
    line-height: 1;
    vertical-align: baseline;
    white-space: nowrap;
    text-align: center;
    border-radius: 10px;
}
ul.cats li a .badge {
float: right;
}


/*******progress bars********/
table.poll{
    width: 100%;
}

.progressive {
    background-color: #ecf0f1;
    height: 31px;
    border-radius: 2px;
    box-shadow: none;
    margin-bottom: 20px;
}


.progressive-bar {
    font-size: 14px;
    color: #ffffff;
    line-height: 31px;
    text-align: left;
    padding-left: 10px;
    box-shadow: none;
    transition: width .6s ease;
}

.progressive-bar.color1 {
    background-color: #9b59b6;
}
.progressive-bar.color2 {
    background-color: #3498db;
}
.progressive-bar.color3 {
    background-color: #e67e22;
}
.sidebarblock .blocktxt .smal {
    font-size: 12px;
}


.sidebarblock .blocktxt a {
    color: #363838;
}




@media screen and (max-width: 600px){

.paginationforum li {
    margin-left: 12px;
}

.hidden-xs{
    display: none !important;
}
.platform-posts {
    width: 100%;
}

.post-detail .post-content-wrap .userinfo-detail {
    width: 20%;
    padding: 20px 0 15px 6px;
}

.post-detail .post-content-wrap .icons img {
    
    }

.post-detail .post-content-wrap .posttext-detail {
    width: 60%;
    padding-right: 0px;
    }
.post-detail .post-content-wrap .posttext-detail p{
    font-size: 17px;
}

.postinfobot {
    padding: 0 3px 0 10px;
}



.sidebar-block {
    width: 100%;
}

}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {


.paginationforum li {
    margin-left: 7px;
}

.post-detail .post-content-wrap .posttext-detail {
    width: 65%;
}

.platform-posts {
    width: 63%;
}

}





</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  <section class="section-platform">


          


                <div class="section-platform-content">
                    <div class="auto-row">
                        <!--main column 1-->
                        <div class="platform-posts">

                            <!-- POST -->
                            <div class="post-detail">
                                   
                                   <div class="post-content-wrap">

                                    <div class="userinfo-detail post-item-1">
                                        <div class="avatar">
                                            <img src="images/avatar.jpg" alt="">
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon3.jpg" alt="">
                                            <img src="images/icon4.jpg" alt="">
                                            <img src="images/icon5.jpg" alt="">
                                            <img src="images/icon6.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="posttext-detail post-item-2">
                                        <h2><a href="02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                                        <p>Today, we're looking at three particularly interesting stories. Pinterest added a new location-based feature on Wednesday that uses Place Pins as a way to map out vacations and favorite areas. Southwest Airlines is providing Wi-Fi access from gate to gate for $8 per day through an onboard hotspot. And in an effort to ramp up its user base, Google Wallet is offering a debit card that can take out cash from.</p>
                                    </div>

                                </div>
                                 <div class="postinfobot">
                                     
                                     <div class="postinfobot-content flex flex-wrap flex-grow">
                                    <div class="likeblock">
                                        <a href="#" class="up"><i class="ion ion-thumbsup"></i>25</a>
                                        <a href="#" class="down"><i class="ion ion-thumbsdown"></i>3</a>
                                    </div>

                                    <div class="prev">                                        
                                        <a href="#"><i class="ion ion-reply"></i></a>
                                    </div>

                                    <div class="posted"><i class="ion ion-clock"></i> Posted on : 20 Nov @ 9:30am</div>
                                     </div>

                                    <div class="next">                                        
                                        <a href="#"><i class="ion ion-share"></i></a>

                                        <a href="#"><i class="ion ion-flag"></i></a>
                                    </div>

                                </div>
                      
                            </div>
                            <!-- POST -->


                         <!--pagination-->
                        <div class="section-platform-content">
                    <div class="auto-row">
                        <div class="paginations">

                            <div class="pagination-item"><a href="#" class="prevnext"><i class="ion ion-android-arrow-dropleft"></i></a>
                            </div>

                            <div class="pagination-item">
                                <ul class="paginationforum">
                                    <li class="hidden-xs"><a href="#">1</a></li>
                                    <li class="hidden-xs"><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#" class="active">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li class="hidden-xs"><a href="#">9</a></li>
                                    <li class="hidden-xs"><a href="#">10</a></li>
                                    <li><a href="#">1586</a></li>
                                </ul>
                            </div>

                            <div class="pagination-item"><a href="#" class="prevnext last"><i class="ion ion-android-arrow-dropright"></i></a>
                            </div>

                        </div>
                    </div>
                </div>          
                     <!--/pagination-->



                      <!-- POST -->
                            <div class="post-detail">
                                   
                                   <div class="post-content-wrap">

                                    <div class="userinfo-detail post-item-1">
                                        <div class="avatar">
                                            <img src="images/avatar2.jpg" alt="">
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon3.jpg" alt="">
                                            <img src="images/icon4.jpg" alt="">
                                            <img src="images/icon5.jpg" alt="">
                                            <img src="images/icon6.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="posttext-detail post-item-2">
                                        <p>Typography helps you engage your audience and establish a distinct, unique personality on your website. Knowing how to use fonts to build character in your design is a powerful skill, and exploring the history and use of typefaces, as well as typogra....</p>
                                    </div>

                                </div>
                                 <div class="postinfobot">
                                     
                                     <div class="postinfobot-content flex flex-wrap flex-grow">
                                    <div class="likeblock">
                                        <a href="#" class="up"><i class="ion ion-thumbsup"></i>1</a>
                                        <a href="#" class="down"><i class="ion ion-thumbsdown"></i>10</a>
                                    </div>

                                    <div class="prev">                                        
                                        <a href="#"><i class="ion ion-reply"></i></a>
                                    </div>

                                    <div class="posted"><i class="ion ion-clock"></i> Posted on : 20 Nov @ 9:30am</div>
                                     </div>

                                    <div class="next">                                        
                                        <a href="#"><i class="ion ion-share"></i></a>

                                        <a href="#"><i class="ion ion-flag"></i></a>
                                    </div>

                                </div>
                      
                            </div>
                            <!-- POST -->


                            <!-- POST -->
                            <div class="post-detail">
                                   
                                   <div class="post-content-wrap">

                                    <div class="userinfo-detail post-item-1">
                                        <div class="avatar">
                                            <img src="images/avatar3.jpg" alt="">
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon3.jpg" alt="">
                                            <img src="images/icon4.jpg" alt="">
                                            <img src="images/icon5.jpg" alt="">
                                            <img src="images/icon6.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="posttext-detail post-item-2">
                                        <blockquote>
                                            <span class="original">Original Posted by - theguy_21:</span>
                                            Did you see that Dove ad pop up in your Facebook feed this year? How about the Geico camel one? 
                                        </blockquote>
                                        <p>Toronto Mayor Rob Ford does not have a bigger fan than "Anchorman's" Ron Burgundy. In fact, Burgundy wants Ford to be re-elected so much, that he agreed to sing the campaign song Brien. The tune in question ...</p>
                                    </div>

                                </div>
                                 <div class="postinfobot">
                                     
                                     <div class="postinfobot-content flex flex-wrap flex-grow">
                                    <div class="likeblock">
                                        <a href="#" class="up"><i class="ion ion-thumbsup"></i>55</a>
                                        <a href="#" class="down"><i class="ion ion-thumbsdown"></i>12</a>
                                    </div>

                                    <div class="prev">                                        
                                        <a href="#"><i class="ion ion-reply"></i></a>
                                    </div>

                                    <div class="posted"><i class="ion ion-clock"></i> Posted on : 20 Nov @ 9:30am</div>
                                     </div>

                                    <div class="next">                                        
                                        <a href="#"><i class="ion ion-share"></i></a>

                                        <a href="#"><i class="ion ion-flag"></i></a>
                                    </div>

                                </div>
                      
                            </div>
                            <!-- POST -->


                            <!-- POST -->
                            <div class="post-detail">
                                   
                                   <div class="post-content-wrap">

                                    <div class="userinfo-detail post-item-1">
                                        <div class="avatar">
                                            <img src="images/avatar4.jpg" alt="">
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon3.jpg" alt="">
                                            <img src="images/icon4.jpg" alt="">
                                            <img src="images/icon5.jpg" alt="">
                                            <img src="images/icon6.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="posttext-detail post-item-2">
                                       
                                     <div class="textwraper">
                                                <div class="postreply">Post a Reply</div>
                                                <textarea name="reply" id="reply" placeholder="Type your message here"></textarea>
                                            </div>

                                    </div>

                                </div>
                                 <div class="postinfobot flex flex-wrap flex-grow">

                                    <div class="note-checkbox">
                                      <input type="checkbox" name="note" id="note">
                                        </div>

                                        <div class="note-checkbox-label">
                                            <label for="note"> Email me when some one post a reply</label>
                                        </div> 

                                    <div class="btn-wrap flex flex-wrap">
                                <div class="smile"><a href="#"><i class="ion ion-android-add-circle"></i></a></div>
                                <div class="reply-btn"><button type="submit" class="btn primary-btn">Post Reply</button></div>
                                        </div>

                                </div>
                      
                            </div>
                            <!--/ POST -->


                            <!--pagination-->

                                  <div class="section-platform-content">
                    <div class="auto-row">
                        <div class="paginations">

                            <div class="pagination-item"><a href="#" class="prevnext"><i class="ion ion-android-arrow-dropleft"></i></a>
                            </div>

                            <div class="pagination-item">
                                <ul class="paginationforum">
                                    <li class="hidden-xs"><a href="#">1</a></li>
                                    <li class="hidden-xs"><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#" class="active">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li class="hidden-xs"><a href="#">9</a></li>
                                    <li class="hidden-xs"><a href="#">10</a></li>
                                    <li><a href="#">1586</a></li>
                                </ul>
                            </div>

                            <div class="pagination-item"><a href="#" class="prevnext last"><i class="ion ion-android-arrow-dropright"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                            <!--/pagination-->
                            

                           
                           
                        </div>
                         <!--/main column 1-->


                        <!--main column 2-->
                        <div class="sidebar-block">

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Categories</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                        <li><a href="#">Trading for Money <span class="badge">20</span></a></li>
                                        <li><a href="#">Vault Keys Giveway <span class="badge">10</span></a></li>
                                        <li><a href="#">Misc Guns Locations <span class="badge">50</span></a></li>
                                        <li><a href="#">Looking for Players <span class="badge">36</span></a></li>
                                        <li><a href="#">Stupid Bugs &amp; Solves <span class="badge">41</span></a></li>
                                        <li><a href="#">Video &amp; Audio Drivers <span class="badge">11</span></a></li>
                                        <li><a href="#">2K Official Forums <span class="badge">5</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Poll of the Week</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <p>Which game you are playing this week?</p>
                                        <table class="poll">
                                            <tbody><tr>
                                                <td>
                                                    <div class="progressive">
                                                        <div class="progressive-bar color1" style="width: 90%">
                                                            Call of Duty Ghosts
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progressive">
                                                        <div class="progressive-bar color2" style="width: 63%">
                                                            Titanfall
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progressive">
                                                        <div class="progressive-bar color3" style="width: 75%">
                                                            Battlefield 4
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    <p class="smal">Voting ends on 19th of October</p>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>My Active Threads</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Who Wins in the Battle for Power on the Internet?</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">FedEx Simplifies Shipping for Small Businesses</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
                                </div>
                            </div>


                        </div>
                        <!--/main column 2-->
                    </div>
                </div>



            
            


            </section>




</body>
</html>