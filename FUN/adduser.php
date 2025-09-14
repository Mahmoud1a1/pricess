<?php
include('../connect.php');
$wname=$_GET['wname'];
$wdate=$_GET['wdate'];
$wusername=$_GET['wusername'];

$sql="SELECT * FROM wuser where wusername='$wusername'";
$RESULT=$Conn->query($sql);
while($row = $RESULT->fetch_assoc()){
$count=$RESULT->num_rows;
}
if ($count>0){
    header('Location:http://localhost/EM/adduser.php?q1=1');
    exit();
}

$wusername=$_GET['wpassword'];
$wpassword2=$_GET['wpassword2'];
if ($wusername !== $wpassword2){
    header('Location:http://localhost/EM/adduser.php?q1=2');
    exit();
}
$wtel=$_GET['wtel'];
$wgender=$_GET['wgender'];
$wcountry=$_GET['wcountry'];
$sql="INSERT INTO wuser (wname,wdate,wusername,wpassword,wtel,wgender,wcountry,status) VALUES('$wname','$wdate','$wusername','$wpassword','$wtel','$wgender','$wcountry','مستخدم')";
$RESULT=$Conn->query($sql);
header('Location:http://localhost/EM/index.php');
?>