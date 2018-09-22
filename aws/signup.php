<?php
// echo "<script>alert('Thank you for signing up!');</script>";

$dbservername="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="INTERRUPT";

$connect=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
			
$name=cleanString($_POST['nameInput']);
$college=cleanString($_POST['collegeInput']);

$email=$_POST['emailInput'];
$mobile=$_POST['numberInput'];


$sql="INSERT INTO aws VALUES ('$mobile','$college','$name','$email');";	

if(mysqli_query($connect, $sql)){
		echo "<script>alert('Thank you for signing up!');</script>";
		echo "<script>window.location.href='../cmd';</script>";
	}


function cleanString($str){
	$str=htmlspecialchars($str);
	$str=strip_tags($str);
	return $str;
}

mysqli_close($connect);

?>
