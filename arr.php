<?php
$a = array("a" => "apple", "b" => "banana");
$b = array("c" => "cherry");

$c = $a + $b; // $a 和 $b 的并集
echo "Union of \$a and \$b: \n";
//var_dump($c);
echo "<pre>";
print_r($c);