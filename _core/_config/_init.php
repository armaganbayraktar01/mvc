<?php

// session oturumunu başlatıyoruz
session_start();
ob_start();

// Tarih ve zamanı ayarladık
date_default_timezone_set('Europe/Istanbul');

// Hata mesajlarını açtık.
error_reporting(E_ALL);
ini_set('display_errors', 1);
