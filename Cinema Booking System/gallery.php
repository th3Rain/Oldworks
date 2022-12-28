<?php
include "connection.php";
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
<meta name="keywords" content="NewCinema Gallery" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			<div class="menu">
				<ul>
					<li><a href="index.php"><div class="hm"><i class="home1"></i><i class="home2"></i></div></a></li>
					<li><a class="active" href="gallery.php"><div class="video"><i class="videos"></i><i class="videos1"></i></div></a></li>
					<li><a href="reviews.html"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="404.html"><div class="bk"><i class="booking"></i><i class="booking1"></i></div></a></li>
					<li><a href="contact.html"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
		<div class="main">
		<div class="video-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3 class="head">SHOWING THIS WEEK</h3>
					</div>
				</div>
				<!-- pop-up-box --> 
		<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
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

		<!--//pop-up-box -->
		<div class="content-grids">
		<?php
		$rowcount = 1;
			 $query = mysqli_query($connection, "SELECT * FROM `cinema` ORDER BY `cinema`.`No` ASC ") or die(mysqli_error($connection));
			 $div = "";
			 

			 if (mysqli_num_rows($query)) {
			  while($row = mysqli_fetch_assoc($query)) { 
			  if(($rowcount==4) || ($rowcount==8) || ($rowcount==12) || ($rowcount==16) || ($rowcount==20) || ($rowcount==24) || ($rowcount==28)){
			  ?>
			  <div class="content-grid last-grid">;
			  <?php
			  }else{
			  ?>
			  <div class="content-grid">;
			  <?php
			  }
			  ?>
			  
			  <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo $row['image']; ?>"></a>
			  <h3><?php echo $row['title']; ?><br />
			  <?php echo $row['status']. ": ";?>
			  <?php echo $row['date']; ?><br />
			  <?php echo "Price: ". $row['price']; ?><br />
			  

			  
			  
			  </h3>
			  <Form action="booking.php" method="post">
			  	 <input type="text" name="movieId" hidden value = "<?php echo $rowcount; ?>" disabled></input>
			  	<p align="center"><input type="submit" class="button play-icon" value="Book Now" name="submit" onclick="myFunction()"></p>


			  </Form>
			  </div>
					<div id="small-dialog" class="mfp-hide">
						<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
					</div>
			 		<?php
					echo"";
					$rowcount = $rowcount + 1;
			  }
			  }
			  
			  

			  ?>
				
					<div class="clearfix"> </div>
				
					<div class="pagenation">
						<ul>
							<li><a href="upcoming.php">View Upcoming Movies</a></li>
						</ul>
					</div>
					</div>
					<div class="clearfix"> </div>
					
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>	
	<div class="footer">
		<h6>Disclaimer : </h6>
		<p class="claim"></p>
		<a href="contact@NewCinema.com">contact@NewCinema.com</a>
		<div class="copyright">
			<p> NewCinema Online 2017</p>
		</div>
	</div>	
	</div>
	<div class="clearfix"></div>
	</div>
</body>
</html>