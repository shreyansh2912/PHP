<!-- <!-- <?php 

// $a;$factorial=1;



// if (isset($_REQUEST['Submit']))
// {
//     for ($a=1; $a <=$b ; $a++)
//      { 
//         $factorial=$factorial*$a;
//     }
    
//     echo $factorial;
// }

?>  -->
 -->
 
 <?php

$f = 1;
// $n;

if (isset($_REQUEST['Submit']))
{

for ($i = 1; $i <= $_REQUEST['n']; $i++)
 {
    $f = $f * $i;
  }
echo "Factorial of  is $f";

}

?>

<form action="" method="get">
  <input type="text" name="n" placeholder="Enter vlaues">
  <button name="Submit">Submit</button>

</form> 