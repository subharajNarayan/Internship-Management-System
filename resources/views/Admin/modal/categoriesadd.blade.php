<div class="modal-header program-header">
    <h4 class="modal-title">Categories</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

@section('modal-categoriesadd')

  <form method="POST" action="{{ route('category.store') }}" id="category-store-form" enctype="multipart/form-data"> 
        <!-- Modal body -->
        @csrf
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Subject Name:</label>
              <div class="col-md-8">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Comapny Name" required autofocus>
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
          </div>

          <input type="file" name="img" class="custom-file-input">
          
    <!-- Modal footer -->
  <div class="modal-footer">
    <button type="submit" class="btn btn-success">{{ __('SUBMIT') }}</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  </div>
  </form>

@endsection