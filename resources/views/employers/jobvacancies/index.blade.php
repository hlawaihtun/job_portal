@extends('backendtemplate')
@section('title','Index Form')
@section('content')
	<div class="container  mb-3 shadow p-3 mb-5 bg-white rounded">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Company Name</th>
					<th>Job Title</th>
					<th>Job Salary</th>
					<th>Last Apply Date</th>
					<th colspan="2">More Detail</th>
				</tr>
			</thead>
			<tbody>
				@foreach($jobvacancies as $jobvacancy)
					<tr>
						<td>{{$jobvacancy->id}}</td>
						<td>{{$jobvacancy->company->company_name}}</td>
						<td>{{$jobvacancy->job_title}}</td>
						<td>{{$jobvacancy->job_salary}}</td>
						<td>{{$jobvacancy->last_apply_date}}
						</td>
						<td><a href="#" class="detailBtn" data-jobtype="{{$jobvacancy->jobtype->job_type_name}}" data-title="{{$jobvacancy->job_title}}" data-jobposition="{{$jobvacancy->jobposition->job_position_name}}" data-desc="{{$jobvacancy->job_description}}" data-apply="{{$jobvacancy->howtoapply}}" data-jrequest="{{$jobvacancy->job_request}}" data-isactive="{{$jobvacancy->is_active}}"><span class="badge badge-primary ml-2"><i class='fas fa-eye'></i></span></a></td>
						{{-- <td>
						<a href="{{route('jobvacancies.edit',$jobvacancy->id)}}" class="btn btn-warning"><i class='fas fa-edit'></i></a>
						<form method="post" action="{{route('jobvacancies.destroy',$jobvacancy->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
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

{{-- Detail Modal --}}

<div class="modal fade" id="detailModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title name"></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						Job Type :
					</div>
					<div class="col-md-8 c1">
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						Job Position :
					</div>
					<div class="col-md-8 c2">
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						Description :
					</div>
					<div class="col-md-8 c3">
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						How to Apply :
					</div>
					<div class="col-md-8 c4">
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						Job Require :
					</div>
					<div class="col-md-8 c5">
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						Is Active :
					</div>
					<div class="col-md-8 c6">
						
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function() {
			$('.detailBtn').click(function(){
				var title = $(this).data('title');
				var jobtype = $(this).data('jobtype');
				var jobposition = $(this).data('jobposition');
				var desc = $(this).data('desc');
				var apply = $(this).data('apply');
				var jrequest = $(this).data('jrequest');
				var isactive = $(this).data('isactive');

				$('.name').text(title);
				$('.c1').text(jobtype);
				$('.c2').text(jobposition);
				$('.c3').text(desc);
				$('.c4').text(apply);
				$('.c5').text(jrequest);
				$('.c6').text(isactive);

				$('#detailModal').modal('show');
			})
		});
	</script>
	
@endsection




