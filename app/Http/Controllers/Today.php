<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Today extends Controller
{
    public function index(){
        return view('today_index');
    }

    public function private(){
        return view('private');
    }

    public function item(){
        return view('item');
    }

    public function storeitem(Request $request){
        $request->validate([
            'titre' => "required | min:3 | max:50",
            'date_limite' => "required | min:1 | max:30"
        ]);

        $todo = new todo();
        $todo->titre = $request->input('titre');
        $todo->description = $request->input('description');
        $todo->date_limite = time()+24*$request->input('date_limite');
        $todo->user_id = Auth::id();
        $todo->save();

        return redirect("/private");

    }
}
