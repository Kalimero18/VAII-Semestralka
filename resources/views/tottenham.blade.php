@extends('layouts.app')

@section('title', 'Tottenham Hotspur FC - Futbal v Londýne')

@section('kontent')

<div class="kontent">
    <section class="intro container-fluid py-4">
        <div class="row mx-2">
            <div class="col-md-8 intro-text">
                <h1>Tottenham Hotspur</h1>
                <p>
                    Tottenham Hotspur FC, často označovaný ako "Spurs," je profesionálny futbalový klub so sídlom v severnom Londýne. Založený v roku 1882,
                    patrí k najstarším a najznámejším anglickým futbalovým tímom. Klub hráva svoje domáce zápasy na Tottenham Hotspur Stadium s kapacitou približne 62 000 miest,
                    ktorý bol otvorený v roku 2019 a je jedným z najmodernejších futbalových štadiónov na svete.
                    Spurs sú známi svojím útočným herným štýlom a bohatou históriou. V roku 1961 sa stali prvým klubom 20. storočia, ktorý dosiahol prestížny "double"
                    – víťazstvo v lige aj FA Cupe. Získali viacero významných domácich a európskych trofejí, pričom medzi ich najväčšie úspechy patrí víťazstvo v Pohári UEFA v rokoch 1972 a 1984.
                    V Premier League sú tradične silným klubom s početnou fanúšikovskou základňou a intenzívnou rivalitou s ďalšími londýnskymi klubmi, najmä s Arsenalom, čo vytvára ikonické derby nazývané "North London Derby."
                    Tottenham má bohatú futbalovú tradíciu a je obľúbený pre svoj inovatívny štýl hry, ktorý priťahuje fanúšikov z celého sveta. <br>
                    Tottenham je tiež jediným klubom v Premier League, ktorý má kohúta ako svoj symbol, čo odkazuje na Williama Shakespearea a jeho spojenie so zakladateľom klubu, ktorý vlastnil
                    kohútov používaných v kohútích zápasoch. Kohút na lopte na ich embléme sa stal jedným z najznámejších symbolov anglického futbalu.
                </p>
            </div>
            <div class="col-md-4 text-center intro-obr">
                <img src="{{ asset('pics/Tottenham-logo.png') }}" alt="tottenham logo" class="img-fluid rounded">
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

    <section class="stadion container-fluid py-4">
        <div class="row align-items-center mx-2">
            <div class="col-md-6 stadion-txt">
                <h1 class="text-center">Tottenham Hotspur Stadium</h1>
                <p>
                    Tottenham Hotspur Stadium je jedným z najmodernejších futbalových štadiónov na svete, a slúži ako domovský štadión pre klub Tottenham Hotspur.
                    Otvorený bol v apríli 2019 a nachádza sa na mieste starého White Hart Lane v severnom Londýne. S kapacitou 62 850 divákov je to najväčší klubový štadión v Londýne a jeden z najväčších v Anglicku. <br>
                    Štadión bol navrhnutý s ohľadom na moderné potreby fanúšikov a hráčov, s prvotriednou technológiou a pohodlnými zariadeniami. Jednou z jeho najvýraznejších funkcií je plne vysúvateľný trávnik,
                    ktorý umožňuje prechod medzi tradičným futbalovým povrchom a povrchom pre NFL zápasy, čo robí štadión univerzálnym športovým miestom. Vďaka tejto inovácii sa Tottenham Hotspur Stadium stal prvým štadiónom v Európe, ktorý bol oficiálne prispôsobený pre zápasy NFL. <br>
                    Stavba je navrhnutá s ohľadom na trvalú udržateľnosť, s využitím obnoviteľných materiálov a systémami na znižovanie uhlíkovej stopy. Je považovaná za jeden z najzelenších štadiónov v Anglicku. <br>
                    Tottenham Hotspur Stadium sa môže pochváliť najdlhším barom na európskych štadiónoch s dĺžkou 65 metrov. Tento bar s názvom „Goal Line Bar“ sa nachádza pozdĺž celej šírky tribúny South Stand. <br>
                    Tribúna South Stand pojme až 17 500 divákov a je navrhnutá tak, aby vytvárala intenzívnu atmosféru podobnú tým v nemeckých futbalových arénach, ako je „žltá stena“ Borussie Dortmund. <br>
                    Štadión má vlastný pivovar, ktorý produkuje čerstvé pivo podávané fanúšikom cez špeciálny systém „Bottoms Up“, ktorý rýchlo plní poháre pivom zdola. <br>
                    Na streche štadióna sa nachádza Sky Walk, čo je adrenalínový zážitok, ktorý návštevníkom umožňuje prechádzať sa po streche a obdivovať Londýn z výšky.
                </p>
            </div>
            <div class="col-md-6 stadion-obr">
                <img src="{{ asset('pics/Tottenham-Stadium.jpg') }}" alt="Tottenham Hotspur Stadium" class="img-fluid rounded">
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
                        <td>Ange Postecoglou</td>
                        <td>Hlavný Tréner</td>
                    </tr>
                    <tr>
                        <td>Mile Jedinak</td>
                        <td>Asistent Trénera</td>
                    </tr>
                    <tr>
                        <td>Ryan Mason</td>
                        <td>Asistent Trénera</td>
                    </tr>
                    <tr>
                        <td>Matt Wells</td>
                        <td>Asistent Trénera</td>
                    </tr>
                    <tr>
                        <td>Nick Montgomery</td>
                        <td>Tréner Štandartných situácií</td>
                    </tr>
                    <tr>
                        <td>Rob Burch</td>
                        <td>Tréner Brankárov</td>
                    </tr>
                    <tr>
                        <td>Nigel Gibbs</td>
                        <td>Tréner Akadémie</td>
                    </tr>
                    <tr>
                        <td>Stuart Campbell</td>
                        <td>Hlavný Lekár</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 tabulka-kontainer">
                <h1 class="text-center">Manažment Tottenhamu Hotspurs FC</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Meno, Priezvisko</th>
                        <th>Pozícia/Špecializácia</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Daniel Levy</td>
                        <td>Vlastník</td>
                    </tr>
                    <tr>
                        <td>Michael Green</td>
                        <td>Spoluvlastník</td>
                    </tr>
                    <tr>
                        <td>Joe Lewis</td>
                        <td>Výlučný Podpredseda</td>
                    </tr>
                    <tr>
                        <td>Paul Kemsley</td>
                        <td>Riaditeľ Klubu</td>
                    </tr>
                    <tr>
                        <td>Jennifer Urquhart</td>
                        <td>Klubový sekretár</td>
                    </tr>
                    <tr>
                        <td>Johan Lange</td>
                        <td>Športový riaditeľ</td>
                    </tr>
                    <tr>
                        <td>David Buchler</td>
                        <td>Riaditeľ manažmentu</td>
                    </tr>
                    <tr>
                        <td>Matthew Collecott</td>
                        <td>Hlavný Manažer financií</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="uspechy">
        <div class="trofeje">
            <h1>Tituly Tottenhamu Hotspur FC</h1>
            <h2>Domáce poháre</h2>
            <ul>
                <li>Premier League: 2 (1950–51, 1960–61)</li>
                <li>Emirates FA Cup: 8 (1900–01, 1920–21, 1960–61, 1961–62, 1966–67, 1980–81, 1981–82, 1990–91)</li>
                <li>Carabao Cup: 4 (1970–71, 1972–73, 1998–99, 2007–08) </li>
                <li>FA Community Shield: 4 (1970–71, 1972–73, 1998–99, 2007–08) </li>
            </ul>
            <h2>Medzinárodné poháre</h2>
            <ul>
                <li>UEFA Europa League: 2 (1971–72, 1983–84)</li>
                <li>UEFA Cup Winners' Cup: 1 (1962-63)</li>
            </ul>
                <p>Tottenhamu sa podarilo prebojovať do filáne najvyššej európskej súťaže UEFA Champions League v sezóne 2018-19. <br>
                    Po neuveriteľnóm obrate v semifinále proti Ajaxu Amsterdam však podľahli vo finále proti Liverpoolu FC s výsledkom 0:2.</p>
        </div>
        <div class="trofeje-obr">
            <img src="{{ asset('pics/Tottenham-trofej.jpg') }}" alt="Tottenham trofej">
            <p>Hráči Tottenhamu oslavujú triumf v Carabao Cupe</p>
        </div>
    </section>
</div>
@endsection
