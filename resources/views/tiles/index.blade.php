@extends('layouts.app', ["title" => __("Tiles Management")])
@section('content')
	@include("messages")
	<div class="row">
		<div class="col-xs-12">
			<a href="{{ url('tiles/add') }}" class="btn btn-primary btn-wide"><i class="fas fa-plus"></i> {{ __("Add new Tile")}}</a>
		</div>
		<br><br>
	</div>
	<div class="row">
		@foreach ($tiles as $tile)
			@include("parts.tile", ["tile" => $tile, "edit" => true])
		@endforeach
	</div>
@endsection