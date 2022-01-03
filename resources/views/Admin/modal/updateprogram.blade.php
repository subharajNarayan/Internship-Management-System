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
          <a href="{{route('adminuse.program')}}">Program</a>
        </li>
        <li>
          <a href="#">Update Program</a>
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
                    Program Update Table
                </small>
            </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
  <form method="get" action="{{route('update.program',$program->id)}}" id="program-update-form">    <!-- Modal body -->
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Name:</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{$program->name}}" autocomplete="off">              
              </div>
          </div>
          <div class="form-group row">
            <label for="level" class="col-sm-3 col-form-label">Level:</label>
              <div class="col-md-6">
                <input id="level" type="text" class="form-control" name="level" value="{{$program->level}}" autocomplete="off" >
               
              </div>
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-3 col-form-label">Description:</label>
              <div class="col-md-6">
                <textarea id="description" rows="3" type="text" class="form-control" name="description" autocomplete="off">{{$program->description}}</textarea>               
              </div>
          </div>
          <div class="form-group row">
            <label for="category" class="col-sm-3 col-form-label">Categories:</label>
              <div class="col-md-6">
                <select id="category" class="form-control" name="category_id">
                  <option value="">-- SELECT --</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $program->category_id ? "selected" : ""}}>
                      {{$category->category}}
                    </option>
                  @endforeach
                </select>
              </div>
          </div>
          <div class="form-group row">
            <label for="startdate" class="col-sm-3 col-form-label">Start Date:</label>
              <div class="col-md-6">
                <input id="startdate" type="Date" class="form-control" name="startdate" value="{{$program->start_date}}">               
              </div>
          </div>
          <div class="form-group row">
            <label for="enddate" class="col-sm-3 col-form-label">End Date:</label>
              <div class="col-md-6">
                <input id="enddate" type="Date" class="form-control" name="enddate" value="{{$program->end_date}}">                
              </div>
          </div>
          <div class="form-group row">
            <label for="durationmnth" class="col-sm-3 col-form-label">Duration Month:</label>
              <div class="col-md-6">
                <input id="durationmnth" type="text" class="form-control" name="durationmnth" value="{{$program->duration_month}}" >               
              </div>
          </div>
          <div class="form-group row">
            <label for="shift" class="col-sm-3 col-form-label">Shift:</label>
              <div class="col-md-6">
                <input id="shift" type="times" class="form-control" name="shift" value="{{$program->shift}}"> 
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



