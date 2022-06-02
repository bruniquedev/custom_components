<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

html, body, * {
    padding: 0;
    margin: 0;
}
html {
    width: 100%;
    height: 100%;
    position: absolute;
}
#leftCol {
    background: #ddd;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 75%;
    overflow: hidden;
    padding: 2em;
}
#rightCol {
    background: #bbb;
    position: absolute;
    left: 25%;
    top: 0;
    bottom: 0;
    right: 0;
    overflow-y: auto;    
    padding: 2em;
}

</style>
</head>
<body>


<div id="leftCol">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu ligula turpis, in euismod velit. Sed suscipit commodo nisl ac tempor. Donec eu nulla eros. Donec tortor justo, eleifend eu consectetur at, fermentum a sem. Vestibulum tempus velit vel neque rutrum congue. Donec vehicula dictum mi, sit amet suscipit augue rhoncus vitae. Curabitur tempus auctor bibendum. Sed sodales iaculis egestas. Suspendisse consectetur elementum ligula et imperdiet. Proin in velit eu arcu dapibus faucibus. Vivamus fringilla adipiscing mauris ac condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse ut nibh ac nulla tempus malesuada. Ut congue, arcu quis semper pellentesque, nunc quam volutpat libero, a rhoncus metus sem eu dolor. Vestibulum lacinia augue sit amet nibh imperdiet eu volutpat nibh egestas. Suspendisse luctus laoreet mattis. Proin in euismod augue. Duis tincidunt rhoncus auctor.</p>
    <p>Ut ac augue sit amet purus tempor pharetra ut ac odio. Praesent non mauris mauris, ut accumsan nibh. Curabitur accumsan egestas nisi, vitae commodo nulla congue sed. Integer scelerisque, sapien sed venenatis rhoncus, augue leo porta ligula, eget dapibus nisl nisl et libero. Nulla congue fringilla venenatis. Fusce sem metus, condimentum id venenatis vitae, tincidunt consectetur nisl. Sed iaculis, dolor sit amet tincidunt posuere, est orci blandit arcu, in rutrum ante nisl et nisi. Vestibulum blandit lacus ut magna rhoncus at placerat lacus rhoncus. Vestibulum quis nisl quis neque interdum vehicula. Aenean tellus metus, varius at congue in, tempor a ligula. Aenean fringilla sapien non sapien facilisis in tincidunt velit interdum. Phasellus pulvinar, orci et posuere tincidunt, tellus erat dapibus est, ut euismod tellus urna nec ipsum. Proin nec sapien sed odio bibendum ultrices nec quis quam. Mauris vestibulum libero et est fermentum commodo. Nullam cursus tempus posuere. Suspendisse potenti. Suspendisse potenti. Aliquam erat volutpat. Quisque nec magna sollicitudin libero tempor consectetur. Donec a est tellus.</p>
