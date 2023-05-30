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
margin-top: 50px;
}
.iu-layout-wrap{
    width: 95%;
     margin: 0 auto 0 auto;   
}

.iu-layout-cell{
    max-width: 100%;
    min-width: 100%;
    
}




#invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:2mm;
  margin: 0 auto;
  width: 44mm;
  background: #FFF;
}

#invoice-POS::selection {background: #f31544; color: #FFF;}
#invoice-POS::moz-selection {background: #f31544; color: #FFF;}

img {
    max-width: inherit;
    width: inherit;
}
h1.po-h1{
  font-size: 1.5em;
  color: #222;
}
h2.po-h2{font-size: 11px; padding-left: 2px; font-weight: 500;}
h3.po-h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p.po-text{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}

#po-top, #po-mid,#po-bot{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}

#po-top{min-height: 100px;}
#po-mid{min-height: 80px;} 
#po-bot{ min-height: 50px;}

#po-top .po-logo{
  /*float: left;*/
    height: 60px;
    width: 60px;
    background-repeat: no-repeat;
    background-size: 60px 60px;
}

.po-clientlogo{
  float: left;
    height: 60px;
    width: 60px;
    background-repeat: no-repeat;
    background-size: 60px 60px;
  border-radius: 50px;
}


.po-info{
  display: block;
  /*float:left;*/
  margin-left: 0;
}
.po-title{
  float: right;
}
.po-title p{text-align: right;} 
table.po-table{
  width: 100%;
  border-collapse: collapse;
}
table.po-table td{
  /*padding: 5px 0 5px 15px;
  border: 1px solid #EEE;*/
}
.po-tabletitle{
  /*padding: 5px;*/
  font-size: 10px;
  background: #EEE;
  color: #000;
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: pre-wrap;
    padding: 0;
    hyphens: auto;
}

.po-service{border-bottom: 1px solid #EEE;}
.po-item{width: 24mm;}
.po-itemtext{font-size: 11px; padding-left: 2px;}

#po-legalcopy{
  margin-top: 5mm;
}
.po-legal{
        font-size: 0.7em;
    color: #666;
    line-height: 1.2em;
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
    <h1 class="center">Printing POS reciept 2 in thermal printer</h1>
      <div class="iu-layout-wrap flex flex-wrap flex-grow justify-center">



<div id="invoice-POS">
    
    <center id="po-top">
          <img src="images/logo.png" class="po-logo" alt="Logo">
      <!--<div class="po-logo" style="background-image: url(images/logo.png);"></div>-->
      <div class="po-info"> 
        <h2 class="po-h2">SBISTechs Inc</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="po-mid">
      <div class="po-info">
        <h2 class="po-h2">Contact Info</h2>
        <p class="po-text"> 
            Address : street city, state 0000</br>
            Email   : JohnDoe@gmail.com</br>
            Phone   : 555-555-5555</br>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="po-bot">

                    <div id="po-table">
                        <table class="po-table">
                            <tr class="po-tabletitle">
                                <td class="po-item"><h2 class="po-h2">Item</h2></td>
                                <td class="po-qty"><h2 class="po-h2">Qty</h2></td>
                                <td class="po-Rate"><h2 class="po-h2">Sub Total</h2></td>
                            </tr>

                            <tr class="po-service">
                                <td class="po-tableitem"><p class="po-itemtext text-truncate">Communication</p></td>
                                <td class="po-tableitem"><p class="po-itemtext">5</p></td>
                                <td class="po-tableitem"><p class="po-itemtext">$375.00</p></td>
                            </tr>

                            <tr class="po-service">
                                <td class="po-tableitem"><p class="po-itemtext text-truncate">Asset Gathering</p></td>
                                <td class="po-tableitem"><p class="po-itemtext">3</p></td>
                                <td class="po-tableitem"><p class="po-itemtext">$225.00</p></td>
                            </tr>

                            <tr class="po-service">
                                <td class="po-tableitem"><p class="po-itemtext text-truncate">Design Development</p></td>
                                <td class="po-tableitem"><p class="po-itemtext">5</p></td>
                                <td class="po-tableitem"><p class="po-itemtext">$375.00</p></td>
                            </tr>

                            <tr class="po-service">
                                <td class="po-tableitem"><p class="po-itemtext text-truncate">Animation</p></td>
                                <td class="po-tableitem"><p class="po-itemtext">20</p></td>
                                <td class="po-tableitem"><p class="po-itemtext">$1500.00</p></td>
                            </tr>

                            <tr class="po-service">
                                <td class="po-tableitem"><p class="po-itemtext text-truncate">Animation Revisions</p></td>
                                <td class="po-tableitem"><p class="po-itemtext">10</p></td>
                                <td class="po-tableitem"><p class="po-itemtext">$750.00</p></td>
                            </tr>


                            <tr class="po-tabletitle">
                                <td class="po-Rate"><h2 class="po-h2 text-truncate">tax</h2></td>
                                <td class="po-payment" colspan="2"><h2 class="po-h2">$0</h2></td>
                            </tr>

                            <tr class="po-tabletitle">
                                <td class="po-Rate"><h2 class="po-h2 text-truncate">Total</h2></td>
                                <td class="po-payment" colspan="2"><h2 class="po-h2">$3,644.25</h2></td>
                            </tr>

                             <tr class="po-tabletitle">
                                <td class="po-Rate"><h2 class="po-h2 text-truncate">Amount paid</h2></td>
                                <td class="po-payment" colspan="2"><h2 class="po-h2">$3,644.25</h2></td>
                            </tr>

                              <tr class="po-tabletitle">
                                <td class="po-Rate"><h2 class="po-h2 text-truncate">Balance</h2></td>
                                <td class="po-payment" colspan="2"><h2 class="po-h2">$3,644.25</h2></td>
                            </tr>

                        </table>
                    </div><!--End Table-->

                    <div id="po-legalcopy">
                        <p class="po-legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
                        </p>
                    </div>

                </div><!--End InvoiceBot-->

                 <button id="btnPosPrint" class="hidden-print">Print</button>
  </div><!--End Invoice-->





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