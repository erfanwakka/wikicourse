<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
include('config-login.php');
session_start();
$rs = null;
if ($conn->connect_errno) {
	print "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
$ostad=$_GET["a"];
if(!empty($ostad)){
$insert="INSERT INTO asatid(name) VALUES('$ostad')";
$conn->query($insert);
}
if (!empty($ostad)) {
	echo "".$ostad." اضافه شد.";
}
$conn->close();

?>



</body>
</html>





