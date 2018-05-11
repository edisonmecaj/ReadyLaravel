@extends('layouts.app', ["title" => __("User Management")])
@section('content')
	@include("messages")
	<div class="row">
		<div class="col-xs-12">
			<a href="{{ url('users/add') }}" class="btn btn-primary btn-wide"><i class="fas fa-plus"></i> {{ __("Add new User")}}</a>
		</div>
		<br><br>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table table-striped table-centered table-hover table-bordered table-justified">
				<thead>
					<tr>
						<th>{{ __("Username") }}</th>
						<th>{{ __("Full Name") }}</th>
						<th class="hidden-xs">{{ __("eMail") }}</th>
						<th class="hidden-xs">{{ __("Role") }}</th>
						<th>{{ __("Actions") }}</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{ $user->username }}</td>
						<td>{{ $user->full_name }}</td>
						<td class="hidden-xs">{{ $user->email }}</td>
						<td class="hidden-xs">{{ $user->Role->label }}</td>
						<td>
							<a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-xs btn-primary"><i class="fas fa-pencil-alt"></i> <span class="hidden-xs">{{ __("Edit") }}</span></a>
							<a href="{{ url('users/'.$user->id.'/delete') }}" class="btn btn-xs btn-danger"><i class="fas fa-times"></i> <span class="hidden-xs">{{ __("Delete") }}</span></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection