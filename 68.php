<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }

	function name(){
		echo "ccc ";
	}
}

$bar = new foo;
//$bar->do_foo();
$bar->name();
?> 