<?php


$dbservername="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="INTERRUPT";

$connect=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
			
$password=$_POST['passInput'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
// $event1=$_POST['event1'];
// $event2=$_POST['event2'];
// $event3=$_POST['event3'];
// $event4=$_POST['event4'];
// $event5=$_POST['event5'];
// $event6=$_POST['event6'];
// $event7=$_POST['event7'];
// $event8=$_POST['event8'];
// $event9=$_POST['event9'];
// $event10=$_POST['event10'];
// $event11=$_POST['event12'];
// $event12=$_POST['event12'];	

$name=cleanString($_POST['nameInput']);
$college=cleanString($_POST['collegeInput']);

$email=$_POST['emailInput'];
$mobile=$_POST['numberInput'];


$sql="INSERT INTO aws VALUES ('$mobile', '$hashed_password','$college','$name','$email');";	
// $sql2="INSERT INTO events VALUES ('$mobile',$event1,$event2,$event3,$event4,$event5,$event6,$event7,$event8,$event9,$event10,$event11,$event12); INSERT INTO challenge VALUES ('$mobile',0,'2000-01-01 12:00:00','2000-01-01 12:00:00',0);";

if(mysqli_query($connect, $sql)){
		echo "<script>alert('Thank you for signing up!');</script>";
		echo "<script>window.location.href='../';</script>";
	}


function cleanString($str){
	$str=htmlspecialchars($str);
	$str=strip_tags($str);
	return $str;
}

mysqli_close($connect);

?>
