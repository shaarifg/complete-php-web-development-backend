<?php

$str = "Hello Mohd Sharif. $ --- - _";

$length = strlen($str)."</br>";


// count space and special characters
echo $length;

// Count words in string
// Does not count space and special charectors

// Count hyfen as word
#--- - > as two words
$word_count = str_word_count($str);
echo($word_count);


// Replace characters/word

// case-sensitive
# str_replace(search, replace, str);

// case in sensitive

echo str_replace("Mohd", "New", $str);
echo str_ireplace("Mohd", "Insens", $str); #for insensitive

?>