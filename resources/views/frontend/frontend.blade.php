@extends('frontendtemplate')
@section('title','Employer')
@section('content')
	<div class="hero-wrap img" style="background-image: url({{asset('frontendtemplate/images/bg_1.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
      	<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
	        <div class="col-md-10 d-flex align-items-center ftco-animate">
	        	<div class="text text-center pt-5 mt-md-5">
	        		<p class="mb-4">Find Job, Employment, and Career Opportunities</p>
	            <h1 class="mb-5">The Eassiest Way to Get Your New Job</h1>
							<div class="ftco-counter ftco-no-pt ftco-no-pb">
			        	<div class="row">
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-worldwide"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="46">0</strong>
					                <span>Countries</span>
				                </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-visitor"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="450">0</strong>
					                <span>Companies</span>
					              </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-resume"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="80000">0</strong>
					                <span>Active Employees</span>
					              </div>
				              </div>
				            </div>
				          </div>
				        </div>
			        </div>
							<div class="ftco-search my-md-5">
								<div class="row">
			            <div class="col-md-12 nav-link-wrap">
				            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>

				              {{-- <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a> --}}

				            </div>
				          </div>
				          <div class="col-md-12 tab-wrap">
				            
				            <div class="tab-content p-4" id="v-pills-tabContent">

				              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
				              	<form action="{{ route('searchjob') }}" method="GET" class="search-job">
				              		{{csrf_field()}}
				              		<div class="row no-gutters">
				              			<div class="col-md mr-md-2">
				              				<div class="form-group">
					              				<div class="form-field">
					              					<div class="icon"><span class="icon-briefcase"></span></div>
									                <input type="text" class="form-control" placeholder="eg. Garphic. Web Developer" name="jobtitle" value="{{ isset($jobtitle) ? $jobtitle : '' }}">
									              </div>  
								              </div>
				              			</div>
				              			{{-- <div class="col-md mr-md-2">
				              				<div class="form-group">
				              					<div class="form-field">
					              					<div class="select-wrap">
							                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
							                      	<select class="form-control dropdown1" id="inputJobtype" name="jobtype">
														<option label="Choose Job Type" value="0"></option>
														@foreach($jobtypes as $jobtype)
														<option value="{{$jobtype->id}}" class="option">{{$jobtype->job_type_name}}</option>
														@endforeach
													</select>
							                    </div>
									              </div>
								              </div>
				              			</div> --}}
				              			{{-- <div class="col-md mr-md-2">
				              				<div class="form-group">
				              					<div class="form-field">
					              					<div class="icon"><span class="icon-map-marker"></span></div>
									                <input type="text" class="form-control" placeholder="Location">
									              </div>
								              </div>
				              			</div> --}}
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
								                	<button type="submit" class="form-control btn btn-primary">Search</button>
									              </div>
								              </div>
				              			</div>
				              		</div>
				              	</form>
				              </div>

				              {{-- <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
				              	<form action="#" class="search-job">
				              		<div class="row">
				              			<div class="col-md">
				              				<div class="form-group">
					              				<div class="form-field">
					              					<div class="icon"><span class="icon-user"></span></div>
									                <input type="text" class="form-control" placeholder="eg. Adam Scott">
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
					              					<div class="select-wrap">
							                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
							                      <select name="" id="" class="form-control">
							                      	<option value="">Category</option>
							                      	<option value="">Full Time</option>
							                        <option value="">Part Time</option>
							                        <option value="">Freelance</option>
							                        <option value="">Internship</option>
							                        <option value="">Temporary</option>
							                      </select>
							                    </div>
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
					              					<div class="icon"><span class="icon-map-marker"></span></div>
									                <input type="text" class="form-control" placeholder="Location">
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
									                <button type="submit" class="form-control btn btn-primary">Search</button>
									              </div>
								              </div>
				              			</div>
				              		</div>
				              	</form>
				              </div> --}}
				            </div>
				          </div>
				        </div>
			        </div>
	          </div>
	        </div>
	    	</div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb mb-5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="category-wrap">
    					<div class="row no-gutters">
    						<div class="col-md-2">
    							<div class="top-category text-center no-border-left">
    								<h3><a href="#">Website &amp; Software</a></h3>
    								<span class="icon flaticon-contact"></span>
    								<p><span class="number">143</span> <span>Open position</span></p>
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center active">
    								<h3><a href="#">Education &amp; Training</a></h3>
    								<span class="icon flaticon-mortarboard"></span>
    								<p><span class="number">143</span> <span>Open position</span></p>
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Graphic &amp; UI/UX Design</a></h3>
    								<span class="icon flaticon-idea"></span>
    								<p><span class="number">143</span> <span>Open position</span></p>
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Accounting &amp; Finance</a></h3>
    								<span class="icon flaticon-accounting"></span>
    								<p><span class="number">143</span> <span>Open position</span></p>
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Restaurant &amp; Food</a></h3>
    								<span class="icon flaticon-dish"></span>
    								<p><span class="number">143</span> <span>Open position</span></p>
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Health &amp; Hospital</a></h3>
    								<span class="icon flaticon-stethoscope"></span>
    								<p><span class="number">143</span> <span>Open position</span></p>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

   {{--  <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Job Categories</span>
            <h2 class="mb-0">Top Categories</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
        			<li><a href="#">Web Development <br><span class="number">354</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Graphic Designer <br><span class="number">143</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Multimedia <br><span class="number">100</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Advertising <br><span class="number">90</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
        			<li><a href="#">Education &amp; Training <br><span class="number">100</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">English <br><span class="number">200</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Social Media <br><span class="number">300</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Writing <br><span class="number">150</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
        			<li><a href="#">PHP Programming <br><span class="number">400</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Project Management <br><span class="number">100</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Finance Management <br><span class="number">222</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Office &amp; Admin <br><span class="number">123</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
        			<li><a href="#">Web Designer <br><span class="number">324</span> <span>Open position</span></span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Customer Service <br><span class="number">564</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Marketing &amp; Sales <br><span class="number">234</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Software Development <br><span class="number">425</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		</ul>
        	</div>
        </div>
    	</div>
    </section> --}}

    <section class="ftco-section services-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Millions of Jobs</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-team"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Easy To Manage Jobs</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-career"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Top Careers</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employees"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Expert Candidates</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 pr-lg-5">
						<div class="row justify-content-center pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Recently Added Jobs</span>
		            <h2 class="mb-4">Featured Jobs Posts For This Week</h2>
		          </div>
		        </div>
				<div class="row">
				@foreach($jobvacancies as $jobvacancy)
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

		     {{--   <div class="col-lg-3 sidebar">
		        <div class="row justify-content-center pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Top Recruitments</h2>
		          </div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="images/company-1.jpg" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">Company Company</a></h3>
			        		<p><span class="number">500</span> <span>Open position</span></p>
			        	</div>
		        	</div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="images/company-2.jpg" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">Facebook Company</a></h3>
			        		<p><span class="number">700</span> <span>Open position</span></p>
			        	</div>
			        </div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="images/company-3.jpg" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">IT Programming INC</a></h3>
			        		<p><span class="number">700</span> <span>Open position</span></p>
			        	</div>
			        </div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="images/company-4.jpg" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">IT Programming INC</a></h3>
			        		<p><span class="number">700</span> <span>Open position</span></p>
			        	</div>
			        </div> --}}
		        </div>
		      </div>
				</div> 
			</div>
		</section>
@endsection
