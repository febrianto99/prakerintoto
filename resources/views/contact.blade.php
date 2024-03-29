<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Ednews</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
	
	<link href="fonts/ionicons.css" rel="stylesheet">
	
		
	<link href="common/styles.css" rel="stylesheet">
	
	
</head>
<body>
	
	<header>
		<div class="top-header">
			<div class="container">	
				<div class="oflow-hidden font-9 text-sm-center ptb-sm-5">
				
					<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10 list-a-ptb-xs-5">
						<li><a class="pl-0 pl-sm-10" href="#">Stockholm, Sweden
							<i class="ion-android-cloud-outline"></i> 15 &#8451;</a></li>
						<li><a href="#">Thursda, 24 May, 2018</a></li>
						<li><a href="#">09:00 AM</a></li>
					</ul>
					<ul class="float-right float-sm-none font-13 list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5 color-ash">
						<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
						<li><a href="#"><i class="ion-social-google"></i></a></li>
						<li><a href="#"><i class="ion-social-rss"></i></a></li>
					</ul>
					
				</div><!-- top-menu -->
			</div><!-- container -->
		</div><!-- top-header -->
		
		<div class="middle-header mtb-20 mt-xs-0">
			<div class="container">	
				<div class="row">
				
					<div class="col-sm-4">
						<a class="logo" href="#"><img src="images/logo-black.png" alt="Logo"></a>
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-8">
						<!-- Bannner bg -->
						<div class="banner-area dplay-tbl plr-30 plr-md-10 color-white">
							<div class="ptb-sm-15 dplay-tbl-cell">
								<h5>realestate.com.au</h5>
								<h6>Discover the latest properties of australia</h6>
							</div><!-- left-area -->
							
							<div class="dplay-tbl-cell text-right min-w-100x">
								<a class="btn-fill-white btn-b-sm plr-10" href="#">READ MORE</a>
							</div><!-- right-area -->
						</div><!-- banner-area -->
					</div><!-- col-sm-4 -->
					
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- top-header -->
		
		<div class="bottom-menu">
        <div class="container">
            
            <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
            
            <ul class="main-menu" id="main-menu">
            <li><a href="{{url('/')}}">HOME</li></a>
            <li><a href="{{url('categories')}}">CATEGORIES</li></a>
            <li><a href="{{url('singlepost')}}">SINGLE POST</li></a>
            <li><a href="{{url('typography')}}">TYPOGRAPHY</li></a>
            <li><a href="{{url('contact')}}">CONTACT</li></a>
