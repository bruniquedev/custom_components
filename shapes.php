<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body, html {
  height: 100%;
}

body {
/*  padding: 0;
  background-color: #333;
  display: flex;
  align-items: center;
  justify-content: center;*/
}

.circle {
  height: 200px;
  width: 200px;
  border-radius: 50%;
  background-color: #3d9970;
}

.triangle {
  height: 0;
  width: 0;
  border-left: 100px solid #ff4136;
  border-right: 100px solid transparent;
  border-bottom: 100px solid transparent;
  border-top: 100px solid transparent;
}

.trapezium {
  border-bottom: 100px solid #333;
  border-left: 50px solid transparent;
  border-right: 50px solid transparent;
  height: 0;
  width: 100px;
}
.diamond {
  height: 150px;
  width: 150px;
  background-color: #7FDBFF;
  transform: rotate(45deg);
} 

.pentagon {
    position: relative;
    width: 54px;
    border-width: 50px 18px 0;
    border-style: solid;
    border-color: #01ff70 transparent;
}
.pentagon:before {
    content: "";
    position: absolute;
    height: 0;
    width: 0;
    top: -85px;
    left: -18px;
    border-width: 0 45px 35px;
    border-style: solid;
    border-color: transparent transparent #01ff70;
}

.word_ellipse {
  shape-outside: ellipse(100px 200px at 50% 50%);
  width: 300px;
  height: 500px;
  float: left;
  opacity: .2;
}

.polygon {
  width: 350px;
  height: 350px;
  background-color: #39cccc;
  background-size: cover;
  clip-path: polygon(0% 100%, 100% 100%, 0% 0%);
}

/**  for animating design**/
.pointer {
  width: 280px;
  height: 280px;
  background: url('https://ununsplash.imgix.net/photo-1427434846691-47fc561d1179?dpr=2&fit=crop&fm=jpg&h=700&q=75&w=1050') center no-repeat;
  background-size: cover;
  clip-path: polygon(0% 20%, 60% 20%, 60% 0%, 100% 50%, 60% 100%, 60% 80%, 0% 80%);
  animation: clips 3s ease infinite;
}

@keyframes clips {
  50% {
clip-path: polygon(40% 0%, 40% 20%, 100% 20%, 100% 80%, 40% 80%, 40% 100%, 0% 50%)
  }
}


</style>
</head>
<body>

<h1>https://css-tricks.com/working-with-shapes-in-web-design/</h1>

<div class="circle"></div>
<div class="triangle"></div>
<div class="trapezium"></div>
<div class="diamond"></div>
<div class="pentagon"></div>
<div class="polygon"></div>


<div class="pointer"></div>


