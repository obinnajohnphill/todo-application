<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    function add_todo(Request $request){
       TodoItem::create(array(
            'item' => $request['item'],
             'date_required' => $request['date_required'],
             'priority' => $request['priority'],
             'user_id' => Auth::id()
       ));
        return redirect('/home')->with('success', 'Awesome!, you have successfully added a TODO item');
    }

    function delete_todo(Request $request){
        TodoItem::whereIn('id',json_decode($request['item_data'], true))->delete();
        return "deleted";
    }
}
