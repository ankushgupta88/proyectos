<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <header >
        <div class="dashboard-header">
        @include('includes.header')
    </div>
    </header>

    <div id="main" class="content">
	<div class="container-fluid">
       <div class="row">
        <!-- sidebar content -->
       
            @include('includes.sidebar')
       

        <!-- main content -->
       
        <div id="content" class="col-md-10 contentmain">
            @yield('content')
        </div>
    </div>
    </div>
    </div>
    <footer>
        <div class="container">
        @include('includes.footer')
        </div>
    </footer>
</body>
</html>