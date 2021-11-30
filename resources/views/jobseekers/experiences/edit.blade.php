@extends('jobseekers.jobseeker.detail')
@section('title','Edit Form')
@section('list')
	<div class=" shadow p-3 bg-white rounded">
		<h4 class="d-inline-block"><i class="fas fa-briefcase"></i>&nbsp;&nbsp;Experience</h4>
		<hr>
		<form action="{{ route('jsexperiences.update',$experience->id) }}" method="post">
				@csrf
				@method('PUT')
				<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="inputName" class="col-md-5 col-form-label">Company Name</label>
					<div class="col-md-5">
						<input type="text" id="inputName" name="name" class="form-control" value="{{$experience->company_name}}">
						<span class="text-danger">{{ $errors->first('name') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('sdate') ? 'has-error' : '' }}">
					<label for="inputSdate" class="col-md-5 col-form-label">Start Date</label>
					<div class="col-md-5">
						<input type="date" id="inputSdate" name="sdate" class="form-control w-75" value="{{$experience->start_date}}">
						<span class="text-danger">{{ $errors->first('sdate') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('edate') ? 'has-error' : '' }}">
					<label for="inputEdate" class="col-md-5 col-form-label">End Date</label>
					<div class="col-md-5">
						<input type="date" id="inputEdate" name="edate" class="form-control w-75" value="{{$experience->end_date}}">
						<span class="text-danger">{{ $errors->first('edate') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('businesstype') ? 'has-error' : '' }}">
					<label for="inputBusinesstype" class="col-md-5 col-form-label">Business Type</label>
					<div class="col-md-5">
						<select class="form-control" id="inputBusinesstype" name="businesstype">
							<optgroup label="Choose Business Type" active>
								@foreach($businesstypes as $businesstype)
									<option value="{{$businesstype->id}}" @if($businesstype->id == $experience->business_type_id){{'selected'}} @endif>{{$businesstype->business_type_name}}</option>
								@endforeach
							</optgroup>	
						</select>
						<span class="text-danger">{{ $errors->first('businesstype') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('jobposition') ? 'has-error' : '' }}">
					<label for="inputJobposition" class="col-md-5 col-form-label">Job Position</label>
					<div class="col-md-5">
						<select class="form-control" id="inputJobposition" name="jobposition">
							<optgroup label="Choose Job Position" active>
								@foreach($jobpositions as $jobposition)
									<option value="{{$jobposition->id}}" @if($jobposition->id == $experience->job_position_id){{'selected'}} @endif>{{$jobposition->job_position_name}}</option>
								@endforeach
							</optgroup>	
						</select>
						<span class="text-danger">{{ $errors->first('jobposition') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('isactive') ? 'has-error' : '' }}">
					<label for="inputIsactive" class="col-md-5 col-form-label">Is Active</label>
					<div class="col-md-5">
						<input type="text" id="inputIsactive" name="isactive" class="form-control" value="{{$experience->is_active}}">
						<span class="text-danger">{{ $errors->first('isactive') }}</span>
					</div>
				</div>
				<div class="form-group row  mt-4">
					<div class="col-md-5"></div>
					<div class="col-md-5">
						<input type="submit" name="btnsubmit" value="Create" class="btn btn-primary">
						<a class="btn btn-danger" href="{{ route('jsexperiences.create') }}">Cancel</a>
					</div>
				</div>

			</form>
	</div>	
@endsection		