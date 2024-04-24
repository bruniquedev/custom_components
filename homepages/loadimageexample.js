                 <div>
                <img data-img="33-63424.jpg" data-major="900" class="blurred-img" src="./assets/images/uploads/400/33-63424.jpg">
            </div>
                        <div>
                <img data-img="32-61095.jpg" data-major="900" class="blurred-img" src="./assets/images/uploads/400/32-61095.jpg">
            </div>
			
<img data-img="32-61095.jpg" data-major="900" class="" src="./assets/images/uploads/900/32-61095.jpg">


.blurred-img {
	animation-name: blurredimg;
	animation-iteration-count: infinite;
	animation-timing-function: linear;
	animation-delay: 0s;
	animation-duration: 1s;
	filter: blur(3px);
}
@keyframes blurredimg {
	0%,
	100% {
		filter: blur(1px);
	}
	50% {
		filter: blur(6px);
	}
}


window.addEventListener("DOMContentLoaded", DOMReady);

function DOMReady() {

loadImages()
}
function loadImages() {
	// return;
	let img = document.querySelectorAll(".blurred-img");
	for (let x = 0; x < img.length; x++) {
		let i = document.createElement("img");
		let src = `./assets/images/uploads/${img[x].dataset.major}/${img[x].dataset.img}`;
		console.log(src);
		let tag = img[x];
		i.onload = function () {
			console.log("Loaded img ", i, tag);
			tag.src = src;
			tag.classList.remove("blurred-img");
		};
		i.src = src;
	}
}