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
    width: 95%;
     margin: 0 auto 0 auto;   
}

.iu-layout-cell{
    max-width: 100%;
    min-width: 100%;
    
}


/*-----upload 1-----*/


.btn-upload-1{
    border: none;
    border-radius: 2px;
    display: inline-block;
    height: 36px;
    line-height: 36px;
    padding: 0 16px;
    text-transform: uppercase;
    vertical-align: middle;
    -webkit-tap-highlight-color: transparent;
    font-size: 14px;
    outline: 0;
    text-decoration: none;
    color: #333;
    background-color: #fff;
    text-align: center;
    letter-spacing: .5px;
    -webkit-transition: background-color .2s ease-out;
    transition: background-color .2s ease-out;
    cursor: pointer;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);

}

.btn-upload-file-1 {
        color: #fff;
    background-color: #26a69a;
    position: relative;
    /*overflow: hidden;*/
}

.btn-upload-file-1 i {
    font-size: 1.3rem;
        line-height: inherit;
}
.left {
    float: left !important;
}
i.left {
    float: left;
    margin-right: 8px;
}

.btn-upload-file-1 input[type=file] {
    position: absolute;
    top: 0;
   /* right: 0;*/
    min-width: 100%;
    min-height: 100%;
    /*font-size: 100px;*/
    text-align: right;
    filter: alpha(opacity=1);
   /* opacity: 0;*/
    outline: none;
    /*background: white;*/
    cursor: inherit;
    display: block;

    left: 0;
    font-size: 12px;
    opacity: 1;
    color: #333;
}

/*--file upload button styling--*/
.btn-upload-file-1 input[type="file"]::file-selector-button {
opacity: 0;
height: 36px;
 line-height: 36px;
    padding: 0 23px;
    cursor: pointer;
    }

/*-----/upload 1-----*/










/*-----upload 2-----*/

input[type="file"].inputfile {
  position: relative;
}

input[type="file"].inputfile::file-selector-button {
  width: 136px;
  color: transparent;
}

/* Faked label styles and icon */
input[type="file"].inputfile::before {
  position: absolute;
  pointer-events: none;
  top: 10px;
  left: 16px;
  height: 20px;
  width: 20px;
  content: "";
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230964B0'%3E%3Cpath d='M18 15v3H6v-3H4v3c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-3h-2zM7 9l1.41 1.41L11 7.83V16h2V7.83l2.59 2.58L17 9l-5-5-5 5z'/%3E%3C/svg%3E");
}

input[type="file"].inputfile::after {
  position: absolute;
  pointer-events: none;
  top: 11px;
  left: 40px;
  color: #0964b0;
  content: "Upload File";
}

/* ------- From Step 1 ------- */

/* file upload button */
input[type="file"].inputfile::file-selector-button {
  border-radius: 4px;
  padding: 0 16px;
  height: 40px;
  cursor: pointer;
  background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.16);
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
  margin-right: 16px;
  transition: background-color 200ms;
}

/* file upload button hover state */
input[type="file"].inputfile::file-selector-button:hover {
  background-color: #f3f4f6;
}

/* file upload button active state */
input[type="file"].inputfile::file-selector-button:active {
  background-color: #e5e7eb;
}

/* ------------------------ */

/*-----/upload 2-----*/









/*-----upload 3-----*/

div.file-chooser-wrapper{
        text-align:center;
        padding:3%;
        border:thin solid #d3d3d3;
      }

      .file-chooser-wrapper i.ion{
        font-size: 32px;
      }

      input.inputfileTag{
        display: none;
      }
      .file-chooser-wrapper label{
        cursor:pointer;
      }
      #fileName_selected{
        color:green;
      }

/*-----/upload 3-----*/



/*-----upload 4-----*/
.image-chooser {
  position: relative;
  display: inline-block;
}

#image-upload {
  display: none;
}

#preview-image {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  cursor: pointer;
  display: none;
}

.camera-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.5);
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.camera-icon i {
  color: #fff;
  font-size: 20px;
}


/*-----/upload 4-----*/

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



    <!--upload field one-->
   <span class="btn-upload-1 btn-upload-file-1">
        <i class="ion ion-upload left"></i>  
        upload<input type="file">
    </span>
       <!--/upload field one-->







    <!--upload field two-->
       <div class="margin_top">          
<input class="inputfile" type="file" />
       </div>
 <!--/upload field two-->








     <!--upload field 3-->
 <div class="file-chooser-wrapper margin_top">
      <label for="inputfileTag">
        Select file <br/>
        <i class="ion ion-android-upload"></i>
        <input id="inputfileTag" class="inputfileTag" type="file"/>
        <br/>
        <span id="fileName_selected"></span>
      </label>
    </div>

    <script>
        let input = document.getElementById("inputfileTag");
        let fileName = document.getElementById("fileName_selected")

        input.addEventListener("change", ()=>{
            let inputImage = document.querySelector("#inputfileTag").files[0];

            fileName.innerText = inputImage.name;
        })
    </script>
 <!--/upload field 3-->



<!--upload field 4-->
<div class="image-chooser">
  <input type="file" id="image-upload" accept="image/*" />
  <label for="image-upload">
    <img id="preview-image" src="#" alt="Profile Picture" />
    <div class="camera-icon">
      <i class="ion ion-camera"></i>
    </div>
  </label>
</div>
<!--/upload field 4-->
<script type="text/javascript">
   document.getElementById('image-upload').addEventListener('change', function(event) {

    event.preventDefault();
  var file = event.target.files[0];
  var reader = new FileReader();
   var previewImage = document.getElementById('preview-image');
 previewImage.style.display="block"; 
  reader.onload = function(e) {
   
    previewImage.src = e.target.result;
  };

  reader.readAsDataURL(file);

                
            }, false);  
</script>



   </div>
</section>




</body>
</html>