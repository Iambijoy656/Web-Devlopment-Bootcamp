<?php

//simple function


// function greetings()
// {
//     echo "Hello";
// }

// greetings();




//perameterized function


// function hello($name)
// {

//     echo "Hello " . $name;
// }

// hello("Bijoy");





// function add($a , $b)
// {
//     return $a + $b;

// }

// echo  add(5,6) ;
// echo "<br>"; 
// echo  add(10,10);



//creat a function sum all numbers


// function add(...$numbers)

// {
//     $sum = 0;

//     foreach ($numbers as $num) {
//         $sum +=$num;
       
//     }
//     echo $sum;
// }

// add(1,2,3,4,5,6,7,8,9,10);




// recurtion

function printNumber($num)
{

if ($num == 0) {
    return " ";
}

    echo $num . "<br>";
    printNumber($num-1);
}

printNumber(50);