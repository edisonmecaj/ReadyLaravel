@extends('layouts.app', ["title" => $title])
@section('content')
	<div class="row">
		<div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			{!! Form::model($city, ["class" => "form-horizontal"]) !!}
			
			<div class="form-group">
				{!! Form::label("name", __("City"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::text("name", null, ["class" => "form-control", "autocomplete" => "off", "autofocus" => true]) !!}
					@if ($errors->has('name'))<span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-12 col-xs-offset-0 col-sm-9 col-sm-offset-3">
					<div class="row">
						<div class="col-xs-6">
							{{ Form::submit(__("Save"), ['class' => 'btn btn-success btn-block']) }}
						</div>
						<div class="col-xs-6">
							<a href="{{ url('cities') }}" class="btn btn-danger btn-block">{{ __("Cancel") }}</a>
						</div>
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection