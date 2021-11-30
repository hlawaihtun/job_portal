@extends('backendtemplate')
@section('title','Business Type Edit')
@section('content')
	<div class="container">
		<div class="card shadow p-3 mb-5 bg-white rounded"> 
			<h2 class="text-center mt-4">Business Type Edit Form</h2>
			<div class="card-body">
				<form action="{{route('businesstype.update',$businesstype->id)}}" method="post">
					@csrf
					@method('PUT')
					<div class="form-group row">
						<label for="inputName" class="col-md-2 col-form-label">
							Name
						</label>
						<div class="col-md-5">
						<input type="text" name="name" class="form-control" id="inputName" value="{{$businesstype->business_type_name}}">
						</div>
					</div>
					<div class="form-group row mt-4">
						<div class="col-md-2">
						</div>
						<div class="col-md-5">
							<input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('javascript')
@endsection