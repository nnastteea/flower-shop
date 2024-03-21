<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../лаб78/style.css">
    <title>Корзина</title>
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
           <p style="margin-top:30px"> <a href="../лаб78/index.php" style="font-size:20px; color:black; font-weight:bold; margin-left:180px">Главная ·</a><span style="color:rgb(126, 126, 126)"> Корзина</span></p>
           <p style="font-size:32px; font-weight:bold; margin-left:180px; margin-top:20px">Корзина</p>
           <div class="korz-vyvod-header decor-text">
  <p>Товар</p>
  <p class="korz-left">Цена за штуку</p>
  <p >Количество</p>
  <p>Стоимость</p>
</div>
           <?php
session_start();

// Проверяем, есть ли товары в корзине
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) === 0) {
  echo '<p style="font-size:24px; text-align:center; margin-top:90px">Ваша корзина пуста.</p>';
  exit();
}

// Обработка нажатия кнопки "Убрать"
if (isset($_POST['remove_item'])) {//была ли отправлена форма
  $item_id = $_POST['item_id'];//забираем айди который нужно удалить

  // Удаляем товар из корзины по его ID
  if (isset($_SESSION['cart'][$item_id])) {
    unset($_SESSION['cart'][$item_id]);
  }
}
?>
<div style="display:block; box-sizing:inherit">
<div class="korz-vyvod-header1">
  <?php
  foreach ($_SESSION['cart'] as $item_id => $item) {
    echo '<div class="product">';
    echo '<img style="width: 160px; height: auto; " src="' . $item['image'] . '">';
    echo '<p class="product-name cent">' . $item['name'] . '</p>';
    echo '<p class="product-price cent">' . $item['price'] . ' BYN</p>';
    $quantity = isset($item['quantity']) ? $item['quantity'] : 1;
    echo '<p class="cent"> ' . $quantity . '</p>';
    echo '<p class="cent"> ' . $item['total_price'] . ' BYN</p>';
    echo '</div>';
  }
  ?>
</div></div>

    <form method="post" action="cart.php">
    <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
    <input type="submit" class="top-btn2" name="remove_item" value="Убрать">
  </form>
<div style="margin-left:45%;">
  <form action="order.php" method="get">
  <input type="submit" class="of-zakaz" value="Оформить заказ">
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
