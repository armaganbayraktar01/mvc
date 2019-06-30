<?php

// Class'ları otomatik yükleten fonksiyonumuz.

    function loadClasses($classname) {
        require PATH . '/models/classes/' . strtolower($classname) . '.php';
    }

    $spl_autoload = spl_autoload_register('loadClasses');
