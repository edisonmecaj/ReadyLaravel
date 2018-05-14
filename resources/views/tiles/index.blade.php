@extends('layouts.app', ["title" => __("Tiles Management")])
@section('scripts')
	<script src="{{ asset('js/swap.js') }}"></script>
@endsection
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

@section("script")
	<script>
		$(".btn-move").click(function(){
			move(this);
		});

		function move(sel){
			var dir = $(sel).attr("dir");
			$this = $(sel).closest(".tile-col");
			$next = $this.next(".tile-col");
			$prev = $this.prev(".tile-col");
			$rThis = $this.clone();
			if(dir == "right" && $next.length > 0){
				$rNext = $next.clone();
				$this.replaceWith($rNext);
				$next.replaceWith($rThis);
				
				$rNext.find(".btn-move").click(function(){
					move(this);
				});
				
			}else if (dir == "left" && $prev.length > 0){
				$rPrev = $prev.clone();
				$this.replaceWith($rPrev);
				$prev.replaceWith($rThis);					
				$rPrev.find(".btn-move").click(function(){
					move(this);
				});
			}

			$rThis.find(".btn-move").click(function(){
				move(this);
			});

			arr = [];
			$(".tile-col").each(function(k,v){
				var id = $(v).data().id;
				arr.push({id: id, sort: k});
			});
			console.log(arr);
			$.ajax({
				headers: {
    			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			},
				url: "{{ url('tiles/reorder') }}",
				type: "POST",
				data: {sort: arr}
			});
		}
	</script>
@endsection