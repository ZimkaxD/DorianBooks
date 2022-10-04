<?php

    $data = date("Y-m-d"); 
    $email=filter_var(trim($_POST['email']),FILTER_VALIDATE_EMAIL);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_SPECIAL_CHARS);
    $passwordrepeat = filter_var(trim($_POST['password-repeat']),FILTER_SANITIZE_SPECIAL_CHARS);
    if (strlen($email)<9 || strlen($email)>90)
    {
        echo("Недопустимая почта");
        exit();
        if(!$email)
        {   
            echo ("Недопустимая почта");
            exit();
        }
    }
    else if(strlen($password)<6|| strlen($password)>16)
    {
        echo("Пароль должен быть от 6 до 16 символов");
        exit();
    }
    else if(strlen($passwordrepeat)<6|| strlen($passwordrepeat)>16)
    {
        echo("Пароль должен быть от 6 до 16 символов");
        exit();
    }
    if($password==$passwordrepeat && $email)
    {
        echo ("Регистрация пройдена успешно");
    }
    if($password!==$passwordrepeat)
    {
        echo ("Повторный пароль введёт неверно");
        exit();
    }

    $password = md5($password."DorianHash32y6wre3d2q");
    $passwordrepeat=$password;

    $mybd=new mysqli("localhost","ZimkaAdminBooks","DorianBooksAdminPassword","dorian");
    $mybd->query("INSERT INTO `member` (`email`,`password`,`passwordrepeat`,`data`)
    VALUES('$email','$password','$passwordrepeat','$data')");

    $mybd->close();


    header("Location: /Войти.php ");

?>
