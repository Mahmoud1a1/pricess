<?php
include ('../connect.php');
$n1=$_GET['n1'];
$n2=$_GET['n2'];

$sql="SELECT * FROM wuser where wusername='$n1' AND wpassword='$n2'";
$RESULT=$Conn->query($sql);
while($row = $RESULT->fetch_assoc()){
$count=$RESULT->num_rows;
}
if ($count>0){
    session_start();
    $_SESSION['usernameem']=$n1;
header('Location:http://localhost/prices/index.php');
}
else{
    header('Location:http://localhost/prices/login.php');
}

?>
