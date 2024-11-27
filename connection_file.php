

















<?php
    /*$userName = $_POST['userName'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'login_form');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("Insert into 'credentials'(userName, password) values(?, ?)");
        $stmt ->bind_param("ss", $userNmae, $password);
        $stmt ->execute();
        $stmt ->close();
        $conn ->close();
    }*/

    $servername = 'localhost';
    $username = 'root';
    $pwd = '';
    $dbname = 'login_form';
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $conn = new mysqli($servername, $username, $pwd);
   

    if(!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    else{
        echo ("Connect Successfully");
    }
    $sql = "INSERT INTO credentials (user, password) VALUES(?, ?)";
    $sql ->bind_param("ss", $userName, $password);
    $sql ->execute()
?>