<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Kluby - Futbal v Londýne</title>
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('register') }}">Futbal v Londýne</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('oprojekte') }}">O Projekte</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('kluby') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kluby
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('arsenal') }}">Arsenal</a></li>
                        <li><a class="dropdown-item" href="{{ route('brentford') }}">Brentford</a></li>
                        <li><a class="dropdown-item" href="{{ route('chelsea') }}">Chelsea</a></li>
                        <li><a class="dropdown-item" href="{{ route('crystal_palace') }}">Crystal Palace</a></li>
                        <li><a class="dropdown-item" href="{{ route('fulham') }}">Fulham</a></li>
                        <li><a class="dropdown-item" href="{{ route('tottenham') }}">Tottenham</a></li>
                        <li><a class="dropdown-item" href="{{ route('west_ham') }}">West Ham</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Prihlásenie</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


<div class="kluby">
  <section class="kluby-text">
    <h1>Vyber si klub</h1>
    <h2>Klikni na logo klubu, o ktorom by si sa chcel dozvedieť viac </h2>
  </section>
  <section class="kluby-obr">
    <a href="{{ route('arsenal') }}">
      <img src="{{ asset('pics/Arsenal-logo.png') }}" alt="arsenal">
    </a>
    <a href="{{ route('brentford') }}">
      <img src="{{ asset('pics/Brentford-logo.png') }}" alt="brentford">
    </a>
    <a href="{{ route('chelsea') }}">
      <img src="{{ asset('pics/Chelsea-logo.png') }}" alt="chelsea">
    </a>
    <a href="{{ route('crystal_palace') }}">
      <img src="{{ asset('pics/Crystal-logo.png') }}" alt="crystal palace">
    </a>
    <a href="{{ route('fulham') }}">
      <img src="{{ asset('pics/Fulham-logo.png') }}" alt="fulham">
    </a>
    <a href="{{ route('tottenham') }}">
      <img src="{{ asset('pics/Tottenham-logo.png') }}" alt="tottenham">
    </a>
    <a href="{{ route('west_ham') }}">
      <img src="{{ asset('pics/WestHam-logo.png') }}" alt="west ham">
    </a>
  </section>
  <h2>Ďalšie kluby budú pridané už čoskoro!</h2>
</div>
</body>
<script src="{{ asset('js/animaciaLogo.js') }}"></script>
</html>
