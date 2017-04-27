<?php
//this is how we establish a connection between a php script and a mysql database
//This is the code you connect your database with
//mysql_select_db("patient") or die (mysql_error());
$mysqli = new mysqli('localhost','patient','afolasade111','patient');
$connect = mysql_connect("localhost","patient","afolasade111") or die (mysql_error());
mysql_select_db("patient") or die (mysql_error());
if(!$connect){
	die('could not connect :\n '.mysql_error());
}
//echo 'Connected successfully ';


if (isset($_POST['register'])){
	$lastname = $_POST['lastname'];
		if ($lastname == ""){
			$err= "Please enter your LastName";
		}
	$firstname = $_POST['firstname'];
		if ($firstname == ""){
			$err= "Please enter your FirstName";
		}
	$patient_id = $_POST['patient_id'];
		if($patient_id == ""){
			$err = "Please input your patient id";
		}
	$birth_date = $_POST['birth_date'];
		if($birth_date == ""){
			$err = "Please select your birth date";
		}
	$gender = $_POST['gender'];
		if($gender == ""){
			$err = "Please select your gender below";
		}
	$address = $_POST['address'];
		if($address == ""){
			$err = "Please enter an address";
		}
	$state = $_POST['state'];
		if($state == ""){
			$err = "Please enter a state";
		}
	$zip = $_POST['zip'];
		if($zip == ""){
			$err = "Please enter your zip";
		}
	$telephonenumber = $_POST['telephonenumber'];
		if($telephonenumber == ""){
			$err = "Please enter your phone number";
		}
	$email = $_POST['email'];
		if ($email == ""){
			$err= "please enter your email address";
		}
	$emergency_number = $_POST['emergency_number'];
		if($emergency_number == ""){
			$err = "You need an emergency number";
		}
	$insurance_number = $_POST['insurance_number'];
		if($insurance_number == ""){
			$err = "What is your insurance number enter N/A if you don't have one";
		}
	$username = $_POST['username'];
		if($username == ""){
			$err = "Please enter a username";
		}
	$password = $_POST['password'];
		if ($password == ""){
			$err= "please enter your password";
		}
	if (strlen($password)<=5){
		$err= "Minimum character length for password should be 6";
	}
	mysql_query("INSERT INTO personal_info (lastname,firstname,patient_id,birth_date,gender,address,state,zip,telephonenumber, email,emergency_number,insurance_number,username,password) 
	VALUES ('$lastname', '$firstname','$patient_id','$birth_date','$gender','$address','$state','$zip','$telephonenumber', '$email','$emergency_number','$insurance_number', '$username','$password')") or die (mysql_error());
	$err = "Thank you for registering your patient profile";
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
	Patient Id : 
			<input type = "text" name = "patient_id" size ="40">
			<br>
			<br>
	Date of Birth :
			 <input type = "date" name = "birth_date" size ="11">
			 <br>
			 <br>
	Gender:
			<select name = "gender">
			<option value = "F" >Female</option>
			<option value ="M"> Male </option>
			</select>
	Address:
		<input type="text" name="address" size = "40">
			<br>
			<br>
	State:
		<select name = "state">
		<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>		

	Zip :
		<input type = "text" name = "zip" size = "7">
			<br>
			<br>
	Telephone Number :
		<input type= "tel" name = "telephonenumber" size ="11">
			<br>
			<br>
	Email Address :
			<input type="email" name="email" size ="40">
			<br>
			<br>
	Emergency number : 
			<input type = "tel" name = "emergency_number" size "11">
			<br> 
			<br>
	Insurance Number :
			<input type = "text" name = "insurance_number" size "40">
			<br>
			<br>
	UserName :
			<input type ="text" name ="username" size "20">
			<br>
			<br>
	Password:
			<input type="password" name="password" size ="8">
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