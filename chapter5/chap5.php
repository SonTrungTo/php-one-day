<?php
date_default_timezone_set('Europe/Helsinki');
// Strings
$areacode = 758;
$contact  = '+1'.$areacode.'1234567';
echo "$contact<BR>";
echo "Contact length: ".strlen($contact)."<BR>";
echo "Contact lowercase: ".strtolower($contact)."<BR>";
echo "Contact uppercase: ".strtoupper($contact)."<BR>";
echo "Contact trimmed: ".trim($contact, "+")."<BR>";
echo "Contact substring: ".substr($contact, 5)."<BR>";
echo "$contact<BR>";
echo strtotime("next Monday")."<BR>";
echo date('d-m-Y H:i:s', strtotime(("+ 10 hours")));
// Arrays
$testArray = array(1, 2, "Javascript", 3);
echo $testArray[1]."<BR>";
$testAssociative = array(
    'first player' => array('name' => 'Dishwasher', 'age' => 30),
    'second player' => array('name' => 'Moron', 'age' => 5),
);
echo $testAssociative['first player']['name']."<BR>";
var_dump($testArray);
echo '<BR>';
print_r($testArray);
echo '<BR>';
$testArray[] = 7;
var_dump($testArray);
echo '<BR>';
$testArray['James'] = 25;
var_dump($testArray);
echo '<BR>';
$testArray[] = 8;
var_dump($testArray);
echo '<BR>';
$heroes = array('Obiwan', 'Anakin', 'Yoda', 'Windu', 'Quigon');
$battles = array(
    'Death Star' => 'Obiwan vs Vader',
    'Mustafar' => 'Anakin vs Obiwan',
);
array_splice($heroes, 1, 2);
var_dump($heroes);
echo '<BR>';
// Commonly used
echo count($testArray)."<BR>";
echo array_search(1, $testArray)."<BR>";
echo array_search('Obiwan vs Vader', $battles)."<BR>";
var_dump(array_search('Mustafar', $battles));
echo "<BR>";
var_dump(array_search('Yoda', $heroes)); // deleted by array_splice() above
echo "<BR>";
var_dump(in_array('Palpatine', $heroes));
var_dump(in_array('Anakin vs Obiwan', $battles));
echo "<BR>";
$names1 = array(5 => 'Peter', 24 => 'Aaron');
$names2 = array(5 => 'Zac', 4 => 'Alfred', 23 => 'Nani', 6 => 'Peter');
$newArray1 = array_merge($names1, $names2);
var_dump($newArray1);
echo "<BR>";
$str1 = array('A' => 12, 'B' => 5, 'C' => 8);
$str2 = array('A' => 15, 'D' => 10);
$newArray2 = array_merge($str1, $str2);
print_r($newArray2);
echo "<BR>";
print_r($str1);
