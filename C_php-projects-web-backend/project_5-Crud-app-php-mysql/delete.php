<?php
include('./connection.php');

$id = $_GET['id'];

$deleteQuery = "delete from registration where id=$id";

$del = mysqli_query($con, $deleteQuery);


header('location:allforms.php')
    ?>