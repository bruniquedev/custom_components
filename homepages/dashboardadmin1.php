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


.iu-section{
margin-top: 60px;
}
.iu-layout-wrap{
    width: 95%;
     margin: 0 auto 0 auto;   
}

.iu-layout-cell{
    max-width: 100%;
    min-width: 100%;
    
}


/*----card ui dashboard example---*/
.ui-card{

    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 0.25rem;
    box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);
    border: none;
    margin-bottom: 1.875rem;
    transition: all .3s ease;
    border-bottom: 1px solid rgba(234,243,253,.9);
}

.ui-card-body {
    padding: 1.25rem;
}


.ui-icon-rounded {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    position: relative;
    text-align: center;
    background-color: rgba(115,108,199,.4);
        margin-right: 20px!important;
        float: left!important;
}


.ui-icon-rounded i.ion {
    font-size: 24px;
    padding-top: 12px;
    color: #736cc7;
    display: inline-block;
}

.ui-card-title{
    margin-bottom: 5px!important;
    color: #4d5a68;
    font-size: 1.2rem;
    font-weight: 400;
    letter-spacing: .02em;
    line-height: 1.2;
    margin-top: 0px;
}

.ui-text-label{
    margin-top: 10px!important;
        font-size: .975rem;
        font-weight: 400;
        letter-spacing: .02em;
            margin-bottom: 0.5rem;
            line-height: 1.2;
} 

.ui-text-muted {
    color: #839bb3!important;
}

.ui-progress {
    font-size: .75rem;
    display: flex;
    background-color: #f0f6ff;
    border-radius: 30px;
    margin-top: 1.5rem!important;
}

.ui-progress-bar {
        display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    transition: width .6s ease;
    background-color: #736cc7;
}
.ui-bg-primary {
    background-color: #736cc7!important;
}
.ui-bg-accent {
    background-color: #F64A91!important;
}
.ui-bg-info {
    background-color: #399AF2!important;
}
.ui-bg-success {
    background-color: #2fbfa0!important;
}

small {
    font-size: 100%;
    font-weight: 400;
}


.ui-text-small{
    margin-top: 5px!important;
    margin-bottom: 1rem!important;
    float: left!important;
}
.ui-append-percent{
    margin-top: 5px!important;
    margin-bottom: 1rem!important;
    float: right!important;
}
/*----/card ui dashboard example---*/


/*----timeline ui dashboard example---*/
.ui-card .ui-card-header {
    padding: 15px 20px;
    position: relative;
    border-bottom: 1px solid rgba(234,243,253,.9);
    background-color: transparent;
    min-height: 45px;
    font-weight: 300;
    font-size: 1rem;
    margin-bottom: 0;
}

.ui-timeline-border {
    border-left: 1px solid #e5ebf8;
}
.ui-timeline, .ui-timeline .ui-timeline-list {
    position: relative;
    border-color: #e5ebf8;
}
.ui-timeline .ui-timeline-list {
    padding-bottom: 1px;
    margin-left: -1px;
}

.ui-timeline .ui-timeline-list .ui-timeline-info {
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: .975rem;
}

.ui-timeline-text {
    display: inline-block!important;
}
.ui-sm-text{
  float: right!important;  
}

.ui-timeline .ui-timeline-list:before {
    display: flex;
    content: " ";
}
.ui-timeline .ui-timeline-list:after {
    /* display: table; */
    position: absolute;
    top: 14px;
    left: 0;
    width: 12px;
    height: 12px;
    margin-left: -7px;
    content: "";
    border-width: 1px;
    border-style: solid;
    border-color: inherit;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 0 3px #e5ebf8 inset;
}

.ui-timeline-info {
    border-color: #399AF2!important;
}
.ui-timeline-info:after {
    box-shadow: 0 0 0 3px #399AF2 inset!important;
}

.ui-timeline-primary {
    border-color: #736cc7!important;
}
.ui-timeline-primary:after {
    box-shadow: 0 0 0 3px #736cc7 inset!important;
}

.ui-timeline-accent {
    border-color: #F64A91!important;
}
.ui-timeline-accent:after {
    box-shadow: 0 0 0 3px #F64A91 inset!important;
}

.ui-timeline-success {
    border-color: #2fbfa0!important;
}
.ui-timeline-success:after {
    box-shadow: 0 0 0 3px #2fbfa0 inset!important;
}

.ui-timeline-warning {
    border-color: #FFCE67!important;
}
.ui-timeline-warning:after {
    box-shadow: 0 0 0 3px #FFCE67 inset!important;
}

/*----/timeline ui dashboard example---*/


/*----another ui dashboard example---*/

