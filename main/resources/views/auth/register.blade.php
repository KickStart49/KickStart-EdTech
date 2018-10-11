@extends('layouts.loginlayout')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
@stop
@section('content')
<h5 class="title">Create your KickStart Account</h5>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('I am a') }}</label>

                            <div class="col-md-6">
                                <select  id="category" type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" required autofocus><span class="caret"></span>
                               
                                    <option class="dropdown-item" value="student">Student</option>
                                    <option class="dropdown-item" value="teacher">Teacher</option>
                                    <option class="dropdown-item" value="parent">Parent</option>
                                
                                </select>
                                @if ($errors->has('category'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input  id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                
                        
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>



                            <div class="col-md-6">
                                <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required><span id="result"></span>
                        
                                

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                
                        <span class="tbar"></span>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('logindemo') }}" class="btn btn-default">
                                    Sign in instead
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
               

@endsection
@section('script')
  <script type="text/javascript" src="{{asset('js/caps.js')}}"></script>
@stop
