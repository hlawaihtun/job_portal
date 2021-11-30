@extends('jobseekers.jobseeker.detail')
@section('title','Create Form')
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
					{{$user_obj->name}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					Gender
				</div>
				<div class="col-md-5">
					{{$user_obj->jobseeker->gender}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					Contact
				</div>
				<div class="col-md-5">
					{{$user_obj->jobseeker->phone_no}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					Address
				</div>
				<div class="col-md-5">
					{{$user_obj->jobseeker->address}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					Date of Birth
				</div>
				<div class="col-md-5">
					{{$user_obj->jobseeker->dob}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					City
				</div>
				<div class="col-md-5">
					{{$user_obj->jobseeker->city}}
				</div>
			</div>
		</form>
	</div>
@endsection
