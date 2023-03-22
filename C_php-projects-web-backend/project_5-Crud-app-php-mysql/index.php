<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration forms management</title>
    <?php include './style.css' ?>
</head>

<body>
    <div class="container">
        <div class="left">
            <a href="./allforms.php">All forms</a>
        </div>
        <div class="right">
            <form action="" method="post">
                <input type="text" placeholder="Enter you name" name="name">
                <input type="email" name="email" placeholder="Enter you email">
                <input type="text" name="role" placeholder="Enter your role">
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
<!-- Php Script -->
<?php
include './connection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $sqlInsertQuery = "insert into registrations (name, email, role) values('$name','$email', '$role') ";

    $result = mysqli_query($con, $sqlInsertQuery);

    echo $result;
    if ($result) {
        echo 'Intserted';
    } else {
        echo "Failed";
    }

}
?>