<?php

$server='localhost';
$username='root';
$password='';
$database='form';

$conn = mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}

echo"";
session_start();
if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $sql = "INSERT INTO `user`(`name`,`email`,`number`) VALUES('$name','$email','$number')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Successfully sent.');</script>";
    }
    else{
        echo "ERROR: Could not able to execute $sql.".mysqli_error($conn);
    }
}

?>