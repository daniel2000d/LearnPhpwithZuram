<?php



//$counter =0;
//$loop=true;
//while($counter <10) {
//    echo "Counter $counter" . '<br>';
//    if ($counter >= 10) break;
//    $counter++;
//}
$counter =10;
do{
    echo "Counter $counter";
}while($counter <10);

for($i=1; $i<10; $i++){
    echo "Counter: $i" . '<br>';
}

$fruits=["Banana","Apple","Orange"];
foreach ($fruits AS $i =>$fruit){
    echo $i . '' . $fruit . "<br>";
}