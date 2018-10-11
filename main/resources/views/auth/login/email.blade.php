@extends('layouts.loginlayout')
@section('content')
<h4 class="title margin2">Sign in</h4>
	 			<p class="title" style="margin-bottom:16%">with your KickStart Account</p>
	 			<form id="loginform" method="post" 
	@if(!empty($redirectTo))
		action="{{ route('requestpassword',['redirectTo'=>$redirectTo]) }}"
	@else
		action="{{ route('requestpassword') }}"
	@endif
		>
		{{ csrf_field() }}
	 				<label class="emaillabel">Enter your email</label>
	    			<input type="email" class="form-control log margin thick wait" id="email" name="email">
	    			<p class="loginmessage para"></p>
	    			<br><p>Already our Member ?</p><a href="{{ route('register') }}">Register</a>
	    			<div class="form-group">
	    				<a href="" class="c float-left margin">Forgot email?</a>
	    				<input type="button" onclick="loginsubmit()" id="next" class="WaitOnClick log float-right btn btn-primary" value="Next">
	    				<!--onkeypress="handleEnter(event)"-->
	    			</div>
	    		</form>
	
@stop
@section('script')
	<script type="text/javascript" src="{{ asset('js/signinwithemail.js') }}"></script>
	
@stop