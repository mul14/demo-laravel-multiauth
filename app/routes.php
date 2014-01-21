<?php

Route::get('/', function()
{
    $credentials = Auth::kumis()->attempt([
        'username' => 'admin',
        'password' => '1234'
    ]);

    if ($credentials) {
        return 'Berhasil Login';
    }

    return 'Gagal login';
});

