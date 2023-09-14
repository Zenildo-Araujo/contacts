<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Contactos</title>
</head>

<body>    
<nav class="navbar navbar-expand-lg navbar-light bg-warning>
<div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('contacts.index') }}>Contacts</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page"
                        href="{{ route('contacts.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('contacts.show_all') }}">Show all Contacts</a>
                </li>
            </ul>
            <div class="justify-end ">
                <div class="col">
                    <a class="btn btn-sm btn-success" href={{ route('contacts.create') }}>Add Contact</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>