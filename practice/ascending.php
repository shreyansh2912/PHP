<?php 

$a = array(10,5,11,1,0,6);
// $b=$a;
// $b;$c;
echo"<pre>";
print_r($a);
echo"</pre>";

echo"Array in ascending order";
sort($a);
echo"<pre>";
print_r($a);
echo"</pre>";

echo"Array in descending order";
rsort($a);
echo"<pre>";
print_r($a);
echo"</pre>";

?>