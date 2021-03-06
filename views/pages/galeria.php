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
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>style.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>style-gallery.css">

    <style>


    </style>
</head>

<body>
    <div class="container-fluid">

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
    </div>
    
    <!--fluid-container-->
    
    <div class="container d-flex align-content-center flex-wrap">
    <div class="gallery-box-parent fadeIn">
        <!--    Gallery-->
        <div class="gallery-box d-flex align-content-stretch flex-wrap">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="padding-bottom: 6%;">Inspirujące realizacje</h1>
                </div>
            </div>
            <div class="row gallery-list big-row">
                <div class="col-md-6">
                    <a class="thumbnail" id="0">
                            <img class="img-fluid img-main" src="../img/img-gallery-carousel/(0).jpg">
                            </a>
                </div>
                <div class="col-md-3 list-img-medium">
                    <a class="thumbnail" id="1">
                            <img class="mt-1 img-fluid" src="../img/img-gallery-carousel/(14).jpg">
                            </a>
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="mt-1 img-fluid" src="../img/img-gallery-carousel/(8).jpg">
                            </a>
                </div>
                <div class="col-md-3 list-img-medium">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="mt-1 img-fluid" src="../img/img-gallery-carousel/(15).jpg">
                            </a>
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="mt-1 img-fluid" src="../img/img-gallery-carousel/(4).jpg">
                            </a>
                </div>
            </div>
            <div class="row gallery-list xsmall-row">
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(20).jpg">
                            </a>
                </div>
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(21).jpg">
                            </a>
                </div>
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(25).jpg">
                            </a>
                </div>
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(23).jpg">
                            </a>
                </div>
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(24).jpg">
                            </a>
                </div>
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(25).jpg">
                            </a>
                </div>
                 <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(26).jpg">
                            </a>
                </div>
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(27).jpg">
                            </a>
                </div>
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(28).jpg">
                            </a>
                </div>
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(29).jpg">
                            </a>
                </div>
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(5).jpg">
                            </a>
                </div>
                <div class="col-md-1 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(20).jpg">
                            </a>
                </div>
            </div>
            <div class="row gallery-list medium-row">
                <div class="col-md-4">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(11).jpg">
                            </a>
                </div>
                <div class="col-md-4">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(12).jpg">
                            </a>
                </div>
                <div class="col-md-4">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(13).jpg">
                            </a>
                </div>
            </div>
            
            <div class="row gallery-list small-row">
                <div class="col-md-2 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(14).jpg">
                            </a>
                </div>
                <div class="col-md-2 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(15).jpg">
                            </a>
                </div>
                <div class="col-md-2 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(16).jpg">
                            </a>
                </div>
                <div class="col-md-2 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(17).jpg">
                            </a>
                </div>
                <div class="col-md-2 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(18).jpg">
                            </a>
                </div>
                <div class="col-md-2 list-img-small">
                    <a class="thumbnail" id="carousel-selector-17">
                            <img class="img-fluid" src="../img/img-gallery-carousel/(19).jpg">
                            </a>
                </div>
            </div>
            </div>
        </div>
        <div class="row d-flex align-content-stretch flex-wrap">
            

            
            <div class="col-sm-12 gallery-list-rwd" id="slider-thumbs">
                
                
                
            <div class="col-xs-12">
                    <h1 class="text-center">Inspirujące realizacje</h1>
                </div>

                <!-- img list bot-->
                <ul class="list-unstyled gallery-list list-inline">
                    <!--linia-->

                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-0" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(0).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-1" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(1).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-2" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(2).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-3" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(3).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-4" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(4).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-5" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(5).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-6" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(20).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-7" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(7).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-8" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(8).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-9" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(9).jpg"></a>
                    </li>
                    <!--linia-->
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-10" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(10).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-11" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(11).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-12" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(12).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-13" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(13).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-14" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(14).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-15" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(15).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-16" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(16).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-17" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(17).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-18" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(18).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-19" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(19).jpg"></a>
                    </li>
                    <!--                        linia-->
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-20" id="thumbnail">
                            <img class="img-list" src="../img/img-gallery-carousel/(20).jpg" ></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-21">
                            <img class="img-list" src="../img/img-gallery-carousel/(21).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-22">
                            <img class="img-list" src="../img/img-gallery-carousel/(22).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-23">
                            <img class="img-list" src="../img/img-gallery-carousel/(23).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-24">
                            <img class="img-list" src="../img/img-gallery-carousel/(24).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-25">
                            <img class="img-list" src="../img/img-gallery-carousel/(25).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-26">
                            <img class="img-list" src="../img/img-gallery-carousel/(26).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-27">
                            <img class="img-list" src="../img/img-gallery-carousel/(27).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-28">
                            <img class="img-list" src="../img/img-gallery-carousel/(28).jpg"></a>
                    </li>
                    <li class="list-inline-item mt-2">
                        <a class="thumbnail thumbnail-rwd" id="carousel-selector-29">
                            <img class="img-list" src="../img/img-gallery-carousel/(29).jpg"></a>
                    </li>
                    <!--linia-->
                </ul>

            </div>
        </div>
    </div>
   
      <div class="bgdown"></div>
    
       

    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-secondary btn-modal" data-toggle="modal" data-target="#wizytaModal">
             Umów wizytę!
            </button>
    <!--sociale-->
    <div class="social">
        <ul>
            <li class="social-fb"><a href="#"><span class="social-text">Facebook</span><i class="social-icon fab fa-facebook-square"></i></a></li>
            <li class="social-gp"><a href="#"><span class="social-text">Google +</span><i class="social-icon fab fa-google-plus"></i></a></li>
            <li class="social-ig"><a href="#"><span class="social-text">Instagram</span><i class="social-icon fab fa-instagram"></i></a></li>
        </ul>
    </div>

    <!--container-->
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




    <!--    <script type="text/javascript" src="../js/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?php echo JS_PATH ?>popper.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH ?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH ?>app.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH ?>app-gallery.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH ?>jquery.maskedinput.js"></script>

</body>

</html>
