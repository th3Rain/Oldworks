<html>
<script>
   function deletePost() {
        
 var r = confirm("Incorrect Login... Retry?");
if (r == true) {
   document.location.href = "login.php";
} else {
     document.location.href = "../index.php";
}
    }

    
    </script>




<?php  
ob_start();
//session_start();
require('include.php');
include 'sessions.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `account` WHERE email='$email' and password='$password'";
 
$result1 = mysqli_query($connection, $query) or die(mysqli_error($connection));
$usercount = mysqli_num_rows($result1);

$query = "SELECT * FROM `admin` WHERE email='$email' and password='$password'";
 
$result2 = mysqli_query($connection, $query) or die(mysqli_error($connection));
$admincount = mysqli_num_rows($result2);
$login_date = date("Y-m-d");


while($row = mysqli_fetch_assoc($result1)){
        $_SESSION['username'] = $row["username"];
     $_SESSION['email'] = $row["email"];
    $_SESSION['firstname'] = $row["firstname"];
     $_SESSION['lastname'] = $row["lastname"];
   $_SESSION['mobileNo'] = $row["mobileNo"];
    $_SESSION['last_login'] = $row['last_login'];
    $_SESSION['id'] = $row['id'];
}



 if ($usercount == 1) {
	
	mysqli_query($connection, "UPDATE account SET last_login='$login_date' WHERE email='$email'") or die(mysqli_error($connection));
 //echo "Welcome:"  .$email. "<a href=overview.php> Proceed </a>";
   header("location:overview.php");
        exit();
    
    }
else if ($admincount == 1){
    
  echo "Welcome" .$_SESSION['email']. "<a href=overview.php> Proceed </a>";
        exit();
        }   
        


else{

echo "<script type='text/javascript'>";
echo "deletePost();";
echo "</script>";
}
    
?>

    </html>