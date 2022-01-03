@extends('layout.master')
@section('content')
<section>
    <div class="container-fluid">
        <img src="{{asset('images/about/softmaker.jpg')}}" alt="world" width="100%" height="350px">
    </div>
</section>
<section id="section4" class="bg-white">
    <!-- <div class="bg-mj-left pt-3 pb-3 mt-2" style="background-image: linear-gradient(270deg, rgb(0, 154, 180), rgb(0, 42, 91));">
        <h3 class="text-center"><strong style="color: #E5E7E9;">{{ $text }}</strong></h3>
    </div> -->
    <div class="container py-5">
        <h2 class="text-center" style="color: #1A5276;">{{ $text }}</h2>
        <hr class="mb-4 thick-border">
        <div class="row text-center font-sm">
           @foreach($program as $pro)
            <div class="col-md-4">
                <ul class="list-group company-list list-unstyled">
                    <li class="bg-secondary py-2">
                        <a class="nav-link h5 mb-0" href="/program/{{$pro->id}}/show">{{$pro->name}}</a>
                    </li>
                    <li class="list-group-item list-group-item-info d-inline-block">
                        {{$pro->level}}
                    </li>
                    <li class="list-group-item d-inline-block">
                        <strong>From</strong><br>{{$pro->start_date}}
                    </li>
                    <li class="list-group-item list-group-item-info d-inline-block">
                        <strong>To:</strong><br>{{$pro->end_date}}</li>
                </ul>
            </div>
         @endforeach
        </div>
    </div>
</section>
<section id="get-in-touch">
    <div class="container">
        <div class="section-header2">
            <h2 class="section-title text-center mt-2">Get in Touch</h2>
            <hr class="thick-border2">
        </div>
    </div>
</section>

<section id="section6">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6 offset-md-3">
                <div class="media">
                    <div class="media-left">
                        <img src="{{asset('images/about/arun.jpg')}}" alt="subharaj" class="d-flex rounded-circle ml-5 mr-4 img-fluid img-responsive" data-pagespeed-url-hash="2349668616" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/>
                    </div>
                    <div class="media-body" style="color: #f5f5f5;">
                        <h5>Arun Majhi</h5>
                        <p class="font-sm">
                            Program Executive<br/>M | +977 9840459767<br/>E &nbsp;| <a href="mailto:subharazzchy68@merointern.com" class="text-white">arunmazee88@merointern.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#bottom-->
@endsection