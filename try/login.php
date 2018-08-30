
<?php
$dbservername="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="interrupt";
$connect= mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname); // connecting to db
//initialisation of variables

	$mobile = $_POST["numberInput"];
	$password=$_POST['passInput'];
	
	$row2;
	$result2;
	session_start();
	// echo password_verify()
	echo $mobile;
	$sql1= "SELECT * from users where mobileNo='".$mobile."';";
	$result1=mysqli_query($connect,$sql1);

	$row=mysqli_fetch_assoc($result1);
	$hashed_password = $row['password'];

	$_SESSION['mobile']=0;
	if(password_verify($password, $hashed_password))
		{
			$sql2= "SELECT * from events where mobileNo='".$mobile."';";
			$result2= mysqli_query($connect,$sql2);
			$row2=mysqli_fetch_assoc($result2);
			$_SESSION['mobile']=$mobile;
			$_SESSION['ev'][0] = $row2['GoodWillHunting'];
			$_SESSION['ev'][1] = $row2['TheGameOfCodes'];
			$_SESSION['ev'][2] = $row2['Predestination'];
			$_SESSION['ev'][3] = $row2['TheDigitalFortress'];
			$_SESSION['ev'][4] = $row2['TheSecretSociety'];
			$_SESSION['ev'][5] = $row2['UnicornOfSilicon'];
			$_SESSION['ev'][6] = $row2['FishBowlConversation'];
			$_SESSION['ev'][7] = $row2['Inquizitive'];
			$_SESSION['ev'][8] = $row2['MiniProject'];
			$_SESSION['ev'][9] = $row2['PresentationFrankenstein'];
			echo "<script>window.location.href='events.php'</script>";
		}
	else
	{
		echo "<script> alert('Invalid username or password!');</script>";
		echo "<script>window.location.href='index.html'</script>";
	}

	?>	