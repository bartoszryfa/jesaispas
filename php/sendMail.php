<?php 
    /* user data */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $surname = $_POST['surname'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $postal = $_POST['postal'];
    $phone = $_POST['phone'];
    $total = $_POST['total'];

    /* order data */
    $orders = $_POST['orders'];

    /* sending */ 
    $to = 'testmail123@test.pl';
    $subject = 'Nowe zamówienie: ';
    $headers = "From: ".$name." <".$email."> \r\n";
    $message = "
        \nEmail: " . $email .
        "\nImie: " . $name .
        "\nNazwisko: " . $surname .
        "\nTelefon: " . $phone .
        "\nMiasto: " . $city .
        "\nUlica i numer: " . $street .
        "\nKod pocztowy: " . $postal .
        "\n\n\nZamowienie: \n" . $orders
    ;
    $send_email = mail($to,$subject,$message,$headers);

    echo ($send_email) ? 'success' : 'error';
    echo $orders;
?>
