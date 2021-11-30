@extends('backendtemplate')
@section('title','Index Form')
@section('content')
	<div class="container mt-5 mb-3 shadow p-3 mb-5 bg-white rounded">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>JobseekerID</th>
					<th>Institute</th>
					<th>Qualification Level</th>
					<th>Graduation Date</th>
					<th>Specialization Major</th>
					<th>Nationality</th>
					<th>Additional Info</th>
					{{-- <th colspan="2">Action</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach($educations as $education)
					<tr>
						<td>{{$education->id}}</td>
						<td>{{$education->jobseeker->id}}</td>
						<td>{{$education->institute}}</td>
						<td>{{$education->qualification_level}}</td>
						<td>{{$education->graduation_date}}</td>
						<td>{{$education->specialization_major}}</td>
						<td>{{$education->nationality}}</td>
						<td>{{$education->additional_info}}</td>
						{{-- <td>
						<a href="{{route('jseducations.edit',$education->id)}}" class="btn btn-warning"><i class='fas fa-edit'></i></a>
						<form method="post" action="{{route('jseducations.destroy',$education->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
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