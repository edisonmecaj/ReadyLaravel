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
			<div class="row">
				<div class="col-xs-12">
					<h4>{{ __("Do you want to delete the menu ").$menu->label}}?</h4>
				</div>
			</div>
			{!! Form::model($menu) !!}
			<div class="row">
				<div class="col-xs-6">
					{{ Form::submit(__("Yes"), ['class' => 'btn btn-success btn-block']) }}
				</div>
				<div class="col-xs-6">
					<a href="{{ url('menus') }}" class="btn btn-danger btn-block">{{ __("No") }}</a>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection