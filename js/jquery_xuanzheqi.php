<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>菜鸟教程(runoob.com)</title> 
<script src="http://cc.com/js/jquery-3.6.1.min.js">
</script>
<script>
/*$(document).ready(function(){
  $("button").click(function(){
    $("p").hide(); 隐藏所以p元素
  });
});*/
$(document).ready(function(){
  $("button").click(function(){
    $("#test").hide();//有id=test的属性元素被隐藏
  });
});
</script>
</head>

<body>
<h2>这是一个标题</h2>
<p>这是一个段落。</p>
<p id="test">这是另一个段落。</p>
<button>点我</button>
</body>
</html>