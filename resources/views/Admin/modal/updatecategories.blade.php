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
        	<a href="{{route('adminuse.company')}}">categories</a>
        </li>
        <li>
        	<a href="/category/update/{id}">Update category</a>
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
                    Categories Update Table
                </small>
            </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">

	        <form method="post" action="{{route('update.category',$category->id)}}" id="category-update-form" enctype="multipart/form-data">
	        @csrf
	        <!-- Modal body -->
	          <div class="form-group row">
	            <label for="name" class="col-sm-3 col-form-label">Category:</label>
	              <div class="col-md-8">
	                <input id="name" type="text" class="form-control" name="name" placeholder="Comapny Name" value="{{$category->category}}" >
	               
	              </div>
	          </div>
		        <div class="form-group row">
		          <label for="address" class="col-sm-3 col-form-label">Image:</label>
		            <div class="col-md-8">	
		            	<input type="file" name="img">
		            	<img src="{{asset($category->image)}}" width="200">
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

