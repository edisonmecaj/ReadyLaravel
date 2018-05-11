@extends('layouts.app', ["title" => __("Menu Management")])
@section('styles')
	<link rel="stylesheet" href="{{ asset('css/nestable.css') }}">
@endsection
@section('scripts')
	<script src="{{ asset('js/jquery.nestable.js') }}"></script>
@endsection
@section('content')
@include("messages")
<div class="row">
	<div class="col-xs-12">
		<a href="{{ url('menus/add') }}" class="btn btn-primary btn-wide"><i class="fas fa-plus"></i> {{ __("Add new Menu")}}</a>
	</div>
</div>
<div class="row menu-editor">
	{{--  Left Menu Items  --}}
	<div class="col-xs-12 col-md-6 text-center">
		<h4 class="title">{{ __("Left Menu Items") }}</h4>
		<div id="menu-list1" class="dd">
			@include("menus.menu_items", ["right" => 0])
		</div>
	</div>
	{{--  Right Menu Items --}}
	<div class="col-xs-12 col-md-6 text-center">
		<h4 class="title">{{ __("Right Menu Items") }}</h4>
		<div id="menu-list2" class="dd">
			@include("menus.menu_items", ["right" => 1])
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-xs-12 text-center">
		{!! Form::open() !!}
		{!! Form::hidden("json") !!}
		<br>
		{!! Form::submit(__("Save"), ["class" => "btn btn-success btn-wide"]) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection
@section("script")
	<script>
		$(".dd").nestable({
			maxDepth: 2,
			noDragClass: 'actions'
		}).on('change', updateJson);
		
		function updateJson(){
			$json = $("input[name='json']");
			var output = {"left" : $("#menu-list1").nestable("serialize"), "right": $("#menu-list2").nestable("serialize")};
			$json.val(JSON.stringify(output));
		}
		
		updateJson();
	</script>
@endsection
