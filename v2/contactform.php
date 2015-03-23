<?php header("Content-Type: text/html; charset=utf-8");

$post = (!empty($_POST)) ? true : false;

if($post)
{
$email = trim($_POST['email']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$error = '';

if(!$name)
{
$error .= 'Пожалуйста введите ваше имя.<br />';
}

// Check email
function ValidateEmail($value)
{
$regex = '|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i';

if($value == '') {
return false;
} else {
$string = preg_replace($regex, '', $value);
}

return empty($string) ? true : false;
}

if(!$email)
{
$error .= 'Пожалуйста введите e-mail.<br />';
}

if($email && !ValidateEmail($email))
{
$error .= 'Введите корректный e-mail.<br />';
}

// Check message (length)

if(!$message || strlen($message) < 1)
{
$error .= "Введите ваше сообщение.<br />";// В этой строчке ставиться минимальное ограничение на написание букв.
}
if(!$error)
{
$mail = mail("anton@byehard.com", $subject, $message,
"From: ".$name." <".$email.">rn"
."Reply-To: ".$email);
if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>