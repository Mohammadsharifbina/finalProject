@extends('project.dashboard.master')
@section('fifty', 'active')
@section('route', 'penal')
<style>
	#container {
		padding: 1em;
		Display: flex;
		justify-content: space-between;
		/* flex-direction:column; */
	}

	#container .departments {
		background: gray;
		height: 200px;
	}
</style>
@section('content')
<div class="cards">
	<div class="card-single" style="background:#FF407D; color:white;">
		<div>
			<h1>{{$departments}}</h1>
			<span>{{__('nav.9')}}</span>
		</div>
		<div>
			<span class="las la-users"></span>
		</div>
	</div>
	<div class="card-single"
		style="background:#00215E; color:white;background-image:url(bina.png);background-size:cover;opacity:0.3">
		<div>
			<h1>{{$students}}</h1>
			<span>{{__('nav.7')}}</span>
		</div>
		<div>
			<span class="las la-clipboard-list"></span>
		</div>
	</div>
	<div class="card-single" style="background:#0A6847;">
		<div>
			<h1>{{$teachers}}</h1>
			<span>{{__('nav.8')}}</span>
		</div>

		<div>
			<span class="las la-shopping-bag"></span>
		</div>
	</div>
	<div class="card-single">
		<div>
			<h1>{{$employees}}</h1>
			<span>{{__('nav.9')}}</span>
		</div>

		<div>
			<span class="lab la-google-wallet"></span>
		</div>
	</div>
</div>


<div class="recent-grid">
	<div class="projects">
		<div class="card">
			<div class="card-header">
				<h3>Recent students</h3>
				<button><a href="/student">see all</a> <span class="las la-arrow-right">

					</span></button>
			</div>

			<div class="card-body">
				<div class="table-responsive">
					<table width="100%">
						<thead>
							<tr>
								<td>Name</td>
								<td>Father</td>
								<td>image</td>
							</tr>
						</thead>
						<tbody>
							@foreach($s as $t)
								<tr>
									<td>{{$t->name}}</td>
									<td>{{$t->Father}}</td>
									<td>
										<img src="{{asset('students/' . $t->image)}}" alt="">

									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	@endsection