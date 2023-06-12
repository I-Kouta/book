<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;

class BooksController extends Controller
{
    public function hello(){
        echo "hello world!<br>";
        echo "コントローラーを使ったルーティングです";
    }

    public function index(){
        $books = Book::with("author")->get();
        return view("books.index", compact("books"));
    }

    public function createForm(){
        $authors = Author::get();
        return view("books.createForm", compact("authors"));
    }

    public function bookCreate(Request $request){
        // dd($request);
        $author_id = $request->input("author_id");
        $title = $request->input("title");
        $price = $request->input("price");
        Book::create([
            'author_id' => $author_id,
            'title' => $title,
            'price' => $price
        ]);
        return redirect("/index");
    }
}
