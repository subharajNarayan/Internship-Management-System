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
            <a href="{{route('adminuse.company')}}">User</a>
        </li>
        <li>
            <a href="#">Update User Detail</a>
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
                    User Update Table
                </small>
            </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
    <form method="POST" action="{{route('update.user',$users->id)}}">    
        <!-- Modal body -->
        @csrf
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Name:</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{$users->name}}" autocomplete="off" >              
              </div>
          </div>
          <div class="form-group row">
            <label for="gender" class="col-sm-3 col-form-label">Gender:</label>
              <div class="col-md-6">
                <select name="gender" class="form-control" id="gender">
                    <option>{{$users->gender}}</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
              </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label">Address:</label>
              <div class="col-md-6">
                <input id="address" type="text" class="form-control" name="address" value="{{$users->address}}">              
              </div>
          </div>
          
          <div class="form-group row">
            <label for="phone" class="col-sm-3 col-form-label">Mobile/ <br>Telephone No:</label>
              <div class="col-md-6">
                <input id="phone" rows="3" type="text" class="form-control" name="phone" value="{{$users->phone}} ">      
              </div>
          </div>
          <div class="form-group row">
            <label for="dob" class="col-sm-3 col-form-label">DOB:</label>
              <div class="col-md-6">
                <input id="dob" type="date" class="form-control" name="dob" value="{{$users->dob}}" >               
              </div>
          </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email:</label>
                <div class="col-md-6">
                    <input id="email" type="text" class="form-control" name="email" value="{{$users->email}}">               
                </div>
            </div>

      <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
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