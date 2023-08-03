
<?php
//$name="Daniel";
//$hello="hello" . $name ;
//$hello2="hello Daniel";
//echo $hello . '<br>';
//echo $hello . '<br>';
//
////concatenare de stringuri
//echo "Hello" . "World";
//
//
//
//$string = "       Hello World     ";
//echo "1 -" . strlen($string) . '<br>';
//
//$number1=100;
//    $number2=123456;
//        echo str_pad($number1,8,'0', STR_PAD_LEFT). '<br>';
//echo str_pad($number2,8,'0', STR_PAD_LEFT). '<br>';
//echo str_repeat("World",3);
//
$longText = " Hello, my name is Daniel
I am 23

";
//echo $longText. '<br>';
echo nl2br($longText);
echo "1-" . $longText . '<br>';
echo "2-" . nl2br($longText) . '<br>';
echo "3-" . htmlentities($longText) . '<br>';