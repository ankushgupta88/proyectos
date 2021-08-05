@extends('layouts.default')
@section('content')
<div class="container">
	<div class="login-main-div">
	<div class="row">
		
		
<div class="col-md-6 login-form-first">
<h3 class="text-center">Login Here</h3>
@if(Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{Session::get('error')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@endif
<form action="<?php echo url('loginUser')?>" method="post">
@csrf
<div class="form-group">
<label>Email</label>
<input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email" >
</div>
@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="Enter Password" >
</div>
@error('password')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
<label>Select Role</label>
<select id="role" name="role" class="form-control">
    <option value="<?php echo Config::get('constants.STUDENT_ROLE'); ?>">Student</option>
    <option value="<?php echo Config::get('constants.TUTOR_ROLE'); ?>">Tutor</option>
 </select>
</div>
<div class="submit-button">
<button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>
</div>
<div class="col-md-6 login-image">
		</div>
</div>
</div>
</div>
@endsection