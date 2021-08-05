<nav class="navbar navbar-expand-lg navbar-light container" style="">
<a class="navbar-brand" href="<?php echo url('/')?>">Mi Panel</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav ml-auto">
@if(Session::get('user'))
<form class="dashboard-header" action="<?php echo url('showstudents')?>" method="post">
@csrf
<label for="course">Choose a Course:</label>
  <select name="course" id="course">
     @foreach ($courses->all() as $course)
        <option value={{ $course['id'] }}>{{ $course['name']}}{{ $course['letra']}}</option>
    @endforeach
</select>
  <button type="submit" name="submit"><i class="fa fa-search"></i></button>
</form>
@endif
</div>
<div class="navbar-nav ml-auto dashboard-links">
@if(Session::get('user'))
<a class="nav-item nav-link welcome-link text-center" href="#">Bienvenido, {{Session::get('user')}}</a>
<a class="nav-item nav-link logout-link" href="<?php echo url('logout')?>">Logout</a>
@else
<a class="nav-item nav-link active login " href="<?php echo url('login')?>">Login</a>
<a class="nav-item nav-link active register  " href="<?php echo url('register')?>">Registro</a>
@endif
</div>
</div>
</nav>
