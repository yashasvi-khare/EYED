@extends('layouts.main')

@section('main-container')
<form method="post" action="{{ route('register-user') }}">
    @csrf
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="text" name="name" placeholder="Enter Name" required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="email" name="email" placeholder="Enter Email" required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="password" name="password" placeholder="Your Password" required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="text" name="qualification" placeholder="Enter Qualification" required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <select name="shift" required>
                <option value="">Select Shift</option> <!-- Default option -->
                @foreach($shifts as $shift)
                    <option value="{{ $shift->id }}">{{ $shift->shift }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-12 form-group">
            <button type="submit" class="theme-btn btn-one">Register</button>
        </div>
    </div>
</form>
@endsection
