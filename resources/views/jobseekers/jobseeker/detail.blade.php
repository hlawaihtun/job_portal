@extends('frontendtemplate')
@section('title','Detail Form')
@section('content')
	<div class="container mt-5 mb-3 ">
		<div class="row">
			<div class="col-md-3 shadow p-3 mb-2 bg-white rounded profile h-75" >
				<form>
					<div class="row">
						<div class="col-md-5">
							<p><img src="{{ url(Auth::user()->jobseeker->photo) }}" class="img-fluid w-75"></p>
						</div>
						<div class="col-md-7">
							<h5>{{Auth::user()->name}}</h5>
							<p class="mt-3"><a href="{{ route('cvform') }}">View My CV</a></p>
						</div>
					</div>
				</form>
				<hr>
				<div class="row mt-2" >
					<div class="col-md-12">
						<a href="{{ route('jsexperiences.create') }}" class="atag btn btn-block text-left"><i class="fas fa-briefcase">&nbsp;&nbsp;&nbsp; Experience</i></a>
					</div>
					<div class="col-md-12">
						<a href="{{ route('jseducations.create') }}" class="atag btn btn-block text-left"><i class="fas fa-graduation-cap">&nbsp;&nbsp; Education</i></a>
					</div>
					<div class="col-md-12">
						<a href="{{ route('jsskills.create') }}" class="atag btn btn-block text-left"><i class="fa fa-cogs" aria-hidden="true">&nbsp;&nbsp; Skills</i></a>
					</div>
					<div class="col-md-12">
						<a href="{{ route('jslanguages.create') }}" class="atag btn btn-block text-left"><i class="fa fa-language" aria-hidden="true">&nbsp;&nbsp; Languages</i></a>
					</div>
					<div class="col-md-12">

						<a href="{{ route('jsapply') }}" class="atag btn btn-block text-left"><i class="fas fa-file-import">&nbsp;&nbsp;&nbsp; Jobs Apply</i></a>
					</div>
					<div class="col-md-12">
						<a href="{{ route('aboutme') }}" class="atag btn btn-block text-left"><i class="fas fa-user">&nbsp;&nbsp;&nbsp; About Me</i></a>
					</div>
				</div>

			</div>
			<div class="col-md-8 jsresult">
				@yield('list')
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>	
@endsection
