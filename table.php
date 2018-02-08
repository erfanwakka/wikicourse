<?php
	include('session.php');
	include('showon.php');
	session_start();
	$a="none";
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="jquery.js"></script>
		<meta name="author" content="erfan andesta"/>
		<meta name="description" content="برنامه ریزی واحد های درسی "/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="redips-drag-source.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="ajax.js"></script>
		<script type="text/javascript" src="jquery.farsiInput.js"></script>
		<title>سامانه برنامه ریزی واحد های درسی</title>
		<script type="text/javascript">
			$("#filter").load("table.php"+"#table2");
		</script>
	</head>

	<body>
		<nav>
  			<ul>
    			<li>
      				<a href="welcome.php" >ثبت دروس و اساتید</a>
    			</li>
    			<li>
      				<a href="table.php">تنظیم برنامه هفتگی</a>
    			</li>
    			<li>
      				<a href="report.php">گزارشگیری</a>
    			</li>
    			<li>
      				<a href="note.php">یادداشت ها</a>
    			</li>
    			<li>
      				<a href="exam.php">برنامه امتحانات</a>
    			</li>
  			</ul>
		</nav>

		<?php 
		$file=fopen("vurudi.txt","r") or die("unable to find the file");
		$temp=fread($file,filesize("vurudi.txt"));
		fclose($file);
		$file1=fopen("timing.txt","r") or die("unable to find the file");
		$time1=fread($file1,filesize("timing.txt"));
		$time2=explode("#",$time1);
		fclose($file1);
		?>
		<div id="redips-drag">
		<p class="welcomemessage">کاربر <?php echo " ".$_SESSION['login_name']." "; ?> خوش آمدید. </p><a href="logout.php">خروج</a>
		<i class="fa fa-gear" id="setting"></i>
		<button class="btn btn-primary btn-block btn-large save" onclick="redips.save()"/>ذخیره</button>
		<table class="trash trash-primary trash-block trash-large">
			<tr style="height: 40px;"><td class="redips-trash" style="border: 0px;text-align: center;width: 100px;" title="Trash">حذف</td></tr>
		</table>
			<div id="myModal" class="modal">
  				<div class="modal-content">
  					<div class="modal-header">
    					<span class="close">&times;</span>
    					<h3>تنظیمات</h3>
    				</div>
					<div id="set" class="modal-body">
						<div class="vurudisetting">
						<h3>سال ورودی اولیه</h3></br></br>
							<select id="inputvurudi" class="btn btn-primary btn-block btn-large"><option value="no">ورودی</option>
								<option value="1393">۱۳۹۳</option><option value="1394">۱۳۹۴</option><option value="1395">۱۳۹۵</option><option value="1396">۱۳۹۶</		option><option value="1397">۱۳۹۷</option><option value="1398">۱۳۹۸</option><option value="1399">۱۳۹۹	</option><	option value="1400">۱۴۰۰</option><option value="1401">۱۴۰۱</option><option value="1402">۱۴۰۲</option><option value="1403">	۱۴۰۳</option><option value="1404">۱۴۰۴</option><option value="1405">۱۴۰۵</option><option value="1406">۱۴۰۶</option><option value="1407">۱۴۰۷</option><option value="1408">۱۴۰۸</option><option value="1409">۱۴۰۹</	option><option value="1410">۱۴۱۰</	option><option value="1411">۱۴۱۱</option><option value="1412">۱۴۱۲</option><option value="1413">۱۴۱۳</option><option value="1414">۱۴۱۴</option><option value="1415">۱۴۱۵</option><option value="1416">۱۴۱۶</option><option value="1417">۱۴۱۷</option><option value="1418">۱۴۱۸</option><option value="1419">۱۴۱۹</option><option value="1420">۱۴۲۰</option>
							</select>
					</div>
					<div class="timeclasssetting">
						<h3>ساعت کلاس ها</h3>
							<input type="text" id="timeclass1" placeholder="8-9/30">
							<input type="text" id="timeclass2" placeholder="9/30-11">
							<input type="text" id="timeclass3" placeholder="11-12/30">
							<input type="text" id="timeclass4" placeholder="12/30-2">
							<input type="text" id="timeclass5" placeholder="2-4">
							<input type="text" id="timeclass6" placeholder="4-6">
							<input type="text" id="timeclass7" placeholder="6-8">
					</div>
					<div id="fil" class="filtering">
						<h3>فیلترگذاری</h3>
							<select class="btn btn-primary btn-block btn-large" id="hjhj" onchange='yu(this.value)'
								><option value="drr">بدون فیلتر</option><option value="vurudi">ورودی</option><option value="dars">درس</option><option value="asatid">اساتید</option>
							</select>
						<div id="xcxc" style="display: inline;">
						</div>
					</div>
						<button class="btn btn-primary btn-block btn-large" id="settingbutton" onclick='loadDoc("sabt.php?a="+document.getElementById("inputvurudi").value+"&b="+document.getElementById("timeclass1").value+"&c="+document.getElementById("timeclass2").value+"&d="+document.getElementById("timeclass3").value+"&e="+document.getElementById("timeclass4").value+"&f="+document.getElementById("timeclass5").value+"&g="+document.getElementById("timeclass6").value+"&h="+document.getElementById("timeclass7").value,sabt)'>ثبت</button>
						<p id="sabt"></p>
					</div>
  				</div>

			</div>
			<script>modal()</script>






			<h3 id="durus" class="lesson">دروس انتخابی</br><i id="durus" class="downarrow"></i> </h3>
		<div id="showdurus">
			<table class="showdars">
				<?php
				showasli();
				?>
			</table>
		</div>
		<h3 id="asatidy" class="lesson">اساتید</br><i id="asatidy" class="downarrow"></i> </h3>
		<div id="showasatid">
			<table class="showdars">
				<?php
				showasatid();
				?>
			</table>
		</div>
		
		
		<div id="filter">
		<table id="table2">
			<tr id="row1">
				<td class="redips-mark" id="ruz" style="width: 10px;background-color: #568e8f;"></td>
				<td class="redips-mark" style="width: 0px;background-color: #568e8f;">ورودی</td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[0]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[1]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[2]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[3]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[4]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[5]; ?></td>
				<td colspan="2" class="redips-mark" style="background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $time2[6]; ?></td>
			</tr>
			<tr>
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f;width: 10px;">شنبه</td>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php
					read(1,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php
					read(2,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					read(3,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					read(4,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					read(5,$a);
				?>
			</tr>
			<tr>
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f;width: 10px;">یک شنبه</td>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php
					read(6,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php
					read(7,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					read(8,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					read(9,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					read(10,$a);
				?>
			</tr>
			<tr>
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f;width: 10px;">دو شنبه</td>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php
					read(11,$a);
				?>
			</tr>
			<tr>
				<td id="vurudi" class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php

					read(12,$a);

				?>
			</tr>

			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php

					read(13,$a);

				?>
			</tr>

			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php

					read(14,$a);

				?>
			</tr>

			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php

					read(15,$a);

				?>
			</tr>
			<tr>
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f;width: 10px;">سه شنبه</td>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php

					read(16,$a);

				?>
			</tr>

			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php

					read(17,$a);

				?>
			</tr>

			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					read(18,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					read(19,$a);
				?>
			</tr>

			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					read(20,$a);
				?>
			</tr>
			<tr>
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f;width: 10px;">جهار شنبه</td>
				<td  class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php
					read(21,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php
					read(22,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					read(23,$a);
				?>
			</tr>

			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					read(24,$a);
				?>
			</tr>

			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					read(25,$a);
				?>
			</tr>
			<tr>
				<td rowspan="5" id="ruz" class="redips-mark" style="background-color: #568e8f;width: 10px;">پنج شنبه</td>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp;  ?></td>
				<?php
					read(26,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+1;  ?></td>
				<?php
					read(27,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+2;  ?></td>
				<?php
					read(28,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;"><?php echo $temp+3;  ?></td>
				<?php
					read(29,$a);
				?>
			</tr>
			<tr>
				<td class="redips-mark" style="width: 15px;background-color: #568e8f;border-left: 3px dotted #1abc9c;">سرویس</td>
				<?php
					read(30,$a);
				?>
			</tr>
		</table>
	</div>

	</div>
	<script type="text/javascript" src="content.js"></script>

		</div>
	</body>
</html>