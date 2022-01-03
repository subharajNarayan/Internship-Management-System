@extends('Admin.adminlayout.adminmaster')
@section('main-view')
@if(session('success'))
<div class="alert text-center alert-success">
    <span class="text-success">
        {{ session('success') }}
    </span>
</div>
@endif
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
                	<a href="#">Users</a>
                </li>
            </ul>
<!-- .breadcrumb -->
         </div>
           <div class="page-content">
            <div class="page-header">
                <h1>
                    Table
                    <small>
                        <i class="icon-double-angle-right"></i>
                        User Table
                    </small>
                </h1>
            </div>
            @if ($errors->has(null))
                <div class="alert alert-danger">
                    <span class="text-danger">
                        Something went wrong!
                    </span>
                </div>
            @endif
<!-- /.page-header -->
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
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>DOB</th>
                                        <th>Email</th>
                                        <!-- <th>Password</th>  -->
                                        <th>Action</th> 
                                    </tr>
                                    </thead>
                                    <tbody id="UserTask">
                                        @php $i = 0; @endphp
                                       @foreach($users as $user)
                                       <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->gender}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->dob}}</td>
                                            <td>{{$user->email}}</td>
                                            <!-- <td>{{$user->password}}</td> -->
                                            <td><a href="{{route('user.update',$user->id)}}"><i class='icon-pencil'></i></a>||
                                                <a href="{{route('delete.user',$user->id)}}"><i class='icon-trash'></i></a></td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        <!-- /.table-responsive -->
                        </div>
                    <!-- /span -->
                    </div>
                <!-- /row -->
                    <div class="hr hr-18 dotted hr-double"></div>
                </div>
            <!-- /.col -->
            </div>
    <!-- /.row -->
        </div>
<!-- /.page-content -->
    </div>
@endsection