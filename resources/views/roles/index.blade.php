@extends('layouts.app', ["title" => __("Roles Management")])
@section('content')
	@include("messages")
	<div class="row">
		<div class="col-xs-12">
			<a href="{{ url('roles/add') }}" class="btn btn-primary btn-wide"><i class="fas fa-plus"></i> {{ __("Add new Role")}}</a>
		</div>
		<br><br>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table table-striped table-centered table-hover table-bordered table-justified">
				<thead>
					<tr>
						<th>{{ __("Role") }}</th>
						<th>{{ __("Level") }}</th>
						<th>{{ __("Actions") }}</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($roles as $role)
					<tr>
						<td>{{ $role->label }}</td>
						<td>{{ $role->level }}</td>
						<td>
							<a href="{{ url('roles/'.$role->id.'/edit') }}" class="btn btn-xs btn-primary"><i class="fas fa-pencil-alt"></i> <span class="hidden-xs">{{ __("Edit") }}</span></a>
							<a href="{{ url('roles/'.$role->id.'/delete') }}" class="btn btn-xs btn-danger"><i class="fas fa-times"></i> <span class="hidden-xs">{{ __("Delete") }}</span></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection