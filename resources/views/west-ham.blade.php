@extends('layouts.app')

@section('title', 'West Ham United FC - Futbal v Londýne')

@section('kontent')

<div class="kontent">
    <section class="intro container-fluid py-4">
        <div class="row mx-2">
            <div class="col-md-8 intro-text">
                <h1>West Ham United</h1>
                <p>
                    West Ham United FC, známy aj ako "Hammers" alebo "Irons," je anglický futbalový klub sídliaci vo východnom Londýne. Klub bol založený v roku 1895 pod názvom Thames Ironworks FC,
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
            <div class="col-md-4 text-center intro-obr">
                <img src="{{ asset('pics/WestHam-logo.png') }}" alt="west ham logo" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <section class="supiska container-fluid">
        <div class="row mx-2">
            <div class="col-12 text-center mb-4">
                <h1 class="nadpis">Súpiska pre sezónu 2024/2025</h1>
            </div>

            <!-- Brankári -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Brankári</strong></p>
                    <p>
                        #23 Areola Alphonse <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #1 Fabianski Lukasz <img src="{{ asset('pics/poland.png') }}" alt="pol" class="ikona-vlajky"><br>
                        #21 Foderingham Wesley <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #X Herrick Finley <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Obrancovia -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Obrancovia</strong></p>
                    <p>
                        #X Casey Kaelan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #5 Coufal Vladimir <img src="{{ asset('pics/czech-republic.png') }}" alt="cze" class="ikona-vlajky"><br>
                        #3 Cresswell Aaron <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #33 Emerson <img src="{{ asset('pics/italy.png') }}" alt="ita" class="ikona-vlajky"><br>
                        #26 Killman Max <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #15 Mavropanos Konstantinos <img src="{{ asset('pics/greece.png') }}" alt="gre" class="ikona-vlajky"><br>
                        #2 Robinson Junior <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #X Scarles Oliver <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #25 Todibo Jean-Clair <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #29 Wan-Bissaka Aaron <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Stredopoliari -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Stredopoliari</strong></p>
                    <p>
                        #19 Alvarez Edson <img src="{{ asset('pics/mexico.png') }}" alt="mex" class="ikona-vlajky"><br>
                        #39 Irving Andrew <img src="{{ asset('pics/scotland.png') }}" alt="sko" class="ikona-vlajky"><br>
                        #14 Kudus Mohammed <img src="{{ asset('pics/ghana.png') }}" alt="gha" class="ikona-vlajky"><br>
                        #8 Orford Lewis <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #10 Paqueta Lucas <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #24 Rodriguez Guido <img src="{{ asset('pics/argentina.png') }}" alt="arg" class="ikona-vlajky"><br>
                        #4 Soler Carlos <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #28 Soucek Tomas <img src="{{ asset('pics/czech-republic.png') }}" alt="cze" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Útočníci -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Útočníci</strong></p>
                    <p>
                        #9 Antonio Michail <img src="{{ asset('pics/jamaica.png') }}" alt="jam" class="ikona-vlajky"><br>
                        #20 Bowen Jarrod (<strong>C</strong>) <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #11 Fullkrug Niclas <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"><br>
                        #18 Ings Danny <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #17 Luis Guilherme <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #X Moore Sean <img src="{{ asset('pics/ireland.png') }}" alt="irs" class="ikona-vlajky"><br>
                        #7 Summerville Crysencio <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br>
                    </p>
                    <p><strong>Tréner</strong></p>
                    <p>Lopetegui Julen <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"></p>
                </div>
            </div>
        </div>

        <!-- Obrázok tímu -->
        <div class="row text-center mt-4">
            <div class="col-12">
                <img src="{{ asset('pics/West-ham-supiska.jpeg') }}" alt="West Ham supiska 2024/25" class="timove-foto"><br>
                <p class="tim-popis">Tímové foto West Hamu United FC pre sezónu 2024/25</p>
            </div>
        </div>
    </section>

    <section class="stadion container-fluid py-4">
        <div class="row align-items-center mx-2">
            <div class="col-md-6 stadion-txt">
                <h1 class="text-center">London Stadium</h1>
                <p>
                    London Stadium, známy aj ako bývalý Olympijský štadión, je moderné multifunkčné športové zariadenie v štvrti Stratford vo východnom Londýne.
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
            <div class="col-md-6 stadion-obr">
                <img src="{{ asset('pics/London-Stadium.jpg') }}" alt="London Stadium" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <section class="treneri container-fluid my-4">
        <div class="row mx-2 gy-4">
            <div class="col-md-6 tabulka-kontainer">
                <h1 class="text-center">Trénerský tím pre sezónu 2024/25</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Meno, Priezvisko</th>
                        <th>Pozícia/Špecializácia</th>
                    </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 tabulka-kontainer">
                <h1 class="text-center">Manažment West Hamu United FC</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Meno, Priezvisko</th>
                        <th>Pozícia/Špecializácia</th>
                    </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="uspechy py-4">
        <div class="container-fluid">
            <div class="row mx-2">
                <!-- Textová časť -->
                <div class="uspechy-text col-lg-8 mb-4">
                    <div class="p-3">
                        <h1>Tituly West Hamu United FC</h1>
                        <h2>Domáce poháre</h2>
                        <ul>
                            <li>EFL Championship: 2 (1957–58, 1980–81)</li>
                            <li>Emirates FA Cup: 3 (1963–64, 1974–75, 1979–80)</li>
                            <li>FA Community Shield: 1 (1964)</li>
                        </ul>
                        <h2>Medzinárodné poháre</h2>
                        <ul>
                            <li>UEFA Conference League: 1 (2022–23)</li>
                            <li>UEFA Cup Winners' Cup: 1 (1964–65)</li>
                        </ul>
                        <p>
                            West Ham United väčšinou nepatrí medzi úplnú špičku anglickej ligy, ale nedá sa považovať ani za priemerný klub. <br>
                            Toto sa potvrdilo v sezóne 2022–23, kedy si nielen zahrali európsku súťaž, konkrétne Konferenčnú ligu, <br>
                            čo je 3. najvyššia súťaž v Európe, ale dokonca aj zvíťazili vo finále proti talianskemu Laziu Rím.
                        </p>
                    </div>
                </div>
                <!-- Obrázková časť -->
                <div class="uspechy-obr col-lg-4">
                    <div class="text-center mb-2 my-5">
                        <img src="{{ asset('pics/West-ham-trofej.jpg') }}" alt="West Ham trofej" class="img-fluid rounded">
                    </div>
                    <div class="uspechy-obr-popis p-2 text-center my-2">
                        <p>Kapitán Declan Rice dvíha trofej Konferenčnej Ligy UEFA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="container-fluid">
            <div class="row mx-2">
                <div class="uspechy-text col-lg-8 mb-4">
                    <div class="coll-mb-3 mb-3">
                        <h1 class="text-center">10 Najlepčích hráčov histórie West Hamu</h1>
                        <p> 1. - Bobby Moore - Stredný obránca (1958-1974) 586 zápasov, 26 gólov, 5 asistencií, 2 trofeje<br>
                            2. - Billy Bonds - Defenzívny záložník (1967-1987) 608 zápasov, 46 gólov, 4 asistencie, 2 trofeje<br>
                            3. - Mark Noble - Stredný záložník (2005-2022) 550 zápasov, 62 gólov, 58 asistencií, 0  trofejí<br>
                            4. - Frank Lampard sr. - Ľavý obránca (1967-1985) 500 zápasov, 17 gólov, 4 asistencie, 2 trofeje<br>
                            5. - Trevor Brooking - Ofenzívny záložník (1967-1984) 486 zápasov, 79 gólov, 9 asistencií, 2 trofeje<br>
                            6. - Geoff Hurth - Hrotový útočník (1959-1972) 452 zápasov, 213 gólov, 3 asistencie, 1 trofej<br>
                            7. - Ken Brown - Stredný obránca (1953-1966) 362 zápasov, 4 góly, 0 asistencií, 2 trofeje<br>
                            8. - Aaron Cresswell - Ľavý obránca (2014- ) 356 zápasov, 11 gólov, 37 asistencií, 1 trofej<br>
                            9. - Alvin Martin - Stredný obránca (1977-1996) 349 zápasov, 24 gólov, 4 asistencií, 0 trofejí<br>
                            10. - Martin Peters - Ľavý záložník (1962-70) 338 zápasov, 90 gólov, 5 asistencií, 2 trofeje<br>
                            <br>
                            <strong>Zvolené hodnotenie aj poradie hráčov je čisto názorom admina stránky.</strong></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center mb-2 ">
                        <img src="{{ asset('pics/Moore.jpg') }}" alt="Top hrac" class="trofeje-obr">
                    </div>
                    <div class="uspechy-obr-popis p-2 text-center">
                        <p>Bobby Moore, kapitán majstrov sveta z roku 1966</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rating-section container-fluid text-center my-4">
        <h2>Ohodnoť Stránku West Ham United FC</h2>
        <div class="star-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
        </div>
    </section>
</div>

<script src="{{ asset('js/SrandyCezJS.js') }}"></script>
@endsection
