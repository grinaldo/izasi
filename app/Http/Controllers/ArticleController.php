<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::published()->orderBy('created_at')->paginate(6);
        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show($slug)
    {
        
    }
}
