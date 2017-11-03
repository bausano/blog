<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::where('deleted', false)->get()->load(['user']);

        $id = false;

        if ($articles->count() > 0) {
            $id = $articles->last()->id;
        }

        return view('welcome', compact('id', 'articles'));
    }

    public function article(Request $request, Article $article)
    {
        $articles = Article::where('deleted', false)->get()->load(['user']);

        $id = $article->id;

        return view('welcome', compact('id', 'articles'));
    }
}
