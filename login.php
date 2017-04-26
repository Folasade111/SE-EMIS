<?php
include 'config.php';
include ('session.php');
mysql_select_db("patient") or die (mysql_error());
if (isset($_POST['register'])){
	$username = $_POST['username'];
		if ($username == ""){
			$err= "Please enter your LastName";
		}
	$password = $_POST['password'];
		if ($password == ""){
			$err= "Please enter your FirstName";
		}
	mysql_query("INSERT INTO doctor_info (username,password)
	VALUES('$username' ,
			'$password')") or die (mysql_error());
	$err = "Thank you for registering";
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
	User name:
			<input type="text" name="username" size = "40">
			<br>
			<br>
	Password:
			<input type="password" name="password" size = "40">
			<br>
			<br>
}
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