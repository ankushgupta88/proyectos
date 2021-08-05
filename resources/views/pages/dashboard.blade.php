@extends('layouts.sidebar')
@section('content')
<!-- <div id="main" style="">
<div class="col-sm-8">
	
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰</span>
</div>
<h3>Dashboard</h3>
</div> -->
<style type="text/css">
	

.margindo{
	margin: 25px;
}
.semi-donut {
  --percentage: 0;
  --fill: #ff0;
  width: 300px;
  height: 150px;
  position: relative;
  color: #fff;
  font-size: 22px;
  font-weight: 600;
  overflow: hidden;
  color: #000;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  box-sizing: border-box;
}
.semi-donut:after {
  content: "";
  width: 300px;
  height: 300px;
  border: 50px solid;
  border-color: rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15) var(--fill) var(--fill);
  position: absolute;
  border-radius: 50%;
  left: 0;
  top: 0;
  box-sizing: border-box;
  transform: rotate(calc( 1deg * ( -45 + var(--percentage) * 1.8 ) ));
  -webkit-animation: fillAnimation 1s ease-in;
          animation: fillAnimation 1s ease-in;
}
</style>
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
	  <div class="column">
	    <div class="card">
	      <h4>Enrolled Students</h4>
	      <p>{{ $enrolled_students}}</p>
	     
	    </div>
	  </div>

	  <div class="column">
	    <div class="card">
	      <h4>Active </h4>
	      <p>{{ $active_students}}</p>
	     
	    </div>
	  </div>

	  <div class="column">
	    <div class="card">
	      <h4>Completed </h4>
	      <p>{{ $completed_students}}</p>
	     
	    </div>
	  </div>

	  <div class="column">
	    <div class="card">
	      <h4>Inactive </h4>
	      <p>{{ $inactive_students}}</p>
	     
	    </div>
	  </div>
	</div>
	<div class="row">
		<div class="semi-donut margindo"  style="--percentage : <?php echo $percentage; ?>; --fill: #33B8FF ;">
  			<?php echo $percentage; ?>% Advance
		</div>

		<div class="margindo" style="margin-top: 9rem;">
			<form class="dashboard-header" action="<?php echo url('export')?>" method="post">
				@csrf
				
				  <button type="submit" name="export">Export to .xlsx</button>
				</form>
			
		</div>
	</div>

</div>


    <hr>


@endsection