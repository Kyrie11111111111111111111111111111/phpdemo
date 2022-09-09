<?php
$aab=array(1,2,3,4,5);
foreach($aab as &$value){
	$value=$value*3;}
print_r($aab)
//Array ([0] => 3[1] => 6[2] => 9[3] => 12[4] => 15 ) 
?>