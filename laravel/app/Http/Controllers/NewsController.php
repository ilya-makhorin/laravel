<?php

namespace App\Http\Controllers;
use App\Models\News;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\returnValue;

class NewsController extends Controller
{
    public function news(){
        $news = DB::select('SELECT id_name, title from news_category');
        return view('news',['news'=>$news]);
    }
    public function newsworld(){
        $newsworld = DB::select('SELECT title,content from news where id="1"');
        return view('newsworld',['newsworld'=>$newsworld]);
    }
    public function newsrus(){
        $newsrus = DB::select('SELECT title,content from news where where id="2"');
        return view('newsrus',['newsrus'=>$newsrus]);
    }
    public function newsregion(){
        $newsregion = DB::select('SELECT title,content from news where where id="3"');
        return view('newsregion',['newsregion'=>$newsregion]);
    }
    public function create(Request $request)
    {
        $news = new News();
        if($request->isMethod('post')){
            $news->fill($request->all());
            $news->save();
            return redirect()->route('news::allNews');
        }
        return view('news.create',[
            'news'=>$news,
            'rout'=>'news.create',
            'title'=>'add'
        ]);
    }
    public function allNews(){
        $n = DB::select('SELECT id ,title from news');
        return view('news.allNews',['n'=>$n]);
    }
    public function delete(News $news){
        $news->delete();
        return redirect()->route('news::allNews');
    }
    public function update(News $news,Request $request){
        if($request->isMethod('post')){
            $news->fill($request->all());
            $news->save();
            return redirect()->route('news::allNews');
        }
        return view('news.create',[
            'news'=>$news,
            'rout'=>'news.updateNews',
            'title'=>'update'
        ]);
    }
}

