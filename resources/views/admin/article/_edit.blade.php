@extends('layouts.panels')

@section('panels')
<div class="panel panel-default">
    <div class="panel-heading">Edit of {{ $article->title }}</div>

    <form action="{{ url('/admin/article/' . $article->id) }}" method="post">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <div class="panel-body">
            <input type="text" name="title" value="{{ $article->title }}"
                placeholder="Title" class="form-control">
        </div>
        <div class="panel-body">
            <input type="text" name="subtitle" value="{{ $article->subtitle }}"
                placeholder="Subtitle" class="form-control">
        </div>
        <div class="panel-body">
            <textarea name="description"
                placeholder="Description"
                class="form-control">{{ $article->description }}</textarea>
        </div>
        <div class="panel-body">
            <textarea name="body"
                placeholder="HTML body"
                class="form-control" rows="15">{{ $article->body }}</textarea>
        </div>
        <div class="panel-body">
            <button type="submit" class="btn btn-primary">Edit the article</button>
        </div>
    </form>

    <div class="panel-footer">
        <a href="{{ url('/admin') }}">Admin</a>
    </div>
</div>
@endsection
