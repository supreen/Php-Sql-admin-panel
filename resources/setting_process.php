<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//display data even when no data is sent
//display function
if(isset ($_POST['todisplay']) and $_POST['property']!="" and $_POST['todisplay']!="" and $_POST['todisplay']=="display" and $_POST['process']==""){
include '../db.php';
//for others including one more column of law type


//start of table
echo '<table>
  <tr>
    <th>id</th>   
    <th>Username</th>   
	<th>Password</th>
	<th>Edit</th>
	<th>delete</th>
        
  </tr>';
if($_POST['order']=="" and $_POST['aling']==""){
$sql = "SELECT id, user, pass FROM ".$_POST['property']." ORDER BY id DESC";
}else if($_POST['order']=="" and $_POST['aling']!=""){
$sql = "SELECT id, user, pass FROM ".$_POST['property']." ORDER BY id ".$_POST['aling'];
}else if($_POST['order']!="" and $_POST['aling']==""){
$sql = "SELECT id, user, pass FROM ".$_POST['property']." ORDER BY ".$_POST['order']." DESC";
}else if($_POST['order']!="" and $_POST['aling']!=""){
$sql = "SELECT id, user, pass FROM ".$_POST['property']." ORDER BY ".$_POST['order']." ".$_POST['aling'];
}



$result = $con->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

//database results


echo ' 


  <tr>
 <td>'.$row['id'].'</td>     
   <td>'.$row['user'].'</td>
   <td>'.$row['pass'].'</td>
    <td><button type="button" onclick="pedit('.$row['id'].')">Edit</button></td>
   
    <td><button type="button" onclick="pdel('.$row['id'].')">Delete</button></td>
   
   
  
  </tr>
  



';


}
}
}
echo '</table>';

$con->close();
//proper process of the form
//add function
}

?>