<div class="word_ellipse"></div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis impedit libero esse odio excepturi fuga est ut itaque a quod suscipit, rerum asperiores. Consequuntur voluptates illo rerum recusandae pariatur asperiores, aspernatur, saepe ipsum error dolorem, quod inventore possimus modi deleniti tenetur et officiis. Nemo ab in totam ratione sequi error, ea dolorum repudiandae omnis, eaque facere impedit fugiat. Dolorum distinctio autem sequi enim quidem esse accusamus repudiandae voluptatum nobis, velit, molestiae. Eaque maiores, harum. Saepe esse repellendus sint. Labore provident optio quis commodi quod quaerat quo similique perspiciatis libero facere. Suscipit odit quas nemo, enim laudantium, provident repellendus natus nostrum facilis expedita adipisci qui, harum minus quidem officia cupiditate repellat ut praesentium. Possimus corporis, error atque ex adipisci, illum suscipit pariatur saepe impedit aliquam amet eos reiciendis quidem hic, nisi. Sint nobis modi, nesciunt quasi placeat quia. Veniam inventore corrupti quisquam illum debitis vitae accusamus nobis alias cum iste error magnam, cupiditate earum! Incidunt at consequuntur, rem ipsa odio ipsum deleniti repudiandae blanditiis harum ut in, fugit officia rerum ad, corporis dolore! Commodi repellendus esse quibusdam enim qui totam ipsum, consequuntur officia vel dolores, quod corrupti eveniet maiores minus explicabo, sapiente ratione doloribus laboriosam impedit nesciunt a obcaecati quam veritatis! Placeat, velit possimus delectus, atque voluptate iste alias illo, dolor odit ipsa facere quibusdam? Non omnis aliquid eveniet fuga labore dolores, autem blanditiis, dolorem error ex enim fugiat quisquam aut reprehenderit delectus, nihil accusamus eaque at odit natus accusantium sunt asperiores unde? Tempora dolorem, ad quidem quis adipisci dolores tempore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis impedit libero esse odio excepturi fuga est ut itaque a quod suscipit, rerum asperiores. Consequuntur voluptates illo rerum recusandae pariatur asperiores, aspernatur, saepe ipsum error dolorem, quod inventore possimus modi deleniti tenetur et officiis. Nemo ab in totam ratione sequi error, ea dolorum repudiandae omnis, eaque facere impedit fugiat. Dolorum distinctio autem sequi enim quidem esse accusamus repudiandae voluptatum nobis, velit, molestiae. Eaque maiores, harum. Saepe esse repellendus sint. Labore provident optio quis commodi quod quaerat quo similique perspiciatis libero facere. Suscipit odit quas nemo, enim laudantium, provident repellendus natus nostrum facilis expedita adipisci qui, harum minus quidem officia cupiditate repellat ut praesentium. Possimus corporis, error atque ex adipisci, illum suscipit pariatur saepe impedit aliquam amet eos reiciendis quidem hic, nisi. Sint nobis modi, nesciunt quasi placeat quia. Veniam inventore corrupti quisquam illum debitis vitae accusamus nobis alias cum iste error magnam, cupiditate earum! Incidunt at consequuntur, rem ipsa odio ipsum deleniti repudiandae blanditiis harum ut in, fugit officia rerum ad, corporis dolore! Commodi repellendus esse quibusdam enim qui totam ipsum, consequuntur officia vel dolores, quod corrupti eveniet maiores minus explicabo, sapiente ratione doloribus laboriosam impedit nesciunt a obcaecati quam veritatis! Placeat, velit possimus delectus, atque voluptate iste alias illo, dolor odit ipsa facere quibusdam? Non omnis aliquid eveniet fuga labore dolores, autem blanditiis, dolorem error ex enim fugiat quisquam aut reprehenderit delectus, nihil accusamus eaque at odit natus accusantium sunt asperiores unde? Tempora dolorem, ad quidem quis adipisci dolores temporeNon omnis aliquid eveniet fuga labore dolores, autem blanditiis, dolorem error ex enim fugiat quisquam aut reprehenderit delectus, nihil accusamus eaque at odit natus accusantium sunt asperiores unde? Tempora dolorem, ad quidem quis adipisci dolores temporeNon omnis aliquid eveniet fuga labore dolores, autem blanditiis, dolorem error ex enim fugiat quisquam aut reprehenderit delectus, nihil accusamus eaque at odit natus accusantium sunt asperiores unde? Tempora dolorem, ad quidem quis adipisci dolores temporeNon omnis aliquid eveniet fuga labore dolores, autem blanditiis, dolorem error ex enim fugiat quisquam aut reprehenderit delectus, nihil accusamus eaque at odit natus accusantium sunt asperiores unde? Tempora dolorem, ad quidem quis adipisci dolores temporeNon omnis aliquid eveniet fuga labore dolores, autem blanditiis, dolorem error ex enim fugiat quisquam aut reprehenderit delectus, nihil accusamus eaque at odit natus accusantium sunt asperiores unde? Tempora dolorem, ad quidem quis adipisci dolores temporeNon omnis aliquid eveniet fuga labore dolores, autem blanditiis, dolorem error ex enim fugiat quisquam aut reprehenderit delectus, nihil accusamus eaque at odit natus accusantium sunt asperiores unde? Tempora dolorem, ad quidem quis adipisci dolores tempore</p>


</body>
</html>