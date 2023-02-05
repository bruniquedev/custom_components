<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>JavaScript confirmation box</title>
    <style type="text/css">
      body {
    font-family: sans-serif;
}
.dialog-ovelay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.50);
    z-index: 999999;
}
.dialog-ovelay .dialog {
    width: 400px;
    margin: 100px auto 0;
    background-color: #fff;
    /*box-shadow: 0 0 20px rgba(0,0,0,.2);*/
    box-shadow: 0 0 15px #fff;
    border-radius: 3px;
    overflow: hidden;
}
.dialog-ovelay .dialog .dialog-header {
    padding: 10px 8px;
    background-color: #f6f7f9;
    border-bottom: 1px solid #e5e5e5;
}
.dialog-ovelay .dialog .dialog-header h3 {
    font-size: 14px;
    margin: 0;
    color: #555;
    display: inline-block;
}
.dialog-ovelay .dialog .dialog-header .fa-close {
    float: right;
    color: #c4c5c7;
    cursor: pointer;
    transition: all .5s ease;
    padding: 0 2px;
    border-radius: 1px;    
}
.dialog-ovelay .dialog .dialog-header .fa-close:hover {
    color: #b9b9b9;
}
.dialog-ovelay .dialog .dialog-header .fa-close:active {
    box-shadow: 0 0 5px #673AB7;
    color: #a2a2a2;
}
.dialog-ovelay .dialog .dialog-msg {
    padding: 12px 10px;
}
.dialog-ovelay .dialog .dialog-msg p{
    margin: 0;
    font-size: 15px;
    color: #333;
}
.dialog-ovelay .dialog .dialog-footer {
    border-top: 1px solid #e5e5e5;
    padding: 8px 10px;
}
.dialog-ovelay .dialog .dialog-footer .controls {
    direction: rtl;
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


.btnlink {
  padding: 5px 10px;
  cursor: pointer;
}

    </style>
  </head>
  <body>
    <h1>Call the confirmation box</h1>



<div class='dialog-ovelay' id='dialog-ovelay' hidden>
<div class='dialog'>
    <div class="dialog-header">
<h3 id="confirm-heading">title</h3>
<i onclick="closeConfirmBox()" class='fa fa-close'>&#10006;</i>
</div>
<div class='dialog-msg'>
<p id="confirm-message">msg</p>
</div>
      <div class="dialog-footer">
          <div class='controls'>
               <button class='confirm-buttons confirm-button-danger' id="confirm_truebtn">Yes</button>
               <button class='confirm-buttons confirm-button-default' id="confirm_falsebtn">Cancel</button>
          </div>
      </div>
  </div>
</div>
    

<a><button class="confirm-buttons confirm-button-default btnlink" id="deletebtnlaunch">Go to Google</button></a>



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
    document.getElementById("dialog-ovelay").hidden = false;

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
    document.getElementById("dialog-ovelay").hidden = true;
document.getElementById("confirm-heading").innerHTML="";
document.getElementById("confirm-message").innerHTML="";
  }
      
    
    </script>
  </body>
</html>