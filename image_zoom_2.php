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
#zoomC {
  /* (A) DIMENSIONS */
  width: 600px;
  height: 338px;
  cursor: zoom-in;
  /* (B) BACKGROUND IMAGE */
  background: url("polo1.jpg");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
</style>
</head>
<body>  

<div id="zoomC"></div>


<script type="text/javascript">
// CREDITS : https://www.cssscript.com/image-zoom-pan-hover-detail-view/
var addZoom = (target) => {
  // (A) GET CONTAINER + IMAGE SOURCE
  let container = document.getElementById(target),
      imgsrc = container.currentStyle || window.getComputedStyle(container, false);
      imgsrc = imgsrc.backgroundImage.slice(4, -1).replace(/"/g, "");
 
  // (B) LOAD IMAGE + ATTACH ZOOM
  let img = new Image();
  img.src = imgsrc;
  img.onload = () => {
    // (B1) CALCULATE ZOOM RATIO
    let ratio = img.naturalHeight / img.naturalWidth,
        percentage = ratio * 100 + "%";
 
    // (B2) ATTACH ZOOM ON MOUSE MOVE
    container.onmousemove = (e) => {
      let rect = e.target.getBoundingClientRect(),
          xPos = e.clientX - rect.left,
          yPos = e.clientY - rect.top,
          xPercent = xPos / (container.clientWidth / 100) + "%",
          yPercent = yPos / ((container.clientWidth * ratio) / 100) + "%";
 
      Object.assign(container.style, {
        backgroundPosition: xPercent + " " + yPercent,
        backgroundSize: img.naturalWidth + "px",
        transform : 'scale(1.5)'
      });
    };
 
    // (B3) RESET ZOOM ON MOUSE LEAVE
    container.onmouseleave = (e) => {
      Object.assign(container.style, {
        backgroundPosition: "center",
        backgroundSize: "cover",
        transform : 'none'
      });
    };
  }
};
 
// (C) ATTACH FOLLOW ZOOM
window.onload = () => { addZoom("zoomC"); };
 
</script>
</body>
</html>