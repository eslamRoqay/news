<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['customers'] = User::count();
        $data['posts'] = Post::count();
        $newest_customers = User::orderBy('created_at', 'desc')->take(5)->get();
        return view('home',compact('data','newest_customers'));
    }
}
