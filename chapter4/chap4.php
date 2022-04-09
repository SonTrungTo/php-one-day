<?php
// Constants
define('BASIC_MEMBER', 1112020);
echo BASIC_MEMBER;
echo '<BR>';
define('BASIC_MEMBER', 900);
echo BASIC_MEMBER;
echo '<BR>';
// Variables
$x = 7;
echo $x;
echo "<BR>";
echo '$x';
echo "<BR>";
$x = 5;
echo "New value: $x";
echo '<br>';
// To verify data type
$y = 5.5;
$z = true;
var_dump($x);
var_dump($y);
var_dump($z);
echo '<br>';
// Type cast
$p = (int) 4.6;
var_dump($p);
