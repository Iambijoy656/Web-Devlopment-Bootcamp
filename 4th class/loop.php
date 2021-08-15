<?php

//while loop, for loop, foreach ,do while



//while


// $num=1;
// $sum=0;
// while ($num <= 100) {
   
//     $sum += $num; //$sum =$sum +$num
//     $num++;
// }
// echo  $sum . "\n";




// even number addition

// $num=0;
// $sum=0;
// while ($num <= 100) {
//    echo $num . "<br>";
//     $sum += $num; //$sum =$sum +$num
//     $num+=2 ;
// }
// echo  $sum . "\n";




//for loop


// $sum=0;
// for($num=1; $num<=100; $num++){
//     $sum +=$num;
// }

// echo $sum;




//do while
// $num=2;
// do {
//   echo $num . "<br>";  
//   $num +=2;
// } while ($num <= 100);




//foreach

// $colors= ["red","green", "blue", "skyblue"];

// foreach ($colors  as $color) {
//     echo $color . "<br>";
// }





// $numbers= [1,2,3,4,5,6,7,8,9];
//  foreach($numbers as $number){
//      echo $number . "<br>";
//  }



// $country= ["BD"=> "BANGLADESH", "US"=>"USA", "AUS" => "Australia"];
// foreach ($country as $key => $value) {
//     echo "key:" .$key  . " ". "value:" . " " . $value . "<br>";
// }




//break and continue

//  for ($i=0; $i < 10; $i++) { 
//      echo $i . "<br>";

//      if ($i===5) {
//         break;
//     }
//  }




for ($i=0; $i < 10; $i++) { 
 ;

    if ($i===5 || $i===6 || $i===8) {
       continue;
   }
   echo $i . "<br>";

}


