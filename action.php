<?php
    file_download('perevod.xlsx');
    header ("Location: http://iu3-50.ru");

    function file_download($filename) {
    // Проверяем существование файла
      if (file_exists($filename)) {
    // Здесь пишем код, который будет обрабатывать каждую загрузку файла.

    //  Перенаправляем клиента на файл.
        header('Location: ' . $filename);
      } else {
    // Если файл не найден, сообщаем клиенту об этом через заголовки HTTP
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        header('Status: 404 Not Found');
      }
    // Прерываем дальнейшее выполнение скрипта, чтобы не отправлять мусор в ответе клиенту
      exit;
    }
?>
