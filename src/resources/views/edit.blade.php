@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection
@section('content')
編集ページ
<form action="/edit" method="post">
    @csrf
    <label for="title">タイトル：</label><input type="text" id="title" name='title' value="{{$book['title']}}">
    <label for="publisher">出版社：</label><input type="text" id="publisher" name='publisher' value="{{$book['publisher']}}">
    <input type="hidden" name='id' value="{{$book['id']}}">
    <button>更新</button>
</form>
@endsection