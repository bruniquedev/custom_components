<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>seat4</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style type="text/css">
      
      #room {
  position:relative;
  width:200px;
  height:200px;
}
#table {
  background:blue;
  position:absolute;
  width:100%;
  height:100%;
}
.chair {
  background:red;
  position:absolute;
  width:10px;
  height:10px;
}

    </style>

  </head>
  <body>

<div id="room">
  <div id="table"></div>
</div>

    <script type="text/javascript">
      
var $chair = $('<div class="chair">');
var $room = $('#room');
var top = 0;
var left = 0;
var stepSize = 20;

var createChairs = function(amount) {
  for (var i = 0; i < amount; i++) {
     var newChair = $chair.clone();
     newChair.css({top: top, left: left});
     $room.append(newChair);
     left = left + stepSize;
  }
}

createChairs(10);

    </script>
  </body>
</html>