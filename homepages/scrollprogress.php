<!DOCTYPE html>
<html>
<head>
<title>scroll progress</title>

<style type="text/css">
ody {
  padding: 0;
  margin: 0;
  min-height: 500vh;
  background-color: rgb(139, 201, 228);
  animation: body 1s linear;
}
@keyframes body {
  to {
    background-color: rgb(19, 48, 97);
  }
}

.progress {
  height: 3px;
  width: 0%;
  background-color: #fff;
  position: fixed;
  top: 0;
  left: 0;
  animation: progress 1s linear;
}
@keyframes progress {
  to {
    background-color: rgb(20, 255, 226);
    width: 100%;
  }
}

.cube-wrap {
  --size: 30vmin;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  perspective: 100vmin;
}
.cube {
  transform-style: preserve-3d;
  transform: rotateX(0deg) rotateZ(45deg) rotateY(-45deg);
  animation: cube 1s linear;
}
@keyframes cube {
  to {
    transform: rotateX(360deg) rotateZ(45deg) rotateY(-45deg);
  }
}

.side {
  position: absolute;
  width: var(--size);
  height: var(--size);
  background-color: #eee;
  backface-visibility: visible;
  top: calc(var(--size) * -.5);
  left: calc(var(--size) * -.5);
}
.top {
  background-color: #fff;
  transform: rotateX(90deg) translateZ(calc(var(--size) * .5));
}
.bottom {
  background-color: #999;
  transform: rotateX(90deg) translateZ(calc(var(--size) * -.5));
}
.left {
  background-color: #ccc;
  transform: rotateY(90deg) translateZ(calc(var(--size) * .5));
}
.right {
  background-color: #ddd;
  transform: rotateY(90deg) translateZ(calc(var(--size) * -.5));
}
.front {
  background-color: #aaa;
  transform: translateZ(calc(var(--size) * .5));
}
.back {
  background-color: #bbb;
  transform: translateZ(calc(var(--size) * -.5));
}

:root * {
  /* Pause the animation */
  animation-play-state: paused;
  /* Bind the animation to scroll */
  animation-delay: calc(var(--scroll) * -1s);
  /* These last 2 properites clean up overshoot weirdness */
  animation-iteration-count: 1;
  animation-fill-mode: both;
}	

</style>

</head>
<body>

	<div class="progress"></div>

<div class="cube-wrap">
  <div class="cube">
    <div class="side top"></div>
    <div class="side bottom"></div>
    <div class="side front"></div>
    <div class="side back"></div>
    <div class="side left"></div>
    <div class="side right"></div>
  </div>
</div>

<script type="text/javascript">
window.addEventListener('scroll', () => {
  document.body.style.setProperty('--scroll',window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
}, false);	
</script>

</body>
</html>