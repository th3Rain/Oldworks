<?php include('../connection.php');
$submit=$_POST['submit'];
$name= $_POST['Name'];
$user= $_POST['username'];
$email= $_POST['Email'];
$pass= md5($_POST['Password']);
$repass=md5($_POST['RePassword']);

if ($pass != $repass || $repass != $pass){
	$msg = "Passwords do not Match";
}

$query=mysqli_query($connection, "SELECT * FROM accounts WHERE username='$user' or email='$email'");
if ($submit){
if($user&$pass&$repass){
if(strlen($user)<=8){
if(mysqli_num_rows($query)==1){
echo'<script type="text/javascript">alert("Username or Email already exist!, try another email and username")</script>';
}
else{
if($pass==$repass){
mysqli_query($connection, "INSERT INTO accounts (name,username,email,password) VALUES('$name','$user','$email','$pass')");
echo'<script type="text/javascript">alert("Account created successfully")</script>';
header("location: login.php");
}
else{
echo'<script type="text/javascript">alert("Password did not match!")</script>';
header("location: login.php");
}
}
}

}
else{
echo'<script type="text/javascript">alert("Enter atleast 8-16 Character!")</script>';
header("location: login.php");
}
}
else if(empty($user)){
echo'<script type="text/javascript">alert("Please Fill up All Fields!")</script>';
header("location: login.php");
}
?>