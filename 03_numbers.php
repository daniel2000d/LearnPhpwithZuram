<?php

// 1. Declaring numbers
$a=5;
$b= 4;
$c=1.2;

// 2. Arithmetic operations
//echo $a + $b .'<br>';
//echo $a - $b .'<br>';
//echo $a * $b .'<br>';
//echo $a / $b .'<br>';
//echo $a % $b .'<br>';
// 4. Assignment with math operators
//
//$a+=$b; echo $a.'<br>';
//$a-=$b; echo $a.'<br>';
//$a*=$b; echo $a.'<br>';
//$a/=$b; echo $a.'<br>';
//$a-=$b; echo $a.'<br>';
// 5. Increment operator
//echo $a++;

//echo ++$a;

// 6. Decrement operator
//echo $a--;
//echo --$a;


// 7. Number checking functions
//var_dump(is_numeric("5.6"));
//is_integer();
//is_numeric();
// 7. Conversion
//$strNumber='12.34';
//$number=(int)$strNumber;
//var_dump($number);

// 9. Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';
// 10. Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';
