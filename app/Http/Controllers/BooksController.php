<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function hello(){
        echo "hello world!<br>";
        echo "コントローラーを使ったルーティングです";
    }
}
