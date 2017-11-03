<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Tag;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::where('deleted', false)->get()
            ->load(['user', 'tags']);

        $id = false;

        if ($articles->count() > 0) {
            $id = $articles->last()->id;
        }

        return view('frontend.welcome', compact('id', 'articles'));
    }

    public function article(Request $request, Article $article)
    {
        $articles = Article::where('deleted', false)->get()
            ->load(['user', 'tags']);

        $id = $article->id;

        return view('frontend.welcome', compact('id', 'articles'));
    }

    public function filter($tag)
    {
        $tag = str_slug($tag);

        $tags = Tag::where('value', $tag)->get();

        $articles = [];

        foreach ($tags as $item) {
            $articles[] = $item->load(['article'])->article;
        }

        return view('frontend.articles', compact('articles', 'tag'));
    }

    public function displayAll()
    {
        $tag = "all";

        $articles = Article::all();

        return view('frontend.articles', compact('articles', 'tag'));
    }
}
