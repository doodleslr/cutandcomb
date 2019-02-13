<!DOCTYPE html>
<html>
    <head>
        <title>Cut and Comb Hairdressing West Ryde - About Us</title>
        <?php include 'modules/head.php'; ?>
    </head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target="#min-menu-collapsed" id="menu">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
        </button>
		<div class="navbar-header">
			<img src="images/LOGO.png" alt="Cut and Comb Logo" id="hide-logo-alt"/>
		</div><!--navbar end-->
      
	  <div id="main-menu-hide"><!--desktop menu-->
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
		  <li id="current"><a id="selected" href="#home">About Us</a></li>
		  <li><a href="services.php">Services</a></li>
		</ul>
		<ul class="nav navbar-nav" id="nav-align-R">
		  <li><a href="products.php">Products</a></li>
		  <li><a href="gallery.php">Gallery</a></li>
		  <li><a href="reviews.php">Reviews</a></li>
        </ul>
		<div>
			<img src="images/LOGO.png" alt="Cut and Comb Logo" id="hide-logo" href="index.php"/>
		</div>
      </div><!--end desktop menu-->
	  
	  <div class="collapse navbar-collapse" id="min-menu-collapsed"><!--mobile menu-->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
		  <li id="mobile-current"><a id="selected" href="#home">About Us</a></li>
		  <li><a href="services.php">Services</a></li>
		  <li><a href="products.php">Products</a></li>
		  <li><a href="gallery.php">Gallery</a></li>
		  <li><a href="reviews.php">Reviews</a></li>
        </ul>
      </div><!--end mobile menu-->
    </div><!--container end-->
</nav>

<?php include 'modules/img-carousel.php'; ?>

<div class="wrapper container">
	<div class="col-sm-10 col-sm-offset-1 col-xs-12">
		<h2 class="textTitle">About Us</h2>
		<div class="container">
			<div class="abtSplit box-shadow">
				<div class="slide" data-ride="carousel" id="img-carousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/people/cg1.jpg" alt="Cut and Comb Hairdressing West Ryde Staff"/>
						</div>
						<div class="item">
							<img src="images/people/cl1.jpg" alt="Cut and Comb Hairdressing West Ryde Staff">
						</div>
						<div class="item">
							<img src="images/people/cg2.jpg" alt="Cut and Comb Hairdressing West Ryde Staff">
						</div>
						<div class="item">
							<img src="images/people/cl2.jpg" alt="Cut and Comb Hairdressing West Ryde Staff">
						</div>
						<div class="item">
							<img src="images/people/cg3.jpg" alt="Cut and Comb Hairdressing West Ryde Staff">
						</div>
					</div>
				</div>
			</div>
			<div class="abtUs">
				<p>Owned by Guy and Carl La Rocca, Cut and Comb has been operating for 40 years in West Ryde. After opening their salon in 1977 Guy and Carl worked hard to develop Cut and Comb and after a few years, they had the opportunity to relocate to a new shopfront, luckily only one street away which is where they are now.<br>West Ryde, along with the rest of Sydney has changed beyond recognition but Cut and Comb has remained throughout it all.<span class="hide-me"><br>Guy and Carl La Rocca with their stylists Claire and Levon at Cut and Comb have long developed a good-natured, charming and enjoyable atmosphere.</span></p>
			</div>
		</div><!--end container-->
		<div class="container" style="text-align: center; padding: 25px 0px;">
			<div class="col-md-3 col-xs-6">
				<p><span class="textGrand">Northern District Local Business Awards </span><br><i class="light-text">Finalist 2018</i></p>
				<span class="cc-trophy"></span>
			</div>
			<div class="col-md-3 col-xs-6">
				<p><span class="textGrand">Northern District Local Business Awards </span><br><i class="light-text">Finalist 2016</i></p>
				<span class="cc-trophy"></span>
			</div>
			<div class="col-md-3 col-xs-6">
				<p><span class="textGrand">Northern District Local Business Awards </span><br><i class="light-text">Finalist 2015</i></p>
				<span class="cc-trophy"></span>
			</div>
			<div class="col-md-3 col-xs-6">
				<p><span class="textGrand">Northern District Local Business Awards </span><br><i class="light-text">Finalist 2013</i></p>
				<span class="cc-trophy"></span>
			</div>
		</div>
		
		<?php include 'modules/quote-carousel.php'; ?>
		
	</div>
</div><!--end wrapper-->

	<?php include 'footer.php'; ?>

</body>
</html>