.ui-c-body{
    padding: 0!important;
}

.ui-card .ui-card-toolbar {
    position: absolute;
}

.ui-card .ui-card-toolbar{
    right: 20px;
    top: 17px;
}
.ui-nav{
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end!important;
        padding-left: 0;
    margin-bottom: 0;
    margin-top: 0;
    list-style: none
}

ul.ui-nav li {
    font-size: .875rem;
}
.ui-nav .ui-nav-item .ui-nav-link {
    color: rgba(255,255,255,.5);
}

.ui-card .ui-card-toolbar .ui-nav .ui-nav-link {
    font-size: .875rem;
    padding: 7px 16px;
        transition: all .15s ease;
        border-radius: 50px;
        display: block;
}

.ui-nav .ui-nav-item .ui-nav-link:hover {
    color: #fff;
}

.ui-nav .ui-nav-item .ui-nav-link.active{
    color: #fff;
    background-color: rgba(0,0,0,.1);
}
.card-title-h{
    color: #fff!important;
    border: none!important;
    padding-left: 20px!important;
    padding-top: 20px!important;
    margin-bottom: 0!important;
}
.card-title-count{
color: #fff!important;
font-size: 2rem!important;
font-weight: 300!important;
padding-left: 20px!important;
}

/*----/another ui dashboard example---*/



    /*----------component colors----------*/
    .ui-list-reset {
    margin: 0;
    padding: 0;
    list-style: none;
}

.ui-list-reset-item {
    padding-bottom: 5px!important;
}
ul li.ui-list-reset-item {
    font-size: .975rem;
}

a.ui-default-color{
    display: flex;
}
a.ui-default-color, a.ui-default-color:link, a.ui-default-color:visited {
    color: #617182;
}

.ui-badge.ui-badge-circle {
    border-radius: 100%;
    font-size: .6875rem;
    font-weight: 400;
    line-height: 1.6;
    padding: 5px 5px;
    text-align: center;
    vertical-align: middle;
        height: 15px;
        width: 15px;
        margin-right: 5px;
        white-space: nowrap;
}

.ui-badge-dark {
    color: #fff;
    background-color: #343a40;
}
.ui-badge-secondary {
    color: #fff;
    background-color: #788db4;
    }
.ui-badge-primary {
    color: #fff;
    background-color: #736cc7;
}
.ui-badge-accent {
    color: #fff;
    background-color: #F64A91;
}
.ui-badge-danger {
    color: #fff;
    background-color: #ff5c75;
    }
  .ui-badge-info {
    color: #fff;
    background-color: #399AF2;
    } 
    .ui-badge-warning {
        color: #fff;
    background-color: #FFCE67;
}
.ui-badge-success {
    color: #fff;
    background-color: #2fbfa0;
    }

 /*----------/component colors----------*/



 /*--------component another-------*/  
.ui-card-body .ui-text-title{
    line-height: 1.5em;
    font-size: 1.75rem;
    margin-bottom: 0.5rem;
    font-weight: 500;
    margin-top: 0;
}

.ui-card-body .ui-text-muted.ui-text-d {
    color: #636c72!important;
}
.ui-card-body .ui-text-d {
margin-top: 0;
    margin-bottom: 1rem;
    font-size: 17px;
}
.ui-progress-x{
 display: flex;
    overflow: hidden;
    font-size: .75rem;
    line-height: 1rem;
    text-align: center;
    background-color: #eceeef;
    border-radius: 0.25rem;   
margin-bottom: 5px;
    }
    .ui-progress-bar-x{
      height: 1rem;
    color: #fff;
    box-shadow: none;

    } 
    .ui-progress-bar-info{
        background-color: #03a9f4;
    }


.ui-text-small{
 font-size: 14px;
    color: #424242;   
}

  /*--------/component another-------*/  


 /*---------another component-----------*/
.ui-card-header-container{
    color: #424242;
    padding: 0 0 10px 0;
    position: relative;
    box-shadow: none;
    margin-bottom: 0;
    border-radius: 0;
    margin: 20px;
        background-color: #fff;
}

.ui-card-header-container .ui-title-2 {
    margin: 0;
    font-size: 16px;
    font-weight: normal;
    color: #212121;
    text-transform: uppercase;
    line-height: 1.5em;
}

.ui-card-list {
    padding: 0;
    margin: 0;
}

.ui-card-list li {
    display: block;
    padding: 15px 0px;
    border-bottom: 1px solid rgba(120,130,140,0.13);
    line-height: 27px;
}

