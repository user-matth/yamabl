<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAMABL</title>
    <link rel="icon" href="resources/assets/back.png">
    <link rel="icon" href="{{ URL::asset('favicon.png') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body class="d-flex h-100 text-center text-bg-white container" style="height: 100vh !important;">
    <div class="d-flex h-100 w-100 text-center text-bg-white">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="border-bottom pb-3">
                <div>
                    <h3 class="float-md-start mb-0 fw-bold">YAMABL</h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link fw-bold py-1 px-2 active" aria-current="page" href="/yamabl/public/">Home</a>
                        <a class="nav-link fw-bold py-1 px-2" href="{{ route('residents.index') }}">Moradores</a>
                        <a class="nav-link fw-bold py-1 px-2" href="{{ route('condominiuns.index') }}">Condomínios</a>
                    </nav>
                </div>
            </header>

            @yield('content')
        </div>
    </div>
</body>
</html>
