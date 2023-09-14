<?php

$arr = array("Name"=>"Ankit","age"=>26,"course"=>"PHP","bike"=>"KTM");

// array_fill is used for 
echo"<pre>";
print_r(array_fill(0,3,$arr));

print_r(array_pad($arr,6,"hi"));
// print_r(array_pad($arr,6,null));

?>