.ui-label {
    padding: 2px 10px;
    text-transform: uppercase;
    font-size: 14px;
    color: #fff;
    border-radius: 2px;
    float: right;
        background-color: #9e9e9e;
}
.ui-label-danger {
    background-color: #f44336;
}
.ui-label-success {
    background-color: #4caf50;
}
.ui-label-info {
    background-color: #03a9f4;
}
.ui-label-warning {
    background-color: #fbc02d;
}

/*---------/ another component-----------*/

    /*--------component---------*/
.ui-col-content .ui-h4{
font-weight: 700!important;
    margin-bottom: 0!important;
    margin-top: 10px;
    font-size: 18px !important;
    line-height: 32px;
    margin: 0px 0 16px;
        padding: 0;
}
.ui-col-content .ui-text-span{
font-weight: 700!important;
margin-bottom: 0!important;
}

.ui-text-wrapper{
color: #919aa3 !important;
margin-bottom: 0!important;
margin-top: 1rem!important;
font-size: 14px;
    letter-spacing: 0;
    margin: 0 0 16px;
    font-weight: 400;
    line-height: 24px;
    padding: 0;
}

.ui-text-success{
 color: #28a745;   
}

.ui-text-nowrap {
    white-space: nowrap!important;
}

.ui-col-green{
color: #28a745 !important;
}
 /*--------/component---------*/


   /*-------Another component--------*/  

.ui-card-box {
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    border-radius: 10px;
    position: relative;
    margin-bottom: 20px;
    border: 1px solid #deebfd;
    box-shadow: -8px 12px 18px 0 #dadee8;
}

.ui-card-head {
    border-radius: 2px 2px 0 0;
    border-bottom: 1px dotted rgba(0, 0, 0, 0.2);
    padding: 2px;
    color: #3a405b;
    font-size: 14px;
    font-weight: 600;
    line-height: 40px;
    min-height: 40px;
}

.ui-card-head header {
    display: inline-block;
    padding: 11px 20px;
    vertical-align: middle;
    line-height: 17px;
    font-size: 14px;
    letter-spacing: 1px;
}

.ui-card-row{
display: flex;
    flex-wrap: wrap;    
}

ul.ui-ListWindow {
    list-style-type: none;
    padding: 0 10px;
    height: 430px;
    overflow: hidden;
    font-size: 14px;
    line-height: 24px;
    font-weight: 400;
    letter-spacing: 0;
    margin-bottom: 1rem;
}

ul.ui-ListWindow li {
    display: inline-block;
    width: 100%;
    border-bottom: 1px dashed #dcdcdc;
    margin-bottom: 11px;
    padding-bottom: 11px;
}

ul.ui-ListWindow li .prog-avatar {
    width: 40px;
    height: 40px;
    float: left;
    margin-right: 25px;
}

ul.ui-ListWindow li .prog-avatar img {
    width: 100%;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}
img{
    vertical-align: middle;
}

.ui-title-x a {
    text-shadow: none;
    color: #337ab7;
    text-decoration: none;
}

.clsAvailable {
    color: #0cc745;
    font-size: 13px;
    font-weight: 600;
}
.clsNotAvailable {
    color: #ff0000;
    font-size: 13px;
    font-weight: 600;
}
.clsOnLeave {
    color: #32c5d2;
    font-size: 13px;
    font-weight: 600;
}
.full-width {
    width: 100% !important;
}
.text-center {
    text-align: center!important;
}

/*-------/Another component--------*/ 

@media screen and (max-width: 600px){


}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

}





</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>

<section class="iu-section">
    <div class="iu-layout-wrap">
  
  <!--////////////////////////-->
<div class="ui-col">
 <div class="ui-card">   
<div class="ui-card-body">
<div class="ui-icon-rounded">
<i class="ion ion-stats-bars"></i>
</div>
<h5 class="ui-card-title  ui-counter">5,627</h5>
<h6 class="ui-text-label ui-text-muted">
Active Sessions
</h6>
<div class="ui-progress ui-progress-active-sessions" style="height:7px;">
<div class="ui-progress-bar bg-primary"  style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<small class="ui-text-muted ui-text-small">
Change
</small>
<small class="ui-text-muted  ui-counter ui-append-percent" data-count="72">72%</small>
</div>
</div>
</div>
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->




