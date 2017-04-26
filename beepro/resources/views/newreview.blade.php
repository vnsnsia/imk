@extends('master')
@section('content')

<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">Make Up</li>
			<li class="active">Face</li>
		</ol>
	</div>
</div>
<!-- //breadcrumbs -->


<!-- REVIEW -->
	<div class="register">
		<div class="container">
			<h2>New Review</h2>
			<div class="login-form-grids">
				<h5>Judul</h5>
				<form action="#" method="post">
				<a href="{{url('')}}/single">
					<input type="text" placeholder="Judul" required="" >
						<br><b>Review</b> <br><textarea name="Message" placeholder="What I think about the product..." required=""></textarea><br>
						<br><b>Tempat Belanja</b> <br><input type="text" placeholder="Tempat belanja" required=" " >
						<br><b>Harga</b> <br>
						<input type="text" placeholder="Harga" required=" " >
						<br><b>Hashtag</b> (separated by spaces) <br>
						<div id="id01"> <input type="text" placeholder="Hashtag" required=" " > </div>
						<br>
						<script type="text/javascript">
						var a = document.getElementById('id01');
						a.addEventListener('keydown', addHash, false);

						function addHash(event) {
						    if (event.keyCode === 32 && event.target.value.length) {
						        event.preventDefault();

						        var elem = event.target,
						            val = elem.value;

						        if (val.slice(-1) !== '#') {
						            elem.value += ' #';
						        }
						    } else if (!event.target.value.length) {
						        if (event.keyCode === 32) {
						            event.preventDefault();
						        }
						        event.target.value = '#';
						    }
						}
						</script>

						<label class="control-label">Upload Foto</label>
						<input id="input-1" type="file" class="file">
					
					<input type="submit" value="Publish">
					</a>
				</form>
			</div>
			<div class="register-home">
				<a href="index.html">Home</a>
			</div>
		</div>
	</div>

<div class="col-md-6 w3_agileits_contact_grid_right">
				<h2 class="w3_agile_header">Leave a<span> Message</span></h2>

				<form action="#" method="post">
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-25" name="Name" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">Your Name</span>
						</label>
					</span>
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="email" id="input-26" name="Email" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-26">
							<span class="input__label-content input__label-content--ichiro">Your Email</span>
						</label>
					</span>
					<textarea name="Message" placeholder="Your message here..." required=""></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>

<!-- //register -->



<!-- //footer -->
<div class="footer">
	<div class="container">
		<div class="w3_footer_grids">
			<div class="col-md-3 w3_footer_grid">
				<h3>Contact</h3>

				<ul class="address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Surabaya, <span>Indonesia.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:beepro@indo.com">beepro@indo.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Information</h3>
				<ul class="info"> 
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contact Us</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.html">FAQ's</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Profile</h3>
				<ul class="info"> 
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Login</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Create Account</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!--footer-->

	<div class="footer-copy">

		<div class="container">
			<p>© 2017 Bee-Pro. All rights reserved</p>
		</div>
	</div>

</div>	
<div class="footer-botm">
	<div class="container">
		<div class="w3layouts-foot">
			<ul>
				<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>

		<!-- main slider-banner -->
		@endsection