@extends('admin.adminlayout.adminmaster')

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
      </ul>
    </div>
  <!-- .breadcrumb -->
  
           <div class="page-content">
            <div class="page-header">
                <h1>
                    Tables
                    <small>
                        <i class="icon-double-angle-right"></i>
                        Categories Table
                    </small>
                </h1>
            </div>
        <!-- /.page-header -->

<button class="btn btn-success" id="Try" data-toggle="modal" data-backdrop="false" data-target="#Modal" >Add Categories</button>
<!-- The Modal -->
<div class="modal" id="Modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        @include('Admin.modal.categoriesadd')
        @yield('modal-categoriesadd')
      </div>
    </div>
  </div>
</div>


            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="center">SN</th>
                                        <th>Subject Categroy</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="categoryTask">
                                       @php $i = 0; @endphp
                                       @foreach($categories as $category)
                                       <tr>
                                           <td>{{++$i}}</td>
                                           <td>{{$category->category}}</td>
                                           <td><img src="{{$category->image}}" width="80;"></td>
                                           <td><a href="{{route('category.update',$category->id)}}"><i class='icon-pencil'></i></a>||
                                                <a href="{{route('delete.category',$category->id)}}"><i class='icon-trash'></i></a></td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /span -->
                    </div><!-- /row -->

                    <div class="hr hr-18 dotted hr-double"></div>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
@endsection

