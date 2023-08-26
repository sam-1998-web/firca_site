<?php


if (isset($_POST['sendmail'])) {

    $name = $_POST['text'];
    $mail = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $massage = $_POST['Massage'];

    $to = "rustamtemburne123@gmail.com";
    $subject = "My mail";
    $txt = "Hello world!";
    $headers = "From: $mail" . "\r\n" .
        "CC:rustamtemburne12@gmail.com ";

    echo $to = "rustamtemburne123@gmail.com";
    echo "<br>";
    echo $subject = "My subject";
    echo "<br>";
    echo $txt = "Hello world!";
    echo "<br>";
    echo $headers = "From: rustamtemburne123@gmail.com" . "\r\n" .
        "CC: rustamtemburne123@gmail.com";
    if (mail($to, $subject, $txt, $headers)) {
        echo "<script>
                alert('mail is send');
                window.location.href='contact.php';
                </script>";
    } else {
        echo "<script>
                alert('mail not send');
                window.location.href='contact.php';
                </script>";
    }
}
