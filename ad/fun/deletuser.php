<?php
include ('../../connect.php');
$n1=$_GET['n1'];
$sql= "DELETE FROM wuser WHERE id ='$n1'";
$RESULT=$Conn->query($sql);

header('Location:http://localhost/EM/ad/shuser.php?n1=')
?>