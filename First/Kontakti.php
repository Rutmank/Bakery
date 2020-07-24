<?php session_start(); ?>
<?php require "db.php"?>
<!Doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"> <!-- кодировка-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- сжатие сайта для мобильных устройств -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- адаптивность под браузер Edge ( оптимизация, не существенно ) -->
    <link rel="stylesheet" href="styles/style.css"> <!-- ссылка на папку со стилями -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!-- ссылка на стили -->
    <title>Kontakti</title> <!-- Имя вкладки -->
</head>
<body>
<div>


    <?php require "blocks/header.php" ?> <!-- подключаем шапку из файла -->
    <div class="container mt-5"> <!-- контейнер выравнивает по центру, mt делает отступы -->
        <h3>Informācija par mums</h3>

        <p style='font-size:20px ; font-weight:100; font-family: Geneva, Arial, Helvetica, sans-serif;'>Mēs pastāvam vairākus gadus, un mūsu maizes ceptuve ražo tikai augstākās kvalitātes produktus. Ja jums ir jautājumi, varat sazināties ar mums pa e-pastu: rutmank@yandex.ru</p>
    </div>
    <?php require "blocks/footer.php" ?> <!-- подключаем шапку из файла -->



</body>
</html>