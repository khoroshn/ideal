
@extends(env('THEME').'.layouts.front')

@section('content')
<!-- /Middle Header -->
<div class="container-fluid limited mb-5">
    <div class="row justify-content-center mt-4">
        <div class="col-xs-12 col-lg-6 col-md-8">
            <div class="card">
                <div class="card-body pt-2">
                    <div class="text-center">
                        <div class="d-inline-block border border-secondary rounded-circle text-center m-auto">
                            <h1 class="px-2"><i class="material-icons align-middle md-3">person</i></h1>
                        </div>
                    </div>
                    <h5 class="card-title text-center">Create an Account</h5>
                    <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="InputName">Name</label>
                                <input type="text" class="form-control" id="InputName" placeholder="Enter Name" name="name" value="{{ old('name') }}" required autofocus >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="InputEmail">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="InputPassword">Password</label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="InputPassword2">Confirm Password</label>
                                <input type="password" class="form-control" id="InputPassword2" placeholder="Confirm Password" name="password_confirmation" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

{{--                        <div class="form-group">
                            <label class="mb-0" for="InputAddress">Address</label>
                            <textarea class="form-control" id="InputAddress" rows="2"></textarea>
                        </div>--}}

                        <button type="submit" class="btn btn-theme btn-sm btn-block my-3">Submit</button>
                        <div class="form-group text-right">
                            <a href="/login" class="text-secondary"><small><u>Already Registered ?</u></small></a>
                        </div>
                        <div class="form-group mt-3 text-center">Or Register using</div>
                        <div class="text-center share-link">
                            <button type="button" class="btn btn-primary btn-sm"><svg fill="#fff" viewBox="0 0 24 24"><path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" /></svg> Facebook</button>
                            <button type="button" class="btn btn-info btn-sm"><svg fill="#fff" viewBox="0 0 24 24"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg> Twitter</button>
                            <a href="/login/google" type="button" class="btn btn-danger btn-sm"><svg fill="#fff" viewBox="0 0 24 24"><path d="M23,11H21V9H19V11H17V13H19V15H21V13H23M8,11V13.4H12C11.8,14.4 10.8,16.4 8,16.4C5.6,16.4 3.7,14.4 3.7,12C3.7,9.6 5.6,7.6 8,7.6C9.4,7.6 10.3,8.2 10.8,8.7L12.7,6.9C11.5,5.7 9.9,5 8,5C4.1,5 1,8.1 1,12C1,15.9 4.1,19 8,19C12,19 14.7,16.2 14.7,12.2C14.7,11.7 14.7,11.4 14.6,11H8Z" /></svg> Google Plus</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

--}}
