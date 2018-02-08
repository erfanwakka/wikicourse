<?php
include('config-login.php');
require_once "Classes/PHPExcel.php";
session_start();
$type=$_POST['importselect'];
$_SESSION['importfile']=basename($_FILES["fileToUpload"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if($imageFileType != "xlsx") {
}else{
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
        $tmpfname = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
        $excelObj = $excelReader->load($tmpfname);
        $worksheet = $excelObj->getSheet(0);
        $lastRow = $worksheet->getHighestRow();
        for ($row = 1; $row <= $lastRow; $row++) {
             $a=$worksheet->getCell('A'.$row)->getValue();
             $b=$worksheet->getCell('B'.$row)->getValue();
             $c=$worksheet->getCell('C'.$row)->getValue();
             $insert1="INSERT INTO dars_".$type." (name,no,course) VALUES('$a','$b','$c')";
             if ($a!="" && $b!="" && $c!="") {
                $conn->query($insert1);
              } 
        }
    }
    $conn->close();
    header('location: welcome.php');
?>