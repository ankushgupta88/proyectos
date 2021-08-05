@extends('layouts.tutorsidebar')
@section('content')
<!-- <div id="main" style="">
<div class="col-sm-8">
	
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰</span>
</div>
<h3>Dashboard</h3>
</div> -->

@if(Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{Session::get('error')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@endif
<div class="form-group">
	<div class="row">
		<div class="col-md-10
		" style="text-align: center;">
			<h3 style="text-align: center;">Course : {{$coursename->cname}} {{$coursename->letra}}</h3>
		</div>
	</div>
	<div class="row" style="margin-top: 2rem;">
		<div class="col-md-5">
			<form class="dashboard-header" action="#" method="post" style="background: #fff;">
				@csrf
				<label for="course" style="color: #000;">Selecciona un curso:</label>
				  <select name="course" id="course" style="border: 1px solid; border-right: none;">
				    @foreach ($courses as $course)
				        <option value={{ $course->id }}>{{ $course->name}}{{ $course->letra}}</option>
				    @endforeach
				</select>
				  <button type="submit" name="submit" style="border: 1px solid; border-left: none;"><i class="fa fa-search"></i></button>
				</form>
			</div>

			<div class="col-md-5" style="text-align: center; background: #ccc6;">
				<p>Nivel de riesgo  <a href="<?php echo url('students')?>"><i class="fa fa-plus" style="float: right;margin-top: 6px;"></i></a></p>
				<div class="p-container">
			        <div class="progress-1">
			            <span class="title timer" data-from="0" data-to="85" data-speed="1800">85</span>
			            <div class="overlay"></div>
			            <div class="left"></div>
			            <div class="right"></div>
			        </div>
			       
			    </div>
			    <button class="btn btn-primary">Total Alumnos</button>
			    <button class="btn btn-default" style="border: 1px solid #ccc;">Riesgo Medio</button>
			</div>

			<div class="col-md-3" style="text-align: center; background: #ccc6; margin-top: 20px; border: 1px solid;margin-left: 37px;">
				<p>Estudiantes con nota roja: <br>
					<span>15</span></p>
			</div>
	</div>
	

</div>


    <hr>


@endsection