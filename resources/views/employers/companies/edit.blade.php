@extends('employers.employer.show')
@section('list')
				<div class="card shadow p-3 mb-3 bg-white rounded">
					<h4>Company</h4>
					<div>
						<form action="{{ route('companies.update',$company->id) }}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
							<div class="row form-group">
								<div class="col-md-4">
									<img src="{{asset($company->photo)}}" width="100">
								</div>
								<div class="col-md-4">
									<input type="file" id="inputPhoto" name="photo">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-1">
									<i class="far fa-building"></i>
								</div>
								<div class="col-md-6">
									<input type="text" id="inputName" name="name" class="form-control" value="{{$company->company_name}}">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-1">
									<i class="fas fa-certificate"></i>
								</div>
								<div class="col-md-6">
									<input type="text" id="inputRegno" name="reg_no" class="form-control" value="{{$company->company_reg_no}}">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-1">
									<i class="fas fa-users"></i>
								</div>
								<div class="col-md-6">
									<input type="text" id="inputSize" name="size" class="form-control" value="{{$company->company_size}}">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-1">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="col-md-6">
									<input type="text" id="inputLocation" name="location" class="form-control" value="{{$company->company_location}}">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-1">
									<i class="far fa-file-alt"></i>
								</div>
								<div class="col-md-6">
									<textarea type="text" id="inputDesc" name="description" class="form-control" rows="5">{{$company->company_description}}</textarea>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-1">
									<i class="fas fa-briefcase"></i>
								</div>
								<div class="col-md-6">
									<select class="form-control" id="inputBusinesstype" name="businesstype">
										<optgroup label="Choose Business Type">
											@foreach($businesstypes as $businesstype)
											<option value="{{$businesstype->id}}" @if($businesstype->id == $company->business_type_id){{'selected'}} @endif>
												{{$businesstype->business_type_name}}
											</option>
											@endforeach
										</optgroup>	
									</select>
								</div>
							</div>
							<div class="form-group row mt-4">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<input type="submit" class="btn btn-primary" name="btnsubmit" value="Update">
									<a href="{{ route('companies.show',$company->id) }}" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			
			
@endsection
