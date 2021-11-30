@extends('backendtemplate')
@section('title','Index Form')
@section('content')
	<div class="container mt-5 mb-3 shadow p-3 mb-5 bg-white rounded">
		<table class="table table-bordered ">
			<thead>
				<tr>
					<th>No</th>
					<th>JobseekerID</th>
					<th>Name</th>
					<th>Spoken Skill</th>
					<th>Written Skill</th>
					{{-- <th colspan="2">Action</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach($languages as $language)
					<tr>
						<td>{{$language->id}}</td>
						<td>{{$language->jobseeker->id}}</td>
						<td>{{$language->name}}</td>
						<td>{{$language->spoken_skill}}</td>
						<td>{{$language->written_skill}}</td>
						{{-- <td>
						<a href="{{route('jslanguages.edit',$language->id)}}" class="btn btn-warning"><i class='fas fa-edit'></i></a>
						<form method="post" action="{{route('jslanguages.destroy',$language->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
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