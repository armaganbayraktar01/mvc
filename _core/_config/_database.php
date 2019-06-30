<?php

// Veritabanı bağlantısı veriler _config.php den alınıyor

    // basicdb sınıfı ile bağlantı yapıyoruz.

        $host = $host_;
        $dbname = $dbname_;
        $dbuser = $user_;
        $dbpassword = $pass_;

    try {
        $db = new basicDb($host, $dbname, $dbuser, $dbpassword);
    } catch (PDOException $e) {
        die($e->getMessage());
    }


// PDO ile bağlantı yapmak istersek aşağıdaki kısım kullanılacak

    /*
        try {
            $db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $dbuser, $dbpassword);
            $db->query("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    */