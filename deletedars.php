<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="ajax.js"></script>
</head>
<body>
	<p style="font-size: 15px;float: left;margin-left: 50px;">نام درس | &nbsp;&nbsp;&nbsp;شماره درس | &nbsp;&nbsp;&nbsp; تعداد واحد</p>
  <select onclick="yuj()" id="dde" size="30" style="float: left;clear: left;width: 280px; height:250px;font-size: 20px;text-align: center;background-color: white;margin: 0px ;" name="zxc">
<?php
include('config-login.php');
session_start();
$c=$_GET['r'];
$c=explode("|",$c);
$x=$_SESSION["type"];
$sql="SELECT * FROM dars_".$x."";
 $insert1="DELETE FROM dars_".$x." WHERE name='$c[0]'";
$conn->query($insert1);  
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







