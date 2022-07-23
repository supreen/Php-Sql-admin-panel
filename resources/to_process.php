<?php


$indi="to";	
//idprocess
if(isset ($_POST['property']) and isset ($_POST['todisplay']) and $_POST['property']!="" and $_POST['todisplay']=="display" and $_POST['process']=="id"){
 


include '../db.php';

$sql = "SELECT id FROM ".$_POST['property'];
$result = $con->query($sql);
$cid=$result->num_rows;

$con->close();


echo $cid+1;
}

//data recieved
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//display data even when no data is sent
//display function
if(isset ($_POST['todisplay']) and $_POST['property']!="" and $_POST['todisplay']!="" and $_POST['todisplay']!="" and $_POST['todisplay']=="display" and $_POST['process']==""){
include '../db.php';
//for others including one more column of law type
if ($_POST['property']=="keywords"){
	


//start of table
echo '<table>
  <tr>
    <th>Id</th>   
	<th>Title</th>
  <th>Edit</th>
  <th>Delete</th>
  
  </tr>';

$sql = "SELECT id, title FROM ".$_POST['property']." ORDER BY id DESC";
$result = $con->query($sql);
$results=$result->num_rows;
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

//database results


echo ' 


  <tr>
 <td>'.$row['id'].'</td>     
   <td>'.$row['title'].'</td>
   <td><button type="button" onclick="'.$indi.'edit('.$row['id'].')">Edit</button></td>
   <td><button type="button" onclick="'.$indi.'del('.$row['id'].')">Delete</button></td>
      
     
   
  
  </tr>
  



';


}
}
}
echo '</table>';


