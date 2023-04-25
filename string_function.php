<?php 
$class = "going to class because of teacher";
$name = "sachin";
echo $name;
echo "<br>";
//1 function strlen  that print how many number are there in name 
echo "The lenght of name is ". strlen($name);
echo "<br>";
//2 function str_word_count this fnction count the word in string
echo  str_word_count($class);
echo "<br>";
// 3 function is strrev is use to reverser
echo strrev($class);
echo "<br>";
// 4 function is strpos it use to search word in variable
echo strpos($class, "of");
echo "<br>";
//5 function is str_replace it use to chang variable name 
echo str_replace("sachin", "harry", $name);
echo "<br>";
//6 function is str_repeat it use for repeat anything 
echo str_repeat($class, 2);
echo "<br>";
// 7 function is rtrim is use for see space in  left 
echo "<pre>";
echo rtrim("    $class      ");
//7 function is ltrim is use space in right 
echo "<br>";
echo ltrim("    $class     ");
echo "<br>";
echo "</pre>";