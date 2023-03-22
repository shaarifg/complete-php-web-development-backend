<html>

<head>
    <title>basic area calcular in php</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <div class="select">
                <label for="shape">I want to calculate area of:</label>
                <select name="shape" id="shape">
                    <option value="circle">circle</option>
                    <option value="square">square</option>
                    <option value="rectangle">rectangle</option>
                    <option value="sphere">sphere</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

    <!-- PHP code -->
    <p>
        <?php
            if(isset($_POST['submit'])){
                $shape = $_POST['shape'];     
                echo $shape;      
            }
            
        ?>
    </p>
</body>



</html>