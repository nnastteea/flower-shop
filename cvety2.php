<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../лаб78/style.css">
    <title>Кустовые розы</title>
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
           <p style="margin-top:30px"> <a href="../лаб78/index.php" style="font-size:20px; color:black; font-weight:bold; margin-left:180px">Главная ·</a><span style="color:rgb(126, 126, 126)"><a href="../лаб78/cvety.php" style="color:rgb(126, 126, 126)" > Цветы</a> · Кустовые розы</span></p>
           <div class="prosmotr">
        <div class="left-part"><img src="../лаб78/flower4.jpg" width="380" height="auto"></div>
        <div class="right-part">
            <p class="zagl2">Кустовые розы</p><br><span class="zagl3">8 BYN.</span><br><br>
        <br>
        <form method="post" action="add-to-cart.php">
        <input type="hidden" name="id" value="2">
        <input type="hidden" name="name" value="Кустовая роза">
        <input type="hidden" name="price" value="8">
        <input type="hidden" name="image" value="../лаб78/flower4.jpg">
        <label for="flower_quantity" style="font-size:20px;">Количество цветов:</label>
        <br>
  <input type="number" id="flower_quantity" name="flower_quantity" style="height: 20px;width: 180px;border: 2px solid rgb(176, 176, 176); margin-bottom:20px; margin-top:10px" min="1" required>
  <br>
            <button type="submit" class="top-btn1">В корзину</button>
        </form>
            <br><br><br>
            <p style="font-size:22px; color:black; font-weight:bold; margin-left:10px">Описание</p>
        <hr>
        <p style="font-size:20px">Наличие расцветок уточняйте у флористов по номеру <span style="color:rgb(235, 124, 146)">+375 (хх) хх-хх-ххх</span>. <br>Минимальный заказ от 5 штук.
    <br><br>
Выберите как запоковать ваш букет:
<a href="../лаб78/lenta.php" class="ssylka">Ленточка</a><br>
<a href="../лаб78/bymaga.php" class="ssylka">Крафт бумага</a></p>
        </div>
</div>
<br><br>
<p class="zagl4">С этим часто покупают</p>
<div class="tp-b"><div class="top-byk2">
<div class="tabl"><img src="https://static.insales-cdn.com/images/products/1/4279/396701879/large_photo_2021-01-15_21-42-19.jpg" width="250" height="340"><br><br>Лента атласная<br>1 BYN.<br><br> <a href="../лаб78/lenta.php" class="top-btn">Посмотреть</a></div>
        <div class="tabl"><img src="https://static.insales-cdn.com/images/products/1/4698/396702298/large_IMG_4221.PNG" width="250" height="340"><br><br>Крафтовая бумага<br>2 BYN.<br><br> <a href="../лаб78/bymaga.php" class="top-btn">Посмотреть</a></div>
        <div class="tabl"><img src="../лаб78/misha2.jpg" width="250" height="340"><br><br>Плюшевый мишка 30см<br>80 BYN.<br><br> <a href="../лаб78/misha2.php" class="top-btn">Посмотреть</a></div>
</div></div>
<br><br><hr>
<footer>
    <div class="footer">
        <div class="left-footer"><span  style="font-size:24px;font-weight:bold; margin-left:25px">Sun&Bloom</span><br><br>Часы приема заказов: <br> ПН-ПТ: 08:00 - 22:00<br> СБ-ВС: Круглосуточно</div>
        <div class="right-footer">
            <a href="../лаб78/vse-tovary.php" class="footer-ssylka">Каталог</a><br>
            <a href="../лаб78/cart.php" class="footer-ssylka">Корзина</a><br>
            <a href="#topB" class="footer-ssylka">Популярные букеты</a><br>
            <a href="" class="footer-ssylka">Сделать заказ</a>
        </div>
    </div>
</footer>
</body>
</html>