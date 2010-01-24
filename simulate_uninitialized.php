<?php
$string = 'ab'; 
var_dump($string);
var_dump($string[2]);  // string(0) "" 
var_dump($string[7]);  // string(0) "" 
$string[7] === '';  // TRUE 
?>
