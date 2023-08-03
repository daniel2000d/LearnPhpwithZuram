<?php
$age=40;
$salary=2350;
//if($age>25){
//    echo 'You are not young '. '<br>';
//}
//
//if($age<25){
//    echo 'You are  young '. '<br>';
//}
//if($age>25) {
//    echo "You are  not young";
//}  else{
//
//
//        echo "You are young";
//}
//
//if($age <22  && $salary> 5000){
//    echo 'You are young and not so rich' . '<br>';
//
//}
//if($age <25 || $salary>2000)
//{
//    echo "you are rich or young";
//}
//
//if($age <22){
//    echo 'Young' .'<br>';
//} elseif ($age <30) {
//    echo "you are not young but not old";
//}elseif($age <60){
//        echo "youre old but not too old";
//    }
//
//
//echo $age <22 ? 'young' : ($age <30 ? 'Not young but not old' : 'old');
//$myAge=$age ?:18;
//echo $myAge;


//$person =[
//    'name' =>'John'
//];
//if (!isset($person['name'])){
//    $person['name']. '<br>';
//}
//echo $person['name']. '<br>';

$userRole='editor';
switch ($userRole){
    case 'admin':
        echo 'You are admin';
        break;

    case 'editor';
        echo 'You can edit articles';
        break;
    default:
        echo "Unknown role";
}