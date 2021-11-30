@extends('employertemplate')
@section('title','Index Form')
@section('content')
	<div class="container mt-5 mb-3">
		<div class="card shadow p-3 mb-5 bg-white rounded detail">
			<h4>Employer Create Form</h4>
			<form action="{{ route('fill_emp') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group row mt-5 {{ $errors->has('photo') ? 'has-error' : '' }}">
					<label for="inputPhoto" class="col-md-5 col-form-label">Photo</label>
					<div class="col-md-5">
						<input type="file" id="inputPhoto" name="photo" class="d-block">
						<span class="text-danger">{{ $errors->first('photo') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('phno') ? 'has-error' : '' }}">
					<label for="inputPhoneno" class="col-md-5 col-form-label">Phone No</label>
					<div class="col-md-5">
						<input type="text" id="inputPhoneno" name="phno" class="form-control">
						<span class="text-danger">{{ $errors->first('phno') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
					<label for="inputAddress" class="col-md-5 col-form-label">Address</label>
					<div class="col-md-5">
						<input type="text" id="inputAddress" name="address" class="form-control">
						<span class="text-danger">{{ $errors->first('address') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('radioGender') ? 'has-error' : '' }}">
					<label class="col-md-5 col-form-label">Gender</label>
					<div class="col-md-5">
						<div class="form-check form-check-inline">
  							<input class="form-check-input" type="radio" name="radioGender" id="inputGender1" value="male">
  							<label class="form-check-label" for="inputGender1">Male</label>
						</div>
							<div class="form-check form-check-inline">
  							<input class="form-check-input" type="radio" name="radioGender" id="inputGender2" value="female">
  							<label class="form-check-label" for="inputGender2">Female</label>
						</div>
						<span class="text-danger">{{ $errors->first('radioGender') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('city') ? 'has-error' : '' }}">
					<label for="inputCity" class="col-md-5 col-form-label">City</label>
					<div class="col-md-5">
						<input type="text" id="inputCity" name="city" class="form-control">
						<span class="text-danger">{{ $errors->first('city') }}</span>
					</div>
				</div>
				<div class="form-group row  mt-4">
					<div class="col-md-5"></div>
					<div class="col-md-5">
						<input type="submit" name="btnsubmit" value="Create" class="btn btn-primary">
					</div>
				</div>

			</form>
		</div>			
	</div>
@endsection
