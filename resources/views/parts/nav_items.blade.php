@foreach (Auth::user()->Role->Menus->where("parent", null)->where("right", $right)->sortBy("sort") as $menu)
	<li class="{{ Request::is($menu->url) && !$menu->HasChilds() ? 'active' : '' }}">
		@if(!$menu->HasChilds())
			<a href="{{ url($menu->url ?: '#') }}">
				@if (!empty($menu->icon))
					<i class="{{ $menu->icon }}"></i>
				@endif
				{{$menu->label}}
			</a>
		@else
			<a class="dropdown-toggle" data-toggle="dropdown">
				@if (!empty($menu->icon))
					<i class="{{ $menu->icon }}"></i>
				@endif
				{{ __($menu->label) }} <b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				@foreach (Auth::user()->Role->Menus->where("parent", $menu->id)->sortBy("sort") as $child)
					<li class="{{ Request::is($child->url) && !$child->HasChilds() ? 'active' : '' }}">
						<a href="{{ url($child->url) }}">
							<div class="row">
								<div class="col-xs-2 text-center">
									@if (!empty($child->icon))
										<i class="{{ $child->icon }}"></i>
									@endif
								</div>
								<div class="col-xs-10">
									{{ __($child->label) }}
								</div>
							</div>
						</a>
					</li>
				@endforeach
			</ul>
		@endif
	</li>
@endforeach