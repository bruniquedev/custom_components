<!DOCTYPE html>
<html>
<head>
<style>


/*////////////////////////////*/
.post-image-item{
  margin-right: 10px;
    width: 100px;
    height: 100%;
        margin: 30px 20px
}

.post-image-item .image-label{

  font-weight: 600;
  text-align: center;
  font-size: 14px;
      width: 100%;
    display: inline-block;
    margin-bottom: 10px;
}
.post-image-item .post-image-wrap{

    border: 1px solid #e8e8e8;
    border-radius: 5px;
    text-align: center;
    background-color: #f3f3f3;
        padding: 15px;
}

.post-image-item .post-image-wrap label {
    color: #9f9f9f;
    font-weight: 600;
        text-align: center;
        margin-bottom: 0px;
        display: inline-block;
}

.post-image-item .post-image-wrap label span{
     display: flex;
     height: 50px !important;
     width: 50px !important;
}

.post-image-item .post-image-wrap label span img,
.post-image-item .post-image-wrap.image-after .active-image img {
    max-width: 100%;
    height: auto;
        display: block;
    vertical-align: middle;
}
.post-image-item input[type="file"]{
  display: none;
}

.post-image-item .post-image-wrap.image-after{
  display: none;
}

.post-image-item .post-image-wrap.image-after .post-active-image{
 position: relative;
}

.post-image-item .post-image-wrap.image-after .post-active-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    padding-top: 0px !important;
}

.post-image-item .post-image-wrap.image-after .post-active-image span{
margin-top: 1px;
    margin-left: -23px;
    width: 21px;
    height: 21px;
    font-size: 1.2rem;
    text-align: center;
    line-height: 15px;
    color: #000;
    border: 1px solid;
    border-radius: 50%;
    background: #fff;
}

.post-image-item .post-image-wrap.image-after .post-active-image .close-img{
    font-weight: 700;
    text-shadow: 0 1px 0 #fff;
    opacity: .7;
        position: absolute;
        top: -18px;
    right: -18px;
        cursor: pointer;
            display: flex;
    align-items: center;
    justify-content: center;
}

.post-image-item .post-image-wrap.image-after .post-active-image .close-img:hover{
  color: #fff;
  background: #FF4F57;
}

/*///////////////////////////////////////////////////*/


/*-----upload 4-----*/
.img-chooser-container{
width: 100px;
}

.img-chooser-container .img-chooser-label{

  font-weight: 600;
    text-align: center;
    font-size: 14px;
    width: 100%;
    display: inline-block;
    margin-bottom: 10px;
}

.image-chooser {
  position: relative;
  display: flex;
  align-items: center;
  flex-grow:1;
  /*margin-bottom: 40px;*/
}
.image-chooser label{
    position: relative;
}
.image-chooser .select-upload {
  display: none;
}

.image-chooser .preview-image {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  object-fit: cover;
  cursor: pointer;
  /*display: none;*/
  border: 1px solid #cac2c2;
}

