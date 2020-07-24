<?php session_start(); ?>
<?php require "db.php"?>
<!Doctype html>
<html lang="lv" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"> <!-- кодировка-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- сжатие сайта для мобильных устройств -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- адаптивность под браузер Edge ( оптимизация, не существенно ) -->


      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!-- ссылка на стили -->
    <link rel="stylesheet" href="styles/style.css"> <!-- ссылка на папку со стилями -->
    <title>Mājas lapa</title> <!-- Имя вкладки -->
</head>

<body></body>

<div>

    <?php require "blocks/header.php" ?> <!-- подключаем шапку из файла -->

    <?php if (isset($_SESSION['logged_user'])) : ?>
        <h3>Jūs esat pieteicies kā lietotājs <?php echo $_SESSION['logged_user']->login; ?></h3> <br>
        <a class="btn btn-outline-primary" href="logout.php">Izeja</a>
    <?php endif; ?>



    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Maigais Kēkss</h1>
            <img src="img/7.jpg" class="img-thumbnail">
            <p class="lead font-weight-normal">3.99€</p>
          <!--  <a class="btn btn-outline-primary" href="#">Жми!</a> -->
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Gaisa bezē</h1>
            <img src="img/8.jpg" class="img-thumbnail">
            <p class="lead font-weight-normal">6.99€</p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Klasiskā сiabatta</h1>
            <img src="img/3.jpg" class="img-thumbnail">
            <p class="lead font-weight-normal">4.49€</p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Krēmveida kruasāns</h1>
            <img src="img/4.jpg" class="img-thumbnail">
            <p class="lead font-weight-normal">0.99€</p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Pīrādziņš ar avenēm</h1>
            <img src="img/5.jpg" class="img-thumbnail">
            <p class="lead font-weight-normal">1.99€</p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Smilšu ķiršu siera kūka</h1>
            <img src="img/6.jpg" class="img-thumbnail">
            <p class="lead font-weight-normal">3.99€</p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>



    </div>

</body>

<?php require "blocks/footer.php" ?> <!-- подключаем шапку из файла -->


 </html>