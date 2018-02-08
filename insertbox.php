<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="ajax.js"></script>
</head>
<body>
<p style="font-size: 15px;">نام درس | &nbsp;&nbsp;&nbsp;شماره درس | &nbsp;&nbsp;&nbsp; تعداد واحد</p>
  <select id="frt" size="30" style="width: 280px;height:250px;font-size: 20px;text-align: center;background-color: white;" name="zxc" >
<?php
include('config-login.php');
$z=$_GET['z'];
$x=$_GET['x'];
$z=explode("|",$z);
$sql="SELECT * FROM dars_group";
for ($i=1; $i<=$x ; $i++) { 
	$insert1="INSERT INTO dars_group (name,no,course) VALUES('$z[0] گ".$i."','$z[1]','$z[2]')";
	$conn->query($insert1); 
}
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  while ($row=$result->fetch_assoc()) {
    echo "<option>".$row["name"]."|".$row["no"]."|".$row["course"]."</option>";
  }
}
$conn->close();
?>
</select>
<p>
<button class="btn btn-primary btn-block btn-large" onclick='loadDoc("del.php?f="+document.getElementById("frt").value,sqlbox1)'>حذف</button>
</p>
</body>
</html>







