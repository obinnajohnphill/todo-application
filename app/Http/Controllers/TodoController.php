<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function add_todo(Request $request){
       TodoItem::create(array(
            'item' => $request['item'],
             'date_required' => $request['date_required'],
             'priority' => $request['priority'],
        ));
        return redirect('/create')->with('success', 'Awesome!, you have successfully added a TODO item');
    }

    function delete_todo(Request $request){

    }
}
