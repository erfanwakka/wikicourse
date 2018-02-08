<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p style="font-size: 15px;">نام درس | &nbsp;&nbsp;&nbsp;شماره درس | &nbsp;&nbsp;&nbsp; تعداد واحد</p>
  <select id="frt" size="30" style="width: 280px;height:250px;font-size: 20px;text-align: center;background-color: white;" name="zxc">
  	<?php
include('config-login.php');
$z=$_GET['f'];
$z=explode("|",$z);
$d=$z[0];
$sql="SELECT * FROM dars_group";
$insert1="DELETE FROM dars_group WHERE name='$d'";
$conn->query($insert1); 
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  while ($row=$result->fetch_assoc()) {
    echo "<option>".$row["name"]."|".$row["no"]."|".$row["course"]."</option>";
  }
}
$conn->close();
?>

</select><p>
<button class="btn btn-primary btn-block btn-large" onclick='loadDoc("del.php?f="+document.getElementById("frt").value,sqlbox1)'>حذف</button></p>
</body>
</html>







