<?php 

$arr = array("Name"=>"Ankit","age"=>26,"course"=>"PHP","bike"=>"KTM");

array_pop($arr);
array_pop($arr);
// array_pop is substact the last string from the array.
echo"<pre>";
print_r($arr);

// array_push is add values in array.
array_push($arr,"hello ","hi");
echo"<pre>";
print_r($arr);       




?>