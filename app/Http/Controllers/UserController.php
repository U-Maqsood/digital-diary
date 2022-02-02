<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(){
        
        if(session()->has('user')){

            $memories = Media::where('user_id',session()->get('user')['id'])->get();
            return view('dashboard',['memories'=>$memories]);

        }
        else {
            return view('login');
        }
        
    } 

    public function login(Request $req){
        
        $email = $req->email;
        $password = $req->password;
        $user = User::where(['email'=>$email])->first();
        if(!$user || !Hash::check($password,$user->password)){
            return redirect(route('index'))->with('status','Email or Password is not Correct!');
        } else {
            session()->put('user',$user);
            return redirect(route('dashboard'));
        }
    }

    public function signUpIndex(){
        return view('signup');
    }

    public function signup(Request $req){
        
        $db_email = User::where('email',$req->email)->first();
        if($db_email != null){
            $db_email = $db_email->email;
        }
    
        if(!$req->name || !$req->email || !$req->password || !$req->verify_password) {
            return redirect()->back()->with('status','All fields must be filled!');
        } 
        elseif ($req->email == $db_email) {
            return redirect()->back()->with('status','Email already registered!');
        }
        elseif ($req->password != $req->verify_password) {
            return redirect()->back()->with('status','Password does not match!');
        }  
        else {
            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->save();
            session()->put('user',$user);
            return redirect(route('dashboard'));
        }
    }

    public function logout(){
        session()->pull("user");
        return redirect(route('dashboard'));
    }

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function redirectGoogleCallback(){
        $user = Socialite::driver('google')->user();

        $user = User::firstOrCreate([
            'email' => $user->email
        ],[
            'password' => Hash::make(Str::random(24)),
            'name' => $user->name,
        ]);

        session()->put('user',$user);
        return redirect(route('index'));
    }

    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function redirectFacebookCallback(){
        $user = Socialite::driver('facebook')->user();

        $user = User::firstOrCreate([
            'email' => $user->email
        ],[
            'name' => $user->name,
            'password' => Hash::make(Str::random(24)),
        ]);

        session()->put('user',$user);
        return redirect(route('index'));
        
    }

}
