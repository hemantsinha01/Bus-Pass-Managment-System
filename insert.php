<?php
$uid=$_POST['uid'];
$dob=$_POST['dob'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$addr=$_POST['addr'];
$pcode=$_POST['pcode'];
$mno=$_POST['mno'];
$adno=$_POST['adno'];
$Sname=$_POST['Sname'];
$Sadd=$_POST['Sadd'];
$fstop=$_POST['fstop'];
$tstop=$_POST['tstop'];
$via1=$_POST['via1'];
$via2=$_POST['via2'];
$conn =new mysqli('localhost','root','','buspassdb');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
    echo"Failed try again :(";
}
else{
    $stmt=$conn->prepare("insert into registration(uid,dob,name,gender,fname,mname,addr,pcode,mno,adno,Sname,Sadd,fstop,tstop,via1,via2) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("issssssiiissssss",$uid,$dob,$name,$gender,$fname,$mname,$addr,$pcode,$mno,$adno,$Sname,$Sadd,$fstop,$tstop,$via1,$via2);
    $stmt->execute();
    echo "<script>alert('Registration successfully!.');</script>";
    echo "<script>window.location.href ='index.php'</script>";
    $stmt->close();
    $conn->close();
}
?>