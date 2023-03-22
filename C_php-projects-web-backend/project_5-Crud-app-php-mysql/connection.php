<?php
$username = 'root';
$password = '';
$server = 'localhost';
$databse = 'php_mysql';

$con = mysqli_connect($server, $username, $password, $databse);

if ($con) {
    echo 'Connection Successful';
} else {
    echo 'Not connected';
}

?>