<?php
	//This PHP file checks if a given number exists in the table or not	
    $servername="localhost";
    $username="arjun1098";
    $password="Superman123!";
    $dbname="INTERRUPT";

	$number= $_REQUEST['number'];
	$sql_stmt="SELECT mobileNo FROM users WHERE mobileNo='$number';";
	
	try{
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$sql=$conn->query($sql_stmt);
	 	$results = $sql->fetchAll(PDO::FETCH_ASSOC);
		$ifThere=0;
		
		foreach($results as $row){
			if($row['mobileNo']==$number){
				echo "true";
				$ifThere=1;
			}
		}
		
		if($ifThere==0){
			echo "false";
		}
	} catch (PDOException $e){
		echo "<br>";
	}
	
?>
