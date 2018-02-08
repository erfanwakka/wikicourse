<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="ajax.js"></script>
</head>
<body>
  	<p style="font-size: 15px;">نام درس | &nbsp;&nbsp;&nbsp;شماره درس | &nbsp;&nbsp;&nbsp; تعداد واحد</p>
  <select id="klop" size="30" style="width: 280px;height:250px;font-size: 20px;text-align: center;background-color: white;" name="zxc">
<?php
include('config-login.php');
session_start();
$q=$_GET['q'];
$sql="SELECT * FROM dars_".$q."";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  while ($row=$result->fetch_assoc()) {
    echo "<option>".$row["name"]."|".$row["no"]."|".$row["course"]."</option>";
  }
}
$conn->close();
?>
</select>
<div>
<p>تعداد گروه:
<select class="btn btn-primary btn-block" id="yhn" style="width: 50px;display: inline;">
					<option value="1">۱</option>
					<option value="2">۲</option>
					<option value="3">۳</option>
					<option value="4">۴</option>
					<option value="5">۵</option>
					<option value="6">۶</option>
					<option value="7">۷</option>
					<option value="8">۸</option>
					<option value="9">۹</option>
					<option value="10">۱۰</option>
					<option value="11">۱۱</option>
					<option value="12">۱۲</option>
					<option value="13">۱۳</option>
					<option value="14">۱۴</option>
					<option value="15">۱۵</option>
</select></br></br>
<button class="btn btn-primary btn-block btn-large" onclick='var a=document.getElementById("klop").value;var b=document.getElementById("yhn").value;loadDoc("insertbox.php?z="+a+"&x="+b,sqlbox1)'>اضافه کردن</button></p>
</div>
</body>
</html>