<?php
function get_double($a ,$b){
	if($a>$b)
	{
		return $a*2;
	}
	elseif($a<=$b) {
		return $a;
	}
}
$a=100;
$xx=get_double($a,100);
$x2=get_double(150,100);
$c = $xx + $x2;
echo $c;


