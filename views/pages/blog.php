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
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>styleso.css">
   </head>
   <body>
        <!--nav-->
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
         <div class="container-fluid fadeIn">
     
           
                <div class="row bottom">
        
            <div class="col-lg-4 offset-lg-6 col-md-6 col-sm-12 ">
                <div class="sdiv1 p-2" id="sdiv1">
                   
                    <h3 class="text-left">Krajobraz</h3><p class="text-left">Nudny widok za oknem? A może poprostu nie masz poprostu ochote popatrzeć na coś ciekawszego. Dzięki smart oknu możesz napawać się widokiem jednego z 12 pejzaży dostępnych w standardowym pakiecie. Każde z nich w pełni animowane, dostępne w rozdzielczości full hd i ścieżką audio. Do wyboru między innymi: Norweski fjord, Tropikalna plaża, Ulice Nowego Jorku czy też Japońska kaplica.</p></div>
 
            <div class="sdiv1 p-2" id="sdiv2">
                   
                    <h3 class="text-left">Prywatność</h3><p class="text-left ">Koniec z nudnymi żaluzjami, koniec z plączącymi się sznurkami i zepsutymi mechanizmami. Dzięki inteligentnym oknom za dotknięciem dłoni będziesz mógł zasłonić rolete. A nawet całkowicie wybrać jej kolor, kształt czy wzór.</p></div>
                 
             <div class="sdiv1" id="sdiv3">
                   
                    <h3 class="text-left">Rozrywka</h3><p class="text-left ">Masz ochotę obejrzeć film lub zagrać w swoją ulubioną gre. Może włączyć dziecku bajke na dobranoc. Albo wszystko naraz? Każde smart okno może być wykorzystane jako wysokiej jakości wyświetlacz, i podłączone do dowolnej konsoli bądź komputera.</p></div>
                
            <div class="sdiv1" id="sdiv4">
                   
                    <h3 class="text-left">Kompatybilnosc</h3><p class="text-left ">Każde smart okno wyposażone jest w 2 porty USB 3.0. 2 Porty Hdmi. Oraz kompatybilne z technologiami WiFi oraz Bluetooth. Nic nie stoi na przeszkodzie aby sparować mysz bądź swojego smartfona z oknem.</p></div>
                 
             <div class="sdiv1" id="sdiv5">
                   
                    <h3 class="text-left">Informacja</h3><p class="text-left ">Poczytać newsy przy porannej kawie, sprawdzić skrzynke pocztową albo prognoze pogody. Dzięki wygodnemu i łatwemu w obsłudze interfejsowi, opartego na popularnym "okienkowym" systemie microsoft Windows. każdy będzie w stanie nauczyć się obsługi smart okna.</p></div> 
                
             <div class="sdiv1" id="sdiv6">
                   
                    <h3 class="text-left">Android</h3><p class="text-left ">System wbudowany w inteligentnym oknie, jest w 100% kompatybilny z androidowymi aplikacjami. Spotify, Instagram, Tweeter oraz całą reszta. Są dostępne ze sklepu play w dowolnym momencie.</p></div>
            
             <div class="sdiv1" id="sdiv7">
                   
                    <h3 class="text-left">Kontrola</h3><p class="text-left ">Smart okno sprawdza się doskonale jako osobny element, ale działa jeszcze lepiej jako część inteligentnego domu. Dzięki połączeniu systemu okien i domu możecie uzyskać kontrole nad poszczególnymi elementami, takimi jak oszczędzanie energii, oświetlenie, temperatura lub system zabezpieczń.</p></div>
          
             <div class="sdiv1" id="sdiv8">
                   
                    <h3 class="text-left">Dekoracja</h3><p class="text-left ">Inteligentne okno może być również wykorzystane jako łatwy i efektowny sposób dekoracji. Ozdoby podczas okresu świąt lub haloween na pewno przyciągną uwage innych. Wyobraź sobie witryne sklepową w której w interaktywny sposób możesz zaprezentować swoim klientom dostępne produkty.</p></div>
             </div>  
             
                 
            
        </div>
                
        <div class="row justify-content-start">
            <div class="col-lg-6 col-md-12 smart1">
                    <h3 class="maly"><center>Sprawdź możliwośći Smart-Okna</center></h3>
                    <img src="<?php echo IMG_PATH; ?>smartokno/smartokno.png" id="s1">
                    <img src="<?php echo IMG_PATH; ?>smartokno/bezszprosow.png" class="s2" id="s2">
                    <img src="<?php echo IMG_PATH; ?>smartokno/bg1.png" class="s2" id="s3">
                    <img src="<?php echo IMG_PATH; ?>smartokno/zal2.png" class="s2" id="s4">
                    <img src="<?php echo IMG_PATH; ?>smartokno/rozrywka.png" class="s2" id="s5">               
                    <img src="<?php echo IMG_PATH; ?>smartokno/kompatybilnosc.png" class="s2" id="s6" style="z-index: 2;">
                    <img src="<?php echo IMG_PATH; ?>smartokno/aplikacje.png" class="s2" id="s7">            
                    <img src="<?php echo IMG_PATH; ?>smartokno/pogoda.png" class="s2" id="s8">
                    <img src="<?php echo IMG_PATH; ?>smartokno/kontrola.png" class="s2" id="s9">
                    <img src="<?php echo IMG_PATH; ?>smartokno/dekoracje.png" class="s2" id="s10">
                    
                    <img src="<?php echo IMG_PATH; ?>tlo00.png" class="splash">  
                    <img src="<?php echo IMG_PATH; ?>tlo001.png" class="splash1">  
                
                    <img src="<?php echo IMG_PATH; ?>smartokno/trans.png" class="so1" id="bttns1">
                    <img src="<?php echo IMG_PATH; ?>smartokno/trans.png" class="so2" id="bttns2">
                    <img src="<?php echo IMG_PATH; ?>smartokno/trans.png" class="so3" id="bttns3">
                    <img src="<?php echo IMG_PATH; ?>smartokno/trans.png" class="so4" id="bttns4">
                    <img src="<?php echo IMG_PATH; ?>smartokno/trans.png" class="so5" id="bttns5">
                    <img src="<?php echo IMG_PATH; ?>smartokno/trans.png" class="so6" id="bttns6">
                    <img src="<?php echo IMG_PATH; ?>smartokno/trans.png" class="so7" id="bttns7">
                    <img src="<?php echo IMG_PATH; ?>smartokno/trans.png" class="so8" id="bttns8">
            </div>
            
                 
            <div class="row absolut space-top">
          <div class="col-4 offset-5 space-top">
             <h1 class="space-top hide">możliwości smart okna</h1>
                </div>
            <div class="col-3 offset-7 text-left hide">
              <p class="lead"> Spróbuj kliknąć na dowolny panel pomiędzy szprosami, aby dowiedzieć się więcej o możliwościach naszego najnowszego produktu. Każdy panel to inna funkcja przygotowana specjalnie dla twojej wygody. Odkryj z nami okno na nowo.</p>
                 </div>
            </div>
                 <div class="row absolut">
                <div class="col-3 offset-9">
                    <img src="<?php echo IMG_PATH; ?>okno.png" class="img-fluid hide" />
                </div>
            </div> 
             </div>
                      
             
        </div>
             <div class="bgdown"></div>
          
             
<!--
             <div class="row align-items-end">
               
                <div class="col-2 offset-8">
                    
                    <div class="card card-outline-primary mb-3 text-center" style="width: 20rem;">
                        <div class="card-block">
                            <h2 class="card-title">Wybierz Element</h2>
                                <button class="btn btn-secondary" id="bttns2">zaluzje</button>       
                                <button class="btn btn-secondary" id="bttns3">krajobraz</button> 
                                <button class="btn btn-secondary" id="bttns4">Prognoza</button> 
                                <button class="btn btn-secondary" id="bttns5">Rozrywka</button> 
                                <button class="btn btn-secondary" id="bttns6">Kontrola</button> 
                            
                        </div>
                    </div>  
                    <br>
                    <div><h2>Work in progress</h2></div>
                </div>   
        </div>
        </div>
-->
             <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-secondary btn-modal" data-toggle="modal" data-target="#wizytaModal">
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH ?>popper.min.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH ?>bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH ?>jquery.maskedinput.js"></script>
        <script defer src="<?php echo JS_PATH ?>scriptsmartokno.js"></script> 
        <script type="text/javascript" src="<?php echo JS_PATH ?>app.js"></script>

    </body>
</html>
