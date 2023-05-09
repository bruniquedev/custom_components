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




/*///////////custom  responsive table /////////////*/

.custom_card {
  padding: 0px 0px 0px 0px;
  text-decoration: none;
  font-size: 15px;
  color: #30323a;
  box-shadow: 0 2px 5px #ccc;
  width: 100%;
  background: #fff;
  transition: 0.5s;
  margin-top: 0px;
      border-radius: .25rem!important;
}
.table-container {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  /*table-layout: fixed;*/
      color: #333;
      font-size: 14px;
}

.table-container caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

.table-container tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
      background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
}

.table-container tr:not(.thead):hover {
    transition: none;
    background-color: #f0f7ff;
    cursor: pointer;
}

.table-container tr:not(.thead) > * {
    border-bottom: 1px solid #eee;
}

.table-container th,
.table-container td {
  padding: .625em;
  text-align: left;
      border: 1px solid #eee;
}


.table-darker{
    background-color: #22262E !important;
    color: #eee!important;
}
.table-light{
    /*background-color: #ddeeff !important;*/
    background-color: #e5ebf1 !important;
    color: #424040!important;

}

.table-darker th{
border-color: #424040 !important;
}
.table-light th{
border-color:#eee;
    }

.table-container th {
  font-size: .90em;
  letter-spacing: .1em;
text-transform: capitalize;
 font-weight: 500;
}

  .table-container-icon {
    padding: 5px;
    font-size: 40px;
    width: 35px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    color: #31581f;
}

.table-container-title {
    font-weight: 600;
    text-transform: lowercase;
    font-size: 17px;
}

.table-container-text{
font-weight: 700;
margin: 0px;
}

.table-container-text-bold{
    padding: 2px;
    font-weight: 700;
    font-family: "Myriad-Regular";
    color: #333333;
    /*font-size: 17px;*/
    line-height: 1.3;
}


@media screen and (max-width: 800px) {
  .table-container {
    border: 0;
  }

  .table-container caption {
    font-size: 1.3em;
  }
  
  .table-container thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  .table-container tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }

  .table-container th, .table-container td {
    border: none;
}
  
  .table-container td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  .table-container td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  .table-container td:last-child {
    border-bottom: 0;
  }

ul.dropdown-content-ui{
    right: 0px !important;
    left: unset !important;
}

}

/*///////////end custom responsive tablem  /////////////*/


 /*------my fancy labels----------*/

.label {
    text-shadow: none !important;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    padding: 8px 15px;
    background: #1ebdcc;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25em;
    font-size: 75%;
    display: inline;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.18);
}

