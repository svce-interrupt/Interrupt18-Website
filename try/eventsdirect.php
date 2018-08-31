<?php
session_start();
$dbservername="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="interrupt";


$connect=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
	
	$mob = $_SESSION['mobile'];
	// echo $mob;

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
    	//updates only the row with correct mobileNo

		$sql="UPDATE events set GoodWillHunting='$GoodWillHunting',TheGameOfCodes='$TheGameOfCodes',Predestination='$Predestination',TheDigitalFortress='$TheDigitalFortress',TheSecretSociety='$TheSecretSociety',UnicornOfSilicon='$UnicornOfSilicon',FishBowlConversation='$FishBowlConversation',Inquizitive='$Inquizitive',MiniProject='$MiniProject',PresentationFrankenstein='$PresentationFrankenstein' WHERE mobileNo='$mob';";
		
	 	//sending those queries to db
	 	

		if(mysqli_query($connect,$sql))
	          {
	          	echo "<script>alert('Your changes have been updated!. Thanks!');</script>";
	         	// echo "<script>window.location.href='../home.html'</script>";
	         	header('Location: ../home.html');
			  }

	    else
	    {
	    	echo "<script>alert('Sorry for the inconvenience! Please try again!');</script>";
		}
	
		session_destroy();