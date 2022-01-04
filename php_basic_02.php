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
        ?>
    </div>
</body>
</html>