</header>
	
	
	<!-- START OF MAIN SLIDER -->
	<section class="bg-primary p-0 pb-xs-20">
		<div class="container">
			<div class="row  ptb-10">
				<div class="col-md-8 col-lg-9">
					<a class="btn-fill-red plr-10 mtb-10 btn-b-md" href="#"><b>BREAKING NEWS</b></a>
					<a class="dplay-inl-block color-grey mtb-10 ml-15 ml-md-0 hover-grey" href="#">8:30 AM Eight People 
						have died and violent protest involving tens of thousands...</a>
				</div><!-- col-md-8 -->
				<div class="col-md-4 col-lg-3">
					<form class="abs-form mtb-10">
						<input type="text" placeholder="Search">
						<button type="submit"><i class="ion-ios-search"></i></button>
					</form>
				</div><!-- col-md-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section>
	<!-- END OF MAIN SLIDER -->
	

	<section class="pt-30 pb-0">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-12">
					
					<div class="ptb-0">
						<a class="mt-10" href="#"><i class="mr-5 ion-ios-home"></i><b>HOME</b></a>
						<a class="mt-10" href="#"><i class="mlr-10 ion-chevron-right"></i><b>FEATURED</b></a>
						<a class="mt-10 color-ash" href="#"><i class="mlr-10 ion-chevron-right"></i><b>CONTACT</b></a>
					</div>
					
					<div class="p-30 mtb-30 card-view">
						<div class="map-section">
							<div id="map" style="height:400px;width: 100%"></div>
							
							
							
						</div><!-- map-section -->
							
					</div><!-- card-view -->
				</div><!-- col-sm-12 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>
	

	<section class="pt-0 pb-20">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div class="p-30 mb-30 card-view">
						<h4 class="p-title"><b>GET IN TOUCH</b></h4>
						<form>
							<div class="row">
								<div class="col-sm-6">
									<input class="mb-30" type="text" placeholder="Your name">
								</div><!-- col-sm-6 -->
								<div class="col-sm-6">
									<input class="mb-30" type="text" placeholder="Your email">
								</div><!-- col-sm-6 -->
								<div class="col-sm-12">
									<textarea class="mb-30" placeholder="Your message"></textarea>
								</div><!-- col-sm-12 -->
								
							</div><!-- row -->
							<a class="btn-fill-primary plr-20" href="#"><b>SUBMIT NOW</b></a>
						</form>
					</div><!-- card-view -->
				</div><!-- col-sm-12 -->
				<div class="col-md-12 col-lg-4">
					
					<div class="p-30 mb-30 card-view">
						<h4 class="p-title"><b>OUR OFFICE</b></h4>
						<ul class="list-contact list-li-mb-20">
							<li><i class="ion-ios-home"></i>SE 3019, Johanesberg, Stocklholm,SE</li>
							<li><a href="#"><i class="ion-ios-telephone"></i>(+88)223-34324-5252</a></li>
							<li><a href="#"><i class="ion-email"></i>Support@ednews.com</a></li>
							<li class="mb-0"><a href="#"><i class="ion-ios-world"></i>www.ednews.com</a></li>
						</ul>
					</div><!-- card-view -->
				</div><!-- col-sm-12 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>
	
	
	<footer class="bg-191 pos-relative color-ccc bg-primary pt-50">
		<div class="abs-tblr pt-50 z--1 text-center">
			<div class="h-80 pos-relative"><div class="bg-map abs-tblr opacty-1"></div></div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-4">	
					<h5 class="f-title"><b>QUICK LINKS</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
						<li><a href="#">Home Delivery</a></li>
						<li><a href="#">User Permissions</a></li>
						<li><a href="#">Download Apps</a></li>
						<li><a href="#">Newsletters</a></li>
						<li><a href="#">Subscriptions</a></li>
						<li><a href="#">Online Store</a></li>
					</ul>
				</div><!-- col-sm-2 -->
				
				<div class="col-lg-4 col-md-8 col-sm-8">	
					<div class="pl-10 pl-sm-0">	
						<h5 class="f-title"><b>FEATURED VIDEO</b></h5>
						
						<div class="sided-80x mb-30">
							<a class="s-left" href="#">
								<img src="images/video-1-300x300.jpg" alt="">
								<div class="hover-video sm"><span class="icon"><i class="ion-play"></i></span></div>
							</a><!-- s-left -->
							
							<div class="s-right pl-10 mb-30 ">
								<h5><a href="#"><b>Dan carter rolls back years while pro dominance leaves Englands</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-ash">
									<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
									<li><i class="mr-5 font-12 ion-eye"></i>105</li>
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						
						<div class="sided-80x mb-30">
							<a class="s-left" href="#">
								<img src="images/video-2-300x300.jpg" alt="">
								<div class="hover-video sm"><span class="icon"><i class="ion-play"></i></span></div>
							</a><!-- s-left -->
							
							<div class="s-right pl-10 mb-30 ">
								<h5><a href="#"><b>Dan carter rolls back years while pro dominance...</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-ash">
									<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
									<li><i class="mr-5 font-12 ion-eye"></i>105</li>
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
					</div><!-- pl-10 -->
				</div><!-- col-sm-4 -->
				
				<div class="col-lg-2 col-md-4 col-sm-4">	
					<h5 class="f-title"><b>OUR WORK</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
						<li><a href="#">In the Community</a></li>
						<li><a href="#">Today's Link</a></li>
						<li><a href="#">Our History</a></li>
						<li><a href="#">Our Events</a></li>
						<li><a href="#">Our Studio</a></li>
						<li><a href="#">Career</a></li>
					</ul>
				</div><!-- col-sm-2 -->
				
				<div class="col-lg-4 col-md-8 col-sm-8">		
					<div class="pr-10 pr-sm-0">	
						<h5 class="f-title"><b>RECENT POST</b></h5>
						
						<div class="sided-80x mb-30">
							<a class="s-left" href="#">
								<img src="images/sidebar-news-1-100x100.jpg" alt="">
								<div class="hover-video sm"><span class="icon"><i class="ion-play"></i></span></div>
							</a><!-- s-left -->
							
							<div class="s-right pl-10">
								<h5><a href="#"><b>Dan carter rolls back years while pro dominance...</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-ash">
									<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
									<li><i class="mr-5 font-12 ion-eye"></i>105</li>
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						
						<div class="sided-80x mb-30">
							<a class="s-left" href="#">
								<img src="images/sidebar-news-2-100x100.jpg" alt="">
								<div class="hover-video sm"><span class="icon"><i class="ion-play"></i></span></div>
							</a><!-- s-left -->
							
							<div class="s-right pl-10">
								<h5><a href="#"><b>Josua VS Parker: Worldcup winners and a mascat</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-ash">
									<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
									<li><i class="mr-5 font-12 ion-eye"></i>105</li>
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
					</div><!--pr-10 -->
				</div><!-- col-sm-4 -->
				
			</div><!-- row -->
			
			<div class="mt-20 brdr-ash-1 opacty-4"></div>
			
			<div class="text-center ptb-30">
				<div class="row">
					<div class="col-sm-3">
						<a class="mtb-10" href="#"><img src="images/logo-white.png" alt=""></a>
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-5">
						<p class="mtb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat 
							tincidunt mauris semper lorem</p>
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-4">
						<ul class="mtb-10 font-12 list-radial-35 list-li-mlr-3">
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							<li><a href="#"><i class="ion-social-google"></i></a></li>
							<li><a href="#"><i class="ion-social-rss"></i></a></li>
						</ul>
					</div><!-- col-sm-3 -->
				</div><!-- row -->
			</div><!-- text-center -->
		</div><!-- container -->
		
		<div class="bg-dark-primary ptb-15 text-left">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-12 col-md-6">
						<p class="text-md-center font-9 pt-5 mtb-5"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div><!-- col-sm-3 -->
					
                    <div class="col-sm-12 col-md-6">
                    <ul class="mtb-5 font-11 text-md-center text-right list-a-p-5">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('categories')}}">Categories</a></li>
                        <li><a href="{{url('typography')}}">typography</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                        <li><a href="{{url('singlepost')}}">Single Post</a></li>
                    </ul>
					</div><!-- col-sm-3 -->
				</div><!-- row -->
				
			</div><!-- container -->
		</div><!-- container -->
	</footer>
	
	<!-- SCIPTS -->
	
	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
	
	<script src="plugin-frameworks/tether.min.js"></script>
	
	<script src="plugin-frameworks/bootstrap.js"></script>
	
	<script src="common/scripts.js"></script>
	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Nkl4q13z00Fid3Vh8eOp4mqVlgfcXLA&callback=initMap">
		</script>
</body>
</html>