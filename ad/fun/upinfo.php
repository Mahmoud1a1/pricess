<?php
include ('../../connect.php');
$wlang=$_POST['wlang'];
$wline1=$_POST['wline1'];
$wline2=$_POST['wline2'];
session_start();
$wuser=$_SESSION['usernameem'];
$wtime=date('y-m-d');
$wtitle=$_POST['wtitle'];
$wsubject=$_POST['wsubject'];
$wattachment=$_FILES['wattachment']['name'];
if ($wattachment==null) {
    $wattachment=$_POST['wold'];
}else{
    unlink("../file/".$_POST['wold']);
$wattachmenttmb=$_FILES['wattachment']['tmp_name'];
$upload_file='../file/';
move_uploaded_file($wattachmenttmb,$upload_file.$wattachment);
}
$sql= "UPDATE wfile SET 
wtype='$wtype',
wuser='$wuser',
wtime='$wtime',
wtitle='$wtitle',
wsubject='$wsubject',
wattachment='$wattachment',
wto='$wto' 
where wid='$wid'";
$RESULT=$Conn->query($sql);
header('Location:http://localhost/EM/ad/search.php')
?>