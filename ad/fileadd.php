<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافة</title>
</head>
<body>
   <form action="fun/addfile.php/" method="POST" enctype="multipart/form-data">

   <label for="">موجة الي</label><br><br>
<select name="wto"><br><br>
    <option value="الادارة">الادارة</option>
    <option value="الموظف">الموظف</option>
    <option value="الجمهور">الجمهور</option>
</select><br><br>

<label for="">النوع</label><br><br>
<select name="wtype"><br><br>
    <option value="صادر">صادر</option>
    <option value="وارد">وارد</option>
</select><br><br>
<label for="">العنوان</label><br><br>
<input type="" name="wtitle"><br><br>
<label for="">الموضوع</label><br><br>
<textarea name="wsubject" ></textarea><br><br>
<input type="file" name="wattachment"><br><br>
<input type="submit" value="حفظ">


   </form>
    
</body>
</html>