@extends('employers.employer.show')
@section('list')
		<div class="card shadow p-3 mb-3 bg-white rounded ">
			<h4>Company</h4>
			<hr>
			<div>
			<p><img src="{{ asset($company->photo) }}" class="img-fluid w-25 h-25"></p>
			</div>
			<div class="mb-2">
			<table class="table table-borderless">
				<tbody>
					<tr><td><i class="far fa-building"></i></td><td>{{$company->company_name}}</td></tr>
					<tr><td><i class="fas fa-certificate"></i></td><td>{{$company->company_reg_no}}</td></tr>
					<tr><td><i class="fas fa-users"></i></td><td>{{$company->company_size}}</td></tr>
					<tr><td><i class="fas fa-map-marker-alt"></i></td><td>{{$company->company_location}}</td></tr>
					<tr><td><i class="far fa-file-alt"></i></td><td>{{$company->company_description}}</td></tr>
					<tr><td><i class="fas fa-briefcase"></i></td><td>{{$company->businesstype->business_type_name}}</td></tr>
				</tbody>
			</table>
				<a href="{{ route('companies.edit',$company->id) }}" class="btn btn-primary">Edit</a>
			</div>
		</div>
@endsection


