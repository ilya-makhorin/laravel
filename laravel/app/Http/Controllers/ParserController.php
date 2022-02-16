<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;
class ParserController extends Controller
{
    public function index(){

        $xml = XmlParser::load('https://3dnews.ru/news/rss');
        $data = $xml->parse([
            'channel_title' => ['uses' => 'channel.title'],
            'channel_description' => ['uses' => 'channel.description'],
            'items' => ['uses' => 'channel.item[title,description,category]'],
        ]);
        dd($data);
        foreach ($data['items'] as $item) {
            $news = new News();
            $news->title = $item['title'];
            $news->content = $item['description'];
            $news->save();
        }
    }

}

