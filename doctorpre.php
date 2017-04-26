<?php
//this is how we establish a connection between a php script and a mysql database
//mysql_connect("localhost","patient","afolasade111") or die (mysql_error());
//This is the code you connect your database with
//mysql_select_db("patient") or die (mysql_error());
$mysqli = new mysqli('localhost','patient','afolasade111','patient');


session_start();
include 'config.php';

if (isset($_POST['register'])){
	$employee_number= mysqli_real_escape_string($mysqli,$_POST['employee_number']);
		if ($employee_number == ""){
			$err= "Please enter your employee_number";
		}
		$sql = "SELECT * FROM doctor_info WHERE employee_id = '$employee_number'";
		$result = mysqli_query($mysqli, $sql);
		$rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $rows['employee_id'];
		//$count = mysqli_num_rows($result);
		$count = sizeof($rows);
		if($count > 0){
			//session_register(" employee_number");
			$_SESSION['login_user'] = $employee_number;
			
			header('Location : http://localhost/doctorpre/login.php');
			exit;
			//$err = "Correct employee id";
			
		}
		else{
			$err = "Enter a correct employee id";
		}
}		
?>


<html>
<head>
<title>Doccreate_username</title>

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
	font-family : verdana;
	font-size : 20px;
}
</style>
</head>

<body>
<h1> Welcome to patient portal</h1>
<form method="post" id="frmexample" name="frmexpalme" action="">
	Employee Id :
			<input type="text" name="employee_number" size = "40">
			<br>
			<br>
	<input type="submit" name="register" value="register" action = "login.php">
	</form>
</body>
</html>


<script type="text/javascript">
	<?php
		if (isset($err)){
	?>
	alert("<?php echo $err; ?>");
		<?php } ?>
</script>