
<div class="sidebar" id="sidebar">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="icon-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="icon-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="icon-group"></i>
            </button>

            <button class="btn btn-danger">
                <i class="icon-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- #sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li>
            <a href="/home">
                <i class="icon-dashboard"></i>
                <span class="menu-text">Intern Dashboard</span>
            </a>
        </li>
    @if(auth()->user()->is_admin)
        <li>
            <a href="{{route('adminuse.user')}}">
                <i class="icon-user"></i>
                <span class="menu-text"> User </span>
            </a>
        </li>
        <li>
            <a href="{{route('adminuse.category')}}">
                <i class="icon-file"></i>
                <span class="menu-text"> Categories</span>
            </a>
        </li>
    @endif
        <li>
            <a href="{{route('adminuse.company')}}">
                <i class="icon-briefcase"></i>
                <span class="menu-text">Companies </span>
            </a>
        </li>
        <li>
            <a href="{{route('adminuse.program')}}">
                <i class="icon-film"></i>
                <span class="menu-text"> Program</span>
            </a>
        </li>
        <li>
            <a href="{{route('adminuse.userprogram')}}">
                <i class="icon-film"></i>
                <span class="menu-text"> User <i class="icon-double-angle-right"></i> Program</span>
            </a>
        </li>
   </ul>

    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>

</div>