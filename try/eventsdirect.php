<?php

$dbservername="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="register";


$connect=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}


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


		//sql cmd fr querying 

		$sql="INSERT INTO events (GoodWillHunting,TheGameOfCodes,Predestination,TheDigitalFortress,TheSecretSociety,UnicornOfSilicon,FishBowlConversation,Inquizitive,MiniProject,PresentationFrankenstein) VALUES ('$GoodWillHunting','$TheGameOfCodes','$Predestination','$TheDigitalFortress','$TheSecretSociety','$UnicornOfSilicon','$FishBowlConversation','$Inquizitive','$MiniProject','$PresentationFrankenstein') where mobileNo='$mobile';";

	 	//sending those queries to db

		if(mysqli_query($connect, $sql))
	          echo "<script>alert('Your changes have been updated!. Thanks!');</script>";
			  // echo "<script>window.location.href='http://www.arjunaravind.in/interrupt/signup/';</script>";

    else
    	echo "<script>alert('Oops! You seem to have made a mistake! Try again!');</script>";
		// echo "<script>window.location.href='http://www.arjunaravind.in/interrupt/signup/';</script>";


//a function to validate email address
	