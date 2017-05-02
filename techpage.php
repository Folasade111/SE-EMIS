<?php
//this is how we establish a connection between a php script and a mysql database
//This is the code you connect your database with

include 'config.php';
mysql_select_db("patient") or die (mysql_error());
$mysqli = new mysqli('localhost','patient','afolasade111','patient');
		$sql = "SELECT * FROM lab_info";
		$result = mysqli_query($mysqli,$sql);
		echo "<h1> Welcome to patient portal</h1>";
		
		if(mysqli_num_rows($result)> 0){
			echo " <p> Here are the tests requested now</p>";
			echo "<table><tr><th> Last-Name </th><th> First-Name </th><th> Test-Requested </th><th>Physician Name</th></tr>";
			while($row = mysqli_fetch_assoc($result)){ 
				echo "<tr><td>".$row["lastname"]."</td><td>"
	           .$row["firstname"].
				"</td><td>".$row["test"].
				"</td><td>".$row["doctor_name"]."</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "<p>No tests now technician<p>";
		}
		$mysqli->close();
?>
<html>
<head>
<title>new test</title>

<style>
body{
	
	background-image :url(../4laworks/images/try.jpg);
	
}
h1{
	color : black;
	text-align : center;
	font-family : times;
	font-size : 50px;
}
p{
	color : Red;
	text-align : center;
	font-family : verdana;
	font-size : 40px;
}
table,th,td{
	border : 1px solid black;
}
th,td{
	padding : 15px;
}
</style>
</head>
<body>
</head>
</body>
