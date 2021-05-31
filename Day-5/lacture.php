<?php

//numeric array
//method 1
$a[0] = 50;
$a[1] = 100.50;
$a[2] = "marvel";
$a[3] = "spider man";
echo $a[1];

//method 2
$a[] = 50;
$a[] = 100.50;
$a[] = "marvel";
$a[] = "spider man";
echo "<br> $a[2]";

//method 3
$a = array(50,100.50,"marvel","spider man");
echo "<br> $a[3]";


//associative array
//method 1
$a[0] = 50;
$a['java'] = 100.50;
$a['ruby'] = "marvel";
$a[3] = "spider man";
echo $a['java'];

//method 2
$a = array(
   0 => 50,
   "java" => 100.50,
   "ruby" => "marvel",
   3 => "spider man",
   echo $a['java'];
);

foreach ($a as $value){
    echo "<br>value is $value";
}


foreach ($a as $key => $value){
    echo "<br>Key is <b>$key</b> and value is <b>$value</b>";
}

//inbult functions an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
print_dump($a);
echo "<pre>";

?>