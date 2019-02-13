<!DOCTYPE html>
<html>
	<head>
		<title>Cut and Comb Hairdressing West Ryde</title>
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
          <li id="current"><a id="selected" href="#home">Home</a></li>
		  <li><a href="aboutus.php">About Us</a></li>
		  <li><a href="services.php">Services</a></li>
		</ul>
		<ul class="nav navbar-nav" id="nav-align-R">
		  <li><a href="products.php">Products</a></li>
		  <li><a href="gallery.php">Gallery</a></li>
		  <li><a href="reviews.php">Reviews</a></li>
        </ul>
		<img src="images/LOGO.png" alt="Cut and Comb Logo" id="hide-logo" href="#home"/>
      </div><!--end desktop menu-->

	  
	  <div class="collapse navbar-collapse" id="min-menu-collapsed"><!--mobile menu-->
        <ul class="nav navbar-nav navbar-right">
          <li id="mobile-current"><a id="selected" href="#home">Home</a></li>
		  <li><a href="aboutus.php">About Us</a></li>
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
        <h2 class="textTitle">Distinguished and Dependable Stylists</h2>
		<div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
		<p style="padding: 20px 0px;">Welcome to Cut and Comb, relax and know you are being taken care of by some of the best. Our team of award winning stylists take the time to acknowledge your desires, help craft the image you require and ensure you find the best hair regime to suit your lifestyle.</p>
		</div>
		<div class="container" style="padding: 20px 0px;">
			<div class="hide-me">
				<div class="splitscreen split-left-creator"></div>
			</div><!--end hide-me-->
			<div class="splitscreen" style="background-image: url(images/bioBG2.jpg);">
				<div class="splitText inset">
					<h3 class="textGrand hr"><i>A true local</i></h3>
					<p>Operating for 40 years in West Ryde, Cut and Comb has always been a place of comfort and quality.</p>
					<a href="aboutus.php" class="textQuote link">Read More</a>
				</div>
			</div>
		</div><!--end container-->
		<div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
			<div class="hide-me">
				<p>We make everyone look their best, be it elegant and classy, or sophisticated and refined.
				<br>Services include signature mens and womens haircutting and hair colouring techniques, exceptional blow waves for volume and body, foiling for multilayered colouring, <a class="textQuote link" href="services.php">and many more.</a></p>
			</div><!--end of hide-me-->
	
			<div class="img-gallery">
		        <div class="row">
		            <div class="col-sm-4 col-xs-8">
		                <a class="lightbox" href="gallery.php">
		                    <img src="images/people/a10.jpg" alt="Cut and Comb Customer Haircut">
		                </a>
		            </div>
		            <div class="col-sm-4 col-xs-4">
		                <a class="lightbox" href="gallery.php">
		                    <img src="images/people/a8.jpg" alt="Cut and Comb Customer Haircut">
		                </a>
		            </div>
		            <div class="col-sm-4 col-xs-4">
		                <a class="lightbox" href="gallery.php">
		                    <img src="images/people/a3.jpg" alt="Cut and Comb Customer Haircut">
		                </a>
		            </div>
					<div class="col-sm-3 col-xs-4">
		                <a class="lightbox" href="gallery.php">
		                    <img src="images/people/a6.jpg" alt="Cut and Comb Customer Haircut">
		                </a>
		            </div>
		            <div class="col-sm-6 col-xs-8 mob-align">
		                <a class="lightbox" href="gallery.php">
		                    <img src="images/people/a5.jpg" alt="Cut and Comb Customer Haircut">
		                </a>
		            </div> 
		            <div class="col-sm-3 col-xs-4">
		                <a class="lightbox" href="gallery.php">
		                    <img src="images/people/a7.jpg" alt="Cut and Comb Customer Haircut">
		                </a>
		            </div>
		        </div>
		    </div><!--end gallery-->
			<div class="quote">
				<h3 class="hrBoth"><i>We don't just cut hair, we believe in looking after it.</i></h3>
			</div>
		</div>
	</div>
</div><!--end wrapper-->

<?php include 'modules/quote-carousel.php'; ?>

<div class="container" style="padding: 20px 15px;;">
	<div class="col-sm-10 col-sm-offset-1 col-xs-12">
		<div class="hide-me">
			<div class="splitscreen split-left-prod"></div>
		</div><!--end hide-me-->
		<div class="splitscreen" style="background-image: url(images/productBG3.jpg);">
			<div class="splitText inset">
				<h3 class="textGrand hr"><i>Products and Supplies</i></h3>
				<p>We work with only the best brands and are proud to provide a cultivated list of styling, cleansing and hair accessory brands.</p>
				<a href="products.php" class="textQuote link">Learn more</a>
			</div>
		</div>
	</div>
</div><!--end products-->

	<?php include 'footer.php'; ?>

</body>
</html>