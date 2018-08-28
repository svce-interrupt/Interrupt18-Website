<?php
session_start();
$dbservername="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="register";


$connect=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
	
	$mob = $_SESSION['mobile'];
	echo $mob;

	global $GoodWillHunting;
	global $TheGameOfCodes;
	global $Predestination;
	global $TheDigitalFortress;
	global $TheSecretSociety;
	global $UnicornOfSilicon;
	global $FishBowlConversation;
	global $Inquizitive;
	global $MiniProject;
	global $PresentationFrankenstein;

	if(isset($_POST['submit']))
	{
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
    }



		//sql cmd fr updating

		$sql="UPDATE events set GoodWillHunting='$GoodWillHunting',TheGameOfCodes='$TheGameOfCodes',TheDigitalFortress='$TheDigitalFortress',TheSecretSociety='$TheSecretSociety',UnicornOfSilicon='$UnicornOfSilicon',FishBowlConversation='$FishBowlConversation',Inquizitive='$Inquizitive',MiniProject='$MiniProject',PresentationFrankenstein='$PresentationFrankenstein';";
		
	 	//sending those queries to db
	 	

		if(mysqli_query($connect,$sql))
	          {
	          	echo "<script>alert('Your changes have been updated!. Thanks!');</script>";
	         
			  }

	    else
	    {
	    	echo "<script>alert('Sorry for the inconvenience! Please try again!');</script>";
		}
	