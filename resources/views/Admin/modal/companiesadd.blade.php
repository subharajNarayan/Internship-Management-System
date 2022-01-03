<div class="modal-header program-header">
    <h4 class="modal-title">Add Company</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

@section('modal-companiesadd')

  <form method="POST" action="{{ route('company.store') }}" id="company-store-form" enctype="multipart/form-data">
    @csrf
        <!-- Modal body -->
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Name:</label>
              <div class="col-md-8">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Comapny Name" autocomplete="off" required autofocus>
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-3 col-form-label">Image:</label>
              <div class="col-md-8">
                <input type="file" name="img" class="custom-file-input">
              </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label">Address:</label>
              <div class="col-md-8">
                <input id="address" type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" placeholder="Company Address" autocomplete="off" required autofocus>
                @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('address') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="estdate" class="col-sm-3 col-form-label">Established Date:</label>
              <div class="col-md-8">
                <input id="estdate" type="date" class="form-control {{ $errors->has('estdate') ? ' is-invalid' : '' }}" name="estdate" placeholder="estdate" autocomplete="off" required autofocus>
                @if ($errors->has('estdate'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('estdate') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="contact" class="col-sm-3 col-form-label">Contact:</label>
              <div class="col-md-8">
                <input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" placeholder="contact" autocomplete="off" required autofocus>
                @if ($errors->has('contact'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('contact') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email:</label>
              <div class="col-md-8">
                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="example@gmail.com" autocomplete="off" required autofocus>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="Contact" class="col-sm-3 col-form-label">Reference</label>
              <div class="col-md-8">
                <select id="Contact" class="form-control" name="user_id" placeholder="example@gmail.com" required >
                    <option value="">-- SELECT --</option>
                  @foreach($contacts as $con)
                    <option value="{{ $con->id }}">{{ $con->email }}</option>
                  @endforeach
                </select>
                
              </div>
          </div>
    <!-- Modal footer -->
  <div class="modal-footer">
    <button type="submit" class="btn btn-success">{{ __('SUBMIT') }}</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  </div>
  </form>

@endsection