<?php
    session_start();

    function redirect(){
        header("Location: contacts.php");
        exit;
    }

    function sandMail($subject, $from, $message) {
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
        mail("kk9162021@gmail.com", $subject, $message, $headers);
    }

    $user_name = htmlspecialchars(trim($_POST['username']));
    $from = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['user_name'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    $errors = false;

    if (strlen($user_name) <= 1){
        $_SESSION['error_username'] = "Введите корректное имя";
        $_SESSION['success_mail'] = "";
        $errors = true;
        redirect();
    }
    else{
        $_SESSION['error_username'] = "";
    }
    if (strlen($from) < 5 || strpos($from, "@") == false){
        $_SESSION['error_email'] = "Введите корректный email";
        $_SESSION['success_mail'] = "";
        $errors = true;
        redirect();
    }
    else{
        $_SESSION['error_email'] = "";
    }
    if (strlen($subject) <= 5){
        $_SESSION['error_subject'] = "Тема сообщения менее 5 символов";
        $_SESSION['success_mail'] = "";
        $errors = true;
        redirect();
    }
    else{
        $_SESSION['error_subject'] = "";
    }
    if (strlen($message) <= 15){
        $_SESSION['error_message'] = "Cообщениe менее 15 символов";
        $_SESSION['success_mail'] = "";
        $errors = true;
        redirect();
    }
    else{
        $_SESSION['error_message'] = "";
    }

    if (!$errors){
        sandMail($subject, $from, $message);
        $_SESSION['success_mail'] = "Вы успешно отправили письмо!";
        redirect();
    }
?>