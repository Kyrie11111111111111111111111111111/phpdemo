<?php
$obj=(object)array('2'=>'foo');
print_r($obj);
var_dump(isset($obj->{'2'}));