<?php
header('Content-type:application/json'); # to let browser know what kind data is expect to come in response
header('Acces-Control-Allow-Orogin:*');

include('../../B_php-with-mysql/connection.php');

// to get the data coming from body through post request
$data = json_decode(file_get_contents("php://input"), true); # will get data is array format
$id = $data['id'];

$sqlQuery = "SELECT * from registrations WHERE id = {$id}";

$query = mysqli_query($connection, $sqlQuery);

if (mysqli_num_rows($query) > 0) {
    echo json_encode(mysqli_fetch_all($query, MYSQLI_ASSOC));
} else {
    echo json_encode(array('message' => "Data Not Found", 'status' => false));
}
?>