<?php
	include('session.php');
	include('showon.php');
	session_start();
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="redips-drag-min.js"></script>
		<meta name="author" content="erfan andesta"/>
		<meta name="description" content="برنامه ریزی واحد های درسی "/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="redips-drag-source.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="ajax.js"></script>
		<script type="text/javascript" src="jquery.farsiInput.js"></script>
		<link href="css/persian-datepicker-0.4.5.css" rel="stylesheet" type="text/css"/>
    	<script type="text/javascript" src="persian-date.js"></script>
    	<script type="text/javascript" src="js/persian-datepicker-0.4.5.min.js"></script>
		<title>سامانه برنامه ریزی واحد های درسی</title>
		<script type="text/javascript">
			$("#filter").load("table.php"+"#table2");
		</script>
		<script type="text/javascript">
    	$(document).ready(function () {
        	$("#observer").persianDatepicker({
            	altField: '#observerAlt',
            	altFormat: "YYYY MM DD",
            	observer: true,
            	format: 'YYYY/MM/DD'
        	});
        	$("#observer1").persianDatepicker({
            	altField: '#observerAlt1',
            	altFormat: "YYYY MM DD",
            	observer: true,
            	format: 'YYYY/MM/DD'
        	}); 
    	});
		</script>
		<title>سامانه برنامه ریزی واحد های درسی</title>
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
		$file3=fopen("vurudi.txt","r") or die("unable to find the file");
		$vurudi=fread($file3,filesize("vurudi.txt"));
		$vurudi1=$vurudi+1;
		$vurudi2=$vurudi+2;
		$vurudi3=$vurudi+3;
		fclose($file3);
		?>

		<div id="redips-drag">
			<p class="welcomemessage">کاربر <?php echo " ".$_SESSION['login_name']." "; ?> خوش آمدید. </p><a href="logout.php">خروج</a>
			<i class="fa fa-gear" id="setting1"></i>
			<button class="btn btn-primary btn-block btn-large save" onclick="redips.save1()"/>ذخیره</button>
			<table class="trash trash-primary trash-block trash-large">
				<tr style="height: 40px;"><td class="redips-trash" style="border: 0px;text-align: center;width: 100px;" title="Trash">حذف</td></tr>
			</table>
			<div id="myModal1" class="modal">
  				<div class="modal-content">
  					<div class="modal-header">
    					<span class="close">&times;</span>
    					<h3>تنظیمات</h3>
    				</div>
					<div class="modal-body taghvim">
						<h3>تاریخ امتحانات</h3>
						<div class="form-group col-xs-6">
                			<p>از تاریخ : <input id="observer" type="text" class="form-control"/> </p>
                			<p>تا تاریخ : <input  id="observer1" type="text" class="form-control"/></p>
                			<button class="btn btn-primary btn-block btn-large" style="width: 280px;margin: 10px auto;" onclick='loadDoc("examday.php?a="+document.getElementById("observer").value+"&b="+document.getElementById("observer1").value,examday)'>ثبت
                			</button>
                			<p id="njo"></p>
            			</div>
					</div>
				</div>
  			</div>
			<script>modal1()</script>


			<h3 id="durus" class="lesson">دروس انتخابی</br><i id="durus" class="downarrow"></i> </h3>
			<div id="showdurus">
				<table class="showdars">
					<?php
						showasli();
					?>
				</table>
			</div>
            

		<table id="table3">
			<tr id="row1">
				<td class="redips-mark" style="height: 20px;width: 1px; background-color: #568e8f;">تاریخ / ورودی</td>
				<td  class="redips-mark" style="height: 20px; background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $vurudi; ?></td>
				<td  class="redips-mark" style="height: 20px; background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $vurudi1; ?></td>
				<td  class="redips-mark" style="height: 20px; background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $vurudi2; ?></td>
				<td  class="redips-mark" style="height: 20px; background-color: #568e8f;border-bottom: 3px dotted #1abc9c;"><?php echo $vurudi3; ?></td>
			</tr>
			<tr>
				<?php
					exam_day(1);
					read1(1);
				?>
			</tr>
			<tr>
				<?php
					exam_day(2);
					read1(2);
				?>
			</tr>
			<tr>
				<?php
					exam_day(3);
					read1(3);
				?>
			</tr>
			<tr>
				<?php
					exam_day(4);
					read1(4);
				?>
			</tr>
			<tr>
				<?php
					exam_day(5);
					read1(5);
				?>
			</tr>

			<tr>
				<?php
					exam_day(6);
					read1(6);
				?>
			</tr>

			<tr>
				<?php
					exam_day(7);
					read1(7);
				?>
			</tr>

			<tr>
				<?php
					exam_day(8);
					read1(8);
				?>
			</tr>

			<tr>
				<?php
					exam_day(9);
					read1(9);
				?>
			</tr>

			<tr>
				<?php
					exam_day(10);
					read1(10);
				?>
			</tr>
			<tr>
				<?php
					exam_day(11);
					read1(11);
				?>
			</tr>

			<tr>
				<?php
					exam_day(12);
					read1(12);
				?>
			</tr>

			<tr>
				<?php
					exam_day(13);
					read1(13);
				?>
			</tr>

			<tr>
				<?php
					exam_day(14);
					read1(14);
				?>
			</tr>

			<tr>
				<?php
					exam_day(15);
					read1(15);
				?>
			</tr>
			<tr>
				<?php
					exam_day(16);
					read1(16);
				?>
			</tr>

			<tr>
				<?php
					exam_day(17);
					read1(17);
				?>
			</tr>

			<tr>
				<?php
					exam_day(18);
					read1(18);
				?>
			</tr>

			<tr>
				<?php
					exam_day(19);
					read1(19);
				?>
			</tr>

			<tr>
				<?php
					exam_day(20);
					read1(20);
				?>
			</tr>
			<tr>
				<?php
					exam_day(21);
					read1(21);
				?>
			</tr>
			<tr>
				<?php
					exam_day(22);
					read1(22);
				?>
			</tr>
			<tr>
				<?php
					exam_day(23);
					read1(23);
				?>
			</tr>
			<tr>
				<?php
					exam_day(24);
					read1(24);
				?>
			</tr>
			<tr>
				<?php
					exam_day(25);
					read1(25);
				?>
			</tr>
			<tr>
				<?php
					exam_day(26);
					read1(26);
				?>
			</tr>
			<tr>
				<?php
					exam_day(27);
					read1(27);
				?>
			</tr>
			<tr>
				<?php
					exam_day(28);
					read1(28);
				?>
			</tr>
			<tr>
				<?php
					exam_day(29);
					read1(29);
				?>
			</tr>
			<tr>
				<?php
					exam_day(30);
					read1(30);
				?>
			</tr>

		</table>
		</div>

		<script type="text/javascript" src="content.js"></script>
		</div>
				

	</body>
</html>