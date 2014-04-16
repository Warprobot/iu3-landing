<?php
    file_download('perevod.xlsx');
    header ("Location: http://iu3-50.ru");

    function file_download($filename) {
      if (file_exists($filename)) {
        header('Location: ' . $filename);
      } else {
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        header('Status: 404 Not Found');
      }
      exit;
    }
?>
