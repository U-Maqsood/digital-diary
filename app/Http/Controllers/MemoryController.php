<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use Illuminate\Http\Request;

class MemoryController extends Controller
{

    public function new_diary(){
        if(session()->has('user')){
            return view('new_diary');
        }
        else {
            return view('login');
        }
    }

    public function new_memory(){
        if(session()->has('user')){
            return view('new_memory');
        }
        else {
            return view('login');
        }
    }


    public function add_diary(Request $request){
        
        $memory = new Memory;
        $memory->user_id = session()->get('user')['id'];
        $memory->fill($request->all());
        $memory->save();
        return redirect()->back()->with('status','Memory has been saved.');

    }
}
