@extends('layouts.app')
@section('content')
<div class="login-form">
    <form action="{{route('login')}} " method="post">
        @csrf
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Sign In</h2>
        
                </div>
                
            </div>
        </div>
    @if(session('status'))
    <div class="bg-danger text-white">{{session('status')}}</div>
    
    @endif
        <hr>
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" name="email" id="email" class="form-control
                @error('emal')
                    border border-danger
                @enderror" placeholder="Username" >
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" name="password" id="password" class="form-control
                @error('password')
                border border-danger
                @enderror" placeholder="Password" >
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="bottom-action clearfix">
            <label class="float-left form-check-label"><input  name="remember" id="remember" type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center small">Don't have an account! <a href="{{route('register')}} ">Sign up here</a>.</p>
</div>
@endsection