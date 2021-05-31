<?php

//array_sum
$myarray = array(1,2,3,4,5,6,7,8,9);
echo array_sum($myarray);

//usort
function cmp_function($a, $b) {
    if ($a == $b) return 0;
    return ($a > $b) ? -1 : 1;
 }
 
 $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana" );
 usort($fruits, "cmp_function");
 
 echo "<br>";
 print_r($fruits);
 

 //sort
 $input = array("d"=>"lemon", "a"=>"orange", "b"=>"banana" );
 sort($input);
 echo "<br>";
 print_r($input);


//range
 foreach (range(0, 100, 10) as $number) {
    echo "<br>";
    echo "$number, ";
 }
 print "\n";
 
 foreach (range('a', 'c') as $letter) {
    echo "<br>";
    echo "$letter, ";
 }


//next
 $input = array('foot', 'bike', 'car', 'plane');
 $mode = current($input); 
 echo "<br>";
 print "$mode <br />";
 
 $mode = next($input);
 print "$mode <br />";


 //prev
 $input = array('foot', 'bike', 'car', 'plane');
   
 $mode = current($input);
 print "$mode <br />";
 
 $mode = prev($input);
 print "$mode <br />";


 //array_diff
 $array1 = array("orange", "banana", "apple");
 $array2 = array("orange", "mango", "apple");
 print_r(array_diff($array1, $array2));


//array_diff_assoc
 $input1 = array( "a"=>"orange", "b"=>"mango", "c"=>"banana");
 $input2 = array( "a"=>"orange", "b"=>"apple", "c"=>"banana");
 echo "<br>";
 print_r(array_diff_assoc($input1, $input2));


//array_combine
 $a = array('green', 'red', 'yellow');
 $b = array('avocado', 'apple', 'banana');
 $c = array_combine($a, $b);
 echo "<br>";
 print_r($c);


//array_count_values
 $input = array("orange", "mango", "banana", "orange", "banana" );
 echo "<br>";
 print_r(array_count_values($input));


//Function array_fill
 $input = array_fill(5, 6, 'apple');
 echo "<br>";
 print_r($input);


//Function array_flip
 $input = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
 echo "<br>"; 
 print_r(array_flip($input));


//Function array_filter()
 function odd($var) {
    return($var & 1);
 }
 
 function even($var) {
    return(!($var & 1));
 }
 
 $input1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
 $input2 = array(6, 7, 8, 9, 10, 11, 12);
 echo "<br>";
 echo "Odd Values:\n";
 print_r(array_filter($input1, "odd"));
 echo "<br>";
 echo "Even Values:\n";
 print_r(array_filter($input2, "even"));
 
?>