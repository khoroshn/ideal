@extends(env('THEME').'.layouts.front')
@section('content')
    <!-- /Middle Header -->
    <div class="container-fluid limited mb-5">
      <div class="row justify-content-center mt-4">
        <div class="col-xs-12 col-sm-auto">
          <div class="card">
            <div class="card-body pt-2">
              <div class="text-center">
                <div class="d-inline-block border border-secondary rounded-circle text-center m-auto">
                  <h1 class="px-2"><i class="material-icons align-middle md-3">person</i></h1>
                </div>
              </div>
              <h5 class="card-title text-center">Please Enter Your Information</h5>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}





                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="InputUsername">E-Mail Address</label>
                  <input type="email" class="form-control" id="InputUsername" placeholder="Enter E-Mail" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="InputPassword">Password</label>
                  <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

{{--                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="rememberMe">
                  <label class="custom-control-label" for="rememberMe">Remember Me</label>
                </div>--}}

                <button type="submit" class="btn btn-theme btn-sm btn-block my-3">Enter</button>
                <div class="form-group mb-0">
                  <a href="/register" class="text-secondary"><small><u>Register</u></small></a>
                  <a href="{{ route('password.request') }}" class="float-right text-secondary"><small><u>Forgot Password ?</u></small></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
