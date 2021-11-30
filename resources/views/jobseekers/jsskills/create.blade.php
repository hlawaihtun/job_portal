@extends('jobseekers.jobseeker.detail')
@section('title','Create Form')
@section('list')
		<div class="shadow p-3 bg-white rounded">
			<h4 class="d-inline-block"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Skill</h4>
			<button class="btn add-new-btn mr-auto btn-sm btn-primary float-right">Add New</button>

			<div class="skill-list mt-3"> 
				@if(!empty(Auth::user()->jobseeker->jsskills))
					@foreach(Auth::user()->jobseeker->jsskills as $jsskill)
						<div class="card mt-2 mb-3">
						  <div class="card-body">
						    <div class="row">
						    	<div class="col-md-8">
						    		<div class="row">
						    			<div class="col-md-4">
						    				Name
						    			</div>
						    			<div class="col-md-7">{{$jsskill->name}}</div>
						    		</div>
						    		<div class="row mt-2">
						    			<div class="col-md-4">
						    				Skill Level
						    			</div>
						    			<div class="col-md-7">{{$jsskill->skill->name}}</div>
						    		</div>
						    		<div class="row mt-3">
						    		
						    			<div class="col-md-2">
						    				<a href="{{ route('jsskills.edit',$jsskill->id) }}" class="btn btn-warning btn-sm">Edit</a>
						    			</div>
						    			<div class="col-md-2">
						    				<form method="post" action="{{route('jsskills.destroy',$jsskill->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
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

			<div class="collapse skill-form mt-3" >
			<form action="{{ route('jsskills.store') }}" method="post">
				@csrf
				<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="inputName" class="col-md-5 col-form-label">Name</label>
					<div class="col-md-5">
						<input type="text" id="inputName" name="name" class="form-control">
						<span class="text-danger">{{ $errors->first('name') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('skill') ? 'has-error' : '' }}">
					<label for="inputSkill" class="col-md-5 col-form-label">Skill Level</label>
					<div class="col-md-5">
						<select class="form-control" id="inputSkill" name="skill">
							<optgroup label="Choose Skill" active>
								@foreach($skills as $skill)
									<option value="{{$skill->id}}">{{$skill->name}}</option>
								@endforeach
							</optgroup>	
						</select>
						<span class="text-danger">{{ $errors->first('skill') }}</span>
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
		var exp = {{empty(Auth::user()->jobseeker->jsskills) ? 'false' : 'true'}};
		if(!exp){
			$('.skill-list').hide()
			$('.skill-form').show()
		}
		$('.add-new-btn').on('click', function(){
			
			$('.skill-form').show();
			$('.skill-list').hide();
			$('.add-new-btn').hide();
		})

		$('.cancelbtn').on('click',function(){
			$('.skill-form').hide();
			$('.skill-list').show();
		})
	});
</script>
@endpush
