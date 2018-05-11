@extends("layouts.app")

@section("content")
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">{{ __("Change eMail") }}</div>
				<div class="panel-body">
					{!! Form::open() !!}
						<div class="form-group">
							{!! Form::label("email", __("Current eMail"), ["class" => "control-label"]) !!}
							<br>
							{!! Form::label("email", Auth::user()->email, ["class" => "control-label thin"]) !!}
						</div>

						<div class="form-group">
							{!! Form::label("current_password", __("Current Password"), ["class" => "control-label"]) !!}
							<input type="password" name="current_password" id="" class="form-control" autocomplete="off">
							@if ($errors->has('current_password'))<span class="invalid-feedback"><strong>{{ $errors->first('current_password') }}</strong></span>@endif
						</div>

						<div class="form-group">
							{!! Form::label("email", __("New eMail"), ["class" => "control-label"]) !!}
							<input type="email" name="email" id="" class="form-control" autocomplete="off">
							@if ($errors->has('email'))<span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>@endif
						</div>

						<div class="form-group">
							{!! Form::label("email_confirmation", __("Repeat New eMail"), ["class" => "control-label"]) !!}
							<input type="email" name="email_confirmation" id="" class="form-control" autocomplete="off">
							@if ($errors->has('email_confirmation'))<span class="invalid-feedback"><strong>{{ $errors->first('email_confirmation') }}</strong></span>@endif
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-xs-6">
									{!! Form::submit(__("Save"), ["class" => "btn btn-block btn-success"]) !!}
								</div>
								<div class="col-xs-6">
									<a href="{{ url('profile') }}" class="btn btn-block btn-danger">{{ __("Cancel") }}</a>
								</div>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection