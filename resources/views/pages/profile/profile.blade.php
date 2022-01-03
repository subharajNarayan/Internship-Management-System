@include('layout.header')

<section class="container">
	<h2 class='main-title mt-4 text-center' style="color: #666666;">
		User Setting
	</h2>
	<div class="row">
		<div class="col-md-5"></div>
		<div class="img-profile pt-4 col-md-2">
			<img src="{{asset('images/about/subharaj.jpg')}}" width="180;" height="180;" alt="" style="border-radius: 150px;">
			<button type="submit" style="margin:10px 0 0 60px;">Edit</button>
		</div>
		<div class="col-md-5"></div>
	</div><hr>
	<div class="row pt-4">
		<div class="col-md-7">
		<div class="user-details">
			<form method="POST" action="{{route('update.user',['id'=>$users->id])}}">
				<div class="form-group">
					<label for="name"> Username </label><br>
					<input type="text" name="name" class=" col-md-8" value="{{ $users->name }}">
				</div>
				<div class="form-group">
					<label for="gender"> Gender </label><br>
					<select name="gender" id="gender" class=" col-md-8">
						<option value="gender"> {{$users->gender}}</option>
						<!-- <option value="male">Male</option> -->
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
				</div>
				<div class="form-group">
					<label for="address"> Address </label><br>
					<input type="text" name="address" id="address" class=" col-md-8" value="{{$users->address}}">
				</div>
				<div class="form-group">
					<label for="phone"> Phone </label><br>
					<input type="text" name="phone" class=" col-md-8" value="{{$users->phone}}">
				</div>
				<div class="form-group">
					<label for="dob"> DOB </label><br>
					<input type="date" name="dob" id="dob" class=" col-md-8" value="{{$users->dob}}">
				</div>
				<div class="form-group">
					<label for="email"> Email </label><br>
					<input type="email" name="email" id="email" class="col-md-8" value="{{$users->email}}">
				</div>
				<div class="form-group">
	                <button type="submit" class="btn btn-success">
	                    Update
	                </button>
	            </div>
			</form>
		</div>
	</div>
		<div class="col-md-5">
			<div>
				<h3 class="text-danger">Deleting Account</h3>
				<p class="lead mbs"> When entering this area please pay attention!</p>
					<div id="removeAccountBlock" class="state-switcher danger-zone ">
				    	<p class="mbs">To delete your account and all information associated with it, please press the 'Remove account' button.</p>
				    	
				    	<p class="mbm">Further steps are necessary to reassure that this account belongs to you, as well as to inform you about the types of data which will be erased as part of the process.</p>

				    <div class="initial">
				    	<p class="mbs"><strong>Note:</strong> this action is irreversible.</p>
				      <div class="actions">
				      	<p class="mbs">Are you sure you want to delete your Mailtrap account?</p>
				        <button class="btn btn-danger">Delete account</button>
				      </div>
				    </div>
				  </div>
			</div>
		</div>
	</div>
</section>

<section class="panel-footer">
	<div class="bottom-footer" style="background-color: #4B4D4F;">
		<div class="container">
			<div class="row footer-text">
				<div class="col-md-10">
					<p>@All Right 2018 With meroIntern</p>
				</div>
				<div class="col-md-2 recent-text">
					<ul>
						<li id="footer-profile">
							<a href="#"> <i class="fa fa-youtube-square fa-2x"></i></a>
						</li>
						<li id="footer-profile2">
							<a href="#"> <i class="fa fa-twitter-square fa-2x"></i></a>
						</li>
						<li id="footer-profile3">
							<a href="#"> <i class="fa fa-facebook-square fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>