.image-chooser .camera-icon {
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
.image-chooser .camera-icon .icon-image{
 width: 30px;
  height: 30px;
}
.image-chooser .camera-icon i {
  color: #333;
  font-size: 20px;
}
.image-chooser .close-img-btn{

    width: 21px;
    height: 21px;
    font-size: 1.2rem;
    text-align: center;
    line-height: 15px;
    color: #000;
    border: 1px solid;
    border-radius: 50%;
    background: #fff;
    font-weight: 700;
    text-shadow: 0 1px 0 #fff;
    opacity: .7;
    position: absolute;
    top: 0px;
    right: 0px;
    z-index: 10;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-chooser .close-img-btn:hover{
  color: #fff;
  background: #FF4F57;
}

/*-----/upload 4-----*/

</style>
</head>
<body>

<div class="post-image-item">
     <label class="image-label">Cover image</label>
    <div class="post-image-wrap">
        <label for="select-file">
      <span><img src="images/ios-camera-5 2.png" alt=""></span></label>
        <input id="select-file" class="select-file" type="file" name="filename[]"  >
        <!--onchange="return upsImage(this)"-->
    </div>
     <div class="post-image-wrap image-after">
        <div class="post-active-image">  
            <img src="" alt="">
            <span data-id="1" data-table="images" data-column="filename" class="close-img" >×</span>
            <!--onclick="removeFiles(this)"-->
        </div>  
    </div>
</div>


<div class="post-image-item">
     <label class="image-label">Cover image</label>
    <div class="post-image-wrap">
        <label for="select-file2">
      <span><img src="images/ios-camera-5 2.png" alt=""></span></label>
        <input id="select-file2" class="select-file" type="file" name="filename[]"  >
        <!--onchange="return upsImage(this)"-->
    </div>
     <div class="post-image-wrap image-after">
        <div class="post-active-image">  
            <img src="" alt="">
            <span data-id="1" data-table="images" data-column="filename" class="close-img" >×</span>
            <!--onclick="removeFiles(this)"-->
        </div>  
    </div>
</div>

<div class="post-image-item">
     <label class="image-label">Cover image</label>
    <div class="post-image-wrap">
        <label for="select-file3">
      <span><img src="images/ios-camera-5 2.png" alt=""></span></label>
        <input id="select-file3" class="select-file" type="file" name="filename[]"  >
        <!--onchange="return upsImage(this)"-->
    </div>
     <div class="post-image-wrap image-after">
        <div class="post-active-image">  
            <img src="" alt="">
            <span data-id="1" data-table="images" data-column="filename" class="close-img" >×</span>
            <!--onclick="removeFiles(this)"-->
        </div>  
    </div>
</div>




      <!--upload field -->
      <div class="img-chooser-container">
  <label class="img-chooser-label">Cover image</label>
<div class="image-chooser">
  <input type="file" id="image-upload" class="select-upload" name="profile_picture" accept="image/*" />
  <label for="image-upload">
  
    <img class="preview-image" src="images/ios-camera-5 2.png" alt="" />
    <div class="camera-icon">
      <!--<i class="ion ion-camera"></i>-->
<img class="icon-image"  src="images/ios-camera-5 2.png" alt="Profile Picture" />
    </div>
    
  </label>
   <span data-id="1" data-table="images" data-column="filename" class="close-img-btn" >×</span>
</div>
</div>
<!--/upload field -->

  <!--upload field -->
      <div class="img-chooser-container">
  <label class="img-chooser-label">Cover image</label>
<div class="image-chooser">
  <input type="file" id="image-upload2" class="select-upload" name="profile_picture" accept="image/*" />
  <label for="image-upload2">
  
    <img class="preview-image" src="images/ios-camera-5 2.png" alt="" />
    <div class="camera-icon">
      <!--<i class="ion ion-camera"></i>-->
<img class="icon-image"  src="images/ios-camera-5 2.png" alt="Profile Picture" />
    </div>
    
  </label>
   <span data-id="1" data-table="images" data-column="filename" class="close-img-btn" >×</span>
</div>
</div>
<!--/upload field -->

<!--upload field -->
      <div class="img-chooser-container">
  <label class="img-chooser-label">Cover image</label>
<div class="image-chooser">
  <input type="file" id="image-upload3" class="select-upload" name="profile_picture" accept="image/*" />
  <label for="image-upload3">
  
    <img class="preview-image" src="images/ios-camera-5 2.png" alt="" />
    <div class="camera-icon">
      <!--<i class="ion ion-camera"></i>-->
<img class="icon-image"  src="images/ios-camera-5 2.png" alt="Profile Picture" />
    </div>
    
  </label>
   <span data-id="1" data-table="images" data-column="filename" class="close-img-btn" >×</span>
</div>
</div>
<!--/upload field -->


<script type="text/javascript">
	
//////////////////////////////option 1/////////////////////////////////
function readURL(input) {
  console.log(input);
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      input.parentElement.parentElement.querySelector('.post-active-image img').src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

if(document.querySelector('.select-file')){
document.querySelectorAll('.select-file').forEach(fileselected => {
    fileselected.addEventListener('change', function(event) {
 const postImageWrap= this.parentElement.parentElement.querySelector('.post-image-wrap');
 const imageShow = this.parentElement.parentElement.querySelector('.post-image-wrap.image-after');
//console.log(imageShow);
postImageWrap.style.display = 'none';
imageShow.style.display = 'block';
readURL(this);

    });
});
}


if(document.querySelector('.close-img')){
document.querySelectorAll('.close-img').forEach(btn => {
    btn.addEventListener('click', function(event) {

  const selectFile= this.parentElement.parentElement.parentElement.querySelector('.select-file');     
 const postImageWrap= this.parentElement.parentElement.parentElement.querySelector('.post-image-wrap');
 const imageShow = this.parentElement.parentElement.parentElement.querySelector('.post-image-wrap.image-after');

postImageWrap.style.display = 'block';
imageShow.style.display = 'none';
selectFile.value= null;

var img = postImageWrap.querySelector("img");
img.src = 'images/ios-camera-5 2.png';

    let id = btn.getAttribute('data-id');
    let table = btn.getAttribute('data-table');
    let column = btn.getAttribute('data-column');

    /*
$.ajax({
            url: baseURL+'removeimage',
            type: 'post',
            data: {id:id,table:table,column:column},
            dataType: 'json',
            success:function(response){
             
            }
        });
        */


    });
});
}

//////////////////////////////end 1/////////////////////////////////



if(document.querySelector('.image-chooser .select-upload')){
document.querySelectorAll('.image-chooser .select-upload').forEach(fileselected => {
    fileselected.addEventListener('change', function(event) {
 const previewImage = this.parentElement.querySelector('.preview-image');

  var file = event.target.files[0];
  var reader = new FileReader();
 previewImage.style.display="block"; 
  reader.onload = function(e) {
   
    previewImage.src = e.target.result;
  };

  reader.readAsDataURL(file);

    }, false);
});
}

if(document.querySelector('.image-chooser .close-img-btn')){
document.querySelectorAll('.image-chooser .close-img-btn').forEach(btn => {
    btn.addEventListener('click', function(event) {

  const selectFile= this.parentElement.querySelector('.select-upload'); 
  const img = this.parentElement.querySelector('.preview-image');    
selectFile.value= null;

img.src = 'images/ios-camera-5 2.png';

    let id = btn.getAttribute('data-id');
    let table = btn.getAttribute('data-table');
    let column = btn.getAttribute('data-column');

    /*
$.ajax({
            url: baseURL+'removeimage',
            type: 'post',
            data: {id:id,table:table,column:column},
            dataType: 'json',
            success:function(response){
             
            }
        });
        */


    });
});
}



</script>

</body>
<html>


