<?php

$fruits =["banana" , "Apple", "Orange"];

//print array
//echo '<pre>';
//
//var_dump($fruits);
//echo '</pre>';
//
//
// echo $fruits[0] . '<br>';
$fruits[]='Peach';
//
// echo '<pre>';
// var_dump($fruits);
//
// echo '<pre>';
// var_dump(isset($fruits[3]));

// $fruits[]="Peach";
// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';
// echo count($fruits);
// array_push($fruits,'cCcao');
//var_dump($fruits);
////  array_pop($fruits);
//
//
//$string = "Banana,Apple,Peach";
//echo '<pre>';
//var_dump(explode(",", $string));
//echo'</pre>';
//
//echo implode("&",$fruits). '<br>';
//
//in_array('Apple' ,$fruits);
//echo'<pre>';
//echo array_search('Apple',$fruits);
//$vegetables=["Potato","Cucumber"];
//var_dump(array_merge($fruits,$vegetables));
//
//
//$numbers=[1,2,3,4,5,6,7,8];
//$evens= array_filter($numbers, fn($n)=> $n %2===0);
//echo '<pre>';
//var_dump($evens);
//echo '</pre>';
//$squares= array_map(fn($n) => $n*$n , $numbers);
//echo '<pre>';
//var_dump($squares);
//echo '</pre>';
//
// echo array_reduce($numbers, fn($carry,$item)=> $carry+$item);

 $person = [
     'name'=> 'Brad',
     "surname" => 'Traversy',
     'age'=> 30,
      'hobbies'=>['tennis', 'video games']

 ];
echo $person ['name'] . '<br>';
echo $person ['age'] . '<br>';


//Set element by key

$person['channel']= 'TraversyMedia';
isset($person['age']);
isset($person['address']);


echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

arsort($person);

echo '<pre>';
var_dump($person);
echo '</pre>';


$todoItems=[
  ["title"=>"item 1","completed"=>true],
    ["title"=>"item 2","completed"=>true],
    ["title"=>"item 3","completed"=>true],
];
echo '<pre>';
var_dump($todoItems);
echo '</pre>';