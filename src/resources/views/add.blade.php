@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection
@section('content')
新規登録ページです
<form class="" action="/add" method="post">
    @csrf
    <label for="title">タイトル：</label><input type="text" id="title" name="title">
    <label for="publisher">出版社：</label><input type="text" id="publisher" name="publisher">
    <button>作成</button>
</form>
@endsection