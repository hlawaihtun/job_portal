@extends('jobseekers.jobseeker.detail')
@section('title','Create Form')
@section('list')
		<div class="shadow p-3 bg-white rounded">
			<h4 class="d-inline-block"><i class="fas fa-briefcase"></i>&nbsp;&nbsp;Experience</h4>
			<button class="btn add-new-btn mr-auto btn-sm btn-primary float-right">Add New</button>

			<div class="exp-list mt-3"> 
				@if(!empty(Auth::user()->jobseeker->experiences))
					@foreach(Auth::user()->jobseeker->experiences as $experience)
						<div class="card mt-2 mb-3">
						  <div class="card-body">
						    <div class="row">
						    	<div class="col-md-4">
						    		<p>{{$experience->start_date}} to {{$experience->end_date}}</p>
						    	</div>
						    	<div class="col-md-8">
						    		<p>{{$experience->company_name}}</p>
						    		<p>{{$experience->jobposition->job_position_name}}</p>
						    		<div class="row">
						    			<div class="col-md-4">
						    				Business Type
						    			</div>
						    			<div class="col-md-7">{{$experience->businesstype->business_type_name}}</div>
						    		</div>
						    		<div class="row mt-2">
						    			<div class="col-md-4">
						    				Is Active
						    			</div>
						    			<div class="col-md-7">{{$experience->is_active}}</div>
						    		</div>
						    		<div class="row mt-3">
						    			<div class="col-md-2">
						    				<a href="{{ route('jsexperiences.edit',$experience->id) }}" class="btn btn-warning btn-sm">Edit</a>
						    			</div>
						    			<div class="col-md-2">
						    				<form method="post" action="{{route('jsexperiences.destroy',$experience->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
												@csrf
												@method('DELETE')
											<button type="submit" name="btn-submit" class="btn btn-danger btn-delete btn-sm">Delete</button>
											</form>
						    			</div>
						    		</div>
						    	</div>
						    </div>
						    
						  </div>
						</div>
					@endforeach
				@endif
			</div>
{{-- 			<h4 class="d-inline-block"><i class="fas fa-briefcase"></i>&nbsp;&nbsp;Experience</h4>
			<a class="btn float-right" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fas fa-plus-circle"></i></a>
			<hr> --}}
			<div class="collapse exp-form mt-3" >
			<form action="{{ route('jsexperiences.store') }}" method="post">
				@csrf
				<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="inputName" class="col-md-5 col-form-label">Company Name</label>
					<div class="col-md-5">
						<input type="text" id="inputName" name="name" class="form-control">
						<span class="text-danger">{{ $errors->first('name') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('sdate') ? 'has-error' : '' }}">
					<label for="inputSdate" class="col-md-5 col-form-label">Start Date</label>
					<div class="col-md-5">
						<input type="date" id="inputSdate" name="sdate" class="form-control w-75">
						<span class="text-danger">{{ $errors->first('sdate') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('edate') ? 'has-error' : '' }}">
					<label for="inputEdate" class="col-md-5 col-form-label">End Date</label>
					<div class="col-md-5">
						<input type="date" id="inputEdate" name="edate" class="form-control w-75">
						<span class="text-danger">{{ $errors->first('edate') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('businesstype') ? 'has-error' : '' }}">
					<label for="inputBusinesstype" class="col-md-5 col-form-label">Business Type</label>
					<div class="col-md-5">
						<select class="form-control" id="inputBusinesstype" name="businesstype">
							<optgroup label="Choose Business Type" active>
								@foreach($businesstypes as $businesstype)
									<option value="{{$businesstype->id}}">{{$businesstype->business_type_name}}</option>
								@endforeach
							</optgroup>	
						</select>
						<span class="text-danger">{{ $errors->first('businesstype') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('jobposition') ? 'has-error' : '' }}">
					<label for="inputJobposition" class="col-md-5 col-form-label">Job Position</label>
					<div class="col-md-5">
						<select class="form-control" id="inputJobposition" name="jobposition">
							<optgroup label="Choose Job Position" active>
								@foreach($jobpositions as $jobposition)
									<option value="{{$jobposition->id}}">{{$jobposition->job_position_name}}</option>
								@endforeach
							</optgroup>	
						</select>
						<span class="text-danger">{{ $errors->first('businesstype') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('isactive') ? 'has-error' : '' }}">
					<label for="inputIsactive" class="col-md-5 col-form-label">Is Active</label>
					<div class="col-md-5">
						<input type="text" id="inputIsactive" name="isactive" class="form-control">
						<span class="text-danger">{{ $errors->first('isactive') }}</span>
					</div>
				</div>
				<div class="form-group row  mt-4">
					<div class="col-md-5"></div>
					<div class="col-md-5">
						<input type="submit" name="btnsubmit" value="Create" class="btn btn-primary">
						<button class="btn btn-danger cancelbtn" data-dismiss="exp-form">Cancel</button>
					</div>
				</div>

			</form>
		</div>
		</div>			

@endsection
@push('scripts')
<script>
	$(document).ready(function() {
		var exp = {{empty(Auth::user()->jobseeker->experiences) ? 'false' : 'true'}};
		if(!exp){
			$('.exp-list').hide()
			$('.exp-form').show()
		}
		$('.add-new-btn').on('click', function(){
			
			$('.exp-form').show();
			$('.exp-list').hide();
			$('.add-new-btn').hide();
		})

		$('.cancelbtn').on('click',function(){
			$('.exp-form').hide();
			$('.exp-list').show();
		})
	});
</script>
@endpush
