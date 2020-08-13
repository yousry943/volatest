<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;


use App\Bank;
use App\currency_account;
use App\deposit_bank;
use App\transactions_request;
use App\type_account;
use App\user_bank_account;
use App\withdrow_bank;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::count();
        $comments = Comment::count();
        $tags = Tag::count();
        $categories = Category::count();

        return view('home', get_defined_vars());
    }


    public function  test()
    {
      $hotels = user_bank_account::with('get_user','get_bank','get_currency','get_type_account','get_deposit','get_withdrow_bank','transactions_request.get_to_user_bank_account_id.get_bank')->get();



      dd($hotels);
    }
}
