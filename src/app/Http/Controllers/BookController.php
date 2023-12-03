<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $book = $request->only(['title', 'publisher']);
        Book::create($book);
        return redirect('/');
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
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $book = Book::find($request->id);
        return view('delete', compact('book'));
    }
    public function remove(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/');
    }
}
