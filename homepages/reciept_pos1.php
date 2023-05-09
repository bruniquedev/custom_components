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
    background: #ffffff;
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


.iu-section{
margin-top: 60px;
    font-size: 12px;
    font-family: 'Times New Roman';
}
.iu-layout-wrap{
    width: 95%;
     margin: 0 auto 0 auto;   
}

.iu-layout-cell{
    max-width: 100%;
    min-width: 100%;
    
}

.pos-table td,
.pos-table th,
.pos-table tr,
table.pos-table {
    border-top: 1px solid black;
    border-collapse: collapse;
}

td.pos-description,
th.pos-description {
    width: 75px;
    max-width: 75px;
}

td.pos-quantity,
th.pos-quantity {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

td.pos-price,
th.pos-price {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

.centered {
    text-align: center;
    align-content: center;
}

.pos_reciept {
    width: 155px;
    max-width: 155px;
}

img {
    max-width: inherit;
    width: inherit;
}

@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}



@media screen and (max-width: 600px){


}

@media screen and (max-width: 412px){

}

 @media only screen and (min-width: 767px) and (max-width: 1000px)  {

}





</style>
</head>
<body>  


 <div class="top-nav-dashb"></div>


  <section class="iu-section">
    <h1 class="centered">Printing POS reciept 1 in thermal printer</h1>
      <div class="iu-layout-wrap flex flex-wrap flex-grow justify-center">
          


<div class="pos_reciept">
            <img src="images/logo.png" alt="Logo">
            <p class="centered">RECEIPT EXAMPLE
                <br>Address line 1
                <br>Address line 2</p>
            <table class="pos-table">
                <thead>
                    <tr>
                        <th class="pos-quantity">Q.</th>
                        <th class="pos-description">Description</th>
                        <th class="pos-price">$$</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pos-quantity">1.00</td>
                        <td class="pos-description">ARDUINO UNO R3</td>
                        <td class="pos-price">$25.00</td>
                    </tr>
                    <tr>
                        <td class="pos-quantity">2.00</td>
                        <td class="pos-description">JAVASCRIPT BOOK</td>
                        <td class="pos-price">$10.00</td>
                    </tr>
                    <tr>
                        <td class="pos-quantity">1.00</td>
                        <td class="pos-description">STICKER PACK</td>
                        <td class="pos-price">$10.00</td>
                    </tr>
                    <tr>
                        <td class="pos-quantity"></td>
                        <td class="pos-description">TOTAL</td>
                        <td class="pos-price">$55.00</td>
                    </tr>
                </tbody>
            </table>
            <p class="centered">Thanks for your purchase!
                <br>parzibyte.me/blog</p>

                 <button id="btnPosPrint" class="hidden-print">Print</button>
        </div>
       



      </div>
  </section>


<script type="text/javascript">
  const $btnPrint = document.querySelector("#btnPosPrint");
$btnPrint.addEventListener("click", () => {
    window.print();
});     
</script>

</body>
</html>