<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>seat5</title>
    <style type="text/css">
      
/*https://codepen.io/chrismcnally/pen/dYaobL*/

       #table-wrapper {
    width: 549px;
    position: relative;
    left: 18%;
    height: 500px;  
    transform: rotate(-90deg);
    top:100px;
  }
    .the-table {
      position: absolute;
      left: 100px;
      top: 100px;
      height: 600px;
      width: 350px;
      background-color: #5e4837;
      box-shadow: 0 3px 9pt rgba(0, 0, 0, .23), 0 3px 9pt rgba(0, 0, 0, .16);
       }
      .plate {
        width: 100px;
        height: 100px;
        background: white;
        border-radius: 50%;
        position: absolute;
      }
        .plate:before {
          top: 6px;
          left: 6px;
          position: absolute;
          content: " ";
          width: 69px;
          height: 69px;
          border-radius: 50%;
          box-shadow: 10px 9px 0 0 #EAEAEA;
        }
        .plate:after {
          position: absolute;
          content: " ";
          width: 35px;
          height: 35px;
          border-radius: 50%;
          background-color: #A03434;
          border: 3px solid rgb(154, 129, 109);
          left: 31px;
          bottom: -45px;
          box-shadow: inset 0 0 10px #000000;

        }

        .plate:nth-child(1) {
          left: 120px;
          top: 20px;
        }
        .plate:nth-child(2) {
          left: 20px;
          top: 134px;
          transform: rotate(-90deg);
        }
        .plate:nth-child(3) {
          left: 20px;
          top: 365px;
          transform: rotate(-90deg);
        }
        .plate:nth-child(4) {
          right: 20px;
          top: 134px;
          transform: rotate(90deg);
        }
        .plate:nth-child(5) {
          right: 20px;
          top: 365px;
          transform: rotate(90deg);
        }
        .plate:nth-child(6) {
          left: 120px;
          top: 480px;
          transform: rotate(180deg);
        }

      
      .knife, .fork {
        position: absolute;
        width: 7px;
        height: 70px;
        background-color: #d2d3d5;
        top: 15px;
         box-shadow: 0 3px 9pt rgba(0, 0, 0, .23), 0 3px 9pt rgba(0, 0, 0, .16);
      }
        .knife:before,.fork:before {
          width: 8px;
        }
       
      
      .knife {
        border-radius: 0 0 100%/13px 0;
        right: -17px;
      }
      .fork {
        /* top-left | top-right | bottom-right | bottom-left */
        border-radius: 0px 0 9px 21px;
        left: -17px;
      }
        .fork:before {
          box-shadow: 0 8px 0 2px #5e4837;
          border-top-right-radius: 20px;
          position: absolute;
          bottom: 0;
          left: 7px;
          width: 3px;
          height: 18px;
          content: ' ';
          background-color: inherit;
        }
        .fork:after {
          box-shadow: 0 8px 0 2px #5e4837;
          border-top-left-radius: 20px;
          position: absolute;
          bottom: 0;
          left: -3px;
          width: 3px;
          height: 18px;
          content: ' ';
          background-color: inherit;
        }
   

    .chair {
      position: absolute;

      width: 160px;
      height: 200px;
      background-color: black;
      background-color: darken(#5e4837, 10);
      border-radius: 13%/100px 100px 0 0;
      perspective: 150px;
      box-shadow: 0 3px 9pt rgba(0, 0, 0, .23), 0 3px 9pt rgba(0, 0, 0, .16);
    }

      .chair:before {
        transform: rotateX(160deg);
        position: absolute;
        width: 185px;
        height: 59px;
        background-color: #7e614a;
        top: -29px;
        left: -13px;
        content: " ";
        border-radius: 13%/100px 100px 0 0;
      }

      .chair-lg {
       
        width: 188px;
        height: 200px;
      }

       .chair-lg:before {
          width: 215px;
          height: 59px;
          left: -13px;
        }

      .chair:nth-child(1) {
        left: 180px;
      }
      .chair:nth-child(2) {
        top: 180px;
        transform: rotate(-90deg);
      }
      .chair:nth-child(3) {
        top: 415px;
        transform: rotate(-90deg);
      }
      .chair:nth-child(4) {
        right: 0;
        top: 180px;
        transform: rotate(90deg);
      }
      .chair:nth-child(5) {
        right: 0;
        top: 415px;
        transform: rotate(90deg);
      }
      .chair:nth-child(6) {
        top: 620px;
        left: 180px;
        transform: rotate(180deg);
      }
  

    </style>
  </head>
  <body>
<!--https://codepen.io/chrismcnally/pen/dYaobL-->
<div id="table-wrapper">
  <div class="chair chair-lg"></div>
  <div class="chair left"></div>
  <div class="chair left"></div>
  <div class="chair right"></div>
  <div class="chair right"></div>
  <div class="chair chair-lg "></div>
  <div class="the-table">
    <div class="plate">
      <div class="knife"></div>
      <div class="fork"></div>
    </div>
    <div class="plate">
      <div class="knife"></div>
      <div class="fork"></div>
    </div>

    <div class="plate">
      <div class="knife"></div>
      <div class="fork"></div>
    </div>

    <div class="plate">
      <div class="knife"></div>
      <div class="fork"></div>
    </div>
    <div class="plate">
      <div class="knife"></div>
      <div class="fork"></div>
    </div>
    <div class="plate">
      <div class="knife"></div>
      <div class="fork"></div>
    </div>
  </div>
</div>

    <script type="text/javascript">
      


    </script>
  </body>
</html>