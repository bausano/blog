@extends('admin.layouts.panels')

@section('panels')
<div class="panel panel-default">
    <div class="panel-heading">Articles</div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    @foreach ($articles as $article)
        <div class="panel-body article-row">
            <span class="id">{{ $article->id }}</span>
            <span class="title">
                <a href="{{ url('/admin/article/'. $article->id .'/edit') }}">
                    {{ $article->title }}
                </a>
            </span>
            <span class="action">
                <a href="{{ route('article', ['article' => $article->id]) }}"
                    target="_blank">
                    <i class="fa fa-link fa-lg"></i>
                </a>
            </span>
            <span class="action">
                <form action="{{ url('/admin/article', ['id' => $article->id]) }}"
                    method="post" id="article_{{ $article->id }}-form">
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <button type="submit">
                        <i class="fa fa-trash fa-lg"></i>
                    </button>
                </form>
            </span>
        </div>
    @endforeach

    <div class="panel-body article-row">
        <span class="id"></span>
        <span class="title">
            <a href="{{ url('/admin/article/create') }}">Create a new article</a>
        </span>
        <span class="action"></span>
        <span class="action">
            <a href="{{ url('/admin/article/create') }}">
                <i class="fa fa-plus fa-lg"></i>
            </a>
        </span>
    </div>

    <div class="panel-footer">
        <a href="{{ url('/admin') }}">Admin</a>
    </div>
</div>
@endsection
