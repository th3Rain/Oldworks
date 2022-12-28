<!DOCTYPE HTML>
<html>
<head>
<title>NewCinema Login / Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="NewCinema Sign In, Sigh up, Login Register">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<div class="agileinfo-dot">
<!--background-->
<!-- login -->
    <a style="float: right; width: 300px; border: 3px solid #3399ff; padding: 0px; margin: 0px;" href="../index.php" class="one-w3ls">Return Home</a>
<h1>NewCinema Login / Register</h1> 
		<div class="login-section">
	        <div class="login-w3l">	
							<h2 class="sub-head-w3-agileits">Sign in</h2>	
						<div class="login-form">			
							<form action="account.php" method="post">
								<input type="text" class="user" name="username" placeholder="Username" required="" />
								<input type="password" class="lock" name="password" placeholder="Password" required="" />
								<div class="signin-rit">
									<span class="checkbox1">
										<label class="checkbox"><input type="checkbox" name="checkbox" checked="">Remember me</label>
									</span>
									<a class="forgot" href="#">Forgot Password?</a>
								<div class="clear"> </div>
								</div>
								<input type="submit" value="Sign in">
							</form>	
							<p>Don't have an account?<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog"> Sign up</a></p>
						</div>
			<!-- //login -->
					<div class="clear"></div>
				</div> 
				<div class="profile-agileits bg-color-agile">
					<div class="profile-pic wthree">
						<img src="images/prof.png" alt="Image">
					</div>
					<div class="follow-grids-agileits-w3layouts">
					<div class="profile-ser-grids">
						<h3>Following</h3>
						<h4>125</h4>
					</div>
					<div class="profile-ser-grids agileinfo">
						<h3>Followers</h3>
						<h4>85</h4>
					</div>
					<div class="profile-ser-grids no-border">
						<h3>Uploaded</h3>
						<h4>210</h4>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="profile-btm-w3-agileits">
					<div class="profile-grid">
						<img src="images/p2.png" alt="Image">
						<div class="profile-info-w3layouts">
							<h4>NewCinema Movies</h4>
							<p><i class="fa fa-map-marker" aria-hidden="true"></i>Facebook</p>
							<a href="http://facebook.com/NewCinema" class="one-w3ls">Like</a><a href="http://facebook.com/NewCinema">message</a>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="profile-grid">
						<img src="images/p1.png" alt="Image">
						<div class="profile-info-w3layouts">
							<h4>@NewCinema</h4>
							<p><i class="fa fa-map-marker" aria-hidden="true"></i>Twitter</p>
							<a href="http://twitter.com/NewCinema" class="one-w3ls">Follow</a><a href="http://twitter.com/NewCinema">Tweets</a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				</div>
				
			<div class="clear"></div>
			</div>	
			<p class="footer">© 2017 NewCinema Online</p>
			<!--//login-->
			<div class="pop-up"> 
	<div id="small-dialog" class="mfp-hide book-form">
		<h3 class="sub-head-w3-agileits">Sign Up</h3>
			<form action="register.php" method="post">
				<input type="text" name="Name" placeholder="Full name" required=""/>
				<input type="text" name="username" placeholder="Username" required=""/>
				<input type="email" name="Email" class="email" placeholder="Email" required=""/>
				<input type="password" name="Password" class="password" placeholder="Password" required=""/> <?php if(isset($msg)){  // Check if $msg is not empty
        echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
    }  ?>
				<input type="password" name="RePassword" class="password" placeholder="Confirm Password" required=""/>					
				<input type="submit" name="submit" value="Sign Up">
			</form>
	</div>
</div>	
</div>
<!--js-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--//js-->
<!--popup-js-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>
<!--//popup-js-->

</body>
</html>