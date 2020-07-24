<?php session_start(); ?>
<?php require "db.php"?>
<!Doctype html>
<html lang="lv" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"> <!-- кодировка-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- сжатие сайта для мобильных устройств -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- адаптивность под браузер Edge ( оптимизация, не существенно ) -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="styles/style.css">  <!-- ссылка на папку со стилями -->

</head>
<?php require "blocks/header.php" ?>



<body>
<div id="gall">
    <img src="img/7.jpg" tabindex="0" border="3"/>
    <img src="img/6.jpg" tabindex="0" border="3"/>
    <img src="img/4.jpg" tabindex="0" border="3" />
    <img src="img/3.jpg" tabindex="0" border="3"/>
    <img src="img/8.jpg" tabindex="0" border="3"/>
    <div></div>
</div>
</body>



<?php require "blocks/footer.php" ?>