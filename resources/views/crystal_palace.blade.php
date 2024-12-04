<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Crystal Palace - Futbal v Londýne</title>
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
    <h1>Crystal Palace</h1>
    <p>Crystal Palace FC je anglický futbalový klub so sídlom v štvrti Selhurst, na juhu Londýna.
      Bol založený v roku 1905 a svoje domáce zápasy hráva na štadióne Selhurst Park s kapacitou približne 25 000 divákov. Klub, prezývaný "The Eagles" alebo "Orli,"
      tradične hrá v modro-červených farbách. Crystal Palace pôsobí v Premier League, kde súťaží s najlepšími tímami Anglicka, hoci história klubu je poznamenaná častým striedaním medzi nižšími ligami a najvyššou súťažou.
      Klub sa stal známym svojou húževnatosťou a pevnými fanúšikovskými základmi, pričom jeden z jeho najväčších úspechov bol dosiahnutý v roku 1990, keď sa dostal do finále FA Cupu. V posledných rokoch sa Crystal Palace stabilizoval v Premier League,
      vďaka čomu si získal rešpekt a stabilnú pozíciu medzi elitnými anglickými klubmi. Ich rivalita s klubmi ako Brighton & Hove Albion patrí medzi najviac vyhrotené a zároveň zaujímavé súboje v anglickom futbale. <br>
      Klub v roku 1920 vstúpil do futbalovej ligy a počas svojej histórie klub primárne hrá v dvoch najvyšších úrovniach anglického futbalu. Od roku 1964 zostúpil Palace do tretej úrovne len raz a to na tri sezóny medzi rokmi 1974 a 1977.
      Počas svojho obdobia v najvyššej súťaži koncom 80. a začiatkom 90. rokov dosiahol klub v sezóne 1990/1991 historicky najvyššie, 3. miesto v lige. <br>
      Farby na dresoch boli do roku 1973 bordové a modré. Po roku 1973 sa farby na dresoch zmenili na červené a modré zvislé pruhy, ktoré sa nosia dodnes. Palace má dlhotrvajúcu a tvrdú rivalitu s Brighton & Hove Albion a tiež zdieľa silnú rivalitu s ostatnými klubmi z južného Londýna  – Millwall a Charlton Athletic.
    </p>
    </div>
    <div class="intro-obr">
      <img src="{{ asset('pics/Crystal-logo.png') }}" alt="crystal palace logo">
    </div>
  </section>
  <section class="supiska">
    <div class="supiska-kontent">
      <div class="supiska-txt">
        <h1>Súpiska pre sezónu 2024/2025</h1>
        <div class="brankari">
          <p><strong>Brankári</strong></p>
          <p> #1  Henderson Dean <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #31 Matthews Remi <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #X  Moulden Louie <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #30 Turner Matt <img src="{{ asset('pics/united-states.png') }}" alt="usa" class="ikona-vlajky"> <br> </p>
        </div>
        <div class="obrancovia">
          <p><strong>Obrancovia</strong></p>
          <p> #27 Chalobah Trevoh <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #17 Clyne Nathaniel <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #6  Guehi Marc (<strong>C</strong>) <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #4  Holding Rob <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #5  Lacroix Maxence <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"> <br>
            #3  Mitchell Tyrick <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #12 Munoz Daniel <img src="{{ asset('pics/colombia.png') }}" alt="kol" class="ikona-vlajky"><br>
            #34 Riad Chadi <img src="{{ asset('pics/morocco.png') }}" alt="mar" class="ikona-vlajky"><br>
            #26 Richards Chris <img src="{{ asset('pics/united-states.png') }}" alt="usa" class="ikona-vlajky"> <br>
            #2  Ward Joel <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br></p>
        </div>
        <div class="stredopoliari">
          <p><strong>Stredopoliari</strong></p>
          <p> #X Devenny Justin <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
            #28 Doucoure Cheick <img src="{{ asset('pics/mali.png') }}" alt="mal" class="ikona-vlajky"> <br>
            #10 Eze Eberechi <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #19 Hughes Will <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
            #18 Kamada Daichi <img src="{{ asset('pics/japan.png') }}" alt="jap" class="ikona-vlajky"><br>
            #58 Kporha Caleb <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
            #8  Lerma Jefferson <img src="{{ asset('pics/colombia.png') }}" alt="kol" class="ikona-vlajky"><br>
            #X  Rodney Kaden <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"> <br>
            #15 Schlupp Jeffrey <img src="{{ asset('pics/ghana.png') }}" alt="gha" class="ikona-vlajky"><br>
            #20 Wharton Adam <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br></p>
        </div>
        <div class="utocnici">
          <p><strong>Útočníci</strong></p>
          <p> #64 Agbinone Asher <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #14 Mateta Jean-Philippe <img src="{{ asset('pics/france.png') }}" alt="fra" class="ikona-vlajky"><br>
            #9  Nketiah Eddie <img src="{{ asset('pics/england.png') }}" alt="ang" class="ikona-vlajky"><br>
            #7  Sarr Ismaila <img src="{{ asset('pics/senegal.png') }}" alt="sen" class="ikona-vlajky"> <br>
            #X  Umeh Franco <img src="{{ asset('pics/ireland.png') }}" alt="irs" class="ikona-vlajky"><br></p>
          <p><strong>Tréner</strong></p>
          <p>Glasner Oliver <img src="{{ asset('pics/austria.png') }}" alt="rak" class="ikona-vlajky"></p>
        </div>
      </div>
      <div class="supiska-obr">
        <img src="{{ asset('pics/Crystal-Palace-supiska.jpg') }}" alt="Crystal Palace supiska 2024/25">
        <p>Tímové foto Crystal Palace FC pre sezónu 2024/25</p>
      </div>
    </div>
  </section>
  <section class="stadion">
    <div class="stadion-kontent">
      <div class="stadion-txt">
        <h1>Selhurst Park</h1>
        <p> Selhurst Park je domovský štadión futbalového klubu Crystal Palace FC, nachádzajúci sa v oblasti Selhurst v južnom Londýne.
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
      <div class="stadion-obr">
        <img src="{{ asset('pics/Selhurst-Park.JPG') }}" alt="Selhurst Park">
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
      </table>
    </div>
    <div class="tabulka-kontainer">
      <h1>Manažment Crystal Palace FC</h1>
      <table>
        <tr>
          <th>Meno, Priezvisko</th>
          <th>Pozícia/Špecializácia</th>
        </tr>
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
      </table>
    </div>
  </section>
  <section class="uspechy">
    <div class="trofeje">
      <h1>Tituly Crystal Palace FC</h1>
      <h2>Domáce poháre</h2>
      <ul>
        <li>EFL Championship: 2 (1978-79, 1993-94)</li>
        <li>EFL League One: 1 (1920-21)</li>
      </ul>
      <h2>Medzinárodné poháre</h2>
        <p>Crystal Palace FC je považovaný za "priemerný" klub v anglickej Premier League, to znamená, že väčšinu sezón skončili v strede alebo spodnej polovici tabuľky. <br>
          Nepodarilo sa mi počas histórie kvalifikovvať do žiadnych európskych súťaží ako aj výhrať najvyššiu domácu súťaž. <br>
          Aj napriek tomu, že klub nikdy nehral Európske súťaže, fanúšikovia Crystal Palace patria k najlepším v Anglickom futbale.</p>
    </div>
    <div class="trofeje-obr">
      <img src="{{ asset('pics/Palace-trofej.jpg') }}" alt="Palace trofej">
      <p>Crystal Palace oslavuje s trofejou EFL Championship</p>
    </div>
  </section>
</div>
</body>
</html>
