<?php
$token = '5630480131:AAFy79smi6Kk6mMbORL3p-dHkMTYgUgXf3U';
$chat_id = '-1001615054936';
if (isset($_POST['name']) && !empty($_POST['name']))
$txt .= "Имя: " . strip_tags(trim(urlencode($_POST['name']))) . "%0A";
if (isset($_POST['surname']) && !empty($_POST['surname']))
$txt .= "Фамилия: " . strip_tags(trim(urlencode($_POST['surname']))) . "%0A";
if (isset($_POST['telegram']) && !empty($_POST['telegram']))
$txt .= "Телеграм: " . strip_tags(trim(urlencode($_POST['telegram']))) . "%0A";
if (isset($_POST['instagram']) && !empty($_POST['instagram']))
$txt .= "Инстаграм: " . strip_tags(trim(urlencode($_POST['instagram']))) . "%0A";
if (isset($_POST['link']) && !empty($_POST['link']))
$txt .= "Макет: " . strip_tags(trim(urlencode($_POST['link']))) . "%0A";
if (isset($_POST['textarea']) && !empty($_POST['textarea']))
$txt .= "Дополнитель: " . strip_tags(trim(urlencode($_POST['textarea']))) . "%0A";



$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>