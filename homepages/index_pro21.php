<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>index_pro1</title>
<link rel="stylesheet" type="text/css" href="ionicons/css/ionicons.min.css" />
<style>
@font-face{
    font-family: "Myriad-Pro";  
    src: url(fonts/myriadpro/MyriadPro-Light.otf) format("truetype");
}
@font-face{
    font-family: "Myriad-Condit";  
    src: url(fonts/myriadpro/MYRIADPRO-CONDIT.OTF) format("truetype");
}

@font-face{
    font-family: "Myriad-Regular";  
    src: url(fonts/myriadpro/MYRIADPRO-REGULAR.OTF) format("truetype");
}
@import url(ionicons/css/ionicons.min.css);

/*This debugs for what's causing horizntal scroll, un comment to see
* {
  outline: 1px solid #f00 !important;
}*/

body{
    margin: 0px;
    padding: 0px;
    /*font-family: 'Lato', sans-serif;*/
        font-family: Myriad-Regular;
    font-size: 15px;
    color: #777777;
    line-height: 1.7em;
    font-weight: 400;
     background-color: #f2f8ff;
}

.top-nav-dashb {
    display: flex;
    background-color: #b30000;
    width: 100%;
    height: 50px;
    position: fixed;
    top: 0px;
    margin: 0;
    padding: 0;
    z-index: 10;
}



.flex {
    display: flex;
}
.justify-center {
    justify-content: center;
}

.justify-right {
    justify-content: flex-end;
}
.flex-wrap {
    flex-wrap: wrap;
}
.flex-col {
    flex-direction: column;
}
.items-center {
    align-items: center;
}
.flex-grow {
    flex-grow: 1;
}
.w-full {
    width: 100%;
}
.justify-center {
    justify-content: center;
}
.center{
    text-align: center;
}

.margin_top{
  margin-top: 15px;
  margin-bottom: 10px;
}
.margin_top_50{
    margin-top: 50px;
}

a{
    text-decoration: none;
    outline-width: 0;
}
a:hover {
    outline-width: 0;
}

.cards-section{
    margin-top: 70px;
}

/***************first check boxes plan *******/
.grid{
display: flex;
flex-grow: 1;
flex-wrap: wrap;
justify-content: center;
}

.card-item {
  background-color: #fff;
  border-radius: 0.5em;
  position: relative;
margin: 10px 20px;
  max-width: 60em;
  padding: 0;
  
}
 .card-item:hover {
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
  }

  .card-item .radio {
  font-size: inherit;
  margin: 0;
  position: absolute;
  right: calc(1em + 2px);
  top: calc(1em + 2px);
  -webkit-appearance: none;
    -moz-appearance: none;
    background: #fff;
    border: 2px solid #e2ebf6;
    border-radius: 50%;
    cursor: pointer;
    height: 1.5em;
    outline: none;
    transition: background 0.2s ease-out, border-color 0.2s ease-out;
    width: 1.5em; 
}

 .card-item .radio::after {
      border: 2px solid #fff;
      border-top: 0;
      border-left: 0;
      content: '';
      display: block;
      height: 0.75rem;
      left: 25%;
      position: absolute;
      top: 50%;
      transform: 
        rotate(45deg)
        translate(-50%, -50%);
      width: 0.375rem;
    }

 .card-item .radio:checked {
      background: #558309;
      border-color: #558309;
    }

    .card-item:hover .radio {
    border-color: #c4d1e1;
    }
  .card-item:hover .radio:checked {
      border-color: #558309;
    }


  .card-item .plan-details {
  border: 2px solid #e2ebf6;
  border-radius: 0.5em;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  padding: 1em;
  transition: border-color 0.2s ease-out;
}

.card-item .card:hover .plan-details {
  border-color:#c4d1e1;
}

.card-item .radio:checked ~ .plan-details {
  border-color: #558309;
}

.card-item .radio:focus ~ .plan-details {
  box-shadow: 0 0 0 2px #c4d1e1;
}

.card-item .radio:disabled ~ .plan-details {
  color: #c4d1e1;
  cursor: default;
}

.card-item .radio:disabled ~ .plan-details .plan-type {
  color: #c4d1e1;
}

.card-item .card:hover .radio:disabled ~ .plan-details {
  border-color: #e2ebf6;
  box-shadow: none;
}

.card-item .card:hover .radio:disabled {
    border-color: #e2ebf6;
  }

.card-item .plan-type {
  color: #558309;
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 1em;
}

.card-item .plan-cost {
  font-size: 2.5rem;
  font-weight: bold;
  padding: 0.5rem 0;
}

.card-item .slash {
  font-weight: normal;
}

.card-item .plan-cycle {
  font-size: 2rem;
  font-variant: none;
  border-bottom: none;
  cursor: inherit;
  text-decoration: none;
}

.card-item .hidden-visually {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  white-space: nowrap;
  width: 1px;
}  
 /***************\first check boxes plan *******/ 

