<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
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


    // public function add_diary(Request $request){
        
    //     $diary = new Media;
    //     $diary->user_id = session()->get('user')['id'];
    //     $diary->fill($request->all());
    //     $diary->save();
    //     return redirect()->back()->with('status','Memory has been saved.');

    // }

    public function add_memory(Request $request){
        
        $diary = new Media;
        $diary->user_id = session()->get('user')['id'];
        $diary->fill($request->all());
        $diary->save();
        return redirect()->back()->with('status','Memory has been saved.');

    }

    public function media_objects(Request $request){
        $data = array();

        $validator = Validator::make($request->all(),[
            'files.*' => 'required|mimes:png,jpg,jpeg,gif,mp4|max:25000'
        ]);

        if($validator->fails()){
            $data['success'] = 0;
            $data['error'] = $validator->errors()->first('files');
        }
        else if($request->file('files')){
            $files = $request->file('files');
            $filename = time().'_'.$files[0]->getClientOriginalName();
            $extension = $files[0]->getClientOriginalExtension();
            $files->move('media_objects',$filename);
            $file_url = url('media_objects/',$filename);
            $file_size = $files[0]->getSize();
        }

        // dd($request->all());
        dd($data);
    }
}
