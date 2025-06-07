<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "122recordlabel@gmail.com";
    $subject = "Neue Nachricht von der 122 Records Website";
    $body = "Name: $name\nE-Mail: $email\nNachricht:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=utf-8";

    if (mail($to, $subject, $body, $headers)) {
        echo "Danke! Deine Nachricht wurde gesendet.";
    } else {
        echo "Fehler: Nachricht konnte nicht gesendet werden.";
    }
} else {
    echo "Ungültige Anforderung.";
}
?>
