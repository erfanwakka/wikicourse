<?php
include('session.php');
include('showon.php');
session_start();
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">

	<head>
		<meta name="author" content="erfan andesta"/>
		<meta name="description" content="برنامه ریزی واحد های درسی "/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
		<title>سامانه برنامه ریزی واحد های درسی</title>
		<script type="text/javascript" src="ajax.js"></script>
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

		 <p class="welcomemessage">کاربر <?php echo " ".$_SESSION['login_name']." "; ?> خوش آمدید. </p><a href="logout.php">خروج</a>
		<form action="savenote.php" method="post">
			<article class="notepad">
				<h3 style="text-align: center;color: black;font-family: 'BMitra';">یادداشت ها</h3>
				<textarea  placeholder="یادداشت امروز ..." rows="25" cols="60" name="a" id="textnote" dir="rtl"><?php $file=fopen("notes.txt", "r");$text=fread($file, filesize("notes.txt"));$breaks = array("<br />","<br>","<br/>"); $text = str_ireplace($breaks, "\r\n", $text); echo $text;?></textarea>
			</article>
			<input type="submit" name="" class="btn btn-primary btn-block btn-large" style="width: 20%;margin:30px auto;font-family: 'BMitra';" value="ذخیره">
		</form>
		<p id="fg"></p>
		
	</body>
</html>


