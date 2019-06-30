<?php

if (!route(1)){
    $route[1] = 'index';
}

if (!file_exists(Controller::admin(route(1)))){
    $route[1] = 'index';

}

if (!session('user_rank') || session('user_rank')== 3 ){
    $route[1] = 'login';
}

require Controller::admin(route(1));