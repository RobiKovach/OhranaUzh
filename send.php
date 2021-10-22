<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$message = trim($message);




mail('ohorona.uzh@gmail.com', 'Заявка з сайта', ' ФІО:'.$name.', E-mail: '.$email. ', Телефон:'.$phone. ',Послуга:'.$message.', Від: admin@ohorona.uz.ua ');

if (mail('ohorona.uzh@gmail.com', 'Заявка з сайта', ' ФІО:'.$name.', E-mail: '.$email. ', Телефон:'.$phone. ',Послуга:'.$message.', Від: admin@ohorona.uz.ua '));
 { 
    echo "сообщение успешно отправлено"; 
} 


?>