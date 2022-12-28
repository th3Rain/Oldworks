<?php
//session_start();
require('include.php');
include('sessions.php');
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$sec_email = $_POST['AlternateEmail'];
$NIN = $_POST['NIN'];
$middlename = $_POST['MiddleName'];
$dob = $_POST['DateOfBirth'];
$gender = $_POST['Gender'];
$marital_status = $_POST['MaritalStatus'];
$p_mobile = $_POST['MobileNo'];
$sec_mobile = $_POST['AlternateMobileNo'];
$maidenname = $_POST['MaidenName'];
$pri_email = $email;
$last_login = $login_date;

if($gender=1){
    $gender = "male";
}else {
        $gender = "female";
    }

switch ($marital_status) {
    case 1:
        $marital_status="Single";
        break;
    case 2:
        $marital_status="Married";
        break;
    case 3:
        $marital_status="Divorced";
        break;
     case 4:
        $marital_status="Widowed";
        break;
    case 5:
        $marital_status="Separated";
        break;
                
        
}

//$query = "INSERT INTO `account` (username, firstname, lastname, email, password, MobileNo) VALUES ('$username', '$firstname', '$lastname', '$email', '$password', '$MobileNo')";
$queryTest ="SELECT * FROM `personal`";
$result1 =  mysqli_query($connection, $queryTest) or die(mysqli_error($connection));


$queryT ="SELECT * FROM `account`";
$result2 =  mysqli_query($connection, $queryTest) or die(mysqli_error($connection));
while($row = mysqli_fetch_assoc($result2)){
  $username = $row["username"];  
    
}





while($row = mysqli_fetch_assoc($result1)){

    $userz_id = $row["username"];

     if ($userz_id=$empty){
           mysqli_query($connection, "INSERT into personal(username) VALUES ('$userz_id')") or die(mysqli_error($connection));
            mysqli_query($connection, "UPDATE personal SET firstname='$firstname', middlename='$middlename', lastname='$lastname', gender='$gender', birthdate='$dob', marital_status='$marital_status', primary_email='$pri_email', primary_mobile='$p_mobile', alternative_email='$sec_email', last_login='$last_login', alternative_mobile='$sec_mobile', NIN = '$NIN', maidenname='$maidenname' WHERE username='$userz_id'") or die(mysqli_error($connection));
            
}else if($userz_id=$username){
           // mysqli_query("INSERT into personal(userid) VALUES ('$userid')");
            mysqli_query($connection, "UPDATE personal SET firstname='$firstname', middlename='$middlename', lastname='$lastname', gender='$gender', birthdate='$dob', marital_status='$marital_status', primary_email='$pri_email', primary_mobile='$p_mobile', alternative_email='$sec_email', last_login='$last_login', alternative_mobile='$sec_mobile', NIN = '$NIN', maidenname='$maidenname' WHERE username='$userz_id'") or die(mysqli_error($connection));
        }
        
}

        
            header("location:profile.php");

	
    ?>