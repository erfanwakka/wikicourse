<?php
include('showon.php');
include('session.php');
session_start();
$a=$_GET['a'];
$b=$_GET['b'];
if ($a!=="none") {
if ($b=="vurudi") {
	$a=(integer)$a;
}
}
?>


<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<meta name="author" content="erfan andesta"/>
		<meta name="description" content="برنامه ریزی واحد های درسی "/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="redips-drag-source.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="ajax.js"></script>
		<script type="text/javascript" src="jquery.farsiInput.js"></script>
</head>
<body>
	<?php

	$file=fopen("vurudi.txt","r") or die("unable to find the file");
		$temp=(integer)fread($file,filesize("vurudi.txt"));
		$tempb=$temp+1;
		$tempc=$temp+2;
		$tempd=$temp+3;

		fclose($file);
		$file1=fopen("timing.txt","r") or die("unable to find the file");
		$time1=fread($file1,filesize("timing.txt"));
		$time2=explode("#",$time1);
		fclose($file1);

	?>
	<table id="table2">
			<tr id="row1">
				<td class="redips-mark" id="ruz" style="width: 10px;background-color: #568e8f;"></td>
				<td id="vurudi" class="redips-mark" style="width: 0px;background-color: #568e8f;">ورودی</td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[0]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[1]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[2]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[3]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[4]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[5]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[6]; ?></td>
			</tr>
			<tr id="s">
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f; border: 3px solid #1abc9c;width: 10px;">شنبه</td>
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php
				if ($b=="vurudi" && $a!==$temp && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(1,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempb && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(2,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempc && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(3,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempd && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(4,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					if ($b=="vurudi" && $a!==9999999999 && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(5,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f; border: 3px solid #1abc9c;width: 10px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">یک شنبه</td>
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$temp && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(6,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempb && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(7,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempc && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(8,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempd && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(9,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					if ($b=="vurudi" && $a!==9999999999 && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(10,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f; border: 3px solid #1abc9c;width: 10px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">دو شنبه</td>
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$temp && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(11,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempb && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(12,$a);
				}
				?>
			</tr>

			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempc && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(13,$a);
				}
				?>
			</tr>

			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempd && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(14,$a);
				}
				?>
			</tr>

			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					if ($b=="vurudi" && $a!==9999999999 && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(15,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f; border: 3px solid #1abc9c;width: 10px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سه شنبه</td>
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php

					if ($b=="vurudi" && $a!==$temp && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(16,$a);
				}

				?>
			</tr>

			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempb && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(17,$a);
				}
				?>
			</tr>

			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempc && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(18,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempd && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(19,$a);
				}
				?>
			</tr>

			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					if ($b=="vurudi" && $a!==9999999999 && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(20,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f; border: 3px solid #1abc9c;width: 10px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">جهار شنبه</td>
				<td id="vurudi"  class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$temp && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(21,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempb && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(22,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempc && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(23,$a);
				}
				?>
			</tr>

			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempd && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(24,$a);
				}
				?>
			</tr>

			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					if ($b=="vurudi" && $a!==9999999999 && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(25,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f; border: 3px solid #1abc9c;width: 10px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">پنج شنبه</td>
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$temp && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(26,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempb && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(27,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempc && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(28,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					if ($b=="vurudi" && $a!==$tempd && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(29,$a);
				}
				?>
			</tr>
			<tr id="s">
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					if ($b=="vurudi" && $a!==9999999999 && $a!=="none") {
					for ($i=0; $i <14 ; $i++) { 
						echo "<td style=\"border-left: 3px solid #1abc9c;background-color:#568e8f;\"></td>";
					}
				}else{
					read(30,$a);
				}
				?>
			</tr>
		</table>
</body>
</html>







