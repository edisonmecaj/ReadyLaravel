@extends('layouts.app', ["title" => __("Language Management")])
@section('content')
	@include("messages")
	<div class="row">
		<div class="col-xs-12">
			<a href="{{ url('langs/add') }}" class="btn btn-primary btn-wide"><i class="fas fa-plus"></i> {{ __("Add new Language")}}</a>
		</div>
		<br><br>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table table-striped table-centered table-hover table-bordered table-justified">
				<thead>
					<tr>
						<th>{{ __("Language") }}</th>
						<th>{{ __("Actions") }}</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($langs as $lang)
					<tr>
						<td>
							<span class="flag-icon {{ $lang->logo }}"></span>
							{{ $lang->label }}
						</td>
						<td>
							<a href="{{ url('langs/'.$lang->id.'/translate') }}" class="btn btn-xs btn-primary"><i class="fas fa-globe"></i> <span class="hidden-xs">{{ __("Translate") }} <span class="badge">{{ $lang->MissingTranslations()->count() ?: '' }}</span></span></a>
							<a href="{{ url('langs/'.$lang->id.'/edit') }}" class="btn btn-xs btn-primary"><i class="fas fa-pencil-alt"></i> <span class="hidden-xs">{{ __("Edit") }}</span></a>
							<a href="{{ url('langs/'.$lang->id.'/delete') }}" class="btn btn-xs btn-danger"><i class="fas fa-times"></i> <span class="hidden-xs">{{ __("Delete") }}</span></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection