<?php
// function name starts with letter and underscore but not with number. number can be there after first letter or underscore

// function does not load or run without callinf it.
function greet(){
    echo "Good Morning</br>";
}

greet();

// with parameters

function sum($n1, $n2){// parameters
    //use of brackets is must for expression concatination
    echo 'Sum: '.($n1 + $n2).'</br>';
}

sum(10, 11);//agruments


//default arguments values function

function mult($a, $b=1){
    echo 'Product: '.($a*$b).'</br>';
}
mult(3, 4);
mult(2);//b will be set to 1
mult(2, 0);

// Function Returns
function divide($a, $b=1){
   return ($a/$b);
}

echo "I am returned output: ".divide(90.77,2) ;

?>