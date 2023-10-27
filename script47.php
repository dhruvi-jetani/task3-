<?php
function myfunction($num)
{
  return($num*$num);
}

$a=array(2,3,4,5,6);
print_r(array_map("myfunction",$a));
?>

