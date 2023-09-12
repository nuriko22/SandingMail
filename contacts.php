<?php 
    session_start();
    $title = "Contacts";
    require "blocks/header.php";
    if (!isset($_SESSION['user_name']) || !isset($_SESSION['email']) || !isset($_SESSION['subject']) || !isset($_SESSION['message'])){
        $_SESSION['user_name'] = "";
        $_SESSION['email'] = "";
        $_SESSION['subject'] = "";
        $_SESSION['message'] = "";
        $_SESSION['error_username'] = "";
        $_SESSION['error_email'] = "";
        $_SESSION['error_subject'] = "";
        $_SESSION['error_message'] = "";
        $_SESSION['success_mail'] = "";
    }
?>
<h1 class="mt-5">Contacts</h1>

<div class="text-success"><?=$_SESSION['success_mail']?></div>

<form action="check_contact.php" method="post">
    <div class="text-danger"><?=$_SESSION['error_username']?></div>
    <input type="text" name="username" value="<?=$_SESSION['user_name']?>" placeholder="Введите имя" class="form-control"><br>
    <div class="text-danger"><?=$_SESSION['error_email']?></div>
    <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Введите email" class="form-control"><br>
    <div class="text-danger"><?=$_SESSION['error_subject']?></div>
    <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Тема собщения" class="form-control"><br>
    <div class="text-danger"><?=$_SESSION['error_message']?></div>
    <textarea name="message" placeholder="Введите сообщение" class="form-control"><?=$_SESSION['message']?></textarea><br>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>
<?php
    require "blocks/footer.php";
?>
