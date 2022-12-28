<?php
    require('include.php');
  
        $username = $_POST['UserName'];
        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $MobileNo = $_POST['MobileNo'];
        $signup_date = date("Y-m-d");




        $query = "SELECT id FROM `account` ORDER BY id DESC LIMIT 1";
        $resultz = mysqli_query($connection, $query) or die(mysqli_error($connection));
        while($row = mysqli_fetch_assoc($resultz)){
        $id = $row["id"];
        $id = $id + 1 ;
        echo $id;
    }

        $query = "INSERT INTO `account` (username, firstname, lastname, email, password, MobileNo, signup_date, id) VALUES ('$username', '$firstname', '$lastname', '$email', '$password', '$MobileNo', '$signup_date', $id)";
        $result = mysqli_query($connection, $query) or die ("User already exist ". mysqli_error($connection));
        mysqli_query($connection, "INSERT INTO `additional_information` (id, username) VALUES ('$id', '$username')") or die ("Query failed: ". mysqli_error($connection));
        mysqli_query($connection, "INSERT INTO `undergraduate` (id, username) VALUES ('$id', '$username')") or die ("Query failed: ". mysqli_error($connection));
        mysqli_query($connection, "INSERT INTO `personal` (id, username, firstname, lastname, primary_email, primary_mobile) VALUES ('$id', '$username', '$firstname', '$lastname', '$email', '$MobileNo')") or die ("Query failed: ". mysqli_error($connection));
        mysqli_query($connection, "INSERT INTO `documents` (id) VALUES ('$id')") or die ("Query failed: ". mysqli_error($connection));
        mysqli_query($connection, "INSERT INTO `users` (id, username, password, showing) VALUES ('$id', '$username', '$password', '1')") or die ("Query failed: ". mysqli_error($connection));
       
        header("location:login.php");
	//echo "<a href=login.php> Return to Login </a>";
        exit();
			
    
  
    
    ?>