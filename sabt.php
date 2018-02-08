<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$a=$_GET['a'];//vurudi
	$b=$_GET['b'];//timeclass1
	$c=$_GET['c'];//timeclass2
	$d=$_GET['d'];//timeclass3
	$e=$_GET['e'];//timeclass4
	$f=$_GET['f'];//timeclass5
	$g=$_GET['g'];//timeclass6
	$h=$_GET['h'];//timeclass7
	if ($a!=="no") {
	$file=fopen("vurudi.txt", "w") or die("unable to find the file");
	fwrite($file,$a);
	}
	$file1=fopen("timing.txt", "w") or die("unable to find the file");
	fwrite($file1, $b."#".$c."#".$d."#".$e."#".$f."#".$g."#".$h);
	?>
</body>
</html>