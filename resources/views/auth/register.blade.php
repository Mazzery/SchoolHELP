@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="register-box">
                <div class="register-logo">
                    School<b>HELP</b>
                </div>
            
                <div class="card">
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">Register As a Volunteer</p>
            
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" id=username name="username" value="{{ old('username') }}" required autocomplete="username" @error('username') is-invalid @enderror name="username" value="{{ old('name') }}" required autocomplete="username" autofocus>
                                @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" id=password name="password">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                            </div>
                        </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full Name" id=name @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="input-group-append">
                        <div class="input-group-text">
                            
                        </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="E-mail Address" id=email  @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="input-group-append">
                        <div class="input-group-text"> 
                        </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Phone Number" id=phone_number  @error('phone_number') is-invalid @enderror name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" placeholder="Date Of Birth" id=date_of_birth  @error('date_of_birth') is-invalid @enderror name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth">
                        @error('date_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                        </div>
                    </div>
            
                
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Occupation" id=occupation  @error('occupation') is-invalid @enderror name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" autofocus>
                        @error('occupation')
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
                        <button type="submit" class="btn btn-primary btn-block" value="Submit">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    </form>
            
                </div>
                <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection
