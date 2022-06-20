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
/* (A) OUTER WRAPPER */
#zoomBOut {
  /* (A1) DIMENSIONS */
  width: 600px;
  height: 338px;
 
  /* (A2) HIDE SCROLLBARS */
  overflow: hidden;
}
 
/* (B) INNER WRAPPER */
#zoomBIn {
  /* (B1) FIT OUTER WRAPPER */
  width: 100%;
  height: 100%;
 
  /* (B2) BACKGROUND IMAGE */
  background-image: url("vlcsnapa.png");
  background-position: center;
  background-size: cover;
 
  /* (B3) ANIMATE ZOOM */
  transition: transform ease 0.3s;
}
 
/* (C) ZOOM ON HOVER */
#zoomBIn:hover { transform: scale(1.2); }

</style>
</head>
<body>  

<div id="zoomBOut">
  <div id="zoomBIn"></div>
</div>


</body>
</html>