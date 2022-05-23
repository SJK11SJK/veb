<?php
$login = filter_var(trim($_POST ['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST ['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST ['pass']), FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
  echo "Недопустима довжина логіна";
  exit();
}else if (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
  echo "Недопустима довжина імені";
  exit();
}else if (mb_strlen($pass) < 6 || mb_strlen($pass) > 90) {
  echo "Недопустима довжина пароля";
  exit();
}

$pass = md5($pass."rssvsdvd32145");

$mysql = new mysqli('localhost' ,'root' ,'root' ,'register-bd');
$mysql->query("INSERT INTO `users` ( `login`, `pass`, `name`) VALUES ('$login','$pass','$name')");
$mysql->close();

header('Location: /registration.php')
 ?>
