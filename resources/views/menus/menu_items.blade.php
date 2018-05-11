@php
	$menus = isset($menu) ? $menu : \App\Menu::where("right", $right)->where("parent", (isset($parent) ? $parent : null))->orderBy("sort", "asc")->get();
	$level = isset($level) ? $level : 0;
@endphp
@if($menus->count() == 0 && !isset($menu))
	<div class="dd-empty"></div>
@else
	<ol class="dd-list">

		@foreach ($menus as $item)
			<li class="dd-item" data-sort="{{ $item->sort }}" data-label="{{ $item->label }}" data-id="{{ $item->id }}">
				<div class="dd-handle">
					<span>
						@if (!empty($item->icon))
						<i class="{{ $item->icon }}"></i>
						@endif
						{{ $item->label }}
					</span>
					<div class="pull-right actions">
						<a href="{{ url('menus/'.$item->id.'/edit') }}" class="fas fa-edit pointer c-black hover"></a>
						<a href="{{ url('menus/'.$item->id.'/delete') }}" class="far fa-trash-alt pointer c-black hover"></a>
					</div>
				</div>
				@if($item->HasChilds())
					@include('menus.menu_items', ["menu" => $item->Childs->sortBy("sort"), "level" => $level+1])
				@endif
			</li>
		@endforeach
	</ol>
@endif