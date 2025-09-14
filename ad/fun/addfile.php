<?php
include ('../../connect.php');
$wto=$_POST['wto'];
$wtype=$_POST['wtype'];
session_start();
$wuser=$_SESSION['usernameem'];
$wtime=date('y-m-d');
$wtitle=$_POST['wtitle'];
$wsubject=$_POST['wsubject'];
$wattachment=$_FILES['wattachment']['name'];
$wattachmenttmb=$_FILES['wattachment']['tmp_name'];
$upload_file='../file/';
move_uploaded_file($wattachmenttmb,$upload_file.$wattachment);
$sql="INSERT INTO wfile (wtype,wuser,wtime,wtitle,wsubject,wattachment,wto)
VALUES('$wtype','$wuser','$wtime','$wtitle','$wsubject','$wattachment','$wto')";

$RESULT=$Conn->query($sql);
header('Location:http://localhost/EM/ad/fileadd.php')
?>