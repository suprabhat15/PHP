<?php

$name="Suprabhat  ";  // white spaces are counted in strlen.
$income = 200000000;
echo var_dump($name); // string(9) "Suprabhat"  //var_dump tells data type, length of string and value. 
echo "<br>";
$check = true;
echo var_dump($check); // bool(true)  // for bool values, var_dump tells data type and value.
echo "<br>My name is $name and salary is $income";

// more about variables
echo "<br> variables start with a $ symbol";
echo "<br> variables' name don't start with a number";
echo "<br> variables' name start with a character, underscore";
echo "<br> variables contain alphanumeric";
echo "<br> variables are case sensitive.";
echo "<br>";

// Arrays
$friends = array("abcd","efgh","ijkl","mnop");
echo var_dump($friends);   // for printing the details of array.
echo "<br>";
echo $friends[0];
echo "<br>";

// String
$name = "Kumar is my name";
echo "The salary is " . $name;
echo "<br>";
echo "The length is " . strlen($name) . " and the word count is " . str_word_count($name); // str_word_count($name) gives the words count.
echo "<br>";
echo strrev($name);  // to reverse the string.
echo "<br>";
echo strpos($name, "is"); // output is 6. // strpos counts whitespaces too.
echo "<br>";
echo str_replace("Kumar","Suprabhat",$name); // replace "Kumar" with "Suprabhat" in $name.


?>