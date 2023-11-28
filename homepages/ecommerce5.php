<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Slider</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }

    .news-ticker-container {
      /* overflow: hidden; Remove this line */
      height: auto;
      position: relative;
    }

    .news-ticker {
      display: flex;
      flex-direction: column;
      transition: transform 0.5s ease-in-out;
      transform: translateY(0);
    }

    .news-item {
      padding: 10px;
      border-bottom: 1px solid #ccc;
      width: 100%;
      box-sizing: border-box;
      opacity: 0;
      transform: translateY(100%);
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
      position: absolute;
      left: 0;
      top: 0;
    }

    .visible {
      opacity: 1;
      transform: translateY(0);
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }
  </style>
</head>
<body>

<div class="news-ticker-container">
  <div class="news-ticker" id="newsTicker">
    <div class="news-item visible">Breaking News: Example News 1</div>
    <div class="news-item">Important Update: Example News 2</div>
    <div class="news-item">Weather Alert: Example News 3</div>
    <!-- Add more news items as needed -->
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var newsTicker = document.getElementById('newsTicker');
    var newsItems = newsTicker.querySelectorAll('.news-item');
    var currentIndex = 0;
    var isHovered = false; // Flag to track hover state


  // Event listener for mouseover (hover)
  newsTicker.addEventListener('mouseover', function () {
    isHovered = true;
  });

  // Event listener for mouseout
  newsTicker.addEventListener('mouseout', function () {
     isHovered = false;
  });


    setInterval(function () {
      var nextIndex = (currentIndex + 1) % newsItems.length;


       // Check if hover state is active
    if (!isHovered) {

      newsItems[currentIndex].classList.remove('visible');
      newsItems[nextIndex].classList.add('visible');

      newsItems[currentIndex].style.opacity = 0;
      newsItems[currentIndex].style.transform = 'translateY(-100%)';

      newsItems[nextIndex].style.opacity = 1;
      newsItems[nextIndex].style.transform = 'translateY(0)';


      // Check if the next index is the last one
    if (nextIndex === newsItems.length - 1) {
      // This is the last index, you can add your custom logic here
      console.log("Last index reached!");
     // remove style from the  first element of index 0
      newsItems[0].style.opacity = '';
        newsItems[0].style.transform = '';
    }

// Iterate over indices dynamically and 
    for (var i = 0; i < newsItems.length - 1; i++) {
      //if nextIndex === i 
      if (nextIndex === i) {
        console.log("Index " + i + " reached!");
        // Remove styles for the next element
         newsItems[i + 1].style.opacity = '';
        newsItems[i + 1].style.transform = '';
      }
    }

      currentIndex = nextIndex;
    }//end is not hovered


    }, 5000); // Slide a new item every 5 seconds
  });
</script>


<script type="text/javascript"> 










</script>

</body>
</html>
