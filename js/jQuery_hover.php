<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $("#p1").hover(
		function(){
			alert("来嘛！来嘛!");
		},
		function(){
			alert("让你直接去世!");
		}
    )
});
</script>
</head>
<body>

<p id="p1">你不要过来啊！</p>

</body>
</html>