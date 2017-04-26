<?php
$mysqli = new mysqli('localhost','patient','afolasade111','patient');
include 'config.php';
session_start();

$user = $_SESSION['login_user'];
$ses_sql = mysqli_query($mysqli,"select employee_id from doctor_info 
						where employee_id = '$user'");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login = $row['employee_id'];
if(!isset($_SESSION['login_user'])){
	header("location : login.php");
}
?>