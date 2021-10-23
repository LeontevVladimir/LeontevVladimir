<?php
define(NUM_E,2.71828);
print ('Значение е = ' . NUM_E . '<br>');
$num_e1 = NUM_E;
print ('$num_e1 = ' . $num_e1 . ' - ' . gettype($num_e1) . '<br>');
$num_e1 = "Laba1";
print ('$num_e1 = ' . $num_e1 . ' - ' . gettype($num_e1) . '<br>');
$num_e1 = 2;
print ('$num_e1 = ' . $num_e1 . ' - ' . gettype($num_e1) . '<br>');
$num_e1 = true;
print ('$num_e1 = ' . $num_e1 . ' - ' . gettype($num_e1) . '<br>');
?>