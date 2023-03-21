<?php
// Different Loops in PHP
// Iterative statements

// While Loop--true untill some conditions does not meet
$count = 1;

echo "I am while loop </br>";
while($count<=5){
    echo "Hello" . $count." </br>";
    $count++;
}

// do-while loop in PHP

echo "I am do-while loop</br>";

// at least run for one time
do{
    echo "Hello" . $count." </br>";
    $count++;
}while($count<=5);

// for loop in PHP

echo "I am for for loop </br>";

for($i = 1; $i<=10; $i++ ){
    echo $i . "</br>";
}

// accessible outside the loop
echo $i;


// == only checks value
// === strict comparision

?>