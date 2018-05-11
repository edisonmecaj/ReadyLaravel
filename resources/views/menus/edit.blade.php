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
			{!! Form::model($menu, ["class" => "form-horizontal"]) !!}
			<div class="form-group">
				{!! Form::label("label", __("Label"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::text("label", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('label'))<span class="invalid-feedback"><strong>{{ $errors->first('label') }}</strong></span>@endif
				</div>
			</div>
			
			<div class="form-group">
				{!! Form::label("url", __("URL Address"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::text("url", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('url'))<span class="invalid-feedback"><strong>{{ $errors->first('url') }}</strong></span>@endif
				</div>
			</div>
				
			<div class="form-group">
				{!! Form::label("icon", __("Icon"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					<div class="input-group">
						{!! Form::text("icon", null, ["class" => "form-control", "autocomplete" => "off"]) !!}						
						<div class="input-group-addon icon-preview"><i class="{{$menu->icon}}"></i></div>						
					</div>					
					@if ($errors->has('icon'))<span class="invalid-feedback"><strong>{{ $errors->first('icon') }}</strong></span>@endif
				</div>
			</div>
				
			<div class="form-group">
				{!! Form::label("roles", __("Roles"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::select("roles[]", \App\Role::pluck("label", "id"), null, ["class" => "form-control selectpicker", "multiple" => true, "title" => __("Select Roles...")]) !!}
					@if ($errors->has('roles'))<span class="invalid-feedback"><strong>{{ $errors->first('roles') }}</strong></span>@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-12 col-xs-offset-0 col-sm-9 col-sm-offset-3">
					<div class="row">
						<div class="col-xs-6">
							{{ Form::submit(__("Save"), ['class' => 'btn btn-success btn-block']) }}
						</div>
						<div class="col-xs-6">
							<a href="{{ url('menus') }}" class="btn btn-danger btn-block">{{ __("Cancel") }}</a>
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
		$("input[name='icon']").keyup(function(){
			$(".icon-preview i").attr("class", $(this).val());
		});
	</script>
@endsection