<div class="container">
	<div class="row">
		@foreach ($userprogram as $up)
		<p>{{$up->user()->email}}</p>
		@endforeach
	</div>
</div>