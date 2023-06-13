<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Http\Requests\BookCreateFormRequest;

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

    public function bookCreate(BookCreateFormRequest $request){
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

    public function updateForm($id){
        $books = Book::where("id", $id)->first();
        return view("books.updateForm", compact("books"));
    }

    public function update(Request $request){
        $id = $request->input("id");
        $upTitle = $request->input("upTitle");
        $upPrice = $request->input("upPrice");
        Book::where("id", $id)->update([
            'title' => $upTitle,
            'price' => $upPrice
        ]);
        return redirect("/index");
    }

    public function delete($id){
        Book::where("id", $id)->delete();
        return redirect("/index");
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if(!empty($keyword)){
            $books = Book::where('title','like', '%'.$keyword.'%')->get();
        }else{
            $books = Book::all();
        }
        return view('books.index', compact("books", "keyword"));
    }
}
