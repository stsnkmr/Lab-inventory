<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books = Book::sortable()->paginate(10);
        return view('books.index', compact('books'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\BookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $book = new Book();
        $book->fill($request->validated());
        $book->save();
        return redirect()->action('BookController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param   Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BookRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, Book $book)
    {
        $book->fill($request->validated());
        $book->save();
        return redirect()->action('BookController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->action('BookController@index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function choose()
    {
        return view('books.choose');
    }

    public function create_with_form()
    {
        $book = new Book();
        return view('books.create.create_with_form', compact('book'));
    }

    public function create_with_barcode()
    {
        return view('books.create.create_with_barcode');
    }

    public function search(Request $request)
    {
        $search_type = $request->search_type;
        $keyword = $request->keyword;
        if (!isset($keyword)){
            return redirect()->action('BookController@index');
        }
        $books = Book::where($search_type, 'LIKE', "%{$keyword}%")
        ->orderBy('id', 'asc')
        ->paginate(10);

        return view('books.search', compact('books'));
    }
}
