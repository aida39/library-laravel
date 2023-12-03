@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection
@section('content')
以下の内容を削除します。よろしいですか？
<form action="/delete" method="post">
    @csrf
    <table>
        <th>ID</th>
        <th>タイトル</th>
        <th>出版社</th>
        <tr>
            <td>{{$book['id']}}</td>
            <td>{{$book['title']}}</td>
            <td>{{$book['publisher']}}</td>
            <td>
                <button>削除</button>
            </td>
        </tr>
    </table>
    <input type="hidden" name='title' value="{{$book['title']}}">
    <input type="hidden" name='publisher' value="{{$book['publisher']}}">
    <input type="hidden" name='id' value="{{$book['id']}}">
</form>
@endsection