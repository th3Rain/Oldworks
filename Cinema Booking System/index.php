<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>NewCinema</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cinema Booking System" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			<div class="menu">
				<ul>
					<li><a class="active" href="index.php"><i class="home"></i></a></li>
					<li><a href="gallery.php"><div class="video"><i class="videos"></i><i class="videos1"></i></div></a></li>
					<li><a href="reviews.html"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="404.html"><div class="bk"><i class="booking"></i><i class="booking1"></i></div></a></li>
					<li><a href="contact.html"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
		<div class="main">
		<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>

				<div> <p style="text-align: right; word-spacing: 15px; font-family: Berlin Sans FB Demi; font-weight:bolder;">
<FONT color="#66FFFF"><?php if(!isset($_SESSION['username'])){ ?>
<a class="b-home" href="account/login.php">LOGIN / REGISTER </a> |
<a class="b-home" href="About.html">ABOUT</a> |
<a class="b-home" href="update.php">LIST</a>&nbsp; <?php } else { ?> 
<a href="#">Logged in as: <?php echo $_SESSION['username']; } ?></a>
<a class="b-home" href ="account/logout.php"> Logout </a>
</p></div></FONT>
				<div class="search">
				
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-info">
				<h1>STAR WARS IX AWAKENING</h1>
				<p class="age"><a href="#">All Age</a> Don Hall, Chris Williams</p>
				<p class="review">Rating	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;  8,5/10</p>
				<p class="review reviewgo">Genre	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; Fiction, Action, Comedy</p>
				<p class="review">Release &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 7 November 2014</p>
				<p class="special">The Jedi War, the Force, Sky Walker, and all those things that makes STAR WAR extra-Ordinary.</p>
				<a class="video" href="#"><i class="video1"></i>WATCH TRAILER</a>
				<a class="book" href="#"><i class="book1"></i>BOOK TICKET</a>
			</div>
		</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			 <img src="" alt=""/>
			 <?php
			 $query = mysqli_query($connection, "SELECT * FROM `upcoming1`") or die(mysqli_error($connection));

			 if (mysqli_num_rows($query)) {
			  while($row = mysqli_fetch_assoc($query)) {
			  	echo $row['image'];
			  ?> <li><img src="<?php echo $row['image']; ?>"</li>;
			  <?php
			  echo"";
			  }
}
			  ?>

		</ul>

			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>
	
		<div class="news">
			<div class="col-md-6 news-left-grid">
				<h3>Don’t be late,</h3>
				<h2>Book your ticket now!</h2>
				<h4>Easy, simple & fast.</h4>
				<a href="#"><i class="book"></i>BOOK TICKET</a>
				<p>Get Discount up to <strong>10%</strong> if you are a member!</p>
			</div>
			<div class="col-md-6 news-right-grid">
				<h3>News</h3>
				<div class="news-grid">
					<h5>GAME OF THRONES 7</h5>
					<label>July 17 2017</label>
					<p>The Most anticipated and most Watched season film of 2016, is now back and better with new casts, locations, and unending excitement. Game Of Thrones Season 7 will be availabe on our cinema for a satisfying cinema experience on the 3rd of August, 2017. Stay tuned, for the Winter is Near!!! </p>
				</div>
				<div class="news-grid">
					<h5>SPIDERMAN HOME COMING 2017</h5>
					<label>July 13 2017</label>
					<p>Peter Parker is back in 2017 with another thrilling and action packed version of the Spiderman series. Watch out as his story unfolds in another dramatical way. HD Graphics packed that the world won't forget in a while. COMING AUGUST 21 ON OUR CINEMA...</p>
				</div>
				<a class="more" href="#">MORE</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="more-reviews">
			 <ul id="flexiselDemo2">
			  <?php
			 $query = mysqli_query($connection, "SELECT * FROM `trending`") or die(mysqli_error($connection));

			 if (mysqli_num_rows($query)) {
			  while($row = mysqli_fetch_assoc($query)) {
			  	echo $row['image'];
			  ?> <li><img src="<?php echo $row['image']; ?>"</li>;
			  <?php
			  echo"";
			  }
}
			  ?>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo2").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>	
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