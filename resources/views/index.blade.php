<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Futbal v Londýne</title>
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
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

<div class="uvod">
    <section class="uvodny-text">
        <h1>Futbal v Londýne</h1>
        <p>Srdečne vás vítam na mojej webovej stránke, ktorá je venovaná tým najznámejším futbalovým klubom z hlavného mesta Anglicka. Londýn je domovom prestížnych klubov ako Arsenal, Chelsea, Tottenham a mnohých ďalších. <br>
            Na tejto stránke nájdete všetko, čo potrebujete vedieť o týchto kluboch.</p>

        <h2>Čo všetko tu nájdete?</h2>
        <ul>
            <li><strong>Aktuálne súpisky hráčov:</strong> Sledujte najnovšie zmeny a súpisy hráčov vo vašich obľúbených kluboch.</li>
            <li><strong>Trénerské tímy:</strong> Informácie o tréneroch a ich víziách pre klub.</li>
            <li><strong>Informácie o štadióne:</strong> Zistite, kde vaši obľúbení hráči hrajú a aké sú zaujímavosti spojené s ich domovskými štadiónmi.</li>
            <li><strong>História tímu:</strong> Prečítajte si fascinujúce príbehy a míľniky z histórie každého klubu.</li>
            <li><strong>Klubové úspechy:</strong> Pozrite sa na najväčšie úspechy a trofeje, ktoré kluby získali.</li>
            <li><strong>Najznámejší hráči:</strong> Objavte legendy, ktoré formovali klub a ich nezabudnuteľné výkony.</li>
        </ul>

        <p>Na tejto stránke sa dozviete zaujímavé fakty, aktuálne informácie a pikošky o londýnskych kluboch, ktoré vás privedú do centra futbalového diania v Londýne. Nechajte sa inšpirovať a ponorte sa do sveta futbalu!</p>

        <h2>História Londýnského futbalu</h2>
        <p>Futbal v Londýne má bohatú a fascinujúcu históriu, ktorá siaha až do konca 19. storočia. Prvý profesionálny futbalový klub v Londýne, Sheffield FC, bol založený v roku 1857, avšak to sa nestalo v samotnom Londýne. Londýn sa stal skutočným centrom futbalu s vznikom Football League v roku 1888, a s niekoľkými klubmi, ktoré sa stali kľúčovými hráčmi v anglickom futbale. <br>
            Arsenal FC, založený v roku 1886, a Chelsea FC, ktorý vznikol v roku 1905, sú dvoma z najznámejších londýnskych klubov. Arsenal sa stal prvým klubom z Londýna, ktorý vyhral titul vo Football League v roku 1904. Chelsea, známa svojou modrou farbou, sa rýchlo stala silným rivalom a získala popularitu v 60. rokoch, najmä pod vedením trénera Teda Drakea.<br>
            V 20. storočí sa Londýn stal domovom aj pre ďalšie významné kluby, ako sú Tottenham Hotspur, West Ham United a Fulham FC. Rivalita medzi týmito klubmi vytvorila niekoľko nezabudnuteľných momentov v histórii futbalu, pričom derby zápasy medzi Arsenalom a Tottenhamom, známe ako North London Derby, sú jedny z najintenzívnejších a najnavštevovanejších. <br>
            Londýn tiež hostil niekoľko historicky významných udalostí v rámci medzinárodného futbalu, vrátane finále Mistrovstiev sveta 1966 na Wembley. V posledných rokoch sa londýnske kluby pravidelne objavujú v európskych súťažiach, pričom Chelsea vyhrala Ligu majstrov UEFA v rokoch 2012 a 2021, a Arsenal sa tiež snažil o úspech na medzinárodnej scéne.
            Dnes je londýnsky futbal známy nielen svojou konkurenciou a bohatou históriou, ale aj svojou kultúrou, ktorá priťahuje fanúšikov z celého sveta. Futbal je v Londýne nielen športom, ale aj dôležitou súčasťou miestnej identity a kultúry.</p>
</section>

</div>
</body>
