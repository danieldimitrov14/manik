<?php
//Establishing connection
$conn = mysqli_connect('localhost', 'root', '', 'login');
//Check connection
if ($conn) {
    echo 'Connected';
} else {
    echo 'Failed';
}
//Check for submitted form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    //Creating MySQL Query to insert data into the database
    $sql = "INSERT INTO credentials (username, password) VALUES ('$username', '$password')";
    //Check if the data is sended
    if (mysqli_query($conn, $sql)) {
        echo "Data sended";
    } else {
        echo "Error";
    }
}

?>