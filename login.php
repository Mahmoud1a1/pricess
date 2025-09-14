<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="CSS/CSS22.css">


    <?php
    session_start();
    session_unset();
    session_destroy();
    ?>
</head>
<body id="loginBodyy">

    <h1>Log In</h1><br>


    <form action="FUN/logintest.php" method="get">
        <h4 class="C_Name">شركة لفاكم للاجرة العامة</h4><br>

            <input class="User_Name" type="text" name="n1" placeholder="ادخل اسم المستخدم"><br><br>
            <input class="Passward" type="password" name="n2" placeholder="ادخل الرقم السري"><br><br>
            <input class="login_b" type="submit" name="submit" id="submit" value="تسجيل الدخول"><br><br>
            </form>

            


</body>
</html>