@extends('frontend.layouts.app')

@section('content')
    <div id="app">
        <blog load="{{ $id }}" raw="{{ $articles }}"></blog>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
