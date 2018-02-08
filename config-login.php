<?php 
$servername="localhost";
$username="wikicou1_root";
$password="erfan9200883";
$dbname="wikicou1_scheduling";
$conn=new mysqli($servername,$username,$password,$dbname);
mysqli_set_charset($conn, "utf8");
if($conn->connect_error){
	die("connection failed :".$conn->connect_error);
}
?>