@include('layout.header')

<div id='main'>
	<div class='stretch_full'>
		<div class='container'>
			<h2 class='main-title mt-4' style="color: #666666;">
				Category
			</h2><hr>
		</div>
	</div>
	<section class="container">
        <div class="row text-center font-sm">
        	@foreach ($categories as $category)
            <div class="col-md-3 pt-5">
            	<div class="image">
            		<img src="{{ $category->image }}" width="100%;" height="160px;" alt="">
            	</div>
            	<div class="card-header">
            		<ul style="list-style: none;">
            			<li><h3><a href="/category/{{$category->id}}/programs" style="text-align: center; padding-right: 25px;">{{$category->category}}</a></h3></li>
            		</ul>
            	</div>
            </div>
            @endforeach
        </div><hr>
    <div class="section-header">
        <div class="hs-page-width-module">
          	<h2 class="section-header__header ">Category Behind Language Rank</h2>
          	<img src="{{asset('images/about/ranking.jpg')}}" width="270px;" alt="">
          	<p>We met the list of category .<br><br>Inventing a language from scratch might seem like an odd way to spend your time, but there are good reasons to do it.<strong> People create languages for scientific, cultural and artistic purposes:</strong> to test theories about how the brain works, to help people communicate, to <strong style="text-decoration: underline;">‘improve’</strong> existing languages, or because they just need a new language for a book they’re writing.</p>
        </div>
    </div>
    </section>
</div>

@include('layout.footer')
