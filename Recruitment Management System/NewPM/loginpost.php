<?php
include 'connect_i.php';

if(isset($_POST['submit'])){
	
	$username = $_POST['username'];
	
	$password = $_POST['password'];

if (empty($username) || empty ($password)){
	
	echo "<center><h3>Username and Passoword is required</h3></center>";
	
}

$sql = mysqli_query($connection, "SELECT * FROM account WHERE username = '$username'AND password='$password'");


$login_check = mysqli_num_rows($sql);

if($login_check > 0){ 
    while($row = mysqli_fetch_array($sql)){ 
        // Get member ID into a session variable
        $id = $row["username"];   
        
        $_SESSION['id'] = $id;
        // Get member username into a session variable
	    $username = $row["username"];   
       
        $_SESSION['username'] = $username;

	header("location:pm_check.php?id='$id'"); //important
		exit();

		
		
		
	
	}
}

}

?>

            	<form action="loginpost.php" method="post">
                	<input type="text" name="username" />
<br />
<input type="password" name="password" />
<br />
<input type="submit" name="submit" />
</form>


</form>
       