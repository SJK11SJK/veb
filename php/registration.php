<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Реєстрація</title>
</head>
  <body>
<div class="container mt-4">
  <?php
if ($_COOKIE['user'] == ''):
   ?>
  <div class="row">
    <div class="col">
      <h1>Реєстрація</h1>
    <form  action="/chek.php" method="post">
      <input type="text" class="form-control" name="login" id="login"
      placeholder="Введіть логін"><br>
      <input type="text" class="form-control" name="name" id="name"
      placeholder="Введіть імя"><br>
      <input type="password" class="form-control" name="pass" id="pass"
      placeholder="Введіть пароль"><br>
      <button class="btn btn-success" type="submit">Зареєструватися</button>
    </form>
      </div>
    <div class="col">
      <h1>Авторизація</h1>
      <form  action="/aut.php" method="post">
        <input type="text" class="form-control" name="login" id="login"
        placeholder="Введіть логін"><br>
        <input type="password" class="form-control" name="pass" id="pass"
        placeholder="Введіть пароль"><br>
        <button class="btn btn-success" type="submit">Авторизуватися</button>
      </form>
      </div>
    <?php else: ?>
      <p>Привіт <?=$_COOKIE['user']?>.Щоб вийти нажміть<a
         href="/exit.php"> тут</a>.</p>
    <?php endif; ?>
    </div>
  </div>
  </body>
</html>
