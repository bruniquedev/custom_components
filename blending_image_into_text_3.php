<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>1</title>
<style>

.bg-blend {
  background-image: url(building.jpg);
  background-color: red;
  background-blend-mode: multiply;
}

.normal-image {
  background-image: url(building.jpg);
}

.just-color {
  background: red;
}

body {
  padding: 20px;
}
.demo > div {
  float: left;
  width: 200px;
  height: 200px;
  background-size: cover;
}
.demo {
  width: 600px;
  overflow: hidden;
}
.screencap {
  width: 600px;
}

</style>
</head>
<body>  




<h2>Live demo:</h2>

<div class="demo">
  <div class="just-color">
  </div>

  <div class="normal-image">
  </div>

  <div class="bg-blend">
  </div>
</div>

<h2>Should look like:</h2>

<img class="screencap" src="blend-example-1.png">






</body>
</html>