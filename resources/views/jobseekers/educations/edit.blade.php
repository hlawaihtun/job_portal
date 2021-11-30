@extends('jobseekers.jobseeker.detail')
@section('title','Create Form')
@section('list')
		<div class="shadow p-3 bg-white rounded">
			<h4 class="d-inline-block"><i class="fas fa-graduation-cap"></i>&nbsp;&nbsp;Education</h4>
			<hr>
			<form action="{{ route('jseducations.update',$education->id) }}" method="post">
				@csrf
				@method('PUT')
				<div class="form-group row {{ $errors->has('institute') ? 'has-error' : '' }}">
					<label for="inputIns" class="col-md-5 col-form-label">Institute</label>
					<div class="col-md-5">
						<input type="text" id="inputIns" name="institute" class="form-control" value="{{$education->institute}}">
						<span class="text-danger">{{ $errors->first('institute') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('qualification_level') ? 'has-error' : '' }}">
					<label for="inputQua" class="col-md-5 col-form-label">Qualification level</label>
					<div class="col-md-5">
						<input type="text" id="inputQua" name="qualification_level" class="form-control" value="{{$education->qualification_level}}">
						<span class="text-danger">{{ $errors->first('qualification_level') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('graduation_date') ? 'has-error' : '' }}">
					<label for="inputGra" class="col-md-5 col-form-label">Graducation Date</label>
					<div class="col-md-5">
						<input type="date" id="inputGra" name="graduation_date" class="form-control" value="{{$education->graduation_date}}">
						<span class="text-danger">{{ $errors->first('graduation_date') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('specialization_major') ? 'has-error' : '' }}">
					<label for="inputSpe" class="col-md-5 col-form-label">Specialization Major</label>
					<div class="col-md-5">
						<input type="text" id="inputSpec" name="specialization_major" class="form-control" value="{{$education->specialization_major}}">
						<span class="text-danger">{{ $errors->first('specialization_major') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('nationality') ? 'has-error' : '' }}">
					<label for="inputNat" class="col-md-5 col-form-label">Nationality</label>
					<div class="col-md-5">
						<input type="text" id="inputNat" name="nationality" class="form-control" value="{{$education->nationality}}">
						<span class="text-danger">{{ $errors->first('nationality') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('additional_info') ? 'has-error' : '' }}">
					<label for="inputInfo" class="col-md-5 col-form-label">Additional Info</label>
					<div class="col-md-5">
						<textarea class="form-control" id="inputInfo" name="additional_info" rows="3">{{$education->additional_info}}</textarea>
						<span class="text-danger">{{ $errors->first('additional_info') }}</span>
					</div>
				</div>
				
				<div class="form-group row  mt-4">
					<div class="col-md-5"></div>
					<div class="col-md-5">
						<input type="submit" name="btnsubmit" value="Create" class="btn btn-primary">
						<a class="btn btn-danger" href="{{ route('jseducations.create') }}">Cancel</a>
						
					</div>
				</div>

			</form>
		</div>			

@endsection