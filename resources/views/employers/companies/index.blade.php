@extends('backendtemplate')
@section('title','Index Form')
@section('content')
	<div class="container mt-5 mb-3 shadow p-3 mb-5 bg-white rounded">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Photo</th>
					<th>Company Name</th>
					<th>Location</th>
					<th>More Data</th>
				</tr>
			</thead>
			<tbody>
				@foreach($companies as $company)
					<tr>
						<td>{{$company->id}}</td>
						<td><img src="{{ asset($company->photo) }}" class="img-fluid" style="max-width: 50px; max-height: 50px;"></td>
						<td>{{$company->company_name}}</td>
						<td>
							{{$company->company_location}}
							
						</td>
						<td>
							<a href="#" class="detailBtn" data-photo="{{asset($company->photo)}}" data-name="{{$company->company_name}}" data-codeno="{{$company->company_reg_no}}" data-size="{{$company->company_size}}" data-description="{{$company->company_description}}" data-business="{{$company->businesstype->business_type_name}}" ><span class="badge badge-primary ml-2"><i class='fas fa-eye'></i></span></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>		
	</div>



	<!-- Detail Modal -->
<div class="modal fade" id="detailModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title name"></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<img src="" class="img-fluid itemImg w-50 d-block mx-auto">
					</div>
					<div class="col-md-6 content">
						
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
		$(document).ready(function () {
			$('.detailBtn').click(function () {
				var photo = $(this).data('photo');
				var name = $(this).data('name');
				var codeno = $(this).data('codeno');
				var size = $(this).data('size');
				var description = $(this).data('description');
				var business = $(this).data('business');


				$('.itemImg').attr('src',photo);
				$('.name').text(name);
				$('.content').html(`<p>${codeno}</p>
														  <p>${size}</p>
														  <p>${description}</p>
														<p>${business}</p>`);

				$('#detailModal').modal('show');
			})
		})
	</script>
@endsection
