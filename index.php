<?php

echo "<h2>hello world</h2>" . "<br>";
echo "using echo" . "<br>";
print "hello world"."<br>";
print ("using print") . "<br>";


//veriable declaration
$name= "Bijoy";
$num= 100;
$float=10.2;
$isActive= true;

//print variable
echo "name is:" . $name  . "<br>";
echo "number is:" . $num  . "<br>";

//print variable type
// echo gettype ($name) . "<br>" ;
// echo gettype ($float) . "<br>" ;
// echo gettype ($isActive) . "<br>";

//print the whole variable
// var_dump ($name) . "<br>";
// var_dump ($num);

//change the variable

$name = "sanju";

echo "Change Name:" . $name . "<br>";

//variable checking function

echo is_string($name) . "<br>";
echo is_integer($num) . "<br>";


//check if variable is defined

// echo isset($name) . "<br>";

//constant variable 

define("PI", 3.14);
echo PI;

//build in variable

echo PHP_INT_MAX;

$chec=3546164161651665141966411793719;

echo $chec;

 
