<?php
//Принимаем постовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
//Адрес ящика
$to="alex-keyer@mail.ru";
//Само сообщение
$subject="Заявка с сайта жалюзи";
$message="
Письмо отправлено из мой формы.<br>
Пользователь хочет: ".htmlspecialchars($what)."<br>
Имя: ".htmlspecialchars($name)."<br>
Телефон: ".htmlspecialchars($phone);
$headers = "From: mysite.ru <site-email@mysite.ru>/
\r\nContent-type: text/html;
	charset=utf8 \r\n";
mail($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>
