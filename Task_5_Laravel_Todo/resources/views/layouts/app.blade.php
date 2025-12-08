<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Todo App</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
