<?
echo "Hello World!";
//666
/*DAWDADA
FSFSEFSE*/



$numb='a222';//字符串，不能进行加减  去掉单引号就是整形
$switch=false;//只有是否或者0 1就是bool型,0为false 1为true
$w=15.88;//double浮点型
$c=gettype($numb);
$e=gettype($switch);
$f=gettype($w);
$d=var_dump($switch);
echo $d;

echo $c;
echo "<br>Hello World!";
if($switch){
  echo "true";
}
 echo is_int($numb)+6;//bool类型输出默认为int型输出为0或1
 $dd= $numb+"6";
 echo $dd;
  echo gettype(is_int($numb));
   echo var_dump(is_int($numb));//输出类型bool  值只为TRUE或FALSE
 
?>
