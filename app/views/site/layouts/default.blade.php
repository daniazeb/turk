<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Laravel 4 Sample Site
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
        <link rel="stylesheet" href="{{asset('assets/css/zocial.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.pink.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
		<link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Merriweather:400,400italic' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style>
        body {
            padding: 60px 0;
        }
		@section('styles')
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

	<body>
			<!-- *** NAVBAR ***
	_________________________________________________________ -->

	<div class="navbar navbar-default navbar-fixed-top yamm" role="navigation" id="navbar">

	    <div class="container">
		<div class="navbar-header">

		   		    <div class="navbar-buttons">
			<button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#navigation">
			    <span class="sr-only">Toggle navigation</span>
			    <i class="fa fa-align-justify"></i>
			</button>
			<button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#search">
			    <span class="sr-only">Toggle search</span>
			    <i class="fa fa-search"></i>
			</button>
			<a class="btn btn-primary navbar-toggle" href="basket.html">
			    <i class="fa fa-shopping-cart"></i> <span class="hidden-xs">3 items in cart</span>
			</a>
		    </div>
		</div> <!--/.navbar-header -->

		<div class="navbar-collapse collapse"  id="navigation">

		    <ul class="nav navbar-nav navbar-left">
			<li class="active"><a href="index.html">Home</a></li>
			<li class="dropdown yamm-fw">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<b class="caret"></b></a>
			    <ul class="dropdown-menu">

				<li>
				    <div class="yamm-content">
					<div class="row">
					    <div class="col-sm-3">
						<img src="{{asset('assets/img/men.jpg')}}" class="img-responsive hidden-xs" alt="">
					    </div>
					    <div class="col-sm-3">
						<h3>Clothing</h3>
						<ul>
						    <li><a href="category.html">T-shirts</a></li>
						    <li><a href="category.html">Shirts</a></li>
						    <li><a href="category.html">Pants</a></li>
						    <li><a href="category.html">Accessories</a></li>
						</ul>
					    </div>
					    <div class="col-sm-3">
						<h3>Clothing</h3>
						<ul>
						    <li><a href="category.html">T-shirts</a></li>
						    <li><a href="category.html">Shirts</a></li>
						    <li><a href="category.html">Pants</a></li>
						    <li><a href="category.html">Accessories</a></li>
						</ul>
					    </div>
					    <div class="col-sm-3">
						<h3>Shoes</h3>
						<ul>
						    <li><a href="category.html">Trainers</a></li>
						    <li><a href="category.html">Sandals</a></li>
						    <li><a href="category.html">Hiking shoes</a></li>
						    <li><a href="category.html">Casual</a></li>
						</ul>
					    </div>
					</div>
				    </div>
				    <div class="footer clearfix hidden-xs">
					<h4 class="pull-right">Men</h4>
					<div class="buttons pull-left">
					    <a href="#" class="btn btn-default"><i class="fa fa-tags"></i> Sales</a>
					    <a href="#" class="btn btn-default"><i class="fa fa-star-o"></i> Favourites</a>
					    <a href="#" class="btn btn-default"><i class="fa fa-globe"></i> Brands</a>
					</div>
				    </div>

				</li>
			    </ul>
			</li>
			<li class="dropdown yamm-fw">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <b class="caret"></b></a>
			    <ul class="dropdown-menu">

				<li>
				    <div class="yamm-content">
					<div class="row">
					    <div class="col-sm-3">
						<img src="{{asset('assets/img/women.jpg')}}" class="img-responsive hidden-xs" alt="">
					    </div>{{asset('assets/js/front.js')}}
					    <div class="col-sm-3">
						<h3>Clothing</h3>
						<ul>
						    <li><a href="category.html">T-shirts</a></li>
						    <li><a href="category.html">Shirts</a></li>
						    <li><a href="category.html">Pants</a></li>
						    <li><a href="category.html">Accessories</a></li>
						</ul>
					    </div>
					    <div class="col-sm-3">
						<h3>Clothing</h3>
						<ul>
						    <li><a href="category.html">T-shirts</a></li>
						    <li><a href="category.html">Shirts</a></li>
						    <li><a href="category.html">Pants</a></li>
						    <li><a href="category.html">Accessories</a></li>
						</ul>
					    </div>
					    <div class="col-sm-3">
						<h3>Shoes</h3>
						<ul>
						    <li><a href="category.html">Trainers</a></li>
						    <li><a href="category.html">Sandals</a></li>
						    <li><a href="category.html">Hiking shoes</a></li>
						    <li><a href="category.html">Casual</a></li>
						</ul>
					    </div>
					</div>
				    </div>
				    <div class="footer clearfix hidden-xs">
					<h4 class="pull-right">Women</h4>
					<div class="buttons pull-left">
					    <a href="#" class="btn btn-default"><i class="fa fa-tags"></i> Sales</a>
					    <a href="#" class="btn btn-default"><i class="fa fa-star-o"></i> Favourites</a>
					    <a href="#" class="btn btn-default"><i class="fa fa-globe"></i> Brands</a>
					</div>
				    </div>

				</li>
			    </ul>
			</li>			
			<!--<li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages included <b class="caret"></b></a>
			    <ul class="dropdown-menu">
				<li><a href="index.html">Homepage</a></li>
				<li><a href="index2.html">Homepage with slider</a></li>
				<li><a href="category.html">Category page</a></li>
				<li><a href="detail.html">Product detail</a></li>
				<li class="divider"></li>
				<li><a href="basket.html">Shopping cart</a></li>
				<li><a href="checkout1.html">Checkout (4 pages)</a></li>
				<li class="divider"></li>
				<li><a href="text.html">Text page</a></li>
				<li><a href="contact.html">Contact page</a></li>
				<li><a href="404.html">404 page</a></li>
				<li class="divider"></li>
				<li><a href="blog.html">Blog listing</a></li>
				<li><a href="post.html">Blog post</a></li>

			    </ul>
			</li>-->
			<li><a href="{{{ URL::to('user/login') }}}">Login</a></li>
			<li><a href="{{{ URL::to('user/create') }}}">Register</a></li>

		    </ul>

		</div><!--/.nav-collapse -->

		<div class="navbar-collapse collapse right"  id="basket-overview">
		    <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items <span class="hidden-md">in cart</span></span></a>
		</div><!--/.nav-collapse -->

		<div class="navbar-collapse collapse right"  id="search-not-mobile">
		    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
			<span class="sr-only">Toggle search</span>
			<i class="fa fa-search"></i>
		    </button>
		</div>

		<div class="collapse clearfix" id="search">

		    <form class="navbar-form" role="search">
			<div class="input-group">
			    <input type="text" class="form-control" placeholder="Search">
			    <span class="input-group-btn">
				<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
			    </span>
			</div>
		    </form>

		</div><!--/.nav-collapse -->	

	    </div>


	</div><!-- /#navbar -->

	<!-- *** NAVBAR END *** -->




	<!-- *** INTRO IMAGE ***
	_________________________________________________________ -->
	<!--<div id="intro">
	    <div class="item">
		<div class="container">
		    <div class="row">
			<div class="carousel-caption">
			    <h1>Welcome to Minimal<br>E-commerce Template</h1>
			    <h3>This template contains 14 precisely crafted HTML templates, has great typography, is SEO friendly and 100% responsive.</h3>

			    <p><a class="btn btn-lg btn-primary scroll-to" href="#content" role="button">View our top picks<br class="hidden-md hidden-lg"> for this week</a></p>
			    <p><a class="btn btn-lg btn-default" href="index2.html" role="button">View alternative homepage</a></p>
			</div>
		    </div>
		</div>
	    </div>
	</div>	
