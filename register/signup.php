<?php

$dbservername="localhost";
$dbusername= "arjun1001";
$dbpassword="Superman123!";
$dbname="INTERRUPT";

$connect=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

//initialisation

 // if(isset($_POST['submit']))
 // {
	$name=$_POST['nameInput'];
	$college=$_POST['collegeInput'];
	$email;
	$mobile;
	$subject="INTERRUPT'18 Registration Successful";
	$message="Hey there! \nYou have now signed up successfully for Interrupt '18! Your event preferences have been saved and can be edited by logging into the site again.\n These are your login details incase you forget:- \n\n Login Username: ";
	$message="hello";
	$headers="From: interrupt@gmail.com" . "\r\n";

	$checkEmail=validEmail($_POST['emailInput']);
	$checkMobile=validMobile($_POST['numberInput']);
	$password=$_POST['passInput'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$GoodWillHunting=$_POST['event1'];
	$TheGameOfCodes=$_POST['event2'];
	$Predestination=$_POST['event3'];
	$TheDigitalFortress=$_POST['event4'];
	$TheSecretSociety=$_POST['event5'];
	$UnicornOfSilicon=$_POST['event6'];
	$FishBowlConversation=$_POST['event7'];
	$Inquizitive=$_POST['event8'];
	$MiniProject=$_POST['event9'];
	$PresentationFrankenstein=$_POST['event10'];


//to validate email and phone no
	if($checkEmail && $checkMobile){
		$email=$_POST['emailInput'];
		$mobile=$_POST['numberInput'];

		//sql cmd fr querying 

		$sql="INSERT INTO users VALUES ('$mobile', '$hashed_password','$college','$name','$email'); INSERT INTO events VALUES ('$mobile','$GoodWillHunting','$TheGameOfCodes','$Predestination','$TheDigitalFortress','$TheSecretSociety','$UnicornOfSilicon','$FishBowlConversation','$Inquizitive','$MiniProject','$PresentationFrankenstein');";


	 	//sending those queries to db


		if(mysqli_multi_query($connect, $sql)){
			echo "<script>alert('You signed up successfully! An email has been sent to your email regarding your login details.\n Thank you!');</script>";
			mail($email,$subject,$message." $mobile\n Login Password: $password\n\nThank you,\nInterrupt 2018 Organising Team",$headers); //can only be checked in a proper server,can't be checked in local server :-(
			echo "<script>window.location.href='http://www.arjunaravind.in/interrupt/cmd/';</script>";
		}

    }

    else{
    	echo "<script>alert('Your email seems to not be a proper email! Try again!');</script>";
	echo "<script>window.location.href='http://www.arjunaravind.in/interrupt/signup/';</script>";
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

mysqli_close($connect);

?>
