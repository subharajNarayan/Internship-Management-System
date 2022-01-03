<!DOCTYPE html>
<html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>meroIntern</title>
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="short icon" type="image/x-icon" href="{{asset('images/logo/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chela+One|Oregano" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  <script src="{{ asset('js/all.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-light navbar-light">
      <div class="container-fluid">
        <div class="col-md-2">
          <a href="/">
          <img src="{{ asset('images/logo/logo.png') }}" width="40" alt="" style="float: left;">
          <h3 style="float: left;font-family: 'Righteous', cursive;margin-top: 1px;color: #154360;"><strong>Mero</strong>Intern</h3></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <div class="col-md-9">
            <ul class="navbar-nav" id="nav">
              <li class="nav-item" style="width: 75px;">
                <a class="nav-link" href="/">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.about')}}">ABOUT US</a>
              </li>
              <li class="nav-item" id="com">
                <a class="nav-link" href="#" >COMPANY</a>
                <div id="company-container" class="row">
                  @foreach(companies() as $com)
                  <div class="col-sm-4">
                    <div class="my-1">
                      <a href="/company/{{$com->id}}/programs"><span>{{ $com->name }} </span></a>
                    </div>
                  </div>
                  @endforeach
                </div>
              </li>
              <li class="nav-item" id="cat">
                <a class="nav-link" href="{{route('user.category')}}">CATEGORY</a>
                <div id="categories-container" class="row">
                  @foreach(categories() as $cat)
                  <div class="col-sm-3">
                    <div class="my-1">
                      <a href="/category/{{$cat->id}}/programs"><span data-id="{{$cat->id}}">{{ $cat->category }} </span></a>
                    </div>
                  </div>
                  @endforeach
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{'/contact'}}">CONTACT</a>
              </li>
            </ul>
          </div>
          <!-- Authentication Links -->
          <div class="col-md-3">
            @guest
            <ul class="nav navbar-nav">
              <li class="nav-item" style="width: 70px;">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @else
              <div class="navbar-header" role="navigation">
                <ul class="nav ace-nav  ">
                  <li class="dropdown">
                    <span class=" dropdown-toggle" data-toggle="dropdown" style="">
                      {{ auth()->user()->name }}
                    <span class="caret"></span>
                  </span>
                    <ul class="dropdown-menu px-1 text-center" id="logout-user">
                      <li><a href="{{ route('user.profile', ['id'=> auth()->id()]) }}" style="border-top: none;">Profile</a>
                      </li>
                      <hr>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                      <li>
                        <a href="{{ route('logout') }}" class="general-link" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" style="text-decoration: none;">
                        Logout</a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <!-- /.ace-nav -->
              </div>
              <!-- /.navbar-header -->
              @endguest
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <script>
      $(function(){
        $('.dropdown-toggle').dropdown();
      });
    </script>