@extends('layouts.app', ["title" => $title])
@section('styles')
	<link rel="stylesheet" href="{{ asset('vendors/bootstrap-select/dist/css/bootstrap-select.css') }}">
@endsection
@section('scripts')
	<script src="{{ asset('vendors/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
@endsection
@section('content')
	<div class="row">
		<div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			{!! Form::model($user, ["class" => "form-horizontal"]) !!}
			<div class="form-group">
				{!! Form::label("username", __("Username"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::text("username", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('username'))<span class="invalid-feedback"><strong>{{ $errors->first('username') }}</strong></span>@endif
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
				<div class="col-sm-9">
					{!! Form::text("email", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('email'))<span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>@endif
				</div>
			</div>
				
			<div class="form-group">
				{!! Form::label("role_id", __("Role"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::select("role_id", \App\Role::where("level", "<", \Auth::user()->level)->pluck("label", "id"), null, ["class" => "form-control selectpicker", "title" => __("Select Role...")]) !!}
					@if ($errors->has('role_id'))<span class="invalid-feedback"><strong>{{ $errors->first('role_id') }}</strong></span>@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-12 col-xs-offset-0 col-sm-9 col-sm-offset-3">
					<div class="row">
						<div class="col-xs-6">
							{{ Form::submit(__("Save"), ['class' => 'btn btn-success btn-block']) }}
						</div>
						<div class="col-xs-6">
							<a href="{{ url('users') }}" class="btn btn-danger btn-block">{{ __("Cancel") }}</a>
						</div>
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('script')
	<script>
		$("input[type='number']").bootstrapNumber({
			min: 1,
			max: 98,
			upClass: 'success',
			downClass: 'danger',
			upText: '<i class="fas fa-plus"></i>',
			downText: '<i class="fas fa-minus"></i>'
		});
	</script>
@endsection