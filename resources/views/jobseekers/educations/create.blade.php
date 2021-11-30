@extends('jobseekers.jobseeker.detail')
@section('title','Create Form')
@section('list')
		<div class="shadow p-3 bg-white rounded">
			<h4 class="d-inline-block"><i class="fas fa-graduation-cap"></i>&nbsp;&nbsp;Education</h4>
			<button class="btn add-new-btn mr-auto btn-sm btn-primary float-right">Add New</button>

			<div class="edu-list mt-3"> 
				@if(!empty(Auth::user()->jobseeker->educations))
					@foreach(Auth::user()->jobseeker->educations as $education)
						<div class="card mt-2 mb-3">
						  <div class="card-body">
						    <div class="row">
						    	<div class="col-md-4">
						    		<p>{{$education->graduation_date}}</p>
						    	</div>
						    	<div class="col-md-8">
						    		<p>{{$education->institute}}</p>
						    		<p>{{$education->nationality}}</p>
						    		<div class="row">
						    			<div class="col-md-4">
						    				Major
						    			</div>
						    			<div class="col-md-7">{{$education->specialization_major}}</div>
						    		</div>
						    		<div class="row mt-2">
						    			<div class="col-md-4">
						    				Qualification Level
						    			</div>
						    			<div class="col-md-7">{{$education->qualification_level}}</div>
						    		</div>
						    		<div class="row mt-3">
						    			<div class="col-md-2">
						    				<a href="{{ route('jseducations.edit',$education->id) }}" class="btn btn-warning btn-sm">Edit</a>
						    			</div>
						    			<div class="col-md-2">
						    				<form method="post" action="{{route('jseducations.destroy',$education->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
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
			<div class=" mt-3 collapse edu-form" >
			<form action="{{ route('jseducations.store') }}" method="post">
				@csrf
				<div class="form-group row {{ $errors->has('institute') ? 'has-error' : '' }}">
					<label for="inputIns" class="col-md-5 col-form-label">Institute</label>
					<div class="col-md-5">
						<input type="text" id="inputIns" name="institute" class="form-control">
						<span class="text-danger">{{ $errors->first('institute') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('qualification_level') ? 'has-error' : '' }}">
					<label for="inputQua" class="col-md-5 col-form-label">Qualification level</label>
					<div class="col-md-5">
						<input type="text" id="inputQua" name="qualification_level" class="form-control">
						<span class="text-danger">{{ $errors->first('qualification_level') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('graduation_date') ? 'has-error' : '' }}">
					<label for="inputGra" class="col-md-5 col-form-label">Graducation Date</label>
					<div class="col-md-5">
						<input type="date" id="inputGra" name="graduation_date" class="form-control">
						<span class="text-danger">{{ $errors->first('graduation_date') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('specialization_major') ? 'has-error' : '' }}">
					<label for="inputSpe" class="col-md-5 col-form-label">Specialization Major</label>
					<div class="col-md-5">
						<input type="text" id="inputSpec" name="specialization_major" class="form-control">
						<span class="text-danger">{{ $errors->first('specialization_major') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('nationality') ? 'has-error' : '' }}">
					<label for="inputNat" class="col-md-5 col-form-label">Nationality</label>
					<div class="col-md-5">
						<input type="text" id="inputNat" name="nationality" class="form-control">
						<span class="text-danger">{{ $errors->first('nationality') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('additional_info') ? 'has-error' : '' }}">
					<label for="inputInfo" class="col-md-5 col-form-label">Additional Info</label>
					<div class="col-md-5">
						<textarea class="form-control" id="inputInfo" name="additional_info" rows="3"></textarea>
						<span class="text-danger">{{ $errors->first('additional_info') }}</span>
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
		var exp = {{empty(Auth::user()->jobseeker->educations) ? 'false' : 'true'}};
		if(!exp){
			$('.edu-list').hide()
			$('.edu-form').show()
		}
		$('.add-new-btn').on('click', function(){
			
			$('.edu-form').show();
			$('.edu-list').hide();
			$('.add-new-btn').hide();
		})

		$('.cancelbtn').on('click',function(){
			$('.edu-form').hide();
			$('.edu-list').show();
		})
	});
</script>
@endpush
