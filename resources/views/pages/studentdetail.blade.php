@extends('layouts.tutorsidebar')
@section('content')
<div class="form-group">
  <div class="row">
    <div class="col-md-10
    " style="text-align: center;">
      <h3 style="text-align: center;">Course : {{$coursename->cname}} {{$coursename->letra}}</h3>
      <a href="<?php echo url('students')?>" style="float: right;position: relative;top: -2.5rem;">Back to Courses </a>
    </div>
  </div>
  <div class="row" style="margin-top: 2rem;">
    

  	<div class="col-md-2">&nbsp;</div>
    <div class="col-md-6" style="text-align: center;">
      <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;">{{ $students->name}} {{ $students->surname}}  <span class="avgclass">4.5</span></p>
  	</div>
  	<div class="col-md-3">&nbsp;</div>

  	 <div class="col-md-2" style="text-align: center;">
     
      <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;"> 
         <select id="selectMe" style="border: 1px solid;background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold; ">
            <option value="option1">Modulo 1</option>
            <option value="option2">Modulo 2</option>
            <option value="option3">Modulo 3</option>
            <option value="option4">Modulo 4</option>
        </select>
       </p>
    
  	</div>


  	 <div class="col-md-5" style="text-align: center;margin-left: 3rem;">
        <div id="option1" class="group">
        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Avace Modulo : <br>
        	<span class="modulespan">42%</span>  <span class="avgclassmd">81%</span>
        </p>

        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Desempeno en forus : <br>
        	<span class="modulespan">42%</span>  <span class="avgclassmd">81%</span>
        </p>

        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Desempeno en controles : <br>
        	<span class="modulespan">42%</span>  <span class="avgclassmd">81%</span>
        </p>
      </div>

       <div id="option2" class="group">
        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Avace Modulo : <br>
          <span class="modulespan">50%</span>  <span class="avgclassmd">70%</span>
        </p>

        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Desempeno en forus : <br>
          <span class="modulespan">50%</span>  <span class="avgclassmd">70%</span>
        </p>

        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Desempeno en controles : <br>
          <span class="modulespan">50%</span>  <span class="avgclassmd">70%</span>
        </p>
      </div>

       <div id="option3" class="group">
        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Avace Modulo : <br>
          <span class="modulespan">65%</span>  <span class="avgclassmd">89%</span>
        </p>

        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Desempeno en forus : <br>
          <span class="modulespan">65%</span>  <span class="avgclassmd">89%</span>
        </p>

        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Desempeno en controles : <br>
          <span class="modulespan">65%</span>  <span class="avgclassmd">89%</span>
        </p>
      </div>

      <div id="option4" class="group">
        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Avace Modulo : <br>
          <span class="modulespan">72%</span>  <span class="avgclassmd">91%</span>
        </p>

        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Desempeno en forus : <br>
          <span class="modulespan">72%</span>  <span class="avgclassmd">91%</span>
        </p>

        <p style="background: #ccc6; color: #0300C1; padding: 14px;text-transform: capitalize; font-weight: bold;height: 100px;">Desempeno en controles : <br>
          <span class="modulespan">72%</span>  <span class="avgclassmd">91%</span>
        </p>
      </div>
      
  	</div>

      
  </div>
  
</div>
 <hr>


@endsection

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
		    $('#example').DataTable();
		});

</script>