<?php
/*operator in php 
1. Arithmetic operator 
2. Assigment operator
3. Comparison operator
4. Logical operator     
*/

//1. Arithmetic operator      
$a = 45;
$b = 8;

echo "For a + b result is ". ($a + $b )."<br>";
echo "For a - b result is ". ($a - $b )."<br>";
echo "For a * b result is ". ($a * $b )."<br>";
echo "For a / b result is ". ($a / $b )."<br>";
// this is a moduler operator 
echo "For a % b result is ". ($a % $b )."<br>";
// this show remminder of this echo     
echo "For a ** b result is ". ($a ** $b )."<br>";


//2. Assigment operator

/*$x = $a;
echo "for x this value is" .$x;
*/

//$a += 6;
//echo "for a, the value is ".$a. "<br>";

//$a -= 6;
//echo "for a, the value is ".$a. "<br>";

//$a *= 6;
//echo "for a, the value is ".$a. "<br>";

//$a /= 5;
//echo "for a, the value is ".$a. "<br>";

//$a %= 5;
//echo "for a, the value is". $a."<br>";

//3. Comparison operator

$v =555;
$p =55;

//echo "For v > p result is ";
//echo  var_dump($v > $p );
//echo "<br>";


//echo "For v < p result is ";
//echo  var_dump($v < $p );
//echo "<br>";


//echo "For v <> p result is ";
//echo  var_dump($v <> $p );
//echo "<br>";


//echo "For v == p result is ";
//echo  var_dump($v == $p );
//echo "<br>";

//echo "For v >= p result is ";
//echo  var_dump($v >= $p );
//echo "<br>";

//echo "For v <= p result is ";
//echo  var_dump($v <= $p );
//echo "<br>";



//4. Logical operator     

$m = true;
$c = false;

echo "For m and c result is ";
echo  var_dump($m and $c );
echo "<br>";

echo "For m or c result is ";
echo  var_dump($m or $c );
echo "<br>";

echo "For m && c result is ";
echo  var_dump($m && $c );
echo "<br>";

echo "For m || c result is ";
echo  var_dump($m || $c );
echo "<br>";

echo "For !m result is ";
echo  var_dump(!$m);
echo "<br>";
 


