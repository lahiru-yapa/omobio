<?php

	header('Access-Control-Allow-Origin:*');
	header('Access-Control-Allow-Credentials:true');
	header('Access-Control-Allow-Methods:POST, GET, OPTIONS, PUT, DELETE');
	header('Access-Control-Allow-Headers:Content-Type, Authorization, X-Requested-With');
	header('Content-Type:application/json;charset-utf-8');

	include 'connection.php';
	session_start();

	$json = file_get_contents('php://input'); 	
	$obj = json_decode($json,true);

	$username = $obj['username'];
	$password = $obj['password'];
	
	if($obj['username']!=""){	
	
	$result= $mysqli_query("SELECT * FROM user where username ='$username' and password='$password'"); //query to select username & password
	
		if($result_num_rows==0){
			echo json_encode('wrong details');				
		}
		else{		
			echo json_encode('Successful Login');
			$_SESSION['username'] = $username;				
		}
	}	
	else{
	  echo json_encode('try again');
	}

	mysqli_close($conn);
?>