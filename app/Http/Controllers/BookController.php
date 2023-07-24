<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Number;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        $users = User::all();
        foreach ($users as $user)
        foreach ($books as $book)
        return view('front.index', compact('books' ,'user','book'));
    }

    public function search(Request $request)
    {

        $name = $request->name;
        $books = Book::where('name', 'like', '%'.$name.'%')
            ->orderBy('name')
            ->paginate(5);
        $users = User::all();
        foreach ($users as $user)
        return view('front.index', compact('user'))
            ->with('books', $books );
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys = Category::all();
        return view('front.newbook', compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $books = Book::all();
        foreach($books as $item) {
            if($item->name === $request->name && $item->author_name === $request->author_name)
            {
                $number = $item->number+$request->number;
                $item->update(['number'=>$number]);

            }else{
                Book::create($request->all());
                break;
            }
        }
        return redirect()->route('new');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        dd(1);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
