<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

/* Using this CSS is giving me unexpected result.*/

/*----main css-----*/
/*/////////////////*/
/*----html tags----*/
html, body {
  width:100%;
  height:100%;
  padding:0;
  margin:0;
  color:#fff;
  background:#2e2e2e;
}
p {
  margin-bottom:0;
}
p:first-child {
  margin-top:0;
}
img {
  max-width:100%;
  height:auto;
}
/*---html tags end----*/
/*////////////////////*/
/*---site structure---*/
.site-wrapper {
  width:100%;
  height:100%;
  position:relative;
}
.site-center {
  width:100%;
  max-width:980px;
  height:100%;
  margin:0 auto;
  position:relative;
}
.content-offset {
  height:100%;
}
.content-frame {
  display: table;
  width: 100%;
  position:relative;
  overflow:hidden;
  font-family: 'RalewayMedium', Arial, Helvetica, sans-serif;
  line-height: 25px;
  font-size: 15px;
  letter-spacing:normal;
  background:blue;
}
html>/**/body .content-frame {
  min-height: 100%;
}

.row {
  display: table-row;
  height: 1px;
  overflow: hidden;
}
html>body .row.expand {
  height: auto;
}
#content {
  text-align:justify;
}
.inner-padding {
  padding: 10px 32px 10px 63px;
}
.header-padding {
  padding:20px 16px 10px 47px;
  position:relative;
}
.header-content {
  width:100%;
  position:relative;
}
.fixed-wrapper {
  position:absolute;
  top:0;
  left:0;
    bottom:0;
}
.fixed-content {
  top:0;
  left:0;
    bottom:0;
  position:fixed;
    overflow-y:scroll;
  overflow-x:hidden;
}

/*----responsive css------*/
/*////////////////////////*/
/*---fixed sidebar size---*/
.fixed-wrapper, .fixed-content {
  width:280px;/*desktop value 280px*/
}

.content-offset {
  margin-left:301px; /*fixed-wrapper width +21px (desktop 301px)*/
}
/*-fixed sidebar size end-*/
/*////////////////////////*/
/*---responsive css end---*/

</style>
</head>
<body>


