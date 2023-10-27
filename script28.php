<?php
$number = array(4, 8, 2, 22, 16);
sort($number);

foreach ($number as $key => $val) {
    echo "number[" . $key . "] = " . $val . "<br>";
}
?>