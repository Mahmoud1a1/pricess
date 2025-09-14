<?php
include('../connect.php');
$s_name=$_GET['s_name'];
$s_code=$_GET['s_code'];
$s_quality=$_GET['s_quality'];
$s_cat=$_GET['s_cat'];
$s_rid_p=$_GET['s_rid_p'];
$s_jed_p=$_GET['s_jed_p'];


$sql="SELECT * FROM spair_prices";
$RESULT=$Conn->query($sql);

$sql="INSERT INTO spair_prices (s_name,s_code,s_quality,s_cat,s_rid_p,s_jed_p) VALUES('$s_name','$s_code','$s_quality','$s_cat','$s_rid_p','$s_jed_p')";
$RESULT=$Conn->query($sql);
header("location: ../emp/search.php");

?>