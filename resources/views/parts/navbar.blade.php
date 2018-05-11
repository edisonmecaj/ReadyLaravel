<nav class="navbar navbar-inverse" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
	</div>
	
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		@if(Auth::check())
		<ul class="nav navbar-nav">
			@include("parts.nav_items", ["right" => 0])			
		</ul>
		<ul class="nav navbar-nav navbar-right">
			@include("parts.nav_items", ["right" => 1])			
			<!--User Control DropDown-->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle profile-dropdown" data-toggle="dropdown" aria-expanded="false">
					<img src="{{ Auth::user()->profile_thumb }}" class="user-image" alt="">
					{{ Auth::user()->full_name }} <b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li class="user-header">
						<a href="{{ url('profile/change_picture') }}">
							<img src="{{ Auth::user()->profile_pic }}" class="img-circle" alt="">
						</a>
						<p>
							{{ Auth::user()->full_name }}
							<br>
							<small>{{ Auth::user()->Role->label }}</small>
						</p>
						<p>
							@foreach(\App\Lang::all() as $lng)
							<a href="{{ url('changelanguage/'.$lng->file) }}">
								<span class="flag-icon {{ $lng->logo }}"></span>
							</a>
							@endforeach
						</p>
					</li>
					<li class="user-footer">
						<div class="row text-center">
							<div class="col-xs-6">
								<a href="{{ url('profile') }}" class="btn btn-default btn-flat">{{ __("Profile")}}</a>
							</div>
							<div class="col-xs-6">
								<a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
							</div>
						</div>
					</li>
				</ul>
			</li>
		</ul>
		@endif
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
</form>