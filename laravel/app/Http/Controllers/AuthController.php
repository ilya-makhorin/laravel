<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(){
        return
            '        <h1 style ="text-align:center">Авторизация пользователя</h1>
<input type="text" placeholder="Имя"></br>
<input type="password" placeholder="Пароль">
        ';
    }
}
