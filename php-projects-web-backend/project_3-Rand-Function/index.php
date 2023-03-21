<?php

$heads = 0; $tails =0;
for($i =1; $i<=100; $i++){
    $random = rand(1, 2);
    if($random===1){
        // echo "Heads, I win!</br>";
        $heads++;
    }elseif($random==2){
        // echo "Tails, You win!</br>";
        $tails++;
    }
}
echo 'There were '.$heads.' heads and ' .$tails.' tails';
if(($heads > $tails) and ($heads != $tails)){
    echo "</br><b>You win!!!</b>";
}elseif(($heads == $tails))echo "</br><b>Draw!!!</b>";
else echo "</br><b>You Loose!!!</b>";



// Question
/* HEADS, I WIN! 
This challenge tests your understanding of the RAND() function and IF­ELSE statement. 

You need to generate a random number between 1 and 2. 

If the random number is 1 then echo “Heads, I win!”   
If the random number is 2 then echo “Tails, you win!”     

EXTENSION   

This extension challenge tests your understanding of:   
● RAND()
● IF­ELSE
● FOR loop
● concatenation   

Use a loop to generate the above 100 times. 

Keep a score of how many heads there were and how many tails and then echo out the results as

There were 48 heads and 52 tails.  */
?>

