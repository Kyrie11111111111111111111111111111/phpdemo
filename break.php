<?php
$aa=array('one', 'two', 'three', 'four', 'stop', 'five');
foreach($aa as $bb){
if($bb=='stop'){
break;
}echo"$bb<br/>\n";
}
$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "At 5<br />\n";
            break 1;  /* 只退出 switch. */
        case 10:
            echo "At 10; quitting<br />\n";
            break 2;  /* 退出 switch 和 while 循环 */
        default:
            break;
    }
}
?> 