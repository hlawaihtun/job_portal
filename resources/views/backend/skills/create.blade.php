@extends('backendtemplate')
@section('title','Business Type')
@section('content')
	<div class="container">
		<div class="card shadow p-3 mb-5 bg-white rounded"> 
			<h2 class="text-center mt-4">Skill Level Create Form</h2>
			<div class="card-body">
				<form action="{{route('skills.store')}}" method="post">
					@csrf
					<div class="form-group row">
						<label for="inputName" class="col-md-2 col-form-label">
							Name
						</label>
						<div class="col-md-5">
						<input type="text" name="name" class="form-control" id="inputName" placeholder="Enter Skill Name">
						</div>
					</div>
					<div class="form-group row mt-4">
						<div class="col-md-2">
						</div>
						<div class="col-md-5">
							<input type="submit" name="btnsubmit" value="Create" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('javascript')
@endsection