<?php


//creat a namespace
$name= "bijoy";

// echo $name;
$name2= "sonju";

//string concatanation

// echo $name . $name2;

//string function

$moto= "I love you";

$text= "     Hello    world    "; 

// echo strlen($moto);
// echo $text;
// echo trim($text);

// echo ltrim($text); // left side trim 
// echo rtrim($text); // reft side trim 


// echo str_word_count($moto);

$name= "Tonmoy";
 // echo strrev($name);

// echo strtoupper($name);
// echo strtolower($name);

// echo strpos($text, "world");
// echo "<br>";
// echo strpos($text, "o");

$text="Hello world";

// echo str_replace("world","Bijoy",$text);

// echo str_ireplace("World","Bijoy",$text);

$longText="Hello,
I am Bijoy,
How are you?";

// echo $longText;

// echo nl2br($longText);

echo htmlentities(  nl2br($longText));