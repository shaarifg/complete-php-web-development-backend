<!DOCTYPE html>
<html lang="en">

<head>
    <title>html in PHP</title>
</head>

<body>
    <form method="POST">
        Your Color : <input type="text" name='color'>
        <input type="submit" value='Submit' name='submit'>
    </form>
    <p>
        <?php
        if (isset($_POST['submit'])) {
            $color = $_POST['color'];
            switch ($color) {
                case 'red':
                    echo 'Your color is red';
                    break;
                case 'green':
                    echo 'Your color is green';
                    break;
                case 'black':
                    echo 'Your color is black';
                    break;
                default:
                    echo 'I dont know your color';
            }
        }
        ?>
    </p>
</body>

</html>