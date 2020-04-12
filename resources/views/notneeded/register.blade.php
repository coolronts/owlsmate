<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon.ico">

	<title>Registration-OWLMATE</title>

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
		        	 @if (session('status'))
                						{{session('status')}}
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="blue" id="wizardProfile">
		                    <form method="POST" action="{{ route('registration.store') }}" aria-label="{{ __('Register') }}">
		                    	@csrf
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   Register
		                        	</h3>
									<h5>This information will let us know more about you.</h5>
									 @if (session('status'))
                						{{session('status')}}
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">About</a></li>
			                            <li><a href="#account" data-toggle="tab">Account</a></li>
			                            <li><a href="#address" data-toggle="tab">Address</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                              <div class="row">
		                                	<h4 class="info-text"> Let's start with the basic information (with validation)</h4>
		                                	<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<h6>Choose Picture</h6>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>

													<div class="form-group label-floating">
			                                          <label class="control-label">{{ __('Name') }} <small>(required)</small></label>
			                                          <input name="firstname" type="text" class="form-control ">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">record_voice_over</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">Last Name <small>(required)</small></label>
													  <input name="lastname" type="text" class="form-control">
													</div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">{{ __('E-Mail Address') }} <small>(required)</small></label>
			                                            <input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>


                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">phone</i>
													</span>
													<div class="form-group label-floating">
			                                            <label class="control-label">{{ __('Phone') }} <small>(required)</small></label>
			                                            <input id="phone" name="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}">
			                                             @if ($errors->has('phone'))
						                                    <span class="invalid-feedback" role="alert">
						                                        <strong>{{ $errors->first('phone') }}</strong>
						                                    </span>
						                                @endif
			                                        </div>
												</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="account">
		                                <h4 class="info-text"> And you are going to? (checkboxes) </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Books">
		                                                <div class="icon">
		                                                    <i class="fa fa-book"></i>
		                                                </div>
		                                                <h6><strong>Selling Books</strong></h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Notes">
		                                                <div class="icon">
		                                                    <i class="fa fa-files-o"></i>
		                                                </div>
		                                                <h6><strong>Selling Notes</strong></h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Tutor">
		                                                <div class="icon">
		                                                   <i class="fa fa-graduation-cap"></i>
		                                                </div>
		                                                <h6><strong>Be a Tutor</strong></h6>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h4 class="info-text"> More Info and Password </h4>
		                                    </div>
		                                    <div class="col-sm-7 col-sm-offset-1">
	                                        	<div class="form-group label-floating">
	                                        		<label class="control-label">{{ __('Program') }}</label>
	                                    			<input name = "programe" id="program" type="text" class=" form-control{{ $errors->has('program') ? ' is-invalid' : '' }}">
	                                    			@if ($errors->has('program'))
				                                    <span class="invalid-feedback" role="alert">
				                                        <strong>{{ $errors->first('program') }}</strong>
				                                    </span>
				                                @endif
	                                        	</div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">{{ __('Year') }}</label>
		                                            <input type="text" name="Year" class="form-control {{ $errors->has('year') ? ' is-invalid' : '' }}">
		                                            @if ($errors->has('year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">{{ __('Password') }}</label>
		                                            <input id="password" type="Password" name="password" class="form-control form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
		                                             @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">{{ __('Confirm Password') }}</label>
		                                            <input id="password-confirm" name="password_confirmation" type="password" class="form-control">
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
		                                <button type="submit" class="btn btn-finish btn-fill btn-success btn-wd" value='Finish'>
                                    {{ __('Register') }}
                                </button>
		                                
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	          
	        </div>
	    </div>
	</div>

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
