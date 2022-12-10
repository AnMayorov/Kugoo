
<?php
$user_mail = htmlspecialchars($_POST["usermail"]);
$user_phone = htmlspecialchars($_POST["userphone"]);
// $se_arch = htmlspecialchars($_POST["searchform"]);

$token = "5402356824:AAFiCPd48QOWjKPuuqIj5IOGk3U0cGxyh4A";
$chat_id = "-893163508";
$formData = array(
  "Почта: " => $user_mail,
  "Телефон: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}

