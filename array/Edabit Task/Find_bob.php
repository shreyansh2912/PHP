<?php

$array = ["Shreyansh","bob","hello"];
$arr = array_values($array);
$num = 0;
for ($i=0; $i < 3 ; $i++) 
{ 
    $arr2 = $array[$num];
    if($arr2 == "bob")
    {
        echo $num;
    }
    $num ++;
    
}
?>