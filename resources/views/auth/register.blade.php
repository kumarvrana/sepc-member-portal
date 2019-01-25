<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEPC | Member Portal</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="/css/app.css">
    
    </head>
    <body class="hold-transition register-page">
    <div class="register-box" id="app">
    <div class="register-logo">
        <a href="#"><b>SEPC</b> Member Portal</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group mb-3">
            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Full name" name="name" value="{{ old('name') }}" required autofocus>
            <div class="input-group-append">
                <span class="fa fa-user input-group-text"></span>
            </div>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>
            <div class="input-group mb-3">
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">
            <div class="input-group-append">
                <span class="fa fa-envelope input-group-text"></span>
            </div>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            </div>
            {{-- //phone --}}
            <div class="input-group mb-3">
                <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required placeholder="phone number">
                <div class="input-group-append">
                    <span class="fa fa-phone input-group-text"></span>
                </div>
                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
            {{-- iecode importaer exporter code --}}
            <div class="input-group mb-3">
                <input type="text" class="form-control{{ $errors->has('iecode') ? ' is-invalid' : '' }}" name="iecode" value="{{ old('iecode') }}" required placeholder="Import Export Code">
                <div class="input-group-append">
                    <span class="fa fa-code input-group-text"></span>
                </div>
                @if ($errors->has('iecode'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('iecode') }}</strong>
                    </span>
                @endif
            </div>
            {{-- comapny name --}}
            <div class="input-group mb-3">
                <input type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" required placeholder="company">
                <div class="input-group-append">
                    <span class="fa fa-building input-group-text"></span>
                </div>
                @if ($errors->has('company'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('company') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
            <div class="input-group-append">
                <span class="fa fa-lock input-group-text"></span>
            </div>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required placeholder="Retype password">
            <div class="input-group-append">
                <span class="fa fa-lock input-group-text"></span>
            </div>
            </div>
            <div class="row">
            <div class="col-8">
                <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-primary">
            <i class="fa fa-facebook mr-2"></i>
            Sign up using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
            <i class="fa fa-google-plus mr-2"></i>
            Sign up using Google+
            </a>
        </div>

        <a href="login.html" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="/js/app.js"></script>    
    <script>
    $(function () {
        $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass   : 'iradio_square-blue',
        increaseArea : '20%' // optional
        })
    })
    </script>
    </body>
</html>

