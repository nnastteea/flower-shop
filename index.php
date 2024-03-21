<?php
include 'file_functions.php';

$counter_file = 'counter.txt';

if (!file_exists($counter_file)) {
  file_put_contents($counter_file, '0');
}

$counter = (int)file_get_contents($counter_file);
$counter++;
file_put_contents($counter_file, (string)$counter);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../лаб78/style.css">
    <title>Интернет магазин цветов</title>
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
           </div></div>
        <div class="container2">
            <div class="bg">
            <p class="start-text">Подарите приятные эмоции <br> своему любимому человеку.</p>
            <p class="start-text1">Доставка цветов и букетов в течение часа</p>
            <div class="start-btn">
                <a href="../лаб78/byket.php" class="s-btn1">Букеты</a>
                <a href="../лаб78/komposiciya.php" class="s-btn2">Композиции</a>
                <a href="../лаб78/podarki.php" class="s-btn3">Подарки</a>
            </div>
        </div> </div>
    </div>

    <div class="about-work">
        <div class="about1"><p class="cl-pink">Сделаем красиво</p>Опытные флористы учтут все<br> пожелания</div>
        <div class="about2"><p class="cl-pink">Доставим бесплатно</p>При заказе на сумму от 60<br> рублей</div>
        <div class="about3"><p class="cl-pink">Доставим быстро</p>Составим букет и привезем <br>до двери в течение часа</div>
    </div>
    <p class="zagl" id="topB">Самые популярны букеты</p>
<div class="tp-b"><div class="top-byk">
        <div class="tabl"><img src="https://flowersandpowers.nl/wp-content/uploads/2023/10/The-Blues-L.jpg" width="250" height="auto"><br><br>Блюз<br>110 BYN. <br><br> <a href="../лаб78/bluz.php" class="top-btn">Посмотреть</a></div>
        <div class="tabl"><img src="https://flowersandpowers.nl/wp-content/uploads/2023/10/The-Pretty-in-Pink-L.jpg" width="250" height="auto"><br><br>Милашка в розовом<br>110 BYN. <br><br> <a href="../лаб78/mil-v-roz.php" class="top-btn">Посмотреть</a></div>
        <div class="tabl"><img src="https://flowersandpowers.nl/wp-content/uploads/2023/10/The-Peach-Perfect-L.jpg" width="250" height="auto"><br><br>Идеальный персик<br>110 BYN. <br><br> <a href="../лаб78/persik.php" class="top-btn">Посмотреть</a></div>
        <div class="tabl"><img src="https://flowersandpowers.nl/wp-content/uploads/2023/10/The-Gorgeous-Greens-L.jpg" width="250" height="auto"><br><br>Великолекная зелень<br>110 BYN.<br> <br> <a href="../лаб78/zelen.php" class="top-btn">Посмотреть</a></div>
</div></div>
<p class="zagl">Собери свой идеальный букет</p>
<div class="centr"><a href="../лаб78/cvety.php" class="sobr">Собрать</a></div>
<p class="zagl">Добро пожаловать в Sun&Bloom!</p>
<div class="info1"><span class="cl-pink1">Sun&Bloom</span> — ваш надежный партнер на всех жизненных торжествах. От свадеб и рождений до выпускных вечеров и новых домов — мы предлагаем широкий выбор цветочных 
    композиций на любой случай. Выбирайте из палитры цветов и стилей, чтобы найти идеальную композицию, которая с изяществом и элегантностью передаст ваши чувства.
<br><span class="cl-pink1">Sun&Bloom</span> — это больше, чем просто цветочный магазин; мы ваш партнер в праздновании драгоценных моментов жизни. Если вам нужно отправить цветы в Витебске, вы можете доверить 
нам доставку красоты и элегантности всегда вовремя. 
</div>
<hr>
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
<div class="ustala">честно, я не верю, что это закончу когда-нибудь<br><p>Счетчик посещений: <?php echo $counter; ?></p></div>
</body>
</html>