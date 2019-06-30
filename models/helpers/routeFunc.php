<?php

//ANA DİZİNDEKİ İNDEX PHP DE YER ALIR
function route($index){
    global $route;
    return isset($route[$index]) ? $route[$index] : FALSE;
}


function settings($name){
    global $settings;
    return isset($settings[$name]) ? $settings[$name] : false;
}