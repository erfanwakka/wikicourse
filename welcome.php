<?php
	session_start();
	include('config-login.php');
	include('session.php');
	include('showon.php');
?>

<!DOCTYPE html>
<html dir="rtl" lang="fa">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<meta name="author" content="erfan andesta"/>
		<meta name="description" content="برنامه ریزی واحد های درسی "/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="ajax.js"></script>
		<script type="text/javascript" src="jquery.farsiInput.js"></script>
		<link rel="stylesheet" type="text/css" href="css/tabs.css" />
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
		

			<p class="welcomemessage">کاربر <?php echo " ".($_SESSION['login_name'])." "; ?> خوش آمدید. </p><a href="logout.php">خروج</a>


			<section>
				<div class="tabs tabs-style-fillup">
					<nav>
						<ul>
							<li>
								<a href="#section-fillup-1" class="pe-7s-notebook"><span>دروس</span></a>
							</li>
							<li>
								<a href="#section-fillup-2" class="pe-7s-add-user"><span>اساتید</span></a>
							</li>
							<li>
								<a href="#section-fillup-3" class="pe-7s-folder"><span>لیست دروس</span></a>
							</li>
						</ul>
					</nav>
					<div class="content-wrap">
						<section id="section-fillup-1">
							<div class="box">
								<h2 class="headerbox">تنظیمات درس</h2>
								<div class="darsadd">
									<h3>اضافه کردن</h3>
									<form>
										<p>شماره درس : <input type="text"  name="darsnumber" value="" placeholder="۱۷۲۳۴" id="text1"></p>
										<p>عنوان درس&nbsp;: <input type="text"  name="darsname" value="" placeholder="ریاضی" id="text2"></p>
										<p>تعداد &nbsp;واحد : <input type="text"  name="darsvahed" value="" placeholder="۳" id="text3"></p>
										<p>نوع&nbsp;&nbsp;درس&nbsp; &nbsp;: 
										<select class="btn btn-primary btn-block btn-large" id="selectdars" name="group" style="display: inline;width: 	69%;">
											<option value="azmayeshgah">آزمایشگاه</option>
											<option value="omumi">عمومی</option>
											<option value="paye">پایه</option>
											<option value="asli">اصلی</option>
											<option value="takhasosi">تخصصی</option>
											<option value="ekhtiari">اختیاری</option>
										</select></br></br>
										</p>
										<button class="btn btn-primary btn-block btn-large" type="reset" onclick='loadDoc("insertdars.php?a="+document.getElementById("text1").value+"&b="+document.getElementById("text2").value+"&c="+document.getElementById("text3").value+"&d="+document.getElementById("selectdars").value,insertdars);'>اضافه شود
										</button>
									</form>
									<div id="tghy">
									</div>‍
								</div> 
								<div class="darsdelete">
									<h3>ویرایش</h3>
									<div id="tgy">
											<select class="btn btn-primary btn-block btn-large" id="zxcv" name="ggg" onchange='loadDoc("w.php?c="+document.getElementById("zxcv").value,updatedars)' style="width: 300px;margin: 0px auto;">
												<option>نوع درس</option>
												<option value="azmayeshgah">آزمایشگاه</option>
												<option value="omumi">عمومی</option>
												<option value="paye">پایه</option>
												<option value="asli">اصلی</option>
												<option value="takhasosi">تخصصی</option>
												<option value="ekhtiari">اختیاری</option>
											</select>
									<div id="darsdeleteselect">
									</div>
									</div>
								</div>
								<div class="import">
									<h3>آپلود درس</h3>
									<form action="import.php" method="post" enctype="multipart/form-data">
										<p style="font-size: 15px;"><a href="uploads/example.xlsx">نمونه فایل</a></p>
										<p>اضافه شود به :
    									<select class="btn btn-primary btn-block btn-large" style="width: 100px;display: inline;" name="importselect">
    										<option value="azmayeshgah">آزمایشگاه</option>
											<option value="omumi">عمومی</option>
											<option value="paye">پایه</option>
											<option value="asli">اصلی</option>
											<option value="takhasosi">تخصصی</option>
											<option value="ekhtiari">اختیاری</option>
    									</select></p>
										<label for="fileToUpload" class="btn btn-primary btn-block btn-large" style="width: 100px;margin: 0px auto;">انتخاب فایل</label>
    									<input  type="file" name="fileToUpload" id="fileToUpload" style="visibility: hidden;width: 50px;margin-bottom: -150px;">
    									<button type="submit" class="btn btn-primary btn-block btn-large"  style="width: 100px;margin: -20px auto;">آپلود</button></br>
    									<p><?php if(isset($_SESSION['importfile'])){ echo "فایل ".$_SESSION['importfile']." آپلود شد.";unset($_SESSION['importfile']);} ?></p>
									</form>
								</div>
							</div>
						</section>
						<section id="section-fillup-2">
							<div class="box">	 	
								<h2 class="headerbox">تنظیمات مدرس</h2>
								<div class="ostadadd">
									<h3>اضافه کردن</h3>
									<form>
										<p>نام مدرس : <input type="text" name="input-teacher" value="" placeholder="رضا علوی" id="text4"></p>
										<button class="btn btn-primary btn-block btn-large" type="reset" onclick='loadDoc("insertostad.php?a="+document.getElementById("text4").value,insertostad);'>اضافه کردن
										</button>
									</form>
									<p id="uuux"></p>
								</div>
								<div class="ostaddelete" id="err">
									<h3>ویرایش</h3>
									<select id="fghj" size="30" style="width: 280px;height:250px;font-size: 20px;text-align: center;background-color: white;float: left;" name="zxc" onclick="document.getElementById('noostad').value=this.options[this.selectedIndex].text;">
										<div id="hhh">
									<?php
										include('config-login.php');
										$sql="SELECT name FROM asatid";
										$result=$conn->query($sql);
										if ($result->num_rows > 0) {
									  		while ($row=$result->fetch_assoc()) {
									    		echo "<option>".$row["name"]."</option>";
									  		}
										}
										$conn->close();
									?>
								</div>
									</select>
									<div style="float: right;">
									<p>نام استاد : <input id="noostad" type="" style="width: 120px;"></p>
									<button class="btn btn-primary btn-block btn-large" onclick='loadDoc("asatid.php?c="+document.getElementById("fghj").value,deleteasatid)' style="width: 100px;display: inline;">حذف شود</button>
									<button class="btn btn-primary btn-block btn-large" onclick='loadDoc("asatidupdate.php?a="+document.getElementById("noostad").value+"&b="+document.getElementById("fghj").value,deleteasatid)' style="width: 100px;display: inline;">ویرایش شود</button>
								</div>
							</div>
						</section>
						<section id="section-fillup-3">			
							<div class="box">
								<h2 class="headerbox">انتخاب دروس</h2>
								<div id="leftbox" class="leftboxshow">
									<h3>دروس</h3>
									<select class="btn btn-primary btn-block" id="zxcv" name="ggg" onchange='loadDoc("selectshow.php?q="+this.value,sqlbox)'>
										<option>نوع درس</option>
										<option value="azmayeshgah">آزمایشگاه</option>
										<option value="omumi">عمومی</option>
										<option value="paye">پایه</option>
										<option value="asli">اصلی</option>
										<option value="takhasosi">تخصصی</option>
										<option value="ekhtiari">اختیاری</option>
									</select>
									<div id="sqlbox">
									</div>
								</div>
								<div id="rightbox" class="rightboxshow">
									<h3>دروس انتخابی</h3>
									<div id="sqlbox1">
										<p style="font-size: 15px;">نام درس | &nbsp;&nbsp;&nbsp;شماره درس | &nbsp;&nbsp;&nbsp; تعداد واحد</p>
  										<select id="frt" size="10" style="width: 280px;height:250px;font-size: 20px;text-align: center;background-color: white;" name="zxc">
										<?php
											include('config-login.php');
											$sql="SELECT * FROM dars_group";
											$result=$conn->query($sql);
											if ($result->num_rows > 0) {
 											 while ($row=$result->fetch_assoc()) {
											    echo "<option>".$row["name"]."|".$row["no"]."|".$row["course"]."</option>";
											  }
											}
											$conn->close();
										?>
										</select>
										<p>
										<button class="btn btn-primary btn-block btn-large" onclick='loadDoc("del.php?f="+document.getElementById("frt").value,sqlbox1)'>حذف</button>
										</p>
									</div>
								</div>
							</div>
						</section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
			<script src="js/cbpFWTabs.js"></script>
			<script>
			(function() {
				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});
			})();
			</script>
	</body>
</html>