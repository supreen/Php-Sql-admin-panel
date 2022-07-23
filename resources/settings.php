<?php


if ($allowauthencity==1){
	







?>


<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=button] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=button]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<script>
function loadpid() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("pid").value = parseInt(this.responseText);
  }
  xhttp.open("POST", "resources/id_process.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("constidisplay=display&property=control"); 
}

function loadp() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("displayp").innerHTML = this.responseText;
  loadpid();
  }
  xhttp.open("POST", "resources/setting_process.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("todisplay=display&property=control&order="+document.getElementById("select").options[document.getElementById("select").selectedIndex].value+"&aling="+document.getElementById("select2").options[document.getElementById("select2").selectedIndex].value);
 

}

function pedit(id) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("peditbox").innerHTML = this.responseText;
  loadpid();
  }
  xhttp.open("POST", "resources/to_process.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("todisplay=display&property=control&process=edit&id="+id); 
}
function editpsub(id) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("responsep").innerHTML = this.responseText;
loadp();
closepedit()
  }
  xhttp.open("POST", "resources/to_process.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("datanew=valid&user="+document.getElementById("editpuser").value+"&pass="+document.getElementById("editppass").value+"&id="+id+"&property=control&process=subedit");
 

}
function pdel(id) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("responsep").innerHTML = this.responseText;
  loadp();
  }
  xhttp.open("POST", "resources/to_process.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("todisplay=display&property=control&process=del&id="+id); 
 


 }
 function closepedit() {
   document.getElementById("peditbox").innerHTML = "";
 }
 function subp() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("responsep").innerHTML = this.responseText;
document.getElementById("user").value="";
document.getElementById("pass").value="";

loadp();
  }
  xhttp.open("POST", "resources/to_process.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("datanew=valid&user="+document.getElementById("user").value+"&pass="+document.getElementById("pass").value+"&id="+document.getElementById("pid").value+"&property=control&process=add");
 

}

loadp();
</script>
</head>
<body>

<h2>User and Password</h2>
<p>This is to update the database</p>
<div class="container">
  <form action="/action_page.php">
  
  <div class="row">
    <div class="col-25">
      <label for="contitle">ID </label>
    </div>
    <div class="col-75">
	


	<input type="number" id="pid" name="pid" placeholder="ID" disabled>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="contitle">Username </label>
    </div>
    <div class="col-75">
      <input type="text" id="user" name="user" placeholder="Username.">
    </div>
  </div>
<div class="row">  
    <div class="col-25">

  <label for="contitle">Password </label>
    </div>
    <div class="col-75">
      <input type="text" id="pass" name="pass" placeholder="Password.">
    </div>
  </div>

  
  <br>
  <div class="row">
      <button type="button" onclick="subp()">Add</button>

</div>
<div id="responsep"></div>
<div id="peditbox"></div>
 
  
  <h2>Database control</h2>
<p>These are the admin database</p>
<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="contitle">Order by </label>
    </div>
    <div class="col-75">
    <select id="select" name="select" onchange="loadp()">
<option selected value="id">id</option>
<option value="user">Username</option>
<option value="pass">Password</option>
</select>
  </div>
  </div>
  
 <div class="row">
    <div class="col-25">
      <label for="contitle">Alingments</label>
    </div>
    <div class="col-75">
 
<select id="select2" name="select2" onchange="loadp()">
<option value="ASC">Ascending</option>
<option selected value="DESC">Descending</option>
</select>

</div>
  </div>  
  
  
 <div class="row">
      <button type="button" onclick="loadp()">Refresh Database</button>
</div>
 <div id="responsep"></div>
 
 </form>
<center>
<h2>Database</h2>


 <div id="displayp"></div>
 </center>
</div>
</body>
</html>

<?php
}else{

echo "<h1>Access Denied. Please go back to the login panel</h1>";
}

?>
