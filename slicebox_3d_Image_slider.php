<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
/*Step by step, we first set the style of the outermost section element and give it a light shadow effect.*/
.cr-container{
    width: 600px;
    height: 400px;
    position: relative;
    margin: 0 auto;
    border: 20px solid #fff;
    box-shadow: 1px 1px 3px rgba(0,0,0,0.1);
}

/*Because later we will use the general brother selector “~” to select the corresponding picture slice and title, so we will put all the label elements at the top of the code. By setting the Z-index attribute, make sure that the label element is displayed above the picture and text, and make them 350 PX away from the overall border through the margin top attribute.*/
.cr-container label{
    font-style: italic;
    width: 150px;
    height: 30px;
    cursor: pointer;
    color: #fff;
    line-height: 32px;
    font-size: 24px;
    float:left;
    position: relative;
    margin-top: 350px;
    z-index: 1000;
}

/*Next, add a small circle to beautify the label element. We create a pseudo element and place it in the center of the text.*/
.cr-container label:before{
    content:'';
    width: 34px;
    height: 34px;
    background: rgba(130,195,217,0.9);
    position: absolute;
    left: 50%;
    margin-left: -17px;
    border-radius: 50%;
    box-shadow: 0px 0px 0px 4px rgba(255,255,255,0.3);
    z-index:-1;
}

/*To create a separation line between the panel and the panel, we use another pseudo element of the label element and extend it from the top edge of the picture to the bottom edge with a gradient background.*/
.cr-container label:after{
    width: 1px;
    height: 400px;
    content: '';
    background: linear-gradient(top, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%);
    position: absolute;
    bottom: -20px;
    right: 0px;
}

/*There should be no divider on the right side of the last panel, so we set its width to 0.*/
.cr-container label.cr-label-img-4:after{
    width: 0px;
}

/*Now that we have the label style, we can hide all the radio buttons.*/
.cr-container input{
    display: none;
}

/*When we click a label element, its corresponding radio button is selected. In turn, you can use the generic sibling selector to select the label element for the selected button and change its text color.*/
.cr-container input.cr-selector-img-1:checked ~ label.cr-label-img-1,
.cr-container input.cr-selector-img-2:checked ~ label.cr-label-img-2,
.cr-container input.cr-selector-img-3:checked ~ label.cr-label-img-3,
.cr-container input.cr-selector-img-4:checked ~ label.cr-label-img-4{
    color: #68abc2;
}

/*We can also change the color of the small circle and add a shadow effect.*/
.cr-container input.cr-selector-img-1:checked ~ label.cr-label-img-1:before,
.cr-container input.cr-selector-img-2:checked ~ label.cr-label-img-2:before,
.cr-container input.cr-selector-img-3:checked ~ label.cr-label-img-3:before,
.cr-container input.cr-selector-img-4:checked ~ label.cr-label-img-4:before{
    background: #fff;
    box-shadow: 0px 0px 0px 4px rgba(104,171,194,0.6);
}

/*The image’s container will take up all the width and be absolutely positioned. Use this container later to set the background picture to the currently selected picture. We also need a default visible image, so add some background properties:*/
.cr-bgimg{
    width: 600px;
    height: 400px;
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: 1;
    background-repeat: no-repeat;
    background-position: 0 0;
}

/*Because we have four panels, each with a width of 150 pixels (600 divided by 4). When the panel is set to float to the left, it will be displayed side by side, and they will be set to overflow and hide, because we do not want to see the slicing out when sliding:*/
.cr-bgimg div{
    width: 150px;
    height: 100%;
    position: relative;
    float: left;
    overflow: hidden;
    background-repeat: no-repeat;
}

/*Each slice is also set to absolute positioning, and they are displayed outside the panel and hidden by left: – 150px:*/
.cr-bgimg div span{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0px;
    left: -150px;
    z-index: 2;
    text-indent: -9000px;
}

/*Next, let’s deal with the background image of the container and each slice:*/
.cr-container input.cr-selector-img-1:checked ~ .cr-bgimg,
.cr-bgimg div span:nth-child(1){
    background-image: url(vlcsnapa.png);
}
.cr-container input.cr-selector-img-2:checked ~ .cr-bgimg,
.cr-bgimg div span:nth-child(2){
    background-image: url(noah-silliman-141979.jpg);
}
.cr-container input.cr-selector-img-3:checked ~ .cr-bgimg,
.cr-bgimg div span:nth-child(3){
    background-image: url(photographer.jpg);
}
.cr-container input.cr-selector-img-4:checked ~ .cr-bgimg,
.cr-bgimg div span:nth-child(4){
    background-image: url(hero-1.png);
}

