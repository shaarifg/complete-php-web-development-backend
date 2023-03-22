<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('./connection.php') ?>
    <title>All forms</title>

</head>

<body>
    <h1>All submitted forms</h1>
    <table>
        <thead>
            <th>Sr. no.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th colspan="2">Operations</th>
        </thead>
        <tbody>
            <!-- Dynamic Data using PHP -->
            <?php
            $selectQuery = "select * from registrations";
            $query = mysqli_query($con, $selectQuery);
            while ($result = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td>
                        <?php echo $result['id'] ?>
                    </td>
                    <td>
                        <?php echo $result['name'] ?>
                    </td>
                    <td>
                        <?php echo $result['email'] ?>
                    </td>
                    <td>
                        <?php echo $result['role'] ?>
                    </td>
                    <td>
                        <?php echo 'Edit' ?>
                    </td>
                    <td>
                        <a href="./delete.php?id=<?php echo $result['id']; ?>"><?php echo 'Delete' ?></a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <a href="./index.php">Submit New Form</a>
</body>

</html>


<!-- 
//include('./connection.php');
// $selectQuery = "select * from registrations";
// $query = mysqli_query($con, $selectQuery);

// // $result = mysqli_fetch_array($query);
// // while ($result) {#this way code will in infinite loop
// //     echo $result['name'] . "</br>";
// // }


// while ($result = mysqli_fetch_array($query)) {
//     echo $result['name'] . "</br>";
// } -->