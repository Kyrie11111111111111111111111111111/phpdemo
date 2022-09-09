<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>菜鸟教程(runoob.com)</title> 
<script src="http://cc.com/js/jquery-3.6.1.min.js">
</script>
<script>
$(document).ready(function(){
  $("#p1").mouseenter(function(){
	  $("p").css("background-color","red");
    alert('看我操作，我直接干拉!');
  });
});
$(document).ready(function(){
  $("#p1").mouseleave(function(){
	   $("p").css("background-color","lightgray");
    alert("完辣，我噶了，下播！！！");
  });
  });
</script>
</head>
<body>

<p id="p1">这波！你注意辣！！！</p>

</body>
</html>