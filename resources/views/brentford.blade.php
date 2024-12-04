<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Brentford FC - Futbal v Londýne</title>
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


<div class="kontent">
  <section class="intro">
    <div class="intro-text">
    <h1>Brentford FC</h1>
    <p>
      Brentford Football Club (Brentford FC), známy aj ako "The Bees", je futbalový klub zo západného Londýna, založený v roku 1889. Väčšinu svojej histórie strávil v nižších ligách, no v posledných rokoch zažíva vzostup.
      Brentford je dnes známy svojím moderným prístupom k futbalu, založeným na pokročilej dátovej analýze, ktorá sa prejavuje pri prestupoch aj taktických rozhodnutiach.
      Domáce zápasy hrá na Brentford Community Stadium, ktorý má kapacitu 17 250 miest, kam sa klub presťahoval v roku 2020 po viac ako sto rokoch na Griffin Parku.
      V sezóne 2020/2021 sa Brentfordu podarilo postúpiť do Premier League po viac ako 70 rokoch, čo bol pre klub historický úspech.
      Aj napriek tomu, že klub nemá rovnaké finančné zdroje ako väčšie londýnske tímy, jeho inovatívny prístup a dynamický futbal mu umožnili konkurovať v najvyššej súťaži.
      Brentford sa dnes považuje za jeden z najrýchlejšie sa rozvíjajúcich klubov v Anglicku. Aj keď nemá rovnaké finančné zdroje ako väčšie londýnske kluby, svojou filozofiou a moderným prístupom dokazuje,
      že aj menšie tímy môžu byť úspešné a konkurovať najlepším. Klub pokračuje vo svojom rozvoji a je známy svojou oddanosťou fanúšikom, modernou infraštruktúrou a ambíciou udržať si miesto v Premier League na dlhodobo.
      Brentford spočiatku hral amatérsky futbal predtým, ako vstúpil do londýnskej ligy v roku 1896 a skončil ako druhý v druhej a potom prvej divízii, aby vyhral voľby do južnej ligy v roku 1898.
      Brentford má slabú bilanciu vo finále, keď skončil ako druhý v troch finále. Brentford však vyhral finále EFL Championship v roku 2021, a postúpil tak do Premier League - na najvyššiu úroveň prvýkrát od sezóny 1946-47.
    </p>
    </div>
    <div class="intro-obr">
      <img src="{{ asset('pics/Brentford-logo.png') }}" alt="brentford logo">
    </div>
  </section>
  <section class="supiska">
    <div class="supiska-kontent">
      <div class="supiska-txt">
        <h1>Súpiska pre sezónu 2024/2025</h1>
        <div class="brankari">
          <p><strong>Brankári</strong></p>
          <p> #13 Cox Matthew <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #1  Flekken Mark <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br>
            #12 Valdimarsson Hakon Rafn <img src="{{ asset('pics/iceland.png') }}" alt="isl" class="ikona-vlajky"><br> </p>
        </div>
        <div class="obrancovia">
          <p><strong>Obrancovia</strong></p>
          <p> #20 Ajer Kristoffer <img src="{{ asset('pics/norway.png') }}" alt="nor" class="ikona-vlajky"><br>
            #22 Collins Nathan Michael <img src="{{ asset('pics/ireland.png') }}" alt="irs" class="ikona-vlajky"><br>
            #43 Fredrick Benjamin <img src="{{ asset('pics/nigeria.png') }}" alt="nig" class="ikona-vlajky"><br>
            #36 Kim Ji-Soo <img src="{{ asset('pics/south-korea.png') }}" alt="juk" class="ikona-vlajky"><br>
            #16 Mee Ben <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
            #21 Meghoma Jayden <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #5  Pinnock Ethan <img src="{{ asset('pics/jamaica.png') }}" alt="jam" class="ikona-vlajky"><br>
            #30 Roerslev Rasmussen Mads <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"> <br>
            #4  van den Berg Sepp <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br></p>
        </div>
        <div class="stredopoliari">
          <p><strong>Stredopoliari</strong></p>
          <p> #14 Carvalho Fabio <img src="{{ asset('pics/portugal.png') }}" alt="por" class="ikona-vlajky"> <br>
            #24 Damsgaard Mikkel <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"> <br>
            #39 Gustavo Nunes <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
            #27 Janelt Vitaly <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"> <br>
            #8  Jensen Mathias <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
            #26 Konak Yunus Emre <img src="{{ asset('pics/turkey.png') }}" alt="tur" class="ikona-vlajky"> <br>
            #6  Noorgaard Christian (<strong>C</strong>) <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
            #16 Owen Riley <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
            #7  Schade Kevin <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"><br>
            #28 Trevitt Ryan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #18 Yarmolyuk Yegor <img src="{{ asset('pics/ukraine.png') }}" alt="ukr" class="ikona-vlajky"> <br>
            #42 Yogane Tony <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br></p>
        </div>
        <div class="utocnici">
          <p><strong>Útočníci</strong></p>
          <p> #23 Lewis-Potter Keane <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #19 Mbeumo Bryan <img src="{{ asset('pics/cameroon.png') }}" alt="cam" class="ikona-vlajky"><br>
            #40 Morgan Iwan <img src="{{ asset('pics/wales.png') }}" alt="wal" class="ikona-vlajky"> <br>
            #99 Thiago Igor <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"> <br>
            #11 Wissa Yoane <img src="{{ asset('pics/congo.png') }}" alt="drc" class="ikona-vlajky"><br></p>
          <p><strong>Tréner</strong></p>
          <p> Frank Thomas <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"></p>
        </div>
      </div>
      <div class="supiska-obr">
        <img src="{{ asset('pics/Brentford-supiska.jpg') }}" alt="Arsenal supiska 2024/25">
        <p>Tímové foto Brentfordu FC pre sezónu 2024/25</p>
      </div>
    </div>
  </section>
  <section class="stadion">
    <div class="stadion-kontent">
      <div class="stadion-txt">
        <h1>Brentford Community Stadium</h1>
        <p>
          Brentford Community Stadium, známy aj pod názvom Gtech Community Stadium (kvôli sponzorstvu), je moderný štadión nachádzajúci sa v londýnskej štvrti Hounslow.
          Bol otvorený v septembri 2020 a slúži ako domovský stánok futbalového klubu Brentford FC. Štadión má kapacitu 17 250 divákov
          a je prispôsobený na organizovanie futbalových aj rugbyových zápasov, pričom ho využíva aj tím London Irish RFC pre zápasy rugby. <br>
          Štadión je vybavený modernými technológiami a zariadeniami, vrátane komfortných sedadiel a kvalitných hospitality služieb pre divákov.
          Nachádza sa v blízkosti železničnej stanice Kew Bridge, čo zabezpečuje jednoduchý prístup pre fanúšikov cestujúcich verejnou dopravou. <br>
          Brentford Community Stadium nahradil ikonický Griffin Park, kde Brentford FC hrával viac ako sto rokov.
          Tento štadión predstavuje pre klub novú kapitolu a symbol ich ambícií v najvyššej anglickej lige, Premier League. <br>
          Plán klubu presťahovať sa na nový štadión vznikol už v roku 2007, ale obrovský krok vpred nastal až keď 28. júna 2012 klub kúpil pozemok o výmere 31 000 m²
          na Lionel Road v Brentforde od spoločnosti Barratt Homes, ktorá pôvodne získala pozemok v januári 2008.
          Cieľom klubu bolo postaviť na pozemku štadión s kapacitou 20 000 divákov včas pred začiatkom sezóny 2016/2017 s možnosťou rozšírenia štadióna na 25 000 miest. <br>
          Práce na novom štadióne sa oficiálne začali 24. marca 2017 kolaudáciou a prípravnými prácami. Hlavné práce sa začali na jar 2018.
          30. augusta 2020 Brentford potvrdil, že štadión je dokončený a pripravený na usporiadanie futbalových zápasov.
        </p>
      </div>
      <div class="stadion-obr">
        <img src="{{ asset('pics/Brentford-stadium.jpg') }}" alt="Brentford Community Stadium">
      </div>
    </div>
  </section>
  <section class="treneri">
    <div class="tabulka-kontainer">
      <h1>Trénerský tím pre sezónu 2024/25</h1>
      <table>
        <tr>
          <th>Meno, Priezvisko</th>
          <th>Pozícia/Špecializácia</th>
        </tr>
        <tr>
          <td>Thomas Frank</td>
          <td>Hlavný Tréner</td>
        </tr>
        <tr>
          <td>Claus Norgaard</td>
          <td>Asistent Trénera</td>
        </tr>
        <tr>
          <td>Justin Cochrane</td>
          <td>Asistent Trénera</td>
        </tr>
        <tr>
          <td>Kevin O'Connor</td>
          <td>Asistent Trénera</td>
        </tr>
        <tr>
          <td>Keith Andrews</td>
          <td>Tréner Štandartných situácií</td>
        </tr>
        <tr>
          <td>Manu Sotelo</td>
          <td>Tréner Brankárov</td>
        </tr>
        <tr>
          <td>Neil MacFarlain</td>
          <td>Tréner Akadémie</td>
        </tr>
        <tr>
          <td>Naheem S. Ali</td>
          <td>Hlavný Lekár</td>
        </tr>
      </table>
    </div>
    <div class="tabulka-kontainer">
      <h1>Manažment Brentfordu FC</h1>
      <table>
        <tr>
          <th>Meno, Priezvisko</th>
          <th>Pozícia/Špecializácia</th>
        </tr>
        <tr>
          <td>Matthew Benham</td>
          <td>Vlastník</td>
        </tr>
        <tr>
          <td>Cliff Crown</td>
          <td>Spoluvlastník</td>
        </tr>
        <tr>
          <td>Jon Varney</td>
          <td>Výlučný Podpredseda</td>
        </tr>
        <tr>
          <td>Deji Davies</td>
          <td>Riaditeľ Klubu</td>
        </tr>
        <tr>
          <td>Lisa Skelhorn</td>
          <td>Klubový sekretár</td>
        </tr>
        <tr>
          <td>Phil Giles</td>
          <td>Športový riaditeľ</td>
        </tr>
        <tr>
          <td>Gary Hooper</td>
          <td>Riaditeľ manažmentu</td>
        </tr>
        <tr>
          <td>David Joyes</td>
          <td>Hlavný Manažer financií</td>
        </tr>
      </table>
    </div>
  </section>
  <section class="uspechy">
    <div class="trofeje">
      <h1>Tituly Brentfordu FC</h1>
      <h2>Domáce poháre</h2>
      <ul>
        <li>EFL Championship: 1 (1934-35), 2021 Víťazi playoff - postup do Premier League.</li>
        <li>EFL League One: 3 (1932-33, 1991-92, 2013-14)</li>
        <li>EFL League Two: 5 (1963-64, 1971-72, 1977-78, 1998-99, 2008-09)</li>
      </ul>
      <h2>Medzinárodné poháre</h2>
        <p>Keďže Brentford FC postúpil do najvyššej súťaže anglickej Premier League len nedávno, nemal ešte príležitosť kvalifikovať sa do Európskych súťaží. <br>
          Na to aby klub mohol hrať Európske súťaže musí skončiť na top 8 miestach najvyššej ligy, alebo vyhrať FA Cup. 1.-4. miesto postupuje do Uefa Champions League, <br>
          5. a 6. do UEFA Europa League, 7. a 8. do UEFA Conference League, víťaz FA Cupu postupuje do UEFA Europa League.</p>
    </div>
    <div class="trofeje-obr">
      <img src="{{ asset('pics/Brentford-trofej.jpg') }}" alt="Brentford Trofej">
      <p>Kapitán a Tréner Brentfordu s trofejou EFL League One</p>
    </div>
  </section>
</div>
</body>
</html>
