<nav class="navbar navbar-expand-lg navbar-light container" style="">
<a class="navbar-brand" href="<?php echo url('/')?>">Panel de mis estudiantes</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">

<div class="navbar-nav ml-auto dashboard-links">
@if(Session::get('user'))
<a class="nav-item nav-link welcome-link text-center" href="#">Bienvenido (a),  {{Session::get('user')}}</a>
<a class="nav-item nav-link logout-link" href="<?php echo url('logout')?>">Logout</a>
@else
<a class="nav-item nav-link active login " href="<?php echo url('login')?>">Login</a>
<a class="nav-item nav-link active register  " href="<?php echo url('register')?>">Register</a>
@endif
</div>
</div>

</nav>

<script type="text/javascript">
	$(document).ready(function () {
		  $('.group').hide();
		  $('#option1').show();
		  $('#selectMe').change(function () {
		    $('.group').hide();
		    $('#'+$(this).val()).show();
		  })
});
</script>