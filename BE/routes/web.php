<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $books = Book::all();
    return view('User.home', compact('books'));
});
