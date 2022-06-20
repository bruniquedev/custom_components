<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins'}
body{background:#edf2f9}
.content{
  margin: auto;
  padding: 15px;
  max-width: 800px;
  text-align: center;
}
.dpx{
  display:flex;
  align-items:center;
  justify-content:space-around;
}
h1{
  font-size:28px;
  line-height:28px;
  margin-bottom:15px;
}
label{
  display:block;
  line-height:40px;
}
.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 40px;
  width: 40px;
  transition: all 0.15s ease-out 0s;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}
.option-input:hover {
  background: #9faab7;
}
.option-input:checked {
  background: #40e0d0;
}
.option-input:checked::before {
  width: 40px;
  height: 40px;
  display:flex;
  content: '\f00c';
  font-size: 25px;
  font-weight:bold;
  position: absolute;
  align-items:center;
  justify-content:center;
  font-family:'Font Awesome 5 Free';
}
.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}
.option-input.radio {
  border-radius: 50%;
}
.option-input.radio::after {
  border-radius: 50%;
}

@keyframes click-wave {
  0% {
    height: 40px;
    width: 40px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    height: 200px;
    width: 200px;
    margin-left: -80px;
    margin-top: -80px;
    opacity: 0;
  }
}




</style>
</head>
<body>



<div class='content'>
<h1>Ripple animation on  input type radio and Checkbox</h1>
<div class="dpx">
<div class='px'>
  <label>
    <input type="checkbox" class="option-input checkbox" checked />
    Checkbox
  </label>
  <label>
    <input type="checkbox" class="option-input checkbox" />
    Checkbox
  </label>
  <label>
    <input type="checkbox" class="option-input checkbox" />
    Checkbox
  </label>
</div>
<div class='py'>
  <label>
    <input type="radio" class="option-input radio" name="example" checked />
    Radio option
  </label>
  <label>
    <input type="radio" class="option-input radio" name="example" />
    Radio option
  </label>
  <label>
    <input type="radio" class="option-input radio" name="example" />
    Radio option
  </label>
</div>
</div>
</div>

</body>
</html>