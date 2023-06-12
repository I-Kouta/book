<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorsController extends Controller
{
    public function authorCreate(Request $request){
        $name = $request->input('authorName');
        Author::create(['name' => $name]);
        return back();
    }
}
