<script>
   function login() {
        
 var r = confirm("You must Login first!... Login Now?");
if (r == true) {
   document.location.href = "account/login.php";
} else {
     document.location.href = "index.php";
}
    }

    
    </script>
<?php
include('connection.php');
if(($_SESSION['username'])){
    echo "<script>login();</script>";
}else{ 
	function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
if(isset($_POST['submits'])){
$login_session = $_SESSION['username'];
$submit=$_POST['submits'];
$ticketnum=createRandomPassword();
$cname= $_POST['customerName'];
$quantity=$_POST['quantity'];
$Title= $_POST['title'];
$price= $_POST['price'];
$Time= $_POST['time'];
$Date=date('Y-m-d');
$Cinema= $_POST['cinema'];
$result = mysqli_query( $connection, "SELECT ticketnum FROM cinema") or die(mysqli_error($connection));
while($row = mysqli_fetch_array($result))
	{
	$ticket=$row['ticketnum'];
	}
	$number=$ticket-$quantity;
{
if ($submit){
if(strlen($cname)>=4){
if(strlen($cname)<=32){

mysqli_query($connection, "INSERT INTO movies (Ticket_Number,username,cname,quantity,Title,price,Time,date,Cinema,ticket_status) VALUES('$ticketnum','$login_session','$cname','$quantity','$Title','$price','$Time','$Date','$Cinema','Active')") or die(mysqli_error($connection));
mysqli_query($connection, "UPDATE  cinema SET  ticketnum =  '$number' WHERE  `cinema`.`No` =1;") or die(mysqli_error($connection));
die("<button type='button' onclick=''><a href='receipt.php'> <img src='images/print.jpg' alt='print' /><br />Print Voucher</A></button>");
}
else{
echo'<script type="text/javascript">alert("Enter atleast 8-16 Character!")</script>';
}
}
else{
echo'<script type="text/javascript">alert("Please input your Firstname & Lastname!")</script>';
}
}
if($ticket <= 0)
{
die("<h1 style='background-color:white'>Sorry no tickets available!</h1>");
}
}
	}
	?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Hall</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="NewCinema Booking Page" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("price").innerHTML=response; 
 }
 });
}

</script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			<div class="menu">
				<ul>
					<li><a href="index.php"><div class="hm"><i class="home1"></i><i class="home2"></i></div></a></li>
					<li><a href="gallery.php"><div class="video"><i class="videos"></i><i class="videos1"></i></div></a></li>
					<li><a href="reviews.html"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a class="active" href="404.html"><div class="bk"><i class="booking"></i><i class="booking1"></i></div></a></li>
					<li><a href="contact.html"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
		<div class="main">
		<div class="error-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Booking Page</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="content-grids"> 
				<div class="error-404 text-center">
                    <form action="" method="post">
                 <?php
                 $user = $_SESSION['username'];
                 if(isset($_SESSION['username'])){
                 	$query=mysqli_query($connection, "SELECT * FROM `accounts` where username='$user'") or die("error");
{
	$row=mysqli_fetch_array($query);
	$customerName = $row['name'];
}
                 	
                 }

                 ?>
<p ><span ><span >Costumer
  Name:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  <input name="customerName" style="padding: 5px 10px; width: 210px;" type="text" required="required" value="<?php echo $customerName; ?>">
  &nbsp;</p><br>
<p ><span class="style1">No. of tickets:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  <select type="a" name="quantity" style="padding: 5px 10px; width: 100px;" id="quantity">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select>
  </p>
<p >&nbsp;</p>
<p >
  <span class="style3">Title
    of Movie:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <select name="title" style="padding: 5px 10px; width: 210px;" onchange="fetch_select(this.value);" onchange="fetch_select2(this.value);">
    	<option>---Select A Movie-----</option>
    <?php
   $query = mysqli_query($connection, "SELECT * FROM `cinema`") or die(mysqli_error($connection));
			 $div = "";
			 

			 if (mysqli_num_rows($query)) {
			  while($row = mysqli_fetch_assoc($query)) { 
			  	?>
			  <option><?php echo $row['title']; ?> </option>

			  <?php echo $div;
			}
		}
		?>
	</select>

</p>
<br>
<p id="price"><span class="style3">Price: &nbsp;&nbsp;&nbsp;&nbsp;</span>

  &nbsp;</p>
  <p >&nbsp;</p>

<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submits" value="Reserve Movie" type="submit">
</p>
                        </form>
</div>

                    </div>
			<div>
		<div class="footer">
		<h6>Disclaimer : </h6>
		<p class="claim">All content of this website belong to NewCinema.</p>
		<a href="contact.html">Contact US</a>
		<div class="copyright">
		</div>
	</div>	
	</div>
	</div>
	<div class="clearfix"></div>
</body>
</html>
 <?php } 
?>