<!--

Create By : Prince Patel
Company : NorthFoxGroup
Developers Team : NF Web Developers
Twitter Profile : @NorthFoxGroup
Coder Twitter Profile : @Princu09

-->

<?php

    $servername  = "localhost";
    $username  = "root";
    $password  = "";
    $database  = "aware";
    
    $connect = mysqli_connect($servername, $username, $password, $database);
    
    if (!$connect) {
        die("Sorry We can't connect to Database");
    }
    else{
        // echo "Connection was successfully";
    }

    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO `feedback` ( `name`, `email`, `msg`, `timestamp`) VALUES ('$name', '$email', '$msg', current_timestamp())";

        $result = mysqli_query($connect , $sql);

        if ($result) {
            header("Location: ../");
        }else{
            echo "Something Error :( ";
        }
    }
?>