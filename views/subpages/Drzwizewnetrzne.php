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
             
   

        <!--rzad 1-->
        <div class="row justify-iitems-center" style="margin-top:6%;">
       
                <div class="col-12">
               
                      <h1 class="text-right">Drzwi Zewnętrzne</h1>
                </div>
           </div>
              <div class="row">
            <div class="col-9 offset-1">
                <a href="http://kmt.com.pl/pl/">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/KMT.png" alt="KMT" height="50px"> </a>
                <a href="http://wiked.pl/drzwi.php">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/wiked.png" alt="Wikęd" height="90x"> </a>
                <a href="http://www.delta.net.pl/">   <img class="b1" src="<?php echo IMG_PATH; ?>companies/Delta.jpg" alt="Delta" height="50px"> </a>
              
        </div>
            </div>
           <div class="row justify-content-center">
                <div class="col-xl-10 col-md-12">

            <div id="accordion" role="tablist" aria-multiselectable="true">
          <div class="card">
                <div class="card-header" role="tab" id="headingone">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="true" aria controls="collapseone">
          <h2>KMT</h2>
        </a>
                    </h5>
                </div>
                <div id="collapseone" class="collapse" role="tabpanel" aria-labelledby="headingone">
                    <div class="card-block">
                        <p class="p1">Historia tworzenia przedsiębiorstwa sięga 1967 roku. Podwaliną budowy marki był mały zakład ślusarski, który dzięki pasji, wytrwałości i pracowitości jego twórcy Zenona Szymaniuk oraz synów Dariusza i Artura, osiągnął pozycję lidera na rynku krajowym. </p>
                        <hr>
                        <p class="p1">Ich misją jest produkowanie, sprzedaż i dystrybucja drzwi stalowych wewnętrznych, zewnętrznych, antywłamaniowych oraz świadczenie kompleksowego doradztwa i serwisu, które pozwalają na zapewnienie pełnej satysfakcji Klienta. Jakość świadczonych usług gwarantowana jest poprzez zaangażowanie każdego pracownika w ciągłe doskonalenie się organizacji, zawsze kierując się przy tym maksymą: "Jak najbliżej Klienta", gdyż produkują dzięki jego inspiracjom. </p>
                        <hr>

                        <p class="p1">Wiele lat pracy poświęconej konstruowaniu, produkcji i sprzedaży elementów dla budownictwa pozwoliło zdobyć doświadczenie, dzięki któremu wyroby marki KMT zyskują aprobatę i zadowolenie nawet najbardziej wymagających Klientów. W chwili obecnej specjalizują się w produkcji drzwi stalowych przeznaczonych dla budownictwa wielorodzinnego, jednorodzinnego oraz budynków użyteczności publicznej.</p>
                       <center>
                        <img src="<?php echo IMG_PATH; ?>produkty/w10.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/z8.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/z9.jpg" height="250px" class="produkt">
                       </center>


                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria controls="collapseTwo">
          <h2>Wikęd</h2>
        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-block">
                         <p class="p1"> Firma WIKĘD jest renomowanym i uznanym producentem stolarki okiennej i drzwiowej oraz stolarki aluminiowej.</p>
                          <hr>
                        <p class="p1">W ich autoryzowanych punktach sprzedaży spotkacie Państwo wykwalifikowaną kadrę pracowników, których doświadczenie i profesjonalizm są do Waszej dyspozycji. W przeciągu kilku ostatnich lat podwoili zatrudnienie, powiększają powierzchnie produkcyjne i wymieniają maszyny na najnowszej generacji sprzęt co sprawia że są jedną z dynamiczniej rozwijających się firm w regionie.</p>

                            <center>
                        <img src="<?php echo IMG_PATH; ?>produkty/z4.png" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/z5.png" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/z6.png" height="250px" class="produkt">
                       </center>

                    </div>
                    </div>
                </div>
       



            <div class="card">
                <div class="card-header" role="tab" id="headingfour">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
          <h2>Delta</h2>
        </a>
                    </h5>
                </div>
                <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
                    <div class="card-block">
                  <p class="p1">DELTA to rodzinna firma, która została założona w roku 1992 przez Zbigniewa Różyckiego. Od początku swego istnienia zajmowała się stolarką drzwiową ze szczególnym nastawieniem na atestowane drzwi antywłamaniowe i zamki.</p>
                        <hr>
                        <p class="p1"> Obecnie marka DELTA Zbigniew Różycki jest rozpoznawalna w całym kraju jako czołowy producent drzwi stalowych i antywłamaniowych do mieszkań, domów jednorodzinnych oraz instytucji użyteczności publicznej. Dwa zakłady produkcyjne w Katowicach i Skrzyszowie, stabilni kooperanci, stosowanie innowacji oraz najnowszych technologii i urządzeń zapewniają Państwu wysoką jakość naszych produktów. </p>

                            <center>
                        <img src="<?php echo IMG_PATH; ?>produkty/z1.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/z2.jpg" height="250px" class="produkt">
                        <img src="<?php echo IMG_PATH; ?>produkty/z3.png" height="250px" class="produkt">
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
    <script type="text/javascript" src="<?php echo JS_PATH ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH ?>app.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH ?>popper.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>


</body>

</html>
