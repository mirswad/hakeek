<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;




class MainController extends Controller
{
    
    public function home(){

        return view('main/home');
    }


    public function register(){
        $currentURL = \URL::current();
        $check = explode('/', $currentURL);
        if($check[3] == 'c'){
            return view('main/register', ['company' => true]);
        }else{
            return view('main/register', ['company' => false]);
        }
      
        
        
    }

    public function post_register(Request $request){
        //validation
        $validateData = $request->validate([
            'name' => 'required|min:5|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'

        ]);

        //Hashing the password
        $password = Hash::make($request->password);
        
        User::create(['password' => $password] + 
         $validateData );

        Session::flash('message', 'Successfully Registered!');
        return redirect('login');
    }

    public function login(){
        return view('main/login');
    }




    public function post_login(Request $request){
            $validateData = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
               
                if(Auth::user()->user_type == 'a'){
                    return redirect()->route('admin.dashboard')
                    ->withSuccess('Signed in');
                    echo "admin";
                }elseif(Auth::user()->user_type == 'g'){
                    return redirect('/')
                    ->withSuccess('Signed in');
                }
               
               
                // return redirect()->intended('dashboard')
                           // ->withSuccess('Signed in');
            }
            return redirect("login")->with('message','Login details are not valid');

    }



    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }







}
