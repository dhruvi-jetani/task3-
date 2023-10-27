<?php
$a1=array("a"=>"Apple","b"=>"Banana","c"=>"Mango","d"=>"Grapes");
$a2=array("e"=>"Apple","f"=>"Banana","g"=>"Mango");

$result=array_intersect($a1,$a2);
print_r($result);
?>