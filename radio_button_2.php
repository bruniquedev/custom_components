<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Variables
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
	--primary-c: #2196F3;
	--secondary-c: #B2D7F5;
	
	--white: #FDFBFB;
	
	--text: #082943;	
	--bg: var(--primary-c);
}


/* Basic Config
–––––––––––––––––––––––––––––––––––––––––––––––––– */
html, body {
	height: 100%;
	padding: 0;
	margin: 0;
}

body {
  background-color: var(--bg);
  display: flex;
  justify-content: center;
  align-items: center;
	font-family: 'Raleway', sans-serif;
	color: var(--text);
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

ul {
	list-style-type: none;
	padding-left: 50px;
	margin: 0;
}

li {
	display: block;
	position: relative;
	padding: 20px 0px;
}

h2 {
	margin: 10px 0;
	font-weight: 900;
}


/* Card
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.card {
	display: flex;
	flex-direction: column;	
	background: var(--white);
	width: 300px;
	padding: 20px 25px;
	border-radius: 20px;
	box-shadow: 0 19px 38px rgba(0, 0, 0, 0.13);
}


/* Radio Button
–––––––––––––––––––––––––––––––––––––––––––––––––– */
input[type=radio] {
	position: absolute;
	visibility: hidden;
}

label { 
	cursor: pointer; 
	font-weight: 400;
}

.check {
	width: 30px; height: 30px;
	position: absolute;
	border-radius: 50%;
	transition: transform .6s cubic-bezier(0.68, -0.55, 0.27, 1.55);
}

/* Reset */
input#one ~ .check { 
	transform: translate(-50px, -25px); 
	background: var(--secondary-c); 
}
input#two ~ .check { 
	transform: translate(-50px, -83px); 
	background: var(--primary-c);
	box-shadow: 0 6px 12px rgba(33, 150, 243, 0.35);
}

/* Radio Input #1 */
input#one:checked ~ .check { transform: translate(-50px, 33px); }

/* Radio Input #2  */
input#two:checked ~ .check { transform: translate(-50px, -25px); }


</style>
</head>
<body>

<div class="card">
	<h2>Radio Buttons</h2>
	
	<ul>
		<li>
			<input type="radio" name="name" id="one" checked />
			<label for="one">Option #1</label>
			
			<div class="check"></div>
		</li>
		
		<li>
			<input type="radio" name="name" id="two" />
			<label for="two">Option #2</label>
			
			<div class="check"></div>
		</li>
	</ul>
</div>

</body>
</html>