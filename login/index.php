<?php session_start(); ?>

<html>
	<head>
		<title>Interrupt '18 | Login</title>
		<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
		<link href="css/index-css.css" rel="stylesheet">
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
			$dbpassword="";
			$dbname="interrupt";
			$connect= mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname); // connecting to db
			if (!$connect) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			global $mobile, $message;
			$mobile=$_POST["numberInput"];
			$password=$_POST['passInput'];

			
			//check if mobile has 10 digits and only contains numbers
			if (!is_numeric($mobile) OR strlen($mobile) != 10) {
				$message='Error: Oops! You seemed to have entered an invalid mobile number. Please enter a valid number.';
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
				} elseif ($row['mobileNo']) {		//if mobile exists, but password is wrong
					$message="Error: Password is wrong!";
					echo "";
				} else {		//if mobile doesn't exist
					$message="Error: Mobile number does not exist. Create an account first.";
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
		
		<div class="message-box">
			<p id="message">
				
			</p><!-- .message -->
		</div><!-- .message-box -->
		<form id='register-form' method="post" action="index.php">
			<input type='tel' name='numberInput' class='home-links form-input' id='number-login' placeholder='Mobile Number'>
			<input type='password' name='passInput' class='home-links form-input end' id='pass-login' placeholder='Password'>
			<button type='submit' class='home-links submit-butt' id='login-butt'>Login &rarr;</button>
		</form>
						
		<a href="../home.html" class="home-links top">Create Account &rarr;</a>
		<a href="../home.html" class="home-links bottom">Go Back To Home &crarr;</a>
		
	</body>


	<script>
		
		var colorNum=1;
		window.setInterval(colorChange, 1000); //This function calls the colorChange() function every 1 second.

		function colorChange(){
			if(colorNum==1){
				document.getElementById("title").style.color="purple";
				colorNum=2;
			}
			else if(colorNum==2){
				document.getElementById("title").style.color="blue";
				colorNum=3;
			}
			else if(colorNum==3){
				document.getElementById("title").style.color="green";
				colorNum=4;
			}
			else if(colorNum==4){
				document.getElementById("title").style.color="yellow";
				colorNum=5;
			}
			else if(colorNum==5){
				document.getElementById("title").style.color="orange";
				colorNum=6;
			}
			else if(colorNum==6){
				document.getElementById("title").style.color="red";
				colorNum=1;
			}
		} //This function is used to change the color of the interrupt title every time it is called.
		
		var typeChange=window.setInterval(typewrite, 35); //This function calls 'typewrite' that appends a character to the <p> tag, creating a typing effect

		var typeNum=0;
		var typeText="<?php echo $message.'  ' ?>";
		console.log(typeText);
		var typeTextLen=typeText.length;

		function typewrite(){
			if(typeNum!=(typeTextLen-1)){
				document.getElementById("message").innerHTML+=typeText[typeNum];
				typeNum+=1;
			}
			else{
				clearInterval(typeChange);
				document.getElementById("message").innerHTML+="<span style='width:5%;' id='cursor-blink'>|</span>";
				window.setInterval(blink,500);
			}
		} //Everytime the function is called, it appends a character to the <p> tag until the end of the string has been reached.

		var blinkNum=0;
		function blink(){
			if(blinkNum==0){
				document.getElementById("cursor-blink").style.backgroundColor="white";
				document.getElementById("cursor-blink").style.color="white";
				blinkNum=1;
			}
			else{
				document.getElementById("cursor-blink").style.backgroundColor="black";
				document.getElementById("cursor-blink").style.color="black";
				blinkNum=0;
			}
		} //This function changed the background of the <span> character from black to white, making the 'cursor' blink.

		// retains mobile number when mobile num is in db
		<?php 
			if ($message=="Error: Password is wrong!") {
				echo "document.getElementById('number-login').value=$mobile;";
			}
		?>

		// on refresh clear the error message
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
			$message="";
		}
	</script>


	<?php 
	// deletes the session variables after the user clicks save on events.php (or when user goes into login page using URL)
		if($_SERVER['REQUEST_METHOD'] != 'POST') {
			session_unset();
		}
	?>
</html>
