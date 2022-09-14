<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.myflex-container {
  display: flex;
  flex-direction: row;
  font-size: 20px;
  text-align: center;
}

.myflex-item-left,
.myflex-item-right {
  flex: 50%;
  margin: 10px;
}

.img_holder {
  height: 100%;
    width: 175px;
    
    display: block;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    margin-bottom: 0px;
}

.myprod-image {
  height: 74px;
  margin-right: 10px;
}

.myflex-item-left > a,
.myflex-item-right > a {
  display: flex;
  text-decoration: none;
  color: #000;
}

.clickable-card {
  background-color: #fff;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  margin-bottom: 10px;
}

</style>
</head>
<body>


<div class="myflex-container">

  <div class="myflex-item-left">

    <a href="#" class="clickable-card">
      <div class="myprod-image">
        <div style="background-image: url('polo1.jpg');" class="img_holder"></div>
      </div>
      <div class="myprod-description">
        <h5 class="texth5 myprod-name">The main idea is to give the parent flex container</h5>
      </div>
    </a>

     <a href="#" class="clickable-card">
      <div class="myprod-image">
        <div style="background-image: url('polo1.jpg');" class="img_holder"></div>
      </div>
      <div class="myprod-description">
        <h5 class="texth5 myprod-name">London</h5>
      </div>
    </a>

     <a href="#" class="clickable-card">
      <div class="myprod-image">
        <div style="background-image: url('polo1.jpg');" class="img_holder"></div>
      </div>
      <div class="myprod-description">
        <h5 class="texth5 myprod-name">London</h5>
      </div>
    </a>

  

  </div>

  <div class="myflex-item-right">

   <a href="#" class="clickable-card">
      <div class="myprod-image">
        <div style="background-image: url('polo1.jpg');" class="img_holder"></div>
      </div>
      <div class="myprod-description">
        <h5 class="texth5 myprod-name">Chicago</h5>
      </div>
    </a>

       <a href="#" class="clickable-card">
      <div class="myprod-image">
        <div style="background-image: url('polo1.jpg');" class="img_holder"></div>
      </div>
      <div class="myprod-description">
        <h5 class="texth5 myprod-name">Chicago</h5>
      </div>
    </a>

       <a href="#" class="clickable-card">
      <div class="myprod-image">
        <div style="background-image: url('polo1.jpg');" class="img_holder"></div>
      </div>
      <div class="myprod-description">
        <h5 class="texth5 myprod-name">Chicago</h5>
      </div>
    </a>


  
   
  </div>
</div>


</body>
</html>