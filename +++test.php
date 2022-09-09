<?php
/*function get_add($a ,$b){
		
return $b*($b+$a)/2;
	
}
	$xx=get_add(1,100);
echo $xx;*/
function recursion($num,$total)
{
	//echo $num;
	//echo "<br>";
	$c= "func ".$num." ".$total;
	echo $c;
	echo "<br>";
    $total=$num+$total;
    if ($num < 8) {
		$total= recursion($num+1,$total);	   
	}   
	return $total;
}
$xx=recursion(1,0);



echo $xx;
