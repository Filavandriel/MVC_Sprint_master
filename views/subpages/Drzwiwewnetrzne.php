<!DOCTYPE html>
<html lang="pl">

    <head>
        <meta charset="UTF-8">
        <title>Sprint</title>
        <meta name="description" content="Strona Firmy">
        <meta name="author" content="...">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Barlow:300,400|Montserrat:600,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>style.css">
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>styleoferta.css">
    </head>

<body>
    <!-- Navigation -->
    <!-- Navigation -->    
    <div class="container-fluid-lg">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top slideInDown">
            <a class="navbar-brand" href="<?php echo ROOT_URL;?>">
              <img src="<?php echo IMG_PATH; ?>loggoo.png" height="35"/>  </a>
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">  <span class="navbar-toggler-icon"></span>
                </button>
           <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo ROOT_URL; ?>"><i class="fas fa-home"></i> <span class="nav-text">Home</span></a>
                    </li>
                    <li class="nav-item dropdown dropdown-group1">
                        <a class="nav-link dropdown-toggle dropdown-toggle1" href="#" id="okna-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-file"></i> <span class="nav-text">Oferta</span></a>
                        <div class="dropdown-menu dropdown-menu1" aria-labelledby="okna-link">
                            <a class="dropdown-item" href="<?php echo ROOT_URL ?>subpages/Drzwizewnetrzne">Drzwi zewnętrzne</a>
                            <a class="dropdown-item" href="<?php echo ROOT_URL ?>subpages/Drzwiwewnetrzne">Drzwi wewnętrzne</a>
                            <a class="dropdown-item" href="<?php echo ROOT_URL ?>subpages/Oknapcv">Okna PCV</a>
                            <a class="dropdown-item" href="<?php echo ROOT_URL ?>subpages/Oknaaluminiowe">Okna Aluminiowe</a>
                            <a class="dropdown-item" href="<?php echo ROOT_URL ?>subpages/Bramy">Bramy</a>
                            <a class="dropdown-item" href="<?php echo ROOT_URL ?>subpages/Rolety">Rolety</a>
                            <a class="dropdown-item" href="<?php echo ROOT_URL ?>subpages/Markizy">Markizy</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL ?>pages/galeria"><i class="fas fa-images"></i><span class="nav-text">Galeria</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL ?>pages/kontakt"><i class="fas fa-phone"></i> <span class="nav-text">Kontakt</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL ?>pages/blog"><i class="far fa-edit"></i><span class="nav-text"> Smart-Okna</span></a>
                    </li>
                    <li class="nav-item dropdown dropdown-group2">
                        <a class="nav-link dropdown-toggle dropdown-toggle2" href="#" id="okna-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-building"></i> <span class="nav-text">Wizualizacja</span></a>
                        <div class="dropdown-menu dropdown-menu2" aria-labelledby="okna-link">
                            <a class="dropdown-item" href="<?php echo ROOT_URL ?>wizualizacja/wizualizacjadrzwi"><i class="fas fa-arrow-right"></i>Drzwi</a>
                            <a class="dropdown-item" href="<?php echo ROOT_URL ?>wizualizacja/wizualizacjaokno"><i class="fas fa-arrow-right"></i>Okno</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
        <!--fluid-container-->

        <div class="container fadeIn">

             <div class="row justify-iitems-center" style="margin-top:6%;">
       
                <div class="col-12">
               
                      <h1 class="text-right" >Drzwi Wewnętrzne</h1>
                </div>
           </div>
               <div class="row" style="margin-top:2%;">
            <div class="col-12">
                <a href="http://kmt.com.pl/pl/">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/logo-DRE_nowe_kolory.jpg" alt="KMT" height="50px"> </a>
                <a href="http://wiked.pl/drzwi.php">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/Pol-skone.png" alt="Wikęd" height="50px"> </a>
                <a href="http://www.delta.net.pl/">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/centurion.png" alt="Delta" height="50px"> </a>
                 <a href="http://kmt.com.pl/pl/">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/Invado.png" alt="KMT" height="50px"> </a>
                <a href="http://wiked.pl/drzwi.php">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/Intenso.png" alt="Wikęd" height="50px"> </a>
                <a href="http://www.delta.net.pl/">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/ERKADO.PNG" alt="Delta" height="50px"> </a>
              
        </div>
            </div>

             <div class="row justify-content-center">
                <div class="col-xl-10 col-md-12">

            <div id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="card">
                <div class="card-header" role="tab" id="headingone">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="true" aria controls="collapseone">
          <h2>Dre</h2>
        </a>
                    </h5>
                </div>
                <div id="collapseone" class="collapse" role="tabpanel" aria-labelledby="headingone">
                    <div class="card-block">
                        <p class="p1">Proponujemy Państwu kolekcję drzwi wewnętrznych firmy DRE, która cieszy się uznaniem wśrod producentów i kupujących.</p>

                        <p class="p1">Skrzydło o grubość 54 mm, wykonane jest wysokiej jakości blachy stalowej  ocynkowanej pokrytej laminatem drewnopodobnym odpornym na warunki atmosferyczne. Wypełnienie stanowi płyta polistyrenu spienionego. Wyposażone są standardowo w zamek podstawowy oraz zamek dodatkowy dostosowane do wkładki patentowej,   trzy zawiasy wzmocnione oraz trzy bolce antywyważeniowe.</p>
                        <hr>

                        <p class="p1">Drzwi przeznaczone do mieszkań w budownictwie wielorodzinnym. Zapewniają bezpieczeństwo użytkowania dzięki wykorzystaniu bolców antywyważeniowych i systemu wielopunktowych zamków.</p>
                        <hr>

                        <p class="p1">Drzwi przeznaczone do stosowania w budownictwie wielorodzinnym oraz jednorodzinnym. Bezpieczeństwo użytkowania zapewniają dzięki zastosowaniu systemu wielopunktowych zamków oraz bolców antywyważeniowych, odporne na wpływ czynników atmosferycznych. Posiadają dobre wskaźniki termoizolacyjne dzięki zastosowaniu odpowiedniego wypełnienia oraz systemu podwójnych uszczelek. Grubość skrzydła - 54 mm lub 75.
                        </p>
                          <center>
                        <img src="<?php echo IMG_PATH; ?>produkty/w1.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w2.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w3.jpg" height="250px" class="produkt">
                       </center>
                    </div>
                </div>
            </div>
             

                <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria controls="collapseTwo">
          <h2>Pol-Skone</h2>
        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-block">
                      <p class="p1">POL-SKONE Sp. z o.o. jest producentem drzwi i okien drewnianych. Powstała w 1990 roku i przez ponad 28 lat swojej działalności  stała się jedną z największych i najbardziej dynamicznie rozwijających się firm branży stolarki budowlanej.</p>
                        <hr>
                        <p class="p1">Obecnie POL-SKONE dysponuje czterema nowoczesnymi, w pełni skomputeryzowanymi zakładami produkcyjnymi, dwa z nich znajdują się w Lublinie, pozostałe w Biłgoraju i Niemcach. Zatrudnia prawie 1000 wysoko wykwalifikowanych pracowników. Produkuje swoje wyroby od podstaw z najlepszego gatunkowo drewna pochodzącego wyłącznie z polskich lasów.</p>
                        <hr>

                        <p class="p1">Ofertę firmy stanowią: drzwi wewnętrzne (malowane, okleinowane, laminowane i fornirowane); drzwi wejściowe, drzwi techniczne (dźwiękoizolacyjne i przeciwpożarowe), drzwi zewnętrzne, drewniane okna, ościeżnice, listwy drzwiowe i przypodłogowe  a także okiennice oraz futryny.</p>
                        <hr>

                        <p class="p1">Celem firmy jest wytwarzanie wyrobów o jakości spełniającej oczekiwania Klientów oraz utrwalenie opinii zaufanego partnera. W roku 2000 firma uzyskała w placówce certyfikującej Rheinisch-Westfälischer TÜV e.V. certyfikat na System Zapewnienia Jakości zgodny z normą ISO 9001, zaś w 2010 roku przeszła pozytywnie audyt na zgodność z normą PN EN ISO 9001:2009.
                        </p>
                          <center>
                        <img src="<?php echo IMG_PATH; ?>produkty/w4.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w5.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w6.jpg" height="250px" class="produkt">
                       </center>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h2>Centurion</h2>
        </a>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="card-block">
                       <p class="p1">Firma powstała w 2002 roku w specjalnej strefie ekonomicznej EUROPARK MIELEC, obszar przemysłowy SANOK, jako kontynuacja działającej od 1998 roku firmy produkcyjnej Centurion Sp. z o.o. </p>
                       <hr>

                        <p class="p1">Od początku swojej działalności przedsiębiorstwo specjalizuje się w produkcji wewnątrzlokalowych skrzydeł drzwiowych i ościeżnic. Czerpiąc z doświadczeń firmy i obowiązujących standardów w zakresie obsługi klientów, marketingu, sprzedaży i serwisu,  Centurion-R sukcesywnie rozszerza swój asortyment i zdobywa uznanie  klientów.</p>
                        <hr>

                        <p class="p1">Potrzeby odbiorców są motorem ciągłego rozwoju naszej firmy.  Zwiększanie zainteresowania drzwiami Centurion-R, poszerzanie rynku zbytu oraz oferowanego asortymentu pozwalają na dynamiczny rozwój firmy. W lipcu 2005 roku rozpoczął produkcję Zakład nr 2. Inwestycja była realizowana w ramach Sektorowego Programu Operacyjnego „Wzrost Konkurencyjności Przedsiębiorstw 2004-2006” i współfinansowana przez Unię Europejską ze środków Europejskiego Funduszu Rozwoju Regionalnego.</p>
                          <center>
                        <img src="<?php echo IMG_PATH; ?>produkty/w7.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w8.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w9.jpg" height="250px" class="produkt">
                       </center>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="headingfour">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
          <h2>Invado</h2>
        </a>
                    </h5>
                </div>
                <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
                    <div class="card-block">
                     <p class="p1">Proponujemy Państwu kolekcję drzwi wewnętrznych firmy INVADO. Drzwi z kolekcji NATURA wykończone są uszlachetnioną okleiną naturalną charakteryzującą się elegancja i doskonałym wyglądem. Natomiast drzwi wykończone  nowoczesnym materiałem DRE-CELL  DECOR mają wysoką odporność na ścieranie, a ich  estetyka porównywalna  jest do oklein  naturalnych.</p>

                        <p class="p1">Skrzydło o grubość 54 mm, wykonane jest wysokiej jakości blachy stalowej  ocynkowanej pokrytej laminatem drewnopodobnym odpornym na warunki atmosferyczne. Wypełnienie stanowi płyta polistyrenu spienionego. Wyposażone są standardowo w zamek podstawowy oraz zamek dodatkowy dostosowane do wkładki patentowej,   trzy zawiasy wzmocnione oraz trzy bolce antywyważeniowe.</p>
                        <hr>

                        <p class="p1">Drzwi przeznaczone do mieszkań w budownictwie wielorodzinnym. Zapewniają bezpieczeństwo użytkowania dzięki wykorzystaniu bolców antywyważeniowych i systemu wielopunktowych zamków.</p>
                        <hr>

                        <p class="p1">Drzwi przeznaczone do stosowania w budownictwie wielorodzinnym oraz jednorodzinnym. Bezpieczeństwo użytkowania zapewniają dzięki zastosowaniu systemu wielopunktowych zamków oraz bolców antywyważeniowych, odporne na wpływ czynników atmosferycznych. Posiadają dobre wskaźniki termoizolacyjne dzięki zastosowaniu odpowiedniego wypełnienia oraz systemu podwójnych uszczelek. Grubość skrzydła - 54 mm lub 75.
                        </p>
                          <center>
                        <img src="<?php echo IMG_PATH; ?>produkty/w10.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w11.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w12.jpg" height="250px" class="produkt">
                       </center>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="headingfive">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
          <h2>Intenso</h2>
        </a>
                    </h5>
                </div>
                <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingfive">
                    <div class="card-block">
                         <p class="p1">W stałej sprzedaży mamy drzwi wewnętrzne ramowe  i płytowe z firmy Intenso, które stanowią wspaniałe i atrakcyjne cenowo rozwiązanie do nowoczesnych domów i  mieszkań. Szeroki wybór modeli umożliwia stworzenie bardzo eleganckiego i przytulnego  wnętrza. Szyby matowe  i nowoczesna  kolorystyka bez żadnych dopłat, krótki termin  realizacji zleceń.</p>

                        <p class="p1">Skrzydło o grubość 54 mm, wykonane jest wysokiej jakości blachy stalowej  ocynkowanej pokrytej laminatem drewnopodobnym odpornym na warunki atmosferyczne. Wypełnienie stanowi płyta polistyrenu spienionego. Wyposażone są standardowo w zamek podstawowy oraz zamek dodatkowy dostosowane do wkładki patentowej,   trzy zawiasy wzmocnione oraz trzy bolce antywyważeniowe.</p>
                        <hr>

                        <p class="p1">Drzwi przeznaczone do mieszkań w budownictwie wielorodzinnym. Zapewniają bezpieczeństwo użytkowania dzięki wykorzystaniu bolców antywyważeniowych i systemu wielopunktowych zamków.</p>
                        <hr>

                        <p class="p1">Drzwi przeznaczone do stosowania w budownictwie wielorodzinnym oraz jednorodzinnym. Bezpieczeństwo użytkowania zapewniają dzięki zastosowaniu systemu wielopunktowych zamków oraz bolców antywyważeniowych, odporne na wpływ czynników atmosferycznych. Posiadają dobre wskaźniki termoizolacyjne dzięki zastosowaniu odpowiedniego wypełnienia oraz systemu podwójnych uszczelek. Grubość skrzydła - 54 mm lub 75.
                        </p>
                          <center>
                        <img src="<?php echo IMG_PATH; ?>produkty/w13.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w14.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w15.jpg" height="250px" class="produkt">
                       </center>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="headingsix">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
          <h2>Erkado</h2>
        </a>
                    </h5>
                </div>
                <div id="collapsesix" class="collapse" role="tabpanel" aria-labelledby="headingsix">
                    <div class="card-block">
                      <p class="p1">ERKADO to przykład wyjątkowego sukcesu firmy rodzinnej na rynku globalnym. Odważny i zdecydowany rozwój potencjału produkcyjnego oraz wprowadzanie nowych kolekcji sprawiają, że dziś coraz częściej nasze drzwi trafiają do Twojego domu.</p>
                        <hr>
                        <p class="p1">ERKADO to nazwa handlowa, która od 2010 roku obejmuje działalność detaliczną, hurtową i eksportową w zakresie produkcji i sprzedaży drzwi wewnętrznych, drzwi zewnętrznych oraz ościeżnic. Otwarcie nowych hal produkcyjnych (ponad 8.000 m2) oraz bardzo dynamiczny rozwój marki ERKADO sprawił iż wraz z Jubileuszem 35.lecia istnienia Zakładu Stolarskiego Zbigniew Kozłowski dołączyliśmy do grona liderów w produkcji drzwi. Innowacyjność, elastyczność technologiczna oraz stawianie nowych rynkowych wyzwań pozwalają cieszyć się produktami o wysokiej jakości za rozsądną cenę.</p>
                        <hr>

                        <p class="p1">Zakład powstał w 1976 roku w Chwałowicach, w województwie podkarpackim. Jego założycielem jest Zbigniew Kozłowski – mistrz stolarstwa, który swoje pierwsze nauki rzemieślnicze pobierał od swojego ojca, również stolarza. Dzięki temu marka ERKADO opiera się nie tylko na ponad 30. letnim doświadczeniu, ale również na ugruntowanej tradycji rodzinnej.</p>
                          <center>
                        <img src="<?php echo IMG_PATH; ?>produkty/w16.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w17.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/w18.jpg" height="250px" class="produkt">
                       </center>
                    </div>
                </div>
            </div>
                </div>
            </div>
            </div>
            </div>
            <div class="bgdown"></div>
             <img class="bgcorner" src="<?php echo IMG_PATH; ?>plama2.png"/>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-success btn-modal" data-toggle="modal" data-target="#wizytaModal">
             Umów wizytę!
            </button>
            <div class="social">
                <ul>
                    <li class="social-fb"><a href="#"><span class="social-text">Facebook</span><i class="social-icon fab fa-facebook-square"></i></a></li>
                    <li class="social-gp"><a href="#"><span class="social-text">Google +</span><i class="social-icon fab fa-google-plus"></i></a></li>
                    <li class="social-ig"><a href="#"><span class="social-text">Instagram</span><i class="social-icon fab fa-instagram"></i></a></li>
                </ul>
            </div>
        
         <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-success btn-modal" data-toggle="modal" data-target="#wizytaModal">
                 Umów wizytę!
                </button>
                    <div class="social">
                        <ul>
                            <li class="social-fb"><a href="#"><span class="social-text">Facebook</span><i class="social-icon fab fa-facebook-square"></i></a></li>
                            <li class="social-gp"><a href="#"><span class="social-text">Google +</span><i class="social-icon fab fa-google-plus"></i></a></li>
                            <li class="social-ig"><a href="#"><span class="social-text">Instagram</span><i class="social-icon fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
           <!-- Modal Wizyty -->
    <div class="modal fade" id="wizytaModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">

                <!-- Modal Wizyty Header -->
                <div class="modal-head">
                      <div class="form-style-10">
                          <h2>Umów się na wizyte!</h2>
                    </div>
                    
                </div>
                <!-- Modal body -->
          
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <p class="mt-2 text-muted text-center">Proszę wypełnić poniższy formularz w celu podania niezbędnych danych do wizyty: </p>
                     <form action="./php/mail.php" method="post" enctype="text/plain" id="wizytaForm">
                        <div class="row">
                            <div class="col-sm-12 modal-form text-center ">
                               <span class="modal-subtitles">- Imię i nazwisko -</span><br>
                                <input type="text" id="imie" name="imie" placeholder="Imię" requiered="required">
                                <input onchange="formValidate()" type="text" id="nazwisko" name="nazwisko" placeholder="Nazwisko" requiered="required"><br>
                                <span class="modal-subtitles">- Dane kontaktowe -</span><br>
                                 <input onchange="formValidate()" type="text" id="email" name="email" placeholder="Email" requiered="required">
                                <input onchange="formValidate()" type="text" id="tele" name="tele" placeholder="Numer telefonu" requiered="required"><br>
                                <span class="modal-subtitles">- Adres -</span><br>
                                <input onchange="formValidate()" type="text" id="ulica" name="ulica" placeholder="Ulica" requiered="required">
                                <input onchange="formValidate()" type="text" id="miasto" name="miasto" placeholder="Miasto" requiered="required"><br>
                                <span class="modal-subtitles">- Wstępny kosztorys -</span><br>
                                <input onchange="formValidate()" type="number" id="iloscd" name="ilosc" placeholder="Ilość drzwi" requiered="required">
                                <input onchange="formValidate()" type="number" id="ilosco" name="ilosc" placeholder="Ilość okien" requiered="required"><br>
                                <span class="modal-subtitles">- Data wizyty -</span><br>
                                <input onchange="formValidate()" type="date" id="date" name="date" requiered="required"><br>
                                <span class="modal-subtitles">- Dodatkowe informacje -</span><br>
                                <textarea onchange="formValidate()" name="uwagi" id="uwagi" placeholder="Wiadomość dla usługodawcy (wymiary, informacje o dodatkowych elementach tj. klamki)" requiered="required"></textarea>
                            </div>
                        </div>
                        <p class="mt-4 text-muted text-center">Data wizyty nie może być wcześniejsza niż 3 dni od dnia zgłoszenia.</p>
                        <p class="text-muted text-center">Wizyta zostanie potwierdzona telefonicznie dzień przed wizytą</p>
                    </form>
                </div>
                     
                <!-- Modal Wizyty footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="mailsendBtn" >Wyślij</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Anuluj</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Potwierdzenia -->
    <div class="modal fade" id="successModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content ">
                <!-- Modal Potwierdzenia body -->
                <div class="modal-body">
                    <p>Zgłoszenie zostało wysłane!</p>
                    <p>Zostanie ono potwierdzone telefonicznie lub mailowo w czasie nie dłuższym niż 2 dni.</p>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

            <!-- /Modal Potwierdzenia -->
        </div>
 
 <!-- skrypty -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH ?>app.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH ?>popper.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH ?>bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

</body>

</html>
