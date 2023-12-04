<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::Paginate(10);
        return view('index', compact('books'));
    }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $author = $request->only(['name']);
        // $item = Author::where('name', $request->input)->first();
        // $thing = Author::where('id', $author)->first();
        Author::create($author);
        $items = Book::with('author')->first();
        $book = $request->only(['title', 'publisher']);
        Book::create($book, $items);
        return redirect('/')->with('message', '図書を追加しました');
    }
    public function edit(Request $request)
    {
        $book = Book::find($request->id);
        return view('edit', compact('book'));
    }
    public function update(Request $request)
    {
        $book = $request->all();
        unset($book['_token']);
        Book::find($request->id)->update($book);
        return redirect('/')->with('message', '図書を編集しました');
    }
    public function delete(Request $request)
    {
        $book = Book::find($request->id);
        return view('delete', compact('book'));
    }
    public function remove(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/')->with('message', '図書を削除しました');
    }
}
