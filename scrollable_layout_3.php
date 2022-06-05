<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

/* Using this CSS is giving me unexpected result.*/
html {
  scroll-behavior: smooth;
}
body {
  margin: 0;
  display: grid;
  grid-template-columns: min-content 1fr;
  font-family: system-ui, sans-serif;
  
  /* this breaks position sticky in Firefox */
  /* overflow-x: hidden; */
}
header {
  grid-column: 1 / 3;
  background: #455A64;
  color: white;
  padding: 4rem;
  text-align: center;
}
nav {
  white-space: nowrap;
  background: #37474F;
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
/* Only stick if you can fit */
@media (min-height: 300px) {
  nav ul {
    position: sticky;
    top: 0;
  }
}
nav ul li a {
  display: block;
  padding: 0.5rem 1rem;
  color: white;
  text-decoration: none;
}
nav ul li a.current {
  background: black;
}
main {
  padding-bottom: 40rem;
}
section {
  padding: 2rem;
  margin: 0 0 2rem 0;
}
footer {
  grid-column: 1 / 3;
  background: #607D8B;
  padding: 5rem 1rem;
}

</style>
</head>
<body>

<header>
  <h1>Website</h1>
</header>

<nav>
  <ul>
    <li><a href="#section-1">Section 1</a></li>
    <li><a href="#section-2">Section 2</a></li>
    <li><a href="#section-3">Section 3</a></li>
    <li><a href="#section-4">Section 4</a></li>
    <li><a href="#section-5">Section 5</a></li>
    <li><a href="#section-6">Section 6</a></li>
    <li><a href="#section-7">Section 7</a></li>
    <li><a href="#section-8">Section 8</a></li>
    <li><a href="#section-9">Section 9</a></li>
  </ul>
</nav>

<main>
  <section id="section-1">
    <h1>Section 1</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis, blanditiis expedita? Earum eligendi pariatur quaerat quos expedita ab quibusdam ratione veniam in, mollitia fuga repudiandae?</p>
  </section>
  <section id="section-2">
    <h1>Section 2</h1>
    <p>Ratione nulla nam, ipsa dignissimos corrupti veniam nostrum, laudantium asperiores sequi numquam placeat velit voluptate in praesentium non labore unde incidunt laborum maxime quae magni.</p>
  </section>
  <section id="section-3">
    <h1>Section 3</h1>
    <p>Soluta quibusdam ad nostrum vel voluptate delectus sequi dolores quia quaerat officia corrupti, aperiam fugit facere debitis repudiandae praesentium sapiente inventore repellendus, nemo commodi alias!</p>
  </section>
  <section id="section-4">
    <h1>Section 4</h1>
    <p>Aliquid aliquam magnam ducimus similique obcaecati, unde exercitationem laborum incidunt, quas in ipsum inventore nostrum? Blanditiis optio cumque earum iste odio! Alias sint accusamus repudiandae.</p>
  </section>
  <section id="section-5">
    <h1>Section 5</h1>
    <p>Officia ipsum fugit iure eaque quisquam error tempore earum enim illum, delectus officiis incidunt corrupti aliquid nam quas perspiciatis eveniet doloremque quod labore? Doloremque, ipsum?</p>
  </section>
  <section id="section-6">
    <h1>Section 6</h1>
    <p>Aperiam repellat dignissimos fugiat possimus esse, suscipit neque nisi libero alias obcaecati ipsam, porro illo corrupti nostrum reprehenderit unde, illum in laudantium impedit. Modi, veniam.</p>
  </section>
  <section id="section-7">
    <h1>Section 7</h1>
    <p>Cum asperiores temporibus itaque consequatur quod inventore, quia quis explicabo dicta esse minus voluptatem reiciendis eveniet animi, necessitatibus illum dolorem doloremque repellat placeat, dolores eaque.</p>
  </section>
  <section id="section-8">
    <h1>Section 8</h1>
    <p>Optio qui, omnis itaque rerum iusto molestiae necessitatibus deleniti quod tenetur id perspiciatis voluptatum dolorum quisquam eius ipsum non architecto labore! Distinctio, tenetur. Officiis, necessitatibus?</p>
  </section>
  <section id="section-9">
    <h1>Section 9</h1>
    <p>Rem iste iure blanditiis excepturi esse nisi corrupti sequi, illo, laborum quo quis quaerat assumenda perspiciatis quod fuga vel laudantium doloribus architecto tempora omnis earum!</p>
  </section>
</main>

<footer>
  &copy;2018 Footer
</footer>	

<script type="text/javascript">
let mainNavLinks = document.querySelectorAll("nav ul li a");
let mainSections = document.querySelectorAll("main section");

let lastId;
let cur = [];

// This should probably be throttled.
// Especially because it triggers during smooth scrolling.
// https://lodash.com/docs/4.17.10#throttle
// You could do like...
// window.addEventListener("scroll", () => {
//    _.throttle(doThatStuff, 100);
// });
// Only not doing it here to keep this Pen dependency-free.

window.addEventListener("scroll", event => {
  let fromTop = window.scrollY;

  mainNavLinks.forEach(link => {
    let section = document.querySelector(link.hash);

    if (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      link.classList.add("current");
    } else {
      link.classList.remove("current");
    }
  });
});
	
</script>


</body>
</html>