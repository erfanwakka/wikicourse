<?php
include('session.php');
include('showon.php');
session_start();
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
		<p class="welcomemessage">کاربر <?php echo " ".$_SESSION['login_name']." "; ?> خوش آمدید. </p><a href="logout.php">خروج</a>
	</body>
</html>