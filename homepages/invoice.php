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
}
.iu-layout-wrap{
    width: 80%;
     margin: 0 auto 0 auto;   
}

.ui-card {
        position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 0.25rem;
    box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);
    border: none;
    margin-bottom: 1.875rem;
    transition: all .3s ease;
}

.ui-card-body {
    display: flex;
    padding: 1.25rem;
}

.invoice-wrapper {
    width: 80%;
    margin: 0 auto;
    padding: 0;
}

.invoice-wrapper .invoice-header {
    padding-top: 80px;
}
.border-bottom {
    border-bottom: 1px solid #eaf3fd!important;
}

.iv-row{
    display: flex;
    flex-wrap: wrap;

}
.wd-50{
width: 50%;
}

.wd-100{
width: 100%;
}

.text-right{
    text-align: right;
}

.invoice-wrapper .invoice-header h1 {
    font-size: 38px;
    font-weight: 600;
    color: #4d5a68;
}

.invoice-wrapper .invoice-header .iv-logo-wrapper .logo {
    vertical-align: middle;
    margin-top: -6px;
    margin-right: 3px;
}

.invoice-wrapper .invoice-header .iv-logo-wrapper .iv-brand-text {
    color: #4d5a68;
    font-size: 27px;
    font-weight: 400;
}

address {
    font-style: normal;
        margin-bottom: 1rem;
}

.iv-address{
    margin-top: 10px!important;
}

.invoice-wrapper .invoice-summary {
    padding: 20px 0;
    margin: 55px 0 0;
    border-top: 1px solid #dee2e6;
}

.invoice-wrapper .invoice-summary .iv-sub-title {
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
    padding: 0 0 5px;
}

.invoice-wrapper .invoice-summary .iv-summary {
    list-style: none;
    margin: 0;
    padding: 0;
}

.invoice-wrapper .invoice-summary .iv-summary li {
    padding: 0 0 4px;
}

ul li {
    font-size: .975rem;
    }
.f-w-500, .font-weight-500 {
    font-weight: 500!important;
}

.iv-table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
}

.iv-table{
    font-size: .875rem;
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
    border-collapse: collapse;

}

.iv-table td, .iv-table th, .iv-table thead th {
    border-bottom: 1px solid rgba(234,243,253,.9);
}
.iv-table thead th {
    border-top: none;
    font-weight: 500;
color: #000;
    vertical-align: bottom;
}

.iv-table td, .iv-table th {
    padding: 0.75rem;
    border-bottom: 1px solid rgba(234,243,253,.9);
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    text-align: left;

    }

    table tbody tr td {
    font-weight: 300;
}

.invoice-wrapper .invoice-footer .invoice-total {
    padding-top: 30px;
    text-align: right;
}

.invoice-wrapper .invoice-footer .invoice-total p {
    margin: 0 0 4px;
    color: #617182;
    line-height: 1.7;
    font-size: .875rem;
}


.invoice-wrapper .invoice-footer .invoice-total .iv-total {
    font-size: 20px;
    font-weight: 500;
    text-transform: uppercase;
}

.text-danger {
    color: #ff5c75!important;
}

.ui-card .ui-card-footer {
    padding: 1rem 1.25rem;
    font-size: 1.1rem;
    font-weight: 400;
    background-color: transparent;
    border-top: 1px solid rgba(234,243,253,.7);
}

.bg-light {
    background-color: #f0f6ff!important;
}


.iv-btn{
    display: inline-block;
    text-align: center;
    white-space: nowrap;
    user-select: none;
    border: 1px solid transparent;
    padding: 8px 20px;
    font-size: .875rem;
    border-radius: 0.25rem;
    transition: all .2s ease;
    height: 38px;
    vertical-align: middle;
    font-weight: 300;
    cursor: pointer;
}

.iv-btn-primary{
    background-color: #736cc7;
    border: 1px solid #736cc7;
    color: rgba(255,255,255,.9);
        margin-bottom: 20px!important;
    margin-top: 20px!important;
}

.iv-btn-primary:hover{
    background-color: #6861c3!important;
    border: 1px solid #6861c3!important;
    box-shadow: 0 5px 10px rgba(115,108,199,.4)!important;
    color: #fff;
}

.pull-right {
    float: right;
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
  <div class="iu-layout-wrap">  
  
<div class="ui-card">
                  <div class="ui-card-body">
                    <div class="invoice-wrapper">
                      <div class="invoice-header border-bottom">

                        <div class="iv-row">
                          <div class="iv-col wd-50">
                            <h1>INVOICE</h1>
                          </div>
                          <div class="iv-col wd-50 text-right">
                            <div class="iv-logo-wrapper">
                             <!--logo goes here-->
                             <img src="images/doc1.jpg" class="logo" alt="" width="40" height="40">
                              <span class="iv-brand-text">QuantumPro</span>
                            </div>
                            <address class="iv-address">
                              1600 Amphitheatre Mountain View, CA 10486<br>
                              Phone: +1 888-555-0000<br>
                            </address>
                          </div>
                        </div>

                          <div class="invoice-summary">
                        <div class="iv-row">

                            <div class="iv-col wd-50">
                                <div class="iv-sub-title">Invoice to</div>
                                <address class="iv-address">
                                  Dribbble Inc.<br>
                                  355 Washington Street, 5th Floor<br>
                                  Salem, MA 29384<br>
                                  Phone: +1 888-123-0000<br>
                                </address>
                            </div>
                                <div class="iv-col wd-50 text-right">
                                  <ul class="iv-summary">
                                    <li><span class="f-w-500">Invoice #:</span> 306</li>
                                    <li><span class="f-w-500">Invoice date:</span> Aug 16, 2018</li>
                                      <li><span class="f-w-500">Due date:</span> Sept 01, 2018</li>
                                  </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="invoice-body">
                        <div class="iv-table-responsive">
                          <table class="iv-table">
                            <thead>
                              <tr>
                                <th>Item#</th>
                                <th>Description</th>
                                <th class="text-right">QTY</th>
                                <th class="text-right">Unit Price</th>
                                <th class="text-right">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>UX Design
                                </td>
                                <td class="text-right">2</td>
                                <td class="text-right">$2,100</td>
                                <td class="text-right">$4,200</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Front-end Development
                                </td>
                                <td class="text-right">1</td>
                                <td class="text-right">$3,500</td>
                                <td class="text-right">$3,500</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>UX Research
                                </td>
                                <td class="text-right">1</td>
                                <td class="text-right">$2,000</td>
                                <td class="text-right">$2,000</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="invoice-footer">
                        <div class="invoice-total">
                          <div class="iv-row">
                            <div class="iv-col wd-100">
                              <p>Sub Total: $9,700</p>
                              <p>10% Discount: $970</p>
                              <p class="iv-total">Total Due: <span class="text-danger">$8,730</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ui-card-footer bg-light">
                    <button class="iv-btn iv-btn-primary pull-right">Proceed to payment</button>
                  </div>
                </div>





            </div>
        </section>



</body>
</html>