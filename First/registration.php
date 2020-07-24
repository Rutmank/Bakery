<?php session_start(); ?>
<?php require "db.php"?>
<!Doctype html>
<html lang="lv" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"> <!-- кодировка-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- сжатие сайта для мобильных устройств -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- адаптивность под браузер Edge ( оптимизация, не существенно ) -->

    <link rel="stylesheet" href="styles/style.css"> <!-- ссылка на папку со стилями -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!-- ссылка на стили -->

    <title>Registracija</title> <!-- Имя вкладки -->
</head>

<?php require "blocks/header.php" ?>


<html>
<div class="container mt-5">
<body>

<p style="margin: 50px 0px 0px 0px;">Autorizācija:</p>
<form action="registration.php" method="post" >
    <input name="login" placeholder="Login" class="form-control" >
    <input type="password" name="password" placeholder="Parole" class="form-control">
    <button type="submit" name="do_login" class="btn btn-outline-primary">Piesakieties</button>
</form>


<?php
$data = $_POST;
if ( isset($data['do_login']))
//авторизация
{
    $errors = array();
    $user = R::findOne("users", "login = ?", array($data["login"]));
    if( $user )
    {
        if( password_verify($data['password'], $user->password))
        {
            $_SESSION['logged_user'] = $user; // запоминание пользователя
            echo '<div style="color: green;">Jūs esat veiksmīgi pieteicies!<br>
Jūs varat doties uz <a href="/First/index.php">mājas</a> lapu!</div><hr>';
        }else
        {
            $errors[] = 'Nederīga parole';
        }
    } else
    {
        $errors[] ="Lietotājs ar šādu loginu nav atrasts";
    }

    if( empty($errors))
    {
        // все отлично
    } else
    {
        echo '<div style="color: red;">'.array_shift($errors).'</div>';
    }



}
?>



<p style="margin: 50px 0px 0px 0px;">Reģistrācija:</p>
<form action="registration.php" method="post">
    <input name="login" placeholder="Login" class="form-control">
    <input type="password" name="password" placeholder="Parole" class="form-control">
    <button type="submit" name="do_signup" class="btn btn-outline-primary">Reģistrējieties</button>
</form>
</body>
</html>

<?php
$data = $_POST;
// В супермассиве пост появляются все данные формы
if ( isset($data['do_signup']))
{$errors = array();
    if( trim($data['login']) == "")
    {$errors[] = "Ievadiet loginu";}
    if( $data['password'] == "")
    {$errors[] = "Ievadiet paroli";}
    if( R::count("users", "login = ?", array($data['login'])) > 0 ) // ограничение по количеству одинаковых логинов
    {$errors[] = "Šī login jau ir veikta!";}
    if( empty($errors))
    {//  REDBEAN регистрация в базу
        $user = R::dispense('users');
        $user->login=$data["login"];
        $user->password = password_hash ($data ['password'], PASSWORD_DEFAULT); // шифрование пароля
        R::store($user);
        echo '<div style="color: green;">Jūs veiksmīgi reģistrējāties</div>';
    } else
    {echo '<div style="color: red;">'.array_shift($errors).'</div>';}
}
?>






<?php require "blocks/footer.php" ?>