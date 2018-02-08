<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="ajax.js"></script>
</head>
<body>
	<p style="font-size: 15px;float: left;margin-left: 50px;">نام درس | &nbsp;&nbsp;&nbsp;شماره درس | &nbsp;&nbsp;&nbsp; تعداد واحد</p>
  <select onclick="yuj()" id="dde" size="30" style="float: left;clear: left;width: 280px; height:250px;font-size: 20px;text-align: center;background-color: white;margin: 0px ;" name="zxc">
  	<?php
session_start();
include('config-login.php');
$a=$_GET['a'];// name dars
$b=$_GET['b'];//no dars
$c=$_GET['c'];//vahed dars
$z=explode("|",$_GET['z']);
$x=$_GET['x'];//type
$o="dars_".$x;

$f="UPDATE `$o` SET  `name` = '$a', `no` = '$b', `course` = '$c' WHERE `name` ='$z[0]' AND `no` ='$z[1]' AND `course` ='$z[2]'";
$conn->query($f);
$sql="SELECT * FROM dars_".$x."";  
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  while ($row=$result->fetch_assoc()) {
    echo "<option>".$row["name"]."|".$row["no"]."|".$row["course"]."</option>";
  }
}else{
	echo "<option></option>";
}
$conn->close();
?>
</select>
<div style="float: right;">
<p>نام درس &nbsp;&nbsp; : &nbsp;<input id="no" type="" name="" style="width: 80px;" ></p>
<p>شماره درس : <input id="esm" type="" name="" style="width: 80px;"></p>
<p>تعداد واحد &nbsp;: &nbsp;<input id="vah" type="" name="" style="width: 80px;"></p>
<button class="btn btn-primary btn-block btn-large"  onclick='loadDoc("update.php?a="+document.getElementById("no").value+"&b="+document.getElementById("esm").value+"&c="+document.getElementById("vah").value+"&x="+document.getElementById("zxcv").value+"&z="+document.getElementById("dde").value,updatedars)' style="width: 100px;display: inline;" '>ویرایش شود</button>
<button class="btn btn-primary btn-block btn-large" onclick='loadDoc("deletedars.php?r="+document.getElementById("dde").value,updatedars)' style="width: 100px;display: inline;" '>حذف شود</button>
</div>
</body>
</html>







