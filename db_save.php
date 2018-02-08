<?php
include('config-login.php');
$sql1 = "DELETE FROM base";
$result1 = $conn->query($sql1);
$sql3 = "DELETE FROM base1";
$result3 = $conn->query($sql3);
$sql4= "CALL creater();";
$result4 = $conn->query($sql4);
$arr = @$_REQUEST['p'];
if (is_array($arr)) {
	foreach ($arr as $p) {
		$a=1;
		list($sub_id, $row,$col,$name) = explode('_', $p);
		if ($row==1 or $row==6 or $row==11 or $row==16 or $row==21 or $row==26) {
			$col=$col-$a;
		}
		$sql = "INSERT INTO base (tbl_row, tbl_col,name) VALUES ($row, $col,'$name')";
		$result = $conn->query($sql);
		$sql2="UPDATE base1 SET `$col`='$name' WHERE id=$row";
		$result2 = $conn->query($sql2);
	}
}
$conn->close();
header('location: table.php');
?>