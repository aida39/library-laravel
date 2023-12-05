@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection
<!-- <style>
    svg.w-5.h-5 {
        width: 30px;
        height: 30px;
    }
</style> -->
@section('content')
<div class="">
    <a class="" href="/add">
        新規登録
    </a>
</div>
<div>
    <form action="/search" method="get">
        @csrf
        <label for="title">タイトル：</label><input type="text" id="title" name='keyword'>
        <label for="publisher">出版社：</label><input type="text" id="publisher" name='publisher'>
        <!-- <input type="hidden" name='id'> -->
        <button>検索</button>
    </form>
</div>
<table>
    <th>ID</th>
    <th>タイトル</th>
    <th>出版社</th>
    @foreach($books as $book)
    <tr>
        <td>{{$book['id']}}</td>
        <td>{{$book['title']}}</td>
        <td>{{$book['publisher']}}</td>
        <td>
            <a class="" href="/edit/?id={{$book['id']}}">編集</a>
        </td>
        <td>
            <a class="" href="/delete/?id={{$book['id']}}">削除</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection