<?php
session_start();

// Получение данных товара из $_POST
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$flower_quantity = $_POST['flower_quantity'];

// Проверяем, указано ли количество товара
if (empty($flower_quantity) || $flower_quantity <= 0) {
  $flower_quantity = 1; // Устанавливаем количество по умолчанию равным 1
}

// Вычисляем общую сумму
$total_price = $price * $flower_quantity;


// Создание массива с информацией о товаре
$item = [
  'id' => $id,
  'name' => $name,
  'price' => $price,
  'image' => $image,
  'quantity' => $flower_quantity,
  'total_price'=>$total_price
];

// Добавление товара в корзину в сессии
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = []; // Если корзина не существует, создаем новую
}

$_SESSION['cart'][] = $item; // Добавляем товар в корзину

// Перенаправление обратно на страницу, откуда был отправлен запрос
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>