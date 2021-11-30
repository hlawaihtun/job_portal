@extends('employertemplate')
@section('content')
<div class="container">
	<div class="shadow p-3 bg-white rounded detail mb-5">
		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<a href="" class="float-right">Download as PDF</a>
			</div>
		</div>
		<hr>
		{{-- Start ME --}}
		<div>
			<div class="row">
				<div class="col-md-8">
					<h5>{{$user_obj->user->name}}</h5>
					<p>{{$user_obj->user->email}}</p>
					<p>{{$user_obj->phone_no}}</p>
				</div>
				<div class="col-md-4">
					<img src="{{ url($user_obj->photo) }}" class="img-fluid w-50">
				</div>
			</div>

		</div>
		<hr>

		{{-- End ME --}}

		{{-- Start About Me --}}
		<div>
			<form class="mt-4">
			<p><i class="fas fa-user">&nbsp;&nbsp;&nbsp; About Me</i></p>
			<div class="row mt-4">
				<div class="col-md-3">
					Gender
				</div>
				<div class="col-md-5">
					{{$user_obj->gender}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					Contact
				</div>
				<div class="col-md-5">
					{{$user_obj->phone_no}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					Address
				</div>
				<div class="col-md-5">
					{{$user_obj->address}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					Date of Birth
				</div>
				<div class="col-md-5">
					{{$user_obj->dob}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					City
				</div>
				<div class="col-md-5">
					{{$user_obj->city}}
				</div>
			</div>
		</form>
		</div>
		<hr>
		{{-- End About me --}}

		{{-- Start Experience --}}
		<div>
			<i class="fas fa-briefcase">&nbsp;&nbsp;&nbsp; Experience</i>
			@if(!empty($user_obj->experiences))
					@foreach($user_obj->experiences as $experience)
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
						    	</div>
						    </div>
						    
						  </div>
						</div>
					@endforeach
				@endif
		</div>
		<hr>
		{{-- End Experience --}}

		{{-- Start Education --}}
		<div>
			<i class="fas fa-graduation-cap">&nbsp;&nbsp; Education</i>
			@if(!empty($user_obj->educations))
					@foreach($user_obj->educations as $education)
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
						    		
						    	</div>
						    </div>
						    
						  </div>
						</div>
					@endforeach
				@endif
		</div>
		<hr>
		{{-- End Education --}}

		{{-- Start Skill --}}
		<div>
			<i class="fa fa-cogs" aria-hidden="true">&nbsp;&nbsp; Skills</i>
			@if(!empty($user_obj->jsskills))
					@foreach($user_obj->jsskills as $jsskill)
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
						    		
						    </div>
						    
						  </div>
						</div>
					@endforeach
				@endif

		</div>
		<hr>
		{{-- End Skill --}}

		{{-- Start Language --}}
		<div>
			<i class="fa fa-language" aria-hidden="true">&nbsp;&nbsp; Languages</i>
			@if(!empty($user_obj->jslanguages))
					@foreach($user_obj->jslanguages as $jslanguage)
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
						    </div>
						    
						  </div>
						</div>
					@endforeach
				@endif
		</div>

		{{-- End Language --}}
	</div>
</div>
@endsection