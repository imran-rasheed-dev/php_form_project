<?php
$insert = false;

if(isset($_POST['name'])){
    // set connection variables

    $server = "localhost";
    $username = "root";
    $password = "";

    // creat a database connection
    $con = mysqli_connect($server, $username, $password);
    
    // check for connection success
    if(!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the DB";


    // collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo $sql;
    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully Inserted";
        
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // close the database connection
    $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel form in Php</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to IR Travels US trip form</h1>
        <h3>
            Please submit your Information in this form
        </h3>
        <?php
            if($insert == true){
                echo "<p>thanks for submitting your form.</p>";
            }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Your Name">
            <input type="text" name="age" id="age" placeholder="Your Age">
            <input type="text" name="gender" id="gender" placeholder="Male Or Female">
            <input type="email" name="email" id="email" placeholder="Your Email">
            <input type="phone" name="phone" id="phone" placeholder="Your phone">
            <textarea name="desc" id="desc" placeholder="Other Information"></textarea>
            <button type="submit" class="btn">Submit</button>
            <button type="reset" class="btn">Reset</button>
        </form>
    </div>
    <script src="assets/js/app.js"></script>
</body> 
</html>
<!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'Jhon Smith', '18', 'male', 'jhon@gmail.com', '03432551124', 'f;jkdfj;adkf;fkajf;kjf;al', current_timestamp()); -->