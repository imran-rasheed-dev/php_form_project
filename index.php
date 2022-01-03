<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="continer">
        <h1>
            This is my first website in php
        </h1>
        <div>
            <?php
                echo "<h2> hello world</h2>";
             
            ?>
            <br>
           <?php
                $myvar1 = 100;
                $myvar2 = 200;

                echo $myvar2;
                echo "<br>";
                echo $myvar1;
                echo "<br>";
                
                // operators in php
                
                // 1.Artmathic operators
                
                echo "The value of myvar1 + myvar2 is <br>";
                echo $myvar1 + $myvar2;
                echo "<br>";
                echo "The value of myvar1 * myvar2 is <br>";
                echo "<br>";
                echo $myvar1 * $myvar2;
                echo "<br>";
                echo "The value of myvar1 / myvar2 is <br>";
                echo "<br>";
                echo "The value of myvar1 - myvar2 is <br>";
                echo "<br>";
                echo $myvar1 - $myvar2;
                
                // 2.Assignment operators
                // 3.Comparison operators
                // 4.Logical operators
           ?>
        </div>
    </div>
</body>
</html>