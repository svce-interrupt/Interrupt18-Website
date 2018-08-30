<?php

$dbservername="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="interrupt";

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
	$message="Hurrah! Get ready to get interrupted! Your registration process for the INTERRUPT'18 is successful.Thank you for signing up.You can always change your events or check your points by logging in.See you there :-)";
	$headers="From: shriramgobu@gmail.com" . "\r\n";

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

		$sql="INSERT INTO users (mobileNo,password,college,name,email) VALUES ('$mobile', '$hashed_password','$college','$name','$email'); INSERT INTO events (mobileNo,GoodWillHunting,TheGameOfCodes,Predestination,TheDigitalFortress,TheSecretSociety,UnicornOfSilicon,FishBowlConversation,Inquizitive,MiniProject,PresentationFrankenstein) VALUES ('$mobile','$GoodWillHunting','$TheGameOfCodes','$Predestination','$TheDigitalFortress','$TheSecretSociety','$UnicornOfSilicon','$FishBowlConversation','$Inquizitive','$MiniProject','$PresentationFrankenstein');";


	 	//sending those queries to db

		if(mysqli_multi_query($connect, $sql)) {
	          echo "<script>alert('You signed up successfully! You can edit your selected events by using the 'login' option. Thanks!');</script>";
	          mail($email,$subject,$message,$headers); //can only be checked in a proper server,can't be checked in local server :-(
			  echo "<script>window.location.href='http://www.arjunaravind.in/interrupt/signup/';</script>";
		}

    }

    else{
    	echo "<script>alert('Oops! You seem to have made a mistake! Try again!');</script>";
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
