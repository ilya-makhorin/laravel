<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    private   $news = [
        ['id'=> 'newsrus',
            'title'=> 'Новости России'],
        ['id'=> 'newsworld',
            'title'=> 'Новости мира'],
        [ 'id'=> 'newsregion',
            'title'=> 'Новости региона']
                      ];
    public function news(){
        return view('news',['news'=>$this->news]);
    }
    public function newsworld(){
        return view('newsworld',['news'=>$this->news]);
    }
    public function newsrus(){
        return view('newsrus',['news'=>$this->news]);
    }
    public function newsregion(){
        return view('newsregion',['news'=>$this->news]);
    }
}