.label-info {
    background-color: #659be0 !important;
}
.label-warning {
    background: linear-gradient(45deg, #ffb64d, #ffcb80) !important;
}
.label-success {
    background: linear-gradient(45deg, #2ed8b6, #59e0c5) !important;
}
.label-danger {
    background: linear-gradient(45deg, #ff5370, #ff869a) !important;
}
.label-primary {
    background: linear-gradient(45deg, #4099ff, #73b4ff) !important;
}
/*------my fancy labels----------*/  

/*------my small btns----------*/
.btn-ui {
    display: inline-block;
    font-weight: 600;
    margin-bottom: 0;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
        user-select: none;
    background-image: none;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.18);
    text-decoration: none;
    outline: 0;
    transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
    border-radius: 2px;
    overflow: hidden;
    position: relative;
}

.btn-ui i.ion{
font-size: 15px;
}

.btn-ui.btn-ui-xs {
    font-size: 11px;
    padding: 3px 8px;
}
.btn-ui-success {
    background-color: #54ca68 !important;
    border: 1px solid #54ca68 !important;
    color: #fff !important;
}
.btn-ui-primary {
    background-color: #6777ef !important;
    border: 1px solid #6777ef !important;
    color: #fff !important;
}
.btn-ui-danger {
    background-color: #fc544b !important;
    border: 1px solid #fc544b !important;
    color: #fff !important;
}

.btn-ui-warning {
    background-color: #f0ad4e !important;
    border: 1px solid #f0ad4e !important;
    color: #fff !important;
}
/*------my small btns----------*/   

 /*------my small progress bars----------*/
.ux-progress {
    border: 0;
    background-image: none;
    filter: none;
    box-shadow: none;
    height: 8px;
    border-radius: 10px !important;
    padding: 0px;
    display: flex;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}

.ux-progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #0d6efd;
    transition: width .6s ease;
}
.ux-progress-bar-success {
    background-color: #36c6d3;
}
.ux-progress-bar-warning {
    background-color: #f0ad4e;
}
   .ux-progress-bar-info{ 
    background-color: #0d6efd;
}

.ux-progress-bar-danger {
    background-color: #d9534f;
}
/*------my small progress bars----------*/   


 /*------my small drop down----------*/
.dropdown-ui{
    position: relative;
}

.dropdown-ui .dropdown-btn-ui {  
  border: none;
  outline: none;
  cursor: pointer;
}

.dropdown-btn-ui i.ion{
    margin: 1px;
}

ul.dropdown-content-ui {
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  height: 0px;
 /*display: none;*/
  position: absolute;
      top: 0px;
        left: -32px;
    width: 95px;
      z-index: 5;
  background-color: #f9f9f9;
  padding: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
    transform: translateY(2em);
  transition: all 0.3s;
}

ul.dropdown-content-ui:before{
  content: '';
    width: 10px;
    height: 10px;
    background: #ff7315;
    border: 1px #d5d5d5ee solid;
    display: block;
    border-right: none;
    border-bottom: none;
    transform: translateX(-50%) rotateZ(45deg);
    position: absolute;
    top: -5px;
    left: 49%;
    z-index: 1;
}
ul.dropdown-content-ui li {
 display: block;
  color: black;
  text-decoration: none;
  display: block;
  text-align: left;
}
ul.dropdown-content-ui li a{
  color: black;
      padding: 1px 5px;
      display: block;
}
.dropdown-ui:hover .dropdown-btn-ui {
  background-color: #fff;
  color: #111;
}
ul.dropdown-content-ui li a:hover, ul.dropdown-content-ui li a:hover {
  background-color: #fff;
  color: black !important;
   /*color: #ef9e41 !important;*/
}
ul.dropdown-content-ui li.active, ul.dropdown-content-ui li a.active{
 background-color: #fff !important;
  color: black !important;
}
.dropdown-ui:hover ul.dropdown-content-ui {
  /* display: block;*/
 height: auto;
 visibility: visible; 
  opacity: 1;
  transform: translateY(9%);
  transition-delay: 0s, 0s, 0.3s; /* this removes the transition delay so the menu will be visible while the other styles transition */

}
/*------my small drop down----------*/   

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



<table class="table-container" cellspacing="0" cellpadding="5" style="background: #fff;">
<thead id="tablehead">
<tr class="thead table-light">
<th scope="col" class="center">#</th>
  <th scope="col">Full name</th>
     <th scope="col">Country</th>
  <th scope="col">Category</th>
  <th scope="col">Job</th>
    <th scope="col">Salary</th>
     <th scope="col">Contract</th>
     <th scope="col">Start date</th>
     <th scope="col">End date</th>
     <th scope="col">Days left</th>
       <th scope="col">Case status</th>
   <th scope="col">Office</th>
  <th scope="col">Agent</th>
  <th scope="col" class="no-print">View Report</th>
  <th scope="col" class="no-print">Action</th>

</tr>
</thead>
<tbody id="search-table">

<!--iterate through an array-->
<tr>
<td data-label="#" class="center">1.</td>
<td data-label="Full name">Sekibengo bruno</td>
<td data-label="Country" class="text-truncate">China</td>
<td data-label="Category">Abroad</td>
<td data-label="Job" class="text-truncate">Software engineer</td>
<td data-label="Salary">5M ugsh</td>
<td data-label="Contract">+2 years</td>
<td data-label="Start date">Jan-31-2023</td>
<td data-label="End date">Feb-20-2025</td>
<td data-label="Days left" class="text-truncate">
 654 left  </td>
<td data-label="Case status">Open</td>
<td data-label="Office"><span class="text-truncate">Kampala office branch</span></td>
<td data-label="Agent"><span class="text-truncate">Kanakulya peter</span></td>
<td data-label="Report" class="no-print">
   <a href="/admin-processreport/1/1" class="btn btn-primary btn-xs ">Report</a></td>

<td data-label="Action" class="no-print">
<div class="dropdown-ui">
<button class="btn-ui btn-ui-xs btn-ui-warning dropdown-btn-ui" type="button"> <!--Actions-->
<i class="ion ion-ios-gear-outline"></i>
</button>
<ul class="dropdown-content-ui">
<li><a href="javascript:;"><i class="ion ion-ios-trash"></i>
        Delete </a></li>
<li><a href="javascript:;"><i class="ion ion-edit"></i>
        Edit </a></li>
<li><a href="javascript:;"><i class="ion ion-android-cancel"></i>
        Cancel </a></li>
<li><a href="javascript:;"><i class="ion ion-clock"></i>
        Postpone </a></li>
</ul>
</div>
</td>
</tr>

<tr>
<td data-label="#" class="center">2.</td>
<td data-label="Full name">Mbekeka precious</td>
<td data-label="Country" class="text-truncate">China</td>
<td data-label="Category">Abroad</td>
<td data-label="Job" class="text-truncate">Accountant</td>
<td data-label="Salary">900 SAR</td>
<td data-label="Contract">+2 years</td>
<td data-label="Start date">Feb-09-2023</td>
<td data-label="End date">Feb-20-2025</td>
<td data-label="Days left" class="text-truncate">
 654 left  </td>
<td data-label="Case status">Open</td>
<td data-label="Office"><span class="text-truncate">Mukono office branch</span></td>
<td data-label="Agent"><span class="text-truncate">Mbazira rashid</span></td>
<td data-label="Report" class="no-print">
   <a href="/admin-processreport/2/2" class="btn btn-primary btn-xs ">Report</a></td>

<td data-label="Action" class="no-print">
<div class="dropdown-ui">
<button class="btn-ui btn-ui-xs btn-ui-warning dropdown-btn-ui" type="button"> <!--Actions-->
<i class="ion ion-ios-gear-outline"></i>
</button>
<ul class="dropdown-content-ui">
<li><a href="javascript:;"><i class="ion ion-ios-trash"></i>
        Delete </a></li>
<li><a href="javascript:;"><i class="ion ion-edit"></i>
        Edit </a></li>
<li><a href="javascript:;"><i class="ion ion-android-cancel"></i>
        Cancel </a></li>
<li><a href="javascript:;"><i class="ion ion-clock"></i>
        Postpone </a></li>
</ul>
</div>
</td>
</tr>

<tr>
<td data-label="#" class="center">3.</td>
<td data-label="Full name">Mukiibi Peter</td>
<td data-label="Country" class="text-truncate">Uganda</td>
<td data-label="Category">Citizen</td>
<td data-label="Job" class="text-truncate">Software engineer</td>
<td data-label="Salary">5M ugsh</td>
<td data-label="Contract">+6 months</td>
<td data-label="Start date">Feb-22-2023</td>
<td data-label="End date">Aug-18-2023</td>
<td data-label="Days left" class="text-truncate">
 102 left  </td>
<td data-label="Case status">Open</td>
<td data-label="Office"><span class="text-truncate">Kampala office branch</span></td>
<td data-label="Agent"><span class="text-truncate">Mbazira rashid</span></td>
<td data-label="Report" class="no-print">
   <a href="/admin-processreport/3/3" class="btn btn-primary btn-xs ">Report</a></td>

<td data-label="Action" class="no-print">
<div class="dropdown-ui">
<button class="btn-ui btn-ui-xs btn-ui-warning dropdown-btn-ui" type="button"> <!--Actions-->
<i class="ion ion-ios-gear-outline"></i>
</button>
<ul class="dropdown-content-ui">
<li><a href="javascript:;"><i class="ion ion-ios-trash"></i>
        Delete </a></li>
<li><a href="javascript:;"><i class="ion ion-edit"></i>
        Edit </a></li>
<li><a href="javascript:;"><i class="ion ion-android-cancel"></i>
        Cancel </a></li>
<li><a href="javascript:;"><i class="ion ion-clock"></i>
        Postpone </a></li>
</ul>
</div>
</td>
</tr>

<tr>
<td data-label="#" class="center">4.</td>
<td data-label="Full name">Nakitende Judith</td>
<td data-label="Country" class="text-truncate">China</td>
<td data-label="Category">Abroad</td>
<td data-label="Job" class="text-truncate">Accountant</td>
<td data-label="Salary">2m ugx</td>
<td data-label="Contract">+1 year</td>
<td data-label="Start date">Feb-21-2023</td>
<td data-label="End date">Feb-18-2024</td>
<td data-label="Days left" class="text-truncate">
 286 left  </td>
<td data-label="Case status">Open</td>
<td data-label="Office"><span class="text-truncate">Kampala office branch</span></td>
<td data-label="Agent"><span class="text-truncate">Kanakulya peter</span></td>
<td data-label="Report" class="no-print">
   <a href="/admin-processreport/4/8" class="btn btn-primary btn-xs ">Report</a></td>

<td data-label="Action" class="no-print">
<div class="dropdown-ui">
<button class="btn-ui btn-ui-xs btn-ui-warning dropdown-btn-ui" type="button"> <!--Actions-->
<i class="ion ion-ios-gear-outline"></i>
</button>
<ul class="dropdown-content-ui">
<li><a href="javascript:;"><i class="ion ion-ios-trash"></i>
        Delete </a></li>
<li><a href="javascript:;"><i class="ion ion-edit"></i>
        Edit </a></li>
<li><a href="javascript:;"><i class="ion ion-android-cancel"></i>
        Cancel </a></li>
<li><a href="javascript:;"><i class="ion ion-clock"></i>
        Postpone </a></li>
</ul>
</div>
</td>
</tr>

<tr>
<td data-label="#" class="center">5.</td>
<td data-label="Full name">Sekibengo bruno</td>
<td data-label="Country" class="text-truncate">China</td>
<td data-label="Category">Abroad</td>
<td data-label="Job" class="text-truncate">Software engineer</td>
<td data-label="Salary">600 yen</td>
<td data-label="Contract">+1 year</td>
<td data-label="Start date">Mar-31-2023</td>
<td data-label="End date">Feb-18-2024</td>
<td data-label="Days left" class="text-truncate">
 286 left  </td>
<td data-label="Case status">Open</td>
<td data-label="Office"><span class="text-truncate">Mukono office branch</span></td>
<td data-label="Agent"><span class="text-truncate">Kanakulya peter</span></td>
<td data-label="Report" class="no-print">
   <a href="/admin-processreport/5/1" class="btn btn-primary btn-xs ">Report</a></td>

<td data-label="Action" class="no-print">
<div class="dropdown-ui">
<button class="btn-ui btn-ui-xs btn-ui-warning dropdown-btn-ui" type="button"> <!--Actions-->
<i class="ion ion-ios-gear-outline"></i>
</button>
<ul class="dropdown-content-ui">
<li><a href="javascript:;"><i class="ion ion-ios-trash"></i>
        Delete </a></li>
<li><a href="javascript:;"><i class="ion ion-edit"></i>
        Edit </a></li>
<li><a href="javascript:;"><i class="ion ion-android-cancel"></i>
        Cancel </a></li>
<li><a href="javascript:;"><i class="ion ion-clock"></i>
        Postpone </a></li>
</ul>
</div>
</td>
</tr>

</tbody>
</table>




<div class="margin_top">
<span class="label label-info label-mini">Due</span>
<span class="label label-warning label-mini">Paid</span>
<span class="label label-success label-mini">Due</span>
<span class="label label-danger label-mini">Paid</span>
<span class="label label-primary label-mini">Due</span>
</div>




<div class="margin_top">
<button class="btn-ui btn-ui-success btn-ui-xs"><i class="ion ion-checkmark"></i></button>
<button class="btn-ui btn-ui-primary btn-ui-xs"><i class="ion ion-edit"></i></button>
<button class="btn-ui btn-ui-danger btn-ui-xs"><i class="ion ion-ios-trash"></i></button>
</div>




<div class="margin_top">
<div class="ux-progress margin_top">
<div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="ux-progress-bar ux-progress-bar-success"></div>
</div>
<div class="ux-progress margin_top">
<div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66"  class="ux-progress-bar ux-progress-bar-warning"></div>
</div>
<div class="ux-progress margin_top">
<div style="width: 76%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="76"  class="ux-progress-bar ux-progress-bar-info"></div>
</div>
<div class="ux-progress margin_top">
<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="ux-progress-bar ux-progress-bar-danger"></div>
</div>
</div>




   








</div>
</section>

</body>
</html>