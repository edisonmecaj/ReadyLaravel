@extends('layouts.app', ["title" => $title])
@section('scripts')
	<script src="{{ asset('js/bootstrap-number.js') }}"></script>
@endsection
@section('content')
	<div class="row">
		<div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			{!! Form::model($rol, ["class" => "form-horizontal"]) !!}
			<div class="form-group">
				{!! Form::label("role", __("Role"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::text("role", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('role'))<span class="invalid-feedback"><strong>{{ $errors->first('role') }}</strong></span>@endif
				</div>
			</div>

			<div class="form-group">
				{!! Form::label("label", __("Label"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::text("label", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('label'))<span class="invalid-feedback"><strong>{{ $errors->first('label') }}</strong></span>@endif
				</div>
			</div>
			
			<div class="form-group">
				{!! Form::label("level", __("Level"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::number("level", $rol->level ?: 1, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('level'))<span class="invalid-feedback"><strong>{{ $errors->first('level') }}</strong></span>@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-12 col-xs-offset-0 col-sm-9 col-sm-offset-3">
					<div class="row">
						<div class="col-xs-6">
							{{ Form::submit(__("Save"), ['class' => 'btn btn-success btn-block']) }}
						</div>
						<div class="col-xs-6">
							<a href="{{ url('roles') }}" class="btn btn-danger btn-block">{{ __("Cancel") }}</a>
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