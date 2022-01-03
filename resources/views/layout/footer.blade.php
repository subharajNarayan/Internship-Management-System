
<div class="panel-footer" style="background-color: #505254; margin-top: 7px;">
	<div class="container" >
		<div class="row panel-footer-text">
			<div class="col-md-4 web-text">
				<p>We are more than just a job site. From the web, to mobile, to social media tools and apps, we service companies of all sizes to find the right fit using most advanced technology in Nepal. Providing recruitment solutions to employers finding, fostering and preparing the right candidates in every possible ways with an effective tracking system and a dedicated team of customer service to both; the employers and the job seekers, has always been our primary goal</p>
			</div>
			<div class="col-md-2 interns">
				<h5>FOR INTERNS</h5>
				<ul class="interns-links">
					<li><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Search Job</a></li>
					<li><a href="#">Career Service</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h5 style="margin: 17px 0 8px 40px;">CONTACT US</h5>
				<ul class="fa-icons">
					<li><i class="fa fa-facebook-square"></i><a href="#"> Facebook</a></li>
					<li><i class="fa fa-twitter-square"></i><a href="#"> Twitter</a></li>
					<li><i class="fa fa-linkedin"></i><a href="#"> Linkedin</a></li>
					<li><i class="fa fa-youtube-square"></i><a href="#"> Youtube</a></li>
					<li><i class="fa fa-envelope-square"></i><a href="#"> Gmail</a></li>
				</ul>
			</div>
			<div class="col-md-3 contact-font">
				<h5>INFO</h5>
				<ul>
					<li><i class="fa fa-envelope 2x"></i><a href="#" style="color: #D7DBDD;">Gmail:  Info@meroIntern.com</a></li>
					<li><i class="fa fa-phone"></i>Telephone:  +977 98********</li>
					<li><i class="fa fa-map-marker"></i>Location: New Baneshwor &nbsp;&nbsp;&nbsp;&nbsp;Kathmandu, Nepal</li>
				</ul>
			</div>
		</div>
	</div>
<div class="bottom-footer" style="background-color: #4B4D4F;">
	<div class="container">
		<div class="row footer-text">
			<div class="col-md-5">
				<p>@All Right 2018 With meroIntern</p>
			</div>
			<div class="col-md-3 footer-logo">
				<img src="{{asset('images/logo/logo.png')}}">
			</div>
			<div class="col-md-4 recent-text">
				<ul>
					<li><a href="#">Help</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#" style="border-right: none;">Feedback</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
<a href="#top" class="to-top"><i class="fa fa-angle-up"></i></a>
<script>
	$(document).ready(function(){
		var offset = 250;
		var duration =500;

		$(window).scroll(function(){
			if ($(this).scrollTop() > offset){
				$('.to-top').fadeIn(duration)
			}else{
				$('.to-top').fadeOut(duration)
			}
		});
		$('.t0-top').click(function(){
			$('body').animate({scrollTop: 0}, duration)
		})
	})
</script>