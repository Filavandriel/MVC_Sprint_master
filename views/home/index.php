<!DOCTYPE html>
<html lang="pl">

    <head>
        <meta charset="UTF-8">
        <title>Sprint</title>
        <meta name="description" content="Strona Firmy">
        <meta name="author" content="...">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Barlow:300,400|Montserrat:700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo CSS_URL; ?>style.css">
       
  
    </head>

    <body>

    <!--landing page-->
        <div class="curtain panel" id="curtain"  data-section-name="panel0">
            <div class="curtain_mid">
                <div class="row">
                    <div class="col-12 justify-content-center d-flex align-content-start flex-wrap">
                        <img src="<?php echo IMG_PATH; ?>llogo.png" class="img-responsive" />
                        <h2>
                          DRZWI  OKNA  ROLETY  BRAMY
                        </h2>
                    </div>
                 </div>
            </div>
            <div class="curtain_bar" id="curtain_bar">
            </div>
        </div>

    <!--Index page-->
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
    <div class="panel" data-section-name="panel1">
    <div class="container fadeIn" >
        
            <div class="row">
                <div class="col-xl-6 col-sm-12 d-flex align-items-center" >
                     <h1>odkrywamy <br>okna<br>na nowo</h1>
                </div>
                <div class="col-xl-5 col-sm-12 d-flex align-items-center">
                    <img src="img/okno.png" class="img-fluid slign-self-center"/>
                </div>
            </div>
    </div>    
    <div class="hr1"></div>
        </div>
        <div class="panel" data-section-name="panel2">
    <div class="container fadeIn">

    <!--smart-okno-->
    <div class="row">
        <div class="col-6 text-right d-flex align-items-center">
            <span><h1>smart-okno</h1></span>
        </div> 

    <!--article1-->
    <div class="row">
          <div class="col-xl-10 col-sm-12">
              <img src="img/smarto.png" class="img-fluid"/>
          </div>

    </div>
        <div class="row align-items-top margin-minus" id="margin-minus">
              <div class=" col-md-6 offset-md-6 col-sm-12 text-justify">
                     <p>SmartWindow doskonale wpisuje się w ideę inteligentnego budownictwa propagowaną na całym świecie. Rewolucyjne okno jest kompatybilne z innymi systemami i urządzeniami IoT w domu. <p class="lead"><br> Drutex ktory produkuje ten fenomen stolarki kilka miesięcy temu zaoferował Klientom możliwość tworzenia inteligentnych systemów pozwalających na zdalne sterowanie stolarką. To był tylko pierwszy krok w kierunku innowacyjnych technologii. </p><br><p> Nowy produkt idealnie integruje się z dotychczas oferowanymi przez firmę elementami inteligentnego domu Tahoma czy Maco poprzez wsparcie dla panelu sterowania, który to wyświetlony jest wprost na oknie. <br> Dzięki temu klient nie potrzebuje żadnych dodatkowych urządzeń, aby sterować swoim domem, co zapewnia pełną kontrolę dostępu i bezpieczeństwo dla całej rodziny.<br><br> Takie rozwiązanie stwarza również lepsze możliwości zarządzania czasem i przestrzenią w domu.
                    </p>
              </div>
        </div>
    </div>
    
    </div>
   <div class="hr2"></div>
             </div>
        <div class="panel" data-section-name="panel3">
  <img src="img/plama1.png" class="img-fluid img-absolute mdnone">  
    <div class="container fadeIn">

            <!--article2-->
     
    <div class="row">
         <div class="col-xl-2 col-md-6 col-sm-12 ">
                <img src="img/tp.png" class="img-fluid">
          </div>
            
          <div class="col-md-6 col-sm-12 text-justify" >
                <h2>Technologia przyszłosci</h2>
              <p> Firma Drutex wprowadziła na rynek innowacyjny produkt na miarę przyszłości.  </p><p class="lead">Nowe interaktywne okno pozwalające na prezentację treści multimedialnych to rewolucja na światowym rynku stolarki okienno-drzwiowej. </p><p> Firma stworzyła pierwsze inteligentne okno, które poza swoimi standardowymi funkcjami oferuje możliwość oglądania telewizji, korzystania z Internetu i pracy na panelu bezdotykowym. Swoim innowacyjnym rozwiązaniem Drutex wpisuje się w światowy trend rozwiązań z zakresu IoT (Internet of Things).
                </p>
          </div>
      </div>

    <!--article3-->
    <div class="row space-top">
          <div class="col-xl-2 col-md-6 col-sm-12" >
              <img src="img/pk.png" class="img-fluid">
          </div>

          <div class="col-md-6 col-sm-12 text-justify">
                <h2>Pełna kompatybilność</h2>
                <p>Do okna można podłączyć pendrive lub dysk przenośny z danymi multimedialnymi, klawiaturę oraz myszkę. Istnieje również opcja wykorzystania domowej sieci komputerowej celem podłączenia okna do Internetu, co stwarza zupełnie nowe możliwości funkcjonalne okna. </p><p class="lead">Od dziś oglądanie filmów z YouTube, galerii zdjęć czy przeglądanie informacji w popularnych kanałach internetowych podczas codziennych czynności takich jak gotowanie, przeglądanie maili, czy oglądanie ulubionych programów i seriali na oknie, stało się rzeczywistością.</p><p> Drutex stworzył okno, które zastępuje funkcje telewizji, tabletu czy narzędzia do pracy. To również możliwość wykorzystania wirtualnych żaluzji czy markiz chroniących przed światłem i zaciemniających pomieszczenia dla jeszcze większego komfortu użytkowników.</p>     
         </div>
     </div>
     </div>
   <div class="hr1"></div>
              </div>
        <div class="panel" data-section-name="panel4">
    <div class="container fadeIn">

        <div class="row">
            <div class="col-md-3">

                <img src="img/icon1.png" class="small">
                <h2>Doświadczenie i tradycja</h2>
                <p> Ponad 30-letnie doświadczenie w tworzeniu wysokiej jakości produktów, w tym pełna kontrola na każdym etapie produkcji okien, które tworzone są od A do Z.
                </p>

            </div>

            <div class="col-md-3 col-sm-12">

                <img src="img/icon2.png" class="small">
                <h2>Rozwiązania szyte na miarę </h2>
                <p> Autorskie produkty tworzone przez własny dział B+R są w pełni zindywidualizowane i dopasowane do aktualnych trendów architektonicznych i potrzeb klientów.
                </p>

            </div>

            <div class="col-md-3 col-sm-12">

                <img src="img/icon3.png"class="small">
                <h2>Lokalni Producenci</h2>
                <p> Korzystamy z usług lokalnych producentów, Wszystkie produkty w naszej ofercie zostały stworzone w Polsce. W dużej mierze w Bydgoszczy oraz wojewodztwie Kujawsko-Pomorskim.
                </p> 

            </div>

            <div class="col-md-3 col-sm-12">

                <img src="img/icon4.png" class="small">
                <h2>Szybkość działania</h2>
                <p> 7-dniowe terminy realizacji zamówień wraz z dostawą w całej Europie, dzięki elastyczności, sprawności działania i własnej flocie transportowej
                </p>

            </div>
        </div>
    </div>
   <div class="hr2"></div>
        <div class="panel" data-section-name="panel5">
    <div class="container fadeIn">



    <div class="row">
        <div class="col-6 offset-5" >
             <span class="text-right"><H1>porady<br>dla<br>każdego</H1></span>
        </div>
    </div>

    <!--Blog-->
    <div class="row space-top">
        <div class="col-md-9">
                <div class="row ">
                    <div class="col-sm-3">
                        <img src="./img/kon.png" alt="Zdjęcie" class="img-fluid float-left">
                    </div>
                    <div class="col-sm-6 text-justify">
                        <a href="#">
                            <h2> Konserwacja Okien </h2></a>

                        <p>Aby przedłużyć żywotność i zachować dobry wygląd okien i drzwi należy stosować odpowiednie zabiegi pielęgnacyjne i konserwacyjne do których należy: stosowanie środków myjących, konserwacja uszczelek, smarowanie zawiasów i okuć obwiedniowych...
                        </p>
                        <a href="#" class="btn">Czytaj Dalej...</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <img src="./img/opt.png" alt="Zdjęcie" class="img-fluid float-left">
                    </div>
                    <div class="col-sm-6 text-justify">
                        <a href="#">
                            <h2 class="text-left"> Łatwe sposoby na optyczne powiększenie mieszkania </h2>
                        </a>
                        <p>Kawalerki i małe, kompaktowe mieszkania wymagają od domowników pomysłowości i umiejętności designerskich, żeby nieduży metraż urządzić w sposób funkcjonalny, a jednocześnie estetyczny. Wszyscy chcemy, aby mieszkanie było przytulne, piękne, ale też musi oferować przestrzeń z wieloma możliwościami, bo przecież w takich pomieszczeniach liczy się każdy centymetr.</p>
                        <a href="#" class="btn">Czytaj Dalej...</a>
                    </div>
                </div>
        </div>

                <!--blogside-->
                <div class="col-sm-3">
                    <h2>Wyszukiwanie</h2>
                    <p >Szukasz czegoś konkretnego?</p>
                    <form>
                        <input class="form-control" id="myInput" type="text" placeholder="Szukaj..">
                    </form>

                    <h3 style="padding-top: 20px;">Ostatnie Artykuły</h3>
                    <a href=""> Konserwacja Okien </a><br>
                    <a href=""> Łatwe sposoby na optyczne powiększenie mieszkania </a><br>

                    <!--pagination-->
                    <ul class="pagination justify-content-lrft pt-5">
                        <li class="page-item disabled"><a class="page-link" href="#">Starsze</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Nowsze</a></li>
                    </ul>
                </div>
        </div>

        </div>
       <div class="hr1"></div>
                   </div>
        <div class="panelend" data-section-name="panel6">
        <div class="container fadeIn">

        <div class="row"> <div class="col-md-6 offset-md-1">
            <H1>partnerzy</H1>
        </div></div>


        <!--Strony z ktorymi wspolpracujemy-->

        <!--rzad 1-->
        <div class="row space-top">
            <div class="col-md-3 col-sm-12">
                <a href="http://centurion.com.pl">  <img class="b1 img-responsive" src="./img/centurion.png" alt="centurion"> </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a href="http://erkado.pl">   <img class="b1" src="./img/erkado.png" alt="erkado"> </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a href="http://fartprodukt.pl">   <img class="b1" src="./img/fart.png" alt="fart"> </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a href="http://intenso-doors.pl">  <img class="b1" src="./img/intenso.png" alt="intenso"> </a>
            </div>

        </div>

        <!--rzad 2-->
        <div class="row" style="margin-bottom: 40px;">
            <div class="col-sm-3"  >
                <a href="http://aludoor.net">  <img class="b1" src="./img/aludoor.png" alt="aludoor"> </a>
            </div>
            <div class="col-sm-3">
                <a href="http://kmt.com.pl">  <img class="b1" src="./img/kmt.png" alt="kmt"> </a>
            </div>
            <div class="col-sm-3">
                <a href="http://pol-skone.pl">  <img class="b1" src="./img/polskoni.png" alt="pol-skoni"> </a>
            </div>
            <div class="col-sm-3">
                <a href="http://wiked.pl">  <img class="b1" src="./img/companies/wiked.png" alt="wiked"> </a>
            </div>

        </div>
        </div>
             <div class="bgdown"></div>
        </div>

    <!-- Button to Open the Visit-Modal -->
    <button type="button" class="btn btn-secondary btn-modal" data-toggle="modal" data-target="#wizytaModal">
         Umów wizytę!
    </button>


    <!--sociale-->
    <div class="social">
        <ul>
            <li   class="social-fb"><a href="#"><span class="social-text">Facebook</span><i class="social-icon fab fa-facebook-square"></i></a></li>
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
                     <form action="<?php $_SERVER['PHP_SELF']?> method="post" enctype="text/plain" id="wizytaForm">
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
                    <button type="submit" class="btn btn-success" id="mailsendBtn" data-toggle="modal" data-target="#successModal" >Wyślij</button>
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

    <!-- Scripts -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="<?php echo JS_PATH ?>bootstrap.min.js"></script>
                <script type="text/javascript" src="<?php echo JS_PATH ?>popper.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH ?>app.js"></script>

    <script src="<?php echo JS_PATH ?>script.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH ?>jquery.maskedinput.js"></script>

</body>

</html>
