<div class="row">
	<div class="col-xs-12">
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		@if ( session()->has('success_message') )
			@if(is_array(session()->has('success_message')))
				@foreach(session()->has('success_message') as $message)
		    		<div class="alert alert-success alert-dismissable">{{ $message }}</div>
				@endforeach
			@else
		    	<div class="alert alert-success alert-dismissable">{{ session()->get('success_message') }}</div>
			@endif
		@endif
	</div>
</div>