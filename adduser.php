<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/CSS2.css">
    <title>اضـــافة مســـخدم جــــديد</title>
</head>
<body>
    <DIV>
    <br>
    <h1>اضافة مستخدم جديد</h1>
    <br><br>
<?php
$q1=$_GET['q1'];
if($q1==1){
echo"اسم المستخدم موجود سابقا";

}
if($q1==2){
echo"كلمة السر غير متطابقة";

}
?>


    <form action="FUN/adduser.php" method="get">
    <input type="text" name="wname" placeholder="الاسم الكامل"><br><br>
    <input type="date" name="wdate" placeholder="تاريخ الميلاد"><br><br>
    <input type="text" name="wusername" placeholder="اسم المستخدم"><br><br>
    <input type="password" name="wpassword" placeholder="الباسورد"><br><br>
    <input type="ppassword" name="wpassword2" placeholder="اعادة كلمة السر"><br><br>
    <input type="tel" name="wtel" placeholder="رقم الجوال"><br>
    <label class="wgender" for="">اختر الجنس</label>
    <select name='wgender'  title='اختر الجنس'>
        <option disabled selected>Choose</option>
        <option>ذكر</option>
        <option>انثي</option>
   </select><br>
   <label class="wcountry" for="">اختر الدولة</label>
   <select name='wcountry' title='اختر الدولة'>
    <option disabled selected>Choose</option>
    <option>مصر</option>
    <option>السعودية</option>
    <option>الامارات</option>
    <option>البحرين</option>
    <option>الكويت</option>
    <option>امريكا</option>
</select>
<br>
<input type="submit" name="submit" id="submit" value="حفظ">
</form>
</DIV>
</body>
</html>