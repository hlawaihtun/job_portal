@extends('backendtemplate')
@section('title','Business Type')
@section('content')
	<div class="container">
		<div class="card shadow p-3 mb-5 bg-white rounded d-block"> 
		<h2 class="d-inline-block">Skills List</h2>
		<a href="{{ route('skills.create') }}" class="btn btn-primary float-right btn-sm">Add New</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($skills as $skill)
				<tr>
					<td>{{$skill->id}}</td>
					<td>{{$skill->name}}</td>
					<td>
						<a href="{{ route('skills.edit',$skill->id) }}" class="btn btn-warning"><i class="fas  fa-edit"></i></a>
						<form action="{{ route('skills.destroy',$skill->id) }}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-submit" class="btn btn-danger btn-delete"><i class="fas fa-trash"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>
	</div>
@endsection
@section('javascript')
@endsection