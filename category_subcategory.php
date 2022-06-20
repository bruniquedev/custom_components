<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<title>Category subcategory</title>
<style>

/*styling a cool design*/
.category_nav {
    float: left;
    width: 270px;
}
.category_nav .category_header {
    padding: 15px;
    display: block;
    text-transform: uppercase;
    background: #36B363;
    color: #FFF;
    font-weight: 700;
}
.category_nav .category_header>i {
    float: right;
    line-height: 20px;
}

/*real one starts here*/

.category_nav .category_list {
    position: absolute;
    width: 268px;
    background-color: #FFF;
    border-left: 1px solid #DADADA;
    border-right: 1px solid #DADADA;
    border-bottom: 1px solid #DADADA;
    z-index: 50;
    -webkit-transition: 0.3s all;
    transition: 0.3s all;
}
.category_list {
    margin-bottom: 10%;
}

.category_nav .category_list>li {
   height: 30px;

}
.category_nav .category_list>li+li {
    /*border-top: 1px solid #DADADA;*/

}
.category_nav .category_list>li>a {
    display: block;
    padding: 6px;
    /* text-transform: uppercase; */
}

.category_nav .category_list>li>a:hover,
 .category_nav .category-list>li>a:focus{
    color: #F8694A;
  }

  .category_list li a{
    text-decoration: none;
    color: #000;
  }

.category_nav .category_list>li.drop-down>.drop-down-toggle>i {
    float: right;
    line-height: 20px;
}

.drop-down a{
   box-shadow: 0 2px 5px #ccc;
background: #fff;
margin-top: 10px;
  transition: 0.5s;
    border-radius: .25rem!important;
}

.drop-down a:hover {
  color: #30323a;
    transform: scale(1);
  transition: 0s;
}

.drop-down-toggle {
  color: #000;
  padding: 5px;
  font-size: 16px;
  border: none;

}
.custom_menu {
  display: none;
    position: relative;
    padding: 15px;
    background: #FFF;
    -webkit-box-shadow: 0px 6px 12px rgb(0 0 0 / 18%);
    box-shadow: 0px 6px 12px rgb(0 0 0 / 18%);
    z-index: 1;
    top: 100%;
    min-width: 200px;
    -webkit-transition: 0.3s all;
    transition: 0.3s all;
     transition: transform .3s ease-out;
}

.drop-down.side-dropdown>.custom_menu {
    border-left: 2px solid #F8694A;
    left: 100%;
    top: -30px;
    width: 250px;
    -webkit-transform: translate(15px, 0px);
    -ms-transform: translate(15px, 0px);
    transform: translate(15px, 0px);

}

.list_links li > a {
    position: relative;
    display: inline-block;
    /* text-transform: uppercase; */
    padding: 2px 0px;
    -webkit-transition: 0.3s all;
    transition: 0.3s all;
}
ul, ol {
    margin: 0;
    padding: 0;
    list-style: none;
}
.drop-down-content .list_links li a {
  color: black;
  padding: 5px 16px;
  text-decoration: none;
  display: block;
}

.drop-down:hover .drop-down-content,.drop-down:hover .custom_menu {
  display: block;
  transform: translate(0px, 0px);
}
.drop-down:hover .drop-down-toggle {color: #f8694a;}
.drop-down-content a:hover {background-color: #ddd;}


</style>
</head>
<body>  


<div class="category_nav">
<span class="category_header">Categories <i class="fa fa-list"></i></span>
<ul class="category_list">

<li class="drop-down side-dropdown">
  <a class="drop-down-toggle">Hand Tools<i class="fa fa-angle-right"></i></a>
  <div class="drop-down-content custom_menu">
    <h3 style="font-size:14px;" class="list-links-title">Hand Tools</h3>
    <ul class="list_links">
    <li><a href="#">Link 1</a></li>
    <li><a href="#">Link 2</a></li>
    <li><a href="#">Link 3</a></li>
  </ul>
  </div>
</li>

<li class="drop-down side-dropdown">
  <a class="drop-down-toggle">Sweater pants<i class="fa fa-angle-right"></i></a>
  <div class="drop-down-content custom_menu">
    <h3 style="font-size:14px;" class="list-links-title">Sweater pants</h3>
    <ul class="list_links">
    <li><a href="#">pants 1</a></li>
    <li><a href="#">pants 2</a></li>
    <li><a href="#">pants 3</a></li>
  </ul>
  </div>
</li>

<li class="drop-down side-dropdown">
  <a class="drop-down-toggle">Shirts<i class="fa fa-angle-right"></i></a>
  <div class="drop-down-content custom_menu">
    <h3 style="font-size:14px;" class="list-links-title">Shirts</h3>
    <ul class="list_links">
    <li><a href="#">Shirt 1</a></li>
    <li><a href="#">Shirt 2</a></li>
    <li><a href="#">Shirt 3</a></li>
  </ul>
  </div>
</li>

<li class="drop-down side-dropdown">
  <a class="drop-down-toggle">Trousers<i class="fa fa-angle-right"></i></a>
  <div class="drop-down-content custom_menu">
    <h3 style="font-size:14px;" class="list-links-title">Trousers</h3>
    <ul class="list_links">
    <li><a href="#">Trouser 1</a></li>
    <li><a href="#">Trouser 2</a></li>
    <li><a href="#">Trouser 3</a></li>
  </ul>
  </div>
</li>

<li class="drop-down side-dropdown">
  <a class="drop-down-toggle">bikers<i class="fa fa-angle-right"></i></a>
  <div class="drop-down-content custom_menu">
    <h3 style="font-size:14px;" class="list-links-title">bikers</h3>
    <ul class="list_links">
    <li><a href="#">biker 1</a></li>
    <li><a href="#">biker 2</a></li>
    <li><a href="#">biker 3</a></li>
  </ul>
  </div>
</li>

<li><a href="products.php">View All</a></li>
</ul>
</div>













</body>
</html>