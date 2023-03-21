<?php
echo date('d');

echo date('D')."</br>";

echo date('H:i:sA')."</br>";
echo date_default_timezone_get()."</br>";


// get indian Time in PHP
date_default_timezone_set('Asia/Kolkata')."</br>";
echo date('H:i:sA')."</br>";
echo date_default_timezone_get();

?>