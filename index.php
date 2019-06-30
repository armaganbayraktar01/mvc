<?php
    require __DIR__ . '/_core/init.php';

    /*


    if ($db){    
    echo "Veritabanı bağlantınız yapıldı. </br>";
    } 

    if ($spl_autoload) {
    echo "Autoload çalışıyor </br>";
    }

    if ($helpersFile){
    echo "Helper dosyaları yüklendi..</br>";
    }

    */

    
    require Controller::app(route(0));
?>
