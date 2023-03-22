<?php
$num = 11;// data type will be set as Integer
# ;(semicolon) for ending the statements is must in Php
echo $num;

// Strings
$firstName = "Mohd Sharif";
echo "</br>";
echo $firstName;


// Arrays
$names_array = array('sharif', "shubham", "raj");
echo" </br> $names_array[0]</br>";


// Number 
$base = 4;
$expo = 3;
echo pow($base, $expo);


// Double Quotes Vs Single Quotes

# Signle quotes treats all content as plane String--cannot identify the variable name inside it.---faster

# Double quotes mostly used for embeding multiple things
#using curlybraces for variables is recommended


# cannot use " inside " and ' inside ' but one in anoter is possible

echo 'my name is {$firstName} </br>';
echo "my name is {$firstName}</br>";

// To use double quotes inside double quotes use with backslash
echo "My name is \"Sharif\" </br> ";


// Controlled Statements---
$num =16;//variable can be updated
if($num % 2 == 0){
    echo 'EVEN';
}elseif($num==10){
    echo "num is 10";
}else{
    echo "default";
}

// Concatenation we, use period(.)

$lastName = "Hello";
$lastName .=' bye';
//concatination
echo '</br>Name  is ' . $firstName. $lastName;


// Logical Operators

$a = 5;
$b = 5;
$c=10;


// and or----symbol can also be used && || XOR
if($a==$b and $a==$c){
    echo "TRUE";
}else{
    echo "FALSE";
}

// Switch Statement
$val = 9;
switch(/* expression */ $val){
    case 5: echo "</br>Right";
    break;
    case 6: echo "</br>Right";
    break;
    default: echo "</br>Sharif";
}

?>