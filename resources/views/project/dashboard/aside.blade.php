<style>
	
	body,
	div {

		@if (LaravelLocalization::getCurrentLocaleDirection() == "lrt")
		
		direction: rtl;

		@endif
	}
	
	@font-face {
		font-family: "bahijTiter";
		src: url('Bahij Badr-Bold.ttf');
	}

	.sidebar div ul li a {
		background-color: #0A1D56;
		color: white;
		font-size: 1.1em;
		font-family: bahijTiter;
		direction: rtl;
		

	}h1{
		text-align: center;
	}
	#adara{
		font-weight: bold;
		color: green;
		/* display: block; */
		text-align: center;
		font-size: 1.5em;
	}
</style>
<input type="checkbox" id="nav-toggle">

<div class="sidebar">

	

	<div class="sidebar-menu">
		<ul>
			<li>
				<a href="/panel" class="@yield('fifty')"><span class="las la-igloo"></span>
					<span>{{__('nav.dashboard')}}</span></a>
			</li>
			<li>
				<a href="/department" class="@yield('first')"><span class="las la-igloo"></span>
					<span>{{__('nav.9')}}</span></a>
			</li>
			<li>
				<a href="/student" class="@yield('second')"><span class="las la-users"></span>
					<span>{{__('nav.7')}}</span></a>
			</li>
			<li>
				<a href="/teacher" class="@yield('third')"><span class="las la-clipboard-list"></span>
					<span>{{__("nav.8")}}</span></a>
			</li>
			<li>
				<a href="/class" class="@yield('fourth')"><span class="las la-shopping-bag"></span>
					<span>{{__('nav.11')}}</span></a>
			</li>
			<li>
				<a href="/semester" class="@yield('fifth')"><span class="las la-receipt"></span>
					<span>{{__('nav.12')}}</span></a>
			</li>
			<li>
				<a href="/employee" class="@yield('sixth')"><span class="las la-user-circle"></span>
					<span>{{__('nav.21')}}</span></a>
			</li>
			<li>
				<a href="/curriculum" class="@yield('seventh')"><span class="las la-clipboard-list"></span>
					<span>{{__('nav.13')}}</span></a>
			</li>
			<li>
				<a href="/commettee" class="@yield('eighth')"><span class="las la-clipboard-list"></span>
					<span>{{__('nav.10')}}</span></a>
			</li>
			<li>
				<a href="/book" class="@yield('ninth')"><span class="las la-clipboard-list"></span>
					<span>{{__('nav.14')}}</span></a>
			</li>

			<li>
				<a href="/research" class="@yield('eleventh')"><span class="las la-clipboard-list"></span>
					<span>{{__('nav.15')}}</span></a>
			</li>
			<li>
				<a href="/NW" class="@yield('twelfth')"><span class="las la-clipboard-list"></span>
					<span>{{__('nav.16')}}</span></a>
			</li>
			<li>
				<a href="/T_in_C" class="@yield('thirteen')"><span class="las la-clipboard-list"></span>
					<span>teacher in committee</span></a>
			</li>
			<li>
				<a href="/contacts" class="@yield('fourteen')"><span class="las la-clipboard-list"></span>
					<span>{{__('nav.17')}}</span></a>
			</li>
			<li>
				<a href="/event" class="@yield('16')"><span class="las la-clipboard-list"></span>
					<span>{{__('nav.event')}}</span></a>
			</li>
			
		</ul>
	</div>
</div>