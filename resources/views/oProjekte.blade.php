<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <title>O Projekte</title>
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
    <h1>O Projekte</h1>
    <p>Táto webová stránka vznikla ako Semestrálna práca popri štúdiu na Žilinskej Univerzite v Žiline, Fakulta Riadenia a Informatiky</p>

    <p><strong>Prečo práve táto téma?</strong></p>
    <p>Futbal, alebo ako ho mnohí nazývajú "The Beautiful Game", je mojou vášňou už od útleho veku. Zbožňujem šport, ale futbal pre mňa vždy predstavoval niečo viac než len hru – je to skutočný životný štýl.
      Je fascinujúce, že tento najpopulárnejší šport na svete, ako ho raz výstižne pomenoval legendárny Patrice Evra, dokázal preniknúť do každého kúta našej planéty.
      No prečo som sa rozhodol venovať svoj web práve klubom z Londýna? **Anglicko je domovom Premier League**, najprestížnejšej a najuznávanejšej futbalovej súťaže na svete.
      Táto liga sa nielenže môže pochváliť výnimočnou kvalitou, ale aj bohatou históriou, ktorá ju odlišuje od ostatných.
      A keďže Londýn hostí vyše 40 profesionálnych klubov – vrátane siedmich tímov v Premier League – je to skutočný futbalový raj.
      Môj srdcový favorit, Arsenal FC, patrí medzi tieto legendárne kluby. Na tomto webe sa ponoríte do fascinujúceho sveta londýnskych futbalových klubov.
      Od aktuálnych súpisiek a trénerov až po bohatú históriu a významné úspechy – všetko je tu pre vás pripravené. Pripravte sa objaviť, ako sa futbal v Londýne spája s vášňou a dedičstvom!</p>
    <h1>Budúce ciele projektu</h1>
    <p>Cieľom projektu zameraného na tému Futbal v Londýne je poskytnúť komplexný prehľad o futbalovej kultúre v hlavnom meste Anglicka. V nasledujúcom období sa plánujeme sústrediť na niekoľko kľúčových cieľov: <br>
        1.  Pridať ďalšie kluby: Rozšírime našu stránku o ďalšie významné londýnske futbalové kluby, aby sme poskytli návštevníkom čo najúplnejší prehľad o futbalovej scéne v Londýne. K existujúcim informáciám o Arsenal FC, Chelsea FC a Tottenham Hotspur pridáme aj kluby ako West Ham United, Fulham a Crystal Palace. <br>
        2.  Rozšíriť obsah o kluboch: Naším cieľom je prehĺbiť informácie o jednotlivých kluboch, vrátane ich histórie, úspechov, ikonických hráčov a súčasného stavu. Chceme zabezpečiť, aby každý klub mal samostatnú sekciu so zaujímavými faktami a aktualizovanými informáciami.<br>
        3.  Pridať live štatistiky a výsledky zo zápasov: V budúcnosti plánujeme integrovať live štatistiky a výsledky zápasov priamo na našu stránku. Týmto spôsobom poskytneme fanúšikom aktuálne informácie o priebehu zápasov, tabuľkách a výkonnosti jednotlivých klubov v reálnom čase. <br>
      Tieto ciele sú zamerané na zlepšenie používateľskej skúsenosti a vytvorenie interaktívneho a informatívneho zdroja pre všetkých nadšencov futbalu v Londýne.</p>
</section>
</div>
</body>
</html>
