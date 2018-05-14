@extends('layouts.app', ["title" => __("Zones Management").": ".$city->name])
@section('content')
	@include("messages")
	<div class="row">
		<div class="col-xs-12">
			<a href="{{ url('cities') }}" class="btn btn-primary btn-wide"><i class="fas fa-chevron-left"></i> {{ __("Cities")}}</a>
			<a href="{{ url('cities/'.$city->id.'/zones/add') }}" class="btn btn-primary btn-wide"><i class="fas fa-plus"></i> {{ __("Add new Zone")}}</a>
		</div>
		<br><br>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table table-striped table-centered table-hover table-bordered table-justified">
				<thead>
					<tr>
						<th>{{ __("Zone") }}</th>
						<th>{{ __("Clients") }}</th>
						<th>{{ __("Actions") }}</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($zones as $zone)
					<tr>
						<td>{{ $zone->name }}</td>
						<td></td>
						<td>
							<a href="{{ url('cities/'.$city->id.'/zones/'.$zone->id.'/edit') }}" class="btn btn-xs btn-primary"><i class="fas fa-pencil-alt"></i> <span class="hidden-xs">{{ __("Edit") }}</span></a>
							@if(Auth::user()->Role->role == "dev")
							<a href="{{ url('cities/'.$city->id.'/zones/'.$zone->id.'/delete') }}" class="btn btn-xs btn-danger"><i class="fas fa-times"></i> <span class="hidden-xs">{{ __("Delete") }}</span></a>
							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection