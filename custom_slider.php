<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

#slider {
    height: 100vh;
    --item-size: 72px;
}

#slider-container {
    display: flex;
    align-content: center;
    justify-content: center;
    height: calc(100% - var(--item-size)*2);
}

#slider-container * {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
    border-radius: 24px;
    transition: 0.3s;
}

#slider-container *.current {
    opacity: 1;
}

#slider-container *:not(.current) {
    opacity: 0;
}

#slider-navigation {
    display: grid;
    grid-template-columns: repeat(auto-fit, var(--item-size));
    gap: 32px 32px;
    align-content: center;
    justify-content: center;
    margin: 32px;
}

#slider-navigation * {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    object-fit: cover;
    width: var(--item-size);
    height: var(--item-size);
    border-radius: 9px;
    box-shadow: 0 10px 10px -5px rgba(0, 0, 0, 0.15);
    transition: 0.3s;
}

#slider-navigation *:not(.current) {
    opacity: 0.5;
}

#slider-navigation *.current,
#slider-navigation *:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.3);
    opacity: 1;
    cursor: pointer;
}


/* ---- lighted shadow effect, cf Muhammed Erdem's work ---- */

#slider-navigation *.current::before {
    content: "";
    background: inherit;
    width: 100%;
    height: 100%;
    display: block;
    z-index: 1;
    opacity: 0.9s;
    position: absolute;
    top: 10px;
    transform: scale(0.9);
    filter: blur(8px);
    border-radius: inherit;
    transition: 0.3s;
}

#slider-navigation *.current::after {
    content: "";
    background: inherit;
    width: 100%;
    height: 100%;
    display: block;
    box-shadow: 0px 10px 15px 0px rgba(0, 0, 0, 0.1);
    z-index: 2;
    position: absolute;
    border-radius: inherit;
    transition: 0.3s;
}


</style>
</head>
<body>


<div id="slider">
  <div id="slider-images" style="display: none;">
    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.allwhitebackground.com%2Fwp-content%2Fuploads%2F9%2FMountain-Wallpaper-1440x2560-62183.jpg" />
    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.allwhitebackground.com%2Fwp-content%2Fuploads%2F8%2FArtistic-Mountain-Wallpaper-3840x2400-50110.jpg" />
    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.brittanytourism.com%2Fapp%2Fuploads%2Fcrt-bretagne%2F2018%2F09%2Fguerande-et-ses-marais-salants-drean-fotolia-1200x675.jpg" />
  </div>

  <div id="slider-container"></div>
  <div id="slider-navigation"></div>
</div>


<script type="text/javascript">
  
var images = document.getElementById("slider-images");
var container = document.getElementById("slider-container");
var navigation = document.getElementById("slider-navigation");
var nb_images = images.children.length;

var ratios = [];
for (let i = 0; i < nb_images; i++) {
  ratios.push(images.children[i].naturalWidth / images.children[i].naturalHeight);
  // if the image is not loaded yet:
  images.children[i].addEventListener('load', () =>
                                      ratios[i] = images.children[i].naturalWidth / images.children[i].naturalHeight
                                     );
  var img = document.createElement("div");
  img.style.backgroundImage = "url('" + images.children[i].src + "')";
  container.appendChild(img);
  navigation.appendChild(img.cloneNode(true));
}

function showImage(n) {
  for (let i = 0; i < nb_images; i++) {
    var img = container.children[i];
    if (i == n) {
      img.style.width = "" + img.clientHeight * ratios[i] + "px";
      img.classList.add("current");
      navigation.children[i].classList.add("current");
    }
    else {
      img.style.width = "0px";
      img.classList.remove("current");
      navigation.children[i].classList.remove("current");
    }
  }
};


for (let i = 0; i < nb_images; i++) {
  navigation.children[i].onclick = () => showImage(i);
}

showImage(0);

  
</script>



</body>
</html>
