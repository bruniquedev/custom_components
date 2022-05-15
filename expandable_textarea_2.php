<!DOCTYPE html>
<html>
<head>
<title>autoresizing textarea</title>
<style type="text/css">
  
</style>

</head>
<body>
<textarea></textarea>
<script type="text/javascript">
document.querySelector('textarea').addEventListener("input", function(){
  this.style.height = '0px';
  this.style.height = this.scrollHeight + 'px';
})
</script>
</body>
</html>