<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Arsenal FC - Futbal v Londýne</title>
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
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
            <h1>Arsenal FC</h1>
            <p>Arsenal Football Club je anglický futbalový veľkoklub z Londýna. Klub vyhral 13 titulov v Premier League a 14 titulov v FA Cupe. S celkovým počtom 47 trofejí je Arsenal tretím najúspešnejším anglickým futbalovým klubom.
                Arsenal bol založený v roku 1886 v londýnskej časti Woolwich. V roku 1893 sa stal prvým klubom z juhu Anglicka ktorý sa pripojil k druhej najvyššej súťaži. V roku 1913, sa presťahoval severne do štvrte Highbury.
                V 30-tych rokoch minulého storočia Arsenal vyhral päť ligových titulov a dva Poháre FA.
                Po období 2. svetovej vojny Arsenal vyhral ligový titul a opäť dva Poháre FA. V sezóne 1970 – 1971, v 90-tych rokoch a v prvej dekáde 21. storočia,
                Arsenal vyhral dva ďalšie ligové tituly. Dokonca v roku 2006 sa stal finalistom Ligy majstrov, kde však podľahol Barcelone 2:1.
                Vzhľadom na blízku vzdialenosť je najväčším rivalom Arsenalu Tottenham Hotspur. Derby medzi Arsenalom Tottenhamom sa nazýva the North London derby.
                Arsenal FC je jedným z najúspešnejších anglických klubov s dlhou a bohatou históriou. Klub bol založený v roku 1886 v londýnskej časti Woolwich.
                V roku 1913 sa presťahoval na štadión Highbury. V uplynulých 80 rokoch sa Arsenal môže pochváliť úspechmi, za ktoré najviac vďačí Herbertovi Chapmanovi a Bertiemu Meeovi.
                Ďalším dôležitým trénerom bol George Graham, ktorý viedol klub od roku 1986 až po rok 1995, pričom získal dva ligové tituly, dva ligové poháre, FA Cup a taktiež Pohár UEFA.
                Od roku 1996 sa manažérom stal Arsène Wenger, ktorý priviedol Arsenal k trom ligovým titulom, piatim FA Cupom a piatim titulom v Anglickom superpohári.</p>
        </div>
        <div class="intro-obr">

            <img src="{{ asset('pics/Arsenal-logo.png') }}" alt="arsenal logo">
        </div>
    </section>
    <section class="supiska">
        <div class="supiska-kontent">
            <div class="supiska-txt">
                <h1>Súpiska pre sezónu 2024/2025</h1>
                <div class="brankari">
                    <p><strong>Brankári</strong></p>
                    <p> #54 Nygaard Martin Lucas <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
                        #32 Neto <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #92 Porter Jack <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #22 Raya David <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #62 Rojas Alexei <img src="{{ asset('pics/colombia.png') }}" alt="kol" class="ikona-vlajky"><br>
                        #36 Setford Tommy <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br> </p>
                </div>
                <div class="obrancovia">
                    <p><strong>Obrancovia</strong></p>
                    <p> #33 Calafiori Riccardo <img src="{{ asset('pics/italy.png') }}" alt="tal" class="ikona-vlajky"><br>
                        #6  Gabriel <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #47 Kaccuri Maldini <img src="{{ asset('pics/albania.png') }}" alt="alb" class="ikona-vlajky"><br>
                        #15 Kiwior Jakub <img src="{{ asset('pics/poland.png') }}" alt="pol" class="ikona-vlajky"><br>
                        #51 Nichols Josh <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #2  Saliba William <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #12 Timber Jurrien <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br>
                        #18 Tomiyasu Takehiro <img src="{{ asset('pics/japan.png') }}" alt="jap" class="ikona-vlajky"><br>
                        #4  White Ben <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #17 Zinchenko Olexandr <img src="{{ asset('pics/ukraine.png') }}" alt="ukr" class="ikona-vlajky"><br></p>
                </div>
                <div class="stredopoliari">
                    <p><strong>Stredopoliari</strong></p>
                    <p> #37 Butler-Oyedeji Nathan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #44 Gowen Jimi <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #29 Havertz Kai <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"><br>
                        #3  Heaven Ayden <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #20 Jorginho <img src="{{ asset('pics/italy.png') }}" alt="tal" class="ikona-vlajky"><br>
                        #49 Lewis-Skelly Myles <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #23 Merino Mikel <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #53 Nwaneri Ethan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #8  Odegaard Martin (<strong>C</strong>) <img src="{{ asset('pics/norway.png') }}" alt="nor" class="ikona-vlajky"><br>
                        #56 Oulad M'Hand Salah <img src="{{ asset('pics/morocco.png') }}" alt="mar" class="ikona-vlajky"><br>
                        #5  Partey Thomas <img src="{{ asset('pics/ghana.png') }}" alt="gha" class="ikona-vlajky"><br>
                        #41 Rice Declan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #61 Robinson Josh <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #63 Rosiak Michal <img src="{{ asset('pics/poland.png') }}" alt="pol" class="ikona-vlajky"><br></p>
                </div>
                <div class="utocnici">
                    <p><strong>Útočníci</strong></p>
                    <p> #9  Jesus Gabriel <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #46 Kabia Ismeal <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br>
                        #11 Martinelli Gabriel <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #7  Saka Bukayo <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #30 Sterling Raheem <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #19 Trossard Leandro <img src="{{ asset('pics/belgium.png') }}" alt="bel" class="ikona-vlajky"><br></p>
                    <p><strong>Tréner</strong></p>
                    <p>Arteta Mikel <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"></p>
                </div>
            </div>
            <div class="supiska-obr">
                <img src="{{ asset('pics/Arsenal-supiska.jpg') }}" alt="Arsenal supiska 2024/25"> <br>
                <p>Tímové foto Arsenalu FC pre sezónu 2024/25</p>
            </div>
        </div>
    </section>
    <section class="stadion">
        <div class="stadion-kontent">
            <div class="stadion-txt">
                <h1>Emirates Stadium</h1>
                <p>
                    Emirates Stadium, domov futbalového klubu Arsenal FC, je jedným z najmodernejších a najimpozantnejších futbalových štadiónov v Európe. Nachádza sa v severnom Londýne, v časti Holloway.
                    Výstavba štadióna začala v roku 2004 a trvala dva roky, pričom oficiálne otvorenie prebehlo v júli 2006. Celkové náklady na výstavbu dosiahli približne 390 miliónov libier.
                    Hlavným partnerom projektu a sponzorom štadióna sa stala spoločnosť Emirates, ktorá získala práva na jeho názov. <br>
                    Štadión bol navrhnutý renomovanou architektonickou firmou Populous (predtým HOK Sport), ktorá je známa svojou prácou na športových objektoch po celom svete.
                    Emirates Stadium má kapacitu 60 704 miest, čo ho radí medzi najväčšie štadióny v Anglicku, a poskytuje fanúšikom nielen skvelý výhľad na ihrisko, ale aj vynikajúce služby a vybavenie. <br>
                    Pred výstavbou Emirates Stadium hral Arsenal svoje zápasy na legendárnom Highbury, no vzhľadom na obmedzenú kapacitu a neschopnosť ďalej rozširovať tento štadión sa klub rozhodol pre stavbu nového domova.
                    Prechod na Emirates bol významným krokom v histórii klubu, ktorý mu umožnil konkurovať finančne aj zázemím s najlepšími klubmi na svete. <br>
                    Štadión je rozdelený do štyroch hlavných tribún: North Bank, Clock End, East Stand a West Stand. Každá tribúna ponúka svojim návštevníkom špičkový komfort, vrátane VIP zón, reštaurácií a barov.
                    Pre fanúšikov je Emirates symbolom moderného futbalu, a zároveň miestom, kde sa odohrali mnohé nezabudnuteľné momenty v histórii klubu.
                    Okrem futbalových zápasov sa na Emirates Stadium konajú aj iné športové a kultúrne podujatia, vrátane koncertov a reprezentačných zápasov.
                    Vďaka svojim moderným technológiám, komfortu a kapacite patrí Emirates k top štadiónom v Európe a je jedným z hlavných symbolov klubu Arsenal FC.
                </p>
            </div>
            <div class="stadion-obr">
                <img src="{{ asset('pics/Emirates.jpg') }}" alt="Emirates Stadium">
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
                    <td>Mikel Arteta</td>
                    <td>Hlavný Tréner</td>
                </tr>
                <tr>
                    <td>Albert Stuivenberg</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Carlos Cuesta</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Miguel Molina</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Nicolas Jover</td>
                    <td>Tréner Štandartných situácií</td>
                </tr>
                <tr>
                    <td>Iňaki Caňa</td>
                    <td>Tréner Brankárov</td>
                </tr>
                <tr>
                    <td>Per Mertesacker</td>
                    <td>Tréner Akadémie</td>
                </tr>
                <tr>
                    <td>Zafar Iqbal</td>
                    <td>Hlavný Lekár</td>
                </tr>
            </table>
        </div>
        <div class="tabulka-kontainer">
            <h1>Manažment Arsenalu FC</h1>
            <table>
                <tr>
                    <th>Meno, Priezvisko</th>
                    <th>Pozícia/Špecializácia</th>
                </tr>
                <tr>
                    <td>Stan Kroenke</td>
                    <td>Spoluvlastník</td>
                </tr>
                <tr>
                    <td>Josh Kroenke</td>
                    <td>Spoluvlastník</td>
                </tr>
                <tr>
                    <td>Tim Lewis</td>
                    <td>Výlučný Podpredseda</td>
                </tr>
                <tr>
                    <td>Phillip Charles Harris</td>
                    <td>Riaditeľ Klubu</td>
                </tr>
                <tr>
                    <td>Zayna Perkins</td>
                    <td>Klubový sekretár</td>
                </tr>
                <tr>
                    <td>Edu Gaspar</td>
                    <td>Športový riaditeľ</td>
                </tr>
                <tr>
                    <td>Richard Garlick</td>
                    <td>Riaditeľ manažmentu</td>
                </tr>
                <tr>
                    <td>Stuart Wisely</td>
                    <td>Hlavný Manažer financií</td>
                </tr>
            </table>
        </div>
    </section>
    <section class="uspechy">
        <div class="trofeje">
            <h1>Tituly Arsenalu FC</h1>
            <h2>Domáce poháre</h2>
            <ul>
                <li>Premier League: 13 (1930–31, 1932–33, 1933–34, 1934–35, 1937–38, 1947–48, 1952–53, 1970–71, 1988–89, 1990–91, 1997–98, 2001–02, 2003–04)</li>
                <li>Emirates FA Cup: 14 (1929–30, 1935–36, 1949–50, 1970–71, 1978–79, 1992–93, 1997–98, 2001–02, 2002–03, 2004–05, 2013–14, 2014–15, 2016–17, 2019–20)</li>
                <li>Carabao Cup: 2 (1986–87, 1992–93)</li>
                <li>FA Community Shield: 17 (1930, 1931, 1933, 1934, 1938, 1948, 1953, 1991,[note 9] 1998, 1999, 2002, 2004, 2014, 2015, 2017, 2020, 2023)</li>
            </ul>
            <h2>Medzinárodné poháre</h2>
            <ul>
                <li>Inter-Cities Fairs Cup: 1 (1969-70)</li>
                <li>UEFA Cup Winners' Cup: 1 (1993-94)</li>
            </ul>
            <h2>The Invincibles</h2>
            <p>Arsenal FC sa v sezóne 2003/04 zapísal do histórie anglického futbalu ako prvý a dodnes jediný tím, ktorí vyhral najvyššiu anglickú
                ligovú súťaž Premier League bez jedinej prehry. Počas tejto sezózy odohrali 38 zápasov, z toho vyhrali 26 a 12 remízovali.
                Za tento úspech obdržalo mužstvo legendárneho Arsena Wengera prestížnu zlatú trofej Premier League a dodnes ostávajú jej jediným držiteľom.</p>
        </div>
        <div class="trofeje-obr">
            <img src="{{ asset('pics/Arsenal-trofej.jpg') }}" alt="Arsenal fotka trofeje">
            <p>Arséne Wenger držiaci zlatú trofej The Invincibles</p>
        </div>
    </section>
</div>
</body>
</html>
