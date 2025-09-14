<!DOCTYPE html>
<html lang="en" dir="rtl">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافة قطعة غيار</title>
    <link rel="stylesheet" href="../CSS/add_s.css">
    <script src=""script.js></script>


</head>
<header> 
    <h2>شركة لفاكم للاجرة العامة</h2>
    <h2>قســـم اضــافة البــيانــات</h2>
    </header><br><br>

<body>

<?php


  include ('../connect.php');
  $query = "SELECT * FROM drivers";
  $result = $Conn->query($query);

?>



<h2 class="h22"> اضــافة قطعة غيار</h2><br>
<?php
 error_reporting(0);
$q1=$_GET['q1'];
if($q1==1){
    ?>
<p class="pp"><?php echo"القطعة  مسجلة من قبل"?></p>
<?php
}
?>

<br>

<form action="../FUN/add_partf.php" class="form" method="GET">

    <div class="container">

    <div style="display: flex;">

      <DIV class="INPUT_FORM">
        <INPut type="text" id="s_name" name="s_name"required>
        <LAbel  data-aa="Phonee" >ادخــل اســــم قطعة الغيار</LAbel>
    </DIV>



    <DIV class="INPUT_FORM" style="margin-right: 10px;">
        <INPut type="text"id="s_code" name="s_code"required>
        <LAbel data-aa="emaill" >ادخــل كود القطعة</LAbel>
    </DIV>

    </div>
    

 <div style="display: flex;">





<DIV class="INPUT_FORM">

<select class="selectt" id="s_quality" name="s_quality"required>
    
    <option>تشليح</option>
    <option>صيني</option>
    <option>كوري</option>
    <option>اصلي</option>
    <option>تايلاندي</option>
    
</select>

    <LAbel data-aa="addresss" >ادخــل جودة القطعة</LAbel>
</DIV>

<DIV class="INPUT_FORM">

<select class="selectt" id="s_cat" name="s_cat"required>
    
    <option>سوناتا 20</option>
    <option>سوناتا 22</option>
    <option>كيا 23</option>
    <option>سوناتا 24</option>
    <option>سوناتا 25</option>
    
</select>

    <LAbel data-aa="addresss" >ادخــل فئة القطعة</LAbel>
</DIV>




    </div>

    <div style="display: flex;">



        <DIV class="INPUT_FORM" >
        <INPut type="text"id="s_rid_p" name="s_rid_p"required>
        <LAbel data-aa="emaill" > ادخــل سعر الرياض </LAbel>
    </DIV>

        <DIV class="INPUT_FORM" style="margin-right: 10px;">
        <INPut type="text"id="s_jed_p" name="s_jed_p"required>
        <LAbel data-aa="emaill" >ادخــل سعر جدة</LAbel>
    </DIV>

</div>


</div><br><br>
  
<a href=""><button class="add" id="add" >حفظ</button></a>
<div class="popup" id="popup">
<img src="../IMGC/th.jpg" >
<h2>تم اضافة قطعة الغيار بنجاح</h2>
<button class="but" onclick="closepopup()">اغلاق</button>

</div>

</form>

<script> 

let popup = document.getElementById("popup");
function openpopup(){
    popup.classList.add("open-popup");

}

function closepopup(){
    popup.classList.remove("open-popup");

}


</script>

<body>



</html>


