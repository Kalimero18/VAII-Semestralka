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
                        #40 Austin Brandon <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #20 Forster Fraser <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #X Gunter Luca <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #1 Vicario Guglielmo <img src="{{ asset('pics/italy.png') }}" alt="ita" class="ikona-vlajky"><br>
                        #41 Whiteman Alfie <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Obrancovia -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Obrancovia</strong></p>
                    <p>
                        #33 Davies Ben <img src="{{ asset('pics/wales.png') }}" alt="wal" class="ikona-vlajky"><br>
                        #5 Dorrington Alfie <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #6 Dragusin Radu <img src="{{ asset('pics/romania.png') }}" alt="rum" class="ikona-vlajky"><br>
                        #23 Porro Pedro <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #3 Reguilon Sergio <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #17 Romero Cristian Gabriel <img src="{{ asset('pics/argentina.png') }}" alt="arg" class="ikona-vlajky"><br>
                        #24 Spence Djed <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #13 Udogie Destiny <img src="{{ asset('pics/italy.png') }}" alt="ita" class="ikona-vlajky"><br>
                        #37 van de Ven Micky <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Stredopoliari -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Stredopoliari</strong></p>
                    <p>
                        #30 Bentancur Rodrigo <img src="{{ asset('pics/uruguay.png') }}" alt="uru" class="ikona-vlajky"><br>
                        #15 Bergvall Lucas <img src="{{ asset('pics/sweden.png') }}" alt="sve" class="ikona-vlajky"><br>
                        #8 Bissouma Yves <img src="{{ asset('pics/mali.png') }}" alt="mal" class="ikona-vlajky"><br>
                        #X Cassanova Dante Jamel <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #14 Gray Archie <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #X Hall Tyrese <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #X Kyerematen Rio <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #10 Maddison James <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #2 Robson Max <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #29 Sarr Pape Matar <img src="{{ asset('pics/senegal.png') }}" alt="sen" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Útočníci -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Útočníci</strong></p>
                    <p>
                        #63 Ajayi Oyindamola <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #22 Johnson Brennan <img src="{{ asset('pics/wales.png') }}" alt="wal" class="ikona-vlajky"><br>
                        #21 Kulusevski Dejan <img src="{{ asset('pics/sweden.png') }}" alt="sve" class="ikona-vlajky"><br>
                        #42 Lankshear Will <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #47 Moore Mikey <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #28 Odobert Wilson <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #9 Richarlison <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #19 Solanke Dominic <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #7 Son Heung-Min (<strong>C</strong>) <img src="{{ asset('pics/south-korea.png') }}" alt="sou" class="ikona-vlajky"><br>
                        #16 Werner Timo <img src="{{ asset('pics/german-flag.png') }}" alt="ger" class="ikona-vlajky"><br>
                    </p>
                    <p><strong>Tréner</strong></p>
                    <p>Postecoglou Ange <img src="{{ asset('pics/australia.png') }}" alt="aus" class="ikona-vlajky"></p>
                </div>
            </div>
        </div>

        <!-- Obrázok tímu -->
        <div class="row text-center mt-4">
            <div class="col-12">
                <img src="{{ asset('pics/Tottenham-supiska.png') }}" alt="Tottenham Hotspur supiska 2024/25" class="timove-foto"><br>
                <p class="tim-popis">Tímové foto Tottenhamu Hotspur pre sezónu 2024/25</p>
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
@endsection
