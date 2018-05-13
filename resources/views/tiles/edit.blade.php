@extends('layouts.app', ["title" => $title])
@section("styles")
	<link rel="stylesheet" href="{{ asset('vendors/iconpicker/dist/css/bootstrap-iconpicker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/bootstrap-select/dist/css/bootstrap-select.css') }}">
@endsection
@section('scripts')
	<script src="{{ asset('vendors/iconpicker/src/js/iconset/iconset-fa5-all.js') }}"></script>
	<script src="{{ asset('vendors/iconpicker/dist/js/bootstrap-iconpicker.js') }}"></script>
	<script src="{{ asset('vendors/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>	  
@endsection
@section('content')
@include("messages")
	<div class="row">
		<div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			{!! Form::model($tile, ["class" => "form-horizontal"]) !!}
			<div class="form-group">
				{!! Form::label("label", __("Label"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::text("label", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('label'))<span class="invalid-feedback"><strong>{{ $errors->first('label') }}</strong></span>@endif
				</div>
			</div>

			<div class="form-group">
				{!! Form::label("url", __("URL"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::text("url", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					@if ($errors->has('url'))<span class="invalid-feedback"><strong>{{ $errors->first('url') }}</strong></span>@endif
				</div>
			</div>
			
			<div class="form-group">
				{!! Form::label("color", __("Color"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<span class="btn btn-default {{$tile->color === "default" ? "active" : ""}}">
							{!! Form::radio("color", "default", $tile->color === "default") !!}
							<span class="hidden-xs">Default</span>
							<span class="visible-xs"><i class="fas fa-check"></i></span>
						</span>
						<span class="btn btn-primary {{$tile->color === "primary" ? "active" : ""}}">
							{!! Form::radio("color", "primary", $tile->color === "primary") !!}
							<input type="radio" name="color" value="primary">
							<span class="hidden-xs">Primary</span>
							<span class="visible-xs"><i class="fas fa-check"></i></span>
						</span>
						<span class="btn btn-danger {{$tile->color === "danger" ? "active" : ""}}">
							{!! Form::radio("color", "danger", $tile->color === "danger") !!}
							<span class="hidden-xs">Danger</span>
							<span class="visible-xs"><i class="fas fa-check"></i></span>
						</span>
						<span class="btn btn-info {{$tile->color === "info" ? "active" : ""}}">
							{!! Form::radio("color", "info", $tile->color === "info") !!}
							<span class="hidden-xs">Info</span>
							<span class="visible-xs"><i class="fas fa-check"></i></span>
						</span>
						<span class="btn btn-warning {{$tile->color === "warning" ? "active" : ""}}">
							{!! Form::radio("color", "warning", $tile->color === "warning") !!}
							<span class="hidden-xs">Warning</span>
							<span class="visible-xs"><i class="fas fa-check"></i></span>
						</span>
					</div>					
					@if ($errors->has('color'))<span class="invalid-feedback"><strong>{{ $errors->first('color') }}</strong></span>@endif
				</div>
			</div>
			
			<div class="form-group">
				{!! Form::label("icon", __("Icon"), ["class" => "col-sm-3 text-right control-label"]) !!}
				<div class="col-sm-9">
					{!! Form::hidden("icon", null) !!}
					{!! Form::button("", ["class" => "btn btn-default", "role" => "iconpicker", "data-icon" => $tile->icon, "data-iconset" => "fa5"]) !!}
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
				<div class="col-sm-3 text-right">
					{!! Form::label("counter", __("Counter"), ["class" => "control-label"]) !!}
					<br>
					<small class="text-muted">PHP</small>
				</div>
				<div class="col-sm-9">
					{!! Form::textarea("counter", null, ["class" => "form-control", "autocomplete" => "off"]) !!}
					
					@if ($errors->has('counter'))<span class="invalid-feedback"><strong>{{ $errors->first('counter') }}</strong></span>@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-12 col-xs-offset-0 col-sm-9 col-sm-offset-3">
					<div class="row">
						<div class="col-xs-6">
							{{ Form::submit(__("Save"), ['class' => 'btn btn-success btn-block']) }}
						</div>
						<div class="col-xs-6">
							<a href="{{ url('tiles') }}" class="btn btn-danger btn-block">{{ __("Cancel") }}</a>
						</div>
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
	{{-- <div class="row"> --}}
		{{-- <div class="col-xs-12"> --}}
			{{-- <div id="map" style="height: 500px;"></div> --}}
		{{-- </div> --}}
	{{-- </div> --}}
@endsection

@section('script')
	<script>
		$('button[role="iconpicker"]').iconpicker({
			arrowClass: 'btn-default',
			arrowPrevIconClass: 'glyphicon glyphicon-chevron-left',
			arrowNextIconClass: 'glyphicon glyphicon-chevron-right',
			cols: 4,
			rows: 3,
			footer: false,
			header: true,
			placement: 'bottom',
			search: true,
			searchText: "{{ __('Search')}}",
			selectedClass: 'btn-success',
			btnClass: 'btn-lg'
		}).change(function(e){
			$("input[name='icon']").val(e.icon);
		});
		
		// var map;
		// function initMap() {
		// 	map = new google.maps.Map(document.getElementById('map'), {
		// 		center: {lat: 41.334742, lng: 19.780784},
		// 		zoom: 16
		// 	});
		// 	var marker = new google.maps.Marker({
		// 		position: {lat: 41.334742, lng: 19.780784},
	    // 	    map: map   ,
    	// 		draggable: true
	    //     });
		// 	marker.addListener('dragend', function(e){
		// 		console.log(e.latLng.lat() + " - " + e.latLng.lng());
		// 	});
		// }
	</script>
	{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVxDarxi3Ford9UgPy4cjtpr2vTrDVDJk&callback=initMap" async defer></script> --}}
@endsection