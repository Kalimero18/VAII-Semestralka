<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>West Ham United - Futbal v Londýne</title>
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
        <h1>West Ham United</h1>
        <p>West Ham United FC, známy aj ako "Hammers" alebo "Irons," je anglický futbalový klub sídliaci vo východnom Londýne. Klub bol založený v roku 1895 pod názvom Thames Ironworks FC,
            pričom súčasné meno prijal v roku 1900. West Ham hráva svoje domáce zápasy na London Stadium, ktorý bol pôvodne vybudovaný pre Olympijské hry 2012 a má kapacitu približne 60 000 miest.
            Klub má bohatú históriu a je známy svojou lojalitou voči fanúšikom a silnými väzbami na miestnu komunitu. West Ham sa pýši viacerými úspechmi, vrátane trojnásobného víťazstva v FA Cupe
            (1964, 1975, 1980). V roku 1965 triumfoval v Pohári víťazov pohárov, čo je dodnes ich najväčší európsky úspech. V Premier League majú povesť húževnatého tímu,
            ktorý pravidelne produkuje talentovaných hráčov a zvyčajne sa pohybuje v stredných až vyšších priečkach tabuľky.
            „Hammers“ sú známi svojou rivalitou s klubmi ako Millwall a Tottenham Hotspur a výrazne ovplyvnili anglickú futbalovú kultúru,
            najmä tým, že boli domovom viacerých legiend, vrátane Bobbyho Moorea, kapitána anglickej reprezentácie, ktorá v roku 1966 vyhrala majstrovstvá sveta. <br>
            Klub bol založený v roku 1895 pod názvom Thames Ironworks FC, čo odkazovalo na lodenicu, ktorá financovala klub. Názov West Ham United bol prijatý v roku 1900, keď klub prešiel transformáciou. <br>
            West Ham má blízke spojenie s triumfom Anglicka na Majstrovstvách sveta vo futbale v roku 1966. Traja hráči klubu – Bobby Moore, Geoff Hurst a Martin Peters – boli kľúčovými postavami tohto historického víťazstva.
            Hurst sa stal jediným hráčom, ktorý kedy skóroval hetrik vo finále Svetového pohára.
        </p>
        </div>
        <div class="intro-obr">
            <img src="{{ asset('pics/WestHam-logo.png') }}" alt="west ham logo">
        </div>
    </section>
    <section class="supiska">
        <div class="supiska-kontent">
            <div class="supiska-txt">
                <h1>Súpiska pre sezónu 2024/2025</h1>
                <div class="brankari">
                    <p><strong>Brankári</strong></p>
                    <p> #23 Areola Alphonse <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #1  Fabianski Lukasz <img src="{{ asset('pics/poland.png') }}" alt="pol" class="ikona-vlajky"><br>
                        #21 Foderingham Wesley <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #X  Herrick Finley <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br> </p>
                </div>
                <div class="obrancovia">
                    <p><strong>Obrancovia</strong></p>
                    <p> #X  Casey Kaelan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #5  Coufal Vladimir <img src="{{ asset('pics/czech-republic.png') }}" alt="cze" class="ikona-vlajky"><br>
                        #3  Cresswell Aaron <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #33 Emerson <img src="{{ asset('pics/italy.png') }}" alt="tal" class="ikona-vlajky"><br>
                        #26 Killman Max <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #15 Mavropanos Konstantinos <img src="{{ asset('pics/greece.png') }}" alt="gre" class="ikona-vlajky"><br>
                        #2  Robinson Junior <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #X  Scarles Oliver <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #25 Todibo Jean-Clair <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #29 Wan-Bissaka Aaron <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br></p>
                </div>
                <div class="stredopoliari">
                    <p><strong>Stredopoliari</strong></p>
                    <p> #19 Alvarez Edson <img src="{{ asset('pics/mexico.png') }}" alt="mex" class="ikona-vlajky"> <br>
                        #39 Irving Andrew <img src="{{ asset('pics/scotland.png') }}" alt="sko" class="ikona-vlajky"> <br>
                        #14 Kudus Mohammed <img src="{{ asset('pics/ghana.png') }}" alt="gha" class="ikona-vlajky"><br>
                        #8  Orford Lewis <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
                        #10 Paqueta Lucas <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #24 Rodriguez Guido <img src="{{ asset('pics/argentina.png') }}" alt="arg" class="ikona-vlajky"> <br>
                        #4  Soler Carlos <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #28 Soucek Tomas <img src="{{ asset('pics/czech-republic.png') }}" alt="cze" class="ikona-vlajky"><br></p>
                </div>
                <div class="utocnici">
                    <p><strong>Útočníci</strong></p>
                    <p> #9  Antonio Michail<img src="{{ asset('pics/jamaica.png') }}" alt="jam" class="ikona-vlajky"><br>
                        #20 Bowen Jarrod (<strong>C</strong>) <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #11 Fullkrug Niclas <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"><br>
                        #18 Ings Danny <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #17 Luis Guilherme <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #X  Moore Sean <img src="{{ asset('pics/ireland.png') }}" alt="irs" class="ikona-vlajky"> <br>
                        #7  Summerville Crysencio <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br></p>
                    <p><strong>Tréner</strong></p>
                    <p>Lopetegui Julen <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"></p>
                </div>
            </div>
            <div class="supiska-obr">
                <img src="{{ asset('pics/West-ham-supiska.jpeg') }}" alt="West Ham supiska 2024/25">
                <p>Tímové foto West Hamu United FC pre sezónu 2024/25</p>
            </div>
        </div>
    </section>
    <section class="stadion">
        <div class="stadion-kontent">
            <div class="stadion-txt">
                <h1>London Stadium</h1>
                <p> London Stadium, známy aj ako bývalý Olympijský štadión, je moderné multifunkčné športové zariadenie v štvrti Stratford vo východnom Londýne.
                    Bol postavený pre Letné olympijské hry 2012 a je dnes domovským štadiónom klubu West Ham United. Štadión má kapacitu približne 60 000 divákov, čo z neho robí jedného z najväčších športových objektov v Londýne a Anglicku. <br>
                    V roku 2016 prešiel štadión komplexnou prestavbou, aby sa z pôvodného atletického objektu stal plnohodnotný futbalový štadión. Táto rekonfigurácia zahŕňala úpravu sedenia a vytvorenie výsuvného trávnika,
                    čím sa zlepšila viditeľnosť a akustika pre fanúšikov. Štadión si však zachoval multifunkčnosť, takže môže hostiť aj atletické súťaže,
                    koncerty a iné veľké podujatia. Architektonicky vyniká svojou inovatívnou, ekologicky udržateľnou konštrukciou, ktorá maximalizuje prirodzené svetlo a vetranie. <br>
                    London Stadium je navrhnutý ako multifunkčný priestor. Okrem futbalu hostí aj atletické preteky, koncerty a iné veľké udalosti. Jeho flexibilný dizajn umožňuje meniť konfiguráciu pre rôzne športy a podujatia. <br>
                    Strecha štadióna, ktorá je najväčšia svojho druhu na svete, pokrýva všetky sedadlá divákov a ponúka jedinečnú akustiku pre koncerty. <br>
                    Okrem olympijských hier sa na štadióne konali aj majstrovstvá sveta v atletike v roku 2017 a koncerty známych interpretov, ako Rolling Stones, Beyoncé či Foo Fighters. <br>
                    Pri stavbe a prevádzke štadióna sa kládol dôraz na udržateľnosť, vrátane použitia recyklovaných materiálov a energeticky úsporných technológií.
                    Zaujímavou súčasťou každého domáceho zápasu West Hamu United je tradícia, kedy pri nástupe a v úvodných minútach je vypustené množstvo bublín po celom štadióne.
                </p>
            </div>
            <div class="stadion-obr">
                <img src="{{ asset('pics/London-Stadium.jpg') }}" alt="London Stadium">
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
                    <td>Julen Lopetegui</td>
                    <td>Hlavný Tréner</td>
                </tr>
                <tr>
                    <td>Pablo Sanz</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Oscar Caro</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Juan Vicente Peinado</td>
                    <td>Asistent Trénera</td>
                </tr>
                <tr>
                    <td>Oscar Caro</td>
                    <td>Tréner Štandartných situácií</td>
                </tr>
                <tr>
                    <td>Xavi Valero</td>
                    <td>Tréner Brankárov</td>
                </tr>
                <tr>
                    <td>Terry Westley</td>
                    <td>Tréner Akadémie</td>
                </tr>
                <tr>
                    <td>Ricahrd Collinge</td>
                    <td>Hlavný Lekár</td>
                </tr>
            </table>
        </div>
        <div class="tabulka-kontainer">
            <h1>Manažment West Hamu United FC</h1>
            <table>
                <tr>
                    <th>Meno, Priezvisko</th>
                    <th>Pozícia/Špecializácia</th>
                </tr>
                <tr>
                    <td>David Sullivan</td>
                    <td>Spoluvlastník</td>
                </tr>
                <tr>
                    <td>Vanessa Gold</td>
                    <td>Spoluvlastník</td>
                </tr>
                <tr>
                    <td>Karren Brady</td>
                    <td>Výlučný Podpredseda</td>
                </tr>
                <tr>
                    <td>Daniel Křetinský</td>
                    <td>Riaditeľ Klubu</td>
                </tr>
                <tr>
                    <td>Andrew Pincher</td>
                    <td>Klubový sekretár</td>
                </tr>
                <tr>
                    <td>Mark Noble</td>
                    <td>Športový riaditeľ</td>
                </tr>
                <tr>
                    <td>Tony Carr</td>
                    <td>Riaditeľ manažmentu</td>
                </tr>
                <tr>
                    <td>Andy Mollett</td>
                    <td>Hlavný Manažer financií</td>
                </tr>
            </table>
        </div>
    </section>
    <section class="uspechy">
        <div class="trofeje">
            <h1>Tituly West Hamu United FC</h1>
            <h2>Domáce poháre</h2>
            <ul>
                <li>EFL Championship: 2 (1957–58, 1980–81) </li>
                <li>Emirates FA Cup: 3 (1963–64, 1974–75, 1979–80)</li>
                <li>FA Community Shield: 1 (1964)</li>
            </ul>
            <h2>Medzinárodné poháre</h2>
            <ul>
                <li>UEFA Conference League: 1 (2022-23)</li>
                <li>UEFA Cup Winners' Cup: 1 (1964-65)</li>
            </ul>
                <p>West Ham United väčšinou nepatrí medzi úplnú špičku anglickej ligy, ale nedá sa považovať ani za priemerný klub. <br>
                    Toto sa potvrdilo v sezóne 2022-23, kedy si nielen zahrali európsku súťaž a to konktrétne Konferenčnú ligu, <br>
                    čo je 3. najvyššia súťaž v európe, ale dokonca aj zvíťazili vo finále proti talianskému Laziu Rím.</p>
        </div>
        <div class="trofeje-obr">
            <img src="{{ asset('pics/West-ham-trofej.jpg') }}" alt="West Ham trofej">
            <p>Kapitán Declan Rice dvíha trofej Konferenčnej Ligy UEFA</p>
        </div>
    </section>
</div>
</body>
</html>
