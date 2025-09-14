<?php
include ('../../connect.php');
$status=$_GET['status'];
$id=$_GET['id'];
$sql= "UPDATE wuser SET status='$status' where id='$id'";
$RESULT=$Conn->query($sql);

header('Location:http://localhost/EM/ad/shuser.php?ni=')
?>