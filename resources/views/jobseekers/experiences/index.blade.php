@extends('backendtemplate')
@section('title','Index Form')
@section('content')
	<div class="container mt-5 mb-3 shadow p-3 mb-5 bg-white rounded">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>JobseekerID</th>
					<th>Company Name</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Job Position</th>
					<th>Business Type</th>
					<th>Is Active</th>
					{{-- <th colspan="2">Action</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach($jsexperiences as $experience)
					<tr>
						<td>{{$experience->id}}</td>
						<td>{{$experience->jobseeker->id}}</td>
						<td>{{$experience->company_name}}</td>
						<td>{{$experience->start_date}}</td>
						<td>{{$experience->end_date}}</td>
						<td>{{$experience->jobposition->job_position_name}}</td>
						<td>{{$experience->businesstype->business_type_name}}</td>
						<td>{{$experience->is_active}}</td>
						{{-- <td>
						<a href="{{route('jsexperiences.edit',$experience->id)}}" class="btn btn-warning"><i class='fas fa-edit'></i></a>
						<form method="post" action="{{route('jsexperiences.destroy',$experience->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-submit" class="btn btn-danger btn-delete"><i class='fas fa-trash'></i></button>
						</form> 
					</td> --}}
					</tr>
				@endforeach
			</tbody>
		</table>		
	</div>

@endsection