@extends('layouts.main')

@section('main-container')
<form method="post" action="{{ route('login-user') }}">
    @csrf
    <div class="row clearfix">
       <label>Email</label>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="email" name="email" placeholder="Enter Email" required>
        </div>
        <label>Password</label>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="password" name="password" placeholder="Your Password" required>
        </div>
    
        <div class="col-lg-12 form-group">
            <button type="submit" class="theme-btn btn-one">Login</button>
        </div>
    </div>
</form>
@endsection
