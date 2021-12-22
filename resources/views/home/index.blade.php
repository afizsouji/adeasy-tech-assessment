@extends('master')

@section('title')
    @include('title')
@endsection

@section('scripts')
    <script data-purpose="JS constants">
        const URL_HOME_GET = "{{ route('home_page')}}";
    </script>
    <script src="/js/homepage.js"></script>
@endsection

@section('content')
    @include('home.content')
@endsection
