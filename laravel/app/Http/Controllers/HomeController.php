<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
       return
'        <h1 style ="text-align:center">Категории:</h1>
         <ul>
   <a href="/auth"><li style ="font-size:32px">Авторизация</li></a>
   <a href="/news"><li style ="font-size:32px">Новости</li></a>
  </ul>
';
   }
}