</div>
<div id="rightCol">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu ligula turpis, in euismod velit. Sed suscipit commodo nisl ac tempor. Donec eu nulla eros. Donec tortor justo, eleifend eu consectetur at, fermentum a sem. Vestibulum tempus velit vel neque rutrum congue. Donec vehicula dictum mi, sit amet suscipit augue rhoncus vitae. Curabitur tempus auctor bibendum. Sed sodales iaculis egestas. Suspendisse consectetur elementum ligula et imperdiet. Proin in velit eu arcu dapibus faucibus. Vivamus fringilla adipiscing mauris ac condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse ut nibh ac nulla tempus malesuada. Ut congue, arcu quis semper pellentesque, nunc quam volutpat libero, a rhoncus metus sem eu dolor. Vestibulum lacinia augue sit amet nibh imperdiet eu volutpat nibh egestas. Suspendisse luctus laoreet mattis. Proin in euismod augue. Duis tincidunt rhoncus auctor.</p>
    <p>Ut ac augue sit amet purus tempor pharetra ut ac odio. Praesent non mauris mauris, ut accumsan nibh. Curabitur accumsan egestas nisi, vitae commodo nulla congue sed. Integer scelerisque, sapien sed venenatis rhoncus, augue leo porta ligula, eget dapibus nisl nisl et libero. Nulla congue fringilla venenatis. Fusce sem metus, condimentum id venenatis vitae, tincidunt consectetur nisl. Sed iaculis, dolor sit amet tincidunt posuere, est orci blandit arcu, in rutrum ante nisl et nisi. Vestibulum blandit lacus ut magna rhoncus at placerat lacus rhoncus. Vestibulum quis nisl quis neque interdum vehicula. Aenean tellus metus, varius at congue in, tempor a ligula. Aenean fringilla sapien non sapien facilisis in tincidunt velit interdum. Phasellus pulvinar, orci et posuere tincidunt, tellus erat dapibus est, ut euismod tellus urna nec ipsum. Proin nec sapien sed odio bibendum ultrices nec quis quam. Mauris vestibulum libero et est fermentum commodo. Nullam cursus tempus posuere. Suspendisse potenti. Suspendisse potenti. Aliquam erat volutpat. Quisque nec magna sollicitudin libero tempor consectetur. Donec a est tellus.</p>  
       <p>Ut ac augue sit amet purus tempor pharetra ut ac odio. Praesent non mauris mauris, ut accumsan nibh. Curabitur accumsan egestas nisi, vitae commodo nulla congue sed. Integer scelerisque, sapien sed venenatis rhoncus, augue leo porta ligula, eget dapibus nisl nisl et libero. Nulla congue fringilla venenatis. Fusce sem metus, condimentum id venenatis vitae, tincidunt consectetur nisl. Sed iaculis, dolor sit amet tincidunt posuere, est orci blandit arcu, in rutrum ante nisl et nisi. Vestibulum blandit lacus ut magna rhoncus at placerat lacus rhoncus. Vestibulum quis nisl quis neque interdum vehicula. Aenean tellus metus, varius at congue in, tempor a ligula. Aenean fringilla sapien non sapien facilisis in tincidunt velit interdum. Phasellus pulvinar, orci et posuere tincidunt, tellus erat dapibus est, ut euismod tellus urna nec ipsum. Proin nec sapien sed odio bibendum ultrices nec quis quam. Mauris vestibulum libero et est fermentum commodo. Nullam cursus tempus posuere. Suspendisse potenti. Suspendisse potenti. Aliquam erat volutpat. Quisque nec magna sollicitudin libero tempor consectetur. Donec a est tellus.</p>   
          <p>Ut ac augue sit amet purus tempor pharetra ut ac odio. Praesent non mauris mauris, ut accumsan nibh. Curabitur accumsan egestas nisi, vitae commodo nulla congue sed. Integer scelerisque, sapien sed venenatis rhoncus, augue leo porta ligula, eget dapibus nisl nisl et libero. Nulla congue fringilla venenatis. Fusce sem metus, condimentum id venenatis vitae, tincidunt consectetur nisl. Sed iaculis, dolor sit amet tincidunt posuere, est orci blandit arcu, in rutrum ante nisl et nisi. Vestibulum blandit lacus ut magna rhoncus at placerat lacus rhoncus. Vestibulum quis nisl quis neque interdum vehicula. Aenean tellus metus, varius at congue in, tempor a ligula. Aenean fringilla sapien non sapien facilisis in tincidunt velit interdum. Phasellus pulvinar, orci et posuere tincidunt, tellus erat dapibus est, ut euismod tellus urna nec ipsum. Proin nec sapien sed odio bibendum ultrices nec quis quam. Mauris vestibulum libero et est fermentum commodo. Nullam cursus tempus posuere. Suspendisse potenti. Suspendisse potenti. Aliquam erat volutpat. Quisque nec magna sollicitudin libero tempor consectetur. Donec a est tellus.</p>     
</div>



</body>
</html>