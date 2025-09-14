<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>البحث في المستخدمين</title>
    <style type="text/css">
table,tr,td,th{
    border:1px solid black;
}

    </style>
</head>
<body>
    <form action="shuser.php">
<input type="text" name="n1">
<input type="submit" name="n1">
    </form>


    <table>
        <tr>
        <th>حذف</th>
        <th>حفظ</th>
        <th>الصفة</th>
        <th>النوع</th>
        <th>الجنس</th>
        <th>الباسورد</th>
        <th>اسم المستخدم</th>
        <th>تاريخ الميلاد</th>
        <th>رقم الجوال</th>
        <th>الاسم بالكامل</th>
        <th>مسلسل</th>
           </tr>
           <?php
           error_reporting(0);
           include ('../connect.php');

           $n1=$_GET['n1'];
           $sql="SELECT * FROM wuser where wusername like'%$n1%' and wname like'%$n1%'";
$RESULT=$Conn->query($sql);
while($row = $RESULT->fetch_assoc()){

?>
        <tr>
        <td><a href="fun/deletuser.php?n1=<?php echo $row['id'] ?>">حذف</a></td>
            <form action="fun/upuser.php" method="get">
        <td><input type="submit" name="" value="حفظ"></td>
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">


         <td> 
    
                <select name='status'  title='اختر الصفة'>
        
        <option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
        <option>مستخدم</option>
        <option>موظف</option>
        <option>مدير</option>
   </select>
  
</td>
</form>
            <td><?php echo $row['wcountry'] ?></td>
            <td><?php echo $row['wgender'] ?></td>
            <td><?php echo $row['wtel'] ?></td>
            <td><?php echo $row['wpassword'] ?></td>
            <td><?php echo $row['wusername'] ?></td>
            <td><?php echo $row['wdate'] ?></td>
            <td><?php echo $row['wname'] ?></td>
            <td><?php echo $row['id'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>