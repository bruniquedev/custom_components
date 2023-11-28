<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>newsticker-right-left</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }

    .news-ticker-container {
          overflow: hidden;
    margin: 5px auto 0px auto;
    width: 90%;
display: flex;
}
    .news-ticker-content{
      
           border-top: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
    }
    .headline-title{
      background-color: #000;
      color: #eee;
      z-index: 2;
       padding: 10px;
      border-right: 1px solid #ccc;
display: flex; /* Use flex container */
  align-items: center; /* Center items vertically */
  position: relative;
    }
     .headline-title span{
     font-weight: bold;
      font-size: 16px;
      text-align: center;
      white-space: nowrap; /* Prevent text from breaking into multiple lines */
      margin-right: 10px; /* Add some spacing between the arrow and text */
    }

 .headline-title span:after {
    content: "";
    position: absolute;
    right: -14px;
width: 0;
  height: 0;
  border-style: solid;
  border-width: 10px 0 10px 15px; 
  border-color: transparent transparent transparent #333; /* Adjust the color of the arrow */
}

   

    .news-ticker {
      display: flex;
      animation: tickerAnimation 30s linear infinite; /* Adjust the duration as needed */
      transition: transform 0.5s ease-in-out; /* Add smooth transition effect */
      transform: translateX(-100%); /* Adjust the initial position to the right end */

    }

    .news-item {
      padding: 10px;
      border-right: 1px solid #ccc;
      width: 100%;
      font-size: 14px;
      white-space: nowrap; /* Prevent text from breaking into multiple lines */
    }

    @keyframes tickerAnimation {
      to {
        transform: translateX(-100%);
      }
    }
  </style>
</head>
<body>



<div class="news-ticker-container">
<div class="headline-title">
  <span>News updates</span>
</div>
<div class="news-ticker-content">
  <div class="news-ticker" id="newsTicker">
    <div class="news-item">Breaking News: Example News 1</div>
    <div class="news-item">Important Update: Example News 2</div>
    <div class="news-item">Weather Alert: Example News 3</div>
    <div class="news-item">Tech Alert: Example News 4</div>
    <div class="news-item">Health tip: Example News 5</div>
    <div class="news-item">World Alert: Example News 6</div>
    <div class="news-item">Biblical scripture: Example News 7</div>
    <!-- Add more news items as needed -->
  </div>
</div>
</div>

<script>
  // Wait for the DOM to be ready
  document.addEventListener('DOMContentLoaded', function () {
    // Get the news ticker element
    var newsTicker = document.getElementById('newsTicker');
    var isHovered = false;

    // Pause the ticker on hover
    newsTicker.addEventListener('mouseover', function () {
      isHovered = true;
      newsTicker.style.animationPlayState = 'paused';
    });

    // Resume the ticker on mouse out
    newsTicker.addEventListener('mouseout', function () {
      isHovered = false;
      newsTicker.style.animationPlayState = 'running';
    });

    // Restart the ticker when the animation ends and not hovered
    newsTicker.addEventListener('animationiteration', function () {
      if (!isHovered) {
        startTickerAnimation();
      }
    });

   // Start the ticker animation
    function startTickerAnimation() {
      // Get the width of a single news item
      var newsItemWidth = newsTicker.firstElementChild.offsetWidth;

      // Set the width of the ticker container to allow continuous scrolling
      newsTicker.style.width = (newsItemWidth * newsTicker.childElementCount) + 'px';

      // Move the ticker to the left to create the scrolling effect
      newsTicker.style.transform = 'translateX(80%)';
    }

    // Call the function to start the ticker animation
    startTickerAnimation();
  });
</script>

</body>
</html>
