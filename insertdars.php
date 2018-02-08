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
$type=$_GET["d"];
$dars=$_GET["b"];
$vahed=$_GET["c"];
$no=$_GET["a"];
$_SESSION["lplp"]="salam";
$_SESSION["bgy"]=$dars;
if(!empty($dars)){
$insert1="INSERT INTO dars_".$type."(name,no,course) VALUES('$dars','$no','$vahed')"; 
$conn->query($insert1);
if (!empty($dars)) {
	echo "<p>".$dars." اضافه شد.</p>";
}
}
header('location: welcome.php');
$conn->close();

?>

</body>
</html>







