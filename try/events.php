<?php session_start(); ?>
<html>
	
	<head>
		<title>Interrupt '18 | Registered Events</title>
		<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet"> 
		<style>
			body, html{
				background-color: black;
				font-family: "Share Tech Mono", monospace;
				color: yellow;
				padding: 0;
				margin: 0;
			}
			
			body{
				width: 95%;
				margin: 2.5% 2.4%;
				padding-bottom: 5%;
				border: 1px dashed white;
			}
			
			#title{
				width: 99%;
				margin-left: 1%;
				display: block;
				margin-top: 3%;
				font-size: 120%;
				text-align: center;
				white-space: pre;
				word-wrap: normal;
				color: red;
			}
			
			.home-links{
				text-decoration: none;
				color: #29B6F6;
				width: 25%;
				margin: 0 auto;
				margin-top: 6%;
				display: block;
				text-align: center;
				border: 1px dashed #29B6F6;
				padding: 1% 0%;
				font-size: 120%;
				font-family: "Share Tech Mono", monospace;
				cursor: pointer;
			}
			.home-links:hover{
				color: yellow;
				border: 1px dashed yellow;
			}
			
			
			.dark-red{
				color: #E91E63;
				border: 1px dashed #E91E63;
			}
			.purple{
				color: #9C27B0;
				border: 1px dashed #9C27B0;
			}
			.below{
				margin-top: 1%;
				margin-left: 37%;
			}
			.save{
				color: red;
				border: 1px dashed red;
				margin-top: 6%;
				margin-left: 37%;
				background-color: transparent;
			}
			
			#register-form{
				margin-top: 3%;
				width: 100%;
				text-align: center;
			}
			.form-input{
				margin-left: 2%;
				margin-top: 2%;
				display: inline-block;
				padding-left: 1%;
				text-align: left;
				background-color: transparent;
			}
			.form-input:hover{
				border: 1px dashed #29b6f6;
				color: #29b6f6;
			}
			.long{
				width: 62%;
				border: 1px dashed orange;
				color: orange;
			}
			.long:hover{
				border: 1px dashed orange;
				color: orange;
			}
			.end{
				border: 1px dashed red;
				color: red;
			}
			.end:hover{
				border: 1px dashed red;
				color: red;
			}
			
			.form-text{
				width: 60%;
				margin-top: 1.5%;
				margin-left: 20%;
				text-align: center;
				font-size: 130%;
			}
			
			.check{
				width: 25%;
				cursor: pointer;
				display: inline-block;
				margin-top: 1%;
				margin-right: 1%;
			}
			.top{
				margin-top: 5%;
			}
			.blue:hover{
				border: 1px dashed #29b6f6;
				color: #29b6f6;
			}
			.orange{
				border: 1px dashed #FB8C00;
				color: #FB8C00;
			}
			.orange:hover{
				border: 1px dashed #FB8C00;
				color: #FB8C00;
			}
			.red1{
				border: 1px dashed #EF9A9A;
				color: #EF9A9A;
			}
			.red1:hover{
				border: 1px dashed #EF9A9A;
				color: #EF9A9A;
			}
		</style>
	</head>

	
	<body>
		
		<pre><span id="title">
  ______               _       
 |  ____|             | |      
 | |____   _____ _ __ | |_ ___ 
 |  __\ \ / / _ \ '_ \| __/ __|
 | |___\ V /  __/ | | | |_\__ \
 |______\_/ \___|_| |_|\__|___/
                               
 
		</span></pre>
	
			
		<form id='register-form' action="eventsdirect.php" method='post'>	
			
			<p class='form-text'>The highlighted ones are events you've already registered for! If you'd like to register for more events click on them, and click on the highlighted events again to register from the respected event! <span style='width:5%;' </span></p>

			<input type="hidden" id="input1" name='event1' value="0">
			<span class='home-links check blue top' id='check1'>Good Will Hunting</span>
			
			<input type="hidden" id="input2" name='event2' value="0">
			<span class='home-links check orange top' id='check2'>The Game Of Codes</span>
			
			<input type="hidden" id="input3" name="event3" value="0">
			<span class='home-links check red1 top' id='check3'>Predestination</span>
			
			<input type="hidden" id="input4" name="event4" value="0">
			<span class='home-links check red1' id='check4'>The Digital Fortress</span>
			
			<input type="hidden" id="input5" name="event5" value="0">
			<span class='home-links check blue' id='check5'>The Secret Society</span>
			
			<input type="hidden" id="input6" name="event6" value="0">
			<span class='home-links check orange' id='check6'>Unicorn Of Silicon</span>
			
			<input type="hidden" id="input7" name="event7" value="0">
			<span class='home-links check orange' id='check7'>Fish Bowl Conversation</span>
			
			<input type="hidden" id="input8" name="event8" value="0">
			<span class='home-links check red1' id='check8'>Inquizitive</span>
			
			<input type="hidden" id="input9" name="event9" value="0">
			<span class='home-links check blue' id='check9'>Mini Project</span>
			
			<input type="hidden" id="input10" name="event10" value="0">
			<span class='home-links check red1' id='check10'>Presentation Frankenstein</span>
			
			<input type='submit' name='submit' value="Save" class='home-links save'>

			
		</form>
									
		<a href="../home.html" class="home-links below">Go Back To Home &crarr;</a>
		<a href="../cmd/loading.html" class="home-links below">Go To Command Prompt &crarr;</a>
								
									
		
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
		
		
			
			// document.getElementById("changeHere").innerHTML=registerHTML;
			// console.log(mob);

			// var events = document.getElementByClass("check");
			
			var check1=<?php echo $_SESSION['ev'][0] ?>;

			var check2=<?php echo $_SESSION['ev'][1] ?>;

			var check3=<?php echo $_SESSION['ev'][2] ?>;

			var check4=<?php echo $_SESSION['ev'][3] ?>;

			var check5=<?php echo $_SESSION['ev'][4] ?>;

			var check6=<?php echo $_SESSION['ev'][5] ?>;

			var check7=<?php echo $_SESSION['ev'][6]?>;

			var check8=<?php echo $_SESSION['ev'][7]?>;

			var check9=<?php echo $_SESSION['ev'][8]?>;

			var check10=<?php echo $_SESSION['ev'][9] ?>;

			if (check1 == 1) {
				document.getElementById("check1").style.border="1px dashed yellow";
				document.getElementById("check1").style.color="yellow";
				document.getElementById("input1").value = '1';
			}

			if (check2 == 1) {
				document.getElementById("check2").style.border="1px dashed yellow";
				document.getElementById("check2").style.color="yellow";
				document.getElementById("input2").value = '1';
			}

			if (check3 == 1) {
				document.getElementById("check3").style.border="1px dashed yellow";
				document.getElementById("check3").style.color="yellow";
				document.getElementById("input3").value = '1';
			}

			if (check4 == 1) {
				document.getElementById("check4").style.border="1px dashed yellow";
				document.getElementById("check4").style.color="yellow";
				document.getElementById("input4").value = '1';
			}

			if (check5 == 1) {
				document.getElementById("check5").style.border="1px dashed yellow";
				document.getElementById("check5").style.color="yellow";
				document.getElementById("input5").value = '1';
			}

			if (check6 == 1) {
				document.getElementById("check6").style.border="1px dashed yellow";
				document.getElementById("check6").style.color="yellow";
				document.getElementById("input6").value = '1';
			}

			if (check7 == 1) {
				document.getElementById("check7").style.border="1px dashed yellow";
				document.getElementById("check7").style.color="yellow";
				document.getElementById("input7").value = '1';
			}

			if (check8 == 1) {
				document.getElementById("check8").style.border="1px dashed yellow";
				document.getElementById("check8").style.color="yellow";
				document.getElementById("input8").value = '1';
			}

			if (check9 == 1) {
				document.getElementById("check9").style.border="1px dashed yellow";
				document.getElementById("check9").style.color="yellow";
				document.getElementById("input9").value = '1';
			}

			if (check10 == 1) {
				document.getElementById("check10").style.border="1px dashed yellow";
				document.getElementById("check10").style.color="yellow";
				document.getElementById("input10").value = '1';
			}

			var check1=<?php echo $_SESSION['ev'][0] ?>;
			console.log(check1);
			document.getElementById("check1").addEventListener("click", function(){
				if(check1==0){
					
					document.getElementById("check1").style.border="1px dashed yellow";
					document.getElementById("check1").style.color="yellow";
					document.getElementById("input1").value = '1';
					check1=1;
				}
				else{
					
					document.getElementById("check1").style.border="1px dashed #29b6f6";
					document.getElementById("input1").value = '0';
					document.getElementById("check1").style.color="#29b6f6";
					check1=0;
				}
			});
		
			var check2=<?php echo $_SESSION['ev'][1] ?>;
			document.getElementById("check2").addEventListener("click", function(){
				if(check2==0){
					document.getElementById("check2").style.border="1px dashed yellow";
					document.getElementById("check2").style.color="yellow";
					document.getElementById("input2").value = '1';
					check2=1;
				}
				else{
					document.getElementById("check2").style.border="1px dashed #FB8C00";
					document.getElementById("check2").style.color="#FB8C00";
					document.getElementById("input2").value = '0';
					check2=0;
				}
			});
		
			var check3=<?php echo $_SESSION['ev'][2] ?>;
			document.getElementById("check3").addEventListener("click", function(){
				if(check3==0){
					console.log("Clec");
					document.getElementById("check3").style.border="1px dashed yellow";
					document.getElementById("check3").style.color="yellow";
					document.getElementById("input3").value = '1';
					check3=1;
				}
				else{
					document.getElementById("check3").style.border="1px dashed #EF9A9A";
					document.getElementById("check3").style.color="#EF9A9A";
					document.getElementById("input3").value = '0';
					check3=0;
				}
			});
	
			var check4=<?php echo $_SESSION['ev'][3] ?>;
			document.getElementById("check4").addEventListener("click", function(){
				if(check4==0){
					document.getElementById("check4").style.border="1px dashed yellow";
					document.getElementById("check4").style.color="yellow";
					document.getElementById("input4").value = '1';
					check4=1;
				}
				else{
					document.getElementById("check4").style.border="1px dashed #EF9A9A";
					document.getElementById("check4").style.color="#EF9A9A";
					document.getElementById("input4").value = '0';
					check4=0;
				}
			});
		
			var check5=<?php echo $_SESSION['ev'][4] ?>;
			document.getElementById("check5").addEventListener("click", function(){
				if(check5==0){
					document.getElementById("check5").style.border="1px dashed yellow";
					document.getElementById("check5").style.color="yellow";
					document.getElementById("input5").value = '1';
					check5=1;
				}
				else{
					document.getElementById("check5").style.border="1px dashed #29b6f6";
					document.getElementById("check5").style.color="#29b6f6";
					document.getElementById("input5").value = '0';
					check5=0;
			
				}
			});
							
			var check6=<?php echo $_SESSION['ev'][5] ?>;
			document.getElementById("check6").addEventListener("click", function(){
				if(check6==0){
					document.getElementById("check6").style.border="1px dashed yellow";
					document.getElementById("check6").style.color="yellow";
					document.getElementById("input6").value = '1';
					check6=1;
				}
				else{
					document.getElementById("check6").style.border="1px dashed #FB8C00";
					document.getElementById("check6").style.color="#FB8C00";
					document.getElementById("input6").value = '0';
					check6=0;
				}
			});
		
			var check7=<?php echo $_SESSION['ev'][6] ?>;
			document.getElementById("check7").addEventListener("click", function(){
				if(check7==0){
					document.getElementById("check7").style.border="1px dashed yellow";
					document.getElementById("check7").style.color="yellow";
					document.getElementById("input7").value = '1';
					check7=1;
				}
				else{
					document.getElementById("check7").style.border="1px dashed #FB8C00";
					document.getElementById("check7").style.color="#FB8C00";
					document.getElementById("input7").value = '0';
					check7=0;
				}
			});
		
			var check8=<?php echo $_SESSION['ev'][7] ?>;
			document.getElementById("check8").addEventListener("click", function(){
				if(check8==0){
					document.getElementById("check8").style.border="1px dashed yellow";
					document.getElementById("check8").style.color="yellow";
					document.getElementById("input8").value = '1';
					check8=1;
				}
				else{
					document.getElementById("check8").style.border="1px dashed #EF9A9A";
					document.getElementById("check8").style.color="#EF9A9A";
					document.getElementById("input8").value = '0';
					check8=0;
				}
			});
		
			var check9=<?php echo $_SESSION['ev'][8] ?>;
			document.getElementById("check9").addEventListener("click", function(){
				if(check9==0){
					document.getElementById("check9").style.border="1px dashed yellow";
					document.getElementById("check9").style.color="yellow";
					document.getElementById("input9").value = '1';
					check9=1;
				}
				else{
					document.getElementById("check9").style.border="1px dashed #29b6f6";
					document.getElementById("check9").style.color="#29b6f6";
					document.getElementById("input9").value = '0';
					check9=0;
				}
			});
		
			var check10=<?php echo $_SESSION['ev'][9] ?>;
			document.getElementById("check10").addEventListener("click", function(){
				if(check10==0){
					document.getElementById("check10").style.border="1px dashed yellow";
					document.getElementById("check10").style.color="yellow";
					document.getElementById("input10").value = '1';
					check10=1;
				}
				else{
					document.getElementById("check10").style.border="1px dashed #EF9A9A";
					document.getElementById("check10").style.color="#EF9A9A";
					document.getElementById("input10").value = '0';
					check10=0;
				}
			});
		
	</script>

</html>