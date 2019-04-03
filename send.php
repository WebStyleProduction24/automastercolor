<?php 
header('Content-Type: text/html; charset=utf-8');

header('Refresh: 5; URL=/'); 



if (isset($_POST['your-name'])) {$name = $_POST['your-name'];}
if (isset($_POST['your-email'])) {$email = $_POST['your-email'];}
if (isset($_POST['your-tel'])) {$tel = $_POST['your-tel'];}
if (isset($_POST['your-message'])) {$message = $_POST['your-message'];}
if (isset($_POST['formData'])) {$formData = $_POST['formData'];}

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$message = htmlspecialchars($message);
$formData = htmlspecialchars($formData);

$name = urldecode($name);
$email = urldecode($email);
$tel = urldecode($tel);
$message = urldecode($message);
$formData = urldecode($formData);

$name = trim($name);
$email = trim($email);
$tel = trim($tel);
$message = trim($message);
$formData = trim($formData);

if (mail("xaychencko@yandex.ru", $formData, "Имя:".$name.".\r\nE-mail: ".$email.".\r\nТелефон: ".$tel.".\r\nКомментарий: ".$message ,"From: admin@automastercolor.ru \r\n"))
{ 
	echo "Сообщение успешно отправлено.<br>"; 
} else { 
	echo "При отправке сообщения возникли ошибки.<br>"; 
};

echo 'Через 5 сек. вы будете перенаправлены на <a href="/">главную страницу</a> сайта.';
exit();



