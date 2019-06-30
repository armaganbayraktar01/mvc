<?php

## Tags Bilgileri
$meta = [
    'site_title' => 'CMSBLOG | Login',
    'site_desc' => 'Login Page',
    'site_keyw' => 'login, user, account'
];
# Tags Bilgileri


## POST İŞLEMLERİ
if (post('submit'))
{
	$user_name = post('user_name');
    $user_password = post('user_password');
}

## POST KONTROLLERİ VE LOGİN İŞLEMLERİ
if (post('submit')) {

    // KONTROLLER
    if (!$user_name) {
        $error = 'Kullanıcı adı alanı boş bırakılamaz!';
    } elseif (!$user_password) {
        $error = 'Şifre alanı boş bırakılamaz.';
    } else {
        $user_url = permalink($user_name);
        //$user_password = password_hash($user_password, PASSWORD_DEFAULT);

        $usersR = Users::existsUser($user_name);

        if ($usersR){
            
            # Üyenin Veritabanındaki şifresi ile girdiği şifrenin Kontrolü 
                $user_password_hash = $usersR['user_password'];
                $password_verify = password_verify($user_password, $user_password_hash);

                if ($password_verify) {
                    $success = $user_name . ' giriş başarılı. Yönlendiriliyorsunuz.';
                   
                    Users::loginUser($usersR);

                    header('Refresh:2; url=' . Url::site());

                }else {
                    $error = 'Şifreniz hatalı. Lütfen tekrar deneyin.';
                }

            # //Üyenin Veritabanındaki şifresi ile girdiği şifrenin Kontrolü 
        } else {
            $error = $user_name . ' adında bir kullanıcı veritabanımızda kayıtlı değildir.';
        }
    }
}

require View::app("_layouts/login");