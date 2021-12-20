<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{

    public function home(Request $request){
        $url = $request->path();
        $articles = Article::orderBy('created_at')->get()->reverse()->take(6);
        $default_im = 'default_im.png';

        return view('home', ['articles' => $articles, 'default_im'=> $default_im,'url' => $url]);

    }

    public function index(Request $request){
        $url = $request->path();
        $articles = DB::table('articles')->latest()->paginate(10);
        $articles->withPath('articles');
        $default_im = 'default_im.png';
        return view('index', ['articles' => $articles, 'default_im'=> $default_im,'url' => $url]);

    }

    public function show($slug, Request $request ){
        $url = $request->path();
        $article = Article::where('slug', $slug)->get()[0];
        $default_im = 'default_im.png';

        return view('show', ['article' => $article, 'default_im'=> $default_im,'url' => $url]);

    }
}
