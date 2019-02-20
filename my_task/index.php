<?php

require __DIR__ . '/control.php';
require __DIR__ . '/model.php';
require __DIR__ . '/controller.php';
require __DIR__ . '/route.php';
require __DIR__ . '/main.php';
require __DIR__ . '/login.php';
Route::run('/', function () {
    echo 'merhaba!';
});
Route::run('/controller', 'controller@create');
Route::run('/controller', 'controller@login');
Route::run('/uyeler', 'uyeler@post', 'post');
Route::run('/uye/{url}', 'uye@index');
Route::run('/profil/sifre-degistir', 'profile/changepassword@index');

?>