/**************************second checkbox***********/

  .form-inputs {
  padding: 0 16px;
  max-width: 550px;
  margin: 50px auto;
  font-size: 18px;
  font-weight: 600;
  line-height: 36px;
}  
.form-inputs .inputGroup {
    background-color: #fff;
    display: block;
    margin: 10px 0;
    position: relative;
}

  .inputGroup .check-input {
      width: 32px;
      height: 32px;
      order: 1;
      z-index: 2;
      position: absolute;
      right: 30px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      visibility: hidden;
    }

    .inputGroup label {
      padding: 12px 30px;
      width: auto;
      display: block;
      text-align: left;
      color: #3C454C;
      cursor: pointer;
      position: relative;
      z-index: 2;
      transition: color 200ms ease-in;
      overflow: hidden;
         }
      .inputGroup label::before {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        content: '';
        background-color: #5562eb;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) scale3d(1, 1, 1);
        transition: all 300ms cubic-bezier(0.4, 0.0, 0.2, 1);
        opacity: 0;
        z-index: -1;
      }

      .inputGroup label::after {
        width: 32px;
        height: 32px;
        font-family: "Ionicons";
        content: '\f122';
        text-align: center;
    color: #fff;
        border: 2px solid #D1D7DC;
        background-color: #fff;
        /*background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");*/
        background-repeat: no-repeat;
        background-position: 2px 3px;
        border-radius: 50%;
        z-index: 2;
        position: absolute;
        right: 80px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        transition: all 200ms ease-in;
    }

   .inputGroup input:checked ~ label {
      color: #fff;
       }
     .inputGroup input:checked ~ label::before {
        transform: translate(-50%, -50%) scale3d(56, 56, 1);
        opacity: 1;
      }

     .inputGroup input:checked ~ label::after {
        background-color: #54E0C7;
        border-color: #54E0C7;
      }
   /**************************\second checkbox***********/


/****************buttons styles*************/
.buttons{
    margin: 0px 50px;
}

   .button-btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.button-btn:hover {
  background-color: #45a049;
} 

.btn-style1 {
    font-size: 16px;
    width: 163px;
    height: 48px;
    cursor: pointer;
    transition: all .2s ease-in-out;
    letter-spacing: 1px;
    border: none;
    border-radius: 23px;
       color: #fff;
    background: #f62f5e;
}
.btn-style1:hover{
    transform: scale(1.1);
}

.btn-style2{
box-sizing: border-box;
    display: block;
    float: left;
    width: 100%;
    padding: 20px;
    font-size: 1.3em;
    margin-bottom: 20px;
    outline: none;
    border: none;

    color: #1C1D21;
    background: #EEEFF7;
    font-weight: bold;
}

.btn-style3 {
     display: block;
  background: linear-gradient(-45deg, #2ed6bc, #01BCE6);
  width: 200px;
  color: white;
  padding: 10px 18px;
  margin: 40px auto;
  font-size: 18px;
  border-radius: 22px;
  border: 1px solid #fff;
box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
  cursor: pointer;
    }
    /****************\buttons styles*************/



@media screen and (max-width: 600px){
.card-item{
    width: 100%;
}

}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

}





</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>

<section class="cards-section">
  
<div class="grid">

  <label class="card-item">
    <input name="plan" class="radio" type="radio" checked>
    <span class="plan-details">
      <span class="plan-type">Basic</span>
      <span class="plan-cost">$0<span class="slash">/</span>
      <abbr class="plan-cycle" title="month">mo</abbr></span>
      <span>1 team member</span>
      <span>100 GB/mo</span>
      <span>1 concurrent build</span>
    </span>
  </label>


  <label class="card-item">
    <input name="plan" class="radio" type="radio">
    <span class="hidden-visually">Pro - $50 per month, 5 team members, 500 GB per month, 5 concurrent builds</span>
    <span class="plan-details" aria-hidden="true">
      <span class="plan-type">Pro</span>
      <span class="plan-cost">$50<span class="slash">/</span><span class="plan-cycle">mo</span></span>
      <span>5 team members</span>
      <span>500 GB/mo</span>
      <span>5 concurrent builds</span>
    </span>
  </label>

  <label class="card-item">
    <input name="plan" class="radio" type="radio">
    <span class="hidden-visually">Business - $200 per month, 5+ team members, 1000 GB per month, Unlimited builds</span>
    <span class="plan-details" aria-hidden="true">
      <span class="plan-type">Business</span>
      <span class="plan-cost">$200<span class="slash">/</span><span class="plan-cycle">mo</span></span>
      <span>5+ team members</span>
      <span>1000 GB/mo</span>
      <span>Unlimited builds</span>
    </span>
  </label>

</div>

</section>


  
  <form class="form-inputs">
  <h2>Checkboxes</h2>
  <div class="inputGroup">
    <input class="check-input" id="option1" name="option1" type="checkbox"/>
    <label for="option1">Option One</label>
  </div>
  
  <div class="inputGroup">
    <input class="check-input" id="option2" name="option2" type="checkbox"/>
    <label for="option2">Option Two</label>
  </div>
  
  <h2>Radio Buttons</h2>
  <div class="inputGroup">
    <input class="check-input" id="radio1" name="radio" type="radio"/>
    <label for="radio1">Yes</label>
  </div>
  <div class="inputGroup">
    <input class="check-input" id="radio2" name="radio" type="radio"/>
    <label for="radio2">No</label>
  </div>
</form>


<div class="buttons center">

<button type="submit" class="button-btn">Continue to checkout</button>
<button type="submit" class="btn-style1">Next Step</button>
<button type="submit" class="btn-style2">Pay Now</button>
<button type="submit" class="btn-style3">Confirm and Pay</button>
</div>

</body>
</html>