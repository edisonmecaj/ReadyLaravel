@extends("layouts.app", ["title" => __("Change Profile Picture")])
@section("content")
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">{{ __("Select an image...") }}</div>
				<div class="panel-body">
					{!! Form::open(["class" => "form-inline", "files" => true]) !!}
						<div class="row">
							<div class="col-xs-12 text-center">
								<img src="{{ Auth::user()->profile_pic }}" alt="" id="darkroom" class="mw100">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs-12 col-sm-4 mb-5">
								<button type="button" href="" class="btn btn-primary btn-block bold btn-browse">{{__("Browse..")}}</button>
							</div>
							<div class="col-xs-6 col-sm-4">
								{!! Form::submit(__("Save"), ["class" => "btn btn-success btn-block bold", "disabled" => "disabled"]) !!}
							</div>
							<div class="col-xs-6 col-sm-4">
								<a href="{{ url('profile') }}" class="btn btn-danger btn-block bold">{{__("Cancel")}}</a>
							</div>
						</div>
						{!! Form::file("image", ["class" => "hidden", "required" => true, "accept" => "image/x-png,image/gif,image/jpeg"]) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection

@section("script")
	<script>
		$(".btn-browse").click(function(){
			$("input[type='file'][name='image']").click();
		});

		$("input[type='file'][name='image']").change(function(){
			$img = $(this);
			var file = $(this)[0].files[0];
			if (file){
				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload = function(e) {
					$("#darkroom").attr("src", e.target.result);
					$("form input[type='submit']").removeAttr("disabled");
				};
			}
		});
		
	</script>
@endsection