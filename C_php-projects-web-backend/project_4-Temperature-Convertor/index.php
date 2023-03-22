<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Temperature Converter in PHP</title>
    <style>
        .container {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: fit-content;
            height: fit-content;
            margin: auto;
        }

        .left>img {
            width: 100px;
            height: 100px;
        }

        #convert {
            background-color: #bba768;
        }

        #convert:hover {
            background-color: #bcc768;
        }

        h1 {
            font-family: sans-serif;
            color: #70b2e5;
        }

        input {
            display: block;
            padding: 10px;
            margin-top: 10px;
            font-size: 2em;
            color: #f4a55a;
            font-family: cursive, sans-serif;
        }

        ::-webkit-input-placeholder {
            color: #ccc;
        }

        :-moz-placeholder {
            /* Firefox 18- */
            color: #ccc;
        }

        ::-moz-placeholder {
            /* Firefox 19+ */
            color: #ccc;
        }

        :-ms-input-placeholder {
            color: #ccc;
        }

        button {
            padding: 10px;
            font-size: 1.2em;
            color: #545454;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="left">
            <img src="./termometro-frio.svg" alt="">
        </div>
        <form action="" method="post">
            <h1>Temperature Converter</h1>
            <input type="text" id="fahrenheit" placeholder="Enter Temperature" name="value" value="" />
            <div>
                <input type="radio" name="opt" id="" value="f">Fahrenheit
            </div>
            <div>
                <input type="radio" name="opt" id="" value="c">Celcius
                <!-- default values are on/off -->
            </div>
            <input type="submit" name="submit" id="submit" value="Convert">

            <div class="output">
        </form>
        <!-- PHP script -->
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $value = $_POST['value'];
        $option = $_POST['opt'];
        switch ($option) {
            case 'f':
                echo 'Temperature in Celcius: ' . ($value - 32) * (5 / 9);
                break;
            case 'c':
                echo 'Temperature in Fahrenheit: ' . (($value * 9 / 5) + 32);
                break;


        }
        // echo $value;
        // echo $option;
    }

    ?>
    </div>

</body>

</html>