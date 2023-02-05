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

    <h1>Call the confirmation box with callback</h1>

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
      
document.getElementById("deletebtnlaunch").addEventListener("click", () => {

//call this any where
showConfirmBox('Alert','Do you want to delete ?', function (confirmed){ 
//your code to execute on a condition
if(confirmed){
//alert("yes");
}else{
//alert("No");
}
  });


});



/*Rather than waiting for the user's input and then returning from the function, it is more common in JavaScript to provide a callback function that will be called when the action you're waiting for is complete.*/
  function showConfirmBox(title="Confirmation",message = "Are you sure to execute this action?",callback) {

document.getElementById("confirm-heading").innerHTML=title;
document.getElementById("confirm-message").innerHTML=message;
    document.getElementById("overlay-confirmbox").hidden = false;

 document.getElementById('confirm_truebtn').onclick = function(){
           closeConfirmBox();
           callback(true);    
       };
        document.getElementById('confirm_falsebtn').onclick = function(){
           closeConfirmBox();
           callback(false);
        };
  }


  function closeConfirmBox() {
    document.getElementById("overlay-confirmbox").hidden = true;
document.getElementById("confirm-heading").innerHTML="";
document.getElementById("confirm-message").innerHTML="";
  }


    </script>
  </body>
</html>