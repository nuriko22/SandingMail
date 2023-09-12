<?php 
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (trim($name) == '')
        echo "Вы не ввели имя пользователя";
    else if (strlen(trim($name)) <= 1)
        echo "Не допустимое имя";
    else if (trim($email) == "" || trim($pass) == "" || trim($_POST['message']) == "")
        echo "Введите все данные";
    else {
        
        header('Location: about.php');
        exit;
    }
?>