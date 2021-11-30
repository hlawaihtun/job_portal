@extends('employertemplate')
@section('title','Show Form')
@section('content')
	<div class="container mt-5 mb-3">
		<div class="row">
			<div class="col-md-4 profile">
				<div class="card shadow p-3 mb-5 bg-white rounded ">
					<h4>Profile</h4>
					<hr>
					<form>
					<div class="row">
						<div class="col-md-5">
							<p><img src="{{ url(Auth::user()->employer->photo)}}" class="img-fluid w-75"></p>
						</div>
						<div class="col-md-7">
							<h5 class="pt-5">{{Auth::user()->name}}</h5>
							<p class="pt-3"><i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;{{Auth::user()->employer->phone_no}}</p>
						</div>
					</div>
				</form>
				<hr>
				<div class="row mt-2">
					<div class="col-md-12">
						<a href="{{ route('companies.show',Auth::user()->employer->company->id) }}" class="atag btn btn-block text-left"><i class="fas fa-building">&nbsp;&nbsp;&nbsp; Company</i></a>
					</div>
					<div class="col-md-12">
						<a href="{{ route('jobvacancies.show',Auth::user()->employer->company->id) }}" class="atag btn btn-block text-left"><i class="fas fa-briefcase">&nbsp;&nbsp;&nbsp; Job Post</i></a>
					</div>
					<div class="col-md-12">
						<a href="{{ route('aboutemp') }}" class="atag btn btn-block text-left"><i class="fas fa-user">&nbsp;&nbsp;&nbsp; About Me</i></a>
					</div>
				</div>
				</div>
				
			</div>
			<div class="col-md-8 jsresult">
				@yield('list')
			</div>
		</div>	
	</div>
@endsection


