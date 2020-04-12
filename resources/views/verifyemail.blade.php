
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8" />
   <link rel="icon" href="{{ URL::asset('/img/icon/favicon-32x32.png') }}" type="image/x-icon"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>    OwlsMate </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="{{asset('css/material-dashboard.css')}}" rel="stylesheet" />
  
  <!-- CSS Files -->
  <link href="{{asset('css/material-kit.min.css?v=2.0.7')}}" rel="stylesheet" />
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      window.alert = function(){};
      var defaultCSS = document.getElementById('bootstrap-css');
      function changeCSS(css){
          if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
          else $('head > link').filter(':first').replaceWith(defaultCSS); 
      }
      $( document ).ready(function() {
        var iframe_height = parseInt($('html').height()); 
        window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
      });
  </script>
</head>

<body class="login-page sidebar-collapse" style="background-image: url('{{asset('img/Background.png')}}');; background-size: cover; background-position: top; height: 70px;">
    <div class="page-header header-filter">
        
        <nav class="navbar navbar-expand-lg navbar-light navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-wrapper">
                        <img class="navbar-brand" style="height:70px; width: 200px" src="{{asset('img/logopng1.png')}}">
                    </div>
                </div>
            </div>
        </nav>
		<br><br><br><br><br>

		<div class="container">
		 	<div class="row">
			    <div class="col-lg-6 col-md-6 ml-auto mr-auto">
				    <div class="card card-login">
				        <div class="card-header card-header-info text-center">
				     	    <h4 class="card-title">{{ __('Verify Your Email Address') }}</h4>
		            	</div>
		            	<div class="row">
		            		<div class="col-md-2"></div>
		            		<div class="col-md-8">
		            	@if (session('status'))
						    <div class="alert alert-success" style="max-height: 2px">
						        {{ session('status') }}
						    </div>
						@endif
						@if (session('alert'))
						    <div class="alert alert-danger" style="max-height: 2px">
						       <p class="text-center"> {{ session('alert') }} </p>
						    </div>
						@endif
							</div>
						</div>
			            <div class="card-body">
			            	<h2>Hello! {{$thisUser->first_name}}</h2>
			                <h4>
			                {{ __('Please click the button below to get the Verification Link in your Email Inbox') }}.<br>
			                 {{ __('If you have signed up with your USN email, then you will be termed as ') }}<b>Verified Student.</b>
			                 <div style="text-align: center;">
			                   
		                        <form action=" {{route('resend_verify_email')}} " method="post">
									{{csrf_field()}}
									<input type="hidden" name="data" value="{{$thisUser->email}}">
									<button class="btn btn-info btn-link btn-wd btn-lg" style=" font-weight:bolder; color: #F9BD41" type="submit" value="send"><h5> <b>Click here to get Verification Link </b></h5>
									</button>.
								</form>	
				            </div>
		        		</div>
				    </div>
				</div>
			</div>	
		</div>
		
	</body>
</html>
