@extends('layout.master')
@section('content')
<div id="header-image">
  <img src="{{asset('images/index2.jpg')}}">
</div>

<form >
  <div class="col-md-4" id="searchbox">
    <div class="input-group responsive">
      <input type="text" class="form-control" id="search" placeholder="Search">
      <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
    </div>
  </div>
</form>

  <div class="container intern-box" style="margin-top: 19px;">
      <div class="top-interns" style="height: 40px; background-color: #F4F6F6;">
        <i class="fa fa-star" style="float: left; margin: 8px 10px 0 10px;"></i><h6 style="float: left;margin: 6px 0 0 0;"><strong>Top Interns</strong></h6>
      </div>

    <div class="row">
      @foreach($programs as $key => $pro)
      <div class="col-md-4 border-right-1 border-bottom-1">
        <div class="p-2 border-1 mt-3" style="background-color: #f9f9f9; border: 1px solid #EAF2F8  ;">
            <div class="row no-gutters">
              <div class="media"> 
                <div class="border-1 mr-2">
                  <img class="d-flex shadow lazy" src=" {{asset(isset($company[$key]['image']) ? $company[$key]['image'] : "" )}}" alt="" width="90" height="90">
                </div>
                <div class="media-body" style="flex: 1;"> 
                  <h5>
                      {{ isset($company[$key]["name"]) ? $company[$key]["name"] : "" }}
                  </h5>
                  @foreach($pro as $p)
                      <a href="program/{{$p->description}}/show" style="padding: 0px; text-decoration: none; color: black;">{{ $p->description}}</a><br>
                      <a href="program/{{$p->id}}/show" style="padding: 0px;">{{ $p->name}}</a><br>
                  @endforeach
                </div>
              </div>
            </div>
        </div>  
      </div>
      @endforeach
    </div>
  </div>

@endsection
