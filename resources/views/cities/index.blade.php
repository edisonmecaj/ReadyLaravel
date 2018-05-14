@extends('layouts.app', ["title" => __("Cities Management")])
@section('content')
	@include("messages")
	<div class="row">
		<div class="col-xs-12">
			<a href="{{ url('cities/add') }}" class="btn btn-primary btn-wide"><i class="fas fa-plus"></i> {{ __("Add new City")}}</a>
		</div>
		<br><br>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table table-striped table-centered table-hover table-bordered table-justified">
				<thead>
					<tr>
						<th>{{ __("City") }}</th>
						<th>{{ __("Zones") }}</th>
						<th>{{ __("Clients") }}</th>
						<th>{{ __("Actions") }}</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($cities as $city)
					<tr>
						<td>{{ $city->name }}</td>
						<td>{{ $city->Zones()->count() }}</td>
						<td></td>
						<td>
							<a href="{{ url('cities/'.$city->id.'/zones') }}" class="btn btn-xs btn-primary"><i class="far fa-map"></i> <span class="hidden-xs">{{ __("Zones") }}</span></a>
							<a href="{{ url('cities/'.$city->id.'/edit') }}" class="btn btn-xs btn-primary"><i class="fas fa-pencil-alt"></i> <span class="hidden-xs">{{ __("Edit") }}</span></a>
							@if(Auth::user()->Role->role == "dev")
							<a href="{{ url('cities/'.$city->id.'/delete') }}" class="btn btn-xs btn-danger"><i class="fas fa-times"></i> <span class="hidden-xs">{{ __("Delete") }}</span></a>
							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection