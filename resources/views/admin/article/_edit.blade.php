@extends('layouts.panels')

@section('panels')
<div class="panel panel-default">
    <div class="panel-heading">Edit of {{ $article->title }}</div>

    <form action="{{ url('/admin/article/' . $article->id) }}" method="post">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}

        <article-form raw="{{ $article }}"></article-form>

        <div class="panel-body">
            <button type="submit" class="btn btn-primary">Edit the article</button>
        </div>
    </form>

    <div class="panel-footer">
        <a href="{{ url('/admin') }}">Admin</a>
    </div>
</div>
@endsection
