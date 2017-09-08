@extends('layouts.panels')

@section('panels')
<div class="panel panel-default">
    <div class="panel-heading">Add a new article</div>

    <form action="{{ url('/admin/article') }}" method="post">
        {!! csrf_field() !!}
        {!! method_field('POST') !!}
        <div class="panel-body">
            <input type="text" name="title"
                placeholder="Title" class="form-control">
        </div>
        <div class="panel-body">
            <input type="text" name="subtitle"
                placeholder="Subtitle" class="form-control">
        </div>
        <div class="panel-body">
            <textarea name="description"
                placeholder="Description" class="form-control"></textarea>
        </div>
        <div class="panel-body">
            <textarea name="body"
                placeholder="HTML body"
                class="form-control"
                rows="15">@include('admin.article._skeleton')</textarea>
        </div>
        <div class="panel-body">
            <button type="submit" class="btn btn-primary">Add a new article</button>
        </div>
    </form>

    <div class="panel-footer">
        <a href="{{ url('/admin') }}">Admin</a>
    </div>
</div>
@endsection
