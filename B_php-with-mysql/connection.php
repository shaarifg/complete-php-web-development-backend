<?php

$username = 'root';
$password = '';
$server = 'localhost';
$database = 'php_mysql';


$connection = mysqli_connect($server, $username, $password, $database);

if ($connection) {
    echo "Connection successfull";
} else {
    // echo "Not connected";
    die('no connection: ' . mysqli_connect_error());
}
?>