<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<div class="ui-col">
<div class="ui-card ui-bg-primary" id="ui-card-container">
<div class="ui-card-body ui-c-body">
    <div class="ui-card-toolbar">
        <ul class="ui-nav" id="ui-nav-tab">

            <li class="ui-nav-item">
                <a class="ui-nav-link active" id="ui-link-1" data-toggle="pill" href="#ui-link-1">Week</a>
            </li>
               <li class="ui-nav-item">
                <a class="ui-nav-link" id="ui-link-2" data-toggle="pill" href="#ui-link-2">Month</a>
            </li>
               <li class="ui-nav-item">
                <a class="ui-nav-link" id="ui-link-3" data-toggle="pill" href="#ui-link-3">Year</a>
            </li>

        </ul>
    </div>
    <h5 class="ui-card-title card-title-h">Total Visits</h5>
    <div class="ui-tab-content" id="ui-tab-content">
        <div class="ui-tab-pane ui-fade" id="ui-tab-1">
            <span class="card-title card-title-count">3,233</span>
        </div>
   

    </div>
</div>
</div>
</div>
 <!--////////////////////////-->






 <!--////////////////////////-->
 <div class="ui-col">
<div class="ui-card">
<h5 class="ui-card-header">Audit Log</h5>
<div class="ui-card-body">
    <div class="ui-timeline ui-timeline-border">

        <div class="ui-timeline-list">
            <div class="ui-timeline-info">
                <div class="ui-timeline-text">Server pending</div>
                <small class="ui-sm-text ui-text-muted">Now</small>
            </div>
        </div>

        <div class="ui-timeline-list ui-timeline-border ui-timeline-primary">
            <div class="ui-timeline-info">
                <div class="ui-timeline-text">Delivery complete</div>
                <small class="ui-sm-text ui-text-muted">10min.</small>
            </div>
        </div>
        <div class="ui-timeline-list  ui-timeline-border ui-timeline-accent">
            <div class="ui-timeline-info">
                <div class="ui-timeline-text">Delivery processing</div>
                <small class="ui-sm-text ui-text-muted">1hr.</small>
            </div>
        </div>
        <div class="ui-timeline-list  ui-timeline-border ui-timeline-success">
            <div class="ui-timeline-info">
                <div class="ui-timeline-text">Payment recorded</div>
                <small class="ui-sm-text ui-text-muted">11:22am</small>
            </div>
        </div>
        <div class="ui-timeline-list  ui-timeline-border ui-timeline-warning">
            <div class="ui-timeline-info">
                <div class="ui-timeline-text">Order complete</div>
                <small class="ui-sm-text ui-text-muted">9:30AM</small>
            </div>
        </div>
        <div class="ui-timeline-list  ui-timeline-border ui-timeline-info">
            <div class="ui-timeline-info">
                <div class="ui-timeline-text">Product quantities updated</div>
                <small class="ui-sm-text ui-text-muted">9:27am</small>
            </div>
        </div>
        <div class="ui-timeline-list  ui-timeline-border ui-timeline-info">
            <div class="ui-timeline-info">
                <div class="ui-timeline-text">Ticket #627 Closed</div>
                <small class="ui-sm-text ui-text-muted">8:02am</small>
            </div>
        </div>
        <div class="ui-timeline-list  ui-timeline-border ui-timeline-info">
            <div class="ui-timeline-info">
                <div class="ui-timeline-text">Cache cleared</div>
                <small class="ui-sm-text ui-text-muted">6:00am</small>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->






 <!--////////////////////////-->


 <div class="ui-col">
<div class="ui-card">
<div class="ui-card-header">Colors</div>
<div class="ui-card-body">
    <ul class="ui-list-reset">

        <li class="ui-list-reset-item">
            <a href="javascript:void(0)" class="ui-default-color">
                <i class="ui-badge ui-badge-dark ui-badge-circle"></i>
                <span>
                    Black
                </span>
            </a>
        </li>
        <li class="ui-list-reset-item"><a href="javascript:void(0)" class="ui-default-color">
            <i class="ui-badge ui-badge-secondary ui-badge-circle"></i>
            <span>
                Grey
            </span>
        </a>
    </li>
    <li class="ui-list-reset-item"><a href="javascript:void(0)" class="ui-default-color">
        <i class="ui-badge ui-badge-primary ui-badge-circle"></i>
        <span>
            Purple
        </span>
    </a>
</li>
<li class="ui-list-reset-item"><a href="javascript:void(0)" class="ui-default-color">
    <i class="ui-badge ui-badge-accent ui-badge-circle"></i>
    <span>
        Pink
    </span>
</a>
</li>
<li class="ui-list-reset-item"><a href="javascript:void(0)" class="ui-default-color">
<i class="ui-badge ui-badge-danger ui-badge-circle"></i>
<span>
    Red
