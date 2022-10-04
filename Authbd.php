<?php

$email=filter_var(trim($_POST['email']),FILTER_VALIDATE_EMAIL);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_SPECIAL_CHARS);

$password = md5($password."DorianHash32y6wre3d2q");

$mybd=new mysqli("localhost","ZimkaAdminBooks","DorianBooksAdminPassword","dorian");


$auth=$mybd->query("SELECT `email` , `password`  FROM `member` WHERE `email`='$email' AND `password`='$password'");
$memberbd=$auth->fetch_assoc();
if(count($memberbd)==0)
{
    echo "Такого пользователя не существует";
    exit();
}

else
{
    setcookie("memberbd", $memberbd["email"], time() + 3600*24*30,"/");
}



$mybd->close();


header("Location: /index2.php ");


?>