<?php
$c=$_POST['a'];
$txt = "kings\ngarden";
$d="<pre>".$c."</pre>";
$file=fopen("notes.txt", "w");
fwrite($file,$c);
fclose($file);
header('location: note.php');
?>