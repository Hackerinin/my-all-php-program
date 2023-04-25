<?php
//this is a while loop 
echo "<h1> This a while loop</h1>";
$d = 0;
while($d<10){
    echo $d+2;
    echo "<br>";
    $d+=2;
}
//this a for loop 

echo "<h1> this is a for loop ";
for ($index=0; $index < 10; $index++) { 
    echo "the number is $index <br>"; 
}
echo "the loop  is ended";

//do while loop
$i =  4;

do{
    echo "$i <br>";
    $i++;   
}while($i<5);  
?>