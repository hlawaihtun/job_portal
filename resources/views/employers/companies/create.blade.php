@extends('employertemplate')
@section('title','Create Form')
@section('content')
	<div class="container mt-5 mb-3">
		<div class="card shadow p-3 mb-5 bg-white rounded detail">
			<h4>Company Create Form</h4>
			<form action="{{ route('companies.store') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group row mt-5 {{ $errors->has('photo') ? 'has-error' : '' }}">
					<label for="inputPhoto" class="col-md-5 col-form-label">Company Photo</label>
					<div class="col-md-5">
						<input type="file" id="inputPhoto" name="photo" class="d-block">
						<span class="text-danger">{{ $errors->first('photo') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="inputName" class="col-md-5 col-form-label">Company Name</label>
					<div class="col-md-5">
						<input type="text" id="inputName" name="name" class="form-control">
						<span class="text-danger">{{ $errors->first('name') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('reg_no') ? 'has-error' : '' }}">
					<label for="inputRegno" class="col-md-5 col-form-label">Company Registration Number</label>
					<div class="col-md-5">
						<input type="text" id="inputRegno" name="reg_no" class="form-control">
						<span class="text-danger">{{ $errors->first('reg_no') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('size') ? 'has-error' : '' }}">
					<label for="inputSize" class="col-md-5 col-form-label">Company Size</label>
					<div class="col-md-5">
						<input type="text" id="inputSize" name="size" class="form-control">
						<span class="text-danger">{{ $errors->first('size') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('location') ? 'has-error' : '' }}">
					<label for="inputLocation" class="col-md-5 col-form-label">Company Location</label>
					<div class="col-md-5">
						<input type="text" id="inputLocation" name="location" class="form-control">
						<span class="text-danger">{{ $errors->first('location') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
					<label for="inputDesc" class="col-md-5 col-form-label">Company Description</label>
					<div class="col-md-5">
						<textarea type="text" id="inputDesc" name="description" class="form-control" rows="5"></textarea>
						<span class="text-danger">{{ $errors->first('description') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('businesstype') ? 'has-error' : '' }}">
					<label for="inputBusinesstype" class="col-md-5 col-form-label">Business Type</label>
					<div class="col-md-5">
						<select class="form-control" id="inputBusinesstype" name="businesstype">
							<optgroup label="Choose Business Type" active>
								@foreach($businesstypes as $businesstype)
									<option value="{{$businesstype->id}}">{{$businesstype->business_type_name}}</option>
								@endforeach
							</optgroup>	
						</select>
						<span class="text-danger">{{ $errors->first('businesstype') }}</span>
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
