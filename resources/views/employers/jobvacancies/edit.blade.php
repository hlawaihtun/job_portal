@extends('employertemplate')
@section('title','Update Form')
@section('content')
	
	<link rel="stylesheet" type="text/css" href="{{ asset('employertemplate/css/style.css') }}">

	<div class="container mt-5 mb-3">
		<div class="card shadow p-3 mb-5 bg-white rounded detail">
			<h4>Job Vacancy Create Form</h4>
			<hr>
			<form action="{{ route('jobvacancies.update',$jobvacancy->id) }}" method="post">
				@csrf
				@method('PUT')
				<div class="form-group row mt-5 {{ $errors->has('title') ? 'has-error' : '' }}">
					<label for="inputTitle" class="col-md-5 col-form-label">Job Title</label>
					<div class="col-md-5">
						<input type="text" id="inputTitle" name="title" class="d-block form-control" value="{{$jobvacancy->job_title}}" >
						<span class="text-danger">{{ $errors->first('title') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('jobtype') ? 'has-error' : '' }}">
					<label for="inputJobtype" class="col-md-5 col-form-label">Job Type</label>
					<div class="col-md-5">
						<select class="form-control dropdown1" id="inputJobtype" name="jobtype">
							<optgroup label="Choose Job Type" value="" actived>
								@foreach($jobtypes as $jobtype)
									<option value="{{$jobtype->id}}" @if($jobtype->id == $jobvacancy->job_type_id){{'selected'}} @endif>{{$jobtype->job_type_name}}</option>
								@endforeach
							</optgroup>	
						</select>
						<span class="text-danger">{{ $errors->first('jobtype') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('jobposition') ? 'has-error' : '' }}">
					<label for="inputJobposition" class="col-md-5 col-form-label">Job Position</label>
					<div class="col-md-5">
						<select class="form-control dropdown1" id="inputJobposition" name="jobposition">
							<optgroup label="Choose Job Position" value="" actived>
								@foreach($jobpositions as $jobposition)
									<option value="{{$jobposition->id}}" @if($jobposition->id == $jobvacancy->job_position_id){{'selected'}} @endif>{{$jobposition->job_position_name}}</option>
								@endforeach
							</optgroup>	
						</select>
						<span class="text-danger">{{ $errors->first('jobposition') }}</span>
					</div>
				</div>

				<div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
					<label for="inputDesc" class="col-md-5 col-form-label">Job Description</label>
					<div class="col-md-5">
						<textarea type="text" id="inputDesc" name="description" class="form-control" rows="3">{{$jobvacancy->job_description}}</textarea>
						<span class="text-danger">{{ $errors->first('description') }}</span>
					</div>
				</div>

				<div class="form-group row {{ $errors->has('salary') ? 'has-error' : '' }}">
					<label for="inputSalary" class="col-md-5 col-form-label">Salary</label>
					<div class="col-md-5">
						<input type="text" id="inputSalary" name="salary" class="form-control" value="{{$jobvacancy->job_salary}}">
						<span class="text-danger">{{ $errors->first('salary') }}</span>
					</div>
				</div>

				<div class="form-group row {{ $errors->has('apply') ? 'has-error' : '' }}">
					<label for="inputApply" class="col-md-5 col-form-label">How to Apply</label>
					<div class="col-md-5">
						<textarea type="text" id="inputApply" name="apply" class="form-control" rows="3">{{$jobvacancy->howtoapply}}</textarea>
						<span class="text-danger">{{ $errors->first('apply') }}</span>
					</div>
				</div>

				<div class="form-group row {{ $errors->has('location') ? 'has-error' : '' }}">
					<label for="inputLocation" class="col-md-5 col-form-label">Job Location</label>
					<div class="col-md-5">
						<input type="text" id="inputLocation" name="location" class="form-control" value="{{$jobvacancy->job_location}}">
						<span class="text-danger">{{ $errors->first('location') }}</span>
					</div>
				</div>

				<div class="form-group row {{ $errors->has('request') ? 'has-error' : '' }}">
					<label for="inputRequest" class="col-md-5 col-form-label">Job Request</label>
					<div class="col-md-5">
						<textarea type="text" id="inputRequest" name="request" class="form-control" rows="3">{{$jobvacancy->job_request}}</textarea>
						<span class="text-danger">{{ $errors->first('request') }}</span>
					</div>
				</div>

				<div class="form-group row {{ $errors->has('ladate') ? 'has-error' : '' }}">
					<label for="inputLadate" class="col-md-5 col-form-label">Last Apply Date</label>
					<div class="col-md-3">
						<input type="date" id="inputLadate" name="ladate" class="form-control min-today" placeholder="YYY-MM-DD" data-date-split-input="true" value="{{$jobvacancy->last_apply_date}}">
						<span class="text-danger">{{ $errors->first('ladate') }}</span>
					</div>
				</div>

				<div class="form-group row  mt-4">
					<div class="col-md-5"></div>
					<div class="col-md-5">
						<input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
					</div>
				</div>

			</form>
		</div>		
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(function(){
    $('[type="date"].min-today').prop('min', function(){
        return new Date().toJSON().split('T')[0];
    });
});
	</script>
@endsection
