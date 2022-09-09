<?php
$a = 5;
$b = 30;
function ttt(){
	echo "ttt exe";
	return "5";
}
if ($a > $b)
  ttt();
else{
	echo "a 小于 b";
}
echo "final";