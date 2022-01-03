<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
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
                echo "<h2>Artmathic operators </h2>";
                echo "The value of myvar1 + myvar2 is";
                echo $myvar1 + $myvar2;
                echo "<br>";
                echo "The value of myvar1 * myvar2 is";
                echo $myvar1 * $myvar2;
                echo "<br>";
                echo "The value of myvar1 / myvar2 is";
                echo $myvar1 / $myvar2;
                echo "<br>";
                echo "The value of myvar1 - myvar2 is";
                echo $myvar1 - $myvar2;
                echo "<br>";
                
                // 2.Assignment operators
                echo "<h2>Assignment operators </h2>";
                $newvar = $myvar1;
                
                echo "The value of newvar is";
                echo $newvar;
                echo "<br>";
                $newvar += 1;
                echo "The value of newvar is";
                echo $newvar;
                echo "<br>";
                $newvar -= 1;
                echo "The value of newvar is";
                echo $newvar;
                echo "<br>";
                $newvar *= 2;
                echo "The value of newvar is";
                echo $newvar;
                echo "<br>";
                $newvar /= 2;
                echo "The value of newvar is";
                echo $newvar;
                
                
                // 3.Comparison operators
                
                echo "<h2>comparison operators </h2>";
                echo "the value of 1==4 is ";
                echo var_dump(1==4);
                echo "<br>";
                echo "the value of 1!=4 is ";
                echo var_dump(1!=4);
                echo "<br>";
                echo "the value of 1>=4 is ";
                echo var_dump(1>=4);
                echo "<br>";
                echo "the value of 1<=4 is ";
                echo var_dump(1<=4);
                echo "<br>";
                
                
                // 4.Increament/Decrement operators
                echo "<h2>Increament/Decrement operators</h2>";
                $myvar3 = 40;
                // $myvar3++;
                // $myvar3--;
                // ++$myvar3;
                --$myvar3;
                echo $myvar3;
                echo "<br>";
                echo $myvar3;
                echo "<br>";
                
                
                // 5.Logical operators
                echo "<h2>Logical operators</h2>";
                echo "<div>and (&&),<br>or (||),<br>xor,<br>not (!)</div>";
                echo "<br>";

                // $mynewvar = (true and true);
                $mynewvar = (true and false);
                echo var_dump($mynewvar);
           ?>
        </div>
    </div>
</body>
</html>