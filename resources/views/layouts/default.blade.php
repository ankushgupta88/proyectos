<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body class="login-form-body">
    <header>
        <div class="container-fluid header-top">
        @include('includes.header')
    </div>
    </header>
 <div class="login-form">
    <div class="content d-flex justify-content-center">
            @yield('content')
        </div>
    </div>
    <footer>
        <div class="container">
        @include('includes.footer')
        </div>
    </footer>
</body>
</html>