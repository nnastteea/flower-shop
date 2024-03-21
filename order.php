<?php
session_start();

// Получение данных из сессии
$cart = $_SESSION['cart'];

// Расчет общей суммы заказа
$order_total = 0;
foreach ($cart as $item) {
  $order_total += $item['total_price'];
}

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Получаем данные из формы
  $lastname = $_POST['lastname'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $adress = $_POST['adress'];
  $payment = $_POST['payment'];
  $order_details = $_POST['order_details'];
}

// функции для вычисления цены доставки
function calculateDeliveryPrice($total_price) {

  if ($total_price >= 60) {
    $delivery_price = 0;
  } else {
    $delivery_price = 5;
  }

  return $delivery_price;
}
$delivery_price=calculateDeliveryPrice($order_total);
$price =$order_total + $delivery_pricee;
$_SESSION['order_total'] = $order_total;
$_SESSION['delivery_price'] = $delivery_price;
$_SESSION['price'] = $price;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../лаб78/style.css">
    <title>Оформление заказа</title>
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
           <p style="margin-top:30px"> <a href="../лаб78/index.php" style="font-size:20px; color:black; font-weight:bold; margin-left:180px">Главная ·</a><span style="color:rgb(126, 126, 126)"> Оформление заказа</span></p>
           <p style="font-size:32px; font-weight:bold; margin-left:180px; margin-top:20px">Оформление заказа</p>
           <div style="margin-left:180px;margin-top:20px;">
           <form action="order-podtverj.php" method="post">
  <label style="font-size:20px;" for="lastname">Ваша фамилия</label><br>
  <input class="inp-zakaz" type="text" id="lastname" name="lastname" placeholder="введите фамилию.." required><br>
  <label style="font-size:20px;" for="name">Ваше имя</label></br>
  <input class="inp-zakaz" type="text" id="name" name="name" placeholder="введите имя.." required><br>

  <label style="font-size:20px;" for="phone">Телефон</label><br>
  <input class="inp-zakaz" type="text" id="phone" name="phone" placeholder="+375(хх)ххххххх" required><br>

  <label style="font-size:20px;" for="adress">Адрес получателя</label></br>
  <input class="inp-zakaz" type="text" id="adress" name="adress" placeholder="ул. д. к." required><br>

  <label style="font-size:20px;" for="payment">Способ оплаты:</label>
  <select class="inp-zakaz1" id="payment" name="payment" required>
    <option value="наличные">Наличными</option>
    <option  value="карта">Картой</option>
    <option  value="ЕРИП">ЕРИП</option>
  </select><br>
  <p style="font-size:20px; margin-bottom:10px" id="order_total">Сумма заказа: <?php echo $order_total; ?> BYN</p>
  <p style="font-size:20px;margin-bottom:10px" for="delivery_price" id="delivery_price">Цена доставки с учетом суммы заказа: <?php echo $delivery_price; ?> BYN</p>
  <p style="font-size:20px; margin-bottom:10px" id="price">Общая сумма заказа: <?php echo $price; ?> BYN</p>
  <label style="font-size:20px;" for="order_details">Комментарий к заказу:</label><br>
  <textarea class="inp-zakaz" id="order_details" name="order_details"></textarea><br>
  <input class="of-zakaz1 centrr" type="submit" value="Заказать" formaction="../лаб78/order-podtverj.php">
</form></div>
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