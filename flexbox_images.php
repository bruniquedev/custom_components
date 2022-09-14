<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.flexbox{
position: relative;
display: flex;
flex-direction: row;
width: 100%;
max-height: 80vh;
}

.container{
  cursor: pointer;
  width: 34%;
  max-height: 70vh;
  display:block;
  text-align: center;

}

.image-category{
  width: 100%;
  opacity: 1;
  max-height: inherit;
  transition:  0.5s;
  overflow: hidden;
}

.image-description{
  transform: translateY(-50vh);
  font-size: 25px;
  font-family: 'Comic Sans MS';
  font-weight: 900;
  opacity: 0;
  transition:  0.6s;
}

.container:hover .image-description{
  opacity: 100;
}

.container:hover .image-category{
  opacity: 0.6;
}

</style>
</head>
<body>


<div class="flexbox" id="flex">

        <div class="container" id="box1">
          <img class="image-category" id="product3" src="polo1.jpg">
          <div class="image-description">
            <p class="description">Example 1</p>
          </div>
        </div>

        <div class="container" id="box2">
          <img class="image-category" id="product2" src="polo1.jpg">
          <div class="image-description">
            <p class="description">Example 2</p>
          </div>
        </div>

        <div class="container" id="box3">
          <img class="image-category" id="product3" src="polo1.jpg">
          <div class="image-description">
            <p class="description">Example 3</p>
          </div>

</div>




</body>
</html>