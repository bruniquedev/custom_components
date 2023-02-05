<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>seat3</title>
    <style type="text/css">
      
.table {
  display: inline-block;
  position: absolute;
  width: 10px;
  height: 10px;
  top: 50%;
  left: 50%;
  background-color: red;
}
.table .chair {
  position: absolute;
  width: 10px;
  height: 10px;
  background-color: blue;
}

    </style>
  </head>
  <body>

<div class="table">
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
  <div class="chair"></div>
</div>

    <script type="text/javascript">
      

/*jslint browser:true*/

(function(doc) {
  "use strict";

  var TABLE_RADIUS = 100;

  function each(arr, cb) {
    return Array.prototype.forEach.call(arr, cb);
  }

  function deg2rad(deg) {
    return ((deg * Math.PI) / 180);
  }

  function pos(deg, r) {
    return {
      x: (r * (Math.cos(deg2rad(deg)))),
      y: (r * (Math.sin(deg2rad(deg))))
    };
  }

  function chairIterator(chair, chairIndex, chairArr) {
    var circPos = pos(chairIndex / chairArr.length * 360, TABLE_RADIUS);
    chair.style.top = circPos.y + "px";
    chair.style.left = circPos.x + "px";
  }

  function tableIterator(table) {
    var chairs = table.querySelectorAll(".chair");
    each(chairs, chairIterator);
  }

  function main() {
    var tables = document.querySelectorAll(".table");
    each(tables, tableIterator);
  }

  doc.addEventListener("DOMContentLoaded", main);
}(document));

    </script>
  </body>
</html>