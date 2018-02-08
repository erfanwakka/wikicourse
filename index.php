<?php
include("config-login.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      $sql = "SELECT id,login_name FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $ID = $row['ID'];
      $count = mysqli_num_rows($result);
      if($count == 1) {
        $_SESSION['login_user']=$myusername;
        $_SESSION['login_name'] = $row['login_name'];
        header("location: welcome.php");
      }else {
         $error = "نام کاربری و یا رمز عبور اشتباه است";
      }
   }
   $conn->close();
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
  <meta charset="utf-8">
  <meta name="author" content="erfan andesta"/>
      <meta name="description" content="برنامه ریزی واحد های درسی "/>
      <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
      <title>سامانه برنامه ریزی واحد های درسی</title>
</head>

<body>
  <div class="login">
    <h2>به سامانه ویکی کورس خوش آمدید</h2>
    <form method="post">
      <input type="text" name="username" placeholder="نام کاربری" required="required" />
      <input type="password" name="password" placeholder="رمز عبور" required="required" />
      <button type="submit" class="btn btn-primary btn-block btn-large">ورود</button><p class="loginerror"><?php echo $error ?></p>
    </form>
  </div>
  <p class="developer">توسعه دهنده : <a href="mailto: andesta.erfan@gmail.com">عرفان اندستا</a></p>
</body>
</html>
