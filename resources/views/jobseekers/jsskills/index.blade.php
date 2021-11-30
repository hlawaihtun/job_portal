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
					<th>Skill</th>
					{{-- <th colspan="2">Action</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach($jsskills as $jsskill)
					<tr>
						<td>{{$jsskill->id}}</td>
						<td>{{$jsskill->jobseeker->id}}</td>
						<td>{{$jsskill->name}}</td>
						<td>{{$jsskill->skill->id}}</td>
						{{-- <td>
						<a href="{{route('jsskills.edit',$jsskill->id)}}" class="btn btn-warning"><i class='fas fa-edit'></i></a>
						<form method="post" action="{{route('jsskills.destroy',$jsskill->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
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