<div class="site-wrapper">
  <div class="site-center">
    <div class="fixed-wrapper">
      <div class="fixed-content">
          <p>This needs to scroll when its too long to fit on the screen.</p>
        <p>This is dummy text. Vestibulum facilisis volutpat nulla vitae dignissim. Proin dignissim, odio gravida fringilla ultricies, metus tortor cursus felis, id scelerisque mauris diam quis nisi. Quisque quis ipsum quam, et consequat ligula. Donec quis nisl ipsum, at elementum est. Nam aliquam odio non mauris tristique porta. Aliquam accumsan dictum est vel sagittis. Vivamus et felis ac leo iaculis rhoncus nec ac odio. Ut elementum enim fermentum nisi rhoncus vestibulum. Vestibulum at mi mauris. Mauris id sem non erat hendrerit eleifend ultricies quis elit. Maecenas lacinia tincidunt convallis. Pellentesque mi odio, posuere eget ornare vel, porta vitae justo. Nulla gravida interdum tempor.</p>
            <p>Maecenas rutrum tortor vel mauris facilisis ac vestibulum lacus malesuada. Sed sed justo dui. Mauris luctus pellentesque est, vestibulum egestas arcu laoreet eu. Phasellus tempor, nisi vel molestie varius, tortor nibh commodo purus, at tempus nisi dolor ac quam. Phasellus iaculis sem ut felis porttitor mattis. Pellentesque pulvinar venenatis tellus, vehicula placerat arcu laoreet vitae. Integer eleifend vehicula porta. Aenean volutpat, neque et placerat pulvinar, risus sem volutpat arcu, sed feugiat quam enim eget urna. Aliquam dignissim ultricies tortor, ut rhoncus lacus ultricies eu.</p>
            <p>Fusce mollis hendrerit elit, quis egestas elit gravida vitae. Proin libero nisi, tristique id egestas vitae, consectetur id velit. Donec ac massa tellus, eu consequat turpis. Morbi neque nibh, eleifend sit amet mollis vel, varius vel justo. Nulla ac tortor diam. Ut posuere, massa tristique condimentum sagittis, orci nunc iaculis mi, eu porta orci metus a ligula. Pellentesque feugiat nibh et metus malesuada tempus nec vitae felis. Curabitur enim enim, tincidunt in blandit eu, tempus nec magna. Proin porttitor interdum quam.</p>
      </div>
    </div>
    <div class="content-offset">
      <div class="content-frame"> 
        <!--header-------------------------------------------->
        <div id="header" class="row">
          <div class="header-padding">
            <div class="header-content"> this is the header</div>
          </div>
        </div>
        <!--header end--------------------------------------> 
        <!--content----------------------------------------->
        <div id="content" class="row expand">
          <div class="inner-padding">
            <p>This is dummy text. Vestibulum facilisis volutpat nulla vitae dignissim. Proin dignissim, odio gravida fringilla ultricies, metus tortor cursus felis, id scelerisque mauris diam quis nisi. Quisque quis ipsum quam, et consequat ligula. Donec quis nisl ipsum, at elementum est. Nam aliquam odio non mauris tristique porta. Aliquam accumsan dictum est vel sagittis. Vivamus et felis ac leo iaculis rhoncus nec ac odio. Ut elementum enim fermentum nisi rhoncus vestibulum. Vestibulum at mi mauris. Mauris id sem non erat hendrerit eleifend ultricies quis elit. Maecenas lacinia tincidunt convallis. Pellentesque mi odio, posuere eget ornare vel, porta vitae justo. Nulla gravida interdum tempor.</p>
            <p>Maecenas rutrum tortor vel mauris facilisis ac vestibulum lacus malesuada. Sed sed justo dui. Mauris luctus pellentesque est, vestibulum egestas arcu laoreet eu. Phasellus tempor, nisi vel molestie varius, tortor nibh commodo purus, at tempus nisi dolor ac quam. Phasellus iaculis sem ut felis porttitor mattis. Pellentesque pulvinar venenatis tellus, vehicula placerat arcu laoreet vitae. Integer eleifend vehicula porta. Aenean volutpat, neque et placerat pulvinar, risus sem volutpat arcu, sed feugiat quam enim eget urna. Aliquam dignissim ultricies tortor, ut rhoncus lacus ultricies eu.</p>
            <p>Fusce mollis hendrerit elit, quis egestas elit gravida vitae. Proin libero nisi, tristique id egestas vitae, consectetur id velit. Donec ac massa tellus, eu consequat turpis. Morbi neque nibh, eleifend sit amet mollis vel, varius vel justo. Nulla ac tortor diam. Ut posuere, massa tristique condimentum sagittis, orci nunc iaculis mi, eu porta orci metus a ligula. Pellentesque feugiat nibh et metus malesuada tempus nec vitae felis. Curabitur enim enim, tincidunt in blandit eu, tempus nec magna. Proin porttitor interdum quam.</p>
            <p>Nullam erat tellus, fringilla vitae dignissim ac, sollicitudin in lacus. In consequat vestibulum odio id ultrices. Donec vel enim dui. Sed dictum porta eleifend. Nunc fermentum interdum leo, ac bibendum lorem hendrerit in. Pellentesque luctus, nisl a porttitor viverra, orci sem pharetra odio, at elementum dolor nulla vitae magna. Sed eu ultrices nisl. Sed consequat imperdiet nisl sit amet congue. Vivamus sit amet odio at quam pharetra tincidunt non ac purus. Praesent sit amet velit vitae augue mollis euismod vel nec nisi. Integer mollis lacus quis orci ultricies facilisis. Morbi massa augue, vulputate vitae consectetur in, volutpat vel eros. Cras blandit consequat congue.</p>
            <p>Integer quam enim, ultricies in accumsan quis, volutpat quis ante. Suspendisse euismod, ante et tempus auctor, justo augue adipiscing nisl, vel volutpat ante enim ac velit. Aenean vel mauris arcu. Fusce laoreet ligula at nunc fringilla in elementum augue tincidunt. Donec nec mauris nibh. Integer sit amet sem eget augue feugiat venenatis. Aenean volutpat dictum blandit. Quisque sit amet quam id libero viverra porta.</p>
          </div>
        </div>
        <!--content end-----------------------------------> 
        <!--footer---------------------------------------->
        <div id="footer" class="row">
          <div class="inner-padding"> test test test </div>
        </div>
        <!--footer end------------------------------------> 
      </div>
    </div>
  </div>
</div>




</body>
</html>