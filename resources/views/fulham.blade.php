<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fulham FC - Futbal v Londýne</title>
    <link rel="stylesheet" href="../css/styles1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <h1>Fulham FC</h1>
        <p>Fulham FC je futbalový klub sídliaci v západnom Londýne, založený v roku 1879, čo z neho robí najstarší profesionálny klub v Londýne. Klub, známy ako "The Cottagers,"
            hrá svoje domáce zápasy na štadióne Craven Cottage, ktorý sa nachádza na brehu rieky Temža a má kapacitu približne 25 700 divákov.
            Craven Cottage je považovaný za jeden z historicky najvýznamnejších a najmalebnejších futbalových štadiónov v Anglicku, s charakteristickou atmosférou a tradičným dizajnom.
            Fulham FC sa pravidelne pohybuje medzi Premier League a Championship, čo mu prinieslo povesť jedného z najlepších "yo-yo" tímov v anglickom futbale.
            Klub dosiahol svoje najväčšie úspechy v posledných desaťročiach, vrátane postupu do finále Európskej ligy UEFA v roku 2010, kde prehral s Atléticom Madrid.
            Fulham má bohatú fanúšikovskú základňu a rivalitu najmä s Chelsea FC a ďalšími londýnskymi klubmi. <br>
            Hlavní rivali Fulhamu sú kluby nachádzajúce sa na západe Londýna: Chelsea, Queens Park Rangers a Brentford. <br>
            Fulham FC je známy tým, že je najstarším profesionálnym futbalovým klubom v Londýne, keďže bol založený už v roku 1879. Klub má bohatú históriu,
            ktorá zahŕňa aj fakt, že ich ikonický štadión Craven Cottage leží priamo na brehu rieky Temža. Fulham je jedným z mála klubov, ktoré nikdy nezmenili svoje čiernobiele klubové farby od svojho založenia.
            Klub je často spájaný s pokojnou atmosférou a komunitným duchom, čo z neho robí unikátny tím medzi londýnskymi futbalovými klubmi.
        </p>
        </div>
        <div class="intro-obr">
            <img src="{{ asset('pics/Fulham-logo.png') }}" alt="fulham logo">
        </div>
    </section>
    <section class="supiska">
        <div class="supiska-kontent">
            <div class="supiska-txt">
                <div class="brankari">
                    <h1>Súpiska pre sezónu 2024/2025</h1>
                    <p><strong>Brankári</strong></p>
                    <p> #23 Benda Steven <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"><br>
                        #X  Borto Alexander <img src="{{ asset('pics/united-states.png') }}" alt="usa" class="ikona-vlajky"><br>
                        #1  Leno Bernd (<strong>C</strong>) <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"> <br> </p>
                </div>
                <div class="obrancovia">
                    <p><strong>Obrancovia</strong></p>
                    <p> #5  Andersen Joachim <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
                        #3  Bassey Calvin <img src="{{ asset('pics/nigeria.png') }}" alt="nig" class="ikona-vlajky"><br>
                        #21 Castagne Timothy <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"> <br>
                        #15 Cuenca Jorge <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #X  De Fougerolles Luc <img src="{{ asset('pics/canada.png') }}" alt="kan" class="ikona-vlajky"><br>
                        #31 Diop Issa <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #33 Robinson Antonee <img src="{{ asset('pics/united-states.png') }}" alt="usa" class="ikona-vlajky"> <br>
                        #2  Tete Kenny <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br></p>
                </div>
                <div class="stredopoliari">
                    <p><strong>Stredopoliari</strong></p>
                    <p> #16 Berge Sander <img src="{{ asset('pics/norway.png') }}" alt="nor" class="ikona-vlajky"> <br>
                        #10 Cairney Tom <img src="{{ asset('pics/scotland.png') }}" alt="sko" class="ikona-vlajky"> <br>
                        #X  Esenga Jonathan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #24 King Joshua <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #20 Lucic Sasa <img src="{{ asset('pics/serbia.png') }}" alt="ser" class="ikona-vlajky"><br>
                        #18 Pereira Andreas <img src="{{ asset('pics/brazil.png') }}" alt=bra class="ikona-vlajky"><br>
                        #6  Reed Harrison <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #30 Sessegnon Ryan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #32 Smith-Rowe Emile <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #8  Winks Harry <img src="{{ asset('pics/wales.png') }}" alt="wal" class="ikona-vlajky"><br></p>
                </div>
                <div class="utocnici">
                    <p><strong>Útočníci</strong></p>
                    <p> #X  Godo Martial <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #17 Iwobi Alex <img src="{{ asset('pics/nigeria.png') }}" alt="nig" class="ikona-vlajky"><br>
                        #7  Jimenez Raul <img src="{{ asset('pics/mexico.png') }}" alt="mex" class="ikona-vlajky"><br>
                        #19 Nelson Reiss <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #9  Rodrigo Muniz <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"> <br>
                        #11 Traore Adama <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br></p>
                    <p><strong>Tréner</strong></p>
                    <p>Silva Marco <img src="{{ asset('pics/portugal.png') }}" alt="por" class="ikona-vlajky"></p>
                </div>
            </div>
            <div class="supiska-obr">
                <img src="{{ asset('pics/Fulham-supiska.jpg') }}" alt="Fulham FC supiska 2024/25">
                <p>Tímové foto Fulhamu FC pre sezónu 2024/25</p>
            </div>
        </div>
    </section>
    <section class="stadion">
        <div class="stadion-kontent">
            <div class="stadion-txt">
                <h1>Craven Cottage</h1>
                <p> Craven Cottage je domovským štadiónom futbalového klubu Fulham FC, nachádza sa na brehu rieky Temža v západnom Londýne. Postavený bol v roku 1896 a od tej doby slúži ako sídlo Fulhamu,
                    čo z neho robí jeden z najstarších aktívnych štadiónov v Anglicku. Craven Cottage má kapacitu približne 25 700 miest a je známy svojou klasickou architektúrou a špecifickou atmosférou. Jedným z jeho ikonických prvkov je *Cottage Pavilion*,
                    malý domček umiestnený v jednom rohu ihriska, ktorý slúžil ako hráčska šatňa a je unikátny pre tento štadión. <br>
                    Štadión prešiel viacerými renováciami, aby zodpovedal moderným bezpečnostným a komfortným štandardom, pričom nedávna rekonštrukcia Riverside Stand priblížila kapacitu bližšie k cieľovej hodnote
                    a poskytla nové výhľady na Temžu. Napriek modernizácii si Craven Cottage zachováva historický šarm a patrí medzi najcharakteristickejšie štadióny v anglickom futbale.
                    Špecifická kombinácia tradičnej architektúry a moderných prvkov robí z Craven Cottage obľúbené miesto pre fanúšikov Fulhamu aj návštevníkov futbalových zápasov.
                    Keď v roku 1989 došlo ku katastrofe v Hillsborough, Fulham bol na predposlednom mieste v The Football League (3. liga) a všetky miesta na štadióne boli len na státie. Ale na základe Taylorovej správy ambiciózny predseda
                    Fulhamu Jimmy Hill predložil v roku 1996 plán štadiónu, kde budú všetky miesta na sedenie. Tieto plány sa nikdy neuskutočnili, čiastočne kvôli nátlaku miestnych obyvateľov, ktorí chceli na zápasoch naďalej stáť.
                    V čase, keď sa Fulham dostal do Premier League, mal stále na štadióne len miesta na státie - v tej dobe to už bolo prakticky neslýchané.
                    V decembri 2003 boli predstavené plány na veľkú rekonštrukciu v hodnote 8 miliónov libier, aby bola v súlade s požiadavkami Premier League.
                </p>
            </div>
            <div class="stadion-obr">
                <img src="{{ asset('pics/Craven-cottage.jpg') }}" alt="Craven Cottage">
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
                    <td>Marco Silva</td>
                    <td>Hlavný Tréner</td>
                </tr>
                <tr>
                    <td>Stuart Gray</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Goncalo Pedro</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Antonios Lemonakis</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Antonios Lemonakis</td>
                    <td>Tréner Štandartných situácií</td>
                </tr>
                <tr>
                    <td>Hugo Olivieira</td>
                    <td>Tréner Brankárov</td>
                </tr>
                <tr>
                    <td>Mike Cave</td>
                    <td>Tréner Akadémie</td>
                </tr>
                <tr>
                    <td>Chris Hanson</td>
                    <td>Hlavný Lekár</td>
                </tr>
            </table>
        </div>
        <div class="tabulka-kontainer">
            <h1>Manažment Fulhamu FC</h1>
            <table>
                <tr>
                    <th>Meno, Priezvisko</th>
                    <th>Pozícia/Špecializácia</th>
                </tr>
                <tr>
                    <td>Shahid Khan</td>
                    <td>Vlastník</td>
                </tr>
                <tr>
                    <td>Alistair Mackintosh</td>
                    <td>Spoluvlastník</td>
                </tr>
                <tr>
                    <td>Tony Khan</td>
                    <td>Výlučný Podpredseda</td>
                </tr>
                <tr>
                    <td>Alistair Mackintosh</td>
                    <td>Riaditeľ Klubu</td>
                </tr>
                <tr>
                    <td>Darren Preston</td>
                    <td>Klubový sekretár</td>
                </tr>
                <tr>
                    <td>Tony Khan</td>
                    <td>Športový riaditeľ</td>
                </tr>
                <tr>
                    <td>Mark Lamping</td>
                    <td>Riaditeľ manažmentu</td>
                </tr>
                <tr>
                    <td>Sean O'Loughlin</td>
                    <td>Hlavný Manažer financií</td>
                </tr>
            </table>
        </div>
    </section>
    <section class="uspechy">
        <div class="trofeje">
            <h1>Tituly Fulhamu FC</h1>
            <h2>Domáce poháre</h2>
            <ul>
                <li>EFL Championship: 3 (1948–49, 2000–01, 2021–22) </li>
                <li>EFL League One: 2 (1931–32, 1998–99)</li>
            </ul>
            <h2>Medzinárodné poháre</h2>
                <p>Fulhamu FC sa podarilo kvalifikovať párkrát do druhej najvyššej európskej súťaže UEFA Europa League, naposledy v sezóne 2009-10. <br>
                    V tejto sezóne sa dokonca prebojovali až do finále, kde však prehrali so španielským veľkoklubom Atlético Madrid. <br>
                    Pre "priemerný" tím z anglickej ligy bol toto však najväčší medzinárodný úspech, na ktorý môžu byť napriek prehre veľmi hrdí.</p>
        </div>
        <div class="trofeje-obr">
            <img src="{{ asset('pics/Fulham-trofej.jpg') }}" alt="Fulham trofej">
            <p>Hráči Fulhamu oslavujú postup do Premier League</p>
        </div>
    </section>
</div>
</body>
</html>
