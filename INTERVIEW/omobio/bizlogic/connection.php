<?php
    $servername = "localhost";
    $username = "root"; //my localhost username is root
    $password = ""; //my localhost password ""
    $database ="exam";

    $conn = mysqli_connect($servername,$username,$password,$database); //establish the connection

    if(!$conn){
        die("Can't connect : " . mysqli_error($conn)); 
    }

    else{
        echo "connected successfully.";
	}
?>