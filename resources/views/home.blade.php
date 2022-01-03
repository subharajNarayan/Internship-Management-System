@extends('Admin.adminlayout.adminmaster')

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
                <i class="fa fa-star" style="float: left; margin: 8px 10px 0 10px;"></i><h6 style="float: left;margin: 6px 0 0 0;"><strong>Top Interns</strong></h6>
            </li>
        </ul><!-- .breadcrumb -->
    </div>
  </div>
<div >      
<div class="row" style="margin-right: 0px; padding: 12px;">
    @foreach($program as $pro)
    <div class="col-md-5">
          <div class="well mt-3 bg-danger" style="text-align: center;">           
              <div style="padding: 5px 10px;">
                <strong>{{$pro->companyName()}}</strong>
              </div><hr>
            <div>
              Program: {{$pro->name}} <br><br>
              Address: {{$pro->comp()->address}}
            </div>
          </div>
        </div> 
      @endforeach 
    </div>
  </div>
@endsection




