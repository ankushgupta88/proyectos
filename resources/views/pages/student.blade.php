@extends('layouts.tutorsidebar')
@section('content')
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

      
  </div>
  <div class="col-md-10" style="margin-top: 2rem; border: 1px solid #000; padding: 10px;">
 <table id="example" class="table table-striped table-bordered" style="width:100%;">
        <thead>
            <tr>
              <th></th>
                <th>Nombre</th>
                <th>Nota promedio</th>

               
            </tr>
        </thead>
        <tbody>
        	@foreach ($students as $student)

            <?php  
                      $color = "#ccc";
                      if($student->grade <= 4){

                         $color = "#03C100";

                      }
                      else if($student->grade > 4 &&  $student->grade < 8 ){

                         $color = "#FF8F00";
                      }
                      else{

                          $color = "#FF0008";
                      }
                     ?>
	            <tr>
                <td style="border: none;width: 1%;">  <span class="dot" style=" background-color: <?php echo $color; ?>;"></span></td>
	                <td>
                    <a href="<?php echo url('studentdetail')?>/<?php echo $student->id; ?>">
                    
                    {{ $student->name}} {{ $student->surname}} </a></td>
	                <td>{{ $student->grade}}</td>
	                
	            </tr>
           @endforeach
        </tbody>
       
    </table>
</div>
</div>
 <hr>


@endsection

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
		    $('#example').DataTable({
          order: [[ 0, "ASC" ]],
          "oLanguage": {
              "sLengthMenu":     "Show _MENU_ entradas",
            }
        });
		});

</script>