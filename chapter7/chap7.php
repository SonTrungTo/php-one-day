<?php declare(strict_types=1);
// Reverse $a and $b to see why this is a better practice
function displayGreetings($b, $a='Morgon. ') {
    echo 'Hello. '.$a.'I am the dark side.<BR>'.$b.'<BR>';
}
displayGreetings('I want Michael I. Jordan');
// Types
function addNumbersStrict(int $num1, int $num2, int $num3) {
    return $num1 + $num2 + $num3;
}
echo addNumbersStrict(1, 2, 3);
