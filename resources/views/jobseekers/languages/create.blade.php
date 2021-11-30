@extends('jobseekers.jobseeker.detail')
@section('title','Create Form')
@section('list')
		<div class="shadow p-3 bg-white rounded">
			<h4 class="d-inline-block"><i class="fa fa-language" aria-hidden="true"></i>&nbsp;&nbsp;Language</h4>
			<button class="btn add-new-btn mr-auto btn-sm btn-primary float-right">Add New</button>

			<div class="lang-list mt-3"> 
				
				@if(!empty(Auth::user()->jobseeker->jslanguages))
					@foreach(Auth::user()->jobseeker->jslanguages as $jslanguage)
						<div class="card mt-2 mb-3">
						  <div class="card-body">
						  	<table class="table table-borderless">
						  		<tbody>
						  			<tr><th>Language</th><th>Spoken</th><th>Written</th></tr>
						  			<tr>
						  				<td>{{$jslanguage->name}}</td>
						  				<td>{{$jslanguage->spoken_skill}}/10</td>
						  				<td>{{$jslanguage->written_skill}}/10</td>

						  			</tr>
						  		</tbody>
						  	</table>
						    		<div class="row mt-3">
						    			<div class="col-md-8">
						    				
						    			</div>
						    			<div class="col-md-1">
						    				<a href="{{ route('jslanguages.edit',$jslanguage->id) }}" class="btn btn-warning btn-sm">Edit</a>
						    			</div>
						    			<div class="col-md-2">
						    				<form method="post" action="{{route('jslanguages.destroy',$jslanguage->id)}}" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
												@csrf
												@method('DELETE')
											<button type="submit" name="btn-submit" class="btn btn-danger btn-delete btn-sm">Delete</button>
											</form>
						    			</div>
						    		</div>
						    	
						    </div>
						    
						  </div>
						</div>
					@endforeach
				@endif
			</div>
			<div class=" mt-3 collapse lang-form" >
			<form action="{{ route('jslanguages.store') }}" method="post">
				@csrf
				<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="inputName" class="col-md-5 col-form-label">Language Name</label>
					<div class="col-md-5">
						<input type="text" id="inputName" name="name" class="form-control">
						<span class="text-danger">{{ $errors->first('name') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('spoken') ? 'has-error' : '' }}">
					<label for="inputSpoken" class="col-md-5 col-form-label">Spoken</label>
					<div class="col-md-2">
						<input type="number" id="inputSpoken" name="spoken" class="form-control" min="1" max="10" placeholder="?/10">
						<span class="text-danger">{{ $errors->first('spoken') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('written') ? 'has-error' : '' }}">
					<label for="inputWritten" class="col-md-5 col-form-label">Written</label>
					<div class="col-md-2">
						<input type="number" id="inputWritten" name="written" class="form-control" min="1" max="10" placeholder="?/10">
						<span class="text-danger">{{ $errors->first('written') }}</span>
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
		var exp = {{empty(Auth::user()->jobseeker->jslanguages) ? 'false' : 'true'}};
		if(!exp){
			$('.lang-list').hide()
			$('.lang-form').show()
		}
		$('.add-new-btn').on('click', function(){
			
			$('.lang-form').show();
			$('.lang-list').hide();
			$('.add-new-btn').hide();
		})

		$('.cancelbtn').on('click',function(){
			$('.lang-form').hide();
			$('.lang-list').show();
		})
	});
</script>
@endpush
