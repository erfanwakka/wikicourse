<?php
include("config-login.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
$sql1 = "DELETE FROM exam_day";
$result1 = $conn->query($sql1);
$sql4= "CALL creater2();";
$result4 = $conn->query($sql4);
$file=fopen("ruz.txt", "w");
$a=$_GET['a'];
$b=$_GET['b'];
$count=0;
$a=explode('/',$a);
$b=explode('/',$b);
$date=$a[0]."/".$a[1]."/".$a[2];
fwrite($file, $b[0]."/".$b[1]."/".$b[2]."#".$a[0]."/".$a[1]."/".$a[2]);
$year=$b[0]-$a[0];
$month=$b[1]-$a[1];
$day=$b[2]-$a[2];
$day++;
while ($month>0) {
  if ($b[1]<=6) {
    $day+=31;
    $month--;
  }elseif ($b[1]==12) {
    $day+=29;
    $month--;
  }else{
  $day+=30;
  $month--;
  }
}
for ($i=1; $i <=$day ; $i++) { 
  $insert1="UPDATE exam_day set name='$date' where id='$i'";
  $conn->query($insert1);
  if ($a[1]<=6 && $a[2]==31) {
    $a[2]=1;
    $a[1]++;
  }elseif ($a[1]>6 && $a[2]==30) {
    $a[2]=1;
    $a[1]++;
  }else{
    $a[2]++;
  }
  $date=$a[0]."/".$a[1]."/".$a[2];
}
?>
</body>
</html>