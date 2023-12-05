<html>
    <head>
        <title>Result</title>
        <style>
            center{
                color:green;
            }
        </style>

    </head>
    <body>
        <center>
       <?php
        $firstNumber = $_GET['firstNumber'];
        $secondNumber = $_GET['secondNumber'];
        $result = $firstNumber + $secondNumber;

        echo "The Addition of two Number is ".$result;
        ?>
        </center>

    </body>
</html>