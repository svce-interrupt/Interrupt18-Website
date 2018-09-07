<?php

$dbservername="localhost";
$dbusername= "root";
$dbpassword="Superman123!";
$dbname="INTERRUPT";

$connect=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

//initialisation
 // if(isset($_POST['submit']))
 // {
	// TO-DO: IMPLEMENT CONFIRM PASSWORD
	$checkEmail=validEmail($_POST['emailInput']);
	$checkMobile=validMobile($_POST['numberInput']);

	$password=$_POST['passInput'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	$event1=$_POST['event1'];
	$event2=$_POST['event2'];
	$event3=$_POST['event3'];
	$event4=$_POST['event4'];
	$event5=$_POST['event5'];
	$event6=$_POST['event6'];
	$event7=$_POST['event7'];
	$event8=$_POST['event8'];
	$event9=$_POST['event9'];
	$event10=$_POST['event10'];
	$event11=$_POST['event12'];
	$event12=$_POST['event12'];	

//hardcoded this function which prints the name of the events user have registered for in the confirmation email...
/*	function printEvent()
	{
	if($event1=$_POST['event1']==1){echo "Logician's Code 2.0\n";}
	if($event2=$_POST['event2']==1){echo "Pitch Perfect\n";}
	if($event3=$_POST['event3']==1){echo "Inquizitive\n";}
	if($event4=$_POST['event4']==1){echo "Art Attack\n";}
	if($event5=$_POST['event5']==1){echo "Clash Of Codes\n";}
	if($event6=$_POST['event6']==1){echo "Terminal Of Secrets\n";}
	if($event7=$_POST['event7']==1){echo "Presentation Hub\n";}
	if($event8=$_POST['event8']==1){echo "TechnoFair\n";}
	if($event9=$_POST['event9']==1){echo "Interrupt Challenge\n";}
	if($event10=$_POST['event10']==1){echo "Pipe The Piper\n";}
	if($event11=$_POST['event12']==1){echo "Dataification\n";}
	if($event12=$_POST['event12']==1){echo "Workshop AWS\n";}
	}*/

	//$printEvent=printEvent();

//to send verification email
	$name=cleanString($_POST['nameInput']);
	$college=cleanString($_POST['collegeInput']);
	$email;
	$mobile;
	$subject="INTERRUPT'18 Registration Successful";
	$message="Hello $name! \nThanks for registering for Interrupt 2018! We're glad to have you.You can use your phone number ($mobile) to login along with the password you chose. If you have any issues feel free to contact us.\n\nRegards,\nThe Interrupt 2018 Organizing Team";
	$headers="From: interrupt2k18@gmail.com" . "\r\n";

//to validate email and phone no
	if($checkEmail && $checkMobile){

		$email=$_POST['emailInput'];
		$mobile=$_POST['numberInput'];

		//sql cmd fr querying 
		$sql="INSERT INTO users VALUES ('$mobile', '$hashed_password','$college','$name','$email'); INSERT INTO events VALUES ('$mobile',$event1,$event2,$event3,$event4,$event5,$event6,$event7,$event8,$event9,$event10,$event11,$event12);";

	 	//sending those queries to db
		if(mysqli_multi_query($connect, $sql)){

			echo "<script>alert('Thank you for signing up! An email has beent sent to your registered email.');</script>";
			mail($email,$subject,$message,$headers); //can only be checked in a proper server,can't be checked in local server :-(
			echo "<script>window.location.href='../cmd/';</script>";

		}
   	 }
    
	else{
    		echo "<script>alert('Your email seems to not be a proper email! Try again!');</script>";
		echo "<script>window.location.href='../register/';</script>";
    	}
//a function to validate email address
function validEmail($email){
	// events if the formatting is correct
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
		return FALSE;
	}
	//events whether the domain is real or not.
	$domain = explode("@", $email, 2);
	return checkdnsrr($domain[1]); // returns TRUE/FALSE;
}
//events if there are ten digits in a phone no
function validMobile($mobile){
	return preg_match('/^[0-9]{10}+$/', $mobile);
}
function cleanString($str){
	$str=htmlspecialchars($str);
	$str=strip_tags($str);
	return $str;
}

mysqli_close($connect);

?>
