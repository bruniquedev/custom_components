<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body, p {
    color: #777;
    font: 400 0.875rem/1.375rem "Open Sans",sans-serif;
}

.hero_container {
    position: relative;
    background-size: cover!important;
}

.hero_container h1 {
    margin-bottom: 1rem;
    color: #f1f1f8;
}

.hero_container p{
  overflow-wrap: break-word;
}

.hero_container .text-container {
    margin-bottom: 3rem;
}

.hero_container .hero_container-content {
    padding-top: 8.5rem;
    padding-bottom: 7rem;
    text-align: center;
}

.hero_container .p-large {
    margin-bottom: 2rem;
}
.p-hero_container {
    color: #fff;
}

.p-large {
    font: 400 1rem/1.5rem "Open Sans",sans-serif;
}

.hero_container .btn-solid-lg {
    margin-right: .5rem;
    margin-bottom: 1.25rem;
}
.btn-solid-lg {
    display: inline-block;
    padding: 1.375rem 2.625rem;
    border: .125rem solid #fff;
    border-radius: 2rem;
    color: #fff;
    font: 700 0.75rem/0 "Open Sans",sans-serif;
    text-decoration: none;
    transition: all .2s ease;
}

.btn-solid-lg .fab.fa-google-play, .btn-solid-reg .fab.fa-google-play, .btn-outline-reg .fab.fa-google-play {
    font-size: 1rem;
}
.btn-solid-lg .fab, .btn-solid-reg .fab, .btn-outline-reg .fab {
    margin-right: .5rem;
    font-size: 1.25rem;
    line-height: 0;
    vertical-align: top;
}
a.btn-solid-lg:hover{
  text-decoration: none;
  background-color: #fff;
}

.animator_{
visibility: visible;
 animation-delay: 0.3s;
  animation-name: fadeInUp;
}



@media (min-width: 992px){
.hero_container .hero_container-content {
    padding-bottom: 1.1rem;
    text-align: left;
}

.hero_container .text-container {
    margin-top: 0rem;
}
}
@media (min-width: 768px){
.hero_container .hero_container-content {
    padding-top: 0rem;
}
h1 {
    font: 700 3.25rem/3.75rem "Open Sans",sans-serif;
}
}

@media (min-width: 1200px){
.hero_container .text-container {
    margin-top: 1.5rem;
    margin-left: 1rem;
}
.hero_container .image-container {
    margin-left: 3rem;
}

}



</style>
</head>
<body>


<div id="hero_container" class="hero_container" style="background: url(header-01.png) center center no-repeat;">
<div class="hero_container-content">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="text-container">
<h1 class="animator_"> LANDING PAGE FOR </h1>
<p class="p-large p-hero_container animator_"> AppVim is one of the easiest and feature-packed marketing app landing page in the market. Get it today! </p>
<a class="btn-solid-lg animator_" href=" https://apple.com "><i class="fab fa-apple"></i>APP STORE</a>
<a class="btn-solid-lg animator_" href=" https://play.google.com"><i class="fab fa-google-play"></i>PLAY STORE</a>
</div>
</div> 
<div class="col-md-6">
<div class="image-container">
<img class="img-fluid" src="hero-1.png">
</div> 
</div> 
</div> 
</div> 
</div> 
</div>




</body>
</html>