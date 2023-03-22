<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>