<?php

function error(){
    global $error;
    return isset($error) ? $error : FALSE;
}

function success(){
    global $success;
    return isset($success) ? $success : FALSE;
}
