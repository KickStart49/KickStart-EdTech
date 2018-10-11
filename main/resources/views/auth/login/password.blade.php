@extends('layouts.loginlayout')
@section('content')
@if(session('email'))
	<form method="post" id="loginform">
		<h3 class="title margin2" style="">Welcome</h3>
        <svg width="400" height="54">
            <rect x="55" y="15" rx="20" ry="15" width="320" height="38" class="rectangle" />
            <svg height="100" width="100">
              <circle cx="80" cy="34" r="14" stroke="grey" stroke-width="0.5" fill="purple"/>
          </svg>
          <text class="username" x="120" y="40" fill="black">Hi {{ session('email') }}</text>
        </svg>
        <p class="new3"></p>
        <p class="new2"></p>
        <p class="goto">
          <a href="#" onclick="emailSection()" class="colour">
            <i class="fa fa-arrow-down new5"></i>
          </a>
        </p>
        
        <div class="top">
          <p class="title">To continue, first verify it's you</p>
          <label class="passwordlabel">Enter your password</label>
          <input type="password" class="form-control log thick margin" id="password" name="password">
          <input type="hidden" name="email" id="email" value="{{session('email') }}">
          <p class="loginmessage para"></p>
          <br>
        </div>
		<div class="form-group">
		   <a href="" class="float-left margin">Forgot password?</a>
		   <input type="button" id="submit" class="float-right btn btn-primary bottom-button" value="Next">
		</div>
	</form>
@else
	<div style="text-align: center;">
	<div>Your Session has Expired.</div><br>
	<a class="btn btn-info text-center" href="{{ url()->previous() }}"> <- Go Back</a>
	</div>
@endif
@stop
@section('script')
<script>toastr.success('Welcome {{ session('email') }}');</script>
	<script type="text/javascript">
		$(document).ready(function () {
  toastr.info("Step 2 : Enter Your Password");
  $('#password').focusout(function() {
      $('.passwordlabel').css({
          'top': '68%',
          'color': '#000000',
          'cursor': 'auto',
           'font-size':'100%',
      });
  });
  
  $('#password').change(function(){
    $('#password').focusout(function() {
      if($("#password").val()){
      $('.passwordlabel').css({
          'color': '#000000',
          'top': '68%',
           'font-size':'100%',
      });}
    });
  });
  
  $('#password').focus(function() {
    $('.passwordlabel').css({
      'color': '#4285F4',
      'top': '63%',
      'cursor': 'default',
      'font-size':'90%',
    });
  });
    
  $(".passwordlabel").click(function(){
    $("#password").trigger("focus");
  });
    
  $("#password").trigger("focus");

});

$('#submit').click(function(){

  
  
  var password = $("#password").val();
  // Check Null

  if(!password){

    $(".loginmessage").html("Please provide password");
    toastr.error("please provide Password !");

  }else{
   
    // Check Valid Syntax

    ValidatePassword(password);

  }

});


function ValidatePassword(password) 
{

	var passwordFormat = /^[a-zA-Z0-9!@#\$%\^\&*\)\(+=._-]{6,}$/g
  	
  if(passwordFormat.test(password))
  {
    
    // Check Database
    $(".login").addClass("loading");
  	$(".loadingline").removeClass("hidden");
    setTimeout(Verifypassword, 000);

    function Verifypassword(){
      
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      
      $.ajax({
        method:'post',
        url:"/login/psd/passwordverify",
        data: {
              email : $('#email').val(),
              password: $('#password').val()
        },
        
        success:function(data){
           
          if(data.msg == "true"){

            window.location.href = "{{ session('redirectTo') }}";
           
          }else if(data.msg == "false"){  
             
            $(".password").addClass("loading");
            $(".loadingline").removeClass("hidden");
            $(".login").removeClass("loading");
            $(".loadingline").addClass("hidden");
            $(".loginmessage").html("Invalid Password");
            toastr.error("Invalid Password !");
           
          }else{

            $(".password").addClass("loading");
            $(".loadingline").removeClass("hidden");
            $(".login").removeClass("loading");
            $(".loadingline").addClass("hidden");
            $(".loginmessage").html("Something went wrong.Try again later");
            
          }
        }
      });      
    } 
  }else{

    $(".loginmessage").html("Password must be atleast 6 characters");
    toastr.error("Password must be atleast 6 characters !");

  }
}

/*$(document).keypress(function(e) {
    var keycode = (e.keyCode ? e.keyCode : e.which);
    if (keycode == '13') {
        loginsubmit();
    }
});*/
	</script>
@stop