@extends('jobseekers.jobseeker.detail')
@section('title','Create Form')
@section('list')
		<div class="shadow p-3 bg-white rounded">
			<h4 class="d-inline-block"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Skill</h4>
			<hr>
			<form action="{{ route('jsskills.update',$jsskill->id) }}" method="post">
				@csrf
				@method('PUT')
				<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="inputName" class="col-md-5 col-form-label">Name</label>
					<div class="col-md-5">
						<input type="text" id="inputName" name="name" class="form-control" value="{{$jsskill->name}}">
						<span class="text-danger">{{ $errors->first('name') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('skill') ? 'has-error' : '' }}">
					<label for="inputSkill" class="col-md-5 col-form-label">Skill Level</label>
					<div class="col-md-5">
						<select class="form-control" id="inputSkill" name="skill">
							<optgroup label="Choose Skill" active>
								@foreach($skills as $skill)
									<option value="{{$skill->id}}" @if($skill->id == $jsskill->skill_id){{'selected'}} @endif>{{$skill->name}}</option>
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
						<a class="btn btn-danger" href="{{ route('jsskills.create') }}">Cancel</a>
						
					</div>
				</div>

			</form>
		</div>			

@endsection  