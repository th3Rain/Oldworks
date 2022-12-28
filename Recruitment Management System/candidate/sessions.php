<?php
session_start();
include 'include.php';
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$email = $_SESSION['email'];
$login_date = $_SESSION['last_login'];
$mobileNo = $_SESSION['mobileNo'];
$username = $_SESSION['username'];
$id = $_SESSION['id'];

	//echo "You must ". "<a href=login.php><h6> LOGIN </h6></a>". " first";


//For personal.php auto fill
$query = "SELECT * FROM `personal` WHERE primary_email='$email'";
 
$result2 = mysqli_query($connection, $query) or die("Error conecting with database... ". mysqli_error($connection));
while($row = mysqli_fetch_assoc($result2)){
        $_SESSION['p_middle'] = $row["middlename"];
     $_SESSION['p_altmobile'] = $row["alternative_mobile"];
    $_SESSION['p_firstname'] = $row["firstname"];
     $_SESSION['p_lastname'] = $row["lastname"];
   $_SESSION['p_primobile'] = $row["primary_mobile"];
    $_SESSION['p_nin'] = $row['NIN'];
    $_SESSION['p_gender'] = $row["gender"];
     $_SESSION['p_dob'] = $row["birthdate"];
   $_SESSION['p_marital'] = $row["marital_status"];
    $_SESSION['p_priemail'] = $row['primary_email'];
    $_SESSION['p_secemail'] = $row["alternative_email"];
     $_SESSION['p_maiden'] = $row["maidenname"];
  $_SESSION['username'] = $row["username"];
}



//For additional.php auto fill
$queryA = "SELECT * FROM `additional_information` WHERE id='$id'";
 
$resultA = mysqli_query($connection, $queryA) or die("Error conecting with database... ". mysqli_error($connection));
while($row = mysqli_fetch_assoc($resultA)){
         $_SESSION['address'] = $row['address'];
             $_SESSION['city'] = $row['city'];
             $_SESSION['country_residence'] = $row['country_residence'];
         $_SESSION['state_residence'] = $row['state_residence'];
             $_SESSION['country_origin'] = $row['country_origin'];
            $_SESSION['state_origin'] = $row['state_origin'];
             $_SESSION['lga'] = $row['lga_origin'];
             $_SESSION['community'] = $row['community'];
             $_SESSION['next_of_kin'] = $row['next_of_kin'];
             $_SESSION['mobile_kin'] = $row['mobile_kin'];
             $_SESSION['relationship_kin'] = $row['relationship_kin'];
             $_SESSION['referee'] = $row['referee'];
         $_SESSION['mobile_referee'] = $row['mobile_referee'];
             $_SESSION['relationship_referee'] = $row['relationship_referee'];
             $_SESSION['working_status'] = $row['working_status'];
             $_SESSION['current_job'] = $row['current_job'];
             $_SESSION['year_of_service'] = $row['year_of_service'];
         $_SESSION['disability_status'] = $row['disability_status'];
             $_SESSION['disability'] = $row['disability'];
             $_SESSION['no_of_children'] = $row['no_of_children'];
}

?>