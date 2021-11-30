<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="shadow p-3 bg-white rounded">
		{{-- Start ME --}}
		<div>
			<div class="row">
				<div style="display: inline-block;">
					<h5>{{Auth::user()->name}}</h5>
					<p>{{Auth::user()->email}}</p>
					<p>{{Auth::user()->jobseeker->phone_no}}</p>
				</div>
				<img src="{{ url(Auth::user()->jobseeker->photo) }}" style="width: 130px">
			</div>

		</div>
		<hr>

		{{-- End ME --}}

		{{-- Start About Me --}}
		<div>
			<form class="mt-4">
			<h4><i class="fas fa-user">&nbsp;&nbsp;&nbsp; About Me</i></h4>
			<div class="row mt-4">
				<div class="col-md-3">
					Gender
				</div>
				<div class="col-md-5">
					{{Auth::user()->jobseeker->gender}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					Contact
				</div>
				<div class="col-md-5">
					{{Auth::user()->jobseeker->phone_no}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					Address
				</div>
				<div class="col-md-5">
					{{Auth::user()->jobseeker->address}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					Date of Birth
				</div>
				<div class="col-md-5">
					{{Auth::user()->jobseeker->dob}}
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					City
				</div>
				<div class="col-md-5">
					{{Auth::user()->jobseeker->city}}
				</div>
			</div>
		</form>
		</div>
		<hr>
		{{-- End About me --}}

		{{-- Start Experience --}}
		<div>
			<i class="fas fa-briefcase">&nbsp;&nbsp;&nbsp; Experience</i>
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
						    			<div class="col-md-7">{{$jsskill->skill->skill_name}}</div>
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
						    </div>
						    
						  </div>
						</div>
					@endforeach
				@endif
		</div>

		{{-- End Language --}}
	</div>
</body>
</html>