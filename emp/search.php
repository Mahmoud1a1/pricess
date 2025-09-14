<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
<link rel="stylesheet" href="../CSS/CSS41.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>
<div class="buttons">
  <a href="add_part.php"><button class="BAdd"> اضافة قطعة </button></a>
  <a href="../login.php"><button class="BLog"> تسجيل الخروج </button></a>
</div>


<h2>البحث في قطع الغيار</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="ابحث بالاسم او الكود او الفئة او الجودة" title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:7%;"> مسلسل	 </th>
    <th style="width:20%;"> أسم القطعة	</th>
    <th style="width:10%;"> كود القطعه	 </th>
    <th style="width:10%;"> جودة القطعة	 </th>
    <th style="width:10%;"> فئة القطعة	 </th>
    <th style="width:10%;"> سعر الرياض	 </th>
    <th style="width:10%;"> سعر جدة </th>
  </tr>

  <?php
    include ('../connect.php');
  
  $sql="SELECT * FROM spair_prices";
        $RESULT=$Conn->query($sql);
        while($row = $RESULT->fetch_assoc()){
            ?>
  <tr>
  <td style="display:none" ><?php echo $row['s_id'].$row['s_name'].$row['s_code'].$row['s_quality'].$row['s_cat'].$row['s_rid_p'].$row['s_jed_p'] ?></td>
    <td><?php echo $row['s_id'] ?></td>
    <td><?php echo $row['s_name'] ?></td>
    <td><?php echo $row['s_code'] ?></td>
    <td><?php echo $row['s_quality'] ?></td>
    <td><?php echo $row['s_cat'] ?></td>
    <td><?php echo $row['s_rid_p'] ?></td>
    <td><?php echo $row['s_jed_p'] ?></td>

  </tr>
  <?php
        }
   ?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
