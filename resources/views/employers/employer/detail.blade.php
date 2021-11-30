@extends('employers.employer.show')
@section('list')
	<div class="shadow p-3 bg-white rounded">
		<h5><i class="fas fa-user"></i>&nbsp;&nbsp; About Me</h5>
		<hr>
		<form class="mt-4">
			<div class="row">
				<div class="col-md-3">
					Name
				</div>
				<div class="col-md-5">
					{{Auth::user()->name}}
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-3">
					Email
				</div>
				<div class="col-md-5">
					{{Auth::user()->email}}
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-3">
					Address
				</div>
				<div class="col-md-5">
					{{Auth::user()->employer->address}}
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-3">
					Gender
				</div>
				<div class="col-md-5">
					{{Auth::user()->employer->gender}}
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-3">
					City
				</div>
				<div class="col-md-5">
					{{Auth::user()->employer->city}}
				</div>
			</div>
			
		</form>
	</div>
@endsection