<?php 
 $name = "sacin";
 $income = 1110;

 /*
 how many type of data type are ther in php 

 1.string
 2.integer
 3.Float
 4.Boolean
 5.object
 6.Array
 7.Null 
 */

 //1.string - sequence of characters

 $name = "sachin";
 $friend = "kishan";

 echo "$name friend is $friend<br>" ;
 echo "$friend is friend of $name <br>";

 //2.integer - Non decimal number 
  
 $income = 2304;
 $outcome = -1283;
 echo "<br>";
echo $income; 
echo "<br>";    
echo $outcome;
echo "<br>";

//Float - is a poitn value  (decimal point number)
 
$income = 344.5;
$outcome = -455.5;

echo $income ;
echo  "<br>";
echo $outcome;
echo "<br>";

// Boolean - can be either true or false

$x = true ;
$is_friend = false;

echo  var_dump($x);
echo  "<br>";
echo var_dump( $is_friend);    

//object - instances of classses

//Employee is a class -->  harry can  be  one object 
 
//Array  - used to store  multiple  valuse in a single variable


$friends = array ("rohan", "shubham","skillf","larry");
echo  "<br>";
echo var_dump($friends);
echo  "<br>";
echo $friends[0];
echo  "<br>";
echo $friends[1];
echo  "<br>";
echo $friends[2];
echo  "<br>";
echo $friends[3];
echo  "<br>";
//echo $friends[4];//it show an error because the value is start with 0 

// null - it mean no value in it 

$name =  null   ;
echo var_dump($name);
?>


<h1>it over</h1>
