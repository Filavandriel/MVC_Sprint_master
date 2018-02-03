<?php
require_once "PEAR/Mail.php";
$id = rand(100000,999999);
                                          // Mail.php w tym samym katalogu oraz katalogi Net i Mail wymagane
                                          $conf_code = "CONF";
                                          $from = "Sprint <cosiestalo14@wp.pl>";
                                          $to = "sprint.zamowienia@gmail.com";
                                          $subject  = "Sprint zamównienie nr ".$id;



$data = $_POST['data'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$ulica = $_POST['ulica'];
$miasto = $_POST['miasto'];
$tele = $_POST['tele'];
$email = $_POST['email'];
$wymiarx = $_POST['wymiarX'];
$wymiary = $_POST['wymiarY'];
$wiad = $_POST['uwagi'];

$message = "Zamówienie nr ".$id."\n";
$message .= "Zamówienie na dzień ".$data."\n\n";
$message .= "Imię i nazwisko klienta: ".$imie." ".$nazwisko."\n\n"; 
$message .= "Lokalizacja \n";  
$message .= "Ulica: ".$ulica."\nMiasto: ".$miasto."\n\n";  
$message .= "Dane kontaktowe \n";  
$message .= "Telefon kontaktowy: ".$tele."\nEmail: ".$email."\n\n"; 
$message .= "Wstępny kosztorys \n";  
$message .= "Wymiar X: ".$wymiarx." Wymiar Y: ".$wymiary."\n\n"; 
$message .= "Treść wiadomomości: ".$wiad."\n"; 

                                          $host = "ssl://smtp.wp.pl";
                                          $port = "465";
                                          $username = "cosiestalo14@wp.pl";
                                          $password = "cosiestalo1";
 
                                          $headers = array ('From' => $from,
                                            'To' => $to,
                                            'Subject' => $subject);
                                          $smtp = Mail::factory('smtp',
                                          array (
                                             'host' => $host,
                                             'port' => $port,
                                             'auth' => true,
                                             'debug' => true,
                                             'username' => $username,
                                             'password' => $password));
 
                                          $mail = $smtp->send($to, $headers, $message);
 
                                          if (PEAR::isError($mail)) {
                                              echo("<br><br><br><div id=\"err\"><b>".$mail->getMessage()."</b></div>");
                                          } else {
                                             echo(" ");
                                          }

?>
