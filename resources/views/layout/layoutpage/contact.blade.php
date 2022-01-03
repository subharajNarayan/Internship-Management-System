@include('layout.header')

<div class="bg-mj-left pt-3 pb-3" style="background-image: linear-gradient(270deg, rgb(0, 154, 180), rgb(0, 42, 91));">
    <h4 class="text-center"><strong style="color: #E5E7E9;">CONTACT US</strong></h4>
</div>
	<div class="container" style="padding: 7px; margin-top: 10px;">
		<form class="box">
			<div class="row">
				<div class=" col-md-4" style="background-color: #F7F9F9;">
					<h5 style="text-align: center;">Leave Your Message</h5><hr>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Full Name" id="name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Example@gmail.com" id="email">
					</div>
					<div class="form-group">	
						<input type="text" class="form-control" placeholder="+977" id="phone">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Write Message" id="message"></textarea>
					</div>
					<div class="form-group">
						<input type="hidden" name="save" value="contact">
						<button type="submit" class="form-control" style="background-color: #154360; color:#F8F9F9; font-size: 16px;">Submit</button>
					</div>	
				</div>
				<div class="col-md-7">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d44520.96367368252!2d85.3180216784666!3d27.68915051355211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1531378169742" width="100%" height="450" frameborder="0" style="border: #F2F4F4 1px solid;" allowfullscreen></iframe>
				</div>
			<div class="col-md-4" style="background-color: #F7F9F9; margin-top: 10px;">
        		<p>New Baneshwor Min Bhawan Main Road,Kathmandu, Nepal</p>
        		<p>Email: &nbsp;&nbsp;info@meroIntern.com <br>
        			Telephon: +977 98********</p>
        	</div>
		</div>
    </form>		
</div>

@include('layout.footer')