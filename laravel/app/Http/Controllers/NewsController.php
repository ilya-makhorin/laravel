<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnValue;

class NewsController extends Controller
{

    private   $news_title = [
        ['id'=> 'newsrus',
            'title'=> 'Новости России'],
        ['id'=> 'newsworld',
            'title'=> 'Новости мира'],
        [ 'id'=> 'newsregion',
            'title'=> 'Новости региона']
                      ];
    public function news(){
        return view('news',['news_title'=>$this->news_title]);
    }
    public function newsworld(){
        return view('newsworld',['news_title'=>$this->news_title]);
    }
    public function newsrus(){
        return view('newsrus',['news_title'=>$this->news_title]);
    }
    public function newsregion(){
        return view('newsregion',['news_title'=>$this->news_title]);
    }
    public function create(Request $request)
    {
            $title = $request->input('title');
            $description = $request->input('description');
            return response()->redirectToRoute('news::new');
    }
    public function new(){
        return view('news.create');
    }
}
