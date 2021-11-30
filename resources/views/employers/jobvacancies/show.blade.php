@extends('employers.employer.show')
@section('list')
	<div class="card shadow p-3 mb-5 bg-white rounded">
					<h4>{{Auth::user()->employer->company->jobvacancy->count()}} Job Post</h4>
					<hr>
					@if(Auth::user()->employer->company->jobvacancy->count() > 0)
					@foreach(Auth::user()->employer->company->jobvacancy as $jobvacancy)
					<div class="card mt-2 mb-3">
						<div class="card-body">
							<p>Job Title : {{$jobvacancy->job_title}}</p>
							<p><i class="fas fa-map-marker-alt"></i>&nbsp;{{$jobvacancy->job_location}} &nbsp;<i class="fas fa-dollar-sign"></i> &nbsp;{{$jobvacancy->job_salary}}</p>
							<small><i class="far fa-clock"></i>&nbsp;{{$jobvacancy->created_at}}&nbsp;&nbsp;&nbsp;<i class="fas fa-th-list"></i>&nbsp;&nbsp;{{$jobvacancy->jobposition->job_position_name}}</small>
							<div class="mt-3"><a href="{{ route('jobvacancies.edit',$jobvacancy->id)}}" class="btn btn-sm btn-warning">Edit</a>
								<form method="post" action="{{route('jobvacancies.destroy',$jobvacancy->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-submit" class="btn btn-danger btn-delete btn-sm">Delete</button>
						</form>
							</div>
						</div>
					</div>
					<div>
					<a class="btn" data-toggle="collapse" href="#Application" aria-expanded="false" aria-controls="collapseExample">
    				View Applications
  					</a>
  					<div class="collapse card" id="Application">
					@foreach($jobvacancy->jobseekers as $jobseeker)
					<div class="card-body">
						<div class="row">
							<div class="col-md-2">
								<img src="{{ asset($jobseeker->photo) }}" class="img-fluid" style="max-height:75px">
							</div>
							<div class="col-md-2">
								<a href="{{ route('showcv',['id'=>$jobseeker->id]) }}"><h4>{{$jobseeker->user->name}}</h4></a>
							</div>

						</div>
						<hr>
					</div>
					@endforeach
					@endforeach

					</div>
					<hr>
					</div>
					<div class="mt-3">
						<a href="{{ route('jobvacancies.create') }}" class="btn btn-primary" type="button">Add New Job Post Now</a>
					</div>
					@else
					<div class="mt-3">
						<p>There is no job post</p>
						<a href="{{ route('jobvacancies.create') }}" class="btn btn-primary" type="button">Add New Job Post Now</a>
					</div>
					@endif
				</div>
@endsection