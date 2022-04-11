<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

/* Slicebox Style */
.sb-slider {
	margin: 10px auto;
	position: relative;
	overflow: hidden;
	width: 100%;
	list-style-type: none;
	padding: 0;
}

.sb-slider li {
	margin: 0;
	padding: 0;
	display: none;
}

.sb-slider li > a {
	outline: none;
}

.sb-slider li > a img {
	border: none;
}

.sb-slider img {
	max-width: 100%;
	display: block;
}

.sb-description {
	padding: 20px;
	bottom: 10px;
	left: 10px;
	right: 10px;
	z-index: 1000;
	position: absolute;
	background: #CBBFAE;
	background: rgba(190,176,155, 0.4);
	border-left: 4px solid rgba(255,255,255,0.7);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);	
	opacity: 0;
	color: #fff;

	-webkit-transition: all 200ms;
	-moz-transition: all 200ms;
	-o-transition: all 200ms;
	-ms-transition: all 200ms;
	transition: all 200ms;
}

.sb-slider li.sb-current .sb-description {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
	filter: alpha(opacity=80);	
	opacity: 1;
}

.sb-slider li.sb-current .sb-description:hover {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=99)";
	filter: alpha(opacity=99);	
	background: rgba(190,176,155, 0.7);
}

.sb-perspective {
	position: relative;
}

.sb-perspective > div {
	position: absolute;

	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;

	-webkit-backface-visibility : hidden;
	-moz-backface-visibility : hidden;
	-o-backface-visibility : hidden;
	-ms-backface-visibility : hidden;
	backface-visibility : hidden;
}

.sb-side {
	margin: 0;
	display: block;
	position: absolute;

	-moz-backface-visibility : hidden;

	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
}


/* custom style */
.container {
  margin: 30px;
}

.shadow {
	width: 100%;
	height: 168px;
	position: relative;
	margin-top: -110px;
	background: transparent url(https://tympanus.net/Development/Slicebox/images/shadow.png) no-repeat bottom center;
	background-size: 100% 100%; /* stretches it */
	z-index: -1;
	display: none;
}

.sb-description h3 {
	font-size: 20px;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
}

.sb-description h3 a {
	color: #4a3c27;
	text-shadow: 0 1px 1px rgba(255,255,255,0.5);
}

.nav-arrows {
	display: none;
}

.nav-arrows a {
	width: 42px;
	height: 42px;
	background: #cbbfae url(https://tympanus.net/Development/Slicebox/images/nav.png) no-repeat top left;
	position: absolute;
	top: 50%;
	left: 2px;
	text-indent: -9000px;
	cursor: pointer;
	margin-top: -21px;
	opacity: 0.9;
	border-radius: 50%;
	box-shadow: 0 1px 1px rgba(255,255,255,0.8);
}

.nav-arrows a:first-child{
	left: auto;
	right: 2px;
	background-position: top right;
}

.nav-arrows a:hover {
	opacity: 1;
}

.nav-dots {
	text-align: center;
	position: absolute;
	bottom: -5px;
	height: 30px;
	width: 100%;
	left: 0;
	display: none;
}

.nav-dots span {
	display: inline-block;
	width: 16px;
	height: 16px;
	border-radius: 50%;
	margin: 3px;
	background: #cbbfae;
	cursor: pointer;
	box-shadow: 
		0 1px 1px rgba(255,255,255,0.6), 
		inset 0 1px 1px rgba(0,0,0,0.1);
}

.nav-dots span.nav-dot-current {
	box-shadow: 
		0 1px 1px rgba(255,255,255,0.6), 
		inset 0 1px 1px rgba(0,0,0,0.1), 
		inset 0 0 0 3px #cbbfae,
		inset 0 0 0 8px #fff;
}

.nav-options {
	width: 70px;
	height: 30px;
	position: absolute;
	right: 70px;
	bottom: 0px;
	display: none;
}

.nav-options span {
	width: 30px;
	height: 30px;
	background: #cbbfae url(https://tympanus.net/Development/Slicebox/images/options.png) no-repeat top left;
	text-indent: -9000px;
	cursor: pointer;
	opacity: 0.7;
	display: inline-block;
	border-radius: 50%;
}

.nav-options span:first-child{
	background-position: -30px 0px;
	margin-right: 3px;
}

.nav-options span:hover {
	opacity: 1;
}



</style>
</head>
<body>

<div class="container">
  <div class="wrapper">

    <ul id="sb-slider" class="sb-slider">
      <li>
        <a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank"><img src="https://tympanus.net/Development/Slicebox/images/1.jpg" alt="image1"/></a>
        <div class="sb-description">
          <h3>Creative Lifesaver</h3>
        </div>
      </li>
      <li>
        <a href="http://www.flickr.com/photos/strupler/2968268187" target="_blank"><img src="https://tympanus.net/Development/Slicebox/images/2.jpg" alt="image2"/></a>
        <div class="sb-description">
          <h3>Honest Entertainer</h3>
        </div>
      </li>
      <li>
        <a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="https://tympanus.net/Development/Slicebox/images/3.jpg" alt="image1"/></a>
        <div class="sb-description">
          <h3>Brave Astronaut</h3>
        </div>
      </li>
      <li>
        <a href="http://www.flickr.com/photos/strupler/2968122059" target="_blank"><img src="https://tympanus.net/Development/Slicebox/images/4.jpg" alt="image1"/></a>
        <div class="sb-description">
          <h3>Affectionate Decision Maker</h3>
        </div>
      </li>
      <li>
        <a href="http://www.flickr.com/photos/strupler/2969119944" target="_blank"><img src="https://tympanus.net/Development/Slicebox/images/5.jpg" alt="image1"/></a>
        <div class="sb-description">
          <h3>Faithful Investor</h3>
        </div>
      </li>
      <li>
        <a href="http://www.flickr.com/photos/strupler/2968126177" target="_blank"><img src="https://tympanus.net/Development/Slicebox/images/6.jpg" alt="image1"/></a>
        <div class="sb-description">
          <h3>Groundbreaking Artist</h3>
        </div>
      </li>
      <li>
        <a href="http://www.flickr.com/photos/strupler/2968945158" target="_blank"><img src="https://tympanus.net/Development/Slicebox/images/7.jpg" alt="image1"/></a>
        <div class="sb-description">
          <h3>Selfless Philantropist</h3>
        </div>
      </li>
    </ul>

    <div id="shadow" class="shadow"></div>
    
    <div id="nav-arrows" class="nav-arrows">
      <a href="#">Next</a>
      <a href="#">Previous</a>
    </div>
    
  </div>
</div>


<script type="text/javascript">
	
$(function() {
				
  var Page = (function() {
    
    var $navArrows = $( '#nav-arrows' ).hide(),
        $shadow = $( '#shadow' ).hide(),
        slicebox = $( '#sb-slider' ).slicebox( {
          onReady : function() {
            
            $navArrows.show();
            $shadow.show();
            
          },
          orientation : 'r',
          cuboidsRandom : true,
          disperseFactor : 30
        } ),
        
        init = function() {
          
          initEvents();
          
        },
        initEvents = function() {
          
          // add navigation events
          $navArrows.children( ':first' ).on( 'click', function() {
            
            slicebox.next();
            return false;
            
          } );
          
          $navArrows.children( ':last' ).on( 'click', function() {
            
            slicebox.previous();
            return false;
            
          } );
          
        };
    
    return { init : init };
    
  })();
  
  Page.init();
  
});



	
</script>



</body>
</html>

