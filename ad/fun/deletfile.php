<?php
include ('../../connect.php');

$n1=$_GET['n1'];
$n2="../file/".$_GET['n2'];
unlink($n2);
$sql= "DELETE FROM wfile WHERE wid ='$n1'";
$RESULT=$Conn->query($sql);

header('Location:http://localhost/EM/ad/search.php')
?>