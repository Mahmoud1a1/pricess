<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافة</title>
</head>
<body>
<?php
include ('../connect.php');
 $n1=$_GET['n1'];
$sql="SELECT * FROM wfile where wid='$n1'";
 $RESULT=$Conn->query($sql);
 while($row = $RESULT->fetch_assoc()){


?>

   <form action="fun/upfile.php" method="POST" enctype="multipart/form-data">
<input style="display:none" type="text" name="wid" value="<?php echo $row['wid'] ?>">
<input style="display:none" type="text" name="wold" value="<?php echo $row['wattachment'] ?>">
   <label for="">موجة الي</label><br><br>
<select name="wto"><br><br>
    <option><?php echo $row['wto'] ?></option>
    <option value="الادارة">الادارة</option>
    <option value="الموظف">الموظف</option>
    <option value="الجمهور">الجمهور</option>
</select><br><br>

<label for="">النوع</label><br><br>
<select name="wtype"><br><br>
<option><?php echo $row['wtype'] ?></option>
    <option value="صادر">صادر</option>
    <option value="وارد">وارد</option>
</select><br><br>
<label for="">العنوان</label><br><br>
<input type="" name="wtitle" value="<?php echo $row['wtitle'] ?>" ><br><br>
<label for="">الموضوع</label><br><br>
<textarea name="wsubject" ><?php echo $row['wsubject'] ?></textarea><br><br>
<input type="file" name="wattachment"><br><br>
<input type="submit" value="حفظ">
<br>
<img src="file/<?php echo $row['wattachment'] ?>" alt="">

   </form>

   <?php
 }
  ?>
    
</body>
</html>