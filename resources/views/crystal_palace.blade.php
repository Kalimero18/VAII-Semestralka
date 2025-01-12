@extends('layouts.app')

@section('title', 'Crystal Palace - Futbal v Londýne')

@section('kontent')

<div class="kontent">
    <section class="intro container-fluid py-4">
        <div class="row mx-2">
            <div class="col-md-8 intro-text">
                <h1>Crystal Palace</h1>
                <p>
                    Crystal Palace FC je anglický futbalový klub so sídlom v štvrti Selhurst, na juhu Londýna.
                    Bol založený v roku 1905 a svoje domáce zápasy hráva na štadióne Selhurst Park s kapacitou približne 25 000 divákov. Klub, prezývaný "The Eagles" alebo "Orli,"
                    tradične hrá v modro-červených farbách. Crystal Palace pôsobí v Premier League, kde súťaží s najlepšími tímami Anglicka, hoci história klubu je poznamenaná častým striedaním medzi nižšími ligami a najvyššou súťažou.
                    Klub sa stal známym svojou húževnatosťou a pevnými fanúšikovskými základmi, pričom jeden z jeho najväčších úspechov bol dosiahnutý v roku 1990, keď sa dostal do finále FA Cupu. V posledných rokoch sa Crystal Palace stabilizoval v Premier League,
                    vďaka čomu si získal rešpekt a stabilnú pozíciu medzi elitnými anglickými klubmi. Ich rivalita s klubmi ako Brighton & Hove Albion patrí medzi najviac vyhrotené a zároveň zaujímavé súboje v anglickom futbale. <br>
                    Klub v roku 1920 vstúpil do futbalovej ligy a počas svojej histórie klub primárne hrá v dvoch najvyšších úrovniach anglického futbalu. Od roku 1964 zostúpil Palace do tretej úrovne len raz a to na tri sezóny medzi rokmi 1974 a 1977.
                    Počas svojho obdobia v najvyššej súťaži koncom 80. a začiatkom 90. rokov dosiahol klub v sezóne 1990/1991 historicky najvyššie, 3. miesto v lige. <br>
                    Farby na dresoch boli do roku 1973 bordové a modré. Po roku 1973 sa farby na dresoch zmenili na červené a modré zvislé pruhy, ktoré sa nosia dodnes. Palace má dlhotrvajúcu a tvrdú rivalitu s Brighton & Hove Albion a tiež zdieľa silnú rivalitu s ostatnými klubmi z južného Londýna – Millwall a Charlton Athletic.
                </p>
            </div>
            <div class="col-md-4 text-center intro-obr">
                <img src="{{ asset('pics/Crystal-logo.png') }}" alt="crystal palace logo" class="img-fluid rounded">
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
                        #1 Henderson Dean <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #31 Matthews Remi <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #X Moulden Louie <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #30 Turner Matt <img src="{{ asset('pics/united-states.png') }}" alt="usa" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Obrancovia -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Obrancovia</strong></p>
                    <p>
                        #27 Chalobah Trevoh <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #17 Clyne Nathaniel <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #6 Guehi Marc (<strong>C</strong>) <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #4 Holding Rob <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #5 Lacroix Maxence <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #3 Mitchell Tyrick <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #12 Munoz Daniel <img src="{{ asset('pics/colombia.png') }}" alt="kol" class="ikona-vlajky"><br>
                        #34 Riad Chadi <img src="{{ asset('pics/morocco.png') }}" alt="mar" class="ikona-vlajky"><br>
                        #26 Richards Chris <img src="{{ asset('pics/united-states.png') }}" alt="usa" class="ikona-vlajky"><br>
                        #2 Ward Joel <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Stredopoliari -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Stredopoliari</strong></p>
                    <p>
                        #X Devenny Justin <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #28 Doucoure Cheick <img src="{{ asset('pics/mali.png') }}" alt="mal" class="ikona-vlajky"><br>
                        #10 Eze Eberechi <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #19 Hughes Will <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #18 Kamada Daichi <img src="{{ asset('pics/japan.png') }}" alt="jap" class="ikona-vlajky"><br>
                        #58 Kporha Caleb <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #8 Lerma Jefferson <img src="{{ asset('pics/colombia.png') }}" alt="kol" class="ikona-vlajky"><br>
                        #X Rodney Kaden <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #15 Schlupp Jeffrey <img src="{{ asset('pics/ghana.png') }}" alt="gha" class="ikona-vlajky"><br>
                        #20 Wharton Adam <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                    </p>
                </div>
            </div>

            <!-- Útočníci -->
            <div class="col-md-3 mb-3">
                <div class="hraci">
                    <p><strong>Útočníci</strong></p>
                    <p>
                        #64 Agbinone Asher <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #14 Mateta Jean-Philippe <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
                        #9 Nketiah Eddie <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
                        #7 Sarr Ismaila <img src="{{ asset('pics/senegal.png') }}" alt="sen" class="ikona-vlajky"><br>
                        #X Umeh Franco <img src="{{ asset('pics/ireland.png') }}" alt="irs" class="ikona-vlajky"><br>
                    </p>
                    <p><strong>Tréner</strong></p>
                    <p>Glasner Oliver <img src="{{ asset('pics/austria.png') }}" alt="rak" class="ikona-vlajky"></p>
                </div>
            </div>
        </div>

        <!-- Obrázok tímu -->
        <div class="row text-center mt-4">
            <div class="col-12">
                <img src="{{ asset('pics/Crystal-Palace-supiska.jpg') }}" alt="Crystal Palace supiska 2024/25" class="timove-foto"><br>
                <p class="tim-popis">Tímové foto Crystal Palace FC pre sezónu 2024/25</p>
            </div>
        </div>
    </section>

    <section class="stadion container-fluid py-4">
        <div class="row align-items-center mx-2">
            <div class="col-md-6 stadion-txt">
                <h1 class="text-center">Selhurst Park</h1>
                <p>
                    Selhurst Park je domovský štadión futbalového klubu Crystal Palace FC, nachádzajúci sa v oblasti Selhurst v južnom Londýne.
                    Bol otvorený v roku 1924 a od tej doby je považovaný za jeden z tradičných anglických futbalových štadiónov. Kapacita štadióna je približne 25 486 divákov,
                    čo ho radí medzi stredne veľké štadióny v rámci Premier League. <br>
                    Štadión je známy svojou elektrizujúcou atmosférou, najmä vďaka vášnivým priaznivcom Crystal Palace, ktorí na „Holmesdale Road Stand“
                    vytvárajú jedinečnú podporu počas zápasov. Selhurst Park bol viackrát renovovaný a upravovaný, aby vyhovoval moderným požiadavkám a zároveň si zachoval svoj pôvodný charakter. <br>
                    Hoci štadión čelí plánom na modernizáciu a rozšírenie, zachováva si historický vzhľad a autentickú futbalovú atmosféru, ktorú fanúšikovia milujú.
                    Crystal Palace plánuje rozšíriť kapacitu a zlepšiť zariadenia štadióna, aby zodpovedal vyššej kvalite a komfortu pre priaznivcov klubu i návštevníkov. <br>
                    Štadión zostal nedokončený až do roku 1969. Vtedy ale Crystal Palace po prvýkrát postúpil do Division One (vtedy najvyššej úrovne anglického futbalu). Bola postavená tribúna Arthura Waita,
                    pomenovaná po dlhoročnom predsedovi klubu, ktorý bol remeselnícky stavbár a často ho bolo vidieť, ako sám na štadióne pracoval. <br>
                    V roku 2018 klub oznámil rekonštrukciu Selhurst Parku v hodnote 100 miliónov libier, aby sa kvalitou priblížil modernému štadiónu akú si zaslúži klub hrajúci v Premier League.
                    Selhurst Park sa taktiež objavil a používal v seriáli Apple TV+ Ted Lasso ako Nelson Road, fiktívny domáci štadión AFC Richmond. <br>
                    Rekordná návštevnosť v Selhurst Parku bola zaznamenaná v roku 1979, keď 51 482 divákov videlo Crystal Palace poraziť Burnley 2:0. Crystal Palace vtedy vyhral majstrovský titul Football League Second Division.
                </p>
            </div>
            <div class="col-md-6 stadion-obr">
                <img src="{{ asset('pics/Selhurst-Park.JPG') }}" alt="Selhurst Park" class="img-fluid rounded">
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
                        <td>Oliver Glasner</td>
                        <td>Hlavný Tréner</td>
                    </tr>
                    <tr>
                        <td>Ronald Brunmayr</td>
                        <td>Asistent Trénera</td>
                    </tr>
                    <tr>
                        <td>Paddy McCarthy</td>
                        <td>Asistent Trénera</td>
                    </tr>
                    <tr>
                        <td>Emanuel Pogatetz</td>
                        <td>Asistent Trénera</td>
                    </tr>
                    <tr>
                        <td>Michael Angerschmidt</td>
                        <td>Tréner Štandartných situácií</td>
                    </tr>
                    <tr>
                        <td>Dean Kiely</td>
                        <td>Tréner Brankárov</td>
                    </tr>
                    <tr>
                        <td>Darren Powell</td>
                        <td>Tréner Akadémie</td>
                    </tr>
                    <tr>
                        <td>Imtiaz Ahmad</td>
                        <td>Hlavný Lekár</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 tabulka-kontainer">
                <h1 class="text-center">Manažment Crystal Palace FC</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Meno, Priezvisko</th>
                        <th>Pozícia/Špecializácia</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John Textor</td>
                        <td>Vlastník</td>
                    </tr>
                    <tr>
                        <td>Josh Harris</td>
                        <td>Spoluvlastník</td>
                    </tr>
                    <tr>
                        <td>Noah Abrams</td>
                        <td>Výlučný Podpredseda</td>
                    </tr>
                    <tr>
                        <td>Dougie Freedman</td>
                        <td>Riaditeľ Klubu</td>
                    </tr>
                    <tr>
                        <td>Christine Dowdeswell</td>
                        <td>Klubový sekretár</td>
                    </tr>
                    <tr>
                        <td>Dougie Freedman</td>
                        <td>Športový riaditeľ</td>
                    </tr>
                    <tr>
                        <td>Phil Alexander</td>
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
                <div class="uspechy-text col-lg-8 mb-4">
                    <div class="p-3">
                        <h1>Tituly Crystal Palace FC</h1>
                        <h2>Domáce poháre</h2>
                        <ul>
                            <li>EFL Championship: 2 (1978-79, 1993-94)</li>
                            <li>EFL League One: 1 (1920-21)</li>
                        </ul>
                        <h2>Medzinárodné poháre</h2>
                        <p>
                            Crystal Palace FC je považovaný za "priemerný" klub v anglickej Premier League, to znamená, že väčšinu sezón skončili v strede alebo spodnej polovici tabuľky. <br>
                            Nepodarilo sa mi počas histórie kvalifikovvať do žiadnych európskych súťaží ako aj výhrať najvyššiu domácu súťaž. <br>
                            Aj napriek tomu, že klub nikdy nehral Európske súťaže, fanúšikovia Crystal Palace patria k najlepším v Anglickom futbale.
                        </p>
                    </div>
                </div>
                <!-- Obrázková časť -->
                <div class="uspechy-obr col-lg-4">
                    <div class="text-center mb-2">
                        <img src="{{ asset('pics/Palace-trofej.jpg') }}" alt="Palace trofej" class="img-fluid rounded">
                    </div>
                    <div class="uspechy-obr-popis p-2 text-center">
                        <p>Crystal Palace oslavuje s trofejou EFL Championship</p>
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
                        <h1 class="text-center">10 Najlepčích hráčov histórie Crystal Palace</h1>
                        <p> 1. - Wilfried Zaha - Ľavé krídlo (2014-2023) 458 zápasov, 90 gólov, 52 asistencií, 0 trofejí<br>
                            2. - Johnny Byrne - Hrotový útočník (1956-1962, 1968) 132 zápasov, 56 gólov, 14 asistencií, 0 trofejí<br>
                            3. - Julian Speroni - Brankár (2004-2019) 405 zápasov, 112 čistých kont, 0 trofejí<br>
                            4. - Mark Bright - Podhrotový útočník (1986-1992) 121 zápasov, 43 gólov, 1 asistencií, 0 trofejí<br>
                            5. - John Jackson - Brankár (1964-1973) 169 zápasov, 1 gól, 43 čístých kont, 0 trofejí<br>
                            6. - Andy Johnson - Ofenzívny záložník (2002-2006, 2015) 158 zápasov, 83 gólov, 7 asistencií, 0 trofejí<br>
                            7. - Vince Hilaire - Stredný záložník (1977-1984) 83 zápasov, 10 gólov, 1 asistencií, 0 trofejí<br>
                            8. - Ian Wright - Hrotový útočník (1985-1991) 78 zápasov, 30 gólov, 1 asistencií, 0 trofejí<br>
                            9. - Jim Cannon - Stredný obránca (1971-1988) 399 zápasov, 6 gólov, 1 asistencií, 0 trofejí<br>
                            10. - Geoff Thomas - Stredný záložník (1988-1993) 141 zápasov, 16 gólov, 2 asistencií, 0 trofejí<br>
                            <br>
                            <strong>Zvolené hodnotenie aj poradie hráčov je čisto názorom admina stránky.</strong></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center mb-2 ">
                        <img src="{{ asset('pics/Zaha.jpg') }}" alt="Top hrac" class="trofeje-obr">
                    </div>
                    <div class="uspechy-obr-popis p-2 text-center">
                        <p>Wilfried Zaha, symbol modernej éry Crystal Palace</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
