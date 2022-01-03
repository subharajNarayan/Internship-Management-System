@extends('admin.adminlayout.adminmaster')

@section('main-view')
<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try {
                ace.settings.check('breadcrumbs', 'fixed')
            } catch (e) {}
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
            	<a href="#">User <i class="icon-double-angle-right"></i>Program</a>
            </li>
        </ul><!-- .breadcrumb -->
    </div>
           <div class="page-content">
            <div class="page-header">
                <h1>
                    Tables
                    <small>
                        <i class="icon-double-angle-right"></i>
                        User <i class="icon-double-angle-right"></i> Program Table
                    </small>
                </h1>
            </div><!-- /.page-header -->
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
                                    <th>User Email</th>
                                    <th>Program Name</th>
                                    <th>Company Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                     <tbody id="userprogram">
                                        @php $i = 0;  @endphp
                                        @foreach($userprogram as $up)
                                         <tr>
                                            <td>{{++$i}}</td>
                                             <td>{{$up->user()->email}}</td>
                                             <td>{{$up->program()->name}}</td>
                                             <td>{{$up->program()->CompanyName()}}</td>
                                             <td><a href="{{route('user.mail', $up->id)}}"><i class="icon-pencil"></i></a>
                                             </td>
                                         </tr>
                                         @endforeach
                                     </tbody>                         
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /span -->
                </div><!-- /row -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div>
@endsection
