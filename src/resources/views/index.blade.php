@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection
@section('content')
<div class="">
    <a class="" href="/add">
        新規登録
    </a>
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