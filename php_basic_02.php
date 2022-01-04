<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .container  {
        max-width: 80%;
        margin: auto;
        padding: 23px;
        background-color: aqua;
    }
</style>
<body>
    <div class="container">
        <h1>
            This is my first website in php
        </h1>
        <p>
            Your party status is here:
        </p>
        <?php
            $age = 16;
            if($age > 18) {
                echo "you can go to the party";
            }
            else if ($age == 17){
                echo "you are not 18+";
            }
            else {
                echo "you are kid baby";
            }
            
            // Loops and array in php
            echo "<br>";
            echo "<br>";
            echo "<h2>Loops and Array in PHP</h2>";
            $programminglang = array("Ruby", "PHP", "Phyton", "NodeJs");
            echo $programminglang[0];
            echo "<br>";
            echo count($programminglang);
            echo "<br>";
            
            $a = 0;
            while ($a <= 10) {
                echo "The value Variable A (using while loop) is: ";
                echo $a;
                echo "<br>";
                $a++;
            }

            // Iterating arrays in PHP using while loop
            $a = 0;
            while ($a < count($programminglang)) {
                echo "The value of Language (using while loop) is: ";
                echo $programminglang[$a];
                echo "<br>";
                $a++;
            }

            // do while loop
            $b = 100;
            do {
                echo "the value of b (using do while loop) is ";
                echo $b;
                echo "<br>";
                $b++;
            } while ($b < 10);

            // for loop
            for ($a=0; $a < 10; $a++) {
                echo "<br> The value of a from for loop is: ";
                echo $a;
            }

            // foreach loop

            foreach ($programminglang as $value) {
                echo "<br>The value from foreach loop is ";
                echo $value;
            }

            // function in PHP

            function number() {
                echo "<br>The number is Five";
            }

            number();

            function print_number($number) {
                echo "<br>Your number is ";
                echo $number;
            }

            print_number(100);

        ?>
    </div>
</body>
</html>