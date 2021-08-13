<?php

//array introduction

//array create

$country = ["BD", "US" , "IND"];


$fruit=array("apple" ,"malta");

// array print
// echo "<pre>";
// var_dump($country);
// echo  "</pre>";

// // get element by index

// echo $country[1];
// echo "<br>";
// echo $number[3];

//set element into array

// $country[]= "AUS";



// echo "<pre>";
// var_dump($country);
// echo  "</pre>";


//array lenth

// echo count($country);

//array method

// array_push($country, "MALDIVS");


// echo "<pre>";
// var_dump($country);
// echo  "</pre>";


// array_pop($country);

// set the element at the beginning of array

// array_unshift($country, "AUS");

// // remove the element at the beginning of array

// array_shift($country);

//  echo "<pre>";
//  var_dump($country);
//  echo  "</pre>";


// $colors="blue,red,green,yellow";

// //slipt any string into array

// // echo gettype($colors);

// echo "<pre>";
// var_dump(explode("," , $colors));
// echo  "</pre>";


// $colors="blue red green yellow";

// $colors_array= explode(" " , $colors);


// echo "<pre>";
// var_dump($colors_array);
// echo  "</pre>";

// //combine into string
// echo implode(",", $colors_array);

///check element into array

// $number=[10, 20, 15 , 30, 12, 58, 102 , 40];

// echo in_array(50, $number);
// echo "<br>";
// echo in_array(40, $number);


// echo array_search(20, $number);




//array sort

// sort($number); //ascending order

// echo "<pre>";
// var_dump($number);
// echo "</pre>";


// rsort($number); //Descending order

// echo "<pre>";
// var_dump($number);
// echo "</pre>";




$number1= [1,2,3,4];
$number2= [5,6,7,8,9,10];

//array merge

// $number = array_merge($number1, $number2);

// $number = [...$number1, ...$number2]; 

// echo "<pre>";
// var_dump($number);
// echo "</pre>";



//associate array_merge

$country= ["BD"=> "Bangladesh", "US"=> "USA", "AUS"=> "Australia" , "CND"=> "Canada"];


// echo $country["BD"];
// echo $country["AUS"];

 //add new element into associate
// $country["IND"] = "INDIA";

// echo "<pre>";
// var_dump($country);
// echo "</pre>";



 $keys = array_keys($country); //return keys of array

 $values= array_values($country);

//   echo "<pre>";
//  var_dump($values);
//  echo "</pre>";


 //sort  associate array



// $sorted_array = ksort($country); // sort by key



//  echo "<pre>";
//   var_dump($sorted_array);
// echo "</pre>";

 asort($country); // sort by value
 
  echo "<pre>";
  var_dump($country);
  echo "</pre>";
 


  


