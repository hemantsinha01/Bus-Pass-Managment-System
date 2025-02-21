<?php
$uid=$_POST['uid'];
$adno=$_POST['adno'];
$name=$_POST['name'];
$mno=$_POST['mno'];
$conn =new mysqli('localhost','root','','buspassdb');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into nornal(uid,adno,name,mno) values(?,?,?,?)");
    $stmt->bind_param("iisi",$uid,$adno,$name,$mno);
    $stmt->execute();
    echo "<script>alert('Registration successfully!.');</script>";
    echo "<script>window.location.href ='index.php'</script>";
    $stmt->close();
    $conn->close();
}
?>