</span>
</a>
</li>
<li class="ui-list-reset-item"><a href="javascript:void(0)" class="ui-default-color">
<i class="ui-badge ui-badge-info ui-badge-circle"></i>
<span>
Blue
</span>
</a>
</li>
<li class="ui-list-reset-item"><a href="javascript:void(0)" class="ui-default-color">
<i class="ui-badge ui-badge-warning ui-badge-circle"></i>
<span>
Yellow
</span>
</a>
</li>
<li class="ui-list-reset-item"><a href="javascript:void(0)" class="ui-default-color">
<i class="ui-badge ui-badge-success ui-badge-circle"></i>
<span>
Green
</span>
</a>
</li>
</ul>
</div>
</div>
</div>
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->




<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<div class="ui-col">
<div class="ui-card">
<div class="ui-card-body">
    <h3 class="ui-text-title">1,100</h3>
    <p class="ui-text-muted ui-text-d">New Admission</p>
    <div class="ui-progress-x">
        <div class="ui-progress-bar-x ui-progress-bar-info"  aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
    </div>
    <span class="ui-text-small">10% higher than last month</span> </div>
</div>
</div>
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->



<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<div class="ui-col">
<div class="ui-card">
<div class="ui-card-header-container">
    <h2 class="ui-title-2">Attendance</h2>

</div>
<div class="ui-card-body">
    <ul class="ui-card-list">
        <li class="card-list-item">Mark Otto <span class="ui-label-danger ui-label">21%</span></li>
        <li class="card-list-item">Jacob Thornton <span class="ui-label-purple ui-label">50%</span></li>
        <li class="card-list-item">Jacob Thornton<span class="ui-label-success ui-label">90%</span></li>
        <li class="card-list-item">M. Arthur <span class="ui-label-info ui-label">75%</span></li>
        <li class="card-list-item">Jacob Thornton <span class="ui-label-warning ui-label">60%</span></li>
        <li class="card-list-item">M. Arthur <span class="ui-label-success ui-label">91%</span></li>
    </ul>
</div>
</div>
</div>
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->



<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div class="ui-col">
<div class="ui-card">
<div class="ui-card-body">
<div class="ui-col-content">
    <h4 class="ui-h4">Appointments</h4>
    <span class="ui-text-span ui-col-green">450</span>
</div>
<p class="ui-text-wrapper">
    <span class="ui-text-success"><i class="ion ion-android-arrow-up"></i> 10%</span>
    <span class="ui-text-nowrap">Since last month</span>
</p>
</div>
</div>
</div>
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->




<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<div class="ui-col">
<div class="ui-card ui-card-box">
<div class="ui-card-head">
    <header>Users List</header>
</div>
<div class="ui-card-body">
    <div class="ui-card-row">
        <ul class="ui-ListWindow">
            <li>
                <div class="prog-avatar">
                    <img src="images/doc1.jpg" alt="" width="40" height="40">
                </div>
                <div class="ui-details-x">
                    <div class="ui-title-x">
                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                    </div>
                    <div>
                        <span class="clsAvailable">Available</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="prog-avatar">
                    <img src="images/doc2.jpg" alt="" width="40" height="40">
                </div>
                <div class="ui-details-x">
                    <div class="ui-title-x">
                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                    </div>
                    <div>
                        <span class="clsAvailable">Available</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="prog-avatar">
                    <img src="images/doc1.jpg" alt="" width="40" height="40">
                </div>
                <div class="ui-details-x">
                    <div class="ui-title-x">
                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                    </div>
                    <div>
                        <span class="clsNotAvailable">Not Available</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="prog-avatar">
                    <img src="images/doc2.jpg" alt="" width="40" height="40">
                </div>
                <div class="ui-details-x">
                    <div class="ui-title-x">
                        <a href="#">Dr.Jay Soni</a> - (BHMS)
                    </div>
                    <div>
                        <span class="clsOnLeave">On Leave</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="prog-avatar">
                    <img src="images/doc1.jpg" alt="" width="40" height="40">
                </div>
                <div class="ui-details-x">
                    <div class="ui-title-x">
                        <a href="#">Dr.Jacob Ryan</a> - (MBBS,MS)
                    </div>
                    <div>
                        <span class="clsNotAvailable">Not Available</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="prog-avatar">
                    <img src="images/doc2.jpg" alt="" width="40" height="40">
                </div>
                <div class="ui-details-x">
                    <div class="ui-title-x">
                        <a href="#">Dr.Megha Trivedi</a> - (MBBS,MS)
                    </div>
                    <div>
                        <span class="clsAvailable">Available</span>
                    </div>
                </div>
            </li>
        </ul>
        <div class="text-center full-width">
            <a href="#">View all</a>
        </div>
    </div>
</div>
</div>
</div>
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->






</div>
</section>



</body>
</html>