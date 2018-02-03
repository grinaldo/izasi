<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::published()->orderBy('created_at', 'DESC')->paginate(6);
        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show($slug)
    {
        $article = Article::where('slug', '=', $slug)->first();
        if (empty($article) || is_null($article)) {
            session()->flash(NOTIF_DANGER, 'No article found!');
            return redirect()->route('articles.index');
        }
        $articleOthers = Article::where('slug', '!=', $slug)->inRandomOrder()->take(4)->get();
        return view('articles.show', [
            'article'    => $article,
            'others'     => $articleOthers,
            'updateTime' => new Carbon($article->updated_at)
        ]);
    }
}
