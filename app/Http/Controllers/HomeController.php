<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::all()->load(['user']);

        $id = $articles->last()->id;

        return view('welcome', compact('id', 'articles'));
    }

    public function article(Request $request, Article $article)
    {
        $articles = Article::all()->load(['user']);

        $id = $article->id;

        return view('welcome', compact('id', 'articles'));
    }
}
