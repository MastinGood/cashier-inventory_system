@extends('layouts.form')
@section('content')
<div class="content">
            <form action="{{ route('register') }}" method="post" aria-label="{{ __('Register') }}">
            	 @csrf
                <h3 class="font-green">Sign Up</h3>
                <p class="hint"> Enter your personal details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Full Name</label>
                    <input class="form-control placeholder-no-fix {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus /> 
					@if ($errors->has('name'))
						<span class="invalid-feedback" role="alert">
							 <strong>{{ $errors->first('name') }}</strong>
		                </span>
	                @endif
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control placeholder-no-fix {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required/>
					@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
	                            <strong>{{ $errors->first('email') }}</strong>
				            </span>
			        @endif
                    </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" required="required" />
					@if ($errors->has('password'))
	                    <span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
		                </span>
					@endif
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" required /> </div>
                <div class="form-group margin-top-20 margin-bottom-20">
                    <div id="register_tnc_error"> </div>
                </div>
                <div class="form-actions">
                    <a href="{{route('login')}}" id="register-back-btn" class="btn green btn-outline">Back</a>
                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
           
        </div>
@endsection