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
          	<a href="{{route('adminuse.company')}}">Companies</a>
          </li>
        </ul>
      <!-- .breadcrumb -->
    </div>

     <div class="page-content">
      <div class="page-header">
        <h1>
          Tables
            <small>
              <i class="icon-double-angle-right"></i>
                Companies Table
            </small>
          </h1>
      </div>
    <!-- /.page-header -->

<button class="btn btn-success" id="Try" data-toggle="modal" data-backdrop="false" data-target="#Modal" >Add Companies</button>
<!-- The Modal -->
<div class="modal" id="Modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        @include('Admin.modal.companiesadd')
        @yield('modal-companiesadd')
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
                        <th>Name</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Established_Date</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>User_id</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  <tbody id="companyTask">
                    @php $i = 0; @endphp
                      @foreach($companies as $company)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->image}}</td>
                            <td>{{$company->address}}</td>
                            <td>{{date_create($company->established_date)->format('d - M -Y')}}</td>
                            <td>{{$company->contact}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->user_id}}</td>
                            <td><a href="{{route('company.update',$company->id)}}"><i class='icon-pencil'></i></a>||
                                <a href="{{route('delete.company',$company->id)}}"><i class='icon-trash'></i></a></td>
                         </tr>
                      @endforeach
                  </tbody>
                </table>
              </div><!-- /.table-responsive -->
            </div><!-- /span -->
          </div><!-- /row -->
        <div class="hr hr-18 dotted hr-double"></div>

        </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
<!-- /.page-content -->
</div>
@endsection



