<?php
////session_start();
require('include.php');
 include('sessions.php');
            $address = $_POST['Address'];
            $city = $_POST['City'];
            $country_of_res = $_POST['CountryOfResidenceId'];
		    $state_of_res = $_POST['StateOfResidenceId'];
            $country_of_origin = $_POST['CountryOfOriginId'];
            $state_of_orign = $_POST['StateOfOriginId'];
            $lga_of_origin = $_POST['LgaOfOriginId'];
            $community = $_POST['CommunityText'];
            $next_of_kin = $_POST['NextOfKin'];
            $kin_mobile = $_POST['NextOfKinMobileNumber'];
            $kin_relationship = $_POST['NextOfKinRelationship'];
            $referee = $_POST['AcademicReferee'];
		    $referee_mobile = $_POST['AcademicRefereeMobileNumber'];
            $referee_relationship = $_POST['AcademicRefereeRelationship'];
            $current_job = $_POST['CurrentJob'];
            $nature_job = $_POST['NameOfScholarship'];
            $service_year = $_POST['AwardYear'];
		    $has_disability = $_POST['HasDisability'];
            $disability = $_POST['Disability'];
            $no_of_children = $_POST['NumberOfSiblings'];
            $username = $_SESSION['username'];

        

	 $queryT = "SELECT * FROM `additional_information` WHERE username='$username'";
        $result3 = mysqli_query($connection, $queryT) or die (mysqli_error($connection));
$count1 = mysqli_num_rows($result3);
  
    if($count1==1)
    {
    
       //$qry = mysqli_fetch_assoc($result3)
             
           while($rows = mysqli_fetch_array($result3)){
               //echo $user_id;
    $userz_id = $rows["username"]; 
   

       if(empty($userz_id)){
        mysqli_query($connection, "INSERT into `additional_information`(username) VALUES ('$username')") or die(mysqli_error($connection));
            
            mysqli_query($connection, "UPDATE `additional_information` SET address='$address', city='$city', country_residence='$country_of_res', state_residence='$state_of_res', country_origin='$country_of_origin', state_origin='$state_of_orign', lga_origin='$lga_of_origin', community='$community', next_of_kin='$next_of_kin', relationship_kin='$kin_relationship', mobile_kin='$kin_mobile', referee = '$referee', mobile_referee='$referee_mobile', relationship_referee='$referee_relationship', working_status='$current_job', current_job='$nature_job', year_of_service='$service_year', disability_status='$has_disability', disability='$disability', no_of_children='$no_of_children' WHERE username='$userz_id'") or die(mysqli_error($connection));
             header("location:additional.php");

}else if($userz_id=$username) {
           mysqli_query($connection, "UPDATE `additional_information` SET address='$address', city='$city', country_residence='$country_of_res', state_residence='$state_of_res',
            country_origin='$country_of_origin', state_origin='$state_of_orign', lga_origin='$lga_of_origin', community='$community', next_of_kin='$next_of_kin', 
            relationship_kin='$kin_relationship', mobile_kin='$kin_mobile', referee = '$referee', mobile_referee='$referee_mobile', relationship_referee='$referee_relationship',
             working_status='$current_job', current_job='$nature_job', year_of_service='$service_year', disability_status='$has_disability', disability='$disability', 
             no_of_children='$no_of_children' WHERE username='$userz_id'") or die(mysqli_error($connection));
             header("location:additional.php");
        } 
}


    }







?>