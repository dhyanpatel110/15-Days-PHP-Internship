<?php

$a = $_POST['text1'];
$b = $_POST['text2'];
$c = $_POST['text3'];
$d = $_POST['text4'];
$e = $_POST['text5'];

$total = $a + $b + $c + $d + $e;
$avg=$total/5;
if($avg>=0&&$avg<=50)
    $grade="Fail";
if($avg>50&&$avg<=70)
    $grade="C";
if($avg>70&&$avg<=80)
    $grade="B";
if($avg>80&&$avg<=90)
    $grade="A";
if($avg>90)
    $grade="E";

echo "The Total marks   = " .$total
echo "<font size=4><center>Grade is =".$grade."</center>"; 



?>