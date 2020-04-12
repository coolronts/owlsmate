<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="icon" href="{{ URL::asset('/img/icon/favicon-32x32.png') }}" sizes="32x32"  type="image/x-icon"/>
  	<link rel="icon" sizes="32x32"  href="{!! asset('img/icon/favicon-32x32.png') !!}"/>
  

	<title>OwlsMate</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />


</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('img/Background.png')">
	    <!--   Big container   -->
		<div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="blue" id="wizardProfile">
		                    <form method="POST" action="{{ route('registration.store') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
		                    	@csrf
		                    	<div class="wizard-header">
									<h3 style="font-weight:lighter" class="wizard-title text-warning">Register</h3>
									<img  src="{{asset('img/default-avatar.png')}}" style="height:60px; width:50px; display:inline">
		                    		<h2 style="display:inline; font-weight:normal; color:#20bed2">Let's Get On Board.</h2>
								</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#basic_info" data-toggle="tab">Basic Information</a></li>
			                            <li><a href="#objective" data-toggle="tab">Objective</a></li>
			                            <li><a href="#more_info" data-toggle="tab">More Info</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="basic_info">
		                              	<div class="row">
											@if (count($errors) > 0)
											@foreach ($errors->all() as $error)
											<h6  style="text-align: center; color: red;" >
											<b>{{ $error }}</b>
											</h6>
											@endforeach
											@endif

											<!--- Picture -->
											<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                        				<img src="img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
		                                            	<input type="file" name="image" id="image">
		                                        	</div>
		                                        	<h6><strong>Choose Picture</strong></h6>
		                                    	</div>
											</div>
											
											
											<!---  Name -->
		                                	<div class="col-sm-6">
												<!--- First Name -->
												<div class="input-group">
													<span class="input-group-addon"><i class="material-icons">face</i></span>
													<div class="form-group label-floating">
			                                          <label class="control-label">{{ __('First Name') }} <small>(required)</small></label>
													  <input name="first_name" id="first_name" type="text" class="form-control ">
													  @if ($errors->has('first_name'))
													  <br>
														<span class="invalid-feedback text-danger" role="alert">
															<strong><small>{{ $errors->first('first_name') }}</small></strong>
														</span>
													  @endif
			                                        </div>
												</div>

												<!--- Last Name -->
												<div class="input-group">
													<span class="input-group-addon"><i class="material-icons">record_voice_over</i></span>
													<div class="form-group label-floating">
													  <label class="control-label">Last Name <small>(required)</small></label>
													  <input name="last_name" id="last_name" type="text" class="form-control">
													  @if ($errors->has('last_name'))
													  <br>
														<span class="invalid-feedback text-danger" role="alert">
															<strong><small>{{ $errors->first('last_name') }}</small></strong>
														</span>
													  @endif
													</div>
												</div>
											</div>
											
											<!--- Email  -->
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon"><i class="material-icons">email</i></span>
													<div class="form-group label-floating">
														<label class="control-label">{{ __('E-Mail Address') }} <small>(required)</small></label>
														<input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
														<small class="text-muted">You are encouraged to register with school email address too be verified student.</small>
														@if ($errors->has('email'))
														<br>
															<span class="invalid-feedback text-danger" role="alert">
																<strong><small>{{ $errors->first('email') }}</small></strong>
															</span>
														@endif
													</div>
												</div>
											</div>

											<!--- Phone  -->
											<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon"><i class="material-icons">phone</i></span>
													<div class="form-group label-floating">
														<label class="control-label">{{ __('Phone') }} <small>(required)</small></label>
														<input id="phone" name="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}">
														<small class="text-muted">Please enter your 8 digit phone number</small>
														
														@if ($errors->has('phone'))
														<br>
															<span class="invalid-feedback text-danger" role="alert">
																<strong><small>{{ $errors->first('phone') }}</small></strong>
															</span>
														@endif
													</div>
												</div>
											</div>

										</div>
									</div>
									
									<!--- Objective  -->
									<div class="tab-pane" id="objective">
										<h4 class="info-text"> And you are going to? (checkboxes) </h4>
										<div class="row">
											<div class="col-sm-10 col-sm-offset-1">
												<div class="col-sm-3">
													<div class="choice" data-toggle="wizard-checkbox">
														<div class="icon"><i class="fa fa-book"></i></div>
														<h4><strong>Sell Books and Notes</strong></h4>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="choice" data-toggle="wizard-checkbox">
														<div class="icon"><i class="fa fa-graduation-cap text-warniing"></i></div>
														<h4><strong>Be a Tutor</strong></h4>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="choice" data-toggle="wizard-checkbox">
														<div class="icon"><i class="material-icons" style="font-size:60px">king_bed</i></div>
														<h4><strong>Looking for a Flatmate</strong></h4>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="choice" data-toggle="wizard-checkbox">
														<div class="icon"><i class="material-icons " style="font-size:60px">emoji_people</i></div>
														<h4><strong>Buddy Up</strong></h4>
													</div>
												</div>
												
											</div>
										</div>
									</div>

									<!--- More Info  -->
									<div class="tab-pane" id="more_info">
										<div class="row">
											<div class="col-sm-12">
												<h4 class="info-text"> More Info and Password </h4>
											</div>
											<div class="row">
											<!--- University  -->
											<div class="col-sm-2 col-sm-offset-1"></div>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="form-group label-floating">
													
													<label class="control-label">{{ __('University') }}</label>
													<select class="form-control" name="university"  id= "university">
														<option disabled="" selected=""></option>
														<option value="Universitetet i Sørøst-Norge-Porsgrunn"> Universitetet i Sørøst-Norge-Porsgrunn </option>
														
													</select>
													<small class="text-muted">Please select the university you are studying.</small>
														
													
												</div>
											</div>
											</div>

											<!--- Program  -->
											<div class="col-sm-4 col-sm-offset-1">
												<div class="form-group label-floating">
													<label class="control-label">{{ __('Program') }}</label>
													<input name = "program" id="program" type="text" class=" form-control{{ $errors->has('program') ? ' is-invalid' : '' }}">
													<small class="text-muted">Please type the program you are studying</small>
														
													@if ($errors->has('program'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('program') }}</strong>
													</span>
													@endif
												</div>
											</div>

											<!--- Year  -->
											<div class="col-sm-4 col-sm-offset-1">
												<div class="form-group label-floating">
													
													<label class="control-label">{{ __('Year') }}</label>
													<select class="form-control" name="year"  id= "year">
														<option disabled="" selected=""></option>
														<option value="1st Year"> 1st Year </option>
														<option value="2nd Year"> 2nd Year </option>
														<option value="3rd Year"> 3rd Year </option>
														<option value="4th Year"> 4th Year  </option>
														<option value="5th Year"> 5th Year </option>
														<option value="Alumni"> Alumni </option>
													</select>
													<small class="text-muted">Please select the year you are studying.</small>
														
													@if ($errors->has('year'))
													<br>
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('year') }}</strong>
													</span>
													@endif
												</div>
											</div>
										</div>
										<div class="row">
											<!--- Password  -->
											<div class="col-sm-4 col-sm-offset-1">
												<div class="form-group label-floating">
													<label class="control-label">{{ __('Password') }}</label>
													<input id="password" type="Password" name="password" class="form-control form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
													<small class="text-muted">Password needs to be atleast 6 character long</small>
														
													@if ($errors->has('password'))
													<br>
														<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('password') }}</strong>
														</span>
													@endif
												</div>
											</div>

											<!--- Confirm Password  -->
											<div class="col-sm-4 col-sm-offset-1">
												<div class="form-group label-floating">
													<label class="control-label">{{ __('Confirm Password') }}</label>
													<input id="password-confirm" name="password_confirmation" type="password" class="form-control">
												</div>
											</div>

										</div>
									</div>
								</div>

									<div class="wizard-footer">
										<div class="form-group pull-right">
											<input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
											<input type='submit' class='btn btn-finish btn-fill btn-success btn-wd'  name='finish' value='Finish' />
										</div>
									</div>

									<div class="pull-left">
										<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
									</div>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div> 
					<!-- wizard container -->
				</div>
			</div><!-- end row -->
			<div class="footer">
				<div class="container text-center"></div>
			</div>
		
		</div> <!--  big container -->

	    
</body>
<!--   Core JS Files   -->
<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="js/jquery.validate.min.js"></script>

</html>
