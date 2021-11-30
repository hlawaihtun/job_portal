@extends('jobseekers.jobseeker.detail')
@section('title','Edit Form')
@section('list')
	<div class=" shadow p-3 bg-white rounded">
		<h4 class="d-inline-block"><i class="fa fa-language" aria-hidden="true"></i>&nbsp;&nbsp;Language</h4>
		<hr>
		<form action="{{ route('jslanguages.update',$language->id) }}" method="post">
				@csrf
				@method('PUT')
				<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="inputName" class="col-md-5 col-form-label">Language Name</label>
					<div class="col-md-5">
						<input type="text" id="inputName" name="name" class="form-control" value="{{$language->name}}">
						<span class="text-danger">{{ $errors->first('name') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('spoken') ? 'has-error' : '' }}">
					<label for="inputSpoken" class="col-md-5 col-form-label">Spoken</label>
					<div class="col-md-2">
						<input type="number" id="inputSpoken" name="spoken" class="form-control" min="1" max="10" placeholder="?/10" value="{{$language->spoken_skill}}">
						<span class="text-danger">{{ $errors->first('spoken') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('written') ? 'has-error' : '' }}">
					<label for="inputWritten" class="col-md-5 col-form-label">Written</label>
					<div class="col-md-2">
						<input type="number" id="inputWritten" name="written" class="form-control" min="1" max="10" placeholder="?/10" value="{{$language->written_skill}}">
						<span class="text-danger">{{ $errors->first('written') }}</span>
					</div>
				</div>
				
				
				<div class="form-group row  mt-4">
					<div class="col-md-5"></div>
					<div class="col-md-5">
						<input type="submit" name="btnsubmit" value="Create" class="btn btn-primary">
						<a href="{{ route('jslanguages.create') }}" class="btn btn-danger">Cancel</a>
					</div>
				</div>

			</form>
	</div>	
@endsection		