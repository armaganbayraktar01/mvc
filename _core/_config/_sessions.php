<?php

function session($name){
    return isset($_SESSION[$name]) ? $_SESSION[$name] : FALSE;
}

if (!session('user_rank') || session('user_rank')== 3 ){
    $route[1] = 'login';
}


function user_ranks($rankId = null){
    $ranks = [
        '1' => 'Admin',
        '2' => 'Editor',
        '3' => 'Üye'
    ];

    return $rankId ? $ranks[$rankId] : $ranks;
}

function permission($url, $action){
    $permissions = json_decode(session('user_permissions'), true);
    if (isset($permissions[$url][$action]))
        return true;
    return false;
}

function permission_page(){
    die('Bu bölümü görüntüleme yetkiniz yok!');
    exit;
}