
<?php
$dbservername="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="register";
$connect= mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname); // connecting to db
//initialisation of variables

	$mobile = $_POST["numberInput"];
	$password=$_POST['passInput'];
	
	// $mobile="0987654321";
	// $password="asdfghjkl";
	$row2;
	$result2;
	session_start();
	
	$sql1= "SELECT count(*) from users where mobileNo='".$mobile."' and password ='".$password."';";
	$result1=mysqli_query($connect,$sql1);

	$row=mysqli_fetch_assoc($result1);
	$_SESSION['mobile']=0;
	if($row['count(*)']>0)
		{
			$sql2= "SELECT * from users where mobileNo='".$mobile."';";
			$result2= mysqli_query($connect,$sql2);
			$row2=mysqli_fetch_assoc($result2);
			$_SESSION['mobile']=$mobile;
			echo "<script>window.location.href='events.php'</script>";
		}
	else
	{
		echo "<script> alert('Invalid username or password!');</script>";
		echo "<script>window.location.href='index.html'</script>";
	}
	
	if($_SESSION['mobile']!=0)
	{

				$_SESSION['ev1'] = $row['$GoodWillHunting'];
				$_SESSION['ev2'] = $row['$TheGameOfCodes'];
				$_SESSION['ev3'] = $row['$Predestination'];
				$_SESSION['ev4'] = $row['$TheDigitalFortress'];
				$_SESSION['ev5'] = $row['$TheSecretSociety'];
				$_SESSION['ev6'] = $row['$UnicornOfSilicon'];
				$_SESSION['ev7'] = $row['$FishBowlConversation'];
				$_SESSION['ev8'] = $row['$Inquizitive'];
				$_SESSION['ev9'] = $row['$MiniProject'];
				$_SESSION['ev10'] = $row['$PresentationFrankenstein'];
    }

	?>	