-->
	<!-- *** INTRO IMAGE END *** -->

	<div id="all">

	    <!-- *** ADVANTAGES ***
	    _________________________________________________________ -->

	    <div id="advantages">

		<div class="container">

		    <div class="col-md-12">

			<div class="box text-center">
			    <h3 class="text-uppercase">About Minimal</h3>

			    <p>We are <strong>young</strong>, we are <strong>creative</strong> and we really like the products we sell. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

			    <div class="same-height-row row">
				<div class="col-sm-3">
				    <div class="box same-height clickable no-border text-center-xs text-center-sm">
					<div class="icon"><i class="fa fa-heart-o"></i></div>
					<h4><a href="text.html">Satisfied customers</a></h4>
				    </div>
				</div>

				<div class="col-sm-3">
				    <div class="box same-height clickable no-border text-center-xs text-center-sm">
					<div class="icon"><i class="fa fa-tags"></i></div>
					<h4><a href="text.html">Best prices</a></h4>
				    </div>
				</div>

				<div class="col-sm-3">
				    <div class="box same-height clickable no-border text-center-xs text-center-sm">
					<div class="icon"><i class="fa fa-send-o"></i></div>
					<h4><a href="text.html">Next day delivery</a></h4>
				    </div>
				</div>

				<div class="col-sm-3">
				    <div class="box same-height clickable no-border text-center-xs text-center-sm">
					<div class="icon"><i class="fa fa-refresh"></i></div>
					<h4><a href="text.html">Free returns for 3 months</a></h4>
				    </div>
				</div>			
			    </div> <!-- /.row -->			

			</div>

		    </div>


		</div> <!-- /.container -->

	    </div> <!-- /#advantages -->

	    <!-- *** ADVANTAGES END *** -->


	    <!-- *** CONTENT ***
	    _________________________________________________________
	    _________________________________________________________
	    -->

	    <div id="content">
		<div class="container">

		    <div class="col-sm-12">

			<div class="box text-center">
			    <h3 class="text-uppercase">New summer arrivals</h3>

			    <h4 class="text-muted"><span class="accent">Free shipping</span> on all</h4>
			</div>

			<div class="row products">

			    <div class="col-md-3 col-sm-4">
				<div class="product">
				    <div class="image">
					<a href="detail.html">
					    <img src="{{asset('assets/img/product1.jpg')}}" alt="" class="img-responsive image1" >
					</a>
				    </div><!-- /.image -->
				    <div class="text">
					<h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
					<p class="price">$143.00</p>

				    </div><!-- /.text -->

				    <p class="buttons">
					<a href="detail.html" class="btn btn-default">View detail</a>
					<a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </p>
				</div> <!-- /.product -->
			    </div> 

			    <div class="col-md-3 col-sm-4">
				<div class="product">
				    <div class="image">
					<a href="detail.html">
					    <img src="{{asset('assets/img/product2.jpg')}}" alt="" class="img-responsive image1" >
					</a>
				    </div><!-- /.image -->
				    <div class="text">
					<h3><a href="detail.html">White Blouse Armani</a></h3>
					<p class="price"><del>$280</del> $143.00</p>

				    </div><!-- /.text -->
				    <p class="buttons">
					<a href="detail.html" class="btn btn-default">View detail</a>
					<a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </p>
				    <div class="ribbon sale">
					<div class="theribbon">SALE</div>
					<div class="ribbon-background"></div>
				    </div><!-- /.ribbon -->

				    <div class="ribbon new">
					<div class="theribbon">NEW</div>
					<div class="ribbon-background"></div>
				    </div><!-- /.ribbon -->

				    <div class="ribbon gift">
					<div class="theribbon">GIFT</div>
					<div class="ribbon-background"></div>
				    </div><!-- /.ribbon -->				    
				</div> <!-- /.product -->
			    </div> 

			    <div class="col-md-3 col-sm-4">
				<div class="product">
				    <div class="image">
					<a href="detail.html">
					    <img src="{{asset('assets/img/product3.jpg')}}" alt="" class="img-responsive image1" >
					</a>
				    </div><!-- /.image -->
				    <div class="text">
					<h3><a href="detail.html">Black Blouse Versace</a></h3>
					<p class="price">$143.00</p>


				    </div><!-- /.text -->

				    <p class="buttons">
					<a href="detail.html" class="btn btn-default">View detail</a>
					<a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </p>
				</div> <!-- /.product -->
			    </div> 

			    <div class="col-md-3 col-sm-4">
				<div class="product">
				    <div class="image">
					<a href="detail.html">
					    <img src="{{asset('assets/img/product1.jpg')}}" alt="" class="img-responsive image1" >
					</a>
				    </div><!-- /.image -->
				    <div class="text">
					<h3><a href="detail.html">Black Blouse Versace</a></h3>
					<p class="price">$143.00</p>


				    </div><!-- /.text -->

				    <p class="buttons">
					<a href="detail.html" class="btn btn-default">View detail</a>
					<a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </p>
				</div> <!-- /.product -->
			    </div> 

			    <div class="col-md-3 col-sm-4">
				<div class="product">
				    <div class="image">
					<a href="detail.html">
					    <img src="{{asset('assets/img/product2.jpg')}}" alt="" class="img-responsive image1" >
					</a>
				    </div><!-- /.image -->
				    <div class="text">
					<h3><a href="detail.html">White Blouse Versace</a></h3>
					<p class="price">$143.00</p>

				    </div><!-- /.text -->

				    <p class="buttons">
					<a href="detail.html" class="btn btn-default">View detail</a>
					<a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </p>

				    <div class="ribbon new">
					<div class="theribbon">NEW</div>
					<div class="ribbon-background"></div>
				    </div><!-- /.ribbon -->				    
				</div> <!-- /.product -->
			    </div> 

			    <div class="col-md-3 col-sm-4">
				<div class="product">
				    <div class="image">
					<a href="detail.html">
					    <img src="{{asset('assets/img/product1.jpg')}}" alt="" class="img-responsive image1" >
					</a>
				    </div><!-- /.image -->
				    <div class="text">
					<h3><a href="detail.html">Fur coat</a></h3>
					<p class="price">$143.00</p>


				    </div><!-- /.text -->

				    <p class="buttons">
					<a href="detail.html" class="btn btn-default">View detail</a>
					<a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </p>

				    <div class="ribbon gift">
					<div class="theribbon">GIFT</div>
					<div class="ribbon-background"></div>
				    </div><!-- /.ribbon -->					    

				</div> <!-- /.product -->
			    </div> <!-- /.col-md-4 -->

			    <div class="col-md-3 col-sm-4">
				<div class="product">
				    <div class="image">
					<a href="detail.html">
					    <img src="{{asset('assets/img/product2.jpg')}}" alt="" class="img-responsive image1" >
					</a>
				    </div><!-- /.image -->
				    <div class="text">
					<h3><a href="detail.html">White Blouse Versace</a></h3>
					<p class="price">$143.00</p>

				    </div><!-- /.text -->

				    <p class="buttons">
					<a href="detail.html" class="btn btn-default">View detail</a>
					<a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </p>

				    <div class="ribbon sale">
					<div class="theribbon">SALE</div>
					<div class="ribbon-background"></div>
				    </div><!-- /.ribbon -->				    
				</div> <!-- /.product -->
			    </div> 

			    <div class="col-md-3 col-sm-4">
				<div class="product">
				    <div class="image">
					<a href="detail.html">
					    <img src="{{asset('assets/img/product1.jpg')}}" alt="" class="img-responsive image1" >
					</a>
				    </div><!-- /.image -->
				    <div class="text">
					<h3><a href="detail.html">Fur coat</a></h3>
					<p class="price">$143.00</p>


				    </div><!-- /.text -->

				    <p class="buttons">
					<a href="detail.html" class="btn btn-default">View detail</a>
					<a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </p>

				</div> <!-- /.product -->
			    </div> <!-- /.col-md-4 -->			    
			</div><!-- /.products -->

			<!-- *** BLOG HOMEPAGE ***
			_________________________________________________________ -->

			<div class="box text-center">
			    <h3 class="text-uppercase">From our blog</h3>

			    <p class="text-italic text-large">What's new in the world of fashion? <span class="accent">Check our blog!</span></p>
			</div>		

			<div id="blog-homepage" class="row">
			    <div class="col-sm-6">
				<div class="post">
				    <h4><a href="post.html">Fashion now</a></h4>
				    <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a></p>
				    <hr>
				    <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				    <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
				</div>
			    </div>

			    <div class="col-sm-6">
				<div class="post">
				    <h4><a href="post.html">Who is who - example blog post</a></h4>
				    <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a></p>
				    <hr>
				    <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				    <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
				</div>

			    </div>

			</div> <!-- /#blog-homepage -->

			<!-- *** BLOG HOMEPAGE END *** -->

		    </div> <!-- /.col-sm-12 -->
		</div> <!-- /.container -->
	    </div> <!-- /#content -->


	    <!-- *** FOOTER ***
	    _________________________________________________________ -->

	    <div id="footer">
		<div class="container">
		    <div class="col-md-3 col-sm-6">
			<h4>Pages</h4>

			<ul>
			    <li><a href="text.html">About us</a></li>
			    <li><a href="text.html">Terms and conditions</a></li>
			    <li><a href="text.html">FAQ</a></li>
			    <li><a href="contact.html">Contact us</a></li>
			</ul>

			<hr>

			<h4>User section</h4>

			<ul>
			    <li><a href="#">Login</a></li>
			    <li><a href="#">Regiter</a></li>
			</ul>			

			<hr class="hidden-md hidden-lg hidden-sm">

		    </div><!-- /.col-md-3 -->

		    <div class="col-md-3 col-sm-6">

			<h4>Top categories</h4>

			<h5>Men</h5>

			<ul>
			    <li><a href="category.html">T-shirts</a></li>
			    <li><a href="category.html">Shirts</a></li>
			    <li><a href="category.html">Accessories</a></li>
			</ul>

			<h5>Ladies</h5>
			<ul>
			    <li><a href="category.html">T-shirts</a></li>
			    <li><a href="category.html">Skirts</a></li>
			    <li><a href="category.html">Pants</a></li>
			    <li><a href="category.html">Accessories</a></li>
			</ul>

			<hr class="hidden-md hidden-lg">

		    </div><!-- /.col-md-3 -->

		    <div class="col-md-3 col-sm-6">

			<h4>Where to find us</h4>

			<p><strong>Obaju Ltd.</strong>
			    <br>13/25 New Avenue<br>
			    New Heaven<br>
			    45Y 73J<br>
			    England<br>
			    <strong>Great Britain</strong></p>		

			<a href="contact.html">Go to contact page</a>

			<hr class="hidden-md hidden-lg hidden-sm">

		    </div><!-- /.col-md-3 -->



		    <div class="col-md-3 col-sm-6">

			<h4>Get the news</h4>

			<p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

			<form>
			    <div class="input-group">

				<input type="text" class="form-control">

				<span class="input-group-btn">
				    <button class="btn btn-default" type="button">Subscribe!</button>
				</span>

			    </div><!-- /input-group -->
			</form>

			<hr>

			<h4>Stay in touch</h4>

			<p class="social">
			    <a href="#"><i class="fa fa-facebook-square"></i></a>
			    <a href="#"><i class="fa fa-instagram"></i></a>
			    <a href="#"><i class="fa fa-google-plus"></i></a>
			    <a href="#"><i class="fa fa-envelope"></i></a>
			</p>


		    </div><!-- /.col-md-3 -->
		</div><!-- /.container -->
	    </div> <!-- /#footer -->

	    <!-- *** FOOTER END *** -->



	    <!-- *** COPYRIGHT ***
	    _________________________________________________________ -->

	    <div id="copyright">
		<div class="container">
		    <div class="col-md-12">
			<p class="pull-left">© 2014 MINIMAL All Rights Reserved.</p>
			<p class="pull-right">Minimal is responsive template by Ondrej Svestka aka ondrique.</p>
		    </div>
		</div>
	    </div> <!-- /#copyright -->

	    <!-- *** COPYRIGHT END *** -->



	   
	
	</div> <!-- /#all -->
		<!-- Javascripts
		================================================== -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/respond.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.cookie.js')}}"></script>
		<script src="{{asset('assets/js/front.js')}}"></script>

        @yield('scripts')
	</body>
</html>
