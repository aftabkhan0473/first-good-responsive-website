<?php
    echo "Goood one!";
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `gojobuniversity`.`seconddatabase` (`name`, `email`, `subject`, `message`, `date`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";

    if($con->query($sql)==true){
        echo "form submitted!";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
  
?>