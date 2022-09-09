<?php 
//echo strlen("ooo"); 字符个数，一个文字占3个
echo strpos("Hello world!","Hello"); //查找hello的位置，并告诉

$tet="Hello world!"; 
echo $tet; //直接输出字符串变量
$txt1="Hello world!"; 
$txt2="What a nice day!"; 
echo $txt1 . " " . $txt2; //（.）并起字符串并一起输出  提示：在上面的代码中，我们已经使用了两次并置运算符。这是由于我们需要在两个字符串之间插入一个空格。
$cars=array("Volvo","BMW","Toyota");//count获取元素的数量
echo count($cars);
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
 
for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}