/*We also need to provide different positioning for the background image of slices according to different panels:*/
.cr-bgimg div:nth-child(1) span{
    background-position: 0px 0px;
}
.cr-bgimg div:nth-child(2) span{
    background-position: -150px 0px;
}
.cr-bgimg div:nth-child(3) span{
    background-position: -300px 0px;
}
.cr-bgimg div:nth-child(4) span{
    background-position: -450px 0px;
}

/*When we click a label, we slide all the slices to the right:*/
.cr-container input:checked ~ .cr-bgimg div span{
    animation: slideOut 0.6s ease-in-out;
}
@keyframes slideOut{
    0%{
        left: 0px;
    }
    100%{
        left: 150px;
    }
}

/*But in addition to the label we selected, its corresponding picture slice is from – 150px to 0px:*/
.cr-container input.cr-selector-img-1:checked ~ .cr-bgimg div span:nth-child(1),
.cr-container input.cr-selector-img-2:checked ~ .cr-bgimg div span:nth-child(2),
.cr-container input.cr-selector-img-3:checked ~ .cr-bgimg div span:nth-child(3),
.cr-container input.cr-selector-img-4:checked ~ .cr-bgimg div span:nth-child(4)
{
    transition: left 0.5s ease-in-out;
    animation: none;
    left: 0px;
    z-index: 10;
}

/*Finally, set the style of the main sub title in the H3 label. When we click a label, the transparency of its corresponding title will transition from 0 to 1:*/
.cr-titles h3{
    position: absolute;
    width: 100%;
    text-align: center;
    top: 50%;
    z-index: 10000;
    opacity: 0;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
    transition: opacity 0.8s ease-in-out;
}
.cr-titles h3 span:nth-child(1){
    font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
    font-size: 70px;
    display: block;
    letter-spacing: 7px;
}
.cr-titles h3 span:nth-child(2){
    letter-spacing: 0px;
    display: block;
    background: rgba(104,171,194,0.9);
    font-size: 14px;
    padding: 10px;
    font-style: italic;
    font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
}
.cr-container input.cr-selector-img-1:checked ~ .cr-titles h3:nth-child(1),
.cr-container input.cr-selector-img-2:checked ~ .cr-titles h3:nth-child(2),
.cr-container input.cr-selector-img-3:checked ~ .cr-titles h3:nth-child(3),
.cr-container input.cr-selector-img-4:checked ~ .cr-titles h3:nth-child(4){
    opacity: 1;
}

</style>
</head>
<body>


	<!--
		Composition of rotation
HTML consists of three main parts: radio buttons and tags, a container with four panels, a slice of each picture, and a title. The container set to class = “CR bgimg” will be divided into four panels for each picture. In each panel, the background picture will be positioned in the appropriate position through the background position attribute. So, the first panel will have four slices, each with a picture as the background and on the far left of the container. The second panel also has four slices, which are located on the right side of the first panel to display the second slice part of the picture:
-->

<section class="cr-container">            

    <! -- radio buttons and label labels -- >
    <input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/>
    <label for="select-img-1" class="cr-label-img-1">1</label>

    <input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
    <label for="select-img-2" class="cr-label-img-2">2</label>

    <input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
    <label for="select-img-3" class="cr-label-img-3">3</label>

    <input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
    <label for="select-img-4" class="cr-label-img-4">4</label>

    <div class="clr"></div>    

    <! -- panel -- >
    <div class="cr-bgimg">
        <div>
            <span>Slice 1 - Image 1</span>
            <span>Slice 1 - Image 2</span>
            <span>Slice 1 - Image 3</span>
            <span>Slice 1 - Image 4</span>
        </div>
        <div>
            <span>Slice 2 - Image 1</span>
            <span>Slice 2 - Image 2</span>
            <span>Slice 2 - Image 3</span>
            <span>Slice 2 - Image 4</span>
        </div>
        <div>
            <span>Slice 3 - Image 1</span>
            <span>Slice 3 - Image 2</span>
            <span>Slice 3 - Image 3</span>
            <span>Slice 3 - Image 4</span>
        </div>
        <div>
            <span>Slice 4 - Image 1</span>
            <span>Slice 4 - Image 2</span>
            <span>Slice 4 - Image 3</span>
            <span>Slice 4 - Image 4</span>
        </div>
    </div>

    <! -- Title -- >
    <div class="cr-titles">
        <h3>
            <span>Serendipity</span>
            <span>What you've been dreaming of</span>
        </h3>
        <h3>
            <span>Adventure</span>
            <span>Where the fun begins</span>
        </h3>
        <h3>
            <span>Nature</span>
            <span>Unforgettable eperiences</span>
        </h3>
        <h3>
            <span>Serenity</span>
            <span>When silence touches nature</span>
        </h3>
    </div>

</section>


</body>
</html>

