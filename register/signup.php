<?php

$dbservername="localhost";
$dbusername= "root";
$dbpassword="Superman123!";
$dbname="INTERRUPT";

$connect=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}


	$name=cleanString($_POST['nameInput']);
	$college=cleanString($_POST['collegeInput']);
	$email;
	$mobile;
	$subject="INTERRUPT'18 Registration Successful";
	$message="Hey there! \nYou have now signed up successfully for Interrupt '18! Your event preferences have been saved and can be edited by logging into the site again.\n These are your login details incase you forget:- \n\n Login Username: ";
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
			$message.=" $mobile\nLogin Password: $password\n\nThank you,\nInterrupt 2018 Organising Team.", $headers);
			mail($email,$subject,$message,$headers);
			echo "<script>alert('Thank you for signing up! An email has beent sent to your registered email.');</script>";
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
