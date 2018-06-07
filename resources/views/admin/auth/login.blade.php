<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome/fontawesome-all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    </head>
    <body class="text-center">
        <form class="form-login" method="POST" action="{{ route('admin.login') }}">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal">Login Page</h1>
            <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
                <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
                <label for="password" class="sr-only">{{ __('Password') }}</label>

                <input id="password" type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" id="remember" value="remember-me"> {{ __('Remember Me') }}
                </label>
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Login') }}
            </button>

            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </form>
    </body>
</html>