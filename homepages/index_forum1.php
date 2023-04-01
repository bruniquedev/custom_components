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
    margin: 50px auto 0px auto;
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
.platform-posts .post {
    background-color: #ffffff;
    border-radius: 2px;
    box-shadow: 0 1px 2px #c9cccd;
    margin-bottom: 20px;
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
}
.post .userinfo {
    width: 10%;
    padding: 20px 0 15px 15px;
}

.post .avatar {
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
.post .icons {
    width: 48px;
    border-top: solid 1px #f1f1f1;
    margin-top: 12px;
    padding-top: 7px;

}
.post .icons img{
  vertical-align: middle;
    border: 0; 
    width: 22px;  
}

.post .posttext {
    width: 68%;
    padding-right: 30px;
    padding-top: 20px;
    padding-bottom: 15px;
    color: #989c9e;
    font-size: 14px;
    line-height: 25px;
}
.post h2 {
    color: #363838;
    font-size: 18px;
    margin-top: 10px;
    margin-bottom: 10px;
    font-weight: 500;
    line-height: 1.1;
}

.post h2 a {
    color: #363838;
}
p {
    margin: 0 0 10px;
}

.post .postinfo {
    width: 12%;
    border-left: solid 1px #f1f1f1;
}
.post .comments {
    border-bottom: solid 1px #f1f1f1;
    padding: 18px 0 25px 0;
    text-align: center;
}

.post .comments .commentbg {
    background-color: #bdc3c7;
    border-radius: 2px;
    display: inline-block;
    padding: 12px 17px;
    color: #ffffff;
    font-size: 14px;
    position: relative;
}

.post .comments .commentbg .mark {
    width: 11px;
    height: 11px;
    background-color: #bdc3c7;
    position: absolute;
    bottom: 0;
    left: 43%;
    margin-bottom: -5px;
    transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}
.post .views {
    border-bottom: solid 1px #f1f1f1;
    color: #9da6aa;
    font-size: 15px;
    text-align: center;
    line-height: 29px;
}
.post .views i {
    font-size: 20px;
}
.post .time {
    color: #9da6aa;
    font-size: 15px;
    text-align: center;
    line-height: 29px;
}

.post .time i {
    font-size: 17px;
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

.post .userinfo {
    width: 20%;
    padding: 20px 0 15px 6px;
}

.post .icons img {
   /* width: auto;*/
    }

.post .posttext {
    width: 60%;
    padding-right: 0px;
    }
.post .posttext p{
    font-size: 17px;
}


    .post .postinfo {
    width: 17%;
}
.post .comments .commentbg {
    padding: 5px 10px;
}

.post .time {
    font-size: 14px;
}
.post .time i {
    font-size: 17px;
}
.post .views {
  font-size: 14px;  
}
.post .views i {
    font-size: 20px;
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

.post .posttext {
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


                <div class="section-platform-content">
                    <div class="auto-row">
                        <!--main column 1-->
                        <div class="platform-posts">

                            <!-- POST -->
                            <div class="post">

                                    <div class="userinfo post-item-1">
                                        <div class="avatar">
                                            <img src="images/avatar.jpg" alt="">
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon1.jpg" alt=""><img src="images/icon4.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="posttext post-item-2">
                                        <h2><a href="02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                                    </div>
                                 
                                <div class="postinfo post-item-3">
                                    <div class="comments">
                                        <div class="commentbg">
                                            560
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="ion ion-eye"></i> 1,568</div>
                                    <div class="time"><i class="ion ion-clock"></i> 24 min</div>                                    
                                </div>
                            </div>
                            <!-- POST -->


                           <!-- POST -->
                            <div class="post">

                                    <div class="userinfo post-item-1">
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

                                    <div class="posttext post-item-2">
                                        <h2><a href="02_topic.html">What Instagram Ads Will Look Like</a></h2>
                                        <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below..</p>
                                    </div>
                                 
                                <div class="postinfo post-item-3">
                                    <div class="comments">
                                        <div class="commentbg">
                                            460
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="ion ion-eye"></i> 1,568</div>
                                    <div class="time"><i class="ion ion-clock"></i> 24 min</div>                                    
                                </div>
                            </div>
                            <!-- POST -->

                            <!-- POST -->
                            <div class="post">

                                    <div class="userinfo post-item-1">
                                        <div class="avatar">
                                            <img src="images/avatar3.jpg" alt="">
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon1.jpg" alt=""><img src="images/icon4.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="posttext post-item-2">
                                        <h2><a href="02_topic.html">The Future of Magazines Is on Tablets</a></h2>
                                        <p>Eric Schmidt has seen the future of magazines, and it's on the tablet. At a Magazine Publishers Association..</p>
                                    </div>
                                 
                                <div class="postinfo post-item-3">
                                    <div class="comments">
                                        <div class="commentbg">
                                            70
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="ion ion-eye"></i> 1,568</div>
                                    <div class="time"><i class="ion ion-clock"></i> 24 min</div>                                    
                                </div>
                            </div>
                            <!-- POST -->

                            <!-- POST -->
                            <div class="post">

                                    <div class="userinfo post-item-1">
                                        <div class="avatar">
                                            <img src="images/avatar4.jpg" alt="">
                                            <div class="status yellow">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon1.jpg" alt=""><img src="images/icon4.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="posttext post-item-2">
                                        <h2><a href="02_topic.html">Pinterest Now Worth $3.8 Billion</a></h2>
                                        <p>Pinterest's valuation is closing in on $4 billion after its latest funding round of $225 million, according to a report..</p>
                                    </div>
                                 
                                <div class="postinfo post-item-3">
                                    <div class="comments">
                                        <div class="commentbg">
                                            660
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="ion ion-eye"></i> 1,568</div>
                                    <div class="time"><i class="ion ion-clock"></i> 24 min</div>                                    
                                </div>
                            </div>
                            <!-- POST -->

                           
                             <!-- POST -->
                            <div class="post">

                                    <div class="userinfo post-item-1">
                                        <div class="avatar">
                                            <img src="images/avatar.jpg" alt="">
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon1.jpg" alt=""><img src="images/icon4.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="posttext post-item-2">
                                        <h2><a href="02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                                        <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                                    </div>
                                 
                                <div class="postinfo post-item-3">
                                    <div class="comments">
                                        <div class="commentbg">
                                            560
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="ion ion-eye"></i> 1,568</div>
                                    <div class="time"><i class="ion ion-clock"></i> 24 min</div>                                    
                                </div>
                            </div>
                            <!-- POST -->


                           <!-- POST -->
                            <div class="post">

                                    <div class="userinfo post-item-1">
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

                                    <div class="posttext post-item-2">
                                        <h2><a href="02_topic.html">What Instagram Ads Will Look Like</a></h2>
                                        <p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below..</p>
                                    </div>
                                 
                                <div class="postinfo post-item-3">
                                    <div class="comments">
                                        <div class="commentbg">
                                            460
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="ion ion-eye"></i> 1,568</div>
                                    <div class="time"><i class="ion ion-clock"></i> 24 min</div>                                    
                                </div>
                            </div>
                            <!-- POST -->
                            

                            

                           
                           
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


            </section>




</body>
</html>