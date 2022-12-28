<script>
   function login() {
        
 var r = confirm("Incorrect Login... Retry?");
if (r == true) {
   document.location.href = "login.php";
} else {
     document.location.href = "../index.php";
}
    }

    
    </script>

<?php 
include('../connection.php');
session_start();
$user=mysqli_real_escape_string($connection, $_POST['username']);
$pass=md5($_POST['password']); 
$fetch=mysqli_query($connection, "SELECT ID FROM `accounts` WHERE username='$user' and password='$pass'");
$count=mysqli_num_rows($fetch);
if($count!="")
{
$_SESSION['username']=$user;
header("location:../gallery.php");
}
else{
	echo "<script> login(); </script>";
}

?>