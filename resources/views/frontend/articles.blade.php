@extends('frontend.layouts.app')

@section('content')
<div class="container" style="margin-top: 15px;">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h2>{{ $tag }}</h2>
            <span class="label label-success">
                {{ count($articles) }} articles
            </span>
        </div>

        <ul class="list-group">
            @forelse ($articles as $article)
                <li class="list-group-item">
                    <a href="{{ url('/article/' . $article->id) }}"
                        class="col-md-4">
                        {{ $article->title }}
                    </a>

                    @forelse ($article->tags()->get() as $label)
                        <a href="{{ url('/tag/' . $label->value) }}">
                            <span class="label label-primary"
                                style="margin-left: 10px">
                                {{ $label->value }}
                            </span>
                        </a>
                    @empty
                        <span class="label label-default"
                            style="margin-left: 10px">article</span>
                    @endforelse
                </li>
            @empty
                <li class="list-group-item">
                    <i>No articles so far ...</i>
                </li>
            @endforelse
        </ul>
    </div>
</container>
@endsection
