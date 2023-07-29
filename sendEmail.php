<?php
// include 'db.php';
if (isset($_POST['submit'])) {
    $headers = "From: WebForm" . "\r\n";
    $mailTo = 'ti18.mika@gmail.com';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $emailAndTel = 'From: ' . $email . "\n Tel: " . $tel;
    $message = $_POST['message'];


    if ($name && $email && $tel && $message) {
        //ok
        echo '<h5 style="color: white;">Odpovíme vám co nejdříve to bude možné.<h5>';
        // mail($headers,$mailTo,$name, $emailAndTel ,$message);
        die();
    } else if (!$email) {
        echo '<h5 style="color: white;">Zadejte prosím emailovou adresu.<h5>';
        die();
    } else if (!$tel) {
        echo '<h5 style="color: white;">Zadejte prosím své telefonní číslo.<h5>';
        die();
    } else if (!$message) {
        echo '<h5 style="color: white;">Zpráva není vyplněna.<h5>';
        die();
    } else
        die();

}
?>