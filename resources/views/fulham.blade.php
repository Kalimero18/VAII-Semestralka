@extends('layouts.app')

@section('title', 'Fulham FC - Futbal v Londýne')

@section('kontent')

<div class="kontent">
    <section class="intro container-fluid py-4">
        <div class="row mx-2">
            <div class="col-md-8 intro-text">
                <h1>Fulham FC</h1>
                <p>
                    Fulham FC je futbalový klub sídliaci v západnom Londýne, založený v roku 1879, čo z neho robí najstarší profesionálny klub v Londýne. Klub, známy ako "The Cottagers,"
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
            <div class="col-md-4 text-center intro-obr">
                <img src="{{ asset('pics/Fulham-logo.png') }}" alt="fulham logo" class="img-fluid rounded">
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
                        #23 Benda Steven <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"><br>
                        #X Borto Alexander <img src="{{ asset('pics/united-states.png') }}" alt="usa" class="ikona-vlajky"><br>
                        #1 Leno Bernd (<strong>C</strong>) <img src="{{ asset('pics/german-flag.png') }}" alt="nem" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Obrancovia -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Obrancovia</strong></p>
                    <p>
                        #5 Andersen Joachim <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
                        #3 Bassey Calvin <img src="{{ asset('pics/nigeria.png') }}" alt="nig" class="ikona-vlajky"><br>
                        #21 Castagne Timothy <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br>
                        #15 Cuenca Jorge <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #X De Fougerolles Luc <img src="{{ asset('pics/canada.png') }}" alt="kan" class="ikona-vlajky"><br>
                        #31 Diop Issa <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #33 Robinson Antonee <img src="{{ asset('pics/united-states.png') }}" alt="usa" class="ikona-vlajky"><br>
                        #2 Tete Kenny <img src="{{ asset('pics/netherlands.png') }}" alt="hol" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Stredopoliari -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Stredopoliari</strong></p>
                    <p>
                        #16 Berge Sander <img src="{{ asset('pics/norway.png') }}" alt="nor" class="ikona-vlajky"><br>
                        #10 Cairney Tom <img src="{{ asset('pics/scotland.png') }}" alt="sko" class="ikona-vlajky"><br>
                        #X Esenga Jonathan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #24 King Joshua <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #20 Lucic Sasa <img src="{{ asset('pics/serbia.png') }}" alt="ser" class="ikona-vlajky"><br>
                        #18 Pereira Andreas <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #6 Reed Harrison <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #30 Sessegnon Ryan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #32 Smith-Rowe Emile <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #8 Winks Harry <img src="{{ asset('pics/wales.png') }}" alt="wal" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Útočníci -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Útočníci</strong></p>
                    <p>
                        #X Godo Martial <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #17 Iwobi Alex <img src="{{ asset('pics/nigeria.png') }}" alt="nig" class="ikona-vlajky"><br>
                        #7 Jimenez Raul <img src="{{ asset('pics/mexico.png') }}" alt="mex" class="ikona-vlajky"><br>
                        #19 Nelson Reiss <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #9 Rodrigo Muniz <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #11 Traore Adama <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                    </p>
                    <p><strong>Tréner</strong></p>
                    <p>Silva Marco <img src="{{ asset('pics/portugal.png') }}" alt="por" class="ikona-vlajky"></p>
                </div>
            </div>
        </div>

        <!-- Obrázok tímu -->
        <div class="row text-center mt-4">
            <div class="col-12">
                <img src="{{ asset('pics/Fulham-supiska.jpg') }}" alt="Fulham FC supiska 2024/25" class="timove-foto"><br>
                <p class="tim-popis">Tímové foto Fulhamu FC pre sezónu 2024/25</p>
            </div>
        </div>
    </section>

    <section class="stadion container-fluid py-4">
        <div class="row align-items-center mx-2">
            <div class="col-md-6 stadion-txt">
                <h1 class="text-center">Craven Cottage</h1>
                <p>
                    Craven Cottage je domovským štadiónom futbalového klubu Fulham FC, nachádza sa na brehu rieky Temža v západnom Londýne. Postavený bol v roku 1896 a od tej doby slúži ako sídlo Fulhamu,
                    čo z neho robí jeden z najstarších aktívnych štadiónov v Anglicku. Craven Cottage má kapacitu približne 25 700 miest a je známy svojou klasickou architektúrou a špecifickou atmosférou. Jedným z jeho ikonických prvkov je *Cottage Pavilion*,
                    malý domček umiestnený v jednom rohu ihriska, ktorý slúžil ako hráčska šatňa a je unikátny pre tento štadión. <br>
                    Štadión prešiel viacerými renováciami, aby zodpovedal moderným bezpečnostným a komfortným štandardom, pričom nedávna rekonštrukcia Riverside Stand priblížila kapacitu bližšie k cieľovej hodnote
                    a poskytla nové výhľady na Temžu. Napriek modernizácii si Craven Cottage zachováva historický šarm a patrí medzi najcharakteristickejšie štadióny v anglickom futbale.
                    Špecifická kombinácia tradičnej architektúry a moderných prvkov robí z Craven Cottage obľúbené miesto pre fanúšikov Fulhamu aj návštevníkov futbalových zápasov. <br>
                    Keď v roku 1989 došlo ku katastrofe v Hillsborough, Fulham bol na predposlednom mieste v The Football League (3. liga) a všetky miesta na štadióne boli len na státie. Ale na základe Taylorovej správy ambiciózny predseda
                    Fulhamu Jimmy Hill predložil v roku 1996 plán štadiónu, kde budú všetky miesta na sedenie. Tieto plány sa nikdy neuskutočnili, čiastočne kvôli nátlaku miestnych obyvateľov, ktorí chceli na zápasoch naďalej stáť. <br>
                    V čase, keď sa Fulham dostal do Premier League, mal stále na štadióne len miesta na státie - v tej dobe to už bolo prakticky neslýchané.
                    V decembri 2003 boli predstavené plány na veľkú rekonštrukciu v hodnote 8 miliónov libier, aby bola v súlade s požiadavkami Premier League.
                </p>
            </div>
            <div class="col-md-6 stadion-obr">
                <img src="{{ asset('pics/Craven-cottage.jpg') }}" alt="Craven Cottage" class="img-fluid rounded">
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
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 tabulka-kontainer">
                <h1 class="text-center">Manažment Fulhamu FC</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Meno, Priezvisko</th>
                        <th>Pozícia/Špecializácia</th>
                    </tr>
                    </thead>
                    <tbody>
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
                        <h1>Tituly Fulhamu FC</h1>
                        <h2>Domáce poháre</h2>
                        <ul>
                            <li>EFL Championship: 3 (1948–49, 2000–01, 2021–22) </li>
                            <li>EFL League One: 2 (1931–32, 1998–99)</li>
                        </ul>
                        <h2>Medzinárodné poháre</h2>
                        <p>
                            Fulhamu FC sa podarilo kvalifikovať párkrát do druhej najvyššej európskej súťaže UEFA Europa League, naposledy v sezóne 2009-10. <br>
                            V tejto sezóne sa dokonca prebojovali až do finále, kde však prehrali so španielským veľkoklubom Atlético Madrid. <br>
                            Pre "priemerný" tím z anglickej ligy bol toto však najväčší medzinárodný úspech, na ktorý môžu byť napriek prehre veľmi hrdí.
                        </p>
                    </div>
                </div>
                <!-- Obrázková časť -->
                <div class="trofeje-obr col-lg-4">
                    <div class="text-center mb-2">
                        <img src="{{ asset('pics/Fulham-trofej.jpg') }}" alt="Fulham trofej" class="img-fluid rounded">
                    </div>
                    <div class="uspechy-obr-popis p-2 text-center">
                        <p>Hráči Fulhamu oslavujú postup do Premier League</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
