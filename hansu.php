<?php

$xx = get_max(54, 89);
echo $xx;


function get_max($a ,$b ){
	if($a>$b) return $a ;
	
	return $b;
	
	}

	function recursion($a)
{
    if ($a < 20) {
        echo "$a <br>";
        recursion($a + 1);
    }
}

	function arr3($a)
{
    foreach($a as $v){
		echo $v."<br>";
	}
}
//recursion(5);
arr3(array(3,4,5,6,7));