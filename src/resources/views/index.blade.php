@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection
<style>
    svg.w-5.h-5 {
        /*paginateメソッドの矢印の大きさ調整のために追加*/
        width: 30px;
        height: 30px;
    }
</style>
@section('content')
@if (session('message'))
<div class="">
    {{ session('message') }}
</div>
@endif
<div class="">
    <a class="" href="/add">
        新規登録
    </a>
</div>
<table>
    <th>ID</th>
    <th>タイトル</th>
    <th>著者</th>
    <th>出版社</th>
    @foreach($books as $book)
    <tr>
        <td>{{$book['id']}}</td>
        <td>{{$book['title']}}</td>
        <td>{{$book['name']}}</td>
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
{{ $books->links() }}
@endsection