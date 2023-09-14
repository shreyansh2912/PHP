<?php 

$x;$y;

function cal($x,$y)
{
    echo $x+$y."<br>";
    echo $x-$y."<br>";
    echo $x*$y."<br>";
    echo $x/$y."<br>";
    
}

if (isset($_REQUEST['Submit']))
{
    cal($_REQUEST['x'],$_REQUEST['y']);
}


?>
<form action="" method="get">
  <input type="text" name="x" placeholder="Enter vlaues">
  <input type="text" name="y" placeholder="Enter vlaues">
  <button name="Submit">Submit</button>

</form>