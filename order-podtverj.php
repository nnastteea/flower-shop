<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../лаб78/style.css">
    <title>Подтверждение заказа</title>
</head>
<body>
<div class="start-container">
        <div class="header-container">
        <div class="header-phone"><a href="../лаб78/dostavka-info.php" class="dost">Доставка</a> цветов по Витебску +375(xx)xx-xx-xxx</div>
        <a href="../лаб78/cart.php" class="korz"><img src="../лаб78/free-icon-basket-7087821.png" width="20px" height="auto"></a>
        </div><hr>
        <div class="container1">
            <div class="dropdown"><a href="../лаб78/vse-tovary.php" class="catalog cn1">КАТАЛОГ</a>
        <div class="dropdown-content">
            <a href="../лаб78/vse-tovary.php">Все товары</a>
            <a href="../лаб78/cvety.php">Цветы</a>
            <a href="../лаб78/byket.php">Букеты</a>
            <a href="../лаб78/komposiciya.php">Композиции</a>
            <a href="../лаб78/podarki.php">Подарки</a>
        </div></div>
            <a href="../лаб78/index.php" class="logo cn3">Sun&Bloom</a>
           <div class="start-social cn2"> <a href="https://www.instagram.com/" target="_blank"><img src="https://oddechcynamonu.pl/wp-content/uploads/2019/05/icons8-instagram.svg" width="30px" height="auto" class="inst1"></a>
            <a href="https://www.facebook.com/?locale=ru_RU" target="_blank"><img src="https://oddechcynamonu.pl/wp-content/uploads/2019/05/icons8-facebook.svg" width="30px" height="auto" class="faceb1"></a>
           </div></div></div>
           <br><br><hr>
           <p style="margin-top:30px"> <a href="../лаб78/index.php" style="font-size:20px; color:black; font-weight:bold; margin-left:180px">Главная ·</a><span style="color:rgb(126, 126, 126)"> Вывод информации о заказе (содержимое файла)</span></p>
           <p style="font-size:32px; font-weight:bold; margin-left:180px; margin-top:20px">Вывод информации о заказе (содержимое файла)</p>
           <?php
include 'file_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
  // Получаем данные из формы
  $lastname = $_POST['lastname'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $adress = $_POST['adress'];
  $payment = $_POST['payment'];
  $order_details = $_POST['order_details'];
  $order_total = $_SESSION['order_total'];
  $delivery_price = $_SESSION['delivery_price'];
  $price = $_SESSION['price'];
  // Сохраняем данные пользователя в файл
  saveUserDataToFile($lastname,$name, $phone, $adress, $payment, $order_total, $delivery_price,$price, $order_details);

  // Перенаправляем пользователя на страницу подтверждения заказа
  header('Location: order-podtverj.php');
  exit;
}
?>
<p>Содержимое файла:</p>
<?php displayFileContents('user_data.txt'); ?>
<br><br><hr>
<footer>
    <div class="footer">
        <div class="left-footer"><span  style="font-size:24px;font-weight:bold; margin-left:25px">Sun&Bloom</span><br><br>Часы приема заказов: <br> ПН-ПТ: 08:00 - 22:00<br> СБ-ВС: Круглосуточно</div>
        <div class="right-footer">
            <a href="../лаб78/vse-tovary.php" class="footer-ssylka">Каталог</a><br>
            <a href="../лаб78/cart.php" class="footer-ssylka">Корзина</a><br>
            <a href="../лаб78/index.php" class="footer-ssylka">Популярные букеты</a><br>
            <a href="" class="footer-ssylka">Сделать заказ</a>
        </div>
    </div>
</footer>
</body>
</html>