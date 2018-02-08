<?php
include('config-login.php');
$sql1 = "DELETE FROM base2";
$result1 = $conn->query($sql1);
$sql3 = "DELETE FROM base21";
$result3 = $conn->query($sql3);
$sql4= "CALL creater1();";
$result4 = $conn->query($sql4);
$arr = @$_REQUEST['p'];
if (is_array($arr)) {
	foreach ($arr as $p) {
		$a=1;
		list($sub_id, $row,$col,$name) = explode('_', $p);
		$sql = "INSERT INTO base2 (tbl_row, tbl_col,name) VALUES ($row, $col,'$name')";
		$result = $conn->query($sql);
		$sql2="UPDATE base21 SET `$col`='$name' WHERE id=$row";
		$result2 = $conn->query($sql2);
	}

}
$conn->close();
header('location: exam.php');
?>