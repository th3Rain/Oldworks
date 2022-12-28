<?php
//session_start();
require('include.php');
require('sessions.php');
    
$location_of_institution = $_POST['Domiciliation'];
$state_of_institution = $_POST['StateId'];
$institution_name = $_POST['InstitutionNamea'];
$study_time = $_POST['StudyTime'];
$entry_mode = $_POST['EntryMode'];
$reg_number = $_POST['EntryRegistrationNumber'];
$de_reg = $_POST['DirectEntryRegNumber'];
$de_grade = $_POST['DirectEntryGrade'];
$entry_year = $_POST['YearOfEntry'];
$matric_no = $_POST['MatricNumber'];
$course_of_study = $_POST['CourseOfStudy'];
$course_duration = $_POST['CourseDurationYears'];
$current_level = $_POST['CurrentLevel'];
$current_cgpa = $_POST['CurrentCGPA'];
$expected_year_of_grad = $_POST['ExpectedYearOfGraduation'];
$year_of_grad = $_POST['YearOfGraduation'];
$grad_cgpa = $_POST['GraduatingCGPA'];
$degree_class = $_POST['DegreeClassId'];
$nysc_status = $_POST['CompletedNysc'];
$nysc_callupno = $_POST['NyscCallUpNumber'];
$nysc_certno = $_POST['NyscCertificateNumber'];


mysqli_query($connection, "UPDATE undergraduate SET location_institution='$location_of_institution', state_institution='$state_of_institution', institution_name='$institution_name', 
	course_study='$course_of_study', study_time='$study_time', entry_mode='$entry_mode', reg_number='$reg_number', de_reg='$de_reg', entry_year='$entry_year', matric_number='$matric_no',
	 course_duration='$course_duration', current_level = '$current_level', current_cgpa='$current_cgpa', expected_year_of_grad='$expected_grad_year', grad_year='$year_of_grad', 
	 grad_cgpa='$grad_cgpa', degree_class='$degree_class', nysc_status='$nysc_status', nysc_callup_no='$nysc_callupno', nysc_cert_no='$nysc_certno'  WHERE username = '$username'") 
    or die(mysqli_error($connection));

header("location:undergraduate.php");

?>