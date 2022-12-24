
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SchoolHELP | Volunteer Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="assets/AdminLTE/index2.html">School<b>HELP</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Submit Request</p>

      <form method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Description" id=description name="description" value="{{ old('description') }}" required autocomplete="description" @error('description') is-invalid @enderror name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
          @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              {{-- <span class="fas fa-user"></span> --}}
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <select id="type" name="type" class="form-select form-select-solid form-select-lg fw-bold form-control @error('type') is-invalid @enderror">
            @foreach ($resource as $resource)  
            <option value="{{$resource->resource_type}}">{{$resource->resource_type}}</option>
            @endforeach
          </select>
          @error('type')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Number of Resource" id=resourcenum  @error('resourcenum') is-invalid @enderror name="resourcenum" value="{{ old('resourcenum') }}" required autocomplete="resourcenum" autofocus>
          @error('resourcenum')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        
        <div class="container mx-10 text-center",>
          <div class="col-md-20 text-center">
            <button type="submit" class="btn btn-primary btn-block" value="Submit">Submit</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>
