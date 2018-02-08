<?php
include("config-login.php");
session_start();
$a=$_GET['a'];
function showasli(){
include("config-login.php");
$sql = "SELECT id,name FROM dars_group";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<tr id=\"s\">";
    while($row = $result->fetch_assoc()) {
        echo "<td><div class=\"redips-drag redips-clone\">".$row["name"]."</div</td>";
    }
    echo "</tr></table>";
} else {
    echo "";
}
$conn->close();
}
function showasatid(){
include("config-login.php");
$sql = "SELECT id,name FROM asatid";
$result = $conn->query($sql);
$_SESSION['ass']=$row['name'];
if ($result->num_rows > 0) {
    echo "<tr id=\"s\">";
    while($row = $result->fetch_assoc()) {
        echo "<td><div class=\"redips-drag redips-clone\">".$row["name"]."</div</td>";
    }
    echo "</tr></table>";
} else {
    echo "";
}
$conn->close();
}
function read($row,$filter) {
include("config-login.php");
if (is_integer($filter)) {
    $filter="none";
}
$sql = "SELECT * FROM base1 WHERE   id=".$row."";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    for ($i=1; $i <15 ; $i++) { 
    if($filter!=="none"){
    if(empty($row[$i])){
        if ($i % 2 ==0) {
        echo "<td style=\"background-color:#70a7a9;\"></td>";}
        else{
            echo "<td style=\"\"></td>";
        }

    }
else{
    if ($i % 2==0) {
        if($row[$i]==$filter){
            echo "<td style=\"background-color:#70a7a9;\"><div class=\"redips-drag\">".$row[$i]."</div></td>";
        }else{
            echo "<td style=\"background-color:#70a7a9;\"><div></div></td>";
        }
    }
    else{
        if($row[$i]==$filter){
            echo "<td style=\"\"><div class=\"redips-drag\">".$row[$i]."</div></td>";
        }else{
            echo "<td style=\"\"><div></div></td>";
        }
        
    }
}

}else{


if(empty($row[$i])){
        if ($i % 2 ==0) {
        echo "<td style=\"background-color:#70a7a9;\"></td>";}
        else{
            echo "<td style=\"\"></td>";
        }

    }
else{
    if ($i % 2==0) {
            echo "<td style=\"background-color:#70a7a9;\"><div class=\"redips-drag\">".$row[$i]."</div></td>";
    }
    else{
            echo "<td style=\"\"><div class=\"redips-drag\">".$row[$i]."</div></td>";
        }
        
    }
}






}





$conn->close();
}
function read1($row) {
include("config-login.php");
$sql = "SELECT * FROM base21 WHERE id=".$row."";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    for ($i=1; $i <5 ; $i++) { 
    if(empty($row[$i])){
        if ($i % 2==1) {
        
        echo "<td style=\"\"></td>";
        }
        else{
            echo "<td style=\"background-color:#70a7a9;\"></td>";
        }
    }
else{
    if ($i % 2==1) {
    echo "<td style=\"\"><div class=\"redips-drag\">".$row[$i]."</div></td>";
        }
        else{
            echo "<td style=\"background-color:#70a7a9;\"><div class=\"redips-drag\">".$row[$i]."</div></td>";
        }
}
}
$conn->close();
}
function exam_day($day) {
include("config-login.php");
$sql = "SELECT id,name FROM exam_day WHERE id=$day";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<td class=\"redips-mark\" style=\"background-color: #568e8f;border-left: 3px dotted #1abc9c;width:1px;\"><div >".$row["name"]."</div></td>";
    }
} else {
    echo "";
}
$conn->close();
}






















?>






