<?php
$token = '5630480131:AAFy79smi6Kk6mMbORL3p-dHkMTYgUgXf3U';
$chat_id = '-1001615054936';
if (isset($_GET['name']) && !empty($_GET['name']))
$txt .= "Имя: " . strip_tags(trim(urlencode($_GET['name']))) . "%0A";
if (isset($_GET['surname']) && !empty($_GET['surname']))
$txt .= "Фамилия: " . strip_tags(trim(urlencode($_GET['surname']))) . "%0A";
if (isset($_GET['telegram']) && !empty($_GET['telegram']))
$txt .= "Телеграм: " . strip_tags(trim(urlencode($_GET['telegram']))) . "%0A";
if (isset($_GET['instagram']) && !empty($_GET['instagram']))
$txt .= "Инстаграм: " . strip_tags(trim(urlencode($_GET['instagram']))) . "%0A";
if (isset($_GET['link']) && !empty($_GET['link']))
$txt .= "Макет: " . strip_tags(trim(urlencode($_GET['link']))) . "%0A";
if (isset($_GET['textarea']) && !empty($_GET['textarea']))
$txt .= "Дополнитель: " . strip_tags(trim(urlencode($_GET['textarea']))) . "%0A";



$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>