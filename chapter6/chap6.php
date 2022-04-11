<?php
// IF-ELSEIF-ELSE
$x = 5;
if ($x < 10) {
    echo 'Smaller than 10'.'<BR>';
} elseif ($x >= 10 && $x <= 20)
    echo 'Between 10 and 20'.'<BR>';
else
    echo 'Greater than 20'.'<BR>';
// and so many more the same as TS/JS
// FOREACH
$arr1 = array(11, 12, 13, 14, 15);
foreach ($arr1 as $value) {
    echo 'The number is '.$value.'<BR>';
}
$arr2 = array('Aaron' => 12, 'Ben' => 60, 'Son' => 30);
foreach ($arr2 as $name => $age) {
    echo $name.' is '.$age.' years old.<BR>';
}
?>

<?php
// Displaying HTML code
for ($i=0; $i < 3; $i++): ?>
    <h1>Hello</h1>
<?php endfor; ?>
