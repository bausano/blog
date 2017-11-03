@extends('admin.layouts.panels')

@section('panels')
<div class="panel panel-default">
    <div class="panel-heading">Menu</div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="panel-body">
        <a href="{{ url('/admin/article') }}">Articles</a>
    </div>

    <div class="panel-footer">
        <a href="{{ url('/admin') }}">Admin</a>
    </div>
</div>
@endsection
