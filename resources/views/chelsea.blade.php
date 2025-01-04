@extends('layouts.app')

@section('title', 'Chelsea FC - Futbal v Londýne')

@section('kontent')

    <div class="kontent">
        <section class="intro container-fluid py-4">
            <div class="row mx-2">
                <div class="col-md-8 intro-text">
                    <h1>Chelsea FC</h1>
                    <p>
                        Chelsea Football Club, známy tiež ako Chelsea, je anglický futbalový veľkoklub sídliaci vo Fulhame v Londýne. Klub bol založený v roku 1905 a odvtedy patrí medzi stálice najvyššej anglickej futbalovej súťaže.
                        Chelsea hrá svoje domáce zápasy na štadióne Stamford Bridge, ktorý je jeho domovom už od samotného vzniku.
                        Dosiahla počas svojej histórie veľa úspechov, vrátane víťazstiev v rôznych domácich pohárových súťažiach, ako FA Cup a Ligový pohár, najmä počas 60., 70., 90. a 00. rokov.
                        Hoci klub prechádzal viacerými vzostupmi a pádmi, stabilný rast a investície mu umožnili postupne získať miesto medzi najlepšími tímami Anglicka.
                        Najúspešnejšie obdobie pre Chelsea však začalo v roku 2003, keď klub odkúpil ruský miliardár Roman Abramovič.
                        Od roku 2005 získala Chelsea niekoľko titulov v Premier League, FA Cupe, Ligovom pohári a európskych súťažiach.
                        Najväčší európsky úspech dosiahla Chelsea v roku 2012, keď sa stala prvým a zatiaľ jediným klubom z Londýna, ktorý vyhral Ligu majstrov UEFA.
                        Tento triumf pod vedením trénera Roberta Di Mattea patrí medzi najpamätnejšie momenty v histórii klubu. O deväť rokov neskôr, v roku 2021, Chelsea zopakovala tento úspech a získala druhý titul v Lige majstrov, tentoraz pod vedením Thomasa Tuchela.
                        Chelsea je dnes považovaná za jeden z najväčších a najúspešnejších futbalových klubov na svete.
                        Okrem dvoch triumfov v Lige majstrov sa môže pochváliť aj víťazstvami v Európskej lige UEFA, Superpohári UEFA a Majstrovstvách sveta klubov FIFA.
                        Klub si udržiava stabilnú pozíciu medzi futbalovou elitou a jeho vplyv na anglický a európsky futbal zostáva silný.
                    </p>
                </div>
                <div class="col-md-4 text-center intro-obr">
                    <img src="{{ asset('pics/Chelsea-logo.png') }}" alt="chelsea logo" class="img-fluid rounded">
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
                        #47 Bergstrom Lucas <img src="{{ asset('pics/finland.png') }}" alt="fin" class="ikona-vlajky"><br>
                        #13 Bettinelli Marcus <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #12 Jorgensen Filip <img src="{{ asset('pics/denmark.png') }}" alt="dan" class="ikona-vlajky"><br>
                        #1 Sanchez Robert <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Obrancovia -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Obrancovia</strong></p>
                    <p>
                        #12 Acheampong Josh <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #4 Adarabioyo Tosin <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #5 Badiashile Benoit <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #21 Chilwell Ben <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #6 Colwill Levi <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #3 Cucurella Marc <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #2 Disasi Axel <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #29 Fofana Wesley <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #27 Gusto Malo <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #24 James Reece (<strong>C</strong>) <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #4 Sturge Zak <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Stredopoliari -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Stredopoliari</strong></p>
                    <p>
                        #25 Caicedo Moises <img src="{{ asset('pics/equador.png') }}" alt="ekv" class="ikona-vlajky"><br>
                        #31 Casadei Cesare <img src="{{ asset('pics/italy.png') }}" alt="tal" class="ikona-vlajky"><br>
                        #17 Chukwuemeka Carney <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #22 Dewsbury-Hall Kiernan <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #X Dyer Kiano <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #8 Fernandez Enzo <img src="{{ asset('pics/argentina.png') }}" alt="arg" class="ikona-vlajky"><br>
                        #X George Tyrique <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #45 Lavia Romeo <img src="{{ asset('pics/belgium.png') }}" alt="bel" class="ikona-vlajky"><br>
                        #18 Nkunku Christopher <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #20 Palmer Cole <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #40 Veiga Renato <img src="{{ asset('pics/portugal.png') }}" alt="por" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Útočníci -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Útočníci</strong></p>
                    <p>
                        #16 Deivid Washington <img src="{{ asset('pics/brazil.png') }}" alt="bra" class="ikona-vlajky"><br>
                        #38 Guiu Marc <img src="{{ asset('pics/spain.png') }}" alt="spa" class="ikona-vlajky"><br>
                        #15 Jackson Nicolas <img src="{{ asset('pics/senegal.png') }}" alt="sen" class="ikona-vlajky"><br>
                        #14 Felix Joao <img src="{{ asset('pics/portugal.png') }}" alt="por" class="ikona-vlajky"><br>
                        #11 Madueke Noni <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #10 Mudryk Mykhailo <img src="{{ asset('pics/ukraine.png') }}" alt="ukr" class="ikona-vlajky"><br>
                        #7 Neto Pedro <img src="{{ asset('pics/portugal.png') }}" alt="por" class="ikona-vlajky"><br>
                        #19 Sancho Jadon <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #X Tauriainen Jimi <img src="{{ asset('pics/finland.png') }}" alt="fin" class="ikona-vlajky"><br>
                    </p>
                    <p><strong>Tréner</strong></p>
                    <p> Maresca Enzo <img src="{{ asset('pics/italy.png') }}" alt="tal" class="ikona-vlajky"></p>
                </div>
            </div>
        </div>

        <!-- Obrázok tímu -->
        <div class="row text-center mt-4">
            <div class="col-12">
                <img src="{{ asset('pics/Chelsea-Supiska.jpeg') }}" alt="Chelsea supiska 2024/25" class="timove-foto"><br>
                <p class="tim-popis">Tímové foto Chelsea FC pre sezónu 2024/25</p>
            </div>
        </div>
    </section>

        <section class="stadion container-fluid py-4">
            <div class="row align-items-center mx-2">
                <div class="col-md-6 stadion-txt">
                    <h1 class="text-center">Stamford Bridge</h1>
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
                <div class="col-md-6 stadion-obr">
                    <img src="{{ asset('pics/Stamford-Bridge.jpg') }}" alt="Stamford Bridge" class="img-fluid rounded">
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
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 tabulka-kontainer">
                    <h1 class="text-center">Manažment Chelsea FC</h1>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Meno, Priezvisko</th>
                            <th>Pozícia/Špecializácia</th>
                        </tr>
                        </thead>
                        <tbody>
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
                    </div>
                    <!-- Obrázková časť -->
                    <div class="trofeje-obr col-lg-4">
                        <div class="text-center mb-2">
                            <img src="{{ asset('pics/Chelsea-trofej.jpg') }}" alt="Chelsea Trofej" class="img-fluid rounded">
                        </div>
                        <div class="uspechy-obr-popis p-2 text-center">
                            <p>Oslavy Chelsea FC po výhre v Lige Majstrov v roku 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
