<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" type="text/css" href="ionicons/css/ionicons.min.css" />

<title>Registration  area</title>
<style type="text/css">

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

body {
    margin:0; 
    font-family: Myriad-Regular;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #656565;
    text-align: left;
    background-color: #F3F3F3;
}

.registration-container{
    margin: 10px 0;
}
.bg-registration{
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/carousel.jpg), no-repeat center center;
    background-size: cover;
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
.flex {
    display: flex;
}

.flex-grow{
  flex-grow: 1;
}
.align-items-center{
    align-items: center;
}

.m-0 {
    margin: 0 !important;
}
.mb-0{
    margin-bottom: 0 !important;
}
.mb-3rem{
    margin-bottom: 3rem !important;
}
.mb-1-5rem{
    margin-bottom: 1.5rem !important;
}
.mt-1-5rem{
    margin-top: 1.5rem !important;
}

.mr-1rem{
    margin-right: 1rem !important;
}

.pb-3rem{
    padding-bottom: 3rem !important;
}
.pt-3rem{
    padding-top: 3rem !important;
}

.pb-0_5rem{
    padding-bottom: 0.5rem !important;
}
.pt-0_5rem{
    padding-top: 0.5rem !important;
}
.p-1_5rem {
    padding: 1.5rem !important;
}

.p-3rem{
    padding: 3rem !important;
}

.pl-1_5rem{
    padding-left: 1.5rem !important;
}
.pr-1_5rem{
    padding-right: 1.5rem !important;
}

.pb-1rem {
    padding-bottom: 1rem !important;
}

.pt-1rem {
    padding-top: 1rem !important;
}


h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
  margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
    color: #212121;
}


.content-container-r{
    margin: 0px auto 0px auto;
max-width: 960px;
}

.col-content-7{
    width: 58.33333%;
    max-width: 58.33333%;
}
.col-content-5{
    width: 41.66667%;
    max-width: 41.66667%;
}

.text-primary {
    color: #7AB730 !important;
}
.text-uppercase {
    text-transform: uppercase !important;
}
.letter-spacing-5p{
 letter-spacing: 5px;   
}
.text-white {
    color: #fff !important;
}
.font-weight-bold {
    font-weight: 700 !important;
}

.f-s-20p{
font-size: 20px;
}

.list-inline {
    padding-left: 0;
    list-style: none;
}

.border-0 {
    border: 0 !important;
}

.card-r{
position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
}

.card-header-r{
padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
} 

.card-body-r{

} 

.rounded-bottom{
border-bottom-right-radius: 0.25rem !important;
    border-bottom-left-radius: 0.25rem !important;
}

 .bg-white{
    background-color: #fff !important;
}

.bg-primary{
background-color: #7AB730 !important;
} 

.text-center{
    text-align: center!important;
}


/*------------------------------------------------------------------
    inputs section
-------------------------------------------------------------------*/


.form-groupy{
  margin-left: 10px;
  margin-bottom: 1rem;
}
 .form-input-group{
display: flex;
    /* margin-top: 1rem; 
    margin-bottom: 1rem; */
}
.display_label{ display:none !important; text-align:left !important; }

 .form-input-group input[type="text"],
 .form-input-group input[type="email"],
 .form-input-group input[type="file"],
 .form-input-group input[type="date"],
 .form-input-group input[type="time"],
 .form-input-group input[type="number"],
  .form-input-group input[type="checkbox"],
    .form-input-group input[type="radio"],
 .form-input-group input[type="password"],
 .form-input-group textarea,
 .form-input-group select{
    display: block;
    width: 100%;
    font-size: 14px;
font-family: 'Myriad-Regular';
    color: #333;
    line-height: 28px;
    font-weight: 400;
    padding: 10px 20px;
    background-color: #ffffff;
    border: 2px solid #ced4da;
    border-radius: 2px;
        transition: all 300ms ease;
        outline-width: 0 !important;
        outline: none !important;
        transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
}

.custom-select{
    display: inline-block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 1.75rem 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: #fff url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e) no-repeat right 0.75rem center/8px 10px;
    border: 1px solid #ced4da;
    border-radius: 0;
    appearance: none;
 transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;   
}

 .form-input-group-normal{
font-family: 'Myriad-Regular';
    color: #333;
    font-weight: 400;;
    background-color: #ffffff;
    border: 2px solid #ced4da;
    border-radius: 2px;
        transition: all 300ms ease;
        outline-width: 0 !important;
        outline: none !important;
        transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
}

/* Styling for the read-only select box */
.read-only {
  background-color: #f5f5f5;
  pointer-events: none;
  touch-action: none;
  opacity: 0.6;
}
.select-h{
    height: 54px;
}
.input-h{
height: 34px;
}

.btn-ux {
    display: inline-block;
    font-weight: 400;
    color: #656565;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn-primary-ux {
    color: #fff;
    background-color: #7AB730;
    border-color: #7AB730;
}  
.btn-block-ux{
    display: block;
    width: 100%; 
}
.btn-primary-ux:hover {
    color: #fff;
    background-color: #669928;
    border-color: #5f8f25;
    cursor: pointer;
}

@media screen and (max-width: 1000px) {

    .col-content-7{
      margin: 0px auto 0px auto;
    width: 90%;
    max-width: 90%;
}
.col-content-5{
    margin: 0px auto 0px auto;
    width: 90%;
    max-width: 90%;
    }
}


</style>
</head>
<body>


<div class="registration-container bg-registration pb-3rem pt-3rem">
        <div class="content-container-r pb-3rem pt-3rem">
            <div class="content-row-r flex flex-wrap align-items-center">
                <div class="col-content-7 mb-3rem">
                    <div class="mb-1-5rem">
                        <h6 class="text-primary text-uppercase letter-spacing-5p f-s-20p">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For Honeymoon</h1>
                    </div>
                    <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline text-white m-0">
                        <li class="pb-0_5rem"><i class="ion ion-checkmark text-primary mr-1rem"></i>Labore eos amet dolor amet diam</li>
                        <li class="pb-0_5rem"><i class="ion ion-checkmark text-primary mr-1rem"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="pb-0_5rem"><i class="ion ion-checkmark text-primary mr-1rem"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                </div>
                <div class="col-content-5">
                    <div class="card-r border-0">
                        <div class="card-header-r bg-primary text-center p-1_5rem">
                            <h1 class="text-white m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body-r rounded-bottom bg-white p-3rem">
                            <form>

                                <div class="form-groupy">
                                    <div class="form-input-group">
                                <input type="text" class="input-control" placeholder="Your name" required="required">
                                 </div>
                                </div>

                                <div class="form-groupy">
                                    <div class="form-input-group">
                                    <input type="email" class="input-control" placeholder="Your email" required="required">
                                </div>
                                </div>

                                <div class="form-groupy">
                                    <div class="form-input-group">
                                    <select class="input-control select-h">
                                        <option selected="">Select a destination</option>
                                        <option value="1">destination 1</option>
                                        <option value="2">destination 1</option>
                                        <option value="3">destination 1</option>
                                    </select>
                                </div>
                            </div>


                                <div class="form-groupy">
                                    <div class="form-input-group">
                                    <button class="btn-ux btn-primary-ux  btn-block-ux  pb-1rem pt-1rem" type="submit">Sign Up Now</button>
                                </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





 </body>
</html>   