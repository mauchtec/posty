@extends('layouts.app')
@section('content')
<div class="signup-form">
<form action="{{route('register')}} " method="post">
    @csrf
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2>Sign Up</h2>
    
            </div>
            
        </div>
    </div>
    
    <hr>
    <div class="form-group">
        <div class="row">
            <div class="col"><input type="text" class="form-control 
                @error('name')
                border border-danger
                @enderror" name="name" id="name" placeholder="First Name" value="{{old('name')}} " >
                @error('name')
                    {{$message}}
                @enderror
            </div>
            <!--<div class="col"><input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required="required"></div>-->
        </div>        	
    </div>
    <div class="form-group">
        <input type="email" class="form-control 
        @error('email')
            border border-danger
        @enderror" name="email" id="email" placeholder="Email" required="required" value="{{old('email')}} ">
    </div>
    <div class="form-group">
        <input type="password" class="form-control
        @error('password')
        border border-danger
    @enderror" name="password" id="password" placeholder="Password" required="required" >
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required="required">
    </div>        
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
    </div>
</form>
<div class="hint-text">Already have an account? <a href="#">Login here</a></div>
</div></div>
@endsection