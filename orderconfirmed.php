<!DOCTYPE html>
<html lang="pl">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500; user-scalable=0;" />
        
        <title>JESAISPAS</title>
    <meta name="description" content=""/>
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="author" content="Bartosz Ryfa"/>
    <link rel="stylesheet" href="orderconfirmed.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
   
        
        
</head>

<body>

<div id="container">
<!--
MENU
-->
    <div id="back">
        <a href="index.php">❮ BACK </a>
    </div>
    
    $.ajax();
<?php
    session_start();
    $pdname = $_SESSION['pdname'];
    $price = $_SESSION['price'];
    $size = $_SESSION['size'];
    $mail = $_POST['email'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $telefon = $_POST['telefon'];
    $ulica = $_POST['ulica'];
    $kodpocztowy = $_POST['kodpocztowy'];
    $miasto = $_POST['miasto'];
        $to = '';
        

    $from = '=?UTF-8?B?'.base64_encode('jesaispas').'?= <no-reply@domena.pl>';

    $replyTo = '=?UTF-8?B?'.base64_encode('mail').'?= <$mail>';

    $subject = '=?UTF-8?B?'.base64_encode('Nowe zamówienie:').'?=';

    $message = 'Zamówienie od: '.$mail."\r\n".'imię: '.$imie."\r\n".'nazwisko: '.$nazwisko."\r\n".'telefon: '.$telefon."\r\n".'adres: '.$ulica."\r\n".'kod pocztowy: '.$kodpocztowy."\r\n".'produkt: '.$pdname."\r\n".'rozmiar: '.$size."\r\n".'cena: '.$price;
    $headers  = 'Content-Type: text/plain; charset=utf-8'."\r\n";
    $headers .= 'Content-Transfer-Encoding: base64'."\r\n";
    $headers .= 'From: '.$from."\r\n";
    $headers .= 'Reply-To: '.$replyTo."\r\n";

    $message = mb_convert_encoding($message, 'UTF-8');
    $message = wordwrap($message, 70, "\r\n");
    $message = base64_encode($message);

    mail($to, $subject, $message, $headers);

?>

<!--
ORDER CONFIRMED
-->
<div class="clear"></div>
   
       <h1>Dziękujemy za złożenie zamówienia!</h1>
       
       <div id="php">
           <div id="finalCart">
               <table>
                   <tr>
                        <td>lp:</td>
                        <td>img:</td>
                        <td>produkt:</td>
                        <td>rozmiar:</td>
                        <td>ilość:</td>
                        <td>cena:</td>
                   </tr>
               </table>
           </div>
           
    <div id="box">
        <h3>Prosimy o wpłate kwoty: <span id="totalAmountPLN"></span> PLN + 20 PLN (ship)</h3>
        
        <div id="dane">
          <h4><span>dane do wpłaty:</span> 00 1020 1020 1020 1020 1020 1020</h4>
          <h5>XXXX YYYYYYY ZZZZZZZ</h5>
        </div>
   </div>
   
   <!--
 FOOTER SCRIPT
   -->
    <div id="stopka">
        <?php include('footer.php') ?>

    </div>

    </div>
</div>

<script src="js/finalCart.js"></script>
</body>
</html>


