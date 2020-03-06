<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $users = User::with('relatedTodoItem')->find(Auth::id())->get();
        $items = TodoItem::where('user_id', '=', Auth::id())->get();
        return view('home')->with('items',$items)->with('users',$users);
    }

    public function create(Request $request)
    {
        return view('create');
    }
}
