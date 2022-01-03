@extends('layout.master')
@section('content')
@if(session('success'))
<div class="alert alert-success text-center">
	<span class="text-success">
		{{ session('success') }}
	</span>
</div>
@endif
<div class="container">
	<div class="row">
		<div class="col-8">
			<div class="mt-3 program-border">
				<div class="row" style=" background-color: #E5E7E9; width: 100%; margin-left: 0px; ">
					<div class="col-md-9 card-header" style="">
						<h3>{{ $program->name }}</h3>
					</div>
					<div class="col-md-3 card-header">
						<p class="mt-2" style="color: #27AE60;">Views : {{$program->votes}}</p>
					</div>
				</div>
				<div class="card-block" style="margin: 20px; font-size: 16px;">
					<strong>Basic Interns Information</strong> 

				</div><hr style="width: 95%;">
				<div class="program-body" style="padding: 27px;margin-top: -30px;">
					<p>
						<span class="badge badge-success p-2">{{ $program->category()->category }}</span> |
						<span class="badge badge-info p-2">{{ $program->level }}</span>
					</p>
					<h4>{{ $program->companyName() }}</h4>
					<p>
						{{ $program->comp()->address}}
					</p>
					<p>
						{{ date_create($program->start_date)->format('d M') }}
						&nbsp;<strong>To</strong>&nbsp;
						{{ date_create($program->end_date)->format('d M')}}
						<span class="table-bordered px-2">{{date_create($program->end_date)->format('Y')}}
						</span>
					</p>
					<hr>
					<div class="card-block" style=" font-size: 16px;">
						<strong>Description</strong>
						<p>{{$program->description}}</p>
					</div>
					<hr>
				</div>
					<form class="mb-3 apply" action="/program/apply" method="POST" style="padding: 30px; margin-top: -50px;">
						@csrf
						<input type="hidden" name="program_id" value="{{ $program->id }}">
						<input type="hidden" name="user_id" value="{{ auth()->id() }}">
						<button class="btn btn-sm px-4 btn-success"
						{{ auth()->check() ? (auth()->user()->checkApplied($program->id) ? "disabled" : "") : "" }}> <i class="fa fa-plus" style="padding-right: 7px;"></i>Apply Now</button>
					</form>
					<div class="print">
						<ul>
							<li style="margin-top: -15px;">
								<a href="#">
									<i class="fa fa-print" style="margin-right: 5px;">
									</i>Print
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3" style="padding: 0;">
				<div class="mt-3 program-border">
					<div class="card-header" style="height: 51px;">
						<h6>Applying Procedure</h6>
					</div>
					<div class="apply-procedure" style="padding: 15px;">
						<p>Interested and eligible candidates are requested to forward their updated resume to <a href="#">merointern@gmail.com</a></p>
					</div>
				</div>
				<div class="mt-3">
					<div class="card">
						<div class="card-header" style="padding: 15px;">
							<h6 class="mb-0 h6">Intern Action</h6>
						</div>
						<div class="card-block" style="flex: 1 1 auto;padding: 1.25rem;">
							<div class="mb-2" style="margin-bottom: .5rem!important;"></div>
							<div class="text-center program-action" style="text-align: center!important;">
								<p class="p-0 m-0 text-left">
									<span class="small"><strong>TO APPLY:</strong>
									For this intern, please follow the applying procedure.</span>
								</p>
								<hr class="p-0 m-1">
								<a href="/login" class="btn btn-info program-login">
									<span class="icon-profile-edit mr-1"></span>Login
								</a>
								<a href="/register" class="btn btn-info" style="color: #F4F6F7;background-color: #1A5276;">
									<span class="icon-profile-edit mr-1"></span>Register
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection