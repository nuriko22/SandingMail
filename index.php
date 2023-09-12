<?php
    // setcookie("user_name", "Alex", time() + 5); // cookie
    // print_r($_COOKIE);
    
    $title = "Main site";
    require "blocks/header.php";
?>
<h1>Main site</h1>
<?php

    // создание файла и запись в него инфы
    // (w - запись в файл инфы, a - добавление в файл инфы, r - чтение инфы)
    // $file = fopen("text.txt", "a"); 
    // fwrite($file, "Just text"); 
    // fclose($file);

    // чтение файла и вывод инфы из него
    // $filename = "text.txt";
    // $file = fopen($filename, "r");
    // $content = fread($file, filesize($filename));
    // fclose($file);

    // echo $content;
    
    // очень просто помещает текст в файл
    // file_put_contents("a.txt", "Just text"); 

    // очень просто считывает текст из файла
    // echo file_get_contents("a.txt");

    // проверва на существование файла
    // echo file_exists("a.txt");

    // переименовывает файл
    // rename("a.txt", "new_name.txt");
    
    // удаляет файл
    // unlink("text.txt");

    // выводит права доступа
    // echo fileperms(__FILE__);

    // меняет права доступа
    // chmod(__FILE__, 07717);

    // echo '<pre>';
    // print_r($_SERVER);
    // echo '</pre>';

    // выводит url адрес
    // echo $_SERVER["HTTP_HOST"].' - '.$_SERVER["REQUEST_URI"];

    // выводит инфу о системе
    // echo $_SERVER['HTTP_USER_AGENT'];
    
    // отправка сообщения по почте
    /*
    $message = "сообщение";
    $to = "kk9162021@mail.ru";
    $from = "kk9162021@gmail.com";
    $subject = "Тема сообщения";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
    mail($to, $subject, $message, $headers); 
    */

    require "blocks/footer.php";
?>