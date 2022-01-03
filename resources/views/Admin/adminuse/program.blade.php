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
                	<a href="{{route('adminuse.program')}}">Program</a>
                </li>
            </ul><!-- .breadcrumb -->
         </div>
           <div class="page-content">
            <div class="page-header">
                <h1>
                    Tables
                    <small>
                        <i class="icon-double-angle-right"></i>
                        Program Table
                    </small>
                </h1>
            </div><!-- /.page-header -->

<button class="btn btn-success" id="Try" data-toggle="modal" data-backdrop="false" data-target="#Modal" >Add Program</button>
<!-- The Modal -->
<div class="modal" id="Modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        @include('Admin.modal.programadd')
        @yield('modal-programadd')


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
                                    <th class="center">Id</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th> Description</th>
                                    <th>Category_id</th>
                                    <th>Duration Month</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Shift</th>
                                    <th>Company_id</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php $i = 0; @endphp
                                    @foreach($program as $pro)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$pro->name}}</td>
                                        <td>{{$pro->level}}</td>
                                        <td>{{$pro->description}}</td>
                                        <td>{{$pro->category_id}}</td>
                                        <td>{{$pro->duration_month}}</td>
                                        <td>{{$pro->start_date}}</td>
                                        <td>{{$pro->end_date}}</td>
                                        <td>{{$pro->shift}}</td>
                                        <td>{{$pro->company_id}}</td>
                                        <td><a href="{{route('program.update',$pro->id)}}"><i class='icon-pencil'></i></a>||
                                            <a href="{{route('program.delete',$pro->id)}}"><i class='icon-trash' style="color: red;"></i></a></td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /span -->
                </div><!-- /row -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>

@endsection

