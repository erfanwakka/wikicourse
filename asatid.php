<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h3>ویرایش</h3>
	<select id="fghj" size="30" style="width: 280px;height:250px;font-size: 20px;text-align: center;background-color: white;float: left;" name="zxc" onclick="document.getElementById('noostad').value=this.options[this.selectedIndex].text;">
<?php
include('config-login.php');
$c=$_GET['c'];
$sql="SELECT name FROM asatid";
 $insert1="DELETE FROM asatid WHERE name='$c'";
$conn->query($insert1); 
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  while ($row=$result->fetch_assoc()) {
    echo "<option>".$row["name"]."</option>";
  }
}
$conn->close();
?>
</select>
<div style="float: right;">
<p>نام استاد : <input id="noostad" type="" style="width: 120px;"></p>
<button class="btn btn-primary btn-block btn-large" onclick='loadDoc("asatid.php?c="+document.getElementById("fghj").value,deleteasatid)' style="width: 100px;display: inline;">حذف شود
</button>
<button class="btn btn-primary btn-block btn-large" onclick='loadDoc("asatidupdate.php?a="+document.getElementById("noostad").value+"&b="+document.getElementById("fghj").value,deleteasatid)' style="width: 100px;display: inline;">ویرایش شود
</button>
</div>
</body>
</html>







