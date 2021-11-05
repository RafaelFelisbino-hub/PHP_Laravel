<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <title>SA 02 - Teste</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-dark" href="#">Pacientes <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#">Médicos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#">Procedimentos</a>
        </li>
        </ul>
    </div>
    </nav>
    @yield('content')

    <script src="{{url('assets/bootstrap/js/pacienteJS.js')}}"></script>
</body>
</html>