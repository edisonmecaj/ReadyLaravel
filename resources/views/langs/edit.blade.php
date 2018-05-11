@extends('layouts.app', ["title" => $title])
@section("styles")
	<link rel="stylesheet" href="{{ asset('vendors/iconpicker/dist/css/bootstrap-iconpicker.min.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('vendors/iconpicker/dist/js/bootstrap-iconpicker-iconset-all.min.js') }}"></script>
	<script src="{{ asset('vendors/iconpicker/dist/js/bootstrap-iconpicker.min.js') }}"></script>
@endsection
@section('content')
	<div class="row">
		<div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			{!! Form::model($lang, ["class" => "form-horizontal"]) !!}
			<div class="form-group">
				{!! Form::label("label", __("Label"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::text("label", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('label'))<span class="invalid-feedback"><strong>{{ $errors->first('label') }}</strong></span>@endif
				</div>
			</div>

			<div class="form-group">
				{!! Form::label("file", __("Locale"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::text("file", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('file'))<span class="invalid-feedback"><strong>{{ $errors->first('file') }}</strong></span>@endif
				</div>
			</div>
			
			<div class="form-group">
				{!! Form::label("logo", __("Icon"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::hidden("logo", null) !!}
					{!! Form::button("", ["class" => "btn btn-default", "role" => "iconpicker", "data-icon" => $lang->logo, "data-iconset" => "flagicon"]) !!}
					@if ($errors->has('logo'))<span class="invalid-feedback"><strong>{{ $errors->first('logo') }}</strong></span>@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-12 col-xs-offset-0 col-sm-9 col-sm-offset-3">
					<div class="row">
						<div class="col-xs-6">
							{{ Form::submit(__("Save"), ['class' => 'btn btn-success btn-block']) }}
						</div>
						<div class="col-xs-6">
							<a href="{{ url('langs') }}" class="btn btn-danger btn-block">{{ __("Cancel") }}</a>
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
		$('button[role="iconpicker"]').iconpicker({
			arrowClass: 'btn-default',
			arrowPrevIconClass: 'glyphicon glyphicon-chevron-left',
			arrowNextIconClass: 'glyphicon glyphicon-chevron-right',
			cols: 6,
			rows: 3,
			footer: false,
			header: true,
			placement: 'bottom',
			search: true,
			searchText: "{{ __('Search')}}",
			selectedClass: 'btn-success',
		}).change(function(e){
			$("input[name='logo']").val(e.icon);
		});
	</script>
@endsection