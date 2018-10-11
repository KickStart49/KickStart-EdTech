@extends('layouts.loginlayout')
@section('content')

@if(session('permission') == "student")
<br><br><br>
	<form method="post" action="{{route('code.verification')}}">
	<div style="text-align: center;">
		Please Enter Your Class Code.
		{{csrf_field()}}
		<input type="text" name="classcode">
			<input type="hidden" name="category" value="student">
	</div>
</form>
<br><br>
@else

@if(session('permission') == "parent")
	<form method="post" action="{{route('code.verification')}}">
	<br><br><br>
	{{csrf_field()}}
	<div style="text-align: center;">
		<div class="col-12">please enter your class code.
		<input type="text" name="classcode">
	</div><br>
	<div class="col-12">please enter your child code.
		<input type="hidden" name="category" value="parent">
		<input type="text" name="childcode">
		<input type="submit" value="Submit">
	</div>
	</div>
</form>

<br><br>
@endif 

@endif
    <div style="text-align:center;"><a  href="{{ route('welcome') }}">{{ __('Homepage') }}</a></div>
    
@stop
@section('script')
	<script type="text/javascript">toastr.success("Your code has been successfuly generated"); toastr.info("Step 4 : Verify your Teacher's/child's code to enter in our KickStart Classroom"); </script>
@stop