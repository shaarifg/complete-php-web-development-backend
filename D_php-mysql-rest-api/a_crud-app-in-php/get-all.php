<?php
header('Content-Type:application/json'); # to let browser know what kind data is expect to come in response

include('../../B_php-with-mysql/connection.php');

$sqlQuery = "SELECT * from registrations";
$query = mysqli_query($connection, $sqlQuery);

// echo serialize($query); # to convert object into string
if (mysqli_num_rows($query)) {
    echo json_encode(mysqli_fetch_all($query, MYSQLI_ASSOC));
} else {
    echo json_encode(array('message' => "Data Not Found", 'status' => false));
}
?>