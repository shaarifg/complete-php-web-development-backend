<!-- Arrays -->
<?php
// Indexed Arrays
// Associative Arrays
// Multidimensional

$names = array("sharif", "shubham", "raj", "boney");
echo "<pre>";
print_r($names);

$names[3] = 'newName';
echo "<pre>";
print_r($names);

// Length of Array
echo "Length is: ".count($names);



// ForEach loop in Php ,Onl for arrays.
foreach($names as $value){
    echo '</br>'.$value."</br>";
}

// Array Methods

// sort($names);returns 1 and zero
rsort($names);//sort and reverse


// Array elements to a string
$newName  = implode("+", $names);

// String to Arrays elements.

// delimeter
$oldArrays = explode("+", $newName);
echo "<pre>";
print_r($oldArrays);


//* Question, Merge two Arrays and remove duplicates
$arr1 = array("red", "black", "green");
$arr2 = array("red", "white", "blue");


$merge = array_merge($arr1, $arr2);

// removes with index number. 
$unique = array_unique($merge);
echo "<pre>";
print_r($unique);
?>