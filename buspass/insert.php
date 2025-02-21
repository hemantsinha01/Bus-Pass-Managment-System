<?php
$username=$_POST['username'];
$password=$_POST['password'];
$conn =new mysqli('localhost','root','','buspassdb');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
    echo"Failed try again :(";
}
else{
    $stmt=$conn->prepare("insert into users(username,password) values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo "registration successfull....";
    header("location:index.php");
    $stmt->close();
    $conn->close();
}
?>