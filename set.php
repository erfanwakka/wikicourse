<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="ajax.js"></script>
</head>
<body>
</br>
  <select class="btn btn-primary btn-block btn-large" id="filtera" onchange='loadDoc("filterjadval.php?a="+this.value+"&b="+document.getElementById("hjhj").value,filterjadval)'>
<?php
session_start();
include('config-login.php');
$file=fopen("vurudi.txt","r") or die("unable to find the file");
$temp=fread($file,filesize("vurudi.txt"));
$x=$_GET['x'];
if($x=="dars"){
	$x="dars_group";
}elseif ($x=="asatid") {
	$x="asatid";
}elseif ($x=="vurudi") {
  echo "<option value=\"none\">بدون فیلتر</option>";
  for ($i=0; $i <4 ; $i++) { 
    echo "<option>".$temp."</option>";
    $temp=$temp+1;
  }
  echo "<option value=\"9999999999\">سرویس</option>";
}elseif ($x=="drr") {
  header('location: table.php');
}
$sql="SELECT * FROM ".$x."";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  echo "<option value=\"none\">بدون فیلتر</option>";
  while ($row=$result->fetch_assoc()) {
    echo "<option>".$row["name"]."</option>";
  }
}
$conn->close();
?>
</select>
</form>
</body>
</html>

