<?php
function test_odd($var)
  {
  return($var & 1);
  }

$a1=array(2,3,3,2,1);
print_r(array_filter($a1,"test_odd"));
?>

