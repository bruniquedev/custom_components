<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>



.main_content{
  /*background:url(../images/vlcsnapc.png) top center no-repeat; */
  padding:45px 0; text-align:center;

}

.main_content .col-md-3{
    margin:0 4%;
     border-top:63px solid #125688;
 -moz-border-radius:10px;
 /* box-shadow: 0px 20px 30px 3px rgba(0, 0, 0, 0.55);*/
 box-shadow: 0px 4px 4px #ddd;
 }
.main_content .col-md-3 p{margin:25px 10px;}
.main_content .col-md-3 a.heading-link{

     bottom:103%;
      left:17%;
       color:#fff;
       position: absolute;
   }
.main_content > button{
    background:none;
     border:none;
      color:#fff;
       font-size:24px;
         margin:68px 71px 0 0; 
     } 
.main_content > button:hover{
    border-bottom:3px solid #fff;
     }


.main_content .ion{
  font-size: 60px;
}


@media screen and (max-width:900px){
    .main_content{text-align:center;background-repeat:repeat-y;}
    .main_content .col-md-3{
        padding-top:5%;
margin-top:15%;
    }

}

/*//////////making columns of the same size/////////////*/
.row_section {
    display: table;
}
.row_section [class*="col-"] {
    float: none;
    display: table-cell;
    vertical-align: top;
}
/*//////////end making columns of the same size/////////////*/

.services-box-item {
  border: 1px solid #e6e6e6;
    background:#fcfcfc;
    -webkit-box-shadow: 0 2px 0 rgba(0,0,0,0.03);
    -moz-box-shadow: 0 2px 0 rgba(0,0,0,0.03);
    box-shadow: 0 2px 0 rgba(0,0,0,0.03);
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  background-color: #222;
  }


  .services-box-item .list-group-item{
    position: unset;
    font-family: "Myriad-Regular";
    font-size: 14px!important;
    font-weight: 600;
    text-align: left;
  }

  .service-button{
    text-align: center;
    background: #333333;
    border: none;
    border-radius: 0;
    padding: 8px 18px;
    color: #fff;  
  }
  .service-button:hover{
    color: #fff;
  }
  #services-custom{
    font-family: "Myriad-Regular";
    font-size: 15px!important;
    font-weight: 600;
    text-align: justify;
  }



</style>
</head>
<body>


 <div class="row row_section main_content">

<div class="col-md-3">
<a href="#" class="heading-link"><h3>SERVICES</h3></a>
<div class="icon">
<i class="ion-settings ion"></i>
<!--<img src="images/1.png" />-->
</div>
<ul class="list-group services-box-item">
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item"><a href="/contact-us" class="btn btn-medium btn-theme service-button">
<i class="icon-bolt"></i> Get in touch with us >>></a></li>
</ul>
</div>


<div class="col-md-3">
<a href="#" class="heading-link"><h3>OUR CUSTOMERS
</h3></a>
<div class="icon">
<i class="ion-settings ion"></i>
<!--<img src="images/1.png" />-->
</div>
<ul class="list-group services-box-item">
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>

<li class="list-group-item"><a href="/contact-us" class="btn btn-medium btn-theme service-button">
<i class="icon-bolt"></i> Get in touch with us >>></a></li>
</ul>
</div>


<div class="col-md-3">
<a href="#" class="heading-link"><h3>SPECIALS
</h3></a>
<div class="icon">
<i class="ion-settings ion"></i>
<!--<img src="images/1.png" />-->
</div>
<ul class="list-group services-box-item">
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>
<li class="list-group-item">Technical ICT services and solutions. <a href="'.$route_name.'">Read more...</a></li>

<li class="list-group-item"><a href="/contact-us" class="btn btn-medium btn-theme service-button">
<i class="icon-bolt"></i> Get in touch with us >>></a></li>
</ul>
</div>






</div>



</body>
</html>