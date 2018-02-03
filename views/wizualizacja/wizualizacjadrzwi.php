<!DOCTYPE html>
<html lang="pl">
  
    <head>
    <meta charset="UTF-8">
    <title>Sprint</title>
    <meta name="description" content="Strona Firmy">
    <meta name="author" content="...">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Barlow:300,400|Montserrat:600,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>style.css">
    <link rel="stylesheet" href="<?php echo CSS_URL2;?>style.css"> 
    <script src="<?php echo CSS_URL2;?>jscolor.js"></script>

    
    </head>
    <body>
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
            
                    <img src="<?php echo IMG_PATH; ?>app/tlo004.png" class="bgo2">
       
          <!--  drzwi   -->
            <div class="row">
            <div class="col-xl-5 col-lg-8 col-md-10 col-sm-12">
                        
                    <img src="<?php echo IMG_PATH; ?>app/sciana1.png" class="sciana" id="sciana">
             
                    <img src="<?php echo IMG_PATH; ?>app/podloga2.png" class="podloga">
               
                    <img src="<?php echo IMG_PATH; ?>app/drzwi1.png" class="drzwi" id="drzwi">
              
                    <img src="<?php echo IMG_PATH; ?>app/drzwi%20drewno.png" class="drzwid" id="drzwid">
             
                    <img src="<?php echo IMG_PATH; ?>app/kwiat.png" class="roslinka" id="roslinka">
                   
                    <img src="<?php echo IMG_PATH; ?>app/kwiat1.png" class="roslinka2" id="roslinka23">
                   
            </div>
            </div>
        
        <div id="w991">
        
               <div clas="row align-items-end ">
                <div class="col-6 offset-4">
                    
                    <div class="card mb-3 text-center" style="width: 14rem;">
                        <div class="card-block">
                         
                                <button class="btn btn-secondary" id="drzwibttn1" style="background: url(<?php echo IMG_PATH; ?>app/door%20icop.png)" data-toggle="tooltip" title="Drzwi PCV"></button>       
                            <button class="btn btn-secondary" id="drzwidbttn1" style="background: url(<?php echo IMG_PATH; ?>app/door%20icow.png)" data-toggle="tooltip" title="Drzwi Drewniane"></button> 
                            
                        </div>
                
                    <br>
                </div>   
        </div>
        
   
                <div class="col-6 offset-5">
                     <div class="card card-outline-primary mb-3 text-center "style="width: 14rem;">
                        <div class="card-block">
                       
                    <button class="btn btn-secondary jscolor
                        {valueElement:'null',styleElement:'drzwi',value:'ffffff'}"
                        id="colord" style="background: url(<?php echo IMG_PATH; ?>app/door%20ico1.png)" data-toggle="tooltip" title="Kolor Drzwi">
                    </button>

                    <button class="btn btn-secondary jscolor
                        {valueElement:'null',styleElement:'drzwid',value:'ffffff'}"
                        id="colordd" style="background: url(<?php echo IMG_PATH; ?>app/door%20ico1.png)" data-toggle="tooltip" title="Kolor Drzwi">
                    </button>
                            
                    <button class="btn btn-secondary jscolor
                        {valueElement:'null',styleElement:'sciana',value:'#a2a8b2'}" style="background: url(<?php echo IMG_PATH; ?>app/wall%20ico1.png)" data-toggle="tooltip" title="Kolor Ściany"
                        > 
                    </button>
                             
                    </div>
                </div>
            </div>
                       <div class="row space-top" id="spacetop">
          <div class="col-3 offset-5 offset-md-7 space-top" id="spacetop">
             <h1 class="h1small">kolor drzwi</h1>
                </div>
            <div class="col-3 col-md-4 offset-7 offset-md-8 text-left">
              <p class="lead"> Wypróbuj aplikacje do dobierania kolorów i wybierz idealne połączenie. Nawet jeśli danego koloru nie ma w katalogu. Żaden problem, jesteśmy w stanie wysłać specjalne zamówienie.</p>
                 </div>
            </div>
            </div>
            </div>
         
     <div id="w990">
      <div clas="row space-top-minus">
                <div class="col-6 space-top-minus">
                    
                    <div class="card mb-3 text-center" style="width: 14rem;">
                        <div class="card-block">
                         
                                <button class="btn btn-secondary w99" id="drzwibttn" style="background: url(<?php echo IMG_PATH; ?>app/door%20icopsmal.png)" data-toggle="tooltip" title="Drzwi PCV"></button>       
                            <button class="btn btn-secondary w99" id="drzwidbttn" style="background: url(<?php echo IMG_PATH; ?>app/door%20icowsmal.png)" data-toggle="tooltip" title="Drzwi Drewniane"></button> 
                            
                        </div>
                
                </div>   
        </div>
        
   
                <div class="col-6">
                     <div class="card mb-3 text-center "style="width: 14rem;">
                        <div class="card-block">
                       
                    <button class="btn btn-secondary w99 jscolor
                        {valueElement:'null',styleElement:'drzwi',value:'ffffff'}"
                        id="colord" style="background: url(<?php echo IMG_PATH; ?>app/door%20ico1smal.png)" data-toggle="tooltip" title="Kolor Drzwi">
                    </button>

                      <button class="btn btn-secondary w99 jscolor
                        {valueElement:'null',styleElement:'drzwid',value:'ffffff'}"
                        id="colordd" style="background: url(<?php echo IMG_PATH; ?>app/door%20ico1smal.png)" data-toggle="tooltip" title="Kolor Drzwi">
                    </button>
                            
                            
                    <button class="btn btn-secondary w99 jscolor
                        {valueElement:'null',styleElement:'sciana',value:'#a2a8b2'}" style="background: url(<?php echo IMG_PATH; ?>app/wall%20ico1smal.png)" data-toggle="tooltip" title="Kolor Ściany"
                        > 
                    </button>
                             
                    </div>
                </div>
            </div>

       
            </div>
           <div class="row"><div class="col">
                <h3  style="margin-top: -14%; color: white;">wypróbuj kolor drzwi</h3>
        </div><div>
        </div>
             <div class="bgdown"></div>
        </div>
            
      
<!--        koniec drzwi-->
         <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-info btn-modal" data-toggle="modal" data-target="#wizytaModal">
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

        <script type="text/javascript" src="../../js/popper.min.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.maskedinput.js"></script>
            <script src="css/script.js"></script>
    </body>
</html>
