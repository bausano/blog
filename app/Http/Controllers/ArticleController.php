<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\Http\Requests\StoreArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('deleted', false)->get();

        return view('admin.article._list', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article._create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request)
    {
        $tags = explode(" ", trim($request->tags));

        $request->request->remove('tags');

        $request->request->add(['user_id' => Auth::id()]);

        $article = Article::create($request->all());

        Tag::addAll($tags, $article);

        $request->session()->flash('status', 'Article was successfully added.');

        return redirect()->action('ArticleController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return redirect()->route('article', ['article' => $article->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article._edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticle $request, Article $article)
    {
        $article->update($request->all());

        $request->session()->flash('status', 'Article was successfully updated.');

        return redirect()->action('ArticleController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Article $article)
    {
        $article->delete();

        $request->session()->flash('status', 'Article was successfully deleted.');

        return back();
    }
}
