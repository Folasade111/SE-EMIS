<?php
//this is how we establish a connection between a php script and a mysql database
//This is the code you connect your database with
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
	$test = $_POST['test'];
		if($test == ""){
			$err = "What kind of test do you want";
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
	$doctor_name = $_POST['doctor_name'];
		if($doctor_name == ""){
			$err = "Please enter your name doctor";
		}
	$email_address = $_POST['email_address'];
		if($email_adress = ""){
			$err = "Doc get synchronological enter your name ";
		}
	$hospital_name = $_POST['hospital_name'];
		if($hospital_name == ""){
			$err = "What is your hospital's name";
		}
	mysql_query("INSERT INTO lab_info (lastname,firstname,test,birth_date,gender,address,state,zip,telephonenumber, email, doctor_name,email_address,hospital_name) 
	VALUES ('$lastname', '$firstname','$test','$birth_date','$gender','$address','$state','$zip','$telephonenumber', '$email','$doctor_name','$email_address','$hospital_name')") or die (mysql_error());
	$err = "Thank you we will get back to you when we get the lab results";
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
<h2> Hello You are at the request page enter information below</h2>
<form method="post" id="frmexample" name="frmexpalme" action="">
	Patient last Name :
			<input type="text" name="lastname" size = "40" value ="">
			<br>
			<br>
	patient first Name:
			<input type="text" name="firstname" size = "40" value = "">
			<br>
			<br>
	Test : 
			<input type = "text" name = "test" size ="40" value = "">
			<br>
			<br>
	Date of Birth :
			 <input type = "date" name = "birth_date" size ="11" value = "">
			 <br>
			 <br>
	Patient gender:
			<select name = "gender">
			<option value = "F" >Female</option>
			<option value ="M"> Male </option>
			</select>
	patient address:
		<input type="text" name="address" size = "40" value = "">
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
		<input type = "text" name = "zip" size = "7" value = "">
			<br>
			<br>
	Telephone Number :
		<input type= "tel" name = "telephonenumber" size ="11" value = "">
			<br>
			<br>
	patient email Address :
			<input type="email" name="email" size ="40" value = "">
			<br>
			<br>
	Doctor name :
		<input type = "text" name = "doctor_name" size = "80" value = "">
			<br>
			<br>
	Doctor email address:
		<input type = "text" name = "email_address" size = "40" value = "">
			<br>
			<br>
	Hospital name :
		<input type = "text" name = "hospital_name" size "255" value ="">
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