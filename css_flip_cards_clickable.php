<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

$accent-color: #355cc9;

* {
	box-sizing: border-box;
}

body {
	margin: 0;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	height: 100vh;
	font-family: 'Montserrat', sans-serif;
}
.wrapper {
	display: flex;
	flex-flow: row wrap;
	justify-content: center;
}

.card {
	width: 420px;
	height: 340px;
	margin: 1em;
	perspective: 1500px;
	.content {
		position: relative;
		width: 100%;
		height: 100%;
		transform-style: preserve-3d;
		transition: transform 0.8s cubic-bezier(0.75, 0, 0.85, 1);
	}
}

.more {
	display: none;

	&:checked ~ .content {
		transform: rotateY(180deg);
	}
}

.front,
.back {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	backface-visibility: hidden;
	transform-style: preserve-3d;
	border-radius: 6px;

	.inner {
		height: 100%;
		display: grid;
		padding: 1.5em;
		transform: translateZ(80px) scale(0.94);
	}
}

.front {
	background-color: #fff;
	background-size: cover;
	background-position: center center;
	&:after {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		display: block;
		border-radius: 6px;
		backface-visibility: hidden;
		background: linear-gradient(
			40deg,
			rgba(67, 138, 243, 0.7),
			rgba(255, 242, 166, 0.7)
		);
	}
	.inner {
		grid-template-rows: 5fr 1fr 1fr 2fr 1fr;
		justify-items: center;
	}

	h2 {
		grid-row: 2;
		margin-bottom: 0.3em;
		text-transform: uppercase;
		letter-spacing: 3px;
		color: #fff;
		font-weight: 500;
		text-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
	}

	.rating {
		grid-row: 3;
		color: rgba(255, 255, 255, 0.8);
		font-size: 14px;
		display: flex;
		flex-flow: row nowrap;
		i {
			margin: 0 1px;
		}
	}
}

.back {
	transform: rotateY(180deg);
	background-color: #fff;
	border: 2px solid rgb(240, 240, 240);
	.inner {
		grid-template-rows: 1fr 2fr 1fr 2fr 14fr 1fr 1fr;
		grid-template-columns: repeat(4, auto);
		grid-column-gap: 0.8em;
		justify-items: center;
	}

	.info {
		position: relative;
		display: flex;
		align-items: center;
		color: $accent-color;
		grid-row: 3;
		&:not(:first-of-type):before {
			content: '';
			position: absolute;
			left: -0.9em;
			height: 18px;
			width: 1px;
			background-color: #ccc;
		}
		span {
			font-size: 2em;
			font-weight: 700;
		}
		i {
			&:before {
				background: linear-gradient(40deg, $accent-color, rgb(67, 138, 243));

				-webkit-text-fill-color: transparent;
				-webkit-background-clip: text;
			}
			font-size: 1.2em;
		}
		.icon {
			margin-left: 0.3em;
			span {
				display: block;
				margin-top: -0.25em;
				font-size: 0.8em;
				font-weight: 600;
				white-space: nowrap;
			}
		}
	}

	.description {
		grid-row: 5;
		grid-column: 1/-1;
		font-size: 0.86em;
		border-radius: 5px;
		font-weight: 600;
		line-height: 1.4em;
		overflow: auto;
		color: $accent-color;
		padding-right: 10px;
	}

	.location,
	.price {
		font-weight: 600;
		color: $accent-color;
		grid-row: 1;
		font-size: 0.86em;
	}

	.location {
		grid-column: 1/3;
		justify-self: left;
	}

	.price {
		grid-column: 3/-1;
		justify-self: right;
	}

	.button {
		grid-column: 1/-1;
		justify-self: center;
	}
}

.button {
	grid-row: -1;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 600;
	cursor: pointer;
	display: block;
	padding: 0 1.5em;
	height: 3em;
	line-height: 2.9em;
	min-width: 3em;
	background-color: transparent;
	border: solid 2px #fff;
	color: #fff;
	border-radius: 4px;
	text-align: center;
	left: 50%;
	backface-visibility: hidden;
	transition: 0.3s ease-in-out;
	text-shadow: 0 0 6px rgba(0, 0, 0, 0.3);

	&:hover {
		background-color: #fff;
		box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
		text-shadow: none;
		color: $accent-color;
	}

	&.return {
		line-height: 3em;
		color: $accent-color;
		border-color: $accent-color;
		text-shadow: none;
		&:hover {
			background-color: $accent-color;
			color: #fff;
			box-shadow: none;
		}
	}
}

