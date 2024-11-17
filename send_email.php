<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'christian.schmailzl@googlemail.com';
    $subject = 'Geburtstagsseite aufgerufen';
    $message = 'Die Geburtstagsseite wurde gerade aufgerufen.';
    $headers = 'From: christian.schmailzl@googlemail.com' . "\r\n" .
              /* 'Reply-To: webmaster@example.com' . "\r\n" .*/
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo 'E-Mail gesendet';
    } else {
        http_response_code(500);
        echo 'Fehler beim Senden der E-Mail';
    }
} else {
    http_response_code(405);
    echo 'Methode nicht erlaubt';
}
