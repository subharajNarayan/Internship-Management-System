@extends('Admin.adminlayout.adminmaster')

@section('main-view')
<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
      <script type="text/javascript">
        try {
            ace.settings.check('breadcrumbs', 'fixed')
        } catch (e) {
        }
      </script>

      <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="#">Home</a>
        </li>
        <li> 
        <a href="{{'/home'}}">Dashboard</a>
          </li>
        <li>
        	<a href="{{route('adminuse.company')}}">Companies</a>
        </li>
        <li>
        	<a href="/company/update/{id}">Update Company</a>
        </li>
      </ul>
    </div>
  <!-- .breadcrumb -->
<div class="page-content">
        <div class="page-header">
            <h1>
                Tables
                <small>
                    <i class="icon-double-angle-right"></i>
                    Company Update Table
                </small>
            </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">

	        <form method="post" action="{{route('update.company',$company->id)}}" enctype="multipart/form-data">
	        @csrf
	        <!-- Modal body -->
	          <div class="form-group row">
	            <label for="name" class="col-sm-3 col-form-label">Name:</label>
	              <div class="col-md-6">
	                <input id="name" type="text" class="form-control" name="name" 
                   value="{{$company->name}}" >
	              </div>
	          </div>
            <div class="form-group row">
              <label for="address" class="col-sm-3 col-form-label">Image:</label>
                <div class="col-md-8">  
                  <input type="file" name="img">
                  <img src="{{asset($company->image)}}" width="200">
                </div>
            </div>
            <div class="form-group row">
              <label for="address" class="col-sm-3 col-form-label">Address:</label>
                <div class="col-md-6">
                  <input id="address" type="text" class="form-control" name="address"  value="{{$company->address}}" >
                </div>
            </div>
            <div class="form-group row">
              <label for="estdate" class="col-sm-3 col-form-label">Established_Date:</label>
                <div class="col-md-6">
                  <input id="estdate" type="date" class="form-control" name="estdate"  value="{{$company->established_date}}" >
                </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label">Email:</label>
                <div class="col-md-6">
                  <input id="email" type="text" class="form-control" name="email"  value="{{$company->email}}" >
                </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label">References User:</label>
                <div class="col-md-6">
                  <select id="user" class="form-control" name="user_id">
                  <option value="">-- SELECT --</option>
                  @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $company->user_id ? "selected" : ""}}>
                      {{$user->name}}
                    </option>
                  @endforeach

                </select>
                </div>
            </div>
		        <div class="form-group row mb-0">
		            <div class="col-md-6 offset-md-4">
		                <button type="submit" class="btn btn-success">
		                    {{ __('Update') }}
		                </button>
		            </div>
		        </div>
	  		</form>
	  	</div>
     </div>
   </div>
</div>

@endsection

