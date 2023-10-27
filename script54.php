<?php
$a = array(
  array(
    'id' => 1,
    'first_name' => 'Dhruvi',
    'last_name' => 'Patel',
  ),
  array(
    'id' => 2,
    'first_name' => 'Kisu',
    'last_name' => 'Patel',
  ),
  array(
    'id' => 3,
    'first_name' => 'Gopi',
    'last_name' => 'Patel',
  )
);

$first_names = array_column($a, 'first_name');
print_r($first_names);
?>
