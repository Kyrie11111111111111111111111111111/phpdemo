
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// 使用短数组语法



 /*$array = [
    "foo" => "bar",
    "bar" => "foo",
];*/
$array[]='aaaa';
$student=array(
    "num"=>"1",
	"name"=>"adddd",

);
print_r($student);
$student['age']='23';
print_r($student);
echo  $student['age'];
$product=array(
	"name"=>"dfddf",
	"price"=>"90",
);
$arr1=array("2","4","7"=>"6","8");
$arr1[]='12';//[]在上一行结尾新增加元素
$arr1[]='32';
print_r($arr1);

$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

$array["multi"]["dimensional"]["array"]='chengc';
$array['new']="dfdf";
print_r($array["multi"]["dimensional"]["array"]);
print_r($array);
unset($array['new']);
print_r($array);

 