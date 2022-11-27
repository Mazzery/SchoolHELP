@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="post">
                        @csrf

                        <div class="row mb-3">
                            <label for="school_name" class="col-md-4 col-form-label text-md-end">{{ __('School Name') }}</label>

                            <div class="col-md-6">
                                <input id="school_name" type="text" class="form-control @error('school_name') is-invalid @enderror" name="school_name" value="{{ old('name') }}" required autocomplete="school_name" autofocus>

                                @error('school_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="school_address" class="col-md-4 col-form-label text-md-end">{{ __('School Address') }}</label>

                            <div class="col-md-6">
                                <input id="school_address" type="text" class="form-control @error('school_address') is-invalid @enderror" name="school_address" value="{{ old('school_address') }}" required autocomplete="school_address" autofocus>

                                @error('school_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="school_city" class="col-md-4 col-form-label text-md-end">{{ __('School City') }}</label>

                            <div class="col-md-6">
                                <input id="school_city" type="text" class="form-control @error('school_city') is-invalid @enderror" name="school_city" value="{{ old('school_city') }}" required autocomplete="school_city" autofocus>

                                @error('school_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="container mx-30 text-center",>
                            <div class="col-md-20 text-center">
                              <button type="submit" class="btn btn-primary btn-block" value="Submit">Register School</button>
                            </div>
                            <!-- /.col -->
                          </div>

                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
