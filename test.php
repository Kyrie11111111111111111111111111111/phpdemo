<?php
//echo"A $color $fruit";
include_once 'vars.php';//代入vars.php文件中命名的变量


//可以用于在脚本执行期间同一个文件有可能被包含超过一次的情况下，想确保它只被包含一次以避免函数重定义，变量重新赋值等问题。







$color = "red";

include_once'vars.php';//代入vars.php文件中命名的变量

echo $color;
?>