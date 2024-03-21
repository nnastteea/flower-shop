<?php function saveUserDataToFile($lastname,$name, $phone, $adress, $payment, $order_total, $delivery_price,$price, $order_details)
{
  $data = "Фамилия: " . $lastname . "\n";
  $data .= "Имя: " . $name . "\n";
  $data .= "Телефон: " . $phone . "\n";
  $data .= "Адрес: " . $adress . "\n";
  $data .= "Способ оплаты: " . $payment . "\n";
  $data .= "Сумма заказа: " . $order_total . "\n";
  $data .= "Цена доставки: " . $delivery_price . "\n";
  $data .= "Общая сумма заказа: " . $price . "\n";
  $data .= "Информация о заказе: " . $order_details . "\n\n";

  file_put_contents('user_data.txt', $data, FILE_APPEND);
}
function displayFileContents($filename) {
  $contents = file_get_contents($filename);
  echo nl2br($contents); // Выводим содержимое файла с сохранением переносов строк
}
?>