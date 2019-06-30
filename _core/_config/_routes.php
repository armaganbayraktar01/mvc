<?php

# site adresinden sonraki dosya yolunu ve GET değerleri ile beraber alalım:
$request_uri = $_SERVER['REQUEST_URI']; // dirname/basename.php?id=1

# get değerlerinden önceki kısımı alalım (? öncesi)
$routeExplode = explode('?', $request_uri); 

// $routeExplode[0]) => dirname/basename.php
 
# dirname'i silip link yapısını https://localhost/basename.php haline getirelim.
$route = array_filter(explode('/', $routeExplode[0])); // $route =>  // Array ( [0] => dirname [1] => basename.php )

if (SUBFOLDER === true){
    array_shift($route);  // dizinin ilk elemanını [0] => dirname sildik
}

/** $route =>  ilk eleman Array ( [0] => basename.php )   oldu */

/** $basename = route(0); */

// request_uri olarak biz https://localhost/ gönderirsek yani basename olmadan gönderirsek

if (!route(0)){
    $route[0] = 'index';  //  basename yok, controllers içindeki index.php açılacak
}

// request_uri olarak biz https://localhost/olmayansayfa.php gönderirsek yani controllers da olmayan bir basename gönderirsek

if (!file_exists(Controller::app(route(0)))){
    $route[0] = '404'; //  cms/app/controller/app.php
}


if (settings('maintenance_mode') == 1 && (route(0) !== 'admin')){
    $route[0] = 'maintenance-mode';
}

if (!route(1)){
    $route[1] = 'index';
}

if (!file_exists(Controller::admin(route(1)))){
    $route[1] = 'index';

}



if (!session('user_rank') || session('user_rank')== 3 ){
    $route[1] = 'login';
}
