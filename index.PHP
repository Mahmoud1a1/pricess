<!DOCTYPE html>
<html lang="en" dir="rtl">
    
    <?php
    error_reporting(0);
    include ('connect.php');
    session_start();
    ?>

        
<head>
  
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/CSS122.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركة لـــــفاكــــم</title><br>

</head>
<body>
    <div class="main_div">

    <h1>شـــركة لفــــاكم للاجـــــــرة الــــعامــــة</h1><br>
    <h2>الفـــروع</h2>
    <h2>جــــــدة & الـــــريــاض</h2><br>
    
  

    <?php
    if (isset($_SESSION['usernameem'])) {
      
        $n1=$_SESSION['usernameem'];
        $sql="SELECT * FROM wuser where wusername='$n1'";
        $RESULT=$Conn->query($sql);
        while($row = $RESULT->fetch_assoc()){
            $status=$row['status'];?>
            <span class="status"><?=$status ?></span>
           
     
      <p class="hello">  <?php echo ' مرحبا بك ' . $row['wname'] ?></p>
      <a href="login.php"> <button class="llogin">
        تسجيل خروج
        </button></a>

        <a  href="
                <?php if ($status=='مستخدم'):?>
        us/us.php
         <?php endif ?>

            <?php if ($status=='مدير'):?>
        ad/ad.php
        <?php endif ?>

            <?php if ($status=='موظف'):?>
        emp/emp.php
        <?php endif ?>
        
        
        "> <button class="profile">
        الصفحة الشخصية
        </button></a>
       <?php
    } }
  
    ?>




</div>


</body>
</html>