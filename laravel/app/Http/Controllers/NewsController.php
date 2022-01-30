<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\returnValue;

class NewsController extends Controller
{

    private   $news_title = [
        ['id'=> 'newsrus',
            'title'=> 'Новости России'],
        ['id'=> 'newsworld',
            'title'=> 'Новости Mира'],
        [ 'id'=> 'newsregion',
            'title'=> 'Новости Pегиона']
                      ];
    public function news(){
        $news = DB::select('SELECT id_name, title from news_category');
        return view('news',['news'=>$news]);
    }
    public function newsworld(){
        $newsworld = DB::select('SELECT title,content from news where id="2"');
        return view('newsworld',['newsworld'=>$newsworld]);
    }
    public function newsrus(){
        $newsrus = DB::select('SELECT title,content from news where title="Новости России"');
        return view('newsrus',['newsrus'=>$newsrus]);
    }
    public function newsregion(){
        $newsregion = DB::select('SELECT title,content from news where title="Новости Санкт-Петербурга"');
        return view('newsregion',['newsregion'=>$newsregion]);
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
