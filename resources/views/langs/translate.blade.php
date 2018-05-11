@extends("layouts.app", ["title" => __("Translate")." ".__($lang->label)])

@section("content")
<div class="row text-center">
	<div class="col-xs-12">
		{!! Form::model($lang) !!}
		<div class="row mb-5">
			<div class="col-xs-6 col-xs-offset-0 col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-6">
				{!! Form::submit(__("Save"), ["class" => "btn btn-success btn-block"]) !!}
			</div>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<a href="{{ url('langs') }}" class="btn btn-danger btn-block">{{ __("Cancel") }}</a>
			</div>
		</div>
		<table class="table table-centered table-striped table-justified table-bordered table-compact">
			<thead>
				<tr>
					<th>{{ __("Base") }}</th>
					<th>{{ __("Translation") }}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($unmapped as $tr)
				<tr>
					<td>
						{!! Form::textarea("key[]", $tr->key, ["class" => "form-control", "readonly" => true, "rows" => 2]) !!}						
					</td>
					<td>
						{!! Form::textarea("val[]", null, ["class" => "form-control", "rows" => 2]) !!}
					</td>
				</tr>
				@endforeach

				@foreach($mapped as $k => $tr)
				<tr>
					<td>
						{!! Form::textarea("key[]", $k, ["class" => "form-control", "readonly" => true, "rows" => 2]) !!}
					</td>	
					<td>
						{!! Form::textarea("val[]", $tr, ["class" => "form-control", "rows" => 2]) !!}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@if(($unmapped->count() + sizeof($mapped)) > 50)
		<div class="row mb-5">
			<div class="col-xs-6 col-xs-offset-0 col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-6">
				{!! Form::submit(__("Save"), ["class" => "btn btn-success btn-block"]) !!}
			</div>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<a href="{{ url('langs') }}" class="btn btn-danger btn-block">{{ __("Cancel") }}</a>
			</div>
		</div>		
		@endif
		{!! Form::close() !!}
	</div>
</div>
@endsection