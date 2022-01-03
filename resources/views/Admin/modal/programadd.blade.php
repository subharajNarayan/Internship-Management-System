<div class="modal-header program-header">
    <h4 class="modal-title">Program</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
@section('modal-programadd')
<!-- Modal Header -->
  <form method="POST" action="{{ route('program.store') }}" id="program-store-form">
        @csrf
        <!-- Modal body -->
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Name:</label>
              <div class="col-md-8">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Comapny Name" autocomplete="off" required autofocus >
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="level" class="col-sm-3 col-form-label">Level:</label>
              <div class="col-md-8">
                <select id="level" class="form-control" name="level">
                  <option>-- SELECT --</option>
                  <option>Basic</option>
                  <option>Advance</option>
                </select>

                @if ($errors->has('level'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('level') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-3 col-form-label">Description:</label>
              <div class="col-md-8">
                <textarea id="description" rows="3" type="text" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="description" required autofocus></textarea>
                @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="category" class="col-sm-3 col-form-label">Categories:</label>
              <div class="col-md-8">
                <select id="category" class="form-control" name="category_id">
                  <option value="">-- SELECT --</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{$category->category}}</option>
                  @endforeach
                </select>
              </div>
          </div>
          <div class="form-group row">
            <label for="startdate" class="col-sm-3 col-form-label">Start Date:</label>
              <div class="col-md-8">
                <input id="startdate" type="date" class="form-control{{ $errors->has('startdate') ? ' is-invalid' : '' }}" name="startdate" required autofocus>
                @if ($errors->has('startdate'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('startdate') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="enddate" class="col-sm-3 col-form-label">End Date:</label>
              <div class="col-md-8">
                <input id="enddate" type="date" class="form-control{{ $errors->has('enddate') ? ' is-invalid' : '' }}" name="enddate" required autofocus>
                @if ($errors->has('enddate'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('enddate') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="durationmnth" class="col-sm-4 col-form-label">Duration Month:</label>
              <div class="col-md-7">
                <input id="durationmnth" type="text" class="form-control{{ $errors->has('durationmnth') ? ' is-invalid' : '' }}" name="durationmnth" required readonly>
                @if ($errors->has('durationmnth'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('durationmnth') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="shift" class="col-sm-3 col-form-label">Shift:</label>
              <div class="col-md-8">
                <input id="shift" type="times" class="form-control{{ $errors->has('shift') ? ' is-invalid' : '' }}" name="shift" required autofocus>
                @if ($errors->has('shift'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('shift') }}</strong>
                </span>
                @endif
              </div>
          </div>
          <div class="form-group row">
            <label for="company" class="col-sm-3 col-form-label">References:</label>
              <div class="col-md-8">
                <select id="company" class="form-control" name="company_id">
                  <option value="">-- SELECT --</option>

                  @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{$company->name}}</option>
                  @endforeach

                </select>
              </div>
          </div>
    <!-- Modal footer -->
  <div class="modal-footer">
    <button type="submit" class="btn btn-success" data-modal="hide">{{ __('SUBMIT') }}</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  </div>
  </form>


@endsection

@section('scripts')
<script> 
  $(document).on('focusout', 'input[type="date"]', function(event){
    event.preventDefault();
    let sdate = $('#startdate').val();
    let edate = $('#enddate').val();
    if(sdate != '' && edate != ''){
      let dur = (new Date(edate) - new Date(sdate));
      diff = dur/(1000*60*60*24*30);
      m = Math.round(diff);
      r = diff % 1;
      d = Math.round(r * 30) ;
      $('#durationmnth').val(m + 'month(s) ' + d + 'day(s)');
    }
  });
</script>
@endsection