::-webkit-scrollbar {
	width: 5px;
}
::-webkit-scrollbar-track {
	background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
	background: lighten($accent-color, 20%);
}
::-webkit-scrollbar-thumb:hover {
	background: $accent-color;
}


</style>
</head>
<body>


<div class="wrapper">
        <div class="card">
            <input type="checkbox" id="card1" class="more" aria-hidden="true">
            <div class="content">
                <div class="front" style="background-image: url('https://images.unsplash.com/photo-1529408686214-b48b8532f72c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=986e2dee5c1b488d877ad7ba1afaf2ec&auto=format&fit=crop&w=1350&q=80')">
                    <div class="inner">
                        <h2>Cozy apartment</h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <label for="card1" class="button" aria-hidden="true">
                            Details
                        </label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span>5</span>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                                <span>people</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>4</span>
                            <div class="icon">
                                <i class="fas fa-door-open"></i>
                                <span>rooms</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>3</span>
                            <div class="icon">
                                <i class="fas fa-bed"></i>
                                <span>beds</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>1</span>
                            <div class="icon">
                                <i class="fas fa-bath"></i>
                                <span>bath</span>
                            </div>
                        </div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates earum nostrum ipsam
                                ullam, reiciendis nam consectetur? Doloribus voluptate architecto possimus perferendis
                                tenetur nemo amet temporibus, enim soluta nam, debitis.</p>
                        </div>
                        <div class="location">Warsaw, Poland</div>
                        <div class="price">38€ / day</div>
                        <label for="card1" class="button return" aria-hidden="true">
                            <i class="fas fa-arrow-left"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <input type="checkbox" id="card2" class="more">
            <div class="content">
                <div class="front" style="background-image: url('https://images.unsplash.com/photo-1515263487990-61b07816b324?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c02fb96f9cfc16d3649835b75d1b2033&auto=format&fit=crop&w=1350&q=80')">
                    <div class="inner">
                        <h2>Modern flat</h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <label for="card2" class="button" aria-hidden="true">
                            Details
                        </label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span>4</span>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                                <span>people</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>3</span>
                            <div class="icon">
                                <i class="fas fa-door-open"></i>
                                <span>rooms</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>2</span>
                            <div class="icon">
                                <i class="fas fa-bed"></i>
                                <span>beds</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>1</span>
                            <div class="icon">
                                <i class="fas fa-bath"></i>
                                <span>bath</span>
                            </div>
                        </div>
                        <div class="description">
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem unde ea voluptas
                                fuga
                                odio vel veniam eveniet, explicabo autem earum?</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                        </div>
                        <div class="location">Warsaw, Poland</div>
                        <div class="price">42€ / day</div>
                        <label for="card2" class="button return" aria-hidden="true">
                            <i class="fas fa-arrow-left"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <input type="checkbox" id="card3" class="more">
            <div class="content">
                <div class="front" style="background-image: url('https://images.unsplash.com/photo-1529595354331-201ad3ae5e71?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6114533e2d0c1c81534fe13611dbfd76&auto=format&fit=crop&w=658&q=80')">
                    <div class="inner">
                        <h2>Luxury property</h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <label for="card3" class="button" aria-hidden="true">
                            Details
                        </label>
                    </div>
                </div>
                <div class="back">
                    <div class="inner">
                        <div class="info">
                            <span>8</span>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                                <span>people</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>7</span>
                            <div class="icon">
                                <i class="fas fa-door-open"></i>
                                <span>rooms</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>5</span>
                            <div class="icon">
                                <i class="fas fa-bed"></i>
                                <span>beds</span>
                            </div>
                        </div>
                        <div class="info">
                            <span>2</span>
                            <div class="icon">
                                <i class="fas fa-bath"></i>
                                <span>baths</span>
                            </div>
                        </div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa libero
                                totam nostrum consequatur autem quae provident quos alias fugit maxime nisi labore,
                                temporibus tempore illo natus voluptates aliquam ipsum officia quasi placeat aut
                                facilis
                                laudantium nam!</p>
                            <p>Quam, iusto.Neque ratione ut deserunt unde dicta nesciunt,
                                repudiandae
                                aspernatur explicabo numquam! Tenetur!</p>
                        </div>
                        <div class="location">Cracow, Poland</div>
                        <div class="price">60€ / day</div>
                        <label for="card3" class="button return" aria-hidden="true">
                            <i class="fas fa-arrow-left"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>	