@extends('layouts.app', ["title" => $title])
@section('content')
	@include("messages")
	<div class="row">
		<div class="col-md-4 text-center">
			<div class="profile-picture">
				<div class="profile-pic-container text-center">
					<center>
						<img src="{{ $user->profile_pic }}" alt="Avatar" class="image">
						<a href="{{ url('profile/change_picture') }}" class="overlay">
							<div class="text">{{ __("Change Profile Picture") }}</div>
						</a>
					</center>
				</div>
			</div>
		</div>
		<div class="col-md-8 text-center">
				{!! Form::model($user, ["class" => "form-horizontal"]) !!}
				<div class="form-group">
					{!! Form::label("username", __("Username"), ["class" => "col-sm-3 text-right control-label"]) !!}
					<div class="col-sm-9 text-left">
						{!! Form::label("username", $user->username , ["class" => "control-label thin"]) !!}
					</div>
				</div>
	
				<div class="form-group">
					{!! Form::label("fname", __("First Name"), ["class" => "col-sm-3 text-right control-label"]) !!}
					<div class="col-sm-9">
						{!! Form::text("fname", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
						@if ($errors->has('fname'))<span class="invalid-feedback"><strong>{{ $errors->first('fname') }}</strong></span>@endif
					</div>
				</div>
	
				<div class="form-group">
					{!! Form::label("lname", __("Last Name"), ["class" => "col-sm-3 text-right control-label"]) !!}
					<div class="col-sm-9">
						{!! Form::text("lname", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
						@if ($errors->has('lname'))<span class="invalid-feedback"><strong>{{ $errors->first('lname') }}</strong></span>@endif
					</div>
				</div>
	
				<div class="form-group">
					{!! Form::label("email", __("eMail"), ["class" => "col-sm-3 text-right control-label"]) !!}
					<div class="col-sm-9 text-left">
						{!! Form::label("email", $user->email , ["class" => "control-label thin"]) !!}
						<a href="{{ url('profile/change_email') }}" class="btn btn-default pull-right" data-email="{{ $user->email }}"><i class="fas fa-at"></i> <span class="hidden-xs">{{ __("Change") }}</span></a>
					</div>
				</div>
					
				<div class="form-group">
					{!! Form::label("password", __("Password"), ["class" => "col-sm-3 text-right control-label"]) !!}
					<div class="col-sm-9 text-left">
						{!! Form::label("password", "********" , ["class" => "control-label thin"]) !!}
						<a href="{{ url('profile/change_password') }}" class="btn btn-default pull-right"><i class="fas fa-key"></i> <span class="hidden-xs">{{ __("Change") }}</span></a>
					</div>
				</div>

				<div class="form-group">
					{!! Form::label("role_id", __("Role"), ["class" => "col-sm-3 text-right control-label"]) !!}
					<div class="col-sm-9 text-left">
						{!! Form::label("role_id", $user->Role->label , ["class" => "control-label thin"]) !!}
					</div>
				</div>
	
				<div class="form-group">
					<div class="col-xs-12 col-xs-offset-0 col-sm-9 col-sm-offset-3">
						<div class="row">
							<div class="col-md-4 col-md-offset-4">
								{{ Form::submit(__("Save"), ['class' => 'btn btn-success btn-block']) }}
							</div>
						</div>
					</div>
				</div>
				{!! Form::close() !!}
		</div>
	</div>

@endsection