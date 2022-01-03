<!DOCTYPE html>
<html lang="en">

@include('Admin.adminlayout.adminheader')

<body>
  @include('Admin.adminlayout.admintop-nav')

  <div class="main-container" id="main-container">

    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

       @include('Admin.adminlayout.adminsidebar')

        @yield('main-view')

    </div><!-- /.main-container-inner -->
  </div>


    <script type="text/javascript">
    window.jQuery || document.write("<script src='{{asset('js/jquery-2.0.3.min.js')}}'>"+"<"+"/script>");
</script>


<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='{{asset('js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
</script>

 <script src="{{asset('js/all.js')}}"></script>
 <!-- <script src="{{asset('js/admin.js')}}"></script> -->


   @yield('scripts')

</body>
</html>