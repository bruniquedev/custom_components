<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>JavaScript confirmation box</title>
    <style type="text/css">
      
      html,
  body {
    height: 100%;
  }
  .overlay-confirmbox {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 2;
  }

  .confirm-box {
    position: absolute;
    width: 50%;
    height: 50%;
    top: 25%;
    left: 25%;
    text-align: center;
    background: white;
     /*box-shadow: 0 0 20px rgba(0,0,0,.2);*/
    box-shadow: 0 0 15px #fff;
  }

  .close {
    cursor: pointer;
  }


    .confirm-buttons {
  cursor: pointer
}
.confirm-button-default {
    background-color: rgb(248, 248, 248);
    border: 1px solid rgba(204, 204, 204, 0.5);
    color: #5D5D5D;
     padding: 5px 15px;
    border-radius: 3px;
}
.confirm-button-danger {
    background-color: #f44336;
    border: 1px solid #d32f2f;
    color: #f5f5f5;
     padding: 5px 15px;
    border-radius: 3px;
}

    </style>
  </head>
  <body>

    <h1>Call the confirmation box this example uses async/awaitable</h1>

    <div class="overlay-confirmbox" id="overlay-confirmbox" hidden>
    <div class="confirm-box">
      <div onclick="closeConfirmBox()" class="close">&#10006;</div>
      <h2 id="confirm-heading">Confirmation</h2>
      <p id="confirm-message">Are you sure to execute this action?</p>
      <button class="confirm-buttons confirm-button-danger" id="confirm_truebtn">Yes</button>
      <button class="confirm-buttons confirm-button-default" id="confirm_falsebtn">No</button>
    </div>
  </div>
  <button class="confirm-buttons confirm-button-danger" id="deletebtnlaunch">Delete</button>


    <script type="text/javascript">
      
document.getElementById("deletebtnlaunch").addEventListener("click", async () =>  {

//call this any where

let result = await showConfirmBox('are you sure you want to delete this?');

if(result){
//alert("yes");
}else{
//alert("No");
}


});




 async  function showConfirmBox(title="Confirmation",message = "Are you sure to execute this action?") {

document.getElementById("confirm-heading").innerHTML=title;
document.getElementById("confirm-message").innerHTML=message;
    document.getElementById("overlay-confirmbox").hidden = false;

 return new Promise(function(resolve){
 document.getElementById('confirm_truebtn').onclick = function(){
           closeConfirmBox();
           resolve(1);    
       };
        document.getElementById('confirm_falsebtn').onclick = function(){
           closeConfirmBox();
           resolve(0);
        };

});

  }


  function closeConfirmBox() {
    document.getElementById("overlay-confirmbox").hidden = true;
document.getElementById("confirm-heading").innerHTML="";
document.getElementById("confirm-message").innerHTML="";
  }


    </script>
  </body>
</html>