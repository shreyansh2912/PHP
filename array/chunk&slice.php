<?php   

$arr = array("Name"=>"Ankit","age"=>26,"course"=>"PHP","bike"=>"KTM");
print_r($arr);

// array_chunk is saprate your array into defind picese
echo"<pre>";
print_r(array_chunk($arr,2));

// array_slice is substract the array from start.
echo"<pre>";
print_r(array_slice($arr,3));

?>