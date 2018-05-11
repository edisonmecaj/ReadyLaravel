@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ __('Login') }}</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                        @csrf
                        <div class="form-group row">
                            <label for="username" class="col-sm-4 text-right control-label">{{ __('Username') }}</label>
                            <div class="col-md-6">
                                <input id="username" type="username" autocomplete="off" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                @if ($errors->has('username'))<span class="invalid-feedback"><strong>{{ $errors->first('username') }}</strong></span>@endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 text-right control-label">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))<span class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></span>@endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                
                                @guest
                                    @if(config("app.allow_register") === true)
                                        <a href="{{ url('register') }}" class="btn btn-default">
                                            {{ __('Register') }}
                                        </a>
                                    @endif
                                @endguest

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                            @foreach(\App\Lang::all() as $lng)
                                <a href="{{ url('changelanguage/'.$lng->file) }}" class="btn btn-default">
                                    <span class="flag-icon {{$lng->logo}} span-md"></span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
