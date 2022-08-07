<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mainController extends Controller
{
    public function home(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> get();

        return view('home', ['data'=>$data]);
    }

    public function classicCategory(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> where('books.category_id', '1')
        -> get();

        return view('classicCategory', ['data'=>$data]);
    }

    public function fantasyCategory(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> where('books.category_id', '2')
        -> get();

        return view('fantasyCategory', ['data'=>$data]);
    }

    public function horrorCategory(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> where('books.category_id', '3')
        -> get();

        return view('horrorCategory', ['data'=>$data]);
    }

    public function historicalCategory(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> where('books.category_id', '4')
        -> get();

        return view('historicalCategory', ['data'=>$data]);
    }

    public function literaryCategory(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> where('books.category_id', '5')
        -> get();

        return view('literaryCategory', ['data'=>$data]);
    }

    public function romanceCategory(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> where('books.category_id', '6')
        -> get();

        return view('romanceCategory', ['data'=>$data]);
    }

    public function shortStoriesCategory(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> where('books.category_id', '7')
        -> get();

        return view('shortStoriesCategory', ['data'=>$data]);
    }

    public function suspenseCategory(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> where('books.category_id', '8')
        -> get();

        return view('suspenseCategory', ['data'=>$data]);
    }

    public function thrillersCategory(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> where('books.category_id', '9')
        -> get();

        return view('thrillersCategory', ['data'=>$data]);
    }

    public function biographiesCategory(){
        $data = DB::table('books')
        -> join('details', 'books.id', '=', 'details.book_id')
        -> where('books.category_id', '10')
        -> get();

        return view('biographiesCategory', ['data'=>$data]);
    }


    public function contact(){
        return view('contact');
    }

    public function detail(){
        return view('detail');
    }
}
