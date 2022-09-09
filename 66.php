<?php
var_dump((bool) "");    
var_dump((bool) "0");       

var_dump((bool) 1);         
var_dump((bool) -2);        
var_dump((bool) "foo");     
var_dump((bool) 2.3e5);     
var_dump((bool) array(12)); 
var_dump((bool) array());   
var_dump((bool) "false");  

var_dump(24/8);
var_dump((int) (34/24));
var_dump(round (24/11));
$oo="ghghhjhjhjhj";
echo $oo;
$www="gfg5fgfg4dfky99999";
$sss=(int) $www;
var_dump($sss);
$oo="\r\n";
echo $oo;
$name="dddd";
echo "my name is \$dd50";
echo 'my name is $50';

$student=array(
	"name" => "cc",
	"garde"=>"A"

);
echo $student['name'];
print_R($student);
$arr1=array('a','fg','dfe','sd');
print_R($arr1);
$array = array(
    8   => "a"
);//key 为可选项。如果未指定，PHP 将自动使用之前用过的最大 int 键名加上 1 作为新的键名。 
$array[] = 'aaaa';
print_R($array);




