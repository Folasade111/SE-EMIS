
<?php
include 'config.php';
$mysqli = new mysqli('localhost','patient','afolasade111','patient');
$connect = mysql_connect("localhost","patient","afolasade111") or die (mysql_error());
mysql_select_db("patient") or die (mysql_error());
if (isset($_POST['register'])){
	$lastname = $_POST['lastname'];
		if ($lastname == ""){
			$err= "Please enter your LastName";
		}
	$firstname = $_POST['firstname'];
		if ($firstname == ""){
			$err= "Please enter your FirstName";
		}
	$employee_id = $_POST['employee_id'];
		if($employee_id == ""){
			$err = "Please input your patient id";
		}
	$lab = $_POST['lab'];
		if($lab == ""){
			$err = "Please select your birth date";
		}
	$telephone_number = $_POST['telephone_number'];
		if($telephone_number == ""){
			$err = "Enter your phone number ";
		}
	$email = $_POST['email'];
		if($email == ""){
			$err = "What is your email";
		}
	mysql_query("INSERT INTO tech_info (lastname,firstname,employee_id,lab,telephone_number,email) 
	VALUES ('$lastname', '$firstname','$employee_id','$lab','$telephone_number','$email')") or die (mysql_error());
	$err = "Lab technician registered";
}
?>
<html>
<head>
<title>create_profile</title>

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
	Last Name :
			<input type="text" name="lastname" size = "40">
			<br>
			<br>
	First Name:
			<input type="text" name="firstname" size = "40">
			<br>
			<br>
	Employee Id : 
			<input type = "text" name = "employee_id" size ="40">
			<br>
			<br>
	Lab :
			 <input type = "text" name = "lab" size ="11">
			 <br>
			 <br>
	Email :
		<input type = "email" name = "email" size = "30">
		<br>
		<br>
	Telephone Number :
		<input type = "tel" name = "telephone_number" size = "20">
		<br>
		<br>
		<input type="submit" name="register" value="register">
	
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
