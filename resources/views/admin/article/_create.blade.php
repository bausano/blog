@extends('admin.layouts.panels')

@section('panels')
<div class="panel panel-default">
    <div class="panel-heading">Add a new article</div>

    <form action="{{ url('/admin/article') }}" method="post">
        {!! csrf_field() !!}
        {!! method_field('POST') !!}

        <article-form></article-form>

        <div class="panel-body">
            <button type="submit" class="btn btn-primary">Add a new article</button>
        </div>
    </form>

    <div class="panel-footer">
        <a href="{{ url('/admin') }}">Admin</a>
    </div>
</div>
@endsection
