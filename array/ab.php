<?php 

$a=array(1,4,3,2,8);
// $len = count($a);
// for ($i=0; $i <3; $i++) { 
//     print_r($a[$i]);
// }

foreach ($a as $key => $value)
{
    $key=3;
    echo"<pre>";
    print_r($value);
    echo"</pre>";
}

?>