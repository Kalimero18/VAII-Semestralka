<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Chelsea FC - Futbal v Londýne</title>
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
        <h1>Chelsea FC</h1>
        <p>Chelsea Football Club, známy tiež ako Chelsea, je anglický futbalový veľkoklub sídliaci vo Fulhame v Londýne. Klub bol založený v roku 1905 a odvtedy patrí medzi stálice najvyššej anglickej futbalovej súťaže.
            Chelsea hrá svoje domáce zápasy na štadióne Stamford Bridge, ktorý je jeho domovom už od samotného vzniku.
            Dosiahla počas svojej histórie veľa úspechov, vrátane víťazstiev v rôznych domácich pohárových súťažiach, ako FA Cup a Ligový pohár, najmä počas 60., 70., 90. a 00. rokov.
            Hoci klub prechádzal viacerými vzostupmi a pádmi, stabilný rast a investície mu umožnili postupne získať miesto medzi najlepšími tímami Anglicka.
            Najúspešnejšie obdobie pre Chelsea však začalo v roku 2003, keď klub odkúpil ruský miliardár Roman Abramovič.
            Od roku 2005 získala Chelsea niekoľko titulov v Premier League, FA Cupe, Ligovom pohári a európskych súťažiach.
            Najväčší európsky úspech dosiahla Chelsea v roku 2012, keď sa stala prvým a zatiaľ jediným klubom z Londýna, ktorý vyhral Ligu majstrov UEFA.
            Tento triumf pod vedením trénera Roberta Di Mattea patrí medzi najpamätnejšie momenty v histórii klubu. O deväť rokov neskôr, v roku 2021, Chelsea zopakovala tento úspech a získala druhý titul v Lige majstrov, tentoraz pod vedením Thomasa Tuchela.
            Chelsea je dnes považovaná za jeden z najväčších a najúspešnejších futbalových klubov na svete.
            Okrem dvoch triumfov v Lige majstrov sa môže pochváliť aj víťazstvami v Európskej lige UEFA, Superpohári UEFA a Majstrovstvách sveta klubov FIFA.
            Klub si udržiava stabilnú pozíciu medzi futbalovou elitou a jeho vplyv na anglický a európsky futbal zostáva silný.</p>
        </div>
        <div class="intro-obr">
            <img src="{{ asset('pics/Chelsea-logo.png') }}" alt="chelsea logo">
        </div>
    </section>
    <section class="supiska">
        <div class="supiska-kontent">
            <div class="supiska-txt">
                <h1>Súpiska pre sezónu 2024/2025</h1>
                <div class="brankari">
                    <p><strong>Brankári</strong></p>
                    <p> #47 Bergstrom Lucas <img src="{{ asset('pics/finland.png') }}" alt="fin" class="ikona-vlajky"><br>
                        #13 Bettinelli Marcus <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #12 Jorgensen Filip <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
                        #1  Sanchez Robert <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                </div>
                <div class="obrancovia">
                    <p><strong>Obrancovia</strong></p>
                    <p> #12 Acheampong Josh <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #4  Adarabioyo Tosin <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #5  Badiashile Benoit <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #21 Chilwell Ben <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #6  Colwill Levi <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #3  Cucurella Marc <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #2  Disasi Axel <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #29 Fofana Wesley <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #27 Gusto Malo <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"> <br>
                        #24 James Reece (<strong>C</strong>) <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #4  Sturge Zak <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br></p>
                </div>
                <div class="stredopoliari">
                    <p><strong>Stredopoliari</strong></p>
                    <p> #25 Caicedo Moises <img src="{{ asset('pics/equador.png') }}" alt="ekv" class="ikona-vlajky"> <br>
                        #31 Casadei Cesare <img src="{{ asset('pics/italy.png') }}" alt="tal" class="ikona-vlajky"> <br>
                        #17 Chukwuemeka Carney <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #22 Dewsbury-Hall Kiernan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #X  Dyer Kiano <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #8  Fernandez Enzo <img src="{{ asset('pics/argentina.png') }}" alt="arg" class="ikona-vlajky"> <br>
                        #X  George Tyrique <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #45 Lavia Romeo <img src="{{ asset('pics/belgium.png') }}" alt="bel" class="ikona-vlajky"> <br>
                        #18 Nkunku Christopher <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #20 Palmer Cole <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #40 Veiga Renato <img src="{{ asset('pics/portugal.png') }}" alt="por" class="ikona-vlajky"><br>
                </div>
                <div class="utocnici">
                    <p><strong>Útočníci</strong></p>
                    <p> #16 Deivid Washington <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #38 Guiu Marc <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #15 Jackson Nicolas <img src="{{ asset('pics/senegal.png') }}" alt="sen" class="ikona-vlajky"><br>
                        #14 Felix Joao <img src="{{ asset('pics/portugal.png') }}" alt="por" class="ikona-vlajky"> <br>
                        #11 Madueke Noni <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #10 Mudryk Mykhailo <img src="{{ asset('pics/ukraine.png') }}" alt="ukr" class="ikona-vlajky"> <br>
                        #7  Neto Pedro <img src="{{ asset('pics/portugal.png') }}" alt="por" class="ikona-vlajky"> <br>
                        #19 Sancho Jadon <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #X  Tauriainen Jimi <img src="{{ asset('pics/finland.png') }}" alt="fin" class="ikona-vlajky"><br></p>
                    <p><strong>Tréner</strong></p>
                    <p> Maresca Enzo <img src="{{ asset('pics/italy.png') }}" alt="tal" class="ikona-vlajky"></p>
                </div>
            </div>
            <div class="supiska-obr">
                <img src="{{ asset('pics/Chelsea-Supiska.jpeg') }}" alt="Arsenal supiska 2024/25">
                <p>Tímové foto Chelsea FC pre sezónu 2024/25</p>
            </div>
        </div>
    </section>
    <section class="stadion">
        <div class="stadion-kontent">
            <div class="stadion-txt">
                <h1>Stamford Bridge</h1>
                <p>
                    Stamford Bridge, domov futbalového klubu Chelsea FC, je jedným z najikonickejších štadiónov v anglickom futbale.
                    Otvorený bol už v roku 1877, pôvodne ako atletický štadión, ale až v roku 1905 sa stal domovským stánkom Chelsea FC, keď bol klub založený. Nachádza sa v Fulhame, na juhozápade Londýna. <br>
                    Stamford Bridge bol počas svojej histórie niekoľkokrát renovovaný, pričom jeho súčasná kapacita dosahuje približne 40 834 miest, čo z neho robí jeden z menších štadiónov medzi elitnými anglickými klubmi.
                    Napriek tomu si zachováva autentickú atmosféru a je známy pre intenzívne a vášnivé domáce publikum. <br>
                    Jednou z výnimočných čŕt štadióna je jeho poloha – je zasadený priamo do hustej londýnskej zástavby, čo dodáva návštevníkom pocit, že sú v centre mesta, no zároveň v srdci futbalového diania.
                    Stamford Bridge prešiel viacerými fázami modernizácie, vrátane prestavby hlavných tribún, aby poskytoval najmodernejšie zariadenia, no pritom si zachoval časť svojho tradičného charakteru. <br>
                    V minulosti bol Stamford Bridge miestom mnohých významných futbalových udalostí, nielen zápasov Chelsea FC, ale aj iných súťaží, ako finále FA Cupu či európske súťaže.
                    Hoci klub plánoval v minulosti ďalšiu expanziu štadióna, z dôvodu komplikácií bol tento projekt zatiaľ odložený. <br>
                    Štadión nie je len miestom futbalových zápasov, ale aj symbolom bohatých dejín Chelsea FC, ktoré siahajú viac ako jedno storočie dozadu, s množstvom trofejí a slávnych okamihov. <br>
                    Jednou z najzaujímavejších zaujímavostí o Stamford Bridge je jeho pôvodné využitie. Štadión, ktorý je dnes domovom Chelsea FC, bol pôvodne otvorený v roku 1877 a používaný ako atletická dráha.
                    Až v roku 1905, po založení Chelsea FC, sa štadión začal využívať na futbalové účely. Stamford Bridge je tiež známy svojimi bohatými dejinami a umiestnením – štadión sa nachádza v blízkosti rieky Temža,
                    čo z neho robí jednu z najikonickejších športových lokalít v Londýne.
                </p>
            </div>
            <div class="stadion-obr">
                <img src="{{ asset('pics/Stamford-Bridge.jpg') }}" alt="Stamford Bridge">
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
                    <td>Enzo Maresca</td>
                    <td>Hlavný Tréner</td>
                </tr>
                <tr>
                    <td>Willy Caballero</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Roberto Vitello</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Danny Walker</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Bernardo Cueva</td>
                    <td>Tréner Štandartných situácií</td>
                </tr>
                <tr>
                    <td>Michele de Bernardin</td>
                    <td>Tréner Brankárov</td>
                </tr>
                <tr>
                    <td>Filipe Coelho</td>
                    <td>Tréner Akadémie</td>
                </tr>
                <tr>
                    <td>Eva Carniero</td>
                    <td>Hlavný Lekár</td>
                </tr>
            </table>
        </div>
        <div class="tabulka-kontainer">
            <h1>Manažment Chelsea FC</h1>
            <table>
                <tr>
                    <th>Meno, Priezvisko</th>
                    <th>Pozícia/Špecializácia</th>
                </tr>
                <tr>
                    <td>Todd Boehly</td>
                    <td>Vlastník</td>
                </tr>
                <tr>
                    <td>Anthony Reeves</td>
                    <td>Spoluvlastník</td>
                </tr>
                <tr>
                    <td>Jason Gannon</td>
                    <td>Výlučný Podpredseda</td>
                </tr>
                <tr>
                    <td>Chris Jurasek</td>
                    <td>Riaditeľ Klubu</td>
                </tr>
                <tr>
                    <td>Alan Shaw</td>
                    <td>Klubový sekretár</td>
                </tr>
                <tr>
                    <td>Paul Winstanley</td>
                    <td>Športový riaditeľ</td>
                </tr>
                <tr>
                    <td>Laurence Steward</td>
                    <td>Riaditeľ manažmentu</td>
                </tr>
                <tr>
                    <td>Adriel Lares</td>
                    <td>Hlavný Manažer financií</td>
                </tr>
            </table>
        </div>
    </section>
    <section class="uspechy">
        <div class="trofeje">
            <h1>Tituly Chelsea FC</h1>
            <h2>Domáce poháre</h2>
            <ul>
                <li>Premier League: 6 (1954–55, 2004–05, 2005–06, 2009–10, 2014–15, 2016–17)</li>
                <li>Emirates FA Cup: 8 (1969–70, 1996–97, 1999–2000, 2006–07, 2008–09, 2009–10, 2011–12, 2017–18)</li>
                <li>Carabao Cup: 5 (1964–65, 1997–98, 2004–05, 2006–07, 2014–15)</li>
                <li>FA Community Shield: 4 (1955, 2000, 2005, 2009)</li>
            </ul>
            <h2>Medzinárodné poháre</h2>
            <ul>
                <li>UEFA Champions League: 2 (2011-12, 2020-21)</li>
                <li>UEFA Europa League: 2 (2012-13, 2018-19)</li>
                <li>UEFA Super Cup: 4 (1971, 1998, 1999, 2021)</li>
                <li>FIFA Club World Cup: 1 (2021)</li>
            </ul>
        </div>
        <div class="trofeje-obr">
            <img src="{{ asset('pics/Chelsea-trofej.jpg') }}" alt="Chelsea Trofej">
            <p>Oslavy Chelsea FC po výhre v Lige Majstrov v roku 2021</p>
        </div>
    </section>
</div>
</body>
</html>
