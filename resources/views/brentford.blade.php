@extends('layouts.app')

@section('title', 'Brentford FC - Futbal v Londýne')

@section('kontent')

<div class="kontent">
    <section class="intro container-fluid py-4">
        <div class="row mx-2">
            <div class="col-md-8 intro-text">
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
            <div class="col-md-4 text-center intro-obr">
                <img src="{{ asset('pics/Brentford-logo.png') }}" alt="brentford logo" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <section class="supiska container-fluid">
        <div class="row mx-2">
            <!-- Nadpis -->
            <div class="col-12 text-center mb-4">
                <h1 class="nadpis">Súpiska pre sezónu 2024/2025</h1>
            </div>

            <!-- Brankári -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Brankári</strong></p>
                    <p>
                        #13 Cox Matthew <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #1 Flekken Mark <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br>
                        #12 Valdimarsson Hakon Rafn <img src="{{ asset('pics/iceland.png') }}" alt="isl" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Obrancovia -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Obrancovia</strong></p>
                    <p>
                        #20 Ajer Kristoffer <img src="{{ asset('pics/norway.png') }}" alt="nor" class="ikona-vlajky"><br>
                        #22 Collins Nathan Michael <img src="{{ asset('pics/ireland.png') }}" alt="irs" class="ikona-vlajky"><br>
                        #43 Fredrick Benjamin <img src="{{ asset('pics/nigeria.png') }}" alt="nig" class="ikona-vlajky"><br>
                        #36 Kim Ji-Soo <img src="{{ asset('pics/south-korea.png') }}" alt="juk" class="ikona-vlajky"><br>
                        #16 Mee Ben <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #21 Meghoma Jayden <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #5 Pinnock Ethan <img src="{{ asset('pics/jamaica.png') }}" alt="jam" class="ikona-vlajky"><br>
                        #30 Roerslev Rasmussen Mads <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
                        #4 van den Berg Sepp <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Stredopoliari -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Stredopoliari</strong></p>
                    <p>
                        #14 Carvalho Fabio <img src="{{ asset('pics/portugal.png') }}" alt="por" class="ikona-vlajky"><br>
                        #24 Damsgaard Mikkel <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
                        #39 Gustavo Nunes <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #27 Janelt Vitaly <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"><br>
                        #8 Jensen Mathias <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
                        #26 Konak Yunus Emre <img src="{{ asset('pics/turkey.png') }}" alt="tur" class="ikona-vlajky"><br>
                        #6 Noorgaard Christian (<strong>C</strong>) <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
                        #16 Owen Riley <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #7 Schade Kevin <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"><br>
                        #28 Trevitt Ryan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #18 Yarmolyuk Yegor <img src="{{ asset('pics/ukraine.png') }}" alt="ukr" class="ikona-vlajky"><br>
                        #42 Yogane Tony <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Útočníci -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Útočníci</strong></p>
                    <p>
                        #23 Lewis-Potter Keane <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #19 Mbeumo Bryan <img src="{{ asset('pics/cameroon.png') }}" alt="cam" class="ikona-vlajky"><br>
                        #40 Morgan Iwan <img src="{{ asset('pics/wales.png') }}" alt="wal" class="ikona-vlajky"><br>
                        #99 Thiago Igor <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #11 Wissa Yoane <img src="{{ asset('pics/congo.png') }}" alt="drc" class="ikona-vlajky"><br>
                    </p>
                    <p><strong>Tréner</strong></p>
                    <p>Frank Thomas <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"></p>
                </div>
            </div>
        </div>

        <!-- Obrázok tímu -->
        <div class="row text-center mt-4">
            <div class="col-12">
                <img src="{{ asset('pics/Brentford-supiska.jpg') }}" alt="Brentford supiska 2024/25" class="timove-foto"><br>
                <p class="tim-popis">Tímové foto Brentfordu FC pre sezónu 2024/25</p>
            </div>
        </div>
    </section>

    <section class="stadion container-fluid py-4">
        <div class="row align-items-center mx-2">
            <div class="col-md-6 stadion-txt">
                <h1 class="text-center">Brentford Community Stadium</h1>
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
            <div class="col-md-6 stadion-obr">
                <img src="{{ asset('pics/Brentford-stadium.jpg') }}" alt="Brentford Community Stadium" class="img-fluid rounded">
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
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 tabulka-kontainer">
                <h1 class="text-center">Manažment Brentfordu FC</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Meno, Priezvisko</th>
                        <th>Pozícia/Špecializácia</th>
                    </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="uspechy py-4">
        <div class="container-fluid">
            <div class="row mx-2">
                <!-- Textová časť -->
                <div class="trofeje col-lg-8 mb-4">
                    <div class="p-3">
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
                </div>
                <!-- Obrázková časť -->
                <div class="trofeje-obr col-lg-4">
                    <div class="text-center mb-2">
                        <img src="{{ asset('pics/Brentford-trofej.jpg') }}" alt="Brentford Trofej" class="img-fluid rounded">
                    </div>
                    <div class="uspechy-obr-popis p-2 text-center">
                        <p>Kapitán a Tréner Brentfordu s trofejou EFL League One</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
