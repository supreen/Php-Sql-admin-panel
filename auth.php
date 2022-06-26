<?php
//Database connection.

include 'db.php';

$sql = "SELECT user, pass, start, end  FROM control WHERE pass='".$sessionpass."' AND user='".$sessionadmin."'";

$result = $con->query($sql);

if ($result->num_rows > 0) {


$allowauthencity=1;

	
  }
 else {
$allowauthencity=0;
}
$con->close();




?>
