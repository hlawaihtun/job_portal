@extends('frontendtemplate')
@section('content')
	<div class="container">
	<div class="row detail">
			@if(isset($details))
				<div class="font-weight-bold mb-4 pl-3" >
        		The Search results <b> {{ $query }} </b> are :
        		</div>
				@foreach($details as $jobvacancy)
				<div class="col-md-12 ftco-animate">
		            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
		              <div class="one-third mb-4 mb-md-0">
		                <div class="job-post-item-header align-items-center">
		                	<span class="subadge">{{$jobvacancy->jobtype->job_type_name}}</span>
		                  <h2 class="mr-3 text-black"><a href="{{ route('jobdetail',["id"=>$jobvacancy->id]) }}">{{$jobvacancy->job_title}}</a></h2>
		                </div>
		                <div class="job-post-item-body d-block d-md-flex">
		                  <div class="mr-3"><span><i class="far fa-clock"></i>&nbsp;{{$jobvacancy->last_apply_date}}</span></div>
		                  <div class="mr-3"><span><i class="fas fa-dollar-sign"></i>&nbsp;{{$jobvacancy->job_salary}}</span></div>
		                  <div class="mr-3"><span><i class="fas fa-list-ul"></i>&nbsp;{{$jobvacancy->jobposition->job_position_name}}</span></div>
		                  <div><span class="icon-my_location"></span> <span>{{$jobvacancy->job_location}}</span></div>
		                  
		                </div>
		              </div>

		             {{--  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
		              	<div>
			                <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
			                	<span class="icon-heart"></span>
			                </a>
		                </div>
		                <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
		              </div> --}}
		            </div>
		        </div><!-- end -->
		        @endforeach
		        @else
		        	<div class="font-weight-bold mb-4 pl-3" >
        			The Search results <b> {{ $query }} </b> Not Found!
        		</div>
		        @endif
		       </div>
		       </div>

@endsection