//proper process of the form
//add function
}else if (isset ($_POST['id']) and isset ($_POST['property']) and isset ($_POST['title']) and $_POST['datanew']=="valid" and $_POST['property']!="" and $_POST['title']!=""  and $_POST['id']!="" and $_POST['process']=="add")
{
include '../db.php';
//about
$sql = " INSERT INTO ".$_POST['property']." (id, title) VALUES ('".$_POST['id']."','".$_POST['title']."')";

if (MySQLi_query($con, $sql)) {
  echo "New Record in ".$_POST['property']." created successfully";
} else {
  echo "Error creating any record / Error: ".$_POST['property']." record: " . $conn->error;
}


$con->close();

//delete function
}elseif(isset ($_POST['property']) and isset ($_POST['id']) and isset ($_POST['todisplay']) and $_POST['property']!="" and $_POST['id']!="" and $_POST['todisplay']=="display" and $_POST['process']=="del"){
include '../db.php';
$sql = "DELETE FROM ".$_POST['property']." WHERE id=".$_POST['id'];

if ($con->query($sql) === TRUE) {
  echo "Id=".$_POST['id']." in Record ".$_POST['property']." deleted successfully";

$result = $con->query($sql);
$results=$result->num_rows;
$con->close();
//add blank to avoid repetition of id numbers

}
}else if (isset ($_POST['id']) and isset ($_POST['property']) and isset ($_POST['user']) and isset ($_POST['pass']) and $_POST['datanew']=="valid" and $_POST['property']!="" and $_POST['user']!="" and $_POST['pass']!=""  and $_POST['id']!="" and $_POST['process']=="add")
{
include '../db.php';
//about
$sql = " INSERT INTO ".$_POST['property']." (id, user, pass) VALUES ('".$_POST['id']."','".$_POST['user']."','".$_POST['pass']."')";

if (MySQLi_query($con, $sql)) {
  echo "New Record in ".$_POST['property']." created successfully";
} else {
  echo "Error creating any record / Error: ".$_POST['property']." record: " . $conn->error;
}


$con->close();

//delete function
}elseif(isset ($_POST['property']) and isset ($_POST['id']) and isset ($_POST['todisplay']) and $_POST['property']!="" and $_POST['id']!="" and $_POST['todisplay']=="display" and $_POST['process']=="del"){
include '../db.php';
$sql = "DELETE FROM ".$_POST['property']." WHERE id=".$_POST['id'];

if ($con->query($sql) === TRUE) {
  echo "Id=".$_POST['id']." in Record ".$_POST['property']." deleted successfully";

$result = $con->query($sql);
$results=$result->num_rows;
$con->close();
//add blank to avoid repetition of id numbers


} else {
  echo "Error deleting ".$_POST['property']." record: " . $conn->error;

$result = $con->query($sql);
$results=$result->num_rows;
$con->close();


}

}elseif(isset ($_POST['property']) and isset ($_POST['todisplay']) and $_POST['property']!="" and $_POST['property']=="control" and $_POST['todisplay']=="display" and $_POST['process']=="edit"){


$indi="p";
include '../db.php';
$sql = "SELECT user, pass FROM ".$_POST['property']." WHERE id='".$_POST['id']."'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {


echo '
<h2>'.$_POST['property'].' Edit box</h2>
<p>This is the database edit control</p>
<div class="container">
  <form action="/action_page.php">
  
  <div class="row">
    <div class="col-25">
      <label for="contitle">ID </label>
    </div>
    <div class="col-75">
	


	<input type="number" id="edit'.$indi.'id" name="edit'.$indi.'id" placeholder="ID" value="'.$_POST['id'].'" disabled>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="contitle">user</label>
    </div>
    <div class="col-75">
      <input type="text" id="edit'.$indi.'user" name="edit'.$indi.'user" placeholder="Username." value="'.$row["user"].'">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="contitle">Password</label>
    </div>
    <div class="col-75">
      <input type="text" id="edit'.$indi.'pass" name="edit'.$indi.'pass" placeholder="password." value="'.$row["pass"].'">
    </div>
  </div>
  
  <br>
  <div class="row">
      <button type="button" onclick="edit'.$indi.'sub('.$_POST['id'].')">Edit</button>
      <button type="button" onclick="close'.$indi.'edit()">Close</button>

</div>
  </form>



';
}
}
$con->close();
}elseif(isset ($_POST['property']) and isset ($_POST['todisplay']) and $_POST['property']!="" and  $_POST['property']!="control" and $_POST['todisplay']=="display" and $_POST['process']=="edit"){


include '../db.php';
$sql = "SELECT title FROM ".$_POST['property']." WHERE id='".$_POST['id']."'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {


echo '
<h2>'.$_POST['property'].' Edit box</h2>
<p>This is the database edit control</p>
<div class="container">
  <form action="/action_page.php">
  
  <div class="row">
    <div class="col-25">
      <label for="contitle">ID </label>
    </div>
    <div class="col-75">
	


	<input type="number" id="edit'.$indi.'id" name="edit'.$indi.'id" placeholder="ID" value="'.$_POST['id'].'" disabled>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="contitle">Title</label>
    </div>
    <div class="col-75">
      <input type="text" id="edit'.$indi.'title" name="edit'.$indi.'title" placeholder="Title or Article." value="'.$row["Title"].'">
    </div>
  </div>
  <br>
  <div class="row">
      <button type="button" onclick="edit'.$indi.'sub('.$_POST['id'].')">Edit</button>
      <button type="button" onclick="close'.$indi.'edit()">Close</button>

</div>
  </form>



';

}
}
$con->close();

}else if (isset ($_POST['id']) and isset ($_POST['property']) and isset ($_POST['user']) and isset ($_POST['pass']) and $_POST['datanew']=="valid" and $_POST['property']!="" and $_POST['user']!="" and $_POST['pass']!="" and $_POST['id']!="" and $_POST['process']=="subedit")
{
	

include '../db.php';
//about
$sql= "UPDATE ".$_POST['property']." SET user='".$_POST['user']."', pass='".$_POST['pass']."' WHERE id=".$_POST['id'];



if (MySQLi_query($con, $sql)) {
  echo "Editied Record in ".$_POST['property']." created successfully";
} else {
  echo "Error editing any record / Error: ".$_POST['property']." record: " . $conn->error;
}


$con->close();
}else if (isset ($_POST['id']) and isset ($_POST['property']) and isset ($_POST['title']) and $_POST['datanew']=="valid" and $_POST['property']!="" and $_POST['title']!="" and $_POST['id']!="" and $_POST['process']=="subedit")
{
	

include '../db.php';
//about
$sql= "UPDATE ".$_POST['property']." SET Title='".$_POST['title']."' WHERE id=".$_POST['id'];



if (MySQLi_query($con, $sql)) {
  echo "Editied Record in ".$_POST['property']." created successfully";
} else {
  echo "Error editing any record / Error: ".$_POST['property']." record: " . $conn->error;
}


$con->close();
}else{
	echo "Something went wrong";
}	

}else{
	echo "invalid data sent";
}
?>


