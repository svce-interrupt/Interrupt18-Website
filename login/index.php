<?php session_start(); ?>

<html>
	<head>
		<title>Interrupt '18 | Login</title>
		<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
		<link href="css/index-css.css" rel="stylesheet">
		<link rel="icon" href="../img/favicon.jpeg">
		<style>
			p {
				text-align: center;
				font-size: 120%;
			}
		</style>
	</head>
	<?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$dbservername="localhost";
			$dbusername= "root";
			$dbpassword="Superman123!";
			$dbname="INTERRUPT";
			$connect= mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname); // connecting to db
			if (!$connect) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			global $mobile, $message;
			$mobile=$_POST["numberInput"];
			$password=$_POST['passInput'];

			
			//check if mobile has 10 digits and only contains numbers
			if (!is_numeric($mobile) OR strlen($mobile) != 10) {
				echo "<script>alert('You seem to have entered a wrong mobile number! Please try again!');</script>";
			} else {
				$row2;
				$result2;
				// echo password_verify()
				$sql1= "SELECT * from users where mobileNo='".$mobile."';";
				$result1=mysqli_query($connect,$sql1);

				$row=mysqli_fetch_assoc($result1);
				$hashed_password = $row['password'];
				// echo $row['mobileNo'];
				// using session variables to access it in other files
				$_SESSION['mobile']=0;
				if(password_verify($password, $hashed_password))
				{
					$sql2= "SELECT * from events where mobileNo='".$mobile."';";
					$result2= mysqli_query($connect,$sql2);
					$row2=mysqli_fetch_assoc($result2);
					$_SESSION['mobile']=$mobile;
					$_SESSION['ev'][0] = $row2['LogiciansCode'];
					$_SESSION['ev'][1] = $row2['PitchPerfect'];
					$_SESSION['ev'][2] = $row2['Inquizitive'];
					$_SESSION['ev'][3] = $row2['FlexboxFroggy'];
					$_SESSION['ev'][4] = $row2['FinishTheCode'];
					$_SESSION['ev'][5] = $row2['TerminalOfSuccess'];
					$_SESSION['ev'][6] = $row2['PresentationHub'];
					$_SESSION['ev'][7] = $row2['TechCrunch'];
					$_SESSION['ev'][8] = $row2['TechnoFair'];
					$_SESSION['ev'][9] = $row2['InterruptTheChallenge'];
					$_SESSION['ev'][10] = $row2['PipeThePiper'];
					$_SESSION['ev'][11] = $row2['DataScience'];
					$_SESSION['ev'][12] = $row2['WorkshopAWS'];
					echo "<script>window.location.href='events.php'</script>";
				} elseif ($row['mobileNo']) {		//if mobile exists, but password is wrong
					echo "<script>alert('The mobile number and password do not seem to match! Please try again.');</script>";
				} else {		//if mobile doesn't exist
					echo "<script>alert('The mobile number does not exist. Please try again.');</script>";
				}
			}
		} else {
			// message from events.php file
			if(isset($_SESSION['message'])) {
				$message=$_SESSION['message'];
			}
		}
	?>	
	
	<body>
		
		
		<pre><span id="title">
  _                 _       
 | |               (_)      
 | |     ___   __ _ _ _ __  
 | |    / _ \ / _` | | '_ \ 
 | |___| (_) | (_| | | | | |
 |______\___/ \__, |_|_| |_|
               __/ |        
                                                   |___/                                             
		</span></pre>
		
		<form id='register-form' method="post" action="index.php">
			<input type='tel' name='numberInput' class='home-links form-input' id='number-login' placeholder='Mobile Number'>
			<input type='password' name='passInput' class='home-links form-input end' id='pass-login' placeholder='Password'>
			<button type='submit' class='home-links submit-butt' id='login-butt'>Login &rarr;</button>
		</form>
						
		<a href="../register/index.html" class="home-links top">Create Account &rarr;</a>
		<a href="http://interrupt2k18.in/" class="home-links bottom">Go Back To Home &crarr;</a>
		
	</body>


	<?php 
	// deletes the session variables after the user clicks save on events.php (or when user goes into login page using URL)
		if($_SERVER['REQUEST_METHOD'] != 'POST') {
			session_unset();
		}
	?>
</html>
