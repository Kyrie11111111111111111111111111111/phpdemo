<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>菜鸟教程(runoob.com)</title> 
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("form").submit(function(){
    alert("提交");
  });
});
</script>
</head>
<body>

<form action="">
First name: 
<input type="text" name="FirstName" value="Mickey"><br>
Last name: 
<input type="text" name="LastName" value="Mouse"><br>
<input type="submit" value="提交">
</form> 

</body>
</html>