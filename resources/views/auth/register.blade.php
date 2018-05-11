@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Register') }}</div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" autocomplete="off" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                                @if ($errors->has('username'))<span class="invalid-feedback"><strong>{{ $errors->first('username') }}</strong></span>@endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-right">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input id="fname" type="text" autocomplete="off" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required>
                                @if ($errors->has('fname'))<span class="invalid-feedback"><strong>{{ $errors->first('fname') }}</strong></span>@endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-right">{{ __('Last Name') }}</label>
                            <div class="col-md-6">
                                <input id="lname" type="text" autocomplete="off" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required>
                                @if ($errors->has('lname'))<span class="invalid-feedback"><strong>{{ $errors->first('lname') }}</strong></span>@endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-right">{{ __('eMail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="text" autocomplete="off" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))<span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>@endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))<span class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></span>@endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="form-group row mb-0">
                                    <div class="col-xs-6">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="{{ url('login') }}" class="btn btn-danger btn-block">
                                            {{ __("Cancel") }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
