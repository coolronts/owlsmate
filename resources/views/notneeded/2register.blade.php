@extends('layouts.app')

@section('content')
<div class="image-container set-full-height" style="background-image: url('img/Background.png')">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="blue" id="wizardProfile">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="wizard-header">
                            <h3 class="wizard-title">
                               Register
                            </h3>
                            <h5>This information will let us know more about you.</h5>
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
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label for="first_name" class="control-label">{{ __('First Name') }}<small>(required)</small></label>
                                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name">
                                                @if ($errors->has('first_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group  label-floating">
                                                <label for="email" class="control-label">{{ __('E-Mail Address') }}<small>(required)</small></label>
                                                <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
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
                            </div>
                            </div>
                    <div class="tab-pane" id="account">
                        <div class="row">
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="address">
                        <div class="row">
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" required>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" required>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                
                        <div class="form-group row">
                            <label for="program" class="col-md-4 col-form-label text-md-right">{{ __('Program') }}</label>

                            <div class="col-md-6">
                                <input id="program" type="text" class="form-control{{ $errors->has('program') ? ' is-invalid' : '' }}" name="program">

                                @if ($errors->has('program'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('program') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                            <div class="col-md-6">
                                <input id="year" type="integer" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year">

                                @if ($errors->has('year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>
                    </div>
                            </div>
                            
                            <div class="form-group pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
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
@endsection
