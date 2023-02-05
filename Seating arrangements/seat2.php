<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>seat2</title>
    <style type="text/css">
      
html, body {
    margin:0;
    padding:0;
    font:1em/1.75 Verdana, Arial, Helvetica, sans-serif;
    -ms-text-size-adjust:100%;
    -webkit-text-size-adjust:100%
}

.pie-outer *, .pie-outer {
    padding:0;
    margin:0
}

.pie-outer {
    position:relative;
    padding-top:100%;
    margin:auto
}

.pie {
    pointer-events:none;
    position:absolute;
    top:50%;
    left:50%;
    overflow:hidden;
    border:2px solid #000;
    border-radius:50%;
}

.pie ul {
    list-style-type:none
}

.pie ul:after {
    content:" ";
    display:block;
    width:100%;
    padding-top:100%
}

.pie li {
    position:absolute;
    top:-50%;
    left:-50%;
    width:100%;
    height:100%;
    margin-left:-2px;
    margin-top:-2px;
    overflow:hidden;
    border:1px solid #000;
    -webkit-transform-origin:100% 100%;
    -ms-transform-origin:100% 100%;
    transform-origin:100% 100%
}


.pie a {
    pointer-events:auto;
    font-size:2.125vw;
    /*line-height:170%;*/
    display:block;
    position:absolute;
    top:50%;
    left:50%;
    width:100%;
    height:100%;
    text-decoration:none;
    text-align:center;
    color:#fff;
    -webkit-tap-highlight-color:rgba(0,0,0,0);
}

.pie a:hover {
    background:rgba(255,255,255,0.25)
}

@media ( min-width:42em ) {
    /* #### - > 672px - #### */
    .pie-outer {
        padding-top:0;
        width:40em;
        height:40em
    }
    .pie a {
        font-size:1em
    }

}


    </style>
  </head>
  <body>



    <script type="text/javascript">
      

let data =  [
    Array.from(Array(15).keys()).map(String),
    Array.from(Array(13).keys()).map(String),
    Array.from(Array(10).keys()).map(String),
    Array.from(Array(7).keys()).map(String),
    Array.from(Array(4).keys()).map(String),
]

function getRandomHTMLColor() {
    var r = 255*Math.random()|0,
        g = 255*Math.random()|0,
        b = 255*Math.random()|0;
    return 'rgb(' + r + ',' + g + ',' + b + ')';
}

function createPieMenu() {
    let pieMenu = document.createElement("div");
    pieMenu.id = "pie-menu"
    pieMenu.classList.add("pie-outer");

    let widthDelta = 100/data.length;
    let widthPercentage = 100;

    for (let i = 0; i < data.length; i ++) {
        let dataItem = data[i];
        let numSegments = dataItem.length;
        let segmentAngle = (Math.PI * 2)/numSegments;
        let skewAngle = (Math.PI/2) - segmentAngle;

        let pie = document.createElement("div");
        let pieRotateAngle = (Math.PI/2) - segmentAngle/2;
        pie.classList.add("pie");
        console.log(widthPercentage);

        pie.style.width = `${widthPercentage}%`;
        pie.style.background = getRandomHTMLColor();

        pie.style.transform = `translate(-50%,-50%) rotate(${pieRotateAngle}rad)`;

        let pieList = document.createElement("ul");

        for (let j = 0; j < dataItem.length; j ++) {
            let rotationAngle = segmentAngle * j;
            let dataContent = dataItem[j];
            let pieListItem = document.createElement('li'); // create a new list item
            let pieItemAnchor = document.createElement('a'); // create a new list item

            pieListItem.style.transform = `rotate(${rotationAngle}rad) skew(${skewAngle}rad)`;

            pieItemAnchor.appendChild(document.createTextNode(dataContent)); // append the text to the li
            let anchorRotate = segmentAngle/2 - Math.PI/2;
            let anchorSkew = segmentAngle - Math.PI/2;
            pieItemAnchor.style.transform = `skew(${anchorSkew}rad) rotate(${anchorRotate}rad)`;

            pieListItem.appendChild(pieItemAnchor);
            pieList.appendChild(pieListItem)
        }
        pie.appendChild(pieList);
        pieMenu.appendChild(pie);
        widthPercentage -= widthDelta;
    }

    document.body.appendChild(pieMenu);
}

createPieMenu();




    </script>
  </body>
</html>