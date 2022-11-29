<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .navbar-expand-lg .navbar-collapse  {    display: contents !important;    }
</style>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">PositronX</a>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ url('add-PosteLap') }}">Add Post Pro</a></li>
                <li class="list-group-item"><a href="#">Add Post Exp</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, quam.
                    Veritatis ratione corporis minus numquam nemo quas maiores commodi corrupti!
                    Maxime officia porro temporibus quae nesciunt ipsam quidem rem necessitatibus!
                </p>
            </div>
            @yield('content')
        </div>
        </div>
    </div>

</body>
</html>