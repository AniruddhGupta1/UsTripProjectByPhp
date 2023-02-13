<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $server = "localhost";

    $username = "root";
    
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    $insert = false;
    if(isset($_POST['name'])){
        // Set connection variables
        $server = "localhost";
        $username = "root";
        $password = "";
    
        // Create a database connection
        $con = mysqli_connect($server, $username, $password);
    
        // Check for connection success
        if(!$con){
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        // echo "Success connecting to the db";
    
        // Collect post variables
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];
        $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
        if($con->query($sql) == true){
            echo "Successfully inserted";}
            $con->close();
        }
    ?>
</body>
</html>
