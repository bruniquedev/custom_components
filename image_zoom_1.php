<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Image zoom</title>

<style>
div.zoom {
 
  background-position: 50% 50%;
  background-repeat: no-repeat;
  position: relative;
  width: 500px;
  overflow: hidden;
  cursor: zoom-in;

}

 .img_pic:hover {
    opacity: 0;

  }
  .img_pic{
    transition: opacity .5s;
    display: block;
    width: 100%;
  }

</style>
</head>
<body>  


<div class="zoom" style="background-image: url(polo1.jpg)" onmousemove="zoom(event)"
onmouseleave="zoomOut(event)">
  <img class="img_pic" src="polo1.jpg" alt="img_pic" />
</div>



<script type="text/javascript">
function zoom(e){
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = offsetX/zoomer.offsetWidth*100
  y = offsetY/zoomer.offsetHeight*100
  zoomer.style.backgroundPosition = x + '% ' + y + '%';
  zoomer.style.transform= 'scale(1.5)';
}
function zoomOut(e){
  var zoomer = e.currentTarget;
  zoomer.style.transform= 'none';
}  

</script>
</body>
</html>