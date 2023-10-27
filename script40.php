<?php
$a1=array("a"=>"Apple","b"=>"Banana","c"=>"Mango","d"=>"Cherry");
$a2=array("a"=>"Watermelon","b"=>"Grapes");
array_splice($a1,0,2,$a2);
print_r($a1);
?>
