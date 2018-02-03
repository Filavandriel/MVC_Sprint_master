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
               
                      <h1 class="text-right">Markizy, Roletki...</h1>
                </div>
           </div>
       
           <div class="row">
            <div class="col-9 offset-1">
                <a href="http://kmt.com.pl/pl/">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/Portos.png" alt="KMT" height="75px"> </a>
                <a href="http://wiked.pl/drzwi.php">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/freyzal.png" alt="Wikęd" height="100px"> </a>
                <a href="http://www.delta.net.pl/">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/zalmet.jpg" alt="Delta" height="50px"> </a>
              
            </div>
          </div>

             <div class="row justify-content-center">
                <div class="col-xl-10 col-md-12">


        <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="headingone">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="true" aria controls="collapseone">
                            <h2>Markizy</h2>
                        </a>
                    </h5>
                </div>
                <div id="collapseone" class="collapse" role="tabpanel" aria-labelledby="headingone">
                    <div class="card-block">
                        <p class="p1">Markizy Balkonowe <br> Italia mocowana do balustrad Są one przeznaczone do zaciemniania powierzchni balkonowych, dlatego idealnie nadają się dla mieszkańców zarówno domów, jak i mieszkań w blokach. Zapewniają ochronę nie tylko przed słońcem, ale także opadami i wiatrem. Markizy balkonowe pozwalają także na zachowanie pewnej dozy intymności.</p>
                            
                           <p class="p1"> Cechy charakterystyczne:<br>
                                - lekka i mocna konstrukcja, odporna na działanie szkodliwych czynników zewnętrznych,<br>
                                - możliwość zamontowania ręcznego bądź automatycznego napędu,<br>
                                - stabilna konstrukcja nośna,<br>
                                - regulowane ramię wysięgu,<br>
                                - estetyczny wygląd daje możliwość wyboru z kilkudziesięciu wzorów,<br></p>
                        <hr>

                        <p class="p1">Markizy Tarasowe <br> Silver Plus przeznaczona do Tarasu Dobrą alternatywą dla tradycyjnych, stałych form zadaszenia są markizy tarasowe. Odznaczają się większą funkcjonalnością niż konwencjonalne rozwiązania. Ich konstrukcja umożliwia regulowanie stopnia nachylenia zadaszenia, jak też wielkość osłoniętej powierzchni. W zależności od indywidualnych preferencji może być rozsuwana w pełni bądź tylko częściowo.

                        <p class="p1">
                            Cechy charakterystyczne:<br>
                                - mocna konstrukcja,<br>
                                - regulowane ramiona są zamocowane na aluminiowych uchwytach wykonanych techniką odlewu ciśnieniowego,<br>
                                - stelaż odporny na działanie szkodliwych czynników atmosferycznych, dzięki zastosowaniumalowania proszkowego lakierem,<br>
                                - możliwość zamontowania ręcznego bądź automatycznego napędu,<br>
                                - równomierne napięcie tkaniny,<br>
                                - prosty montaż i łatwa obsługa,<br>
                                - regulowane ramię wysięgu,<br>
                                - estetyczny wygląd,<br>
                                - możliwość wyboru z kilkudziesięciu wzorów.</p>
                      
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria controls="collapseTwo">
                            <h2>Roletki</h2>
                        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-block">
                        <p class="p1">Proponujemy Państwu kolekcję drzwi wewnętrznych firmy Alu-door. Drzwi z kolekcji NATURA wykończone są uszlachetnioną okleiną naturalną charakteryzującą się elegancja i doskonałym wyglądem. Natomiast drzwi wykończone nowoczesnym materiałem DRE-CELL DECOR mają wysoką odporność na ścieranie, a ich estetyka porównywalna jest do oklein naturalnych.</p>

                        <p class="p1">Skrzydło o grubość 54 mm, wykonane jest wysokiej jakości blachy stalowej ocynkowanej pokrytej laminatem drewnopodobnym odpornym na warunki atmosferyczne. Wypełnienie stanowi płyta polistyrenu spienionego. Wyposażone są standardowo w zamek podstawowy oraz zamek dodatkowy dostosowane do wkładki patentowej, trzy zawiasy wzmocnione oraz trzy bolce antywyważeniowe.</p>
                        <hr>

                        <p class="p1">Drzwi przeznaczone do mieszkań w budownictwie wielorodzinnym. Zapewniają bezpieczeństwo użytkowania dzięki wykorzystaniu bolców antywyważeniowych i systemu wielopunktowych zamków.</p>
                        <hr>

                        <p class="p1">Drzwi przeznaczone do stosowania w budownictwie wielorodzinnym oraz jednorodzinnym. Bezpieczeństwo użytkowania zapewniają dzięki zastosowaniu systemu wielopunktowych zamków oraz bolców antywyważeniowych, odporne na wpływ czynników atmosferycznych. Posiadają dobre wskaźniki termoizolacyjne dzięki zastosowaniu odpowiedniego wypełnienia oraz systemu podwójnych uszczelek. Grubość skrzydła - 54 mm lub 75.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h2>Żaluzje</h2>
                        </a>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="card-block">
                        <p class="p1">Żaluzje Poziome - 25 Mm<br>
                        Odbijanie promieni słonecznych Żaluzje poziome zapewniają znakomitą estetykę i komfort w mieszkaniu, ponieważ poza niewątpliwymi zaletami architektonicznymi posiadają właściwości regulatora klimatyzacji, odbijając 98% ciepła promieni słonecznych.
                        Duży wybór kolorów umożliwia dopasowanie żaluzji do każdego wnętrza.
                        </p>

                        <p class="p1">Żaluzje poziome posiadają wiele zalet:<br>
                            doskonała harmonia okna z żaluzją,<br>
                            możliwość montażu do różnego typu okien,<br>
                            bogata gama kolorów,<br>
                            estetyka wykonania,<br>
                            łatwy montaż,<br>
                            długi okres eksploatacji,<br>
                            możliwość montażu bez uszkodzenia profilu okna.</p>
                        <hr>

                        <p class="p1">Żaluzje Pionowe - Verticale<br>
                        Atrakcyjnie wykonane żaluzje pionowe to funkcjonalne i komfortowe rozwiązanie dla biur, domów, hoteli, i innych pomieszczeń zwłaszcza w budynkach użyteczności publicznej. Znajdź online casino real money i wygrać prawdziwe pieniądze! 
                        Nasza kolekcja obejmująca szeroką gamę wzorów i kolorów tkanin, a także duży wybór PCV pozwala na najbardziej wyszukane aranżacje wnętrz.
                     

                        <p class="p1">Zalety żaluzji pionowych:<br>
                        Umożliwiają podział dużego pomieszczenia na szereg mniejszych lub oddzielenie poszczególnych stanowisk pracy<br>
                        Posiadają niewątpliwe zalety dekoracyjne co pozwala przeistoczyć chłodne i nieprzyjemne wnętrze w estetyczne, pełne miłej atmosfery miejsce do pracy lub wypoczynku<br>
                        Pozwalają na ograniczenie od 20% do 100% przenikalności światła słonecznego, a odpowiednia regulacja kąta ustawienia pasów pozwala rozproszyć światło i uzyskać efekt <br>doświetlenia w zależności od potrzeb klienta
                        Żaluzje służą do ochrony pomieszczenia lub jego części przed nadmiernym nasłonecznieniem<br>
                           <hr>    
                            
                        <p class="p1">Żaluzje - Plisy<br>

                        Zasłona przeciwsłoneczna Plisy to rodzaj dekoracyjnej zasłony przeciwsłonecznej pozwalającej uzyskać niepowtarzalne efekty świetlne. Jest to doskonałe rozwiązanie dla okien o nietypowych kształtach np. półokrągłych, trójkątnych lub trapezowych. Nadają się także do okien dachowych oraz różnego rodzaju świetlików.
                        Tkaniny, z których wykonane są plisy mają cztery stopnie przezroczystości: przezroczyste, półprzezroczyste, półzaciemniające, zaciemniające.</p>

                            
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" role="tab" id="headingfour">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                <h2>Moskitiery</h2>
                            </a>
                        </h5>
                    </div>
                    <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
                        <div class="card-block">
                            <p class="p1">Moskitiery rolowane to nowy, bardzo wygodny, a zarazem elegancki sposób ochrony przed dokuczliwymi insektami. Komfortowe w użyciu i estetyczne w wykonaniu z naciągiem sprężynowym lub sprężynowo - łańcuszkowym.</p>

                            <p class="p1">Oferujemy trzy systemy moskitier rolowanych:
                            moskitiera pionowa - mocowana za zewnątrz do wnęki okiennej, system ten pozwala na szybkie i bezproblemowe zamkniecie / otwarcie moskitiery
                            moskitiera pozioma - przesuwana w poziomie z naciągiem sprężynowym, idealne zastosowanie do drzwi balkonowych, blokowana za pomocą taśmy magnetycznej daje się łatwo i szybko otworzyć
                            moskitiera pionowa łańcuszek - alternatywne rozwiązanie dla drzwi balkonowych lub wysokich okien, stosowana jest także do drzwi balkonowych nie posiadających progu</p>
                        

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
                <!-- Modal Wizyty -->
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
