<?php

/* https://api.telegram.org/bot5540904676:AAGOS6f6-BnbfLd5V-3mnrxRAxYbqgq_gKg/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$token = "5540904676:AAGOS6f6-BnbfLd5V-3mnrxRAxYbqgq_gKg";
$chat_id = "-1001876966343";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram ) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>