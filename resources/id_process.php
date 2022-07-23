<?php
//getting id from database
//adding the input type number
if(isset ($_POST['property']) and isset ($_POST['constidisplay']) and $_POST['property']!="" and $_POST['constidisplay']=="display"){
 
include '../db.php';
$sql = "SELECT id FROM others where lawtype='".$_POST['property']."' Order by id ASC";
$result = $con->query($sql);
//if it is not main stream lawtype and more related to ads or keywords
if ($result->num_rows == 0) {
$con->close();
include '../db.php';
$sql = "SELECT id FROM ".$_POST['property']." Order by id ASC";
$result = $con->query($sql);
$cid=$result->num_rows;
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$cid=$row['id'];
}
}
$con->close();


echo $cid+1;


}else{ 
//if it is main stream lawtype

$cid=$result->num_rows;
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$cid=$row['id'];
}
}
$con->close();


echo $cid+1;
}

}else if(isset ($_POST['property']) and isset ($_POST['bookdisplay']) and $_POST['property']!="" and $_POST['bookdisplay']=="display"){

include '../db.php';
$sql = "SELECT id FROM books where lawtype='".$_POST['property']."' Order by id ASC";
$result = $con->query($sql);
//if it is not main stream lawtype and more related to ads or keywords
$cid=$result->num_rows;
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$cid=$row['id'];
}
}
$con->close();


echo $cid+1;



	
}else{
	echo "Access Denied";
}
?>	