<?php
function foo()
{
global $color;
//global $fruit;

include 'vars.php';
echo "A $color $fruit";


}

echo"C $color $fruit";

foo();
echo"B $color $fruit";
