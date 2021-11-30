@extends('frontendtemplate')
@section('content')
	<div class="container mb-5">
		<div class="row">
			<div class="col-md-12 shadow p-3 mb-4 bg-white rounded detail">
				<p>Post Date <span>{{$jobvacancies->created_at}}</span></p>
				<h3 class="text-center"><span>{{$jobvacancies->company->company_name}}</span></h3>
				<p class="pl-5 pr-5"><span>{{$jobvacancies->company->company_description}}</span></p>
				

			</div>
		</div>
		<div class="row ">
			<div class="col-md-7 shadow p-3 bg-white rounded mt-3">
				<div>
					<h4 class="text-center">{{$jobvacancies->job_title}}</h4>
					<p class="pl-3 pr-3">{{$jobvacancies->job_description}}</p>
					<h6 style="font-weight: 700;">Requirements</h6>
					<p class="pl-3 pr-3">{{$jobvacancies->job_request}}</p>
					<h6 style="font-weight: 700;">How To Apply</h6>
					<p class="pl-3 pr-3">{{$jobvacancies->howtoapply}}</p>
				</div>
				<div class="text-center">
				@if(Auth::user()->jobseeker->jobvacancies->contains("id",$jobvacancies->id))
				<a href="{{ route('deletejob',["id"=>$jobvacancies->id]) }}" class="btn btn-danger align-center" style="">Withdraw</a>
				@else
				<a href="{{ route('applyjob',["id"=>$jobvacancies->id]) }}" class="btn btn-primary">Apply</a>
				@endif
				</div>
			</div>
			<div class="col-md-1">
				
			</div>
			<div class="col-md-4 shadow p-3 bg-white rounded mt-3">
				<div class="row">
					<div class="col-md-6">
						Salary
					</div>
					<div class="col-md-6">
						{{$jobvacancies->job_salary}}
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Job Type
					</div>
					<div class="col-md-6">
						{{$jobvacancies->jobtype->job_type_name}}
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Job Position
					</div>
					<div class="col-md-6">
						{{$jobvacancies->jobposition->job_position_name}}
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Job Location
					</div>
					<div class="col-md-6">
						{{$jobvacancies->job_location}}
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Last Apply Date
					</div>
					<div class="col-md-6">
						{{$jobvacancies